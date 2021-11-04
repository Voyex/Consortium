<?php
$PageTitle = "Consortium - Members";

function customPageHeader()
{ ?>
  <link rel="stylesheet" href="css/members.css" />

<?php }
include_once('header.php');
?>

<main>
  <div class="main">
    <div class="member">
      <a href="profile.html">
        <img src="images/missing-profile-photo.png" alt="Profile Picture" />
      </a>
      <br />
      <a class="name-link" href="profile.html">Member Name</a>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu
        mi orci. Nullam cursus nulla ut urna iaculis tempor. Pellentesque
        imperdiet eros at enim vehicula molestie. Sed eget nibh dui. Ut
        condimentum maximus nisl non egestas. Quisque mollis ligula est, at
        molestie lorem volutpat in. Ut facilisis, metus consectetur molestie
        maximus, arcu turpis ultrices augue, eu venenatis velit justo at orci.
        Aliquam tortor dolor, vulputate ultrices augue quis, maximus accumsan
        ante. Etiam vitae nisi dignissim, pretium nibh nec, mattis orci.
        Vivamus id lacus nisl. Fusce lectus justo, fermentum nec mi in,
        lacinia feugiat ipsum. Etiam iaculis tellus et justo tempor elementum.
        Integer posuere semper purus nec eleifend. Fusce venenatis eleifend
        nibh, eu eleifend quam varius eu. Fusce ac pretium metus, ac faucibus
        sapien.
      </p>
      <a href="scores.html" class="works-button">Personal Works</a>
    </div>

    <div class="member">
      <a href="profile.html">
        <img src="images/missing-profile-photo.png" alt="Profile Picture" />
      </a>
      <br />
      <a class="name-link" href="profile.html">Member Name</a>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu
        mi orci. Nullam cursus nulla ut urna iaculis tempor. Pellentesque
        imperdiet eros at enim vehicula molestie. Sed eget nibh dui. Ut
        condimentum maximus nisl non egestas. Quisque mollis ligula est, at
        molestie lorem volutpat in. Ut facilisis, metus consectetur molestie
        maximus, arcu turpis ultrices augue, eu venenatis velit justo at orci.
        Aliquam tortor dolor, vulputate ultrices augue quis, maximus accumsan
        ante. Etiam vitae nisi dignissim, pretium nibh nec, mattis orci.
        Vivamus id lacus nisl. Fusce lectus justo, fermentum nec mi in,
        lacinia feugiat ipsum. Etiam iaculis tellus et justo tempor elementum.
        Integer posuere semper purus nec eleifend. Fusce venenatis eleifend
        nibh, eu eleifend quam varius eu. Fusce ac pretium metus, ac faucibus
        sapien.
      </p>
      <a href="scores.html" class="works-button">Personal Works</a>
    </div>
  </div>
  <!--Start of the Right Column -->
  <div class="side">
    <div class="member">
      <h2>Welcome Our Newest Member!</h2>
      <a href="profile.html">
        <img src="images/missing-profile-photo.png" alt="Profile Picture" />
      </a>
      <br />
      <a class="name-link" href="profile.html">Member Name</a>
    </div>
  </div>
</main>

<?php include_once('footer.php'); ?>