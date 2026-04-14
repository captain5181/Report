<?php
$msg= "";

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $hasL = preg_match('/[a-zA-Z]/' , $password);
    $hasN = preg_match('/[0-9]/' , $password);
    $hasS = preg_match('/[!@#$%^&(*),.?]/' , $password);
    $length = strlen($password) > 8;

    if ($hasL && $hasN && $hasS && $length){
        $msg = "<p style='color:green;'>You entered a strong password</p>";
    }else{
        $msg = "<p style='color:red';>Enter a Complex Password</p>";
    }

    }
?>

<html>
    <head>
        <title>Password Validation</title>
    </head>
    <body>
        <h1>Login Page</h1>
        <form method="post">
            Username: <input type="text" name="username" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" value="Submit">  
        </form>
        <?php echo "$msg";?>
    </body>
</html>