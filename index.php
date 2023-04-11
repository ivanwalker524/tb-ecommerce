<?php
session_start();
error_reporting(1);
error_reporting(E_ALL);
if(isset($_GET['ref']))
    $file=$_GET['ref'];
    $file="dashboard";
require "files/header.php";
require "files/$file.php";
require "files/footer.php";