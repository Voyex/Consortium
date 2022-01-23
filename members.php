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
      $all_dirs = glob('userdata/*' , GLOB_ONLYDIR);
      foreach($all_dirs as $dir) {
        $tmp = explode('/', $dir);
        $ext = end($tmp);

        $uid = $ext;

        $profileJSON = file_get_contents("userdata/$uid/profile.json");

        $profileObj = json_decode($profileJSON, false);
        $pfpURL = null;

        $files = glob("userdata/$uid/pfp/*"); // get all file names
        foreach($files as $file){ // iterate files
          $pfpURL = $file;
        }
        
        echo "<div class='member'>";
        echo "<a href='profile.php?id=$uid'>";
        echo "<p class = 'something'><img src=$pfpURL alt='Profile Picture' /></p>";
        echo "</a>";
        echo "<br/>";
        echo "<a class='name-link' href='profile.php?id=$uid'>$profileObj->name</a>";
        echo "<p>$profileObj->about</p>";
        echo "<a href='scores.php?id=$uid' class='works-button'>Personal Works</a>";
        echo "</div>";
      }
    ?>
  </div>

  <!--Start of the Right Column -->
  <div class="side">
    <div class="member">
      <h2>Welcome Our Newest Member!</h2>
      <?php
        $all_dirs = glob('userdata/*' , GLOB_ONLYDIR);
        $mostRecent = $all_dirs[sizeof($all_dirs) - 1];
        
        $tmp = explode('/', $mostRecent);
        $ext = end($tmp);

        $uid = $ext;

        $profileJSON = file_get_contents("userdata/$uid/profile.json");

        $profileObj = json_decode($profileJSON, false);
        $pfpURL = null;

        $files = glob("userdata/$uid/pfp/*"); // get all file names
        foreach($files as $file){ // iterate files
          $pfpURL = $file;
        }
        
        echo "<a href='profile.php?id=$uid'>";
        echo "<img src=$pfpURL alt='Profile Picture' /></a><br/>";
        echo "<a class='name-link' href='profile.php?id=$uid'>$profileObj->name</a>";

      ?>
    </div>
  </div>
</main>

<?php include_once('footer.php'); ?>