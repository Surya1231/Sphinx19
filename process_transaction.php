<?php

include('config.php');
include("check_user.php");
$db=new Database();
$conn=$db->db_connect();

if(isset($_POST['submitreg']))
{

	$url=$_POST['url'];
	$rid=mysqli_real_escape_string($conn,$_POST['rid']);
	$transactionID=mysqli_real_escape_string($conn,$_POST['transactionID']);

  $update=$db->updateQuery("UPDATE `registration` SET `transaction_id`='$transactionID' where rid='$rid'");

  header("Location:registered-events.php");

}
else if(isset($_POST['submitreg2']))
{

	$url=$_POST['url'];
	$rid=mysqli_real_escape_string($conn,$_POST['rid']);
	// $uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$email=$_SESSION["user_sphinx_sp"];
	$query=$db->SinglerunQuery("select * from users where email='$email'");
	$uid=$query['uid'];
	$transactionID=mysqli_real_escape_string($conn,$_POST['transactionID']);
	date_default_timezone_set("Asia/kolkata");
	$input = date('YmdHi');
	$datesss= date("D", strtotime($input))." ". date("d-M-Y",strtotime($input));

	if($rid=='entryfee'){
  $update=$db->updateQuery("UPDATE `users` SET `entry_fee_trid`='$transactionID' where uid='$uid'");
  $update=$db->updateQuery("UPDATE `users` SET `entry-fee-date`='$datesss' where uid='$uid'");
  }
	if($rid=='accomodationfee'){
  $update=$db->updateQuery("UPDATE `users` SET `accomodation_fee_trid`='$transactionID' where uid='$uid'");
  $update=$db->updateQuery("UPDATE `users` SET `acc-fee-date`='$datesss' where uid='$uid'");
  }
  header("Location:profile.php");

}
else
{
	echo "Invalid";
}

?>
