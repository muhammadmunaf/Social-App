<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social App</title>

    <link rel="stylesheet" href="../styles.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    
<?php include('header.php'); ?>

    <section class="main-profile">
        <div class="profile-info-box">
            <img src="../images/profile-pic-5.jpg" alt="" class="profile-pic">

            <div class="profile-info">
                <div class="username">
                    <p>munafhassan</p>
                    <button>Edit Profile</button>
                </div>

                <div class="numbers">
                    <a><b>1 </b> posts</a>
                    <a><b>2 </b> followers</a>
                    <a><b>0 </b> following</a>
                </div>

                <div class="name">
                    <p>Munaf | Web Designer</p>
                </div>

                <div class="pronouns">
                    <p>Designer</p>
                </div>

                <div class="bio">
                    <p>this is a sample bio</p>
                </div>

                <div class="website">
                    <a href="www.munafhassan.com">munafhassan.com</a>
                </div>
            </div>
        </div>

        <div class="posts-box">
            <div class="selection-bar-top">
                <a href="#" id="posts-selection-bar" onClick="openPosts()">
                    <img src="../icons/posts-icon.svg" alt="">
                    <p>POSTS</p>
                </a>

                <a href="#" onClick="openSaves()" id="saves-selection-bar">
                    <img src="../icons/saves-icon.svg" alt="">
                    <p>SAVES</p>
                </a>
                
            </div>

            <div id="my-posts">
                <img src="../images/post-pic-2.jpg" alt="">
                <img src="../images/post-pic-2.jpg" alt="">
                <img src="../images/post-pic-2.jpg" alt="">
                <img src="../images/post-pic-2.jpg" alt="">
                <img src="../images/post-pic-2.jpg" alt="">
                <!-- <img src="" alt="" id="filler1">
                <img src="" alt="" id="filler2"> -->

            </div>

            <div id="saved-posts">
                <img src="../images/post-pic-1.jpg" alt="">
                <img src="../images/post-pic-5.jpg" alt="">
                <img src="../images/post-pic-3.jpg" alt="">
                <img src="../images/post-pic-4.jpg" alt="">
                <!-- <img src="" alt="" id="filler1">
                <img src="" alt="" id="filler2"> -->

            </div>

        </div>
    </section>

    <script lang="JavaScript" src="../scripts/scripts.js">
        //$(document).ready(function () {
        selectionOfPosts();
        //});
    </script>
</body>
</html>