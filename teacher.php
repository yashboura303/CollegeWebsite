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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
                    $("#selectsem").change(function () {
                                var val = $(this).val();
                                if (val == "1") {
                                    $("#selectsub").html("<option value='BEE'>BEE</option> <option value = 'AM1' > AM - 1  </option>");
                                    }
                                    else if (val == "4") {
                                        $("#selectsub").html("<option value='COA'>COA</option><option value='CG'>CG</option><option value='OSTL'>OSTL</option><option value='OS'>OS</option> <option value = 'AM4' > AM-4 </option>");
                                        }
                                        else if (val == "3") {
                                            $("#selectsub").html("<option value='ECCF'>ECCF</option><option value='DLDA'>DLDA</option><option value='DIM'>DIM</option><option value = 'AM3' > AM - 3 </option>");
                                            }
                                            else {
                                                $("#selectsub").html("<option value=''>--Select sem first--</option>");
                                            }
                                        });
                                });
    </script>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Teacher</h1>
        <a href="authentication/teacherlogout.php" class=" text-center btn btn-danger">Logout</a>
    </div>
    <div class="container">
        <form action="teacher.php" method = "POST">
            <div class="form-group">
                <label for="">Enter PID</label>
                <input class="form-control w-50" type="number" name="pid" placeholder="student PID..">
            </div>
            <select id="selectsem" class="custom-select" name = "sem">
                <option value="item0">--Select Sem--</option>
                <option value="1">Sem 1</option>
                <option value="4">Sem 4</option>
                <option value="3">Sem 3</option>
            </select>
            <br>
            <br>
            <select id="selectsub" class="custom-select" name = "sub">
                <option value="">-- Select subject -- </option>
            </select>
            <div class="form-group pt-2">
                <label for="">Enter Marks</label>
                <input class="form-control w-50" type="text" name="marks" placeholder="marks..">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </form>
    </div>

    <?php include('templates/footer.php') ?>


    <?php 
    if(isset($_POST["pid"]) && isset($_POST["marks"]) && isset($_POST["sem"]) && isset($_POST["sub"])){
        $connection = new mysqli("localhost", "yash", "yash","StudentDB");
        $sub = $_POST["sub"];
        $sem = $_POST["sem"];
        $marks = $_POST["marks"];
        $pid = $_POST["pid"];
        // echo $sub.$sem;
        $subcode = $sub.$sem;
        $sql = "INSERT INTO appear VALUES ($pid, '$subcode',$marks);";
        // echo $sql;
        // $connection->query($sql);
        if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }


    ?>
