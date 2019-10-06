<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1 class="text-center">Student</h1>
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

<?php 
    if (isset($_GET["pid"]) and isset($_GET["sem"])){
        $connection = new mysqli("localhost", "yash", "yash","StudentDB");
        $pid = $_GET["pid"];
        $sem = $_GET["sem"];
        $sql = "Select avg(result) from appear a, Subject s where s.sem_no = $sem and a.PID = $pid and s.Sub_code = a.Sub_code;";
        $result = $connection->query($sql);
        if ($result->num_rows > 0){
            $row = $result->fetch_array();
            if ($row["avg(result)"] > 4.4){
                echo "<h3 class='text-center text-warning font-weight-bold pt-2'>Passed !</h3>";
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
<?php include('templates/footer.php') ?>