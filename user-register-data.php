<?php
	$servername = "localhost";
	$username = "sphinx19admin";
	$password = "Sphinx@2019";
	$dbname = "sphinx19";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	echo "<style>table{text-align:center;font-size:12px;font-family:arial;width:100%;}td,th{padding-top:4px; padding-bottom:4px;}</style><table border='1'><tr>
			<th>UID</th>
			<th>REGISTER-ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>PHONE</th>
			<th>COURSE</th>
			<th>YEAR</th>
			<th>BRANCH</th>
			<th>COLLEGE</th>
			<th>COLLEGE ID</th>
			<th>CITY</th>
			<th>ACC.</th>
			<th>DATE</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {

		echo "<tr><td>".$row['uid']."</td><td width='100px'>".$row['register_id']."</td><td width='150px'>".$row['name']."</td><td width='180px'>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['course']."</td><td>".$row['year']."</td><td width='100px'>".$row['branch']."</td><td>".$row['college']."</td><td>".$row['college_id']."</td><td>".$row['city']."</td><td>".$row['accommodation']."</td><td>".$row['date_tym']."</td></tr>";


		}echo "</table>";
	} else {
		echo "0 results";
	}

mysqli_close($conn);
?>
