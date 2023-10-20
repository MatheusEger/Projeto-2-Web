<?php
include_once('./assets/php/data/var.php');
unset($_SESSION['userInSession']);
header('Location: ./login.php');
exit;
?>