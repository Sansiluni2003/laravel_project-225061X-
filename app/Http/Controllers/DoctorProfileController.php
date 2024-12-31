<?php

namespace App\Http\Controllers;

use App\Models\DoctorProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['edit', 'update', 'toggleAvailability']);
        $this->middleware(['role:doctor'])->only(['edit', 'update', 'toggleAvailability']);
    }

    public function index()
    {
        $doctors = DoctorProfile::with('user')->where('is_available', true)->get();
        return view('doctors.index', compact('doctors'));
    }

    public function show(DoctorProfile $profile)
    {
        return view('doctors.show', compact('profile'));
    }

    public function edit()
    {
        $profile = auth()->user()->doctorProfile ?? new DoctorProfile();
        return view('doctors.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'specialization' => 'required|string|max:255',
            'qualifications' => 'required|string',
            'experience' => 'required|string',
            'bio' => 'nullable|string',
            'consultation_fee' => 'nullable|string',
            'available_days' => 'required|array',
            'available_hours' => 'required|array',
            'phone_number' => 'required|string',
            'profile_photo' => 'nullable|image|max:1024',
            'is_available' => 'boolean'
        ]);

        $user = auth()->user();
        $profile = $user->doctorProfile ?? new DoctorProfile();

        $data = $request->except('profile_photo');
        
        if ($request->hasFile('profile_photo')) {
            if ($profile->profile_photo) {
                Storage::delete($profile->profile_photo);
            }
            $data['profile_photo'] = $request->file('profile_photo')->store('profile-photos', 'public');
        }

        $profile->fill($data);
        $profile->user_id = $user->id;
        $profile->save();

        return redirect()->route('doctors.show', $profile)->with('success', 'Profile updated successfully');
    }

    public function toggleAvailability()
    {
        $profile = auth()->user()->doctorProfile;
        $profile->is_available = !$profile->is_available;
        $profile->save();

        return back()->with('success', 'Availability status updated successfully');
    }
}
