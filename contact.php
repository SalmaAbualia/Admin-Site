<?php

include_once "db.php";

if(isset($_POST['submit'])) {
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "SELECT * FROM `contact`";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row == 0){
        $sql = "INSERT INTO `contact` (`phone`, `email`, `address`) VALUES ('$phone', '$email', '$address')";
        $result = mysqli_query($conn, $sql);
    }
    else{
        $sql = "UPDATE `contact` SET `phone` = '$phone', `email` = '$email', `address` = '$address' WHERE id = 1";
        $result = mysqli_query($conn, $sql);
    }


    if($result) {
        header("Location: contact.php?msq=successfull");
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
            $sql = "SELECT * FROM `contact`";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

            <form method="post">
                <div class="edit">
                    <h3>Edit header section</h3>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='bx bx-phone' ></i></span>
                        <input type="text" class="form-control" placeholder="phone" aria-label="phone" aria-describedby="basic-addon1" name="phone" value="<?php echo $row['phone']?>">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='bx bxl-gmail' ></i></span>
                        <input type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1" name="email" value="<?php echo $row['email']?>">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class='bx bx-map' ></i></span>
                        <input type="text" class="form-control" placeholder="address" aria-label="address" aria-describedby="basic-addon1" name="address" value="<?php echo $row['address']?>">
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