<?php
include("config.php");
$db = new Database();
$conn = $db->db_connect();
$email = mysqli_real_escape_string($conn,$_POST["regid"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);
$url=$_POST['url'];
if(!((strlen($email)>0)&&(strlen($password)>0)))
{
$_SESSION["message"]="Please Fill Both fields correctly";
header("Location:".$url);

}
else
{

	 $query="select * from users where register_id='".$email."'";
	$nums=$db->db_num($query);
	if($nums>0)
	{
		$row = $db->SinglerunQuery($query);
		if(base64_decode($row["password"]) == $password)
		{
			$emailsss=$row['email'];
		$_SESSION["user_sphinx_sp"]=$emailsss;
		$_SESSION["sphinx_id"]=$row['register_id'];
		if($row["mnit"]=='No' && $row["entry_fee_trid"]==NULL){
			$_SESSION['suc_msg']="NOTE:- PARTICIPANTS FROM ALL COLLEGES OTHER THAN MNIT, IIIT KOTA AND NIT UK, NEED TO FIRST PAY THE ENTRY FEES AND ENTER TRANSACTION ID OF PAYMENT BY GOING TO YOUR PROFILE. YOU WILL BE ABLE TO REGISTER FOR EVENTS ONLY AFTER YOUR PAYMENT IS VERIFIED BY US.";
		}
		header("Location:".$url);

		}
		else{
			$_SESSION["message"]="Registration id or password is incorrect.";
			header("Location:".$url);



			}
	}
	else
	{
			$_SESSION["message"]="Registration id Not Found.";
			header("Location:".$url);

	}

}

?>
