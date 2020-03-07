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

echo "<b>Bomb-squad</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Bomb-squad'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Payment required</th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["payment"]."</td><td>".$row["transaction_id"]."</td><td>".$row["date_tym"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

echo "<b>Fourth-estate</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Fourth-estate'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Payment required</th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["payment"]."</td><td>".$row["transaction_id"]."</td><td>".$row["date_tym"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

echo "<b>Ultimate-crossover</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Ultimate-crossover'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Payment required</th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["payment"]."</td><td>".$row["transaction_id"]."</td><td>".$row["date_tym"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

echo "<b>Maze-o-mania</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Maze-o-mania'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Payment required</th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["payment"]."</td><td>".$row["transaction_id"]."</td><td>".$row["date_tym"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

echo "<b>Mission-impossible</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Mission-impossible'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Payment required</th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["payment"]."</td><td>".$row["transaction_id"]."</td><td>".$row["date_tym"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

echo "<b>Spell-Bound</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Spell-Bound'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Payment required</th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["payment"]."</td><td>".$row["transaction_id"]."</td><td>".$row["date_tym"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

echo "<b>Scavenger-hunt</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Scavenger-hunt'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Payment required</th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["payment"]."</td><td>".$row["transaction_id"]."</td><td>".$row["date_tym"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

echo "<b>Egg-Suicide</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Egg-Suicide'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Payment required</th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["payment"]."</td><td>".$row["transaction_id"]."</td><td>".$row["date_tym"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

echo "<b>Photoshop-workshop</b>";
echo "<br>";
$sql = "SELECT * FROM registration WHERE event_name = 'Photoshop-workshop'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Event_type</th><th>Event_name</th><th>Team_size</th><th>Team_reg_id</th><th>Payment required</th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["rid"]."</td><td>". $row["event_type"]."</td><td>". $row["event_name"]."</td><td>".$row["team_size"]."</td><td>".$row["team_reg_id"]."</td><td>".$row["payment"]."</td><td>".$row["transaction_id"]."</td><td>".$row["date_tym"]."</td></tr>";
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
