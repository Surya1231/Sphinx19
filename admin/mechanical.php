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
$username = "sphinx5w";
$password = "6^Np#FnH8+!0";
$dbname = "sphinx5w_sphinx";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM registration WHERE event_type = 'Mechanical'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {
    
	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["date_tym"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
mysqli_close($conn);
?> 

</body>
</html>