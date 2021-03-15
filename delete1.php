<?php
include('dbconfi.php');
if (isset($_POST['delete'])) {
    $checkbox = $_POST['check'];
    for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i];
    mysqli_query($conn,"Delete from lead where lid='".$del_id."'");
	$message = "&#10004; Lead  Deleted Successfully!";
}
}
$result = mysqli_query($conn,"select lid,name,organization,email,phone,slead,cdate,linteraction,ldate,lidetails from lead");
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
       <th><input type="checkbox" id="checkAl" onclick="toggle()">Lead Id</th>
      <th>Name</th>
						<th> Organization</th>
                                                <th> Email</th>
						<th>Phone</th>
						<th>Source of Lead</th>
						<th>Creation Date</th>
						<th>Lead Activities</th>
                                                <th>1.Type of Interaction</th>
                                                <th>2.Date and Time Of Interaction</th>
                                                <th>3.Interaction Details</th>
    </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><input type="checkbox" class="checkItem" name="check[]" value="<?php echo $row["lid"]; ?>">
                        <td><?php echo $row['name']; ?></td>
                                                                                        <td><?php echo $row['organization']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['phone']; ?></td>
											<td><?php echo $row['slead']; ?></td>
                                                                                        <td><?php echo $row['cdate']; ?></td>
                                                                                        <td><?php echo $row['']; ?></td>
                                                                                        <td><?php echo $row['linteraction']; ?></td>
                                                                                        <td><?php echo $row['ldate']; ?></td>
                                                                                        <td><?php echo $row['lidetails']; ?></td>


                    </tr>


                <?php } ?>

  </table>
  <button type="submit" name="delete" class="button" onclick="validate()">Delete</button>

</form>
    <a href="dashboard.php"><button type="submit" name="Home" class="button">Dashboard</button>    
 
</body>
</html>
