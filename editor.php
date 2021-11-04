<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Edit Profile";

function customPageHeader()
{ ?>
    <!-- Place custom HTML for the head tag here -->
  <link rel="stylesheet" href="css/editor.css" />

<?php }
include_once('header.php');
?>

<!--Start of the Main Body Area -->
<main>
  <div class="main">
    <form>
      <h2>Profile Editor</h2>
      <label>Upload a Profile Picture</label><br />
      <input type="file" accept=".pdf" id="profile-selector" />
      <label for="profile-selector">
        <img src="images/missing-profile-photo.png">
      </label> <br><br>

      <label>Name</label><br />
      <input type="text" id="name" /><br /><br />

      <label>Biography</label><br />
      <textarea rows="5" cols="50" id="about-self" placeholder="Write a bit about yourself..."></textarea><br /><br />

      <label>Describe your works</label><br />
      <textarea rows="5" cols="50" id="about-works" placeholder="Write a bit about your works..."></textarea><br /><br />

      <label>Upload a Work</label><br />
      <input type="file" accept=".pdf" /><br /><br />

      <label>Upload a Featured Work</label><br />
      <input type="file" accept=".pdf" /><br /><br />

      <input id="save-button" type="submit" value="Submit Changes" />
    </form>
  </div>
</main>

<?php include_once('footer.php'); ?>