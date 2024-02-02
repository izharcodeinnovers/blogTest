<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function check(Request $request)
    {
        $data = $request->all();
        $dob = Carbon::parse($data['dob']);
        $currentDate = Carbon::now();
        $age = $dob->diffInYears($currentDate);
        if ($age >= 18)
        {
            $checkAge = $age." You are eligible for vote";
        }else{
            $checkAge = $age." You are not eligible for vote";
        }
        return view('view', [
            'data' => $data,
            'age' => $checkAge
        ]);
    }

}
