<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;


class DoctorController extends Controller
{
    public function index(){
        return view('doctors.index');
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
