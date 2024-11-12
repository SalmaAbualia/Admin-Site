<?php

include_once "db.php";

if(isset($_POST['submit'])) {
    $img = $_POST['img'];
    $title1 = $_POST['title1'];
    $description1 = $_POST['description1'];

    $title2 = $_POST['title2'];
    $description2 = $_POST['description2'];

    $title3 = $_POST['title3'];
    $description3 = $_POST['description3'];

    $title4 = $_POST['title4'];
    $description4 = $_POST['description4'];

    $title5 = $_POST['title5'];
    $description5 = $_POST['description5'];

    $title6 = $_POST['title6'];
    $description6 = $_POST['description6'];

    $title7 = $_POST['title7'];
    $description7 = $_POST['description7'];

    $title8 = $_POST['title8'];
    $description8 = $_POST['description8'];

    $title9 = $_POST['title9'];
    $description9 = $_POST['description9'];

    $sql = "UPDATE `about` SET `img` = '$img',
    `title1` = '$title1', `description1` = '$description1',
    `title2` = '$title2', `description2` = '$description2',
    `title3` = '$title3', `description3` = '$description3',
    `title4` = '$title4', `description4` = '$description4',
    `title5` = '$title5', `description5` = '$description5',
    `title6` = '$title6', `description6` = '$description6',
    `title7` = '$title7', `description7` = '$description7',
    `title8` = '$title8', `description8` = '$description8',
    `title9` = '$title9', `description9` = '$description9' ";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: about.php?msq=new record created successfully");
    }
    else{
        echo "Faild: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 26</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <div class="sidebar-logo">
                    <a href="#">AdminSite</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="headerfooter.php" class="sidebar-link">
                        <i class='bx bx-desktop'></i>
                        <span>Header & Footer</span> 
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#slide" aria-expanded="false" aria-controls="slide">
                        <i class='bx bx-desktop'></i>
                        <span>Slidebar</span> 
                    </a>
                    <ul id="slide" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="background-color: #153159;">
                        <li class="sidebar-item">
                            <a href="addnew.php" class="sidebar-link">Add new</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index.php" class="sidebar-link">View all</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="about.php" class="sidebar-link">
                        <i class='bx bx-desktop'></i>
                        <span>About us</span> 
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="innerblog.php" class="sidebar-link">
                        <i class='bx bx-desktop'></i>
                        <span>Inner blog</span> 
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="contact.php" class="sidebar-link">
                        <i class='bx bx-desktop'></i>
                        <span>Contcat us</span> 
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#noti" aria-expanded="false" aria-controls="noti">
                        <i class='bx bx-desktop'></i>
                        <?php
                            include_once "db.php";
                            $sql = "SELECT * FROM `message`";
                            $result = mysqli_query($conn, $sql);
                            $i=0;
                            while($row = mysqli_fetch_assoc($result)){
                            $i++;}
                        ?>
                        <span>Notification  <span style="background-color: red; border-radius: 50%; padding: .1rem .3rem;"><?php echo $i?></span></span> 
                    </a>
                    <ul id="noti" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="background-color: #153159;">
                    <?php
                        include_once "db.php";
                        $sql = "SELECT * FROM `message`";
                        $result = mysqli_query($conn, $sql);
                        $i=0;
                        while($row = mysqli_fetch_assoc($result)){
                          $i++;
                    ?>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link"><?php echo $i . ') ' . $row['name'] . '<br>' . 'message: '. $row['content']?></a>
                        </li>
                        <?php }?>
                    </ul>
                </li>
            </ul>
        </aside>

        <div class="main p-4">
            <div class="text-center">
                <h1>Admin Site</h1>
                <hr>
            </div>

            <?php
            
            $sql = "SELECT * FROM `about` WHERE id = 1";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            ?>

            <form method="post">
                <div class="edit">
                    <h3>Edit about us section</h3>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">image</span>
                        <input type="file" class="form-control" placeholder="img" aria-label="img" aria-describedby="basic-addon1" name="img" value="<?php echo $row['img']?>">
                    </div>

                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title 1</span>
                        <input type="text" class="form-control" placeholder="title1" aria-label="title1" aria-describedby="basic-addon1" name="title1" value="<?php echo $row['title1']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Description 1</span>
                        <input type="text" class="form-control" placeholder="description1" aria-label="description1" aria-describedby="basic-addon1" name="description1" value="<?php echo $row['description1']?>">
                    </div>

                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title 2</span>
                        <input type="text" class="form-control" placeholder="title2" aria-label="title2" aria-describedby="basic-addon1" name="title2"  value="<?php echo $row['title2']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Description 2</span>
                        <input type="text" class="form-control" placeholder="description2" aria-label="description2" aria-describedby="basic-addon1" name="description2" value="<?php echo $row['description2']?>">
                    </div>

                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title 3</span>
                        <input type="text" class="form-control" placeholder="title3" aria-label="title3" aria-describedby="basic-addon1" name="title3" value="<?php echo $row['title3']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Description 3</span>
                        <input type="text" class="form-control" placeholder="description3" aria-label="description3" aria-describedby="basic-addon1" name="description3" value="<?php echo $row['description3']?>">
                    </div>

                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title 4</span>
                        <input type="text" class="form-control" placeholder="title4" aria-label="title4" aria-describedby="basic-addon1" name="title4" value="<?php echo $row['title4']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Description 4</span>
                        <input type="text" class="form-control" placeholder="description4" aria-label="description4" aria-describedby="basic-addon1" name="description4" value="<?php echo $row['description4']?>">
                    </div>

                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title 5</span>
                        <input type="text" class="form-control" placeholder="title5" aria-label="title5" aria-describedby="basic-addon1" name="title5" value="<?php echo $row['title5']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Description 5</span>
                        <input type="text" class="form-control" placeholder="description5" aria-label="description5" aria-describedby="basic-addon1" name="description5" value="<?php echo $row['description5']?>">
                    </div>

                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title 6</span>
                        <input type="text" class="form-control" placeholder="title6" aria-label="title6" aria-describedby="basic-addon1" name="title6" value="<?php echo $row['title6']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Description 6</span>
                        <input type="text" class="form-control" placeholder="description6" aria-label="description6" aria-describedby="basic-addon1" name="description6" value="<?php echo $row['description6']?>">
                    </div>

                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title 7</span>
                        <input type="text" class="form-control" placeholder="title7" aria-label="title7" aria-describedby="basic-addon1" name="title7" value="<?php echo $row['title7']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Description 7</span>
                        <input type="text" class="form-control" placeholder="description7" aria-label="description7" aria-describedby="basic-addon1" name="description7"  value="<?php echo $row['description7']?>">
                    </div>

                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title 8</span>
                        <input type="text" class="form-control" placeholder="title8" aria-label="title8" aria-describedby="basic-addon1" name="title8" value="<?php echo $row['title8']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Description 8</span>
                        <input type="text" class="form-control" placeholder="description8" aria-label="description8" aria-describedby="basic-addon1" name="description8" value="<?php echo $row['description8']?>">
                    </div>

                    <br><hr><br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Title 9</span>
                        <input type="text" class="form-control" placeholder="title9" aria-label="title9" aria-describedby="basic-addon1" name="title9" value="<?php echo $row['title9']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Description 9</span>
                        <input type="text" class="form-control" placeholder="description9" aria-label="description9" aria-describedby="basic-addon1" name="description9" value="<?php echo $row['description9']?>">
                    </div>

                </div>
               <!-- <div class="edit">
                    <h3>Edit social media accounts</h3>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='bx bxl-facebook' ></i></span>
                        <input type="text" class="form-control" placeholder="facebook" aria-label="facebook" aria-describedby="basic-addon1" name="facebook">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='bx bxl-instagram' ></i></span>
                        <input type="text" class="form-control" placeholder="instagram" aria-label="instagram" aria-describedby="basic-addon1" name="instagram">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='bx bxl-twitter'></i></span>
                        <input type="text" class="form-control" placeholder="twitter" aria-label="twitter" aria-describedby="basic-addon1" name="twitter">
                    </div>

                </div>-->
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>