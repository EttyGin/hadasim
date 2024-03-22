<!DOCTYPE html>
<?php
include 'db.php';
$id = (int)$_GET['id'];

$sql = "select * from members_details where id = '$id'";
$rows = $db ->query($sql);
$row= $rows->fetch_assoc();
if(isset($_POST['send'])) {
$last_name = htmlspecialchars($_POST['last_name']);
$first_name = htmlspecialchars($_POST['first_name']);
$address = htmlspecialchars($_POST['address']);
$birth_date = htmlspecialchars($_POST['birth_date']);
$phone = htmlspecialchars($_POST['phone']);
$cell_phone = htmlspecialchars($_POST['cell_phone']);
$start_date = htmlspecialchars($_POST['start_date']);
$end_date = htmlspecialchars($_POST['end_date']);

$sql = "update members_details set last_name = '$last_name', first_name = '$first_name', address = '$address', birth_date = '$birth_date', phone = '$phone', cell_phone = '$cell_phone', start_date = '$start_date', end_date = '$end_date' where id = '$id'";
$db->query($sql);
header('location: index.php');
}
?>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Corona Management System</title>
  </head>
  <body>
    <div class="container">
      <center><h1>Card of <?php echo $row['id']?></h1></center>
      <div class="row" style="margin-top: 70px;">
        <div class = "col-md-10 col-md-offset-1">
          <hr> <br>
          <form method="post" action = "update.php?id=<?php echo $row['id']; ?>">
            <div class="form-group">
              <label>Edit A Member Details</label>
              <input type="text" required name="last_name" value="<?php echo $row['last_name']?>"placeholder="last name" class="form-control">
              <input type="text" required name="first_name" value="<?php echo $row['first_name']?>"placeholder="first name" class="form-control">
              <input type="text" required name="address" value="<?php echo $row['address']?>" placeholder="address" class="form-control">
              <input type="date" required name="birth_date" value="<?php echo $row['birth_date']?>" placeholder="birth date" class="form-control">
              <input type="text" required name="phone" value="<?php echo $row['phone']?>"  placeholder="phone" class="form-control">
              <input type="text" required name="cell_phone" value="<?php echo $row['cell_phone']?>" placeholder="cell phone" class="form-control">
              <input type="date" name="start_date" value="<?php echo $row['start_date']?>" placeholder="illness start date"  class="form-control">
              <input type="date" name="end_date" value="<?php echo $row['end_date']?>" placeholder="illness end date" class="form-control">
            </div>
            <input type="submit" name="send" value="save" class="btn btn-success">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>