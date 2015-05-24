<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Appstore project</title>


     <link href="css/stylesheet.css" rel="stylesheet">

     <link href="css/carousel.css" rel="stylesheet" />

     <link href="css/bootstrap-theme.min.css" rel="stylesheet" />

     <link href="css/bootstrap.min.css" rel="stylesheet">

     <link href="css/jumbotron.css" rel="stylesheet">

    <link href="css/half-slider.css" rel="stylesheet">



    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/2.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php include_once "header.php"; ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <!-- Carousel
    ================================================== -->
   <div class="bs-docs-header" id="content" tabindex="-1">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <p>
                <a href="detail.php?no=A352">
                <img src="logo/minecraft.jpeg"  height="350" width="700">
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="item"> 
          <div class="container">
            <div class="carousel-caption">
              <p>
                <a href="detail.php?no=A350">
                <img src="logo/maxres.jpg"  height="350" width="700">
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <p>
                <a href="detail.php?no=A584">
                <img src="logo/guitartuner.jpg"  height="350" width="700">
                </a> 
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <p>
                <a href="detail.php?no=A1016">
                <img src="logo/GPSTracks.jpg"  height="350" width="700">
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>

      <?php include_once "connect/indexblock.php"; ?>

      <hr>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
