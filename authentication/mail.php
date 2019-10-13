<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        $email = $_POST["email"];
        $name = $_POST['name'];
        $message = $_POST["message"];
        $type = $_POST["type"];
        $profession = $_POST["profession"];
        $message = wordwrap($message,70);
        $headers = "From:".$email;
        // echo $headers;
        $subject = $type." message by ".$name." who is a ".$profession;
        mail("yashboura303@gmail.com",$subject,$message,$headers);
        if (mail("yashboura303@gmail.com",$subject,$message,$headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {

            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } 
    else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>