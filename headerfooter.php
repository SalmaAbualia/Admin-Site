<?php

include_once "db.php";

if(isset($_POST['submit'])) {
    $logo = $_POST['logo'];
    $taptext = $_POST['taptext'];

    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];

    $sql1 = "SELECT * FROM `headerfooter`";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

    if($row1 == 0){
        $sql = "INSERT INTO `headerfooter` (`id`, `logo`, `taptext`) VALUES (1, '$logo', '$taptext')";
        $result = mysqli_query($conn, $sql);
    }
    else{
        $sql = "UPDATE `headerfooter` SET `logo` = '$logo', `taptext` = '$taptext' WHERE id = 1";
        $result = mysqli_query($conn, $sql);
    }

    $sql2 = "SELECT * FROM `social media`";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);

    if($row2 == 0){
        $sql = "INSERT INTO `social media` (`facebook`, `instagram`, `twitter`) VALUES ('$facebook', '$instagram', '$twitter')";
        $result = mysqli_query($conn, $sql);
    }
    else{
        $sql = "UPDATE `social media` SET `facebook` = '$facebook', `instagram` = '$instagram', `twitter` = '$twitter' WHERE id = 1";
        $result = mysqli_query($conn, $sql);
    }

    if($result) {
        header("Location: headerfooter.php?msq=new record created successfully");
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

            <form method="post">
                <div class="edit">
                    <h3>Edit header section</h3>

                    <?php
                        $sql = "SELECT * FROM `headerfooter`";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Logo</span>
                        <input type="text" class="form-control" placeholder="logo" aria-label="logo" aria-describedby="basic-addon1" name="logo" value="<?php echo $row['logo']?>">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tap text</span>
                        <input type="text" class="form-control" placeholder="tapteext" aria-label="taptext" aria-describedby="basic-addon1" name="taptext" value="<?php echo $row['taptext']?>">
                    </div>

                </div>
                <div class="edit">
                    <h3>Edit footer section</h3>

                    <?php
                        $sql = "SELECT * FROM `social media`";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                    ?>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='bx bxl-facebook' ></i></span>
                        <input type="text" class="form-control" placeholder="facebook" aria-label="facebook" aria-describedby="basic-addon1" name="facebook" value="<?php echo $row['facebook']?>">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='bx bxl-instagram' ></i></span>
                        <input type="text" class="form-control" placeholder="instagram" aria-label="instagram" aria-describedby="basic-addon1" name="instagram" value="<?php echo $row['instagram']?>">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='bx bxl-twitter'></i></span>
                        <input type="text" class="form-control" placeholder="twitter" aria-label="twitter" aria-describedby="basic-addon1" name="twitter" value="<?php echo $row['twitter']?>">
                    </div>

                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>