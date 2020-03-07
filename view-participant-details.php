<?php
// 	$servername = "localhost";
// 	$username = "sphinx19admin";
// 	$password = "Sphinx@2019";
// 	$dbname = "sphinx19";

// 	$conn = mysqli_connect($servername, $username, $password, $dbname);

include('config.php');
// include("check_user.php");
$db=new Database();
$conn=$db->db_connect();
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_REQUEST['regid']))
	{
	    $regid=mysqli_real_escape_string($conn,$_REQUEST['regid']);
	    $user=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regid'");
	   // $events=$db->SinglerunQuery("SELECT * FROM `registration` where find_in_set('$regid',team_reg_id)");
	    $sql = "SELECT * FROM registration WHERE find_in_set('$regid',team_reg_id)";
	    $events = mysqli_query($conn, $sql);
	    
	    
	}
	
	echo "Sphinx ID: ".$user['register_id']."<br>Name: ".$user['name']."<br>College: ".$user['collegename']."<br>CollegeID: ".$user['college_id']."<br>Accommodation: ".$user['accommodation']."<br>Entry Fee: ".$user['entry_fee_trid']."<br>Acc. Fee: ".$user['accomodation_fee_trid']."<br>";


	if (mysqli_num_rows($events) > 0) {
	echo "<style>table{text-align:center;font-size:12px;font-family:arial;width:100%;}td,th{padding-top:4px; padding-bottom:4px;}</style><table border='1'><tr>
			
			<th>Events Name</th>
			<th>No. of Team Members</th>
			<th>Registraion Id</th>
			<th>Payment Status</th>
			
		</tr>";
		while($row = mysqli_fetch_assoc($events)) {
		    

		echo "<tr><td>".$row['event_name']."</td><td>".$row['team_size']."</td><td>".$row['team_reg_id']."</td><td>".$row['transaction_id']."</td></tr>";


		}echo "</table>";
	} else {
		echo "<br><br><b>Participant not registered in any event.</b>";
	}

mysqli_close($conn);
?>
