<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Please Login</h1>
    </div>
    <div class="container">
        <form action="teacherlogin.php" method = "POST">
        <div class="form-group">
            <label for="">Enter UserName</label>
            <input class="form-control w-50" type="text" name = 'username' placeholder="Your Username.." autocomplete="off">
        </div>
        <div class="form-group">
            <label for="">Enter Password</label>
            <input class="form-control w-50" type="password" name = 'password' placeholder="Password.." autocomplete="off" >
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Login</button>
        </form>
    </div>


<?php 
    include('../dbconfig/connectdb.php');
    session_start();
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
        $username = $_POST['username'];
        $password = $_POST['password'];
        //3.1.2 Checking the values are existing in the database or not
        $query = "SELECT * FROM `teacherLogin` WHERE username='$username' and password='$password'";
        
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        //3.1.2 If the posted values are equal to the database values, then session will be created for the user.
        if ($count == 1){
        $_SESSION['username'] = $username;
        header("Location: ../teacher.php");
        }else{
        //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
        $fmsg = "Invalid Login Credentials. Try Again";
        echo "<h3 class = 'text-center text-danger'>$fmsg</h3>";
        // header("Location:teacherlogin.php");
        }
}


?>
<?php include('../templates/footer.php')?>