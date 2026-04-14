<?php
$message = "";
if ($_SERVER['REQUEST_METHOD']=='POST'){
    

    $string1 = $_POST["string1"];
    $string2 = $_POST["string2"];
    $operation = $_POST["operation"];

    switch($operation){
        case "compare":
            if ($string1==$string2){
                $message = "Both Strings are Equal";
            }else{
                $message = "<p>Strings are Diffrent</p>";
            }
            break;
        case "upper":
            $upp_str1 = strtoupper($string1);
            $upp_str2 = strtoupper($string2);
            $message = "<p>Upper string 1 : $upp_str1 and Upper string 2 : $upp_str2</p>";
            break;
        case "lower":
            $low_str1 = strtolower($string1);
            $low_str2 = strtolower($string2);
            $message = "<p>Lower string 1 : $low_str1 and Lower string 2 : $low_str2</p>";
            break;
    }
    }
?>

<html>
    <head>
        <title>Operations on strings</title>
    </head>
    <body>
        <h1>Operations on String</h1>
        <form method="post">
            <h3>Enter Details</h3>
            String 1: <input type="text" name="string1" required><br><br>
            String 2: <input type="text" name="string2" required><br><br>
            Operations: <br>
            a.Compare 2 Strings: <input type="radio" name="operation" value="compare"><br>
            b.Convert to Upper: <input type="radio" name="operation" value="upper"><br>
            c.Convert to Lower: <input type="radio" name="operation" value="lower"><br>
            <button type="submit">Check</button>
        </form>
        <?php echo "$message";?>
    </body>
</html>