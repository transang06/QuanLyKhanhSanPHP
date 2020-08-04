<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "quanlykhachsan";
$ketnoisql = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo "1225";
    exit;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
