<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACE</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/contact.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    
    <link href="../img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/home.css" type="text/css">
    <link rel="stylesheet" href="../styles/login.css" text="text/css">
</head>
<body>
<?php require("../templates/header.php")?>
<div class="p-5 backgroundLogin text-white">
<div class="container">
    <h2 class="text-center pb-4">Contact</h2>
    <div id="form-messages"></div>
<form method="post" action="" id="ajax-contact">
    <div class="form-group row">
    <div class="col">
      <input type="text" required class="form-control" placeholder="Name" id = "formEmail" name = "name">
    </div>
    <div class="col">
    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Profession</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect"required name="profession">
        <option selected>Choose...</option>
        <option value="student">Student</option>
        <option value="parent">Parent</option>
        <option value="other">Other</option>
      </select>
    </div>
  </div>
  <div class="form-group">
      <input type="text" required class="form-control" placeholder="e-mail" id="formName" name = "email">
    </div>
  <div class="form-group">
  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Type</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="type">
        <option selected value="Feedback">Feedback</option>
        <option value="Grievance">Grievance</option>
        <option value="Admission">Admission</option>
        <option value="Other">Other</option>
      </select>
      </div>
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Write..</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" required rows="3" name="message"></textarea>
  </div>
  <button type="button" class="btn btn-primary" id="submitButton" name="submit">Submit</button>
</form>
</div>
</div>
<?php include('../templates/footer.php') ?>
