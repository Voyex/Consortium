<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Projects2";

function customPageHeader()
{ ?>
    <!-- Place custom HTML for the head tag here -->
    <link rel="stylesheet" href="css/projects.css" />

<?php }
include_once('header.php');
?>

<main>
    <div class="main">
        <div>
            <h2>
                Projects
            </h2>
            <p>
                Our projects are the final result of the composers and the performers comming together
                to play something new for the enjoyment of everyone. It takes a great deal of effort
                to create an original piece of music and then to share that with performers to put on a
                show requires a tremendous amount of work.
            </p>
        </div>
        <iframe src="https://www.youtube.com/embed/fg5Rlvt2Kjs"></iframe>

    </div>
    <!--Start of the Right Column -->
    
    <div class="side">
        <div>
            <h1>
            The Score
            </h1>
            <a target="_Blank A" href="images/Sonata No. 10 In C Major, K.330 - Complete Score.pdf">
                 <img class="score" src="images/Mozart.png" alt="Mozart"></a>
            <h2>
                Check out some of our Previous Works
            </h2>
            <a href="projects.php" class="works-button"> Vivaldi, Four Seasons Summer</a>
                
        </div>
    </div>

</main>

<?php include_once('footer.php'); ?>