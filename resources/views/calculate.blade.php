<?php

    $input = [];

    function getInputAsString($values)
    {
        $output = "";
        foreach ($values as $value)
        {
            $output .= $value;
        }
        return $output;
    }

    function calculation($userNumber)
    {
        $arr = [];
        $charector = "";
        foreach ($userNumber as $number){
            if (is_numeric($number)){
                $charector .= $number;
            }else if (!is_numeric($userNumber)){
                if (!empty($charector)){
                    $arr[]= $charector;
                }
            }
            }if (!empty($charector)){
                $arr[] = $charector;
            }
            $currentValue = 0;
            $act = null;
            for($i=0; $i<= count($arr)-1; $i++ ){
            if (is_numeric($arr[$i])){
                if ($act){
                    if ($act == "+"){
                        $currentValue = $currentValue + $arr[$i];
                    }
                    $act = null;
                }else{
                    if ($currentValue == 0){
                        $currentValue = $arr[$i];
                    }
                }
            }else{
                $act = $arr[$i];
            }
        }
    return $currentValue;
    }


    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['input'])){
            $input = json_decode($_POST['input']);
        }

        if (isset($_POST)){
            foreach ($_POST as $key=>$value){
                if ($key == "equal"){
                    $total = calculation($input);
                    echo $total;
                }elseif ($key != 'input' && $key != '_token'){
                    $input[] = $value;
                }
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="card text-center">
    <div class="card-header">
        My Calculator
    </div>
    <div class="card-body">
        <form method="post"  }} >
            @csrf
            <div>
                <input type="test" value='<?php echo getInputAsString($input); ?>' />

                <input type="hidden" name="input" value='<?php echo json_encode($input); ?>' />
                <input type="text" value="" />
                <table style="align-items: center; margin-left: 45%">
                    <tr style="font-size: 30px">
                        <td><input type="submit" name="9" value="9"></td>
                        <td><input type="submit" name="8" value="8"></td>
                        <td><input type="submit" name="7" value="7"></td>
                        <td><input type="submit" name="add" value="+"></td>
                        <td><button type="submit" name="back" value="back">&#8592; </button></td>
                    </tr>
                    <tr  style="font-size: 30px">
                        <td><input type="submit" name="6" value="6"></td>
                        <td><input type="submit" name="5" value="5"></td>
                        <td><input type="submit" name="4" value="4"></td>
                        <td><input type="submit" name="minus" value="-"></td>
                    </tr>
                    <tr  style="font-size: 30px">
                        <td><input type="submit" name="3" value="3"></td>
                        <td><input type="submit" name="2" value="2"></td>
                        <td><input type="submit" name="1" value="1"></td>
                        <td><input type="submit" name="multiply" value="*"></td>
                    </tr>
                    <tr  style="font-size: 30px">
                        <td><input type="submit" name="ce" value="Ce"></td>
                        <td><input type="submit" name="0" value="0"></td>
                        <td><button type="submit" name="devide" value="/">&#247;</button></td>
                        <td><input type="submit" name="equal" value="="></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>

</body>
</html>
