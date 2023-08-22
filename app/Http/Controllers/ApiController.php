<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Event;
use App\Models\Member;
use App\Models\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    /**
     * Api to list all members as per limit
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMembers(Request $request)
    {
        $offset = $request->post('offset');
        $limit = $request->post('payload');
        $members = Member::skip($offset)->take($limit)->select([
            'id',
            'name',
            'gender',
            'spouse',
            'mobile',
            'phone',
            'whatsapp',
            'address',
            'email',
            'birthday',
            'anniversary',
            'profession',
            'specialization',
            'clubid',
        ])->get();
        $totalMembersCount = Member::count();
        $remainingMembersCount = max($totalMembersCount - ($offset + $limit), 0);
        $membersData = $members->map(function ($member) {
            return (object)[
                'id' => $member->id,
                'name' => $member->name,
                'gender' => $member->gender,
                'spouse' => $member->spouse,
                'club' => $member->club ? $member->club->name : '',
                'mobile' => $member->mobile,
                'phone' => $member->phone,
                'whatsapp' => $member->whatsapp,
                'address' => $member->address,
                'email' => $member->email,
                'birthday' => $member->birthday,
                'anniversary' => $member->anniversary,
                'profession' => $member->profession,
                'specialization' => $member->specialization,
            ];
        });
        return response()->json([
            'offset' => $offset,
            'payload' => $limit,
            'balance' => $remainingMembersCount,
            'data' => $membersData,
        ]);
    }

    /**
     * Function to get member location.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMembersLocation(Request $request)
    {
        $offset = $request->post('offset');
        $limit = $request->post('payload');
        $members = Member::skip($offset)->take($limit)->select([
            'id as member',
            'lattitude',
            'longitude',
            'type',
        ])->get();
        $totalMembersCount = Member::count();
        $remainingMembersCount = max($totalMembersCount - ($offset + $limit), 0);
        return response()->json([
            'offset' => $offset,
            'payload' => $limit,
            'balance' => $remainingMembersCount,
            'data' => $members,
        ]);
    }

    /**
     * Api to get all clubs.
     * @return \Illuminate\Http\JsonResponse
     */
    public function getClubs()
    {
        $data = Club::select('clubid as id', 'name')->get();
        return response()->json(['data' => $data]);
    }

    /**
     * Function to get all professions.
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProfessions()
    {
        $data = Profession::select('id', 'name as profession')->get();
        return response()->json(['data' => $data]);
    }

    /**
     * Function to get details of member by id.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function verifyMember(Request $request)
    {
        $memberId = $request->post('id');
        $data = Member::select([
            'id',
            'name',
            'gender',
            'spouse',
            'clubid',
            'mobile',
            'phone',
            'whatsapp',
            'address',
            'email',
            'birthday',
            'anniversary',
            'profession',
            'specialization'
        ])
            ->where('id', $memberId)
            ->first();
        $data->club = $data->club ? $data->club->name : '';
        return response()->json([
            'id' => $data->id,
            'name' => $data->name,
            'gender' => $data->gender,
            'spouse' => $data->spouse,
            'club' => $data->club,
            'mobile' => $data->mobile,
            'phone' => $data->phone,
            'whatsapp' => $data->whatsapp,
            'address' => $data->address,
            'email' => $data->email,
            'birthday' => $data->birthday,
            'anniversary' => $data->anniversary,
            'profession' => $data->profession,
            'specialization' => $data->specialization
        ]);
        return response()->json($data);
    }

    /**
     * Function to upload image.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
        ]);
        if ($request->hasFile('image')) {
            $memberId = $request->post('id');
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $oldPhoto = Member::where('id', $memberId)->value('photo');
            if ($oldPhoto && file_exists(public_path('images/' . $oldPhoto))) {
                Storage::delete('images/' . $oldPhoto);
            }
            $image->move(public_path('images'), $imageName);
            Member::where('id', $memberId)->update(['photo' => $imageName]);
            return response()->json(['message' => 'Image uploaded successfully'], 200);
        }
        return response()->json(['error' => 'Image upload failed'], 400);
    }

    /**
     * Function to get image.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getImage(Request $request)
    {
        $memberId = $request->post('id');
        $imageName = Member::where('id', $memberId)->value('photo');
        $path = public_path('images/' . $imageName);
        if (file_exists($path)) {
            $imageData = base64_encode(file_get_contents($path));
            $base64 = $imageData;
            return response()->json($base64);
        }
        return response()->json(['error' => 'Image not found'], 404);
    }

    /**
     * Function to update members.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateMember(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'gender' => 'nullable|in:male,female',
            'spouse' => 'nullable|string|max:255',
            'mobile' => 'nullable|string|max:15',
            'phone' => 'nullable|string|max:15',
            'whatsapp' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:500',
            'email' => 'nullable|email|max:255',
            'birthday' => 'nullable|date',
            'anniversary' => 'nullable|date',
            'profession' => 'nullable|integer',
            'specialization' => 'nullable|string|max:255',
            'lattitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);
        $memberId = $request->input('id');
        $existingMember = Member::find($memberId);

        if (!$existingMember) {
            return response()->json(['error' => 'Member not found'], 404);
        }
        $existingMember->update($request->only([
            'name', 'gender', 'spouse', 'mobile', 'phone', 'whatsapp', 'address',
            'email', 'birthday', 'anniversary', 'profession', 'specialization',
            'lattitude', 'longitude',
        ]));
        return response()->json(['message' => 'Member updated successfully']);
    }

    /**
     * Function to get active events.
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEvents()
    {
        $data = Event::select('id', 'title')->where('status', 1)->get();
        return response()->json(['data' => $data]);
    }


    /**
     * Function to update location.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateLocation(Request $request)
    {
        $request->validate([
            'lattitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'type' => 'nullable|string|max:50',
        ]);
        $data['id'] = $request->post('id');
        $data['lattitude'] = $request->post('lat');
        $data['longitude'] = $request->post('long');
        $data['type'] = $request->post('type');
        $existingMember = Member::find($data['id']);
        if (!$existingMember) {
            return response()->json(['error' => 'Member not found'], 404);
        } else {
            Member::where('id', $request->post('id'))->update($data);
            return response()->json('success');
        }
    }

    /**
     * Function to update app status.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateAppStatus(Request $request)
    {
        $memberId = $request->post('member');
        $existingMember = Member::find($memberId);
        if (!$existingMember) {
            return response()->json(['error' => 'Member not found'], 404);
        } else {
            Member::where('id', $memberId)->update(['app' => 1]);
            return response()->json(['message' => 'Status updated successfully']);
        }
    }
}
