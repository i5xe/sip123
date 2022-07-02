<?php
session_start();
session_destroy();
header("location: http://localhost/spp_web/login.php");
?>