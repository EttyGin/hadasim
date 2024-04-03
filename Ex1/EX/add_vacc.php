<!DOCTYPE html>
<?php
include 'db.php';

if (isset($_POST['enter'])) {
    $id = (int)$_GET['id'];
    $vdate = htmlspecialchars($_POST['vdate']);
    $manufacturer = htmlspecialchars($_POST['manufacturer']);

    try {
        // מצא את ה-NO האחרון עבור ה-ID הזה והוסף 1
        $sql = "SELECT MAX(no) AS max_no FROM vacc_records WHERE id = '$id'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        $no = $row['max_no'] + 1;

		if ($no>4 ) {
			?>
				<center>
					<p style="font-size: 25px; font-family: Calibri">  A maximum of 4 vaccinations.</p>
					<button type="button" class="btn btn-default" onclick="history.back()" style="width: 75px; height: 40px;"> Back</button>
				</center>
			<?php
		}
		else {
        $sql = "INSERT INTO vacc_records (no, id, vdate, manufacturer) VALUES ('$no', '$id', '$vdate', '$manufacturer')";
        $val = $db->query($sql);
        if ($val) {
            header("location: show.php?id=". $id);
        }
		}
    } catch (Exception $e) {
	?>
		<center>
			<p style="font-size: 25px; font-family: Calibri"> Error. Can't add the vaccination details</p>
			<button type="button" class="btn btn-default" onclick="history.back()" style="width: 75px; height: 40px;"> Back </button>
		</center>
	<?php
    }
}
?>
