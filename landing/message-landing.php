<?php
  $name = strip_tags($_POST['name']);
  $email = strip_tags($_POST['email']);
  $phoneNumber = strip_tags($_POST['phoneNumber']);
  $message = strip_tags($_POST['message']);
  $headers = "From: www.archrecoveryhouses.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $emailMessage = 
    "<table class='form-email-message'>
      <tr>
        <td>New ARCH Florida Message</td>
      </tr>
      <tr>
        <td>$message</td>
      </tr>
      <tr>
        <td>From: $name</td>
      </tr>
      <tr>
        <td>Phone Number: $phoneNumber</td>
      </tr>
      <tr>
        <td>Email: $email</td>
      </tr>
    </table>";

  $result = mail("jgucker2013@gmail.com", "ARCH Florida Message Center", $emailMessage, $headers);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <title>A.R.C.H. | Message Received</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/landing-page.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="../css/custom.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('../templates/navbar.html');?>
    <a  name="services"></a>
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h1 class="section-heading message-received text-center">Message Received</h1>
            <hr>
            <h2 class="section-heading text-center">Remember That ARCH Hot Line is Available 24/7</h2>
            <h2 class="section-heading text-center">318-779-3066</h2>
          </div>
          <div class="col-lg-5">
            <img class="img-responsive" src="../img/mail-received.png" alt="ARCH Message Received">
          </div>
        </div>

      </div>
   <?php require_once('../templates/footer.html');?>
  </body>
</html>
