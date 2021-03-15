<?php
include('dbconfi.php');
if (isset($_POST['delete'])) {
    $checkbox = $_POST['check'];
    for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i];
    mysqli_query($conn,"Delete from sales where eid='".$del_id."'");
	$message = "&#10004; Sales Person  Deleted Successfully!";
}
}
$result = mysqli_query($conn,"SELECT eid,fname,lname,email,phone from sales");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Delete User!</title>
<link rel="stylesheet" href="css/delete.css">
<script type="text/javascript" src="js/delete.js">

</script>
</head>

<body>
  <form id="formclass" action="" method="post" enctype="multipart/form-data">
    <table table="table">
    <p id="blankline"><br></p>
    <p id="errormessage"><?php if(isset($message)) { echo $message; } ?></p>
    <tr>
       <th><input type="checkbox" id="checkAl" onclick="toggle()">Employee Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Id</th>
       <th>Contact Number</th>

    </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><input type="checkbox" class="checkItem" name="check[]" value="<?php echo $row["eid"]; ?>">
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>


                    </tr>


                <?php } ?>

  </table>
  <button type="submit" name="delete" class="button" onclick="validate()">Delete</button>

</form>
    <a href="dashboard.php"><button type="submit" name="Home" class="button">Dashboard</button>    
 
</body>
</html>
