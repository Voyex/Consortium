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
    <div class="top-container">
      <div id="card-header">
        <b>SIGN UP</b>
      </div>
      <form action="includes/signup.inc.php" method="post">
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
          <input type="password" class="form-object" name="repassword" id="repassword" placeholder="Password">
        </div>
        <div class="form-container">
          <label for="regcode">Registration Code</label>
          <input type="password" class="form-object" name="regcode" id="regcode" placeholder="Registration Code">        </div>
        <div class="form-container">
          <button type="submit" class="auth-btn" name="submit" id="submit">Sign Up</button>
        </div>
      </div>
    </form>

    <div id="auth-footer">
      Already Have an account?
      <a class="auth-page-links" href="login.php">Login</a>
    </div>
</div>
</main>

<?php include_once('footer.php'); ?>