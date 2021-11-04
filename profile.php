<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Profile";

function customPageHeader()
{ ?>
    <!-- Place custom HTML for the head tag here -->
    <link rel="stylesheet" href="css/profile.css" />

<?php }
include_once('header.php');
?>

<!--Start of the Main Body Area -->
<main>
    <div class="main">
        <div>
            <div>
                <div>
                    <img src="images/missing-profile-photo.png" alt="Profile Icon">


                    <h2>Member Name</h2>

                    <p>
                    <h2><br>About You</h2>
                    This is where you type a little about your self
                    </p>
                </div>

                <h2>
                    Summary of Previous works
                </h2>
                <p>
                    <br>
                    This is where people can place descriptions of the kind of works they have made in the past. As well
                    as
                    the names and other details about the pieces that they have made. Or if they are a performer this is
                    where
                    they could put things like previous groups they have played with.
                </p>
            </div>
            <a class="works-button" href="scores.php">All Works</a>


        </div>
    </div>
    <!--Start of the Right Column -->
    <div class="side">
        <a class="edit-button" href="editor.php">Edit Profile</a>

        <h2>
            Featured Work
            <br>
        </h2>

        <div id="previousWorks">
            <a target="_Blank A" href="/images/Symphony no. 5 in Cm, Op. 67 - Complete Score.pdf"> <img src="/images/Beethoven-Heywood-SymphonyNo.5SEPIACOVER_1655x.jpg" alt="Example" width="90%"> </a>

        </div>

    </div>
</main>

<?php include_once('footer.php'); ?>