<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog Posts</title>

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
  <?php
      include_once "../db.php";
      $sql = "SELECT * FROM `headerfooter`";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
    ?>
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
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item active">
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
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

              <?php
                include_once "../db.php";
                $sql = "SELECT * FROM `blogs`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
              ?>

                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="<?php echo 'assets/images/' . $row['img']?>" alt="">
                    </div>
                    <div class="down-content">
                      <span><?php echo $row['title'];?></span>
                      <a href="post-details.html"><h4><?php echo $row['suptitle'];?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $row['bloogername'];?></a></li>
                        <li><a href="#"><?php echo $row['date'];?></a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <p><?php echo $row['description'];?></p>
                      
                    </div>
                  </div>
                </div>

                <?php }?>

                <div class="col-lg-12">
                  <ul class="page-numbers">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      include_once "../db.php";
      $sql2 = "SELECT * FROM `social media`";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
    ?>
    
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