<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title><?= isset($PageTitle) ? $PageTitle : "Consortium" ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TEMPORARY: REMOVE AFTER INITIAL DEV PHASE-->
    <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

    <link rel="stylesheet" href="css/globalStyle.css" />
    <link rel="icon" href="images/music_15509 (2).ico" />

    <script type="text/javascript" src="script/script.js"></script>
    <!--Makes the Header's background transparent when the DOM is loaded-->
    <script>
    window.addEventListener("DOMContentLoaded", function() {
        makeBackgroundTransparent()
    }, false);
    </script>


    <?php if (function_exists('customPageHeader')) {
        customPageHeader();
    } ?>

</head>

<body>

    <header id="header">

        <!-- Autocomplete="off" makes it so that the nav-bar mininizes on refresh -->
        <input type="checkbox" class="nav-toggle" id="nav-toggle" onclick="alternateBackgroundColor()" autocomplete="off" />
        <!-- Due to the way the HTML is structured, there is actually two headers.
        This should probably be fixed -->
        <a id="header-text-responsive" href="index.php">Consortium</a>

        <label for="nav-toggle" class="nav-label">
            <div class="nav-bars"></div>
            <div class="nav-bars"></div>
            <div class="nav-bars"></div>
        </label>
        <div class="navbar" id="navbar">
            <div class="left-navbar">
                <a id="header-text" href="index.php">Consortium</a>
            </div>

            <div class="right-navbar">
                <a id="about-button" href="about.php">About Us</a>
                <a id="members-button" href="members.php">Members</a>
                <div class="dropdown">
                    <button class="dropbtn"> Projects </button>
                    
                    <div class="dropdown-content">
                        <a href="projects.php">Vivaldi</a>
                        <a href="projects2.php">Beethoven</a>
                        <a href="projects3.php">Mozart</a>
                    </div>
                </div>
                
                <a id="login-button" href="login.php">Login</a>
                <a id="profile-button" href="profile.php">Profile</a>
            </div>


        </div>
    </header>