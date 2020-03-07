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
    $uid = mysqli_real_escape_string($conn,$_POST['regid']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    $query_in="INSERT INTO `Results` (`uid`, `title`, `discription`) VALUES (NULL,'$uid', '$password')";
    $res=$db->insertQuery($query_in);
    header("Location: results.php");
}

else {
    echo '
    <li> Please add "&lt;br&gt;" without quotes in the end of every line in discirption (add this in empty lines also).<li> To add links use &lt;a href="your link"&gt link &lt/a&gt . <br><br>
<form class="form" method="post" action="newresult.php" onsubmit="return confirm(\'Please ensure you added br tag in every line accordiing to instructions. Are you sure to add?\');">
    <label> Title: </label> <br>
    <input type="text" class="form-control" placeholder="title" name="regid" required> 
    <div class="form-group">
      <label for="comment">Description:</label>
      <textarea class="form-control" rows="15" id="comment" 
      name="password"> </textarea>
    </div><br>
    <button type="submit" name="submitreg" class="btn btn-primary btn-input "> Submit </button>
</form><b>'.$_SESSION['Error'].'</b>';

$_SESSION['Error'] = "";
}
?>

</body>
</html>


