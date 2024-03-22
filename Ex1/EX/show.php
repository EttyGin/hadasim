<!DOCTYPE html>
<?php
include 'db.php';
if(isset($_POST['send'])) {
$id = $_POST['id'];
$last_name = htmlspecialchars($_POST['last_name']);
$first_name = htmlspecialchars($_POST['first_name']);
$address = htmlspecialchars($_POST['address']);
$birth_date = htmlspecialchars($_POST['birth_date']);
$phone = htmlspecialchars($_POST['phone']);
$cell_phone = htmlspecialchars($_POST['cell_phone']);
#$start_date = htmlspecialchars($_POST['start_tdate']);
#$end_date = htmlspecialchars($_POST['end_date']);
$start_date = $row['start_date'];
$end_date = $row['end_date'];

#$no = htmlspecialchars($_POST['no']);
#$vdate = htmlspecialchars($_POST['vdate']);
#$manufacturer = htmlspecialchars($_POST['manufacturer']);

$sql ="select * from members_details where id = '$id'";
$val = $db->query($sql);
if ($val) {
header('location: index.php');
}
}
$id = $_GET['id'];
$sql = "select * from members_details WHERE id = '$id'";
  #$sql = "select * from members_details 
   #     LEFT JOIN vacc ON members_details.id = vacc.id 
    #    WHERE members_details.id = '$id'";
        $rows = $db ->query($sql);
$row= $rows->fetch_assoc();
?>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Corona Management System\show</title>
  </head>
  <body>
    <div class="container">
      
      <center><h1>Card of <?php echo $row['id']?></h1></center>
      <a href = "index.php" class = "btn btn-success pull-left"> Back to main</a>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Last name</th>
          <th scope="col">First name</th>
          <th scope="col">Address</th>
          <th scope="col">Birth date</th>
          <th scope="col">Phone</th>
          <th scope="col">Cell phone</th>
          <th scope="col">Illness start date</th>
          <th scope="col">Illness end date</th>
        </tr>
      </thead>

      <tbody>
        <div class="table-responsive">
          <tr>
            <th><?php echo $row['id'] ?></th>
            <td><?php echo $row['last_name'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['birth_date'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['cell_phone'] ?></td>
            <td><?php echo $row['start_date'] !== '0000-00-00' ? $row['start_date'] : ''; ?></td>
            <td><?php echo $row['end_date'] !== '0000-00-00' ? $row['end_date'] : ''; ?></td>
            <td><a href = "update.php?id=<?php echo $row['id']; ?>" class = "btn btn-success"> Edit</a></td>
          </tr>
        </div>
      </tbody>
    </table>
  </div>

</body>
</html>