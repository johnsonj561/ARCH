<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ARCH of Florida Halfway Houses - View photos of our halfway house properties, bedrooms, staff,
                                      and various events attended over the years">
    <meta name="author" content="ARCH of Florida">
    <meta name="ROBOTS" content="INDEX, FOLLOW">

    <link rel="icon" type="image/x-icon" href="../img/house-favicon.png"/>

    <title>A.R.C.H. | Photo Gallery</title>
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
    <a name="top"></a>
    <div class="container contact">
      <div class="row contact">
        <div class="col-lg-12 text-center">
          <h1 class="section-heading">ARCH Florida Halfway House Photos</h1>
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div id="carousel-example-generic" class="carousel slide">
              <!-- Indicators -->
              <ol class="carousel-indicators hidden-xs">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img class="img-responsive img-full" src="../img/bedroom-1.jpg" alt="Green Grass and Flowers">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/house-1.jpg" alt="Landscape Design">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/bedroom-2.jpg" alt="Tree and Mulch Design">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/game-room.jpg" alt="Lawn Care and Maintenance">
                </div>
                <div class="item">
                  <img class="img-responsive img-full" src="../img/west-palm-beach-water.jpg" alt="Flower Bed Design">
                </div>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="icon-prev"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="icon-next"></span>
              </a>
            </div>
          </div>
          <div class="col-lg-1"></div>
        </div>
      </div>
    </div>

    <!-- Script to Activate the Carousel -->
    <script>
      $('.carousel').carousel({
        interval: 5000 //changes the speed
      })
    </script>
    <?php require_once('../templates/social-media-buttons.html');?>
    <?php require_once('../templates/footer.html');?>
  </body>
</html>