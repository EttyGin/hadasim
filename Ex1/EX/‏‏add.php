<!DOCTYPE html>
<?php
include 'db.php';

if(isset($_POST['enter'])) {
	$id = $_POST['id'];
	$last_name = htmlspecialchars($_POST['last_name']);
	$first_name = htmlspecialchars($_POST['first_name']);
	$address = htmlspecialchars($_POST['address']);
	$birth_date = htmlspecialchars($_POST['birth_date']);
	$phone = htmlspecialchars($_POST['phone']);
	$cell_phone = htmlspecialchars($_POST['cell_phone']);
	if (!is_numeric($id) || strlen($id) != 9 || !is_numeric($phone) || strlen($phone) != 9  || !is_numeric($cell_phone) || strlen($cell_phone) != 10) {
?>
	<center>
		<p style="font-size: 25px; font-family: Calibri"> Inavlid datails. try again</p>
		<button type="button" class="btn btn-default" onclick="history.back()" style="width: 75px; height: 40px;"> Back</button>
	</center>
<?php
	}
	else {
	try {
	$sql ="insert into members_details (id, last_name, first_name, address, birth_date, phone, cell_phone) values ('$id','$last_name', '$first_name', '$address', '$birth_date', '$phone', '$cell_phone')";
	$val = $db->query($sql);
	if ($val) {
		header('location: index.php');
	}
	} catch (Exception $e) {
	?>
	<center>
		<p style="font-size: 25px; font-family: Calibri"> This ID is exists already.</p>
		<button type="button" class="btn btn-default" onclick="history.back()" style="width: 75px; height: 40px;"> Back</button>
	</center>
<?php
	 	
	} 
}
}
?>
