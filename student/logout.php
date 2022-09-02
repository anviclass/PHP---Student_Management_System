<?php

unset($_SESSION['rollno']);
session_destroy();
header('location:../index.php');

?>