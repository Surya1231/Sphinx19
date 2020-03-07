<html>
    <head> <title> Sphinx 19 </title><link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            padding-left:50px;
            padding-top: 100px;
        }
    </style>
    </head>
<body>

<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		 header("Location: paymentcomplete.php");
}

if(isset($_POST['submitreg'])){
    $uid = mysqli_real_escape_string($conn,$_POST['regid']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    if($password == "@sphinx@"){
        
        $update=$db->updateQuery("UPDATE `users` SET `entry_fee_trid`='SUCCESS' where UPPER(register_id)=UPPER('$uid')");
        
        $user_rows=$db->SinglerunQuery("SELECT * FROM `users` where UPPER(register_id)=UPPER('$uid')");
        $to = $user_rows['email'];
        $subject = "Sphinx'19 Registration";
        $message = "Your Entry fee payment has been approved. Now you can register for the Events at Sphinx'19.";
        $from = "support@sphinxmnit.org";
        mail($to,$subject,$message,"From:".$from);
        
        $_SESSION['Error']="Succefull payment of ".$uid." ".$user_rows['name'];
        header("Location: paymentcomplete.php");
    }
    else{
        $_SESSION['Error']="Wrong Password";
        header("Location: paymentcomplete.php");
    }
}

else {
    echo '<form class="form" method="post" action="paymentcomplete.php">
<label> Registration Id: </label> <input type="text" class="form-control-lg" placeholder="(Eg:sphinx19@1)" name="regid" required> <br><br>
<label> Password: </label> <input type="password" class="form-control-lg" placeholder="Enter password" name="password" required><br><br>
<button type="submit" name="submitreg" class="btn btn-primary btn-input ">Register</button>
</form><b>'.$_SESSION['Error'].'</b>';

$_SESSION['Error'] = "";
}
?>

</body>
</html>


