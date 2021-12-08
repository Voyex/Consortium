<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Scores";

function customPageHeader()
{ ?>
    <!-- Place custom HTML for the head tag here -->
    <link rel="stylesheet" href="css/scores.css" />

<?php }
include_once('header.php');
?>

<!--Start of the Main Body Area -->
<main>
    <div class="main">
        <a href="members.php">Back</a>
        <a target="_Blank A" href="images/Symphony no. 5 in Cm, Op. 67 - Complete Score.pdf">
            <img class="score" src="images/Beethoven-Heywood-SymphonyNo.5SEPIACOVER_1655x.jpg" alt="Beethoven Symphony"></a>

        <a target="_Blank A" href="images">
            <img class="score" src="images/fourSeasons.jpg" alt="Vivaldi Four Seasons"></a>

        <a target="_Blank A" href="images/Sonata No. 10 In C Major, K.330 - Complete Score.pdf">
            <img class="score" src="images/Mozart.png" alt="Mozart"></a>
    </div>
    <!--Start of the Right Column -->
    <div class="side">
        <h2>
            Featured Score
            <br>
        </h2>

        <div id="previousWorks">
            <a target="_Blank A" href="images/Symphony no. 5 in Cm, Op. 67 - Complete Score.pdf"> <img src="images/Beethoven-Heywood-SymphonyNo.5SEPIACOVER_1655x.jpg" alt="Example" width="90%"> </a>

        </div>
    </div>
</main>

<?php include_once('footer.php'); ?>