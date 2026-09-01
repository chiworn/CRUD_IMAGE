<?php
include "./db.php";

$id =  $_GET['id'];
$sqlselectimage = "SELECT`image` FROM `tbl_products` WHERE `id` = $id";

$data =  $con->query($sqlselectimage)->fetch_assoc();
unlink("./uploads/".$data['image']);

$sqldelete = "DELETE FROM `tbl_products` WHERE `id` = $id";
$con->query($sqldelete);

header("location: ./index.php");
exit();
?>