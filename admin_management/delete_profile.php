<?php

$id = $_GET["id"];
echo $id;
require_once "conn.php";
$sql_d = "DELETE FROM `giaovien` WHERE `idGv` = '$id'";
$conn -> query($sql_d);
$sql_acc = "DELETE FROM `accountgv` WHERE `id_gv` = '$id'";
$conn -> query($sql_acc);
header("location: list_profile.php");
?>