<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Test";

function customPageHeader()
{ ?>
  <!-- Place custom HTML for the head tag here -->
  <link rel="stylesheet" href="css/profile.css" />

<?php }
include_once('header.php');
require_once('templates/template.class.php');
require_once("footer.php");
define("TEMPLATES_PATH", "templates");

# Sets user ID variable or redirects
if (isset($_GET['id'])) {
    $uid = $_GET['id'];
} elseif (isset($_SESSION['userID'])) {
    $uid = $_SESSION['userID'];
} else header('location: index.php?error=redirecterror');

$profileJSON = file_get_contents("userdata/$uid/profile.json");

$profileObj = json_decode($profileJSON, false);
$pfpName = null;
$featuredWorkURL = null;

$files = glob("userdata/$uid/pfp/*"); // get all file names
foreach($files as $file){ // iterate files
    $pfpName = $file;
}

$files = glob("userdata/$uid/works/*"); // get all file names
foreach($files as $file){ // iterate files

    if(str_contains($file, 'featured-work')) {
        $featuredWorkURL = $file;
    }
}



$template = new Template(TEMPLATES_PATH. '/profile.tmp.php');

$template->assign('pfplink', $pfpName);
$template->assign('name', $profileObj->name);
$template->assign('about', $profileObj->about);
$template->assign('summary', $profileObj->works);
$template->assign('bruh', "This is some text");
$template->assign('scoreslink', "scores.php?id=$uid");
if($featuredWorkURL == null) {
    $template->assign('featuredlink', "");
} else {
    $template->assign('featuredlink',  "<iframe src=$featuredWorkURL width = 100% height = 550px title='featured work'> </iframe>");

}
if (isset($_SESSION['userID'])) {
    if($uid == $_SESSION['userID']) {
        $template->assign('edit', '<a class="edit-button" href="editor.php">Edit Profile</a>');
    } else $template->assign('edit', '');
} else $template->assign('edit', '');

$template->show();
