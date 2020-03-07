<style>
tr{
    height:100px;
}
td{
    padding:20px;
}
</style>
<?php
$servername = "localhost";
	$username = "sphinx19admin";
	$password = "Sphinx@2019";
	$dbname = "sphinx19";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<b>Hack-24</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Hack-24'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Date</th><th>Name and Contact Number</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       $arr=explode(",",$row['team_reg_id']);
       
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["date_tym"]."</td><td>";
       
      foreach ($arr as $regid1){
	   $sql2 = "SELECT * FROM `users` where register_id='$regid1'";
	   $result2 = mysqli_query($conn, $sql2);
	   while($row1 = mysqli_fetch_assoc($result2)){
      echo "<li>".$row1["name"]." -- ".$row1["phone"]."</li>";
	   }
      }
       
       echo "</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

mysqli_close($conn);
?>

</body>
</html>
