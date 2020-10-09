<?php

ob_start(); //execute the following script after everything else loaded.
session_start();


try {
    $con = new PDO("mysql:dbname=eShop;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $error) {
    echo "Connection Failed: " . $error->getMessage(); 
}

