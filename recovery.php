<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Recovery";

function customPageHeader()
{ ?>
  <!-- Place custom HTML for the head tag here -->
  <link rel="stylesheet" href="css/recovery.css" />

<?php }
include_once('header.php');
?>

<main>
  <div id="container">
    <div class="top-container">
      <div id="card-header">
        <b>PASSWORD<br>RECOVERY</b>
      </div>
      <form action="includes/recovery.inc.php" method="$_POST">
        <div class="form-container">
          <label for="email">Email</label>
          <input type="email" class="form-object" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-container">
          <button type="submit" class="auth-btn">Send Recovery Email</button>
        </div>
      </div>
    </form>
    <div id="auth-footer">
      Don't need recovery?
      <a class="auth-page-links" href="login.php">Log In</a>
    </div>
  </div>
</main>

<?php include_once('footer.php'); ?>