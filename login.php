<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Login";

function customPageHeader()
{ ?>
  <!-- Place custom HTML for the head tag here -->
  <link rel="stylesheet" href="css/login.css" />

<?php }
require_once('header.php');
if(isset($_SESSION['userID'])) header('location: index.php?error=redirecterror');
?>
<main>
  <div id="container">
    <div class="top-container">
      <div id="card-header">
        <b>LOGIN</b>
      </div>
      <form action="includes/login.inc.php" method="post">
        <div class="form-container">
          <label for="email">Email</label>
          <input type="email" class="form-object" name="email" id="email" placeholder="Email" />
        </div>
        <div class="form-container">
          <label for="password">Password</label>
          <input type="password" class="form-object" name="password" id="password" placeholder="Password" />
        </div>
        <div class="form-container">
          <button type="submit" name='submit' class="auth-btn">Login</button>
        </div>
      </form>
    </div>
    <div id="auth-footer">
      Don't have an account?
      <a class="auth-page-links" href="signup.php">Sign Up</a>
    </div>
  </div>
</main>

<?php include_once('footer.php'); ?>