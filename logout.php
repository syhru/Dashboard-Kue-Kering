<?php
session_start();
//koneksi
$con = mysqli_connect("localhost", "root", "", "uas_syahru_2021310181"); //jika aktif

if (!isset($_SESSION['uname']) || !isset($_SESSION['password'])) {
     //redirect back ke halaman login 
     header("location: index.php");
} else {
    header("location: index.php");
    session_destroy();
} 