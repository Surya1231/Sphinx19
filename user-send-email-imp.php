<html>
    <head> <title> Sphinx 19 </title><link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    </head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            width:80%;
            margin:auto;
        }
    </style>
<body>

<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_REQUEST['mode']))
	{
	   $mode=mysqli_real_escape_string($conn,$_REQUEST['mode']);
	  
	  if($mode == 'send'){
	   $sql = "SELECT * FROM registration WHERE rid='79'";
	   $result = mysqli_query($conn, $sql);
	   if (mysqli_num_rows($result) > 0){
	       $errro = "Sent Successfully to : ";
	    while($row = mysqli_fetch_assoc($result)){
	        $arr=explode(",",$row['team_reg_id']);
	        foreach($arr as $regid)
	        {
	        	$user_row=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regid'");
		        $to=$user_row['email'];
		        $subject = "Code of War Result";
		        $message=" Greetings from Team Sphinx,\n\nWe are elated to inform you that top 100 teams on leaderboard has been selected for the onsite round of Code of War.\n\nDetails for the onsite round are as follows:\nDate : 7th November, 9:00 am - 12:00pm\nVenue : Computer Center, Labs 4 and 5, MNIT\n\nTo attend the onsite round, fill this form :\nhttps://forms.gle/5smUe4eXXAhwgmi2A\nWe hope to see you there!\n\nNote :- For onsite visit (other colleges then MNIT,NIT UK and IIIT Kota) , you must have to pay a entry fee of 450rs per person (not per team) . This fee will cover your registration fee to every event and entry to pronites.\n\nFor any queries contact:\nRitika : 9588649104\nTapan : 8384859398\n\nThank and regards,\nTeam Sphinx\n";
		        $from = "support@sphinxmnit.org";
                mail($to,$subject,$message,"From:".$from);
                $errro = $errro."<br>  ".$user_row['register_id']." - ".$user_row['name'];
               
	        }
	        
	    }
	    
	     $_SESSION['Error'] = $errro;
	     header("Location:sendemail.php");
	   }
	 }
	   
	   
	  else if($mode == 'manual'){
	   
	   $event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	   $subject = mysqli_real_escape_string($conn,$_REQUEST['regid']);
	   $message = $_REQUEST['password'];
	   $sql = "SELECT * FROM registration WHERE UPPER(event_name) = UPPER('$event')";
	   $result = mysqli_query($conn, $sql);
	   if (mysqli_num_rows($result) > 0){
	       $errro = $subject."<br>".$message."<br>Sent Successfully to : ";
	    while($row = mysqli_fetch_assoc($result)){
	        $arr=explode(",",$row['team_reg_id']);
	        foreach($arr as $regid)
	        {
	        	$user_row=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regid'");
		        $to=$user_row['email'];
		        $from = "support@sphinxmnit.org";
                mail($to,$subject,$message,"From:".$from);
                $errro = $errro."<br>  ".$regid." - ".$user_row['name'];
               
	        }
	        
	    }
	    
	     $_SESSION['Error'] = $errro;
	     header("Location:sendemail.php");
	   }
	  }
	  
	  else if($mode == 'manual2'){
	   
	   $ids=mysqli_real_escape_string($conn,$_REQUEST['m1']);
	   $subject = mysqli_real_escape_string($conn,$_REQUEST['regid']);
	   $message = $_REQUEST['password'];
	   $from = "support@sphinxmnit.org";
	   
	   $arr=explode(",",$ids);
	   $errro = $subject."<br>".$message."<br>Sent Successfully to : ";
	   foreach($arr as $rid){
	        $user_row=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$rid'");
		    $to=$user_row['email'];
		    mail($to,$subject,$message,"From:".$from);
            $errro = $errro."<br>  ".$rid." - ".$user_row['name'];
	   }
	   
	     $_SESSION['Error'] = $errro;
	     header("Location:sendemail.php");
	  }
	  
	  else {
	      $_SESSION['Error'] = "Nhi hua";
	      header("Location:sendemail.php");
	  }
	  
	}
	
	else{
	
	echo '<br><a class="btn btn-primary"  href="sendemail.php?mode=send"> Send Mail By changing Code </a> <br> <br>
	
        <form class="form" action="sendemail.php?mode=manual" onsubmit="return confirm(\'Are you sure to Send?\');">
            <label> Event: </label> <br>
            <input type="text" class="form-control" placeholder="Name should be same that is diaplayed on admin panel" name="event" required> 
            <label> Subject of mail: </label> <br>
            <input type="text" class="form-control" placeholder="title" name="regid" required> 
            <div class="form-group">
              <label for="comment">Description:</label>
              <textarea class="form-control" rows="15" id="comment" 
              name="password"> </textarea>
            </div><br>
            <button type="submit" name="mode" value="manual" class="btn btn-primary btn-input "> Submit By event Name</button>
        </form>
        
        <form class="form" action="sendemail.php" onsubmit="return confirm(\'Are you sure to Send?\');">
            <label> Sphinx IDs: </label> <br>
            <input type="text" class="form-control" placeholder="sphinx19@1,sphinx19@2" name="m1" required> 
            <label> Subject of mail: </label> <br>
            <input type="text" class="form-control" placeholder="title" name="regid" required> 
            <div class="form-group">
              <label for="comment">Description:</label>
              <textarea class="form-control" rows="15" id="comment" 
              name="password"> </textarea>
            </div><br>
            <button type="submit" name="mode" value="manual2" class="btn btn-primary btn-input "> Submit By Sphinx Ids </button>
        </form>
        <br><b>'.$_SESSION['Error'].'</b><br><br><br><br><br>
	';
	
$_SESSION['Error'] = "";

}
mysqli_close($conn);
?>

</body>
</html>

