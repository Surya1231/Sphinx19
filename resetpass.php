<?php
include("config.php");
$db = new Database();
$conn = $db->db_connect();
 $emails_req=mysqli_real_escape_string($conn,$_REQUEST['email']);
	$sql="select * from users where email='$emails_req'";
	$result = $conn->query($sql);
			if($result->num_rows > 0)
				{
				$row = $result->fetch_assoc();
				   $password =  $row['password'];
				   $password = base64_decode($password);
				   $name =  $row['name'];

				  $conn->close();

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to = $emails_req;
$subject = "Sphinx'19 Registration";
$message="Dear $name !<br>Greetings from Sphinx '19'.<br><br>Your account password is : <b>$password</b><br><br>**This is auto generated mail,please do not reply**<br>";

$from = "support@sphinxmnit.in";
$headers .= 'From: '.$from."\r\n".
'Reply-To: '.$from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($to,$subject,$message,$headers);

echo "<p style='color:green;'>We have sent your password to your email. Also check junk or spam folder!</p>";
				}
				else
				{
					echo "<p style='color:red;'>This email is not register with us !</p>";
				}
