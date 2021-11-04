<?php
$PageTitle = "Consortium - Home";

function customPageHeader()
{ ?>
  <link rel="stylesheet" href="css/index.css" />

<?php }
include_once('header.php');
?>

<!--Start of the Main Body Area -->
<main>
  <div class="image-container">
    <p>
      "So long as the human spirit thrives on this planet, music in some
      living form will accomany and sustain it." <br />
      - Aaron Copland
    </p>
  </div>
  <div class="content-container">
    <p>Intersted in seeing what we are all about?</p>
    <a href="projects.html">Check Out Our Projects</a>
  </div>
  <div class="main"></div>
  <!--Start of the Right Column -->
  <div class="side"></div>
</main>

<?php include_once('footer.php'); ?>