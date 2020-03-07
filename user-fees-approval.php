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
	    $uid=mysqli_real_escape_string($conn,$_REQUEST['uid']);
	    $mode=mysqli_real_escape_string($conn,$_REQUEST['mode']);
	    $user_rows=$db->SinglerunQuery("SELECT * FROM `users` where uid='$uid'");
	    $db_email=$user_rows['email'];
	    if($mode=='accept-entry')
	    {
	       
	        $update=$db->updateQuery("UPDATE `users` SET `entry_fee_trid`='SUCCESS' where uid='$uid'");
	        $to = $db_email;
            $subject = "Sphinx'19 Registration";
            $message = "Your Entry fee payment has been approved. Now you can register for the Events at Sphinx'19.";
            
            $from = "support@sphinxmnit.org";
            mail($to,$subject,$message,"From:".$from);
	    }
	    else if($mode=='accept-acc')
	    {
	        $update=$db->updateQuery("UPDATE `users` SET `accomodation_fee_trid`='SUCCESS' where uid='$uid'");
	        $to = $db_email;
            $subject = "Sphinx'19 Registration";
            $message = "Your Accommodation fee payment has been approved.";
            
            $from = "support@sphinxmnit.org";
            mail($to,$subject,$message,"From:".$from);
	    }
	    else if($mode=='reject-entry')
	    {
	        $update=$db->updateQuery("UPDATE `users` SET `entry_fee_trid`=NULL where uid='$uid'");
	        $to = $db_email;
            $subject = "Sphinx'19 Registration";
            $message = "Sorry, Your entry fee payment was rejected. Please make sure you enter the correct transaction id or make correct payment.";
            
            $from = "support@sphinxmnit.org";
            mail($to,$subject,$message,"From:".$from);
	    }
	    else if($mode=='reject-acc')
	    {
	        $update=$db->updateQuery("UPDATE `users` SET `accomodation_fee_trid`=NULL where uid='$uid'");
	        $to = $db_email;
            $subject = "Sphinx'19 Registration";
            $message = "Sorry, Your accommodation fee payment was rejected. Please make sure you enter the correct transaction id or make correct payment.";
            
            $from = "support@sphinxmnit.org";
            mail($to,$subject,$message,"From:".$from);
	    }
	}

	$sql = "SELECT * FROM users WHERE mnit='No' && (entry_fee_trid!='SUCCESS' || accomodation_fee_trid!='SUCCESS')";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	echo "<style>table{text-align:center;font-size:12px;font-family:arial;width:100%;}td,th{padding-top:4px; padding-bottom:4px;}</style><table border='1'><tr>
			
			<th>REGISTER-ID</th>
			<th>NAME</th>
			
			<th>PHONE</th>
			
			
			<th>ENTRY FEE</th>
			<th>ACC FEE</th>
			<th>ENTRY FEE APPROVAL</th>
			<th>ACC FEE APPROVAL</th>
			
		</tr>";
		while($row = mysqli_fetch_assoc($result)) {

		echo "<tr><td width='100px'>".$row['register_id']."</td><td width='150px'>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['entry_fee_trid']."<br>".$row['entry-fee-date']."</td><td>".$row['accomodation_fee_trid']."<br>".$row['acc-fee-date']."</td><td><a  href='user-fees-approval.php?mode=accept-entry&uid=".$row['uid']."' onclick='return confirm(\"Are you sure?\");' >APPROVE</a><br><a onclick='return confirm(\"Are you sure?\");' href='user-fees-approval.php?mode=reject-entry&uid=".$row['uid']."'>REJECT</a></td><td><a onclick='return confirm(\"Are you sure?\");' href='user-fees-approval.php?mode=accept-acc&uid=".$row['uid']."'>APPROVE</a><br><a onclick='return confirm(\"Are you sure?\");' href='user-fees-approval.php?mode=reject-acc&uid=".$row['uid']."'>REJECT</a></td></tr>";


		}echo "</table>";
	} else {
		echo "0 results";
	}

mysqli_close($conn);
?>
