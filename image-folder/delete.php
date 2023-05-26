<?php include("conn.php");


$id= $_GET['id'];
$sql = " DELETE FROM information WHERE id=$id";
$res = mysqli_query($conn, $sql);
header("location:manage.php");


























?>