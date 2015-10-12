<?php
    include('assets/header.php');
    $activeTab = "Contact";
    include('assets/navbar.php');

    if ($login->isUserLoggedIn() == true) {
        include("views/v-contact.php");
    } else {
        include("views/v-contact.php");
    }

    include('assets/footer.php');
?>