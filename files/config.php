<?php
$conn=mysqli_connect("localhost","root","","shop__db");
if(!$conn){
    echo "Created Successfully!" . mysqli_connect_error();
}