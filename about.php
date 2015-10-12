<?php
    include('assets/header.php');
    $activeTab = "About";
    include('assets/navbar.php');

    if ($login->isUserLoggedIn() == true) {
        include("views/v-about.php");
    } else {
        include("views/v-about.php");
    }

    include('assets/footer.php');
?>