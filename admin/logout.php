<?php

unset($_SESSION['uname']);
session_destroy();
header('location:../index.php');

?>