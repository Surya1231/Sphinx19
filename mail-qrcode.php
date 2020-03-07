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
	if(isset($_REQUEST['export'])){
	    
	   header("Content-Type: application/xls");    
       header("Content-Disposition: attachment; filename=Aqua-missile.xls");  
       header("Pragma: no-cache"); 
       header("Expires: 0");
        
        $sql = "SELECT * FROM registration WHERE event_name = 'Aqua-missile'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {
    $_SESSION['Error'] = "Hello";
    echo "<tr><td>".$row['event_name']."</td></tr>";

	echo "<table border='1'><tr><th>Sno.</th><th>TS</th><th>Details</th><th> Signature .. </th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       $arr=explode(",",$row['team_reg_id']);
       
       echo "<tr><td>".$row["rid"]."</td><td>".$row["team_size"]."</td><td><table border='1'>";
       
      foreach ($arr as $regid1){
	   $sql2 = "SELECT * FROM `users` where register_id='$regid1'";
	   $result2 = mysqli_query($conn, $sql2);
	   while($row1 = mysqli_fetch_assoc($result2)){
      echo "<tr><td>".$regid1."</td><td>".$row1["name"]."</td><td>".$row1["phone"]."</td><td>".$row1["college"]."</td></tr>";
	   }
      }
      
       echo "</table></td><td></td></tr>";
     }
     
     
    echo "</table>";
	 }
	}
	if(isset($_REQUEST['mode']))
	{
	   $sql = "SELECT * FROM users order by 1 limit 3000,409;";
	   $result = mysqli_query($conn, $sql);
	   
	   if (mysqli_num_rows($result) > 0){
	       while($row = mysqli_fetch_assoc($result)){
	           $to = $row['email'];
              $subject = "Sphinx'19 QR Code";
              $message = "Here is the link to your Sphinx 19 registration unique QR Code. You need to show it at the entrance and to the event coordinators as and when asked.\n\n'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://sphinxmnit.in/view-participant-details.php?regid=".$row['register_id']."'"."\n\nThanks and Regards,\nTeam Sphinx\n";
            
              $from = "support@sphinxmnit.org";
              mail($to,$subject,$message,"From:".$from);
              header("Location:mail-qrcode.php");
	       }
	   }
	   
// 	   $sql = "SELECT * FROM registration WHERE event_name='Code-of-War'";
// 	$result = mysqli_query($conn, $sql);

// 	if (mysqli_num_rows($result) > 0){
// 	    while($row = mysqli_fetch_assoc($result)){
// 	        if($row['team_size']==1){
// 	            $regid2=strtolower($row['team_reg_id']);
// 		        $user_row=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regid2'");
// 		        $to=$user_row['email'];
// 		        $subject = "Code of War Result";
// 		        $message=" Greetings from Team Sphinx,\n\nWe are elated to inform you that top 100 teams on leaderboard has been selected for the onsite round of Code of War.\n\nDetails for the onsite round are as follows:\nDate : 7th November, 9:00 am - 12:00pm\nVenue : Computer Center, Labs 4 and 5, MNIT\n\nTo attend the onsite round, fill this form :\nhttps://forms.gle/5smUe4eXXAhwgmi2A\nWe hope to see you there!\n\nNote :- For onsite visit (other colleges then MNIT,NIT UK and IIIT Kota) , you must have to pay a entry fee of 450rs per person (not per team) . This fee will cover your registration fee to every event and entry to pronites.\n\nFor any queries contact:\nRitika : 9588649104\nTapan : 8384859398\n\nThank and regards,\nTeam Sphinx\n";
// 		        $from = "support@sphinxmnit.org";
//                 mail($to,$subject,$message,"From:".$from);
//                 header("Location:mail-qrcode.php");
// 	        }
// 	      else if($row['team_size']==2){
// 	          $arr=explode(",",$row['team_reg_id']);
// 	          $regid2=$arr[0];
// 		        $user_row=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regid2'");
// 		        $to=$user_row['email'];
// 		        $subject = "Code of War Result";
// 		        $message=" Greetings from Team Sphinx,\n\nWe are elated to inform you that top 100 teams on leaderboard has been selected for the onsite round of Code of War.\n\nDetails for the onsite round are as follows:\nDate : 7th November, 9:00 am - 12:00pm\nVenue : Computer Center, Labs 4 and 5, MNIT\n\nTo attend the onsite round, fill this form :\nhttps://forms.gle/5smUe4eXXAhwgmi2A\nWe hope to see you there!\n\nNote :- For onsite visit (other colleges then MNIT,NIT UK and IIIT Kota) , you must have to pay a entry fee of 450rs per person (not per team) . This fee will cover your registration fee to every event and entry to pronites.\n\nFor any queries contact:\nRitika : 9588649104\nTapan : 8384859398\n\nThank and regards,\nTeam Sphinx\n";
// 		        $from = "support@sphinxmnit.org";
//                 mail($to,$subject,$message,"From:".$from);
              
//                 $regid2=$arr[1];
// 		        $user_row=$db->SinglerunQuery("SELECT * FROM `users` where register_id='$regid2'");
// 		        $to=$user_row['email'];
// 		        $subject = "Code of War Result";
// 		        $message=" Greetings from Team Sphinx,\n\nWe are elated to inform you that top 100 teams on leaderboard has been selected for the onsite round of Code of War.\n\nDetails for the onsite round are as follows:\nDate : 7th November, 9:00 am - 12:00pm\nVenue : Computer Center, Labs 4 and 5, MNIT\n\nTo attend the onsite round, fill this form :\nhttps://forms.gle/5smUe4eXXAhwgmi2A\nWe hope to see you there!\n\nNote :- For onsite visit (other colleges then MNIT,NIT UK and IIIT Kota) , you must have to pay a entry fee of 450rs per person (not per team) . This fee will cover your registration fee to every event and entry to pronites.\n\nFor any queries contact:\nRitika : 9588649104\nTapan : 8384859398\n\nThank and regards,\nTeam Sphinx\n";
// 		        $from = "support@sphinxmnit.org";
//                 mail($to,$subject,$message,"From:".$from);
                
//                 header("Location:mail-qrcode.php");
// 	      }
// 	    }
// 	}
	   
	    
	}
	
	echo "<a href='mail-qrcode.php?mode=send'>SEND QR CODE</a>";


mysqli_close($conn);
?>
