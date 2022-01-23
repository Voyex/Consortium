<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Recovery";

function customPageHeader()
{ ?>
  <!-- Place custom HTML for the head tag here -->
  <link rel="stylesheet" href="css/recovery.css" />

<?php }
require_once('header.php');
if(!isset($_SESSION['userID'])) header('location: index.php?error=redirecterror');
?>

<main>
  <div id="container">
    <div class="top-container">
      <div id="card-header">
        <b>CHANGE PASSWORD</b>
      </div>
      <form action="includes/recovery.inc.php" method="post">
        <div class="form-container">
          <label for="password">Current Password</label>
          <input type="password" class="form-object" name="oldpassword" id="password" placeholder="Current Password">
        </div>
        <div class="form-container">
          <label for="password">New Password</label>
          <input type="password" class="form-object" name="password" id="password" placeholder="New Password">
        </div>
        <div class="form-container">
          <label for="repassword">Confirm New Password</label>
          <input type="password" class="form-object" name="repassword" id="repassword" placeholder="New Password">
        </div>
        <div class="form-container">
          <button type="submit" name='submit' class="auth-btn">Change Password</button>
        </div>
    </form>
  </div>
</main>

<?php include_once('footer.php'); ?>