<?php
$connection=new mysqli("localhost", "root","","firefox2");
if($connection->connect_error){
    die("failed to connect to the database".$connection->connect_error);
}
//create table
$makedb="CREATE TABLE data(
    No  INT(4) UNSIGNED_AUTO_INREMENT PRIMARY KEY
    Firstname VARCHAR(50) NOT NULL,
    Lastname VARCHAR(30) NOT NULL,
    Email VARCHAR(30),
    Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
