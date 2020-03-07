<?php
include("config.php");
include("validate.php");
$db=new Database();
$conn=$db->db_connect();
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
if(isset($_POST['register']) && ! empty ($_POST['register']))
{

	$_SESSION['name']=$name=mysqli_real_escape_string($conn,$_POST['name']);
	$_SESSION['email']=$email=mysqli_real_escape_string($conn,$_POST['email']);
	$_SESSION['phone']=$phone=mysqli_real_escape_string($conn,$_POST['phone']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$pss=base64_encode($password);
	$_SESSION['course']=$course=mysqli_real_escape_string($conn,$_POST['course']);
	$_SESSION['year']=$year=mysqli_real_escape_string($conn,$_POST['year']);
	$_SESSION['branch']=$branch=mysqli_real_escape_string($conn,$_POST['branch']);
	$_SESSION['college']=$college=mysqli_real_escape_string($conn,$_POST['college']);
	if($college=='MNIT' || $college=='NIT UK' || $college=='IIIT Kota'){
		$_SESSION['collegename']=$collegename=$college;
		$_SESSION['mnit']=$mnit='Yes';
	}
	else{
			$_SESSION['collegename']=$collegename=mysqli_real_escape_string($conn,$_POST['collegename']);
			$_SESSION['mnit']=$mnit='No';
	}
	$_SESSION['colid']=$colid=mysqli_real_escape_string($conn,$_POST['colid']);
	$_SESSION['city']=$city=mysqli_real_escape_string($conn,$_POST['city']);
	$_SESSION['accommondation']=$accommondation=mysqli_real_escape_string($conn,$_POST['accommondation']);
	$url=$_POST['url'];

	date_default_timezone_set("Asia/kolkata");
	$input = date('YmdHi');
	$datesss= date("D", strtotime($input))." ". date("d-M-Y",strtotime($input));


	if(!validate_user_name($name))
	{
		$_SESSION['register_msg'] = "Only letters numbers and white space allowed";
		header("Location:".$url);
	}
	else if(!validate_email($email))
	{
		$_SESSION['register_msg'] = "Email Address Is Not Valid";
		header("Location:".$url);
	}
	else if(!validate_phone($phone))
	{
		$_SESSION['register_msg'] = "Invalid Phone, Enter 10 Digits";
		header("Location:".$url);
	}
	else
	{
		$querys="select * from users where email='$email'";
		$db_num=$db->db_num($querys);
		if($db_num>0)
		{
			$_SESSION['register_msg']="Email id is already registered with us.";
			header("Location:".$url);
		}
		else
		{


 		 $query="INSERT INTO `users`(`uid`, `register_id`, `name`, `email`, `phone`, `password`, `course`, `year`, `branch`, `college`,`collegename`, `college_id`, `city`, `accommodation`,`mnit`, `active`, `date_tym`) VALUES (NULL,'','$name','$email','$phone','$pss','$course','$year','$branch','$college','$collegename','$colid','$city','$accommondation','$mnit','1','$datesss')";
		$result=$db->insertQuery($query);
		$in_b=mysqli_insert_id($conn);
		$registrationid="sphinx19@".$in_b;
		$update=$db->updateQuery("UPDATE `users` SET `register_id`='$registrationid' where uid='$in_b'");
			if($result)
			{
			/*		$to = $email;
					$from = "support@sphinxmnit.org";
			 		$subject = "Sphinx 2.0 Registration";
			 		$headers = 'From:' . $from;
			 		$message1="Dear $name\nGreetings from Sphinx 2.0.\nYour account has been successfully created.\n\nPlease find your account details below.\nName: $name\nEmail: $email\nRegistration ID: $registrationid\n\nPlease don't share your registration ID and password with anyone.\nIf you are a student outside MNIT Jaipur please complete your payment.\n\nFor payment and accomodation contact us:\nKurja Rathore\n7742419373\n2015umt1574@mnit.ac.in\n\nMeet Deshani\n7567838028\n2015uch1499@mnit.ac.in\n\n**This is auto generated mail,please do not reply**\n";

					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			 		mail($to, $subject, $message1, $headers);

					*/
					// $headers  = 'MIME-Version: 1.0' . "\r\n";
					// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$to = $email;
					$subject = "Sphinx'19 Registration";
					$message="Dear $name !\n\nGreetings from Sphinx'19\n\nYour account has been successfully created. Please find your account details below.\n\nName: $name\n\nEmail: $email\n\nRegistration ID: $registrationid\n\nPlease don't share your registration ID and password with anyone. If you are a student outside MNIT Jaipur please complete your payment.\n\nFor payment and accomodation contact us:\n\nAnsh Khandelwal \n\n+91-8518066443 \n\n2017uch1770@mnit.ac.in\n\n Nupur \n\n+91-8700614357\n\n 2017uar1567@mnit.ac.in\n\n\nHere is the link to your Sphinx 19 registration unique QR Code. You need to show it at the entrance and to the event coordinators as and when asked.\n\nhttps://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://sphinxmnit.in/view-participant-details.php?regid=$registrationid' \n\n\n\n**This is auto generated mail, please do not reply**\n\n";
					$from = "support@sphinxmnit.in";
					mail($to,$subject,$message,"From:".$from);












				//$_SESSION["user_spix"]=$email;
				unset($_SESSION['name']);
				unset($_SESSION['email']);
				unset($_SESSION['phone']);
				unset($_SESSION['course']);
				unset($_SESSION['year']);
				unset($_SESSION['college']);
				unset($_SESSION['branch']);
				unset($_SESSION['colid']);
				unset($_SESSION['accommondation']);
				unset($_SESSION['city']);
				$_SESSION['register_msg']="Your registration has been compeleted.Your Sphinx'19 ID is $registrationid . Please check your email for login details, also check spam and junk folder.";
				header("Location:index.php");

			}
		}
	}

}
else
{
	$_SESSION['register_msg']="Invalid request ";
	header("Location:index.php");
}
