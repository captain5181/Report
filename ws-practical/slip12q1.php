<html>
    <head>
        <title>
            Dimentions of Cylinder
        </title>
    </head>
    <body>
        <h1>Calculate Dimentions of Cylinder</h1>
        <form method="post">
            Radius of Cylinder(cm): <input type="number" name="radius" required><br><br>
            Height of Cylinder(cm): <input type="number" name="height" required><br><br>
            <button type="submit" name="calculate">Calculate</button>
        </form>
    </body>
</html>

<?php
$result1 = "";
$result2 = "";

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $radius = $_POST["radius"];
    $height = $_POST["height"];
    function cylinder($radius , $height){
        $area = (2 * 3.14 * $radius * $height) + (2 * 3.14 * $radius * $radius);
        $volume = 2 * 3.14 * $radius*$radius*$height;
        $result1 = "<p><b>Area of Cylinder is $area </b></p>";
        $result2 = "<p><b>Volume of Cylinder is $volume</b></p>";

        echo "$result1";
        echo "$result2";
    }
    if (isset($_POST['calculate'])) {
        cylinder($radius,$height);
    }
    }
?>

