<?php
$dbhost='127.0.0.1';
$username='root';
$password='';
$dbname='cable_operator' ;
$conn=mysqli_connect("$dbhost","$username","$password","$dbname");
//echo "connected";
if (!$conn) {

    echo "Connection failed!";

}
?>