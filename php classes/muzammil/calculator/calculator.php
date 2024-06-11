<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple calculator program in php</title>
    <style>
        #page-wrap{
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: white !important;
            box-shadow: 0 0 10px #ccc;
            font-family: sans-serif;
            font-size: 16px;
            line-height: 24px;
            text-align: center;
            color: #333;
        }
        #second_num{
            margin-left: 28px;
        }
        #result{
            position: relative;
            right: 22px;
        }

    </style>
</head>
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$clear = $_POST['clear'];
$result = '';
if(is_numeric($first_num) && is_numeric($second_num)){
    switch($operator){
        case 'add':
            $result = $first_num + $second_num;
            break;
        case 'subtract':
            $result = $first_num - $second_num;
            break;
        case 'multiply':
            $result = $first_num * $second_num;
            break;
        case 'divide':
            $result = $first_num / $second_num;
            break;
        default:
            $result = 'invalid operator';
            break;
    }
}
if($clear){
    $first_num = '';
    $second_num = '';
    $result = '';
}
?>
<body>
    <div id="page-wrap">
        <h1>PHP - simple calculator program</h1>
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num;?>">&nbsp;<b>first number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num;?>">&nbsp;<b>second number</b>
            </p>
            <p>
                <input readonly="readonly" id="result" name="result" value="<?php echo $result; ?>">&nbsp;<b>result</b>
            </p>
            <input type="submit" name="operator" value="add">
            <input type="submit" name="operator" value="subtract">
            <input type="submit" name="operator" value="multiply">
            <input type="submit" name="operator" value="divide">
            <input type="submit" value="Clear" name="clear">
        </form>
    </div>
</body>
</html>  