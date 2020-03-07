<?php
include('config.php');
$db=new Database();
?>
<!DOCTYPE html>
<html class="skrollr skrollr-desktop">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Sphinx'19</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="images/favicon.png">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/main.css">
<link href="css/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body style="overflow:hidden;">
<script type="text/javascript" src="js/timestamp.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/graph-calc.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/auto-complete.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/toolbar.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/popper.js" charset="utf-8"></script>
<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>
<script>

	$(function(){
		$('.regist-popshow').click(function(){
			$('.modalevent').modal('hide');
			$('#eventregister').modal('show');
		});
	});
</script>
<script>
$(window).bind("load", function() {
	//alert('hello');
  	$('#overlay').css({'left':'110%', 'transition':'all 1s ease-in-out'}, 2000);

});
</script>
<div id="overlay" style="width:100%;">
	<div class="ppp1" >
		 <div class="ppp2"></div>
		 <div class="ppp3"></div>
	</div>
</div>


<?php
	include('header.php');
?>


<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
  <style>
.event_box{
	width:220px;
	height:100px;
	background:url('images/back1.png') center center no-repeat;
	background-size:200px;
	display:inline-block;
	text-align:center;
	color:	#2A5A88;
	vertical-align:middle;
	font-family:text;
	font-size:14px;
	padding-top:35px;
	font-weight:bold;
	margin-top:-10px;
	text-decoration:none;
}
.event_box:hover{
	background:url('images/back2.png') center center no-repeat;
	background-size:200px;
	color:#fff;
}
.event_box a{
	color:#2A5A88;
}
.general_content{
	padding:10px;
}


.contentbox_pwr {
	width:68%;
	margin: auto;
}
.title_img2{
	position:absolute; width:40%; bottom:160px; right:0%;
}
.title_img{
	position:absolute; width:17%; top:160px; left:42%;
}
</style>


<a href="core-love-event.php"><img src="images/corelove.png" class="title_img"></a>
<section class="contentbox_pwr" style="" >
    <div class="ourtemamanin_wrp">
	<div class="container1">
    	<div class="ourtem_heding">
            <div class="minheadtext" style="margin-top:20px;">
             </div>
    </div>
    </div>
    <div class="eventmain_wrp">
	<center>
	<a href="computer_science.php" ><div class="event_box">
		Computer Science
	</div></a>
	
	<a href="electrical_and_electronics.php" ><div class="event_box">
		Electrical & Electronics
	</div></a>
	
	 <a href="mechanical.php">  <div class="event_box">
		Mechanical
	</div></a>
	
	<a href="civil.php" ><div class="event_box" >
		Civil
	</div>

	</center>
    </div>
	<div class="eventmain_wrp">
	<center>
	    	<a href="chemical.php" ><div class="event_box">
		Chemical
	</div>

      <a href="metallurgy.php" >  <div class="event_box">
		Metallurgy
	</div></a>
	<a href="architecture.php" ><div class="event_box">
		Architecture
	</div></a>
     
	</center>
    </div>
    </div>
</div>
    </div>
</section>

<?php
if(isset($_SESSION['suc_msg']))
{ ?>
<script>
alert("<?=$_SESSION['suc_msg'];?>");
</script>
<?php unset($_SESSION['suc_msg']); } ?>
<?php
	include('footer.php');
?>


</body>
</html>
