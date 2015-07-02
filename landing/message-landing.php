<?php
  $name = strip_tags($_POST['name']);
  $email = strip_tags($_POST['email']);
  $phoneNumber = strip_tags($_POST['phoneNumber']);
  $message = strip_tags($_POST['message']);
  $headers = "From: www.sharpcutlawns.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $emailMessage = 
    "<table class='form-email-message'>
      <tr>
        <td>New Sharp Cut Message</td>
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

  $result = mail("jimj908@hotmail.com", "New Sharp Cut Message", $emailMessage, $headers);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ARCH Opportunities</title>

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

    <?php
      require_once('../templates/navbar.html');
    ?>

    <!-- Page Content -->

    <a  name="services"></a>
    <div class="content-section-a">

      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-sm-6">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h1 class="section-heading text-center">Message Received</h1>
            <hr>
            <h2 class="section-heading text-center">Remember That ARCH Hot Line is Available 24/7</h2>
            <h2 class="section-heading text-center">318-779-3066</h2>
          </div>
          <div class="col-lg-5 col-lg-offset-2 col-sm-6">
            <img class="img-responsive" src="../img/mail-received.png" alt="">
          </div>
        </div>

      </div>
      <!-- /.container -->

    </div>
    <!-- /.content-section-a -->


   <?php 
      require_once('../templates/footer.html');
    ?>
  </body>

</html>
