<?php
include 'db.php';
$id = (int)$_GET['id'];
$sql ="delete from members_details where id = '$id'";
$val = $db->query($sql);

if ($val) {
		header('location: index.php');
	}
?>