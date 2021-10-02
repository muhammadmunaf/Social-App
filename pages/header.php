<header>
        <div class="header-container">
            <?php
                $backfiles = debug_backtrace();
                if(strpos($backfiles[0]['file'], "index.php") !== false)
                {
                    echo "<img src='images/logo.svg' class='logo-header'>";
                }
                else
                {
                    echo "<img src='../images/logo.svg' class='logo-header'>";
                }
            ?>

            <form action="" class="search-bar">
                <!-- <input type="text" name="search">
                <input type="submit" value=""> -->

                <input type="search" name="search" value="Search" onfocus="this.value=''">
            </form>

            <div class="nav-btns">
                
                <?php
                    /* $backfiles = debug_backtrace(); */
                    /* echo $backfiles[0]['file']; */

                    if(strpos($backfiles[0]['file'], "index.php") !== false)
                    {
                        echo "<a href=''>
                        <img src='icons/selected/home.svg'>
                        </a>
                        <a href='pages/explore.php'>
                            <img src='icons/explore-outlined.svg'>
                        </a>
                        <a href=''>
                            <img src='icons/add-circle.svg'>
                        </a>
                        <a href=''>
                            <img src='icons/notification.svg'>
                        </a>
                        <a href='pages/profile.php'>
                            <img src='icons/profile.svg'>
                        </a>";
                    } 
                    elseif(strpos($backfiles[0]['file'], "profile.php") !== false)
                    {
                        echo "<a href='../index.php'>
                        <img src='../icons/home.svg'>
                        </a>
                        <a href=''>
                            <img src='../icons/explore-outlined.svg'>
                        </a>
                        <a href=''>
                            <img src='../icons/add-circle.svg'>
                        </a>
                        <a href=''>
                            <img src='../icons/notification.svg'>
                        </a>
                        <a href='#'>
                            <img src='../icons/selected/profile.svg'>
                        </a>";
                    }
                    elseif(strpos($backfiles[0]['file'], "explore.php") !== false)
                    {
                        echo "<a href='../index.php'>
                        <img src='../icons/home.svg'>
                        </a>
                        <a href=''>
                            <img src='../icons/explore-filled.svg'>
                        </a>
                        <a href=''>
                            <img src='../icons/add-circle.svg'>
                        </a>
                        <a href=''>
                            <img src='../icons/notification.svg'>
                        </a>
                        <a href='profile.php'>
                            <img src='../icons/profile.svg'>
                        </a>";
                    }
                ?>
                <!-- <a href="">                    
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
                </a>-->
                
                
            </div>
        </div>
        
        

    </header>