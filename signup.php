<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Enroll";

function customPageHeader()
{ ?>
  <!-- Place custom HTML for the head tag here -->
  <link rel="stylesheet" href="css/signup.css" />

<?php }
include_once('header.php');
?>

<main>
  <div id="container">
    <div id="card-header">
      <b>SIGN UP</b>
    </div>
    <form action="includes/signup.inc.php" method="$_POST">
      <div class="form-container">
        <label for="name">Username</label>
        <input type="text" class="form-object" name="username" id="name" placeholder="Username">
      </div>
      <div class="form-container">
        <label for="email">Email</label>
        <input type="email" class="form-object" name="email" id="email" placeholder="Email">
      </div>
      <div class="form-container">
        <label for="password">Password</label>
        <input type="password" class="form-object" name="password" id="password" placeholder="Password">
      </div>
      <div class="form-container">
        <label for="repassword">Confirm Password</label>
        <input type="password" class="form-object" name="password" id="repassword" placeholder="Password">
      </div>
      <div class="form-container">
        <button type="submit" class="auth-btn">Sign Up</button>
      </div>
    </form>

    <div id="auth-footer">
      Already Have an account?
      <a class="auth-page-links" href="login.php">Login</a>
    </div>
  </div>
</main>

<?php include_once('footer.php'); ?>