<!DOCTYPE html>
<html>
<head>

 <title>Digit in Words</title>
</head>
<body>
<h2>Digits in Words</h2>
<form method="post">
    <input type="number" name="number" required>
    <input type="submit" value="Submit">
</form>
<?php 
if ($_POST['number']){
    $number = $_POST['number'];
    $digits = str_split($number);
    $word = array(
        '1' => 'one',
        '2' => 'two',
        '3' => 'three',
        '4' => 'four',
        '5' => 'five',
        '6' => 'six',
        '7' => 'seven',
        '8' => 'eight',
        '9' => 'nine',
        '0' => 'zero'
    );

    echo "<strong>Your Number : $number</strong><br><br>";

    echo "<strong>Digit to Words:</strong><br>";

    foreach ($digits as $digit){
        if (array_key_exists($digit , $word)){
            echo $word[$digit] ." " ;
        }
    }

}

?>
</body>
</html>