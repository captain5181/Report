<?php
$message = "";
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $fullName = $_POST["name"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_pass = $_POST["confirm-pass"];

    if ($password !== $confirm_pass){
        $message = "<p>Password Not matched</p>";
    }else{
        $hashed = password_hash($password , PASSWORD_DEFAULT);

        $conn = new mysqli("localhost" , "root" , "" , "user_db");
        if ($conn -> connect_error){
            die("Connection Failed");
        }

        $stmt = $conn -> prepare('INSERT INTO users(full_name , contact, email,password) Values (?,?,?,?)');
        $stmt -> bind_param('ssss',$fullName , $contact , $email , $hashed);

        if ($stmt->execute()){
            $message = "<p>Registration Successfull</p>";
        }else{
            $message = "<p>Error Occured</p>";
        }
        $stmt -> close();
        $conn -> close();
    }
}
?>

<html>
    <head>
        <title>Store a password</title>
    </head>
    <body>
        <form method="post" class="red">
            <h1 class="head">Registration form</h1>
            Full Name: <br><input type="text" name="name" required><br><br>
            Contact: <br><input type="number" name="contact" required><br><br>
            E-mail:<br> <input type="email" name="email" required><br><br>
            Password: <br><input type="password" name="password" required><br><br>
           Confirm Password: <br><input type="password" name="confirm-pass" required><br><br>
           <br><input type="submit" value="Submit">
        </form>
        <?php echo "$message";?>
    </body>
</html>