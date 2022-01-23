<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - Edit Profile";

function customPageHeader()
{ ?>
    <!-- Place custom HTML for the head tag here -->
  <link rel="stylesheet" href="css/editor.css" />

<?php }
require_once('header.php');
if(!isset($_SESSION['userID'])) header('location: index.php?error=redirecterror');
require_once('templates/template.class.php');
//require_once('templates/profile.tmp.php');
require_once("footer.php");
define("TEMPLATES_PATH", "templates");
$uid = $_SESSION['userID'];

$profileJSON = file_get_contents("userdata/$uid/profile.json");

$profileObj = json_decode($profileJSON, false);
$pfpName = null;

$files = glob("userdata/$uid/pfp/*"); // get all file names
foreach($files as $file){ // iterate files
    $pfpName = $file;
}


$template = new Template(TEMPLATES_PATH. '/editor.tmp.php');

$template->assign('pfplink', $pfpName);
$template->assign('name', $profileObj->name);
$template->assign('about', $profileObj->about);
$template->assign('summary', $profileObj->works);


$template->show();

