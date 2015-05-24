<?php
	include_once 'db-connect.php';
   	include_once 'connect/function.php'
?>

<div class="container">

          <h2><?php  
          		$word = getDevName($con,$_GET["DevID"]);    
          		echo $word[0]['DevName'];
          		?>
          </h2>
		  <hr>
          <div class="row">
          	<?php 
          		$myapp = getDevApp($con,$_GET["DevID"]);
          		for ($i=0; $i<count($myapp); $i++) { ?>
	          	<div class="col-md-2" data-toggle="tooltip" data-placement="bottom" 
	          	title="<?php echo $myapp[$i]['AppName']; ?>">
				    <a href="detail.php?no=<?php echo $myapp[$i]['AppID']; ?>" class="thumbnail">
				      <img src="logo/<?php echo $myapp[$i]['AppID']; ?>.png" height='120' width='120' 
				      align='top' style='padding-bottom:15px' class="img-rounded">
				      <?php $subappname = partialString($myapp[$i]['AppName']); ?>
				      <p> <?php echo $subappname; ?></p>
				      <p> <?php echo $myapp[$i]['Prize']; ?></p>
				      <!--<p> <?php echo $myapp[$i]['AppName']; ?></p>-->  <!--for rating-->
				    </a>
			  	</div>
		  	<?php } ?>
          </div>
</div>