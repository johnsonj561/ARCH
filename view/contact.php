<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ARCH of Florida Halfway Houses - Call or email ARCH of Florida to check on bed availability or ask
                                      any questions regarding our residence and recovery program">
    <meta name="author" content="ARCH of Florida">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../img/house-favicon.png"/>

    <title>A.R.C.H. | Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/landing-page.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="../css/custom.css" rel="stylesheet">
    <?php require_once('../templates/facebook-google-plugin.html'); ?>
  </head>
  <body>
    <?php
require_once('../templates/navbar.html');
    ?>
    <div class="container">
      <a name="top"></a>
      <div class="container contact">
        <div class="row">
          <div class="box">
            <div class="col-lg-12">
              <hr>
              <h1 class = "intro-text text-center">Call ARCH For Immediate Help: 318-779-3066</h1>
              <h3 class = "intro-text text-center">Staff Are Available 24/7 To Help Anyone Struggling With Addiction</h3>
              <hr>
              <br>
              <h2 class="intro-text text-center">Message Us With Any Questions About Our Sober Living Services</h2>
              <hr>
              <form role="form" action="../landing/message-landing.php" method = "post"
                    onsubmit = "return onContactSubmit()">
                <div class="row">
                  <div class="form-group col-lg-4">
                    <label>Name</label>
                    <input type="text" class="form-control" name = "name" id = "name" autofocus required>
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name = "email" id = "email">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" name = "phoneNumber" id = "phoneNumber" required>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group col-lg-12">
                    <label>Message</label>
                    <textarea class="form-control" rows="6" name = "message" id = "message" required></textarea>
                  </div>
                  <!-- Error element used to display error messages to user if fields are completed correctly -->
                  <div class="form-group col-lg-12">
                    <p class = "intro-text text-center" name = "errorElement" id = "errorElement"></p>
                  </div>
                  <div class="form-group col-lg-12 text-center">
                    <input type="hidden" name="save" value="contact">
                    <button type="submit" class="btn btn-default btn-lg grey-blue">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="box">
            <div class="col-lg-12">
              <hr>
            </div>
            <div class="col-md-6">
              <img class = "img-responsive center-image" src = "../img/west-palm-map.jpg" alt="West Palm Beach Map">
              <br><br>
              <div class="text-center">
                <p>Phone:
                  <strong><a href="tel:+15619097795" class="contact-link">318-779-3066</a></strong>
                </p>
                <p>Email:
                  <strong><a href="mailto:jgucker2013@gmail.com">jgucker2013@gmail.com</a></strong>
                </p>
                <p>Address:
                  <strong>6130 N Ironwood Ln
                    <br>Lantana, FL 33462</strong>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <img class = "img-responsive center-image" src = "../img/jeff-head-shot-2.jpg" alt="Jeff Gucker - ARCH Manager">
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div><br><br>
      <div class="row"><a href="#top">Back to Top</a><br></div>
    </div>
    <script src = "../js/validate.js"></script>
    <?php require_once('../templates/social-media-buttons.html');?>
    <?php require_once('../templates/footer.html');?>
  </body>
</html>
