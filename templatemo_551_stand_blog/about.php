<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog - About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <?php
      include_once "../db.php";
      $sql = "SELECT * FROM `headerfooter`";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
    ?>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2><?php echo $row['logo']?><em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog Entries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post-details.php">Post Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>about us</h4>
                <h2>more about us!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="about-us">
      <div class="container">

      	<?php
          include_once "../db.php";
          $sql = "SELECT * FROM `about`";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result)
        ?>

        <div class="row">
          <div class="col-lg-12">
            <img src=<?php echo 'assets/images/' . $row['img']?> alt="">
            <p>Please tell your friends about TemplateMo website. Thank you. You can browse through different categories of templates such as <a rel="nofollow" href="https://templatemo.com/tag/business" target="_parent">business</a>, <a rel="nofollow" href="https://templatemo.com/tag/portfolio" target="_parent">portfolio</a>, <a rel="nofollow" href="https://templatemo.com/tag/restaurant" target="_parent">restaurant</a>, etc. Pellentesque quis luctus libero. Maecenas pretium molestie erat, ac tincidunt leo gravida ac. Cras ullamcorper eu ipsum eu sollicitudin. Fusce vitae commodo turpis. Integer ullamcorper purus nec justo mollis fermentum. Nunc imperdiet erat nec lacinia laoreet. <br><br>Maecenas faucibus ullamcorper felis vitae finibus. Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque.</p>
          </div>
        </div>

        
        
        <div class="row">
          <div class="col-lg-6">
            <h4><?php echo $row['title1'];?></h4>
          	<p><?php echo $row['description1'];?></p>
          </div>
          <div class="col-lg-6">
          <h4><?php echo $row['title2'];?></h4>
          	<p><?php echo $row['description2'];?></p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-4 col-md-6">
          <h4><?php echo $row['title3'];?></h4>
          	<p><?php echo $row['description3'];?></p></div>
          <div class="col-lg-4 col-md-6">
          <h4><?php echo $row['title4'];?></h4>
          	<p><?php echo $row['description4'];?></p></div>
          <div class="col-lg-4">
          <h4><?php echo $row['title5'];?></h4>
          	<p><?php echo $row['description5'];?></p></div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-3 col-md-6">
          <h4><?php echo $row['title6'];?></h4>
          	<p><?php echo $row['description6'];?></p></div>
          <div class="col-lg-3 col-md-6">
          <h4><?php echo $row['title7'];?></h4>
          	<p><?php echo $row['description7'];?></p></div>
          <div class="col-lg-3 col-md-6">
          <h4><?php echo $row['title8'];?></h4>
          	<p><?php echo $row['description8'];?></p></div>
          <div class="col-lg-3 col-md-6">
          <h4><?php echo $row['title9'];?></h4>
          	<p><?php echo $row['description9'];?></p></div>
        </div>

        <?php
          include_once "../db.php";
          $sql2 = "SELECT * FROM `social media`";
          $result2 = mysqli_query($conn, $sql2);
          $row2 = mysqli_fetch_assoc($result2);
        ?>
        
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="<?php echo $row2['facebook'];?>"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo $row2['twitter'];?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo $row2['instagram'];?>"><i class="fa fa-instagram"></i></a></li>
            
            </ul>
          </div>
        </div>
        
        
      </div>
    </section>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <ul class="social-icons">
              <li><a href="<?php echo $row2['facebook'];?>">Facebook</a></li>
              <li><a href="<?php echo $row2['twitter'];?>">Twitter</a></li>
              <li><a href="<?php echo $row2['instagram'];?>">Instagram</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright2021.Clever Mind POB ICT</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>