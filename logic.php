<?php
    if(isset($_GET['page'])) {
        if($_GET['page'] == "about") {
            $title = "About";
            $tpl = "about.php";
            $css = "about.css";
        }
        elseif($_GET['page'] == "contacts") {
            $title = "Contacts";
            $tpl = "contacts.php";
            $css = "contacts.css";
            $phone1 = "+380112223344";
            $phone2 = "+380223334455";
            $email = "name@gmail.com";
        }
        else {
            $title = "404";
            $tpl = "404.php";
            $css = "404.css";
        }
    }
    else {
        $title = "Home";
        $tpl = "home.php";
        $css = "home.css";
    }
?>