<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ReunionController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function basicInfo()
    {
        return view('basic-info');
    }

    public function saveBasicInfo(Request $request)
    {
        $student = new Student;
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->members_attending = $request['members'];
        $student->accomidation_details = $request['accomidation'];
        $student->save();

        return redirect()->to('/');
    }
}
