<?php
try {
 	$db = new Mysqli;
$db -> connect('localhost', 'root', '', 'corona_manegment');
 } catch (Exception $e) {
 	die("ERROR: Could not connect. " . $e->getMessage());
 } 
?>
