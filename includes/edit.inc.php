<?php
require_once('functions.inc.php');

if (isset($_POST["submit"])) {
    session_start();
    $uid = $_SESSION['userID'];

    $name = $_POST['name'];
    $about = $_POST['biography'];
    $worksDesc = $_POST['works'];

    $profileInfo = new stdClass();
    $profileInfo->name = $name;
    $profileInfo->about = $about;
    $profileInfo->works = $worksDesc;

    $profileJSON = json_encode($profileInfo);

    #Puts the profile information into a file php
    file_put_contents("../userdata/$uid/profile.json", $profileJSON);

    #This uploads the pfp to the userdata file
    if ($_FILES['profilePic']['size'] != 0) {
        $check = getimagesize($_FILES["profilePic"]["tmp_name"]);
        if($check == false) {
            header('location: ../editor.php?error=filetype');
            exit();
        }

        // Check file size
        if ($_FILES["profilePic"]["size"] > 1000000) {
            header('location: ../editor.php?error=filesize');
            exit();
        }

        $isDirEmpty = !(new \FilesystemIterator("../userdata/$uid/pfp"))->valid();

        if(!$isDirEmpty) {
            $files = glob("../userdata/$uid/pfp/*"); // get all file names
            foreach($files as $file){ // iterate files
                if(is_file($file)) {
                    unlink($file); // delete file
                }
            }
        }
        $ext = end(explode('.', $_FILES['profilePic']['name']));
        echo ($ext);
        move_uploaded_file($_FILES['profilePic']['tmp_name'], "../userdata/$uid/pfp/profile-picture.". $ext );
    }


    #This uploads a work to the userdata file
    if($_FILES['work']['size'] != 0) {
        if ($_FILES['work']['size'] > 10000000) {
            header('location: ../editor.php?error=filesize');
            exit();
        }
        move_uploaded_file($_FILES['work']['tmp_name'], "../userdata/$uid/works/work-" . uniqid() . '.pdf');
    }


    #This uploads a featured work to the userdata file
    if($_FILES['featuredWork']['size'] != 0) {
        if ($_FILES['featuredWork']['size'] > 10000000) {
            header('location: ../editor.php?error=filesize');
            exit();
        }

        $files = glob("../userdata/$uid/works/*"); // get all file names
        foreach($files as $file){ // iterate files

            if(str_contains($file, 'featured-work')) {
                unlink($file); // delete file
            }
        }

        move_uploaded_file($_FILES['featuredWork']['tmp_name'], "../userdata/$uid/works/featured-work-" . uniqid() . '.pdf');
    }

    header('location: ../editor.php?error=none');
    exit();
}