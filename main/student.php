<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link href="../img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/login.css" text="">
</head>
<body>
<?php require("../templates/header.php")?>
<div class="backgroundLogin text-white p-5">
<div class="container">
        <h2 class="text-center">Check Result</h2>
    </div>
<div class="container">
    <form action="student.php">
    <div class="form-group">
        <label for="">Enter PID</label>
        <input class="form-control w-50" name="pid" type="number" placeholder="Your PID..">
    </div>
    <div class="form-group">
        <label for="">Enter SEM NO</label>
        <input class="form-control w-50" name="sem" type="number" placeholder="Semester Number..">
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Result</button>
    </form>
</div>
</div>
<?php 
    if (isset($_GET["pid"]) and isset($_GET["sem"])){
        // $connection = new mysqli("localhost", "yash", "yash","StudentDB");
        include('../dbconfig/connectdb.php');
        $pid = $_GET["pid"];
        $sem = $_GET["sem"];
        $sql = "Select S_Name from Students where PID = $pid";
        $result = $connection->query($sql);
        $row = $result->fetch_array();
        $name = $row[0];
        $sql = "Select avg(result) from appear a, Subject s where s.sem_no = $sem and a.PID = $pid and s.Sub_code = a.Sub_code;";
        $result = $connection->query($sql);
        if ($result->num_rows > 0){
            $row = $result->fetch_array();
            if ($row["avg(result)"] > 4.4){
                echo "<h3 class='text-center text-warning font-weight-bold mt-3'> Congrats $name PID-($pid) you passed !</h3>";
            }
            else{
                echo "<h3 class='text-center text-danger font-weight-bold pt-2'>Failed</h3>";
            }
            echo "<h3 class='text-center text-success font-weight-bold pt-2'>Your CGPA of sem ". $sem." is : ". number_format((float)$row[0], 2, '.', '')."</h3>";
        }
        $sql = "Select result,sub_name from appear a, Subject s where s.sem_no = $sem and a.PID = $pid and s.Sub_code = a.Sub_code ";
        $result = $connection->query($sql);

        if ($result->num_rows > 0){
            echo"<hr>";
            echo"<h4 class='text-center text-info pt-3'>Marks Distrubution </h4>";
            echo "<table class='table text-center table-striped table-bordered container '><thead class=' table-success'><tr><th scope='col'>Subject </th><th scope='col'>Marks</th></tr></thead><tbody>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["sub_name"]."</td><td>".$row["result"]."</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "0 results";
        }

        
        $connection->close();
    }   
?>
<?php include('../templates/footer.php') ?>

