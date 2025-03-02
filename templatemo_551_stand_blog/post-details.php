<?php

include_once "../db.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `comment` (`name`, `email`, `subject`, `comment`) VALUES ('$name', '$email', '$subject', '$comment')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: post-details.php?msq=new record created successfully");
    }
    else{
        echo "Faild: " . mysqli_error($conn);
    }
}

?>
<?php
      include_once "../db.php";
      $sql = "SELECT * FROM `headerfooter`";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
    ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Stand Blog - Post Details</title>

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
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog Entries</a>
              </li>
              <li class="nav-item active">
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
                <h4>Post Details</h4>
                <h2>Single blog post</h2>
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
                $sql = "SELECT * FROM `innerblog`";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if($row == 0){

              ?>
              <div class="col-lg-12">
                  <div class="blog-post">
                  </div>
              </div>
              <?php }
              else {?>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="<?php echo 'assets/images/' . $row['img']?>" style="height: 20rem;">
                    </div>
                    <div class="down-content">
                      <span><?php echo $row['title'];?></span>
                      <a href="post-details.html"><h4><?php echo $row['suptitle'];?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $row['bloogername'];?></a></li>
                        <li><a href="#"><?php echo $row['date'];?></a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <p><?php echo $row['description'];?></p><div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>

                          <?php
                            include_once "../db.php";
                            $sql2 = "SELECT * FROM `social media`";
                            $result2 = mysqli_query($conn, $sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                          ?>

                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="<?php echo $row2['facebook'];?>">Facebook</a>,</li>
                              <li><a href="<?php echo $row2['instagram'];?>">Instagram</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php }?>

                

                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">

                    <?php
                      include_once "../db.php";
                      $sql = "SELECT * FROM `comment`";
                      $result = mysqli_query($conn, $sql);
                      $i = 0;
                      while($row = mysqli_fetch_assoc($result)){
                        $i++;
                      }
                    ?>

                      <h2><?=$i;?> comments</h2>
                    </div>

                    <div class="content">
                      <ul class="ul">

                      <?php
                        include_once "../db.php";
                        $sql = "SELECT * FROM `comment`";
                        $result = mysqli_query($conn, $sql);
                        $i=0;
                        while($row = mysqli_fetch_assoc($result)){
                          $i++;
                          if($i % 2 == 0){
                      ?>

                        <li class="replied">
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-0<?php echo(rand(1,3));?>.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4><?php echo $row['name']?><span><?php echo date("Y/m/d");?></span></h4>
                            <p><?php echo $row['comment']?></p>
                          </div>
                        </li>
                        <?php }
                        else {
                        ?>
                        <li>
                          <div class="author-thumb">
                            <img src="assets/images/comment-author-0<?php echo(rand(1,3));?>.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4><?php echo $row['name']?><span><?php echo date("Y/m/d");?></span></h4>
                            <p><?php echo $row['comment']?></p>
                          </div>
                        </li>
                        <?php }?>
                        <?php }?>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action="#" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="comment" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button name="submit" type="submit" id="form-submit" class="main-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
