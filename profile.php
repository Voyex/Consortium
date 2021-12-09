<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Test";

function customPageHeader()
{ ?>
  <!-- Place custom HTML for the head tag here -->
  <link rel="stylesheet" href="css/profile.css" />

<?php }
include_once('header.php');
if(!isset($_SESSION['userID'])) header('location: index.php?error=redirecterror');
require_once('templates/template.class.php');
require_once("footer.php");
define("TEMPLATES_PATH", "templates");
$uid = $_SESSION['userID'];

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
if($featuredWorkURL == null) {
    $template->assign('featuredlink', "");
} else {
    $template->assign('featuredlink',  "<iframe src=$featuredWorkURL width = 90% title='featured work'> </iframe>");

}

$template->show();
