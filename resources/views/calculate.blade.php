<?php
    $currentValue = 0;
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
        <form method="post" action="{{route('calculate')}}" }} >
            @csrf
            <div>
                <input type="hidden" name="input" value="{{json_encode($inputs)}}">
                <input type="text" value="<?php echo $currentValue ?>" />
                <table style="align-items: center; margin-left: 45%">
                    <tr style="font-size: 30px">
                        <td><input type="submit" name="9" value="9"></td>
                        <td><input type="submit" name="8" value="8"></td>
                        <td><input type="submit" name="7" value="7"></td>
                        <td><input type="submit" name="add" value="+"></td>
                        <td><button type="submit" name="back" value="back">&#8592 </button></td>
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
                        <td><button type="submit" name="devide" value="/">&#247</button></td>
                        <td><input type="submit" name="equal" value="="></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>

</body>
</html>
