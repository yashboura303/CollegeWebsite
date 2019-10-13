<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: authentication/teacherlogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../js/teacher.js"></script>
    <link href="../img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script type="text/javascript" src = "../js/contact.js">    </script>
    <link rel="stylesheet" href="../styles/login.css" text="">
</head>

<body>
<?php require("../templates/header.php")?>
<div class="backgroundLogin text-white">
    <div class="container pt-4 pb-3">
        <h2 class="text-center float-left">Upload Marks</h2>
        <a href="../authentication/teacherlogout.php" class=" float-right text-center btn btn-danger">Logout</a>
    </div>
    <div class="container pt-5 pb-5 ">
        <form action="teacher.php" method = "POST">
            <div class=" form-group">
                <label for="">Enter PID</label>
                <input class="form-control w-50" type="number" name="pid" placeholder="student PID..">
            </div>
            <select id="selectsem" class="custom-select w-50 mt-2" name = "sem">
                <option value="item0">--Select Sem--</option>
                <option value="1">Sem 1</option>
                <option value="4">Sem 4</option>
                <option value="3">Sem 3</option>
            </select>
            <select id="selectsub" class="custom-select w-50 mt-3 mb-2 " name = "sub">
                <option value="">-- Select subject -- </option>
            </select>
            <div class="form-group">
                <label for="">Enter Marks</label>
                <input class="form-control w-50" type="text" name="marks" placeholder="marks..">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </form>
    </div>
    </div>

    <?php include('../templates/footer.php') ?>


    <?php 
    if(isset($_POST["pid"]) && isset($_POST["marks"]) && isset($_POST["sem"]) && isset($_POST["sub"])){
        // $connection = new mysqli("localhost", "yash", "yash","StudentDB");
        include('../dbconfig/connectdb.php');
        $sub = $_POST["sub"];
        $sem = $_POST["sem"];
        $marks = $_POST["marks"];
        $pid = $_POST["pid"];
        $subcode = $sub.$sem;
        $sql = "INSERT INTO appear VALUES ($pid, '$subcode',$marks);";
        if ($connection->query($sql) === TRUE) {
            // echo "New record created successfully";
            echo "<script type='text/javascript'>alert('$sub marks added to database');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
    ?>
