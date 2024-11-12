<?php

include_once "db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql1 = "SELECT * FROM `blogs` WHERE id = $id;";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

    $title = $row1['title'];
    echo $title;

    $sql2 = "DELETE FROM `blogs` WHERE id = $id";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "DELETE FROM `innerblog` WHERE `title` = '$title'";
    $result3 = mysqli_query($conn, $sql3);

    if($result1 || $result2 || $result3) {
        header("Location: index.php?msq=record$id deleted successfully");
    }
    else{
        echo "Faild: " . mysqli_error($conn);
    }
}

?>

<?php
    $sql = "SELECT * FROM `headerfooter`";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
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

            <div class="edit">
                <table class="table table-striped table-bordered">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sup title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Blooger name</th>
                        <th scope="col">Date</th>
                        <th scope="col">#comment</th>
                        <th scope="col">OP</th>
                      </tr>
                    </thead>

                    <?php
                        include_once "db.php";
                        $sql = "SELECT * FROM `blogs`";
                        $result = mysqli_query($conn, $sql);
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $i++;
                    ?>

                    <tbody>
                      <tr>
                        <th scope="row"><?=$i;?></th>
                        <td><img src="<?php echo 'images/' . $row['img']?>" style="width:10rem;"></td>
                        <td><?php echo $row['title']?></td>
                        <td><?php echo $row['suptitle']?></td>
                        <td><?php echo $row['description']?></td>
                        <td><?php echo $row['bloogername']?></td>
                        <td><?php echo $row['date']?></td>
                        <td></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']?>"><i class='bx bx-edit-alt' ></i></a> 
                            <a href="index.php?id=<?php echo $row['id']?>"><i class='bx bx-trash' ></i></a>
                        </td>
                      </tr>
                    </tbody>
                    <?php }?>
                  </table>
            </div>
            
        </div>
    </div>
    
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html><?php echo $row['name']?>