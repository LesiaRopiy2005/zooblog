<?php
require('components/Header/index.php');
$categoryID = $_GET['id'];
require_once('config.php');
$sql = "SELECT * FROM news WHERE category =" .$categoryID;
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
?>