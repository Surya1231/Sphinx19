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

echo "<h3>Paid Entery Fees </h3>";
echo "<br>";
$sql = "SELECT * FROM users WHERE college = 'Others' and entry_fee_trid != 'NULL'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Name</th><th>email</th><th>Contact NO</th><th>College Name </th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["uid"]."</td><td>".$row["name"]."</td><td>". $row["email"]."</td><td>". $row["phone"]."</td><td>".$row["collegename"]."</td><td>".$row["entry_fee_trid"]."</td><td>".$row["entry-fee-date"]."</td></tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

echo "<br><br>Total = ".$counter;
echo "<br><br>";

echo "<h3>All Entery Fees </h3>";
echo "<br>";
$sql = "SELECT * FROM users WHERE college = 'Others'";
$result = mysqli_query($conn, $sql);

$counter = 0;
if (mysqli_num_rows($result) > 0) {

	echo "<table border='1'><tr><th>Sno.</th><th>Name</th><th>email</th><th>Contact NO</th><th>College Name </th><th>Transaction ID</th><th>Date</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
       $counter++;
       echo "<tr><td>".$row["uid"]."</td><td>".$row["name"]."</td><td>". $row["email"]."</td><td>". $row["phone"]."</td><td>".$row["collegename"]."</td><td>".$row["entry_fee_trid"]."</td><td>".$row["entry-fee-date"]."</td></tr>";
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
