<?php
// 	$servername = "localhost";
// 	$username = "sphinx19admin";
// 	$password = "Sphinx@2019";
// 	$dbname = "sphinx19";
include('config.php');
// 	$conn = mysqli_connect($servername, $username, $password, $dbname);
$db=new Database();
$conn=$db->db_connect();
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM registration WHERE event_name='Photoshop-workshop'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	echo "<style>table{text-align:center;font-size:12px;font-family:arial;width:100%;}td,th{padding-top:4px; padding-bottom:4px;}</style><table border='1'><tr>
		
			<th>REGISTER-ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>PHONE</th>
			<th>YEAR</th>
			<th>COLLEGE</th>
			<th>DATE</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {
		    $regid2=$row['team_reg_id'];
		  //  echo $regid2;
		    $user=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regid2'");

		echo "<tr><td width='100px'>".$user['register_id']."</td><td width='150px'>".$user['name']."</td><td width='180px'>".$user['email']."</td><td>".$user['phone']."</td><td>".$user['year']."</td><td>".$user['collegename']."</td><td>".$user['date_tym']."</td></tr>";


		}echo "</table>";
	} else {
		echo "0 results";
	}

mysqli_close($conn);
?>
