<?php
    function BadEmail($str)
    {
        $injections = array('(\n+)'),
        '(\r+)', '(\t+)', '(%0A+)', '(%0D+)', '(%08+)', '(%09+)');

        $inject = join("|", $injections);
        $inject = "/$inject/i";

        if(match($inject, $str))
        {
            return true;
        }
        else{
            return false;
        }
    }

    if(IsInjected($visitor_email))
    {
        echo "Bad email value!";
        exit;
    }

    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    if ($visitor_email == "" || $message == "")
    {
        echo "You must fill in all feilds";
        exit;
    }

    $to = "dbjones2518@lcmail.lcsc.edu";
    $headers = "From: $visitor_email \r\n";
    mail($to, $email_subject, $message, $headers);
?>

<!--http://form.guide/email-form/php-form-to-email.html-->