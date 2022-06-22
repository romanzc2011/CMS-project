<?php

class contactController {
    function showFormAction(){
        include $_SERVER['DOCUMENT_ROOT'] . '/php/CMS-project/public/view/contact-us.html';
    }

    function submitContactFormAction(){
        // validate
        //store data
        //send email

        include $_SERVER['DOCUMENT_ROOT'] . '/php/CMS-project/public/view/contact-us-thank-you.html';
    }
}
