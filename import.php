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
		 header("Location: newresult.php");
}

if(isset($_POST['submitreg'])){
    $event = mysqli_real_escape_string($conn,$_POST['event']);

       header("Content-Type: application/xls");    
       header("Content-Disposition: attachment; filename=$event.xls");  
       header("Pragma: no-cache"); 
       header("Expires: 0");
        
        $sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {
    
    
	echo "<table border='1'><tr><th>Sno.</th><th>Register Id</th><th>Name</th><th>Email</th><th>Phone</th><th>course</th><th>year</th><th>branch</th><th>college</th><th>collegename</th><th>College Id</th><th>City</th><th>Accomodation </th>
	</tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$counter."</td><td>".$row['uid']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['course']."</td><td>".$row['year']."</td><td>".$row['branch']."</td><td>".$row['college']."</td><td>".$row['collegename']."</td><td>".$row['college_id']."</td><td>".$row['city']."</td><td>".$row['accommodation']."</td>";
     }
     
     
    echo "</table>";
    
    $_SESSION['Error'] = "Successful";
	      
	 }
}

else {
    echo '
    
<form class="form" method="post" action="import.php">
    <label> Event: </label> <br>
    <input type="text" class="form-control" placeholder="title" name="event" required> 
    <button type="submit" name="submitreg" class="btn btn-primary btn-input "> Submit </button>
</form><b>'.$_SESSION['Error'].'</b>';

$_SESSION['Error'] = "";
}
?>

</body>
</html>


