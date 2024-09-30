<?php
// Koneksi ke database (sesuaikan dengan konfigurasi database Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_web";

$conn = new mysqli($servername, $username, $password, $dbname);



// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password']; 

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);

if($result->num_rows>0){
    echo"Login Berhasil!";
    session_start();
    $_SESSION['username']=$username;
    header("location:database.html");
    exit();
}else{
    echo"Login Gagal!";
}

$conn->close();
?>