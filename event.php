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


<!-- END WAYBACK TOOLBAR INSERT -->

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



<div class="modal fade" id="eventregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EXTRAVAGANZA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--<form class="form" method="post" action="#">
      <div class="modal-body">

          <div class="row">
          	<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Name :</label>
          </div>
            </div>
			<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Kunwar Singh</label>
          </div>
            </div>

          </div>

		  <div class="row">
          	<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Registration Id :</label>
          </div>
            </div>
			<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">SPHINX@123456</label>
          </div>
            </div>

          </div>
		  <div class="row">
          	<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Email Id :</label>
          </div>
            </div>
			<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">kunwar@gmail.com</label>
          </div>
            </div>

          </div>
		  <div class="row">
          	<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Password :</label>
          </div>
            </div>
			<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">SPHINX@123456</label>
          </div>
            </div>

          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-input">Proceed</button>
      </div>
      </form>-->
    </div>
  </div>
</div>





<!--top nav-->
<?php
	include('header.php');
?>

		<!--top nav end-->



<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">




  <style>
.event_box{
	width:200px;
	height:100px;
	background:url('images/back1.png') center center no-repeat;
	background-size:170px;
	display:inline-block;
	text-align:center;
	color:	#2A5A88;
	vertical-align:middle;
	font-family:text;
	font-size:17px;
	padding-top:35px;
	margin:10px;

font-weight:bold;
	margin-top:-10px;
	text-decoration:none;
}
.event_box a{
	color:#2A5A88;
}


.contentbox_pwr {
	width:50%;
	margin: auto;
	height: 300px;
}
.title_img2{
	position:absolute; width:14%; top:250px; right:22%;
}
.title_img{
	position:absolute; width:15%; top:160px; left:43%;
}
</style>
<a href="event.php"><img src="images/events.png" class="title_img"></a>
<section class="contentbox_pwr" style="">

    <div class="ourtemamanin_wrp">
	<div class="container1">
    	<div class="ourtem_heding">
          <div class="minheadtext" style="margin-top:20px;">
            <!--  <p style="font-size:14px;">Non MNIT students can book their slots  by  <a href="hospitality" style="text-decoration:none; font-weight:bold; font-size:20px; color:#fff;">clicking here.</a></p>-->
            </div>

    </div>
    </div>
    <div class="eventmain_wrp" style="padding-top: 30px;">
	<center>
	<a href="core-love-event.php"><div class="event_box">
		Core Love
	</div></a>

      <a href="hackathons.php">  <div class="event_box">
		Hackathons
	</div></a>


	<a href="robotics.php"><div class="event_box">
	Robotics
	</div></a>

	<a href="socevents.php"><div class="event_box">
	Soc Events
	</div></a>

	<a href="extravaganza.php"><div class="event_box">
		Extravaganza
	</div>
	
	<a href="drone.php"><div class="event_box">
		Drone Rush
	</div>
	
	<a href="projectexhibition.php"><div class="event_box">
		Project Exhibitions
	</div>
	
	</center>
    </div>
    </div>
</div>
    </div>
</section>



              </div>






























                    </div>
                </div>

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
