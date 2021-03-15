<?php include('dbconfi.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <script type="text/javascript" src="dashboard.js"></script>
	</head>

<body>
	<div id="head-div">
				<div id="head-right">

			<div id="profile-div">
				<div id="profile-left">
					<a href="#">
						<img src="images/smile.png">
					</a>
				</div>
				<div id="profile-right">
					<a href="#">
						<p>Hello!</p>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="body">
		<div id="body-left">
			<div id="body-left-menu">
				<button type="button" class="body-left-options" onclick="showdivsales()">Sales Person</button></div>
			<div id="body-left-menu">
				<button type="button" class="body-left-options" onclick="showdivlead()">Lead Fields</button>
			</div>
			<div id="body-left-menu">
				<button type="button" class="body-left-options" onclick="showdivleadscore()">Lead Score</button>
			</div>
                    <div id="body-left-menu">
				<button type="button" class="body-left-options" onclick="showdivassignlead()">Assign Leads</button></div>
			<div id="logout-div">
                            <a href="index.php"><button type="button">Logout</button></a>
			</div>
		</div>

		<div id="body-right">
			<!--Sales Details  Division-->
				<div class="rightcontent">
                                  <center><h3>Sales Person Details  Are:</h3></center>  
				<table>
					<thead>
						<th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
	    <th>Email Id</th>
            <th>Contact Number</th>

          </thead>
            <tbody>
                
                <?php
                $sql1 = "SELECT eid,fname,lname,email,phone from sales";
                $result = mysqli_query($conn, $sql1);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
												<td></td>
                        <td><?php echo $row['eid']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
		        <td><?php echo $row['lname']; ?></td>
			<td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td> <a href="update.php"</a><button type="submit" name="submit" value="submit">Update</button></td>
                        <td> <a href="Delete.php"</a><button type="submit" name="submit" value="submit">Delete</button></td>
                        

										</tr>

                <?php } ?>
				</tbody>
				</table>
			</div>
			<!--Lead-->
			<div class="rightcontent">
				<center><h3>Leads Are:</h3></center>
				<table>
					<thead>
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
					</thead>
						<tbody>
								<?php
								$sql2 = "select name,organization,email,phone,slead,cdate,linteraction,ldate,lidetails from lead";
								$result = mysqli_query($conn, $sql2);
								while ($row = mysqli_fetch_array($result)) {
										?>
										<tr>
											<td></td>
				
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
                                                                                        <td> <a href="update1.php"</a><button type="submit" name="submit" value="submit">Update</button></td>
                        <td> <a href="Delete1.php"</a><button type="submit" name="submit" value="submit">Delete</button></td>
										</tr>

								<?php } ?>
				</tbody>
				</table>
			</div>
			<!--Lead Scoring-->
			<div class="rightcontent">
                            <center><h3>Lead Score  Are:</h3></center>
				<table>
					<thead>
								<th>Name</th>
                <th>Lead Score</th>
                </thead>
            <tbody>
                <?php
                $sql3 = "select name,lscore from lead";
                $result = mysqli_query($conn, $sql3);
                                ?>
                
            
				</tbody>
				</table>
			</div>
                        <!--Assign Leads-->
			<div class="rightcontent">
                            <center><h3>Assign Leads Are:</h3></center>
				<table>
					<thead>
								<th>ID</th>
                <th>Name</th>
                <th>Email</th>
                </thead>
            <tbody>
                <?php
                $sql4 = "select eid, name,email from lead";
                $result = mysqli_query($conn, $sql4);
                                ?>
                
            
				</tbody>
				</table>
			</div>

		</div>
	</div>
</body>

</html
