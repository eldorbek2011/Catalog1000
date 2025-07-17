<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
{

    public function teacherIndex()
    {
        $teachers = DB::table('teachers')->get();
        return view('teacher.teachersIndex',['teachers' => $teachers]);
    }

    public function create() {
        return view("teacher.create");
    }
    public function store(Request $request)
    {
        DB::table('teachers')->insert([
            'Name'=> $request->Name,
            'Surname' => $request->Surname,
            'Status'=> $request->Status,
            'Phone' => $request->Phone,
            'Address' => $request->Address,
            'Email' => $request -> email
        ]);
        return redirect("/teachers");
    }
}