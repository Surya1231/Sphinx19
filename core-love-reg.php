<?php
include('config.php');
include("check_user.php");
$db=new Database();
$conn=$db->db_connect();
if(isset($_POST['submitreg']))
{

	$url=$_POST['url'];
	$event_type=mysqli_real_escape_string($conn,$_POST['event_type']);
	if($event_type=="Computer Science")
	{
		$redirectto="computer_science.php";
	}
	else if($event_type=="Electrical & Electronics")
	{
		$redirectto="electrical_and_electronics.php";
	}
	else if($event_type=="Chemical")
	{
		$redirectto="chemical.php";
	}
	else if($event_type=="Civil")
	{
		$redirectto="civil.php";
	}
	else if($event_type=="Metallurgy")
	{
		$redirectto="metallurgy.php";
	}
	else if($event_type=="Architecture")
	{
		$redirectto="architecture.php";
	}
	else if($event_type=="Mechanical")
	{
		$redirectto="mechanical.php";
	}else if($event_type=="Extravaganza")
	{
		$redirectto="extravaganza.php";
	} else if($event_type=="Hackathon")
	{
		$redirectto="hackathons.php";
	} else if($event_type=="Robotics")
	{
		$redirectto="robotics.php";
	} else if($event_type=="SOC events")
	{
		$redirectto="socevents.php";
	}
	else if($event_type=="csgo")
	{
		$redirectto="csgo.php";
	}
	else if($event_type=="fifa")
	{
		$redirectto="fifa.php";
	}
	else if($event_type=="nfs")
	{
		$redirectto="nfs.php";
	}
	else if($event_type=="Workshop")
	{
	    $transactionid=mysqli_real_escape_string($conn,$_POST['transactionid']);
		$redirectto="workshop.php";
	}



	$event_name=mysqli_real_escape_string($conn,$_POST['event_name']);
	$event_name=ucfirst($event_name);
	$teamsize=mysqli_real_escape_string($conn,$_POST['teamsize']);
	$regid=(array)$_POST['regid'];
	$emailid=(array)$_POST['emailid'];
	$password=(array)$_POST['password'];
	date_default_timezone_set("Asia/kolkata");
	$input = date('YmdHi');
	$datesss= date("D", strtotime($input))." ". date("d-M-Y",strtotime($input));
	//print_r($regid);
	$i=0;
	$flag=0;
	foreach($regid as $regstration)
	{
		$regstr=mysqli_real_escape_string($conn,$regstration);
		$query="SELECT * FROM `users` where UPPER(register_id)=UPPER('$regstr')"
		;
		$db_num=$db->db_num($query);
		if($db_num>0)
		{
			$user_rows=$db->SinglerunQuery($query);
			$db_email=$user_rows['email'];
			$db_pass=$user_rows['password'];
			
			if((strcasecmp($emailid[$i], $db_email) == 0) && (base64_decode($db_pass)==$password[$i]))
			{
				if($event_type!='Workshop' && $user_rows['mnit']=='No' && $user_rows['entry_fee_trid']!='SUCCESS')
				{
					$flag=1;
					$_SESSION['Error']="One of team member has not paid the entry fee or has'nt been verified yet.";
					header("Location:".$url);
				}
			}
			else
			{
				$flag=1;
				$_SESSION['Error']=$regid." registration details is incorrect. ";
				header("Location:".$url);
			}
		}
		else
		{
			$flag=1;
			$_SESSION['Error']="One of the registration details is incorrect. ";
			header("Location:".$url);
		}
		$i++;
	}

	if($flag==0)
	{
		####################################UPDATED LINE 12/18/2017########################
		$user_login=$_SESSION["user_sphinx_sp"];
		$query_user=$db->SinglerunQuery("SELECT * FROM `users` where email='$user_login'");
		$get_reg_id=$query_user['register_id'];

		$query_reg="select * from registration where event_name='".$event_name."' and event_type='".$event_type."' and find_in_set('$get_reg_id',team_reg_id)";
		$nums_reg=$db->db_num($query_reg);
		if($nums_reg==0){

		$reg_id_comma=implode(",",$regid);
		if($event_type=="Workshop")
		{
			$query_in="INSERT INTO `registration`(`rid`, `event_type`, `event_name`, `team_size`, `team_reg_id`, `date_tym`,`payment`,`transaction_id`) VALUES (NULL,'$event_type','$event_name','$teamsize','$reg_id_comma','$datesss','YES','$transactionid')";
		}
		else{
			$query_in="INSERT INTO `registration`(`rid`, `event_type`, `event_name`, `team_size`, `team_reg_id`, `date_tym`) VALUES (NULL,'$event_type','$event_name','$teamsize','$reg_id_comma','$datesss')";
		}
	$res=$db->insertQuery($query_in);
	$in_b=mysqli_insert_id($conn);
	    foreach($regid as $regstration)
		{
			$regstr=mysqli_real_escape_string($conn,$regstration);
			$query_userdata=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regstr'");

			/*
			$name=$query_userdata['name'];
			$to = $query_userdata['email'];
						$subject = "Sphinx 2.0 | Event Registration";

						$message1 = "Dear $name \n\nGreetings from Sphinx ! \nYou are successfully registered for the Event $event_name($event_type).\n\nPlease find your registration details below.\n Name : $name\nEmail : $to\nRegistration id : $in_b"."
						\n\n  *** This is an automatically generated email, please do not reply *** " ;
						$headers = "From:sphinx2.0mnit@gmail.com";
						//$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						@$sent = mail($to, $subject, $message1, $headers);

						*/

						$name=$query_userdata['name'];
// 						$headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to = $query_userdata['email'];
$subject = "Sphinx'19 Registration";
$message = "Dear $name !\n\nGreetings from Sphinx'19' !\n\nYou are successfully registered for the Event: $event_name ($event_type). \n\nPlease find your registration details below. \n\n Name : $name \n\n Email : $to \n\nTeam id : $in_b \n\n ***This is an automatically generated email, please do not reply ***\n\n" ;

$from = "support@sphinxmnit.org";
// $from = "learnwebdevdhruv@gmail.com";
// $headers .= 'From: '.$from."\r\n".
// 'Reply-To: '.$from."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// mail($to,$subject,$message,$headers);
mail($to,$subject,$message,"From:".$from);

		}
		$_SESSION['suc_msg']="Your registration was successful !";
		header("Location:".$redirectto);
		}else{
			$_SESSION['Error']="You Already Registered for this event.";
			header("Location:".$url);
		}
	}




}
else
{
	echo "Invalid";
}
