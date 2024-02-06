<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function index()
    {
//        dd('test');
        return view('calculate');
    }

    public function calculate(Request $request)
    {
//        $values = $request->all();
//        foreach ($values as $key=>$value)
//        {
//            if (is_numeric($key)){
//                echo $key;
//            }
//        }


        $values = $request->all();
        if (isset($values['input'])){
            $input = json_decode($values['input'],true);
        }

        foreach ($values as $key=>$value)
        {
            if ($key != 'input'){
                $inputs[] = is_numeric($value);
            }
        }
        return view('calculate',compact('inputs'));

    }


}
