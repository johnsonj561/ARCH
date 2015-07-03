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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

  </head>

  <body>

    <?php
      require_once('../templates/navbar.html');
    ?>
    
    <div class="content-section-a">
      <div class="container contact">
        <div class="row">
          <div class="box">
            <div class="col-lg-12">
              <hr>
              <h1 class = "intro-text text-center">Call ARCH For Immediate Help: 318-779-3066</h1>
              <h3 class = "intro-text text-center">Staff Are Available 24/7 To Help Anyone Struggling With Addiction</h3>
              <hr>
              <br>
              <h2 class="intro-text text-center">Or send a message with any questions about our halfway house services</h2>
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
            <div class="col-md-8">
              <img class = "img-responsive" src = "../img/west-palm-map.png" alt="West Palm Beach Map">
            </div>
            <div class="col-md-4">
              <img class = "img-responsive" src = "../img/jeff-head-shot.jpg" alt="Jeff Gucker - ARCH Manager">
            </div>
            <div class="col-md-4">
              <p>Phone:
                <strong>101-222-3456</strong>
              </p>
              <p>Email:
                <strong><a href="mailto:name@example.com">archrecovery@gmail.com</a></strong>
              </p>
              <p>Address:
                <strong>76 Cedar Grove Road
                  <br>West Palm Beach, FL 33407</strong>
              </p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <script src = "../js/validate.js"></script>



    <!-- Page Content -->

    <?php 
      require_once('../templates/footer.html');
    ?>

  </body>

</html>
