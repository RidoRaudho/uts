<?php
$host="localhost";
$user="root";
$pass="";
$database="UTS";

$koneksi=mysqli_connect($host, $user, $pass, $database);

if ($koneksi){
    $buka=mysqli_select_db($koneksi,$database);
    echo "database dapat terhubung";
    if (!$buka){
        echo "database tidak dapat terhubung";
    }
    
}else{
    echo "tidak dapat terhubung";
    }
?>