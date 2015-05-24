<div class= "active">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
       <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">AppStore</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href='category.php?CID=C0'>Books</a></li>
                    <li><a href="category.php?CID=C1">Business</a></li>
                    <li><a href="category.php?CID=C2">Education</a></li>
                    <li><a href="category.php?CID=C3">Entertainment</a></li>
                    <li><a href="category.php?CID=C4">Finance</a></li>
                    <li><a href="category.php?CID=C5">Food & Drink</a></li>
                    <li><a href="category.php?CID=C6">Games</a></li>
                    <li><a href="category.php?CID=C7">Health & Fitness</a></li>
                    <li><a href="category.php?CID=C8">Lifestyle</a></li>
                    <li><a href="category.php?CID=C9">Medical</a></li>
                    <li><a href="category.php?CID=C10">Music</a></li>
                    <li><a href="category.php?CID=C11">Navigation</a></li>
                    <li><a href="category.php?CID=C12">News</a></li>
                    <li><a href="category.php?CID=C13">Photo & Video</a></li>
                    <li><a href="category.php?CID=C14">Productivity</a></li>
                    <li><a href="category.php?CID=C15">Reference</a></li>
                    <li><a href="category.php?CID=C16">Social Networking</a></li>
                    <li><a href="category.php?CID=C17">Sports</a></li>
                    <li><a href="category.php?CID=C18">Travel</a></li>
                    <li><a href="category.php?CID=C19">Utilities</a></li>
                    <li><a href="category.php?CID=C20">Weather</a></li>
                  </ul>
                </li>
          </ul>

          <?php
          session_start();
          if(isset($_SESSION['islogin']))
            { ?>
          <form class="navbar-form navbar-right">
            <font color='#00FF99'>
              <?php echo "Welcome back ,  ".$_SESSION['islogin']; ?>
              <a href="logout.php" class="btn btn-danger"> Log Out </a>
            </font>
          </form>
          <?php }
          else{ ?>
          <form class="navbar-form navbar-right" role="form" method="POST" action="checklogin.php">
            <div class="form-group">
              <input type="text" placeholder="Username" name="username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Log in</button>
            <a class="btn btn-danger" href="register.php" role="button">Register</a>
          </form>
        <?php }
          ?>

        </div>
      </div>
  </div>