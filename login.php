<?php
$PageTitle = "Consortium - Login";

function customPageHeader()
{ ?>
  <link rel="stylesheet" href="css/login.css" />

<?php }
include_once('header.php');
?>
<main>
  <div id="container">
    <div id="card-header">
      <b>LOGIN</b>
    </div>
    <form action="includes/login.inc.php" method="$_POST">
      <div class="form-container">
        <label for="email">Email</label>
        <input type="email" class="form-object" name="email" id="email" placeholder="Email" />
      </div>
      <div class="form-container">
        <label for="password">Password</label>
        <input type="password" class="form-object" name="password" id="password" placeholder="Password" />
        <a href="recovery.html" id="pwd-forgot">Forgot Password?</a>
      </div>
      <div class="form-container">
        <button type="submit" class="auth-btn">Login</button>
      </div>
    </form>
    <div id="auth-footer">
      Don't have an account?
      <a class="auth-page-links" href="signup.html">Sign Up</a>
    </div>
  </div>
</main>

<?php include_once('footer.php'); ?>