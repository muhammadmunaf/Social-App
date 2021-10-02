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
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>

    <!-- <header>
        <div class="header-container">
            <img src="images/logo.svg" alt="" class="logo-header">

            <form action="" class="search-bar">

                <input type="search" name="search" value="Search" onfocus="this.value=''">
            </form>

            <div class="nav-btns">
                <a href="">
                    <img src="icons/selected/home.svg" alt="">
                </a>
                <a href="">
                    <img src="icons/add-circle.svg" alt="">
                </a>
                <a href="">
                    <img src="icons/explore-outlined.svg" alt="">
                </a>
                <a href="">
                    <img src="icons/notification.svg" alt="">
                </a>
                <a href="profile.html">
                    <img src="icons/profile.svg" alt="">
                </a>
            </div>
        </div>
        
    </header> -->

    <?php include('pages/header.php'); ?>

    <section class="main">
        <div class="feed-section">

            <div class="stories">
                <!-- check how to automatically bring those icons etc here, below are 2 for testing styling only -->

                <div class="story-display">
                    <img src="images/profile-pic-3.jpg" alt="">
                    <p>intomyworld</p>
                </div>

                <div class="story-display">
                    <img src="images/profile-pic-2.jpg" alt="">
                    <p>aestheicskies</p>
                </div>

                <div class="story-display">
                    <img src="images/profile-pic-2.jpg" alt="">
                    <p>aestheicskies</p>
                </div>

                <div class="story-display">
                    <img src="images/profile-pic-2.jpg" alt="">
                    <p>aestheicskies</p>
                </div>

                <div class="story-display">
                    <img src="images/profile-pic-2.jpg" alt="">
                    <p>aestheicskies</p>
                </div>

                <div class="story-display">
                    <img src="images/profile-pic-2.jpg" alt="">
                    <p>aestheicskies</p>
                </div>
            </div>

            <div class="posts">
                <div class="post-display">
                    <div class="top-bar">
                        <img src="images/profile-pic-1.jpg" alt="" class="post-profile-icon">
                        <p class="post-profile-username">whatismyname</p>
                    </div>
                    <img src="images/post-pic-1.jpg" alt="" class="main-post-img">
                    <div class="bottom-bar">
                    <a href="">
                            <img src="icons/posts/heart-outlined.svg" alt="">
                        </a>
                        <a href="" style="margin-left: 8px;">
                            <img src="icons/posts/comment-outlined.svg" alt="">
                        </a>

                        <a href="" style="margin-left: auto;">
                            <img src="icons/posts/pin-outlined.svg" alt="" >
                        </a>
                        
                    </div>
                    <span class="post-caption"><a href="" class="caption-username">whatismyname</a> This is just a sample caption to test whether the design is working fine or not. It is long so we can see how it moves to the next line. Thank you.</span>
                    
                    <form action="" class="post-comment-add">
                        
                        <input type="text" name="comment-text" value="Add a comment..." onfocus="this.value=''">
                        <input type="submit" value="Post">
                    </form>
                </div>

                <div class="post-display">
                    <div class="top-bar">
                        <img src="images/profile-pic-3.jpg" alt="" class="post-profile-icon">
                        <p class="post-profile-username">aestheicskies</p>
                    </div>
                    <img src="images/post-pic-2.jpg" alt="" class="main-post-img">
                    <div class="bottom-bar">
                        <a href="">
                            <img src="icons/posts/heart-outlined.svg" alt="">
                        </a>
                        <a href="" style="margin-left: 8px;">
                            <img src="icons/posts/comment-outlined.svg" alt="">
                        </a>

                        <a href="" style="margin-left: auto;">
                            <img src="icons/posts/pin-outlined.svg" alt="" >
                        </a>
                        
                    </div>
                    <span class="post-caption"><a href="" class="caption-username">aestheicskies</a> This is just a second sample caption to test whether the design is working fine or not. It is long so we can see how it moves to the next line. Thank you.</span>
                    
                    <form action="" class="post-comment-add">
                        
                        <input type="text" name="comment-text" value="Add a comment..." onfocus="this.value=''">
                        <input type="submit" value="Post">
                    </form>
                </div>

            </div>

        </div>

        <div class="side-section">
            <div class="myprofile">
                <img src="images/profile-pic-5.jpg" alt="" class="my-profile-pic">
                <div class="my-profile-text">
                    <h3><?php echo $_SESSION['username'] ?></h3>
                    <p>This is the name</p>
                </div>
                <a href="php_files/logout.php" class="logout">Logout</a>
            </div>

            <div class="suggestions-box">
                <div class="top">
                    <p>Suggestions For You</p>
                    <a href="">See More</a>
                </div>

                <div class="suggestion-profile">
                    <img src="images/profile-pic-2.jpg" alt="">
                    <p>aestheicskies</p>

                    <button class="follow-btn">Follow</button>
                </div>

                <div class="suggestion-profile">
                    <img src="images/profile-pic-1.jpg" alt="">
                    <p>whatismyname</p>

                    <button class="follow-btn">Follow</button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>