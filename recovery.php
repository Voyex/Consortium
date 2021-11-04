<?php
$PageTitle = "Consortium - Recovery";

function customPageHeader()
{ ?>
  <link rel="stylesheet" href="css/recovery.css" />

<?php }
include_once('header.php');
?>

<main>
  <div id="container">
    <div id="card-header">
      <b>PASSWORD<br>RECOVERY</b>
    </div>
    <form action="includes/login.inc.php" method="$_POST">
      <div class="form-container">
        <label for="email">Email</label>
        <input type="email" class="form-object" name="email" id="email" placeholder="Email">
      </div>
      <div class="form-container">
        <button type="submit" class="auth-btn">Send Recovery Email</button>
      </div>
    </form>
    <div id="auth-footer">
      Don't need recovery?
      <a class="auth-page-links" href="login.html">Log In</a>
    </div>
  </div>
</main>

<?php include_once('footer.php'); ?>