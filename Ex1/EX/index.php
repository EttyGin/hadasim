<!DOCTYPE html>
<?php include 'db.php';
$sql = "select id, last_name, first_name from members_details ORDER BY last_name ASC, first_name ASC";
$rows = $db ->query($sql);
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
      <center><h1>Members list</h1></center>
      <div class="row" style="margin-top: 70px;">
        <div class = "col-md-10 col-md-offset-1">
          <button type="button" data-target = "#myModal" data-toggle="modal"  class="btn btn-success ">Add A Member</button>
          <hr> <br>
          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add A Member</h4>
                </div>
                <div class="modal-body">
                  <form method="post" action="add.php">
                    <div class="form-group">
                      <label>Member Details</label>
                      <input type="text" required name="id" placeholder="ID" class="form-control">
                      <input type="text" required name="last_name" placeholder="last name"  class="form-control">
                      <input type="text" required name="first_name"  placeholder="first name" class="form-control">
                      <input type="text" required name="address" placeholder="address"  class="form-control">
                      <input type="date" required name="birth_date" class="form-control"> 
                      <input type="text" required name="phone" placeholder="phone"  class="form-control">
                      <input type="text" required name="cell_phone" placeholder="cell phone"  class="form-control">
                    </div>
                    <input type="submit" name="enter" value="Add A Member" class="btn btn-success" >
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
   
     <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Last name</th>
          <th scope="col">First name</th>
        </tr>
      </thead>
        <tbody>
        <tr>
          <?php while ($row = $rows->fetch_assoc()): ?>
          <th class="col-md-1"><?php echo $row['id'] ?></th>
          <td class="col-md-1"><?php echo $row['last_name'] ?></td>
          <td class="col-md-10"><?php echo $row['first_name'] ?></td>
          <td><a href = "show.php?id=<?php echo $row['id']; ?>" class = "btn btn-success"> Show</a></td>
          <td><a href = "delete.php?id=<?php echo $row['id']; ?>" class = "btn btn-danger"> Delete</a></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>


  </div>
</div>
</body>
</html>