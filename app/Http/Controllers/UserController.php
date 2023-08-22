<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketReply;
use App\Models\UserRole;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Department;
use App\Models\Member;
use App\Models\Profession;
use App\Models\User;
use App\Models\Designation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\DueRequest;
use App\Models\ElectionClubs;
use App\Models\ElectionDues;
use App\Models\ElectionNoDues;
use App\Http\Requests\NoDueRequest;
use App\Models\ElectionNoDuesCertificate;
use Dompdf\Dompdf;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $data['professions'] = profession::All();
        return view('dashboard', $data);
    }

    public function profile(Request $request)
    {
        $data['user'] = Auth::user();
        $data['professions'] = profession::All();
        return view('profile', $data);
    }

    public function updateProfile(ViewUserRequest $request)
    {

        $member['name'] = $request->name;
        $userInfo['email'] = $request->email;
        $member['gender'] = $request->gender;
        $member['spouse'] = $request->spouse;
        $member['address'] = $request->address;
        $member['mobile'] = $userInfo['mobile'] = $request->home;
        $member['phone'] = $request->office;
        $member['address'] = $request->address;
        $member['whatsapp'] = $request->whatsapp;
        $dob = Carbon::createFromFormat('d/m/Y', $request->dob);
        $member['dob'] = $dob->format('Y-m-d');
        $anniversary = Carbon::createFromFormat('d/m/Y', $request->anniversary);
        $member['anniversary'] = $anniversary->format('Y-m-d');
        $member['profession'] = $request->profession;
        $member['specialization'] = $request->specialization;
        $user = Auth::user();
        User::where('id', $user->id)->update($userInfo);
        Member::where('id', $user->member_id)->update($member);
        return response()->json(['success' => 'Successfully Updated']);

    }

    /**
     * Display a listing of the departments.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function departments(Request $request)
    {
        if ($request->ajax()) {
            $data = Department::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<button type="button" name="update" class="btn btn-warning btn-mini update table_actions editbtn" href="#" data-toggle="modal" data-target="#department_model" data-id="' . $row->id . '">Edit</button>';
                    return $btn;
                })
                ->addColumn('status', function ($row) {
                    $status = $row->status ? '<span class="badge badge-success text-uppercase p-2">Open</span>' : '<span class="badge badge-danger text-uppercase p-2">Close</span>';
                    return $status;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('help.departments');
    }
    /**
     * Add departments
     *
     * @param Request $request
     *
     *
     */
    public function addDepartments(Request $request)
    {
        $data = [
            'name' => $request->department,
            'status' => $request->ticket_status,
        ];
        Department::create($data);
    }
    /**
     * edit departments.
     *
     * @param int id
     *
     * @return Response
     */
    public function editDepartments($id)
    {
        $department = Department::find($id);
        return response()->json([
            'success' => true,
            'id' => $department->id,
            'name' => $department->name,
            'status' => $department->status,
        ]);
    }
    /**
     * Update  departments.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function updateDepartments(Request $request)
    {
        $departments = [
            'name' => $request->name,
            'status' => $request->status,
        ];
        Department::where('id', $request->id)->update($departments);
        return response()->json(['success' => 'Successfully Updated']);
    }

    /**
     * Method clubsList
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function clubsList(Request $request)
    {
        if ($request->ajax()) {
            $clubs = Club::all();
            return Datatables::of($clubs)->addIndexColumn()
                ->addColumn('DT_RowIndex', function () {
                    static $index = 1;
                    return $index++;
                })
                ->addColumn('region', function ($clubs) {
                    return $clubs->zone->region->name;
                })
                ->addColumn('zone', function ($clubs) {
                    return $clubs->zone->name;
                })
                ->addColumn('club_id', function ($clubs) {
                    return $clubs->clubid;
                })
                ->addColumn('status', function ($clubs) {
                    $status = $clubs->is_active ? '<span class="badge badge-success text-uppercase p-2">Active</span>' : '<span class="badge badge-danger text-uppercase p-2">Inactive</span>';
                    return $status;
                })
                ->addColumn('view', function ($clubs) {
                    return '<a href="' . route('club.view', Crypt::encrypt($clubs->id)) . '"><i class="ti-eye"></i></a>';
                })
                ->rawColumns(['status', 'view'])->make(true);
        }
        return view('cms.clubs');
    }

    /**
     * Method clubView
     *
     * @param $encryptedId encypted club id
     *
     * @return void
     */
    public function clubView($encryptedId)
    {
        $clubId = Crypt::decrypt($encryptedId);
        $data['club'] = Club::find($clubId);
        return view('cms.clubView', $data);
    }

    /**
     * Method electionDues
     *
     * @param Request $request
     *
     * @return void
     */
    public function electionDues(Request $request)
    {
        if ($request->ajax()) {
            $dues = ElectionDues::all();
            return Datatables::of($dues)->addIndexColumn()
                ->addColumn('DT_RowIndex', function () {
                    static $index = 1;
                    return $index++;
                })
                ->addColumn('member_id', function ($dues) {
                    return $dues->member_id;
                })
                ->addColumn('name', function ($dues) {
                    return $dues->member->name;
                })
                ->addColumn('club', function ($dues) {
                    return $dues->member->club->name;
                })
                ->addColumn('view', function ($dues) {
                    return '<a class="btn waves-effect waves-light btn-primary btn-danger delete-btn" href="' . route('dues.delete', ['id' => Crypt::encrypt($dues->id)]) . '"><i class="icofont icofont-ui-delete"></i></a>';
                })
                ->rawColumns(['status', 'view'])->make(true);
        }
        return view('election.dues');
    }

    /**
     * Method addToDues
     *
     * @param DueRequest $request Due Request
     *
     * @return void
     */
    public function addToDues(DueRequest $request)
    {
        $memberid = $request->memberid;
        $dues = ElectionDues::where('member_id', $memberid)->first();
        if ($dues) {
            $data['error'] = "member id " . $memberid . " already exist.";
        } else {
            $datas = [
                'member_id' => $request->memberid,
            ];
            ElectionDues::create($datas);
            $data['success'] = "Successfully Updated";
        }
        return response()->json($data);
    }

    /**
     * Method deleteDues
     *
     * @param $id dues id
     *
     * @return void
     */
    public function deleteDues($dueId)
    {
        $dueId = Crypt::decrypt($dueId);
        $dues = ElectionDues::deleteRecord($dueId);
        if ($dues) {
            toastr()->success('Successfully Removed');
        } else {
            toastr()->error('Something Went Wrong. Can\'t delete');
        }
        return Redirect::route('dues');
    }

    /**
     * Function to list tickets.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Exception
     */
    public function tickets(Request $request)
    {
        $roleName = Auth::user()->roles()->first()->name;
        $department = Department::select('id', 'name')->get();
        if ($request->ajax()) {
            $memberId = Auth::user()->member_id;
            if ($roleName == 'superadmin' || $roleName == 'admin') {
                $data = Ticket::all();
                return DataTables::of($data)
                    ->addColumn('DT_RowIndex', function () {
                        static $index = 1;
                        return $index++;
                    })
                    ->addColumn('action', function ($row) {
                        return '<button class="btn btn-sm btn-primary view-btn" data-id="' . $row->id . '">Reply</button>';
                    })
                    ->addColumn('member', function ($row) {
                        return $row->member ? $row->member->name : null;
                    })
                    ->addColumn('status', function ($row) {
                        $status = $row->status ? '<span class="badge badge-success text-uppercase p-2">Open</span>' : '<span class="badge badge-danger text-uppercase p-2">Close</span>';
                        return $status;
                    })
                    ->editColumn('created_at', function ($row) {
                        return Carbon::parse($row->created_at)->diffForHumans();
                    })
                    ->editColumn('department', function ($row) {
                        $departmentName = Department::where('id', $row->help_department_id)->value('name');
                        return $departmentName;
                    })
                    ->editColumn('replied_by', function ($row) {
                        $data = TicketReply::select('member_id', 'reply')->where('ticket_id', $row->id)->first();
                        if ($data) {
                            $name = $data->member->name;
                            $tooltip = $data->reply; // Replace with your tooltip text
                            return '<span class="tooltip-container">' . $name . ' <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="' . $tooltip . '"></i></span>';
                        }
                        return '';
                    })
                    ->rawColumns(['action', 'status', 'replied_by', 'member'])
                    ->make(true);
            } else {
                $data = Ticket::where('member_id', Auth::user()->member_id)->get();
                return DataTables::of($data)
                    ->addColumn('DT_RowIndex', function () {
                        static $index = 1;
                        return $index++;
                    })
                    ->addColumn('member', function ($row) {
                        return $row->member->name;
                    })
                    ->addColumn('status', function ($row) {
                        $status = $row->status ? '<span class="badge badge-success text-uppercase p-2">Open</span>' : '<span class="badge badge-danger text-uppercase p-2">Close</span>';
                        return $status;
                    })
                    ->editColumn('department', function ($row) {
                        $departmentName = Department::where('id', $row->help_department_id)->value('name');
                        return $departmentName;
                    })
                    ->editColumn('created_at', function ($row) {
                        return Carbon::parse($row->created_at)->diffForHumans();
                    })
                    ->editColumn('replied_by', function ($row) {
                        $data = TicketReply::select('member_id', 'reply')->where('ticket_id', $row->id)->first();
                        if ($data) {
                            $name = $data->member->name;
                            $tooltip = $data->reply; // Replace with your tooltip text
                            return '<span class="tooltip-container">' . $name . ' <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="' . $tooltip . '"></i></span>';
                        }
                        return '';
                    })
                    ->rawColumns(['status', 'replied_by', 'member'])
                    ->make(true);
            }
        }
        return view('help.tickets')
            ->with('roleName', $roleName)
            ->with('departments', $department);
    }

    /**
     * Function to save ticket
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveTicket(Request $request)
    {
        $data = $request->post();
        $validator = Validator::make($request->all(), [
            'subject' => 'string|required',
            'help_department_id' => 'integer|required',
            'message' => 'string|required',
            'status' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $uniqueId = Str::random(10);
        $data['member_id'] = Auth::user()->member_id;
        $data['unique_id'] = $uniqueId;
        $data['status'] = 1;
        Ticket::create($data);
        return response()->json(['message' => 'Ticket created Successfully']);
    }

    /**
     * Function to view/reply ticket.
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function viewTicket($id)
    {
        $ticket = Ticket::find($id);
        $departmentName = Department::where('id', $ticket->help_department_id)->value('name');
        $replies = TicketReply::where('ticket_id', $id)->get();
        return response()->json([
            'ticket' => $ticket,
            'replies' => $replies,
            'departmentName' => $departmentName
        ]);
    }

    /**
     * Function to edit/reply ticket.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editTicket(Request $request)
    {
        if ($request->has('status')) {
            $status = $request->status;
            Ticket::where('id', $request->ticketId)->update([
                'status' => $status
            ]);
        }
        if ($request->reply) {
            $validator = Validator::make($request->all(), [
                'reply' => 'string|required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $reply = TicketReply::where('ticket_id', $request->ticketId)->first();
            if ($reply) {
                $reply = $request->reply;
                TicketReply::where('ticket_id', $request->ticketId)->update([
                    'reply' => $reply,
                    'member_id' => Auth::user()->member_id
                ]);
            } else {
                TicketReply::create(
                    [
                        'ticket_id' => $request->ticketId,
                        'member_id' => Auth::user()->member_id,
                        'reply' => $request->reply
                    ]
                );
            }
        }
        return response()->json(['success' => 'Successfully Updated']);
    }

    /**
     * Method electionNoDues
     *
     * @param Request $request
     *
     * @return void
     */
    public function electionNoDues(Request $request)
    {
        $data['clubs'] = Club::all();
        return view('election.noDues', $data);
    }

    /**
     * Method getClubMembers
     *
     * @param $clubid $clubid
     *
     * @return void
     */
    public function getClubMembers($clubid)
    {
        $data['members'] = Member::where('clubid', $clubid)->get();
        $data['club'] = ElectionClubs::where('clubid', $clubid)->first();
        return response()->json($data);
    }

    /**
     * Method getDeligates
     *
     * @param Request $request
     *
     * @return void
     */
    public function getDeligates(Request $request)
    {
        if ($request->ajax()) {
            $nodues = ElectionNoDues::whereHas('member', function ($query) use ($request) {
                $query->where('clubid', $request->clubid);
            })->where('type', 'delegate')->get();
            return Datatables::of($nodues)->addIndexColumn()
            ->addColumn('DT_RowIndex', function () {
                static $index = 1;
                return $index++;
            })
            ->addColumn('member_id', function ($nodues) {
                return $nodues->member_id;
            })
            ->addColumn('name', function ($nodues) {
                return $nodues->member->name;
            })
            ->addColumn('mobile', function ($nodues) {
                return $nodues->member->mobile;
            })
            ->addColumn('view', function ($nodues) {
                return '<a class="btn waves-effect waves-light btn-primary btn-danger delete-btn" href="' . route('nodues.delete', ['id' => Crypt::encrypt($nodues->id)]) . '"><i class="icofont icofont-ui-delete"></i></a>';
            })
            ->addColumn('valid', function ($nodues) {
                return $nodues->valid;
            })
            ->addColumn('valid_view', function ($nodues) {
                $valid ='';
                if($nodues->valid == 1) {
                    $valid = '<button class="btn waves-effect waves-light btn-primary btn-success custom-btn certificate-view-btn" data-memeberid="'.$nodues->member_id.'" data-id="'.$nodues->id.'">
                    <i class="fa fa-print" aria-hidden="true"></i></button>';
                }
                return $valid;
            })
            ->rawColumns(['view', 'valid_view'])
            ->make(true);
        }
    }

    /**
     * Method getAlternates
     *
     * @param Request $request
     *
     * @return void
     */
    public function getAlternates(Request $request)
    {
        if ($request->ajax()) {
            $nodues = ElectionNoDues::whereHas('member', function ($query) use ($request) {
                $query->where('clubid', $request->clubid);
            })->where('type', 'alternate')->get();
            return Datatables::of($nodues)->addIndexColumn()
            ->addColumn('DT_RowIndex', function () {
                static $index = 1;
                return $index++;
            })
            ->addColumn('member_id', function ($nodues) {
                return $nodues->member_id;
            })
            ->addColumn('name', function ($nodues) {
                return $nodues->member->name;
            })
            ->addColumn('mobile', function ($nodues) {
                return $nodues->member->mobile;
            })
            ->addColumn('view', function ($nodues) {
                return '<a class="btn waves-effect waves-light btn-primary btn-danger delete-btn" href="' . route('nodues.delete', ['id' => $nodues->id]) . '"><i class="icofont icofont-ui-delete"></i></a>';
            })
            ->addColumn('valid', function ($nodues) {
                return $nodues->valid;
            })
            ->addColumn('valid_view', function ($nodues) {
                $valid ='';
                if($nodues->valid == 1) {
                    $valid = '<button class="btn waves-effect waves-light btn-primary btn-success custom-btn certificate-view-btn" data-memeberid="'.$nodues->member_id.'" data-id="'.$nodues->id.'">
                    <i class="fa fa-print" aria-hidden="true"></i></button>';
                }
                return $valid;
            })
            ->rawColumns(['view', 'valid_view'])
            ->make(true);
        }
    }

    /**
     * Method deleteDues
     *
     * @param $id dues id
     *
     * @return void
     */
    public function deleteNoDues($noDueId)
    {
        $noDueId = Crypt::decrypt($noDueId);
        $nodues = ElectionNoDues::deleteRecord($noDueId);
        if ($nodues) {
            toastr()->success('Successfully Removed');
        } else {
            toastr()->error('Something Went Wrong. Can\'t delete');
        }
        return Redirect::route('nodues');
    }

    /**
     * Method noDuesUpdates
     *
     * @param NoDueRequest $request NoDueRequest
     *
     * @return void
     */
    public function noDuesUpdates(NoDueRequest $request)
    {
        if ($request->type == "delegate" || $request->type == "alternate" ) {
            $noDuesMember = ElectionNoDues::where('member_id', $request->member_id)->first();
            $noDuesCount = ElectionNoDues::whereHas('member', function ($query) use ($request) {
                            $query->where('clubid', $request->clubid);
                        })->where('type', $request->type)->count();
            if ($noDuesCount < $request->election_count) {
                if ($noDuesMember) {
                    ElectionNoDues::where('member_id', $request->member_id)->update(['type' => $request->type]);
                    $data['success'] = ucfirst($request->type).' updated succesfully';
                } else {
                    ElectionNoDues::create([
                        'member_id' => $request->member_id,
                        'type' => $request->type,
                    ]);
                    $data['success'] = ucfirst($request->type).' added succesfully';
                }
            } else {
                $data['error'] = ucfirst($request->type).' limit exceeded';
            }
        } else {
            $memberIdsWithDues = ElectionDues::whereHas('member', function ($query) use ($request) {
                $query->where('clubid', $request->clubid);
            })->pluck('member_id')->toArray();

            $membersWithoutDues = ElectionNoDues::whereHas('member', function ($query) use ($request) {
                $query->where('clubid', $request->clubid);
            })->get();

            foreach($membersWithoutDues as $row) {
                if (in_array($row->member_id, $memberIdsWithDues)) {
                    ElectionNoDues::where('member_id', $row->member_id)->update(['valid' => 2]);
                } else {
                    ElectionNoDues::where('member_id', $row->member_id)->update(['valid' => 1]);
                    $countOfNoduesmembers = ElectionNoDues::whereHas('member', function ($query) use ($request) {
                        $query->where('clubid', $request->clubid);
                    })->where('valid', '1')->count();
                    $certificateExist = ElectionNoDuesCertificate::where('member_id', $row->member_id)->count();
                    if(!$certificateExist) {
                        ElectionNoDuesCertificate::create([
                            'member_id' => $row->member_id,
                            'club_id' => $request->clubid,
                            'serial' => '#'.$request->clubid.'#'.$row->member_id.'#'.($countOfNoduesmembers),
                        ]);
                    }
                }

            }
            $data['success'] = 'Validated succesfully';
        }
        return response()->json($data);
    }

    /**
     * Method electionClubs
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function electionClubs(Request $request) {
        if ($request->ajax()) {
            $clubs = ElectionClubs::all();
            return Datatables::of($clubs)->addIndexColumn()
            ->addColumn('DT_RowIndex', function () {
                static $index = 1;
                return $index++;
            })
            ->addColumn('clubid', function ($clubs) {
                return $clubs->clubid;
            })
            ->addColumn('name', function ($clubs) {
                return $clubs->club ? $clubs->club->name : '';
            })
            ->addColumn('count', function ($clubs) {
                return $clubs->count;
            })->make(true);
        }
        return view('election.clubs');
    }

    /**
     * Method getNodueCertificate
     *
     * @param Request $request memberId
     *
     * @return void
     */
    public function getNodueCertificate(Request $request)
    {
        $memberId = $request->memberId;
        $data['noduesCertificate'] = ElectionNoDuesCertificate::where('member_id', $memberId)->first();
        return view('election.noDuesCertificate', $data);
    }

    /**
     * Method getNodueCertificatepdf
     *
     * @param Request $request $memberId
     *
     * @return void
     */
    public function getNodueCertificatepdf(Request $request)
    {
        $memberId = $request->memberId;
        $data['noduesCertificate'] = ElectionNoDuesCertificate::where('member_id', $memberId)->first();
        $html = View::make('election.noDuesCertificatePdf', $data)->render();
        $dompdf = new Dompdf();
        $dompdf->set_option('isRemoteEnabled', true);
        $dompdf->setBasePath(public_path());
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="no_dues_certificate.pdf"');
        echo $dompdf->output();
    }

    /**
     * Function to get duplicate member.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Exception
     */
    public function duplicates(Request $request)
    {
        if ($request->ajax()) {
            $duplicates = Member::select('id', 'name', 'spouse', 'profession', 'mobile', 'phone', 'whatsapp')
                ->where('mobile', '>', 0)
                ->whereIn('mobile', function ($query) {
                    $query->select('mobile')
                        ->from('members')
                        ->groupBy('mobile', 'phone')
                        ->havingRaw('COUNT(*) > 1');
                })
                ->orWhereIn('phone', function ($query) {
                    $query->select('phone')
                        ->from('members')
                        ->groupBy('mobile', 'phone')
                        ->havingRaw('COUNT(*) > 1');
                })
                ->get();

            return DataTables::of($duplicates)
                ->editColumn('DT_RowIndex', function ($row) {
                    static $index = 1;
                    return $index++;
                })
                ->editColumn('designation', function ($row) {
                    return $row->userRole ? ucfirst($row->userRole->role->name) : '';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<button type="button" name="update" class="btn btn-primary btn-mini update table_actions editbtn" href="#" data-toggle="modal" data-target="#edit_duplicate_model" data-id="' . $row->id . '">Edit</button>';
                    return $btn;
                })
                ->toJson();
        }

        return view('support.duplicates');
    }

    /**
     * Function to get member data for edit.
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function editDuplicates($id)
    {
        $member = Member::find($id);
        return response()->json([
            'success' => true,
            'id' => $member->id,
            'name' => $member->name,
            'mobile' => $member->mobile,
            'phone' => $member->phone,
            'whatsapp' => $member->whatsapp,
        ]);
    }

    /**
     * Function to edit duplicate member
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function editMember(Request $request)
    {
        $request->validate([
            'member_name' => 'required|nullable|string',
            'home' => ['required', 'regex:/^[+0-9]{10,}$/'],
            'office' => ['required', 'regex:/^[+0-9]{10,}$/'],
            'whatsapp' => ['required', 'regex:/^[+0-9]{10,}$/'],
        ]);
        Member::where('id', $request->member_id)->update([
            'name' => $request->member_name,
            'mobile' => $request->home,
            'phone' => $request->office,
            'whatsapp' => $request->whatsapp,
        ]);
        return response()->json(['success' => 'Successfully Updated']);
    }

    /**
     * Function to get all clubs.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function credentials()
    {
        $data['clubs'] = Club::all();
        return view('election.credentials', $data);
    }

    /**
     * Function to get credentials.
     * @param $club_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCredentials($club_id)
    {
        $data = ElectionNoDuesCertificate::with('member')->where('club_id', $club_id)->get();
        return response()->json($data);
    }

    /**
     * FUnction to get credential certificate.
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getCredentialCertificate($id)
    {
        $data['credentialCertificate'] = ElectionNoDuesCertificate::where('id', $id)->first();
        return view('election.credentialCertificate', $data);
    }

    /**
     * Function to get pdf.
     * @param Request $request
     */
    public function getCredentialCertificatepdf(Request $request)
    {
        $memberId = $request->memberId;
        $data['credentialCertificate'] = ElectionNoDuesCertificate::where('member_id', $memberId)->first();
        $html = View::make('election.credentialCertificatePdf', $data)->render();
        $dompdf = new Dompdf();
        $dompdf->set_option('isRemoteEnabled', true);
        $dompdf->setBasePath(public_path());
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="no_dues_certificate.pdf"');
        echo $dompdf->output();
    }

    /**
     * Method delegatesSubmittedReport
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function delegatesSubmittedReport(Request $request)
    {
        $data['clubs'] = Club::all();
        return view('election.delegatesSubmittedReport', $data);
    }

    /**
     * Method noDuesIssuedReport
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function noDuesIssuedReport(Request $request)
    {
        $data['clubs'] = Club::all();
        return view('election.noDuesIssuedReport', $data);
    }

    /**
     * Method getValidDelegates
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function getValidDelegates(Request $request)
    {
        if ($request->ajax()) {
            $nodues = ElectionNoDuesCertificate::join('members', 'election_nodues_certificate.member_id', '=', 'members.id')
            ->join('election_nodues', 'election_nodues.member_id', '=', 'members.id')
            ->where('members.clubid', $request->clubid)
            ->where('election_nodues.type','=', 'delegate')
            ->get();

            return Datatables::of($nodues)->addIndexColumn()
            ->addColumn('DT_RowIndex', function () {
                static $index = 1;
                return $index++;
            })
            ->addColumn('member_id', function ($nodues) {
                return $nodues->member_id;
            })
            ->addColumn('name', function ($nodues) {
                return $nodues->member->name;
            })
            ->addColumn('mobile', function ($nodues) {
                return $nodues->member->mobile;
            })
            ->addColumn('serial', function ($nodues) {
                return $nodues->serial;
            })
            ->make(true);
        }
    }

    /**
     * Function to list members.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Exception
     */
    public function memberList(Request $request)
    {
        if ($request->ajax()) {
            $members = Member::all();
            return Datatables::of($members)->addIndexColumn()
                ->addColumn('DT_RowIndex', function () {
                    static $index = 1;
                    return $index++;
                })
                ->addColumn('clubName', function ($members) {
                    return $members->club ? $members->club->name : '';
                })
                ->addColumn('view', function ($members) {
                    return '<a href="' . route('member.view', Crypt::encrypt($members->id)) . '"><i class="ti-pencil-alt"></i></a>';
                })
                ->rawColumns(['view'])
                ->make(true);
        }
        return view('cms.members');
    }

    /**
     * Function to view member.
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function memberView($id)
    {
        $memberId = Crypt::decrypt($id);
        $data['member'] = Member::find($memberId);
        $data['professions'] = Profession::all();
        $data['designations'] = Designation::all();
        $data['userRole'] = UserRole::where('member_id', $memberId)->first();
        $data['clubs'] = Club::all();
        return view('cms.memberView', $data);
    }

    /**
     * Function to update existing member.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateMember(Request $request)
    {
        $request->validate([
            'club' => 'required|integer',
            'member-id' => 'required|integer',
            'member-name' => 'required|string|max:255',
            'spouse' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'dob' => 'required|date',
            'anniversary' => 'required|date',
            'phone' => ['required', 'regex:/^[+0-9]{10,}$/'],
            'mobile' => ['required', 'regex:/^[+0-9]{10,}$/', 'unique:users'],
            'whatsapp' => ['required', 'regex:/^[+0-9]{10,}$/'],
            'profession' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'designation' => 'required|integer'
        ]);

        $member = Member::find($request->input('member-id'));

        if (!$member) {
            return redirect()->back()->with('error', 'Member not found.');
        }

        $member->clubid = $request->input('club');
        $member->name = $request->input('member-name');
        $member->spouse = $request->input('spouse');
        $member->gender = $request->input('gender');
        $member->dob = $request->input('dob');
        $member->anniversary = $request->input('anniversary');
        $member->phone = $request->input('phone');
        $member->mobile = $request->input('mobile');
        $member->whatsapp = $request->input('whatsapp');
        $member->profession = $request->input('profession');
        $member->specialization = $request->input('specialization');
        $member->status = $request->input('status');

        $member->save();

        if (($request->input('designation') == '1') || ($request->input('designation') == '2') || ($request->input('designation') == '10') || ($request->input('designation') == '11') || ($request->input('designation') == '12')) {
            $role_id = $request->input('designation');
        } else {
            $role_id = '6';
        }
        $userRole = UserRole::where('member_id', $request->input('member-id'))->count();
        if (empty($userRole)) {
            UserRole::create([
            'member_id' => $request->input('member-id'),
            'role_id' => $role_id,
            'designation_id' => $request->input('designation'),
            ]);
        } else {
            UserRole::where('member_id', $request->input('member-id'))->update([
            'designation_id' => $request->input('designation'),
            'role_id' => $role_id,
            ]);
        }

        return redirect()->route('members')->with('success', 'Member information updated successfully.');
    }
    /**
     * Method designation
     *
     * @param Request $request
     *
     * @return void
     */
    public function designation(Request $request)
    {
        if ($request->ajax()) {
            $desig = Designation::all();
            return Datatables::of($desig)->addIndexColumn()
                ->addColumn('DT_RowIndex', function () {
                    static $index = 1;
                    return $index++;
                })
                ->addColumn('designation', function ($desig) {
                    return $desig->desig;
                })
                ->addColumn('description', function ($desig) {
                    return $desig->description;
                })
                ->addColumn('status', function ($desig) {
                    return $desig->status;
                })
                ->addColumn('edit', function ($desig) {
                    return '<a href="' . route('designation.view', Crypt::encrypt($desig->id)) . '"><i class="ti-pencil-alt"></i></a>';
                })
                ->addColumn('delete', function ($desig) {
                    return '<a class="btn waves-effect waves-light btn-primary btn-danger delete-btn" href="' . route('designation.delete', ['id' => Crypt::encrypt($desig->id)]) . '"><i class="icofont icofont-ui-delete"></i></a>';
                })
                ->rawColumns(['edit', 'delete'])->make(true);
        }
        return view('designation.designation');
    }
    /**
     * Function to add designation
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addDesignation(Request $request)
    {
        $data = $request->post();
        $validator = Validator::make($request->all(), [
            'desig' => 'string|required',
            'description' => 'string|required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Designation::create([
            'desig' => strtoupper($data['desig']),
            'description' => ucfirst($data['description']),
            'status' => 1,
        ]);
        return response()->json(['message' => 'Designation created Successfully']);
        
    }
    /**
     * Method deleteDesignation
     *
     * @param $id designation id
     *
     * @return void
     */
    public function deleteDesignation($desigId)
    {
        $desigId = Crypt::decrypt($desigId);
        $desig = Designation::deleteRecord($desigId);
        if ($desig) {
            toastr()->success('Successfully Removed');
        } else {
            toastr()->error('Something Went Wrong. Can\'t delete');
        }
        return Redirect::route('designation');
    }
    /**
     * Function to Edit Designation.
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editDesignation($id)
    {
        $desigId = Crypt::decrypt($id);
        $data['desig'] = Designation::where('id', $desigId)->first();
        return view('designation.desigView', $data);
    }
    /**
     * Function to update existing Designation.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateDesignation(Request $request)
    {
        $request->validate([
            'designation' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $designation = Designation::find($request->input('desig-id'));

        if (!$designation) {
            return redirect()->back()->with('error', 'Designation not found.');
        }

        $designation->desig = $request->input('designation');
        $designation->description = $request->input('description');
        $designation->save();

        return redirect()->route('designation')->with('success', 'Designation updated successfully.');
    }
}
