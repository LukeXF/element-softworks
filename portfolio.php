<?php
    include('assets/header.php');
    $activeTab = "Work";
    include('assets/navbar.php');

    if ($login->isUserLoggedIn() == true) {
        include("views/v-portfolio.php");
    } else {
        include("views/v-portfolio.php");
    }

    include('assets/footer.php');
?>