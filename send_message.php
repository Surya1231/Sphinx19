<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
include("validate.php");
$name=mysqli_real_escape_string($conn,$_REQUEST['name']);
$email=mysqli_real_escape_string($conn,$_REQUEST['email']);
$phone=mysqli_real_escape_string($conn,$_REQUEST['phone']);
$subjectz=mysqli_real_escape_string($conn,$_REQUEST['subjectz']);
$messagesss=mysqli_real_escape_string($conn,$_REQUEST['messagesss']);
if(($name==null) && $email==null)
{
	echo "Please fill all required fields";
} else
{
if(!validate_name($name))
	{
		echo   "Only letters numbers and white space allowed";
		 	
	} 
	else if(!validate_email($email))
	{
		echo "Email Address Is Not Valid";
		
	}
	else if(!validate_phone($phone))
	{
		echo "Invalid Phone, Enter 10 Digits";
				
	}
	else
	{

date_default_timezone_set("Asia/kolkata");
	$input = date('YmdHi'); 
	$datesss= date("D", strtotime($input))." ". date("d-M-Y",strtotime($input));
	
	
$query=$db->insertQuery("INSERT INTO `contact`(`cid`, `name`, `email`, `phone`, `subject`, `message`, `date_tym`) VALUES (NULL,'$name','$email','$phone','$subjectz','$messagesss','$datesss')");

$to = 'support@sphinxmnit.org';
$from = $email;
$subject = "Sphinx 2.0 | Query submitted on website(Contact us) ";
$message = "
<head>
</head>
<body style='background-color:#32a091;'>
	<div style='float:left;padding:5% ;width:90%;background-color:#32a091;'>
<div style='margin:0px auto;width:600px;padding:50px;color:#222;background-color:#FFF;border-bottom:5px solid #222;'
<strong>Dear Site Owner</strong><br>
Following information was submitted in contact us form on Sphinx 18 website <br><br>
<strong>Name   </strong>    : $name <br>
<strong>Email  </strong>    : $email <br>
<strong>Phone </strong>      : $phone <BR>
<strong>Subject  </strong>    : $subject <br>
<strong>Message </strong>      : $messagesss <BR>


<BR><BR>
Thank You

</div></div>
</center>
</body>";
$headers .= 'MIME-Version: 1.0' . "\r\n";  
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "";  

$headers .= "From: $name <$email>";
$retval = @mail ($to,$subject,$message,$headers);
	
	
	
	
	echo "Sent Successfully !";
}
	}