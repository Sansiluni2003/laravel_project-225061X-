<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('doctorProfile')->get();
        return view('doctors.index', compact('doctors'));
    }

    public function show(Doctor $doctor)
    {
        $doctor->load('doctorProfile');
        return view('doctors.show', compact('doctor'));
    }
}
