<?php

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'show';

if(isset($_GET['section'])){
    $section = $_GET['section'];
}elseif(isset($_POST[section])){
    $section = $_POST['section'];
}else{
    $section = 'home';
}

if($section  == 'about-us'){
    include 'controller/aboutUsPage.php';
}else if($section == 'contact-us'){
    include 'controller/contactUs.php';
    $contactController = new ContactController();

if($action == 'show'){} elseif($action == 'submit' {

}

?>







