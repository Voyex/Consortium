<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Projects";

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
        <iframe src="https://www.youtube.com/embed/Sg36juu12tk"></iframe>

    </div>
    <!--Start of the Right Column -->
    
    <div class="side">
        <div>
            <h1>
            The Score
            </h1>
            <a target="_Blank A" href="images/[Free-scores.com]_vivaldi-antonio-concerto-e-major-primavera-spring-426.pdf">
            <img class="score" src="images/fourSeasons.jpg" alt="Vivaldi Four Seasons"></a>
            <h2>
                Check out some of our Previous Works
            </h2>
            <a href="projects2.php" class="works-button"> Beethoven Symphony No.5</a>
                
        </div>
    </div>

</main>

<?php include_once('footer.php'); ?>