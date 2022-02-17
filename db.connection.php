<?php
$myserver="localhost";
$username="root";
$pass="";
//creating using objected oriented way
$connect=new mysqli($myserver,$username,$pass);

if($connect->connect_error)

{
    die("failed to connect to the database" .$connect->connect_error);
}
else{
    echo"successfully connected";

}