<?php 
    session_start();
    include_once "header.php"; 
    include_once('connect/db.php');
    $result  = mysql_query("select * from Application , Developer where (AppID ='".$_GET["no"]."') and Application.DevID = Developer.DevID",$con);  
    $row = mysql_fetch_array($result);
    $no = $_GET["no"];

    include_once 'connect/db-connect.php';

    include_once 'connect/function.php';

    $commentres =  getAppComment($con,$no);
    $_SESSION['appid'] = $_GET["no"];

    $result = getRating($con,$row['AppID']);
    $rate = 0;
    for ($i=0; $i<count($result) ; $i++) 
    { 
        $rate = $rate+$result[$i]['Rate'];
    }
    if ($rate != 0) {
        $rate = $rate/count($result);
        $rate = number_format($rate, 1, '.', '');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link rel="shortcut icon" href="docs-assets/ico/favicon.png" -->

    <title><?php echo ($row['AppName']);?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/stylesheet.css" rel="stylesheet">
  </head>
  <body>
  		<br>   
        <div class="container well">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2">
                    <center>
                    <img src="./logo/<?php echo $_GET["no"]?>.png" WIDTH = 120 HEIGH = 120 style="padding-left:0px; padding-right:15px; padding-bottom:10px;">
                    </div>
                    <div class="col-md-10">
                        <div class="page-header">
                        <h3><?php echo ($row['AppName']); ?></h3>
                        <br>

                        </div>
                    </div>
                    <div class="col-md-7">
                    <h3>Description</h3>
                    <?php 
                        echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                        echo $row['Description']."</p>"; 
                    ?>
                    </div>
                    <div class="col-md-5">
                        <div style="border-radius:10px; border-color:#808080; border-style:solid;padding-left:10px ;padding-top:20px; margin-bottom:10px;">
        
                        <center>
                        <a class="btn btn-success btn-lg" href="downloader.php" role="button"><span class="glyphicon glyphicon-save" aria-hidden="true"></span><?php echo " ".$row['Prize']; ?></a>
                        </center>
            
                        <dl class="dl-horizontal" >
                            <b>Size :</b>
                            <?php echo $row['Size']; ?>
                            <br>
                            <b>Developer :</b>
                            <?php echo $row['DevName']; ?>
                            <br>
                            <b>Dev's Website :</b>
                            <?php echo $row['Address']; ?>
                        </dl>      
                    </div>
                </div>
                <h2>Comment : </h2>
                <form action="addcomment.php" role="form" method="POST">
                <div class="col-md-8">
                    <div class="col-md-8">
                       <textarea class="form-control" name="usercomment" rows="3"></textarea>
                    </div>
                    <div class="col-md-4">
                        <?php if(ISSET($_SESSION['islogin'])) 
                       echo "<button type='submit' class='btn btn-lg btn-primary' >enter</button>";
                        else
                   echo "<button type='button' disabled='disabled' class='btn btn-lg btn-primary' >enter</button>";?>
                    </div>
                    </div>
                </form>
               <div class="col-md-7">
                    <?php
                    for ($i=0; $i<count($commentres) ; $i++) {
                        echo "<div class='panel panel-warning' style='margin-top:10px;'>";
                        echo "<div class='panel-heading'>";
                        echo "<h3 class='panel-title'><small>comment by</small>"."&nbsp&nbsp".$commentres[$i]['UserID']."";
                        echo "<span class='badge pull-right' style='margin-left:5px;'>".$commentres[$i]['CommentDate']."</span>";
                        echo "</h3></div>";
                        echo "<div class='panel-body'>".$commentres[$i]['Comment']."</div>";
                        echo "</div>";
                     }
                    ?>
                </div> 
                <div class="col-md-5 text-center">
                        <div style="border-radius:10px; border-color:#808080; border-style:solid;padding-left:10px ;padding-top:20px; margin-bottom:10px;">
        
                            <h1 class="rating-num" style="padding:0px; margin-top:0; margin-bottom:3px;"><?php echo $rate; ?></h1>
                            <div class="rating">
                                <?php
                                    $star = round($rate);
                                    for ($i=0; $i<5; $i++) {
                                        if ($i<$star) {
                                            echo "<span class='glyphicon glyphicon-star'></span> ";
                                        }
                                        else
                                            echo "<span class='glyphicon glyphicon-star-empty'></span> ";
                                    }
                                ?>
                            </div>
                            <div id="total-user">
                                <span class="glyphicon glyphicon-user"></span>&nbsp
                                <?php echo count($result)." total"; ?>
                            </div>
                            <?php 
                                if (isset($_SESSION['islogin'])) {
                                    echo "Vote: ";
                                    echo "<a href='rating.php?acc=".$_SESSION['islogin']."&id=".$row['AppID']."&rate=1'>1</a> ";
                                    echo "<a href='rating.php?acc=".$_SESSION['islogin']."&id=".$row['AppID']."&rate=2'>2</a> ";
                                    echo "<a href='rating.php?acc=".$_SESSION['islogin']."&id=".$row['AppID']."&rate=3'>3</a> ";
                                    echo "<a href='rating.php?acc=".$_SESSION['islogin']."&id=".$row['AppID']."&rate=4'>4</a> ";
                                    echo "<a href='rating.php?acc=".$_SESSION['islogin']."&id=".$row['AppID']."&rate=5'>5</a> ";
                                }
                            ?>
                        </div>  
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
    </html>
