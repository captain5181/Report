<?php
$msg = "";

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password=="1234"){
        $msg = "<script>alert('WELCOME, $username')</script>";
    }else{
        $msg = "Invalid username or password";
    }
}

?>

<html>
    <head>
        <title>Verification</title>
    </head>
    <body>
        <H1>Login page</H1>
        <form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Submit">
    </form>
    <?php echo "$msg"; ?>
    </body>
</html>
