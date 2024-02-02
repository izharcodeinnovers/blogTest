<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CheckMarrige extends Controller
{
    public function index()
    {
        return view('marrige_index');
    }

    public function check(Request $request)
    {
        $data = $request->all();
        $boyDob = Carbon::parse($data['boy_dob']);
        $girlDob = Carbon::parse($data['girl_dob']);
        $currentDate = Carbon::now();
        $boyAgeDifferencce = $boyDob->diffInYears($currentDate);
       $girlAgeDeffrence = $girlDob->diffInYears($currentDate);
        if ($boyAgeDifferencce >= 20){
            $boyAge = $boyAgeDifferencce."You are eligible for marrige";
        }elseif ($boyAgeDifferencce < 20){
            $boyAge = $boyAgeDifferencce."you are not eligible for merrige";
        }elseif ($girlAgeDeffrence >=17){
            $girlAge1 = $girlAgeDeffrence." You are eligible for marrige";
        }elseif ($girlAgeDeffrence < 17){
            $girlAge1 = $girlAgeDeffrence." you are not eligible for merrige";
        }else{
            $both = "Both are not eligible for marrige";
        }

        return view('marrige_result',[
                'data' => $data,
                'boyAge' => $boyAge,
                'girlAge' => $girlAge1,
                'both' => $both
            ]
        );
    }

}
