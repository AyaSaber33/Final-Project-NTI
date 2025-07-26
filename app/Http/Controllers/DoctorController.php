<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;


class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

     public function create(){
        return view('doctors.create');
    }

    public function store(Request $request){
        $username = request()->name;
        $major = request()->major;
        $discription = request()->discription;
    

    Doctor::create([
        'name' => $username,
        'major' => $major,
        'discription' => $discription,
    ]);

    return redirect()->route('doctors.index');
}

}
