<?php

$section = isset($_GET['section']) ? $_GET['section'] : 'home';

if($section  == 'about-us'){
    include 'controller/aboutUsPage.php';
}else if($section == 'contact-us'){
    include 'controller/contactUs.php';
}else{
    include 'controller/homePage.php';
}
?>







