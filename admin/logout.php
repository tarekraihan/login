<?php session_start();

include_once("classes/class_Admin.php");

$Admin=new Admin();

$Admin->Admin_logout();

?>