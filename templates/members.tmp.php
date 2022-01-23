<!--This template is planned to be implimented in later versions.-->
<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Members";

function customPageHeader()
{ ?>
  <!-- Place custom HTML for the head tag here -->
  <link rel="stylesheet" href="css/members.css" />

<?php }
include_once('header.php');
?>

<main>
  <div class="main">
    <?php
    echo "Test";
      $counter = 0;
      $all_dirs = glob('userdata/*' , GLOB_ONLYDIR);
      foreach($all_dirs as $dir) {
        $counter++;
        echo("<p>Hello</p>");
      }
    ?>
  </div>
  <!--Start of the Right Column -->
  <div class="side">
    <div class="member">
      <h2>Welcome Our Newest Member!</h2>
      <a href="profile.php">
        <img src="images/missing-profile-photo.png" alt="Profile Picture" />
      </a>
      <br />
      <a class="name-link" href="profile.php">Member Name</a>
    </div>
  </div>
</main>

<?php include_once('footer.php'); ?>