<?php

$message = "";
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $n=3;
    for ($i=1; $i<4; $i++){
        if ($username !== "admin" && $password !== "soham"){
            $message = "<p>Incorrect Details </p>"; 
            ;
        }else{
            $message = "<p>Welcome Admin</p>";
        }
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    
    <h1>Login Form</h1>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="submit">
</form>
<?php echo $message;?>
</body>
</html>