<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Scores";

function customPageHeader()
{ ?>
    <!-- Place custom HTML for the head tag here -->
    <link rel="stylesheet" href="css/scores.css" />

<?php }
require_once('header.php');
?>

<!--Start of the Main Body Area -->
<main>
    <div class="main">
        <a href="members.php">Back</a>
        <?php
            
            $uid = $_GET['id'];
            $featuredWork = null;

            $files = glob("userdata/$uid/works/*"); // get all file names
            if (empty($files)) {
                echo ("<p>Nothing to see here yet</p>");
            }
            foreach($files as $file){ // iterate files
                if(str_contains($file, 'featured-work')) {
                    $featuredWork = $file;
                } else {
                    echo ("<iframe src=$file width = 50% height= 550px title='featured work'> </iframe>");
                }
            }
        ?>
    </div>
    <!--Start of the Right Column -->
    <div class="side">
        <h2>
            Featured Score
            <br>
        </h2>
        <?php
            if($featuredWork != null) {
                echo("<iframe src=$featuredWork width = 100% height= 550px title='featured work'> </iframe>");
            }
        ?>

        </div>
    </div>
</main>

<?php include_once('footer.php'); ?>