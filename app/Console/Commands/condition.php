<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class condition extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:condition';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        1st Program
//        $code = 1;
//        switch ()
//        $a = "30";
//        if ($a == "10") {
//            echo "correct";
//        } else if ($a < "20") {
//            echo "Less than 20";
//        } else {
//            echo "Greater than 20";
//        }

//        2nd Programm
//
//        $b = "1";
//        switch ($b){
//            case 0;
//                echo "b equals 0";
//                break;
//            case 1;
//                echo "b equals 1";
//                break;
//            case 2;
//                echo  "b equals 2";
//                break;
//            default;
//                echo "b is not equal to 0, 1 or 2";
//        }

//        3rd

//        $c = 1;
//        if ($c < 10)
//            $d = "d less than c";
//        echo $d;

//        4th

//        $a = 9;
//        $b = $a < 10 ? "yes" : "No";
//        echo $b;

//        5th

//        $a = 30;
//
//        if ($a > 10) {
//            echo "Above 10";
//            if ($a > 20) {
//                echo " and also above 20";
//            } else {
//                echo " but not above 20";
//            }
//        }

//        6th

//        $test = 1;
//        switch ($test){
//            case 1;
//                echo 1;
//                break;
//            case 2;
//                echo 2;
//                break;
//            case 3;
//                echo 3;
//        }

//        7th

//        for ($a =1; $a<= 10; $a++){
//            if ($a == 5){
//                continue;
//            }
//            echo $a;
//        }

//        8th

//        $student = ['shadab', 'Ajay', 'Javed',' Faizan','Kaif'];
//        if(in_array('Kaif', $student))
//        {
//            echo "Already Exist";
//        }else{
//            echo "Not Exist";
//        }

//        9th

//        $a = ['1','2','3','4','5','6','7','8','9','10','11','12','13',];
//        foreach ($a as $item){
//            if ($item < 5){
//                continue;
//            }
//            echo $item;
//        }
//        10th

//        $b = ['1','2','3','4','5','6','7','8','9','10','11','12','13',];
//        foreach ($b as $item)
//        {
//            if ($item == 0){
//                echo $item;
//                break;
//            }elseif ($item == 6){
//                continue;
//            }
//            else{
//                echo $item;
//            }
//        }

//        11th
//        $b = ['1','2','3','4','5','6','7','8','9','10','11','12','13',];
//        foreach ($b as $item)
//        {
//            if ($item == 5){
//                echo $item;
//            }
//        }

//        12th

//        $b = ['1','2','3','4','5','6','7','8','9','10','11','12','13',];
//        foreach ($b as $item){
//            if ($item < 5){
//                echo $item;
//            }
//        }

//        13th

//        $test = 23;
//        if($test % 2 == 0){
//            echo "This even Number";
//        }else{
//            echo "This is Odd Number";
//        }

//        14 Prime number

//        $count = 0;
//        $number = 12;
//        for ($i = 2; $i < $number; $i++)
//        {
//            if ($number % $i== 0){
//                $count++;
//                break;
//            }
//        }
////        echo $number;
//        if ($count == 0){
//            echo $number . "this is prime number";
//        }else{
//            echo $number. "this is not prime number";
//        }

//        15 get positive negative number
//        $number = -5;
//        if($number > 0){
//            echo $number."this is positive number";
//        }else{
//            echo $number."this is negative number";
//        }

//        16 check leap year

//        $year = 2021;
//        if($year % 400 == 0)
//        {
//            echo $year."this leap year";
//        }elseif ($year % 100 == 0){
//            echo $year."this is leap year";
//        }elseif($year % 4 == 0){
//            echo $year."this is leap year";
//        }else{
//            echo $year."this is not leap year";
//        }
//         17 check eligible for vote

//        $age = 20;
//        if($age > 18){
//            echo $age." you are eligible for vote";
//        }else{
//            echo $age. "you are not eligible for vote";
//        }

//            18 get biggest number

//        $numbers = ['1', '7', '43','22','23','34','0','94','98', '76'];
//        $biggestNumber = $numbers[0];
//        foreach ($numbers as $number)
//        {
//            if ($number > $biggestNumber)
//            {
//                $biggestNumber = $number;
//            }
//        }
//        echo $biggestNumber."this is biggest number";

//        19 get lowest number

//        $numbers = ['1', '7', '43','22','23','34','0','94','98', '76'];
//        $lowestNumber = $numbers[0];
//        foreach ($numbers as $number){
//            if ($lowestNumber < $lowestNumber){
//                $lowestNumber = $number;
//            }
//        }
//        echo $lowestNumber. "this lowest number";

//        20 get square number

        $squares = ['8', '16', '36', '25', '49', '64', '81'];
        $squareNumber = 4;
        $square= $squareNumber*$squareNumber;
        foreach ($squares as $value)
        {
            if ( $value == $square){
                echo $value."this is square of ".$squareNumber;
                break;
            }else{
                echo "Not found any square this number".$squareNumber;
            }
        }

    }
}
