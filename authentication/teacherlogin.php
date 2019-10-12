<?php 
session_start();
?>
<?php 
    include('../dbconfig/connectdb.php');
   

if (isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM `teacherLogin` WHERE username='$username' and password='$password'";
        
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        if ($count == 1){
        $_SESSION['username'] = $username;
        header("Location: ../main/teacher.php");
        }else{
        $fmsg = "Invalid Login Credentials. Try Again";
        echo "<h3 class = 'text-center text-danger'>$fmsg</h3>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="../img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/login.css" text="">
</head>

<body>
<?php require("../templates/header.php")?>
<div class="backgroundLogin text-white">
    <div class="container p-5">
        <h2 class="text-left">Please Login</h2>
    </div>
    <div class="container p-5">
        <form action="teacherlogin.php" method = "POST">
        <div class="form-group">
            <label class="font-weight-bold"for="">Enter UserName</label>
            <input class="form-control w-50" type="text" name = 'username' placeholder="Your Username.." autocomplete="off">
        </div>
        <div class="form-group">
            <label class="font-weight-bold"for="">Enter Password</label>
            <input class="form-control w-50" type="password" name = 'password' placeholder="Password.." autocomplete="off" >
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Login</button>
        </form>
    </div>
    </div>
</body>
<?php include('../templates/footer.php')?>
