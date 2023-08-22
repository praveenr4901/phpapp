<?php

namespace App\Http\Controllers;

use App\Jobs\SendOTP;
use App\Models\Claim;
use App\Models\Club;
use App\Models\Designation;
use App\Models\InputType;
use App\Models\Member;
use App\Models\Month;
use App\Models\Role;
use App\Models\Rule;
use App\Models\RuleApproval;
use App\Models\RuleInput;
use App\Models\UserRole;
use App\Models\Year;
use App\Services\OTPService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\partialApprovalRequest;

class RuleController extends Controller
{
    /**
     * Function to view rules.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function viewRules()
    {
        $data['data'] = Rule::where('part', 'A')->get();
        return view('rules.view', $data);
    }

    /**
     * Function to show rules view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function createRules()
    {
        $data['roles'] = Role::all();
        $data['input'] = InputType::all();
        return view('rules.create', $data);
    }

    /**
     * Function to view edit rule.
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editRule($id)
    {
        $data['roles'] = Role::all();
        $data['type'] = InputType::all();
        $data['rule'] = Rule::where('id', $id)->first();
        $data['inputs'] = RuleInput::where('rule_id', $id)->get();
        $data['approval'] = RuleApproval::where('rule_id', $id)->first();
        return view('rules.edit', $data);
    }

    /**
     * Function to get rule part data.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPartData(Request $request)
    {
        $part = $request->input('part');
        $rules = Rule::where('part', $part)->get();
        if ($rules) {
            return response()->json(['data' => $rules]);
        }
    }

    /**
     * Function to add rule.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addRule(Request $request)
    {
        $request->validate([
            'ruleId' => 'required',
            'part' => 'required',
            'rule' => 'required',
            'points' => 'required|numeric',
            'sapproval' => 'required',
            'claims' => 'required',
            'label' => 'required|array',
            'label.*' => 'required',
            'inputType' => 'required|array',
            'inputType.*' => 'required',
            'total_fields' => 'required|numeric',
            'total_points' => 'required|numeric',
            'status' => 'required',
        ]);
        $part = $request->input('part');
        $ruleId = $request->input('ruleId');
        $rule = $request->input('rule');
        $points = $request->input('points');
        $firstApproval = $request->input('fapproval');
        $secondApproval = $request->input('sapproval');
        $monthly = $request->input('claims') == 'month' ? '1' : 0;
        $yearly = $request->input('claims') == 'year' ? 1 : 0;
        $status = $request->input('status');
        $claims = $request->input('claimNos');
        $labels = $request->input('label');
        $inputTypes = $request->input('inputType');
        $totalPoints = $request->input('points') . 'x' . $request->input('total_fields') . '=' . $request->input('total_points');
        $newRule = Rule::create([
            'part' => $part,
            'rule_id' => $ruleId,
            'rule' => $rule,
            'point' => $points,
            'monthly' => $monthly,
            'yearly' => $yearly,
            'no_of_claims' => $claims,
            'total_points' => $totalPoints,
            'status' => $status
        ]);
        $newlyCreatedId = $newRule->id;
        foreach ($labels as $index => $label) {
            $inputType = $inputTypes[$index];
            RuleInput::create([
                'label' => $label,
                'type_id' => $inputType,
                'rule_id' => $newlyCreatedId
            ]);
        }
        RuleApproval::create([
            'rule_id' => $newlyCreatedId,
            'first_approval' => $firstApproval,
            'second_approval' => $secondApproval
        ]);
        toastr()->success('Successfull');
        return Redirect::route('rules');
    }

    /**
     * Function to update existing rule
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateRule(Request $request)
    {
        $request->validate([
            'ruleId' => 'required',
            'part' => 'required',
            'rule' => 'required',
            'points' => 'required|numeric',
            'fapproval' => 'required',
            'sapproval' => 'required',
            'claims' => 'required',
            'claimNos' => 'required',
            'label' => 'required|array',
            'label.*' => 'required',
            'inputType' => 'required|array',
            'inputType.*' => 'required',
            'total_fields' => 'required|numeric',
            'total_points' => 'required|numeric',
            'status' => 'required',
        ]);
        $id = $request->input('rule_id');
        $ruleId = $request->input('ruleId');
        $part = $request->input('part');
        $rule = $request->input('rule');
        $points = $request->input('points');
        $firstApproval = $request->input('fapproval');
        $secondApproval = $request->input('sapproval');
        $monthly = $request->input('claims') == 'month' ? '1' : '0';
        $yearly = $request->input('claims') == 'year' ? '1' : '0';
        $status = $request->input('status');
        $claims = $request->input('claimNos');
        $labels = $request->input('label');
        $inputTypes = $request->input('inputType');
        $totalPoints = $points . 'x' . $request->input('total_fields') . '=' . $request->input('total_points');

        $ruleToUpdate = Rule::findOrFail($id);
        $ruleToUpdate->update([
            'part' => $part,
            'rule_id' => $ruleId,
            'rule' => $rule,
            'point' => $points,
            'monthly' => $monthly,
            'yearly' => $yearly,
            'no_of_claims' => $claims,
            'total_points' => $totalPoints,
            'status' => $status
        ]);
        RuleInput::where('rule_id', $id)->forceDelete();
        foreach ($labels as $index => $label) {
            $inputType = $inputTypes[$index];
            RuleInput::updateOrCreate(
                ['rule_id' => $id, 'label' => $label],
                ['type_id' => $inputType]
            );
        }
        RuleApproval::updateOrCreate(
            ['rule_id' => $id],
            ['first_approval' => $firstApproval, 'second_approval' => $secondApproval]
        );

        toastr()->success('Rule updated successfully');
        return Redirect::route('rules'); // Redirect to the appropriate route
    }

    /**
     * Function to get accordion content.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAccordionContent(Request $request)
    {
        $ruleId = $request->input('ruleId');
        $formElements = RuleInput::where('rule_id', $ruleId)->get();
        $ruleName = Rule::select('rule_id')->where('id', $ruleId)->first();
        $formHtml = '';

        foreach ($formElements as $index => $element) {
            $formHtml .= '<div class="form-group">';
            if ($element->inputType->type == 'text' || $element->inputType->type == 'date' || $element->inputType->type == 'textarea') {
                $formHtml .= '<label for="' . $element->name . '">' . $element->label . '</label>';
                $formHtml .= '<input type="' . $element->inputType->type . '" class="form-control" id="' . $element->name . '" name="' . $element->name . '">';
            } elseif ($element->inputType->type == 'checkbox') {
                $formHtml .= '<div class="form-check">';
                $formHtml .= '<input class="form-check-input" type="checkbox" id="' . $element->name . '" name="' . $element->name . '">';
                $formHtml .= '<label class="form-check-label" for="' . $element->name . '">' . $element->label . '</label>';
                $formHtml .= '</div>';
            } elseif ($element->inputType->type == 'radio') {
                if (strpos($element->label, ',') !== false) {
                    $values = explode(',', $element->label);
                    $formHtml .= '<div class="form-check mt-1">';
                    foreach ($values as $value) {
                        $formHtml .= '<div class="form-check form-check-inline">';
                        $formHtml .= '<input class="form-check-input" type="radio" name="checkbox" id="' . $element->name . '_' . $value . '" value="' . $value . '">';
                        $formHtml .= '<label class="form-check-label" for="' . $element->name . '_' . $value . '">' . $value . '</label>';
                        $formHtml .= '</div>';
                    }
                    $formHtml .= '</div>';
                } else {
                    $formHtml .= '<label for="' . $element->name . '">' . $element->label . '</label>';
                    $formHtml .= '<div class="form-check mt-1">';
                    $formHtml .= '<div class="form-check form-check-inline">';
                    $formHtml .= '<input class="form-check-input" type="radio" name="' . $element->name . '" id="' . $element->name . '_' . $element->label . '" value="' . $element->label . '">';
                    $formHtml .= '<label class="form-check-label" for="' . $element->name . '_' . $element->label . '">' . $element->label . '</label>';
                    $formHtml .= '</div>';
                    $formHtml .= '</div>';
                }
            }

            $formHtml .= '</div>';
        }

        return response()->json(['formHtml' => $formHtml, 'rule' => $ruleName->rule_id]);
    }

    /**
     * Function to get rules view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function rulesView()
    {
        $data['rules'] = Rule::orderBy('rule_id')->get();
        return view('reports.rulesView', $data);
    }

    /**
     * Function to previous view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function previousView()
    {
        $clubId = Auth::user()->member->club->clubid;
        $data['claimedRules'] = Claim::where('club_id', $clubId)
            ->orderBy('created_at')->get();
        return view('reports.previous', $data);
    }

    /**
     * Function to list sns.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function snsList()
    {
        $clubId = Auth::user()->member->club->clubid;
        $data['sns'] = Claim::where('club_id', $clubId)
            ->where('sns', 1)
            ->orderBy('created_at')->get();
        return view('reports.sns', $data);
    }

    /**
     * Function to list claims.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function claims()
    {
        $today = Carbon::now();
        $monthNumber = $today->month;
        $currentYear = $today->year;
        $nextYear = $currentYear + 1;
        $yearId = Year::where('year', $currentYear . '-' . $nextYear)->first('id');
        $activeMonthData = Month::where('month', $monthNumber)
            ->where('year_id', $yearId->id)
            ->first(['start_date', 'end_date', 'id']);
        $startDate = Carbon::createFromFormat('Y-m-d', $activeMonthData->start_date);
        $endDate = Carbon::createFromFormat('Y-m-d', $activeMonthData->end_date);

        $activeMonths = [];

        while ($startDate->lte($endDate)) {
            $activeMonths[] = $startDate->month;
            $startDate->addMonth();
        }
        if (in_array($monthNumber, $activeMonths)) {
            unset($activeMonths[array_search($monthNumber, $activeMonths)]);
        }
        return view('reports.claims', ['activeMonths' => $activeMonths, 'yearId' => $yearId]);
    }

    /**
     * Function to claim rule.
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function claimRule(Request $request, $id)
    {
        $part = $request->input('part');
        $data['id'] = $id;
        $data['rules'] = Rule::orderBy('rule_id')->where('part', $part)->get();
        $today = Carbon::now();
        $currentYear = $today->year;
        $nextYear = $currentYear + 1;
        $year = $currentYear . '-' . $nextYear;
        $yearId = Year::where('year', $year)->first('id');
        $monthId = Month::where('month', $id)->first('id')->id;
        foreach ($data['rules'] as $rule) {
            $ruleDetails = Rule::where('id', $rule->id)->first(['monthly', 'yearly']);

            if ($ruleDetails->monthly) {
                $countClaims = Claim::where('rule_id', $rule->id)
                    ->where('month_id', $monthId)
                    ->where('year_id', $yearId)
                    ->count();
                if ($countClaims == $ruleDetails->monthly) {
                    $data['claimIactive'][$rule->id] = 1;
                } else {
                    $data['claimIactive'][$rule->id] = 0;
                }
            }
            if ($ruleDetails->yearly) {
                $countClaims = Claim::where('year_id', $yearId->id)
                    ->where('rule_id', $rule->id)
                    ->count();

                if ($countClaims == $ruleDetails->yearly) {
                    $data['claimIactive'][$rule->id] = 1;
                } else {
                    $data['claimIactive'][$rule->id] = 0;
                }
            }
        }
        $data['yearId'] = $yearId->id;
        $data['part'] = $part;
        return view('reports.ruleClaims', $data);
    }

    /**
     * Function to get rules popup.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function rulesPopup(Request $request)
    {
        $ruleId = $request->input('ruleId');
        $clubId = $request->input('clubId');
        $formElements = RuleInput::where('rule_id', $ruleId)->get();
        $ruleName = Rule::select('rule_id', 'total_points')->where('id', $ruleId)->first();
        $totalPoint = $ruleName->total_points;
        $formHtml = '';
        $claims = Claim::where('rule_id', $ruleId)
            ->where('club_id', $clubId)
            ->get('data');
        if (!$claims->isEmpty()) {
            foreach ($claims as $claim) {
                $encodedData = json_decode($claim->data, true);
                $formHtml = '';
                foreach ($formElements as $index => $element) {
                    $formHtml .= '<div class="form-group">';
                    if ($element->inputType->type == 'text' || $element->inputType->type == 'date' || $element->inputType->type == 'textarea') {
                        $formHtml .= '<label for="' . $element->name . '">' . $element->label . '</label>';
                        $formHtml .= '<input type="' . $element->inputType->type . '" class="form-control" id="' . $element->name . '" name="data[' . $element->label . ']">';
                    } elseif ($element->inputType->type == 'checkbox') {
                        $isChecked = false;
                        if (isset($encodedData[$element->label]) && $encodedData[$element->label] == 'on') {
                            $isChecked = true;
                        }

                        $formHtml .= '<div class="form-check">';
                        $formHtml .= '<input class="form-check-input" type="checkbox" id="' . $element->name . '" name="data[' . $element->label . ']"';

                        if ($isChecked) {
                            $formHtml .= ' checked';
                        }

                        $formHtml .= '>';
                        $formHtml .= '<label class="form-check-label" for="' . $element->name . '">' . $element->label . '</label>';
                        $formHtml .= '</div>';
                    } elseif ($element->inputType->type == 'radio') {
                        if (strpos($element->label, ',') !== false) {
                            $values = explode(',', $element->label);
                            $formHtml .= '<div class="form-check mt-1">';
                            foreach ($values as $value) {
                                $formHtml .= '<div class="form-check form-check-inline">';
                                $formHtml .= '<input class="form-check-input" type="radio" name="data[' . $element->label . ']" id="' . $element->name . '_' . $value . '" value="' . $value . '">';
                                $formHtml .= '<label class="form-check-label" for="' . $element->name . '_' . $value . '">' . $value . '</label>';
                                $formHtml .= '</div>';
                            }
                            $formHtml .= '</div>';
                        } else {
                            $formHtml .= '<label for="' . $element->name . '">' . $element->label . '</label>';
                            $formHtml .= '<div class="form-check mt-1">';
                            $formHtml .= '<div class="form-check form-check-inline">';
                            $formHtml .= '<input class="form-check-input" type="radio" name="data[' . $element->label . ']" id="' . $element->name . '_' . $element->label . '" value="' . $element->label . '">';
                            $formHtml .= '<label class="form-check-label" for="' . $element->name . '_' . $element->label . '">' . $element->label . '</label>';
                            $formHtml .= '</div>';
                            $formHtml .= '</div>';
                        }
                    }

                    $formHtml .= '</div>';
                }
            }
        } else {
            foreach ($formElements as $index => $element) {
                $formHtml .= '<div class="form-group">';
                if ($element->inputType->type == 'text' || $element->inputType->type == 'date' || $element->inputType->type == 'textarea') {
                    $formHtml .= '<label for="' . $element->name . '">' . $element->label . '</label>';
                    $formHtml .= '<input type="' . $element->inputType->type . '" class="form-control" id="' . $element->name . '" name="' . $element->name . '">';
                } elseif ($element->inputType->type == 'checkbox') {
                    $formHtml .= '<div class="form-check">';
                    $formHtml .= '<input class="form-check-input" type="checkbox" id="' . $element->name . '" name="data[' . $element->label . ']">';
                    $formHtml .= '<label class="form-check-label" for="' . $element->name . '">' . $element->label . '</label>';
                    $formHtml .= '</div>';
                } elseif ($element->inputType->type == 'radio') {
                    if (strpos($element->label, ',') !== false) {
                        $values = explode(',', $element->label);
                        $formHtml .= '<div class="form-check mt-1">';
                        foreach ($values as $value) {
                            $formHtml .= '<div class="form-check form-check-inline">';
                            $formHtml .= '<input class="form-check-input" type="radio" name="checkbox" id="' . $element->name . '_' . $value . '" value="' . $value . '">';
                            $formHtml .= '<label class="form-check-label" for="' . $element->name . '_' . $value . '">' . $value . '</label>';
                            $formHtml .= '</div>';
                        }
                        $formHtml .= '</div>';
                    } else {
                        $formHtml .= '<label for="' . $element->name . '">' . $element->label . '</label>';
                        $formHtml .= '<div class="form-check mt-1">';
                        $formHtml .= '<div class="form-check form-check-inline">';
                        $formHtml .= '<input class="form-check-input" type="radio" name="' . $element->name . '" id="' . $element->name . '_' . $element->label . '" value="' . $element->label . '">';
                        $formHtml .= '<label class="form-check-label" for="' . $element->name . '_' . $element->label . '">' . $element->label . '</label>';
                        $formHtml .= '</div>';
                        $formHtml .= '</div>';
                    }
                }

                $formHtml .= '</div>';
            }

        }

        return response()->json(['formHtml' => $formHtml, 'rule' => $ruleName->rule_id, 'points' => $totalPoint]);
    }

    /**
     * Function to add claims.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addClaim(Request $request)
    {
        $values = $request->post('data');
        $filledFields = count($values);
        $monthNumber = $request->post('month_id');
        $data['member_id'] = $request->post('member_id');
        $data['club_id'] = $request->post('club_id');
        $data['rule_id'] = $request->post('rule_id');
        $data['year_id'] = $request->post('year_id');
        $data['data'] = json_encode($values, true);
        $data['month_id'] = Month::where('month', $monthNumber)
            ->where('year_id', $data['year_id'])
            ->first(['id'])->id;
        $rule = Rule::where('id', $data['rule_id'])->first(['point']);
        $data['claimed_point'] = $rule->point * $filledFields;
        $approvals = RuleApproval::where('rule_id', $data['rule_id'])->first(['first_approval']);
        $designation = Designation::where('id', $approvals->first_approval)->first('desig')->desig;
        $designation = strtolower($designation);
        if (strtolower($designation) == 'rc' || strtolower($designation) == 'zc') {
            $data['fa'] = Club::where('clubid', $data['club_id'])->first($designation)->{$designation};
        } else {
            $data['fa'] = UserRole::where('design_id', $approvals->first_approval);
        }
        $memberDetails = Member::where('id', $data['fa'])->first();
        $currentDate = Carbon::now();
        $data['current_date'] = $currentDate->format('Y-m-d');
        $data['status'] = 1;
        $data['sns'] = $request->post('sns');
        if ($request->post('submit')) {
            $otpService = new OTPService();
            $message = 'Dear ' . ucfirst($memberDetails->name) . ', ' . $memberDetails->club->name . ' has sumbitted a claim, waiting for your response, Kindly verify';
            $otpService->sendSmsForApproval($memberDetails->mobile, $message);
        }
        Claim::where('rule_id', $data['rule_id'])
            ->where('club_id', $data['club_id'])
            ->where('sns', 1)
            ->delete();
        Claim::create($data);
        toastr()->success('Successfully claimed');
        return Redirect::route('report.claims_rule', ['id' => $monthNumber, 'part' => 'A', 'yearId' => $data['year_id']]);
    }

    /**
     * Function to submit sns.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function snsSubmit(Request $request)
    {
        $claimId = $request->input('claimId');
        $claims = Claim::where('id', $claimId)->first();
        $memberDetails = Member::where('id', $claims->fa)->first();
        $claims->update([
            'sns' => 0
        ]);
        if ($memberDetails) {
            $otpService = new OTPService();
            $message = 'Dear ' . ucfirst($memberDetails->name) . ', ' . $memberDetails->club->name . ' has submitted a claim, waiting for your response. Kindly verify.';
            $otpService->sendSmsForApproval($memberDetails->mobile, $message);
            return response()->json(['message' => 'SMS sent for approval']);
        } else {
            return response()->json(['message' => 'Member details not found'], 404);
        }
    }


    
    /**
     * Method firstApproval
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function firstApproval(Request $request) {
        if ($request->ajax()) {
            $perPage = 10;
            $login = auth::user()->member_id;
            $claims = Claim::where('fa', $login)->where('approve_status', Claim::PendingApproval)->orWhere('approve_status', Claim::FirstApproval)->orWhere('approve_status', Claim::SecondApproval)->orWhere('approve_status', Claim::PartialApproval)
            ->orWhere(function ($query) {
                $query->where('approve_status', Claim::Declined)->whereNotNull('fa_time');
            });
            return Datatables::of($claims)->addIndexColumn()
            ->addColumn('DT_RowIndex', function () {
                static $index = 1;
                return $index++;
            })
            ->addColumn('rule', function ($claim) {
                return $claim->rule ? $claim->rule->rule : '';
            })
            ->addColumn('club', function ($claim) {
                return $claim->club ? $claim->club->name : '';
            })
            // ->addColumn('month', function ($clubs) {
            //     return $clubs->count;
            // })
            ->addColumn('date', function ($claim) {
                return $claim->claimed_date;
            })
            ->addColumn('data', function ($claim) {
                return str_replace(['{', '}', '"'], ' ', $claim->data);
            })
            ->addColumn('points_claimed', function ($claim) {
                return $claim->claimed_point;
            })
            ->addColumn('points_approved', function ($claim) {
                return $claim->fa_point;
            })
            ->addColumn('member', function ($claim) {
                return $claim->member ? $claim->member->name : '';
            })
            ->addColumn('status', function ($claim) {
                return $claim->approve_status;
            })
            ->addColumn('status', function ($claim) {
                if($claim->approve_status == Claim::FirstApproval || $claim->approve_status == Claim::SecondApproval || $claim->approve_status == Claim::PartialApproval) {
                $status = '<span class="badge badge-success text-uppercase p-2">Approved</span>';
                } else if($claim->approve_status == Claim::PendingApproval) {
                $status = '<span class="badge badge-warning text-uppercase p-2">Pending</span>';
                } else if($claim->approve_status == Claim::Declined) {
                    $status = '<span class="badge badge-danger text-uppercase p-2">Declined</span>';
                }
                return $status;
            })
            ->addColumn('action', function ($claim) {
                $action = "";
                if ($claim->publish === null) {
                    if ($claim->approve_status == Claim::PendingApproval) {
                        $action = '<button class="btn waves-effect waves-light btn-success delete-btn approve-btn" data-claim-type="fa" data-claim-status="'.Claim::FirstApproval.'" data-points-approved="'.$claim->claimed_point.'" data-sa="'.$claim->sa.'"  data-id="'. Crypt::encrypt($claim->id) .'">Approve</i></button><br>
                        <button  class="btn waves-effect waves-light btn-danger custom-btn decline-btn mt-1" data-claim-status="'.Claim::Declined.'" data-claim-type="fa-decline"  data-id="'. Crypt::encrypt($claim->id) .'" data-points-approved="">Decline</i></button>';
                    } else if ($claim->approve_status == Claim::FirstApproval ) { 
                        $action = '<button  class="btn waves-effect waves-light btn-danger custom-btn decline-btn " data-claim-status="'.Claim::Declined.'" data-claim-type="fa-decline"  data-id="'. Crypt::encrypt($claim->id) .'" data-points-approved="">Decline</i></button>';
                    } else if ($claim->approve_status == Claim::Declined && $claim->sa_time == null) {
                        $action = '<button class="btn waves-effect waves-light btn-success delete-btn approve-btn" data-claim-type="fa" data-claim-status="'.Claim::FirstApproval.'" data-sa="'.$claim->sa.'" data-points-approved="'.$claim->claimed_point.'"  data-id="'. Crypt::encrypt($claim->id) .'">Approve</i></button>';
                    }
                    return $action;
                }
            })
            ->rawColumns(['status','action'])
            ->make(true);
        }
        return view('approvals.firstApproval');
    }

    
    /**
     * Method updateClaimStatus
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function updateClaimStatus(Request $request) {
        if ($request->post()) {
            $cliamId = Crypt::decrypt($request->post('cliamId'));
            $approvalType = $request->post('claimType');
            if($approvalType == "fa") {
                $data['fa_point'] = $request->post('pointsApproved');
                $data['fa_time'] =  Carbon::now()->toDateTimeString();
                $otpService = new OTPService();
                if ($request->post('sa')) {
                    $memberDetails = Member::where('id', $request->post('sa'))->first();
                    $message = 'Dear ' . ucfirst($memberDetails->name) . ', ' . $memberDetails->club->name . ' has sumbitted a claim, waiting for second approval, Kindly verify';
                    $otpService->sendSmsForApproval($memberDetails->mobile, $message);
                }
                                
            } else if ($approvalType == "sa") { 
                $data['sa_point'] = $request->post('pointsApproved');
                $data['sa_time'] =  Carbon::now()->toDateTimeString();
            } else if($approvalType == 'fa-decline') { 
                $data['fa_time'] = Carbon::now()->toDateTimeString();
            } else if($approvalType == 'sa-decline') { 
                $data['sa_time'] = Carbon::now()->toDateTimeString();
            }
            $data['approve_status'] = $request->post('claimstatus');
            Claim::where('id', $cliamId)->update($data);
        }
        return response()->json(['success' => 'Updated Successfully']);
    }
    
    /**
     * Method updatePartialPoint
     *
     * @param partialApprovalRequest $request [explicite description]
     *
     * @return void
     */
    public function updatePartialPoint(partialApprovalRequest $request) {
        if ($request->post()) {
            $cliamId = Crypt::decrypt($request->post('cliamId'));
            $approvalType = $request->post('claimType');
            $data['sa_point'] = $request->post('pointsApproved');
            $data['sa_time'] =  Carbon::now()->toDateTimeString();
            $data['approve_status'] = $request->post('claimstatus');
            Claim::where('id', $cliamId)->update($data);
        }
        return response()->json(['success' => 'Updated Successfully']);
    }
    
    /**
     * Method secondApproval
     *
     * @param Request $request [explicite description]
     *
     * @return void
     */
    public function secondApproval(Request $request) {
        if ($request->ajax()) {
            $login = auth::user()->member_id;
            $claims = Claim::where('sa', $login)->whereNotNull('fa_point')->where('approve_status', Claim::FirstApproval)->orWhere('approve_status', Claim::SecondApproval)->orWhere('approve_status', Claim::PartialApproval)
            ->orWhere(function ($query) {
                $query->where('approve_status', Claim::Declined)->whereNotNull('sa_time');
            });
            return Datatables::of($claims)->addIndexColumn()
            ->addColumn('DT_RowIndex', function () {
                static $index = 1;
                return $index++;
            })
            ->addColumn('rule', function ($claim) {
                return $claim->rule ? $claim->rule->rule : '';
            })
            ->addColumn('club', function ($claim) {
                return $claim->club ? $claim->club->name : '';
            })
            // ->addColumn('month', function ($clubs) {
            //     return $clubs->count;
            // })
            ->addColumn('date', function ($claim) {
                return $claim->claimed_date;
            })
            ->addColumn('data', function ($claim) {
                return str_replace(['{', '}', '"'], ' ', $claim->data);
            })
            ->addColumn('points_claimed', function ($claim) {
                return $claim->claimed_point;
            })
            ->addColumn('points_approved', function ($claim) {
                return $claim->fa_point;
            })
            ->addColumn('member', function ($claim) {
                return $claim->member ? $claim->member->name : '';
            })
            ->addColumn('status', function ($claim) {
                return $claim->approve_status;
            })
            ->addColumn('status', function ($claim) {
                if($claim->sa_point === null ) {
                    $status = ($claim->approve_status == Claim::Declined) ? '<span class="badge badge-danger text-uppercase p-2">Declined</span>' : '<span class="badge badge-warning text-uppercase p-2">Pending</span>';
                } else {
                    if($claim->approve_status == Claim::SecondApproval) {
                        $status = '<span class="badge badge-success text-uppercase p-2">Approved</span>';
                    } else if($claim->approve_status == Claim::PartialApproval) {
                        $status = '<span class="badge badge-info text-uppercase p-2">Partially Approved</span>';
                    } else if ($claim->sa_time !== null && $claim->approve_status == Claim::Declined ) { 
                        $status = '<span class="badge badge-danger text-uppercase p-2">Delined</span>';
                    }
                }
                    
                return $status;
            })
            ->addColumn('action', function ($claim) {
                $action = "";
                if ($claim->publish === null) {
                    if ($claim->sa_time === null && $claim->approve_status == Claim::FirstApproval || $claim->approve_status == Claim::PendingApproval   ) {
                        $action = '<button class="btn waves-effect waves-light btn-success delete-btn approve-btn" data-claim-type="sa" data-claim-status="'.Claim::SecondApproval.'" data-points-approved="'.$claim->claimed_point.'"  data-id="'. Crypt::encrypt($claim->id) .'">Approve</i></button><br>
                        <button style="background-color:#1aeb72;" class="btn waves-effect waves-light btn-success delete-btn pa-approve-btn mt-1" data-claim-type="pa" data-claim-status="'.Claim::PartialApproval.'" data-claimed-point="'.$claim->claimed_point.'"  data-id="'. Crypt::encrypt($claim->id) .'">Partial Approve</i></button><br>
                        <button  class="btn waves-effect waves-light btn-danger custom-btn decline-btn mt-1" data-claim-status="'.Claim::Declined.'" data-claim-type="sa-decline"  data-id="'. Crypt::encrypt($claim->id) .'" data-points-approved="">Decline</i></button>';
                    } else if ($claim->approve_status == Claim::SecondApproval ) { 
                        $action = '<button style="background-color:#1aeb72;" class="btn waves-effect waves-light btn-success delete-btn pa-approve-btn mt-1" data-claim-type="pa" data-claim-status="'.Claim::PartialApproval.'" data-claimed-point="'.$claim->claimed_point.'"  data-id="'. Crypt::encrypt($claim->id) .'">Partial Approve</i></button><br>
                        <button  class="btn waves-effect waves-light btn-danger custom-btn decline-btn mt-1" data-claim-status="'.Claim::Declined.'" data-claim-type="sa-decline"  data-id="'. Crypt::encrypt($claim->id) .'" data-points-approved="">Decline</i></button>';
                    } else if ($claim->approve_status == Claim::PartialApproval ) { 
                        $action = '<button class="btn waves-effect waves-light btn-success delete-btn approve-btn" data-claim-type="sa" data-claim-status="'.Claim::SecondApproval.'" data-points-approved="'.$claim->claimed_point.'"  data-id="'. Crypt::encrypt($claim->id) .'">Approve</i></button><br>
                        <button  class="btn waves-effect waves-light btn-danger custom-btn decline-btn mt-1" data-claim-status="'.Claim::Declined.'" data-claim-type="fa-decline"  data-id="'. Crypt::encrypt($claim->id) .'" data-points-approved="">Decline</i></button>';
                    }
                    return $action;
                }
            })
            ->rawColumns(['status','action'])
            ->make(true);
        }
        return view('approvals.secondApproval');
    }

}