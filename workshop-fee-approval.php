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
	if(isset($_REQUEST['mode']))
	{
	    $rid=mysqli_real_escape_string($conn,$_REQUEST['rid']);
	    $regid=strtolower(mysqli_real_escape_string($conn,$_REQUEST['regid']));
	    $mode=mysqli_real_escape_string($conn,$_REQUEST['mode']);
	    $user_rows=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regid'");
	    $db_email=$user_rows['email'];
	    $event_row=$db->SinglerunQuery("SELECT * FROM `registration` where rid='$rid'");
	    $workshop=$event_row['event_name'];
	    if($mode=='accept')
	    {
	       
	        $update=$db->updateQuery("UPDATE `registration` SET `transaction_id`='SUCCESS' where rid='$rid'");
	        $to = $db_email;
            $subject = "Sphinx'19 Registration";
            $message = "Your fee payment for ".$workshop." workshop has been approved.";
            
            $from = "support@sphinxmnit.org";
            mail($to,$subject,$message,"From:".$from);
            header("Location:workshop-fee-approval.php");
	    }
	    
	    else if($mode=='reject')
	    {
	        $update=$db->deleteQuery("DELETE from `registration` where rid='$rid'");
	        $to = $db_email;
            $subject = "Sphinx'19 Registration";
            $message = "Sorry, your fee payment for ".$workshop." workshop was rejected. Please register for the workshop again and make sure you enter the correct transaction id or make correct payment.";
            
            $from = "support@sphinxmnit.org";
            mail($to,$subject,$message,"From:".$from);
            header("Location:workshop-fee-approval.php");
	    }
	}

	$sql = "SELECT * FROM registration WHERE event_type='Workshop' && transaction_id!='SUCCESS'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	echo "<style>table{text-align:center;font-size:12px;font-family:arial;width:100%;}td,th{padding-top:4px; padding-bottom:4px;}</style><table border='1'><tr>
			
			<th>RID</th>
			<th>Workshop</th>
			<th>Registration ID</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Transaction ID</th>
			<th>Approve/Reject</th>
			
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {
		    
		    $regid2=strtolower($row['team_reg_id']);
		    $user_row=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regid2'");
	        $name=$user_row['name'];
	        $phone=$user_row['phone'];

		echo "<tr><td>".$row['rid']."</td><td>".$row['event_name']."</td><td>".$row['team_reg_id']."</td><td>".$name."</td><td>".$phone."</td><td>".$row['transaction_id']."<br>".$row['date_tym']."</td><td><a  href='workshop-fee-approval.php?mode=accept&rid=".$row['rid']."&regid=".$row['team_reg_id']."' onclick='return confirm(\"Are you sure?\");' >APPROVE</a><br><a onclick='return confirm(\"Are you sure?\");' href='workshop-fee-approval.php?mode=reject&rid=".$row['rid']."&regid=".$row['team_reg_id']."'>REJECT</a></td></tr>";


		}echo "</table>";
	} else {
		echo "0 results";
	}

mysqli_close($conn);
?>
