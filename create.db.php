<?php
require 'db.connection.php';
//create database
$tengenezadb="CREATE DATABASE FIREFOX2";
if
   ($connect->query($tengenezadb)===TRUE)

{
    echo"successfull";

}
else{
    echo"nothing".connect->error;
}
$connect->close();


