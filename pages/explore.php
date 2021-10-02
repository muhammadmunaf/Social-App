<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header('location:pages/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social App</title>

    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="../styles.css?v=<?php echo time(); ?>">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>

    <?php include('header.php'); ?>

    <section class="explore-main">
        <div class="explore-section">
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
                <div class="post-img-overlay">
                    <div class="text">Hello World</div>
                </div>
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
            <a href="" class="grid-img">
                <img src="../images/post-pic-1.jpg" alt="">
            </a>
        </div>
    </section>
        
</body>
</html>