<?php
    session_start();
    define('BASE_URL',"http://localhost/spp_web/login.php");
    function check_login() {
        if (!isset ($_SESSION['username'])) {
            header("location: http://localhost/spp_web/login.php");
        }
    }
?>