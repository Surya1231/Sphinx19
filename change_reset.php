<?php
include("config.php");
$db = new Database();
$conn = $db->db_connect();
if(isset($_POST['changepass']) && ! empty ($_POST['changepass']) )
{

		$token=mysqli_real_escape_string($conn,$_POST['tokenss']);
		$query="select * from password_req where token='$token'";
		$nums=$db->db_num($query);
		if($nums>0)
		{
			$row=$db->SinglerunQuery($query);
			$email=$row['email'];
		}
		else
		{
			$_SESSION['register_msg']=" Something wrong Happen,please try again.";
			header("Location:index.php");
		}
		if($nums>0)
		{
			$new=md5($_POST['cpassword']);


			echo $update ="update users set password='$new' where email='$email'";
			$db->updateQuery($update);
			$res_my=$db->deleteQuery("delete from password_req where email='$email'");

			$_SESSION['register_msg']="Your Password has been successfully updated, Please login to continue";
			header('location:index.php');
		}
		else
		{
			$_SESSION['register_msg']=" Something wrong Happen. ";
			header('location:index.php');
		}
}
else{
	$_SESSION['register_msg']=" Something wrong Happen. ";
	header('location:index.php');
}
