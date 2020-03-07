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
	width:180px;
	height:100px;
	background:url('images/back1.png') center center no-repeat;
	background-size:150px;
	display:inline-block;
	text-align:center;
	color:	#2A5A88;
	vertical-align:middle;
	font-family:text;
	font-size:18px;
	padding-top:35px;

	font-weight:bold;

	letter-spacing:2px;
	margin-top:-10px;
	text-decoration:none;
}
.event_box a{
	color:#2A5A88;
}

.general_content{
	padding:10px;
}

.contentbox_pwr {
	width:60%;
	margin:auto;
	height:350px;
}
.title_img2{
	position:absolute; width:12%; top:300px; right:19%;
}
.title_img{
	position:absolute; width:17%; top:160px; left:41%;
}


</style>

<img src="images/labyrinth4.png" class="title_img">
<section class="contentbox_pwr" style="">

    <div class="ourtemamanin_wrp">
	<div class="container1">
    	<div class="ourtem_heding">
            <div class="minheadtext" style="margin-top:20px;">
             </div>
    </div>
    </div>
    <div class="eventmain_wrp">
	<center>
	<a href=""><div class="event_box">
		CS GO
	</div></a>

	<a href=""><div class="event_box">
		FIFA
	</div>

      <a href="">  <div class="event_box">
		NFS
	</div></a>
	<a href=""><div class="event_box">
		PUBG
	</div></a>
	</center>
    </div>
    </div>

	<br>
	<center><b><u style="font-family: 'bahnschrift', sans-serif; font-size: 16px;">TOURNAMENT RULES AND REGULATIONS</u></b></center>
<p class="general_content" style="font-family: 'bahnschrift', sans-serif; font-size: 16px;">By entering the Labyrinth Tournament, you acknowledge the following terms and conditions and agree to adhere to the tournament rules:<br>
<b>1 .</b> The players are allowed to configure their preferred settings prior to each match (cannot be altered once a match has begun).<br>
<b>2 .</b> The players are allowed to use their own gaming equipments such as Keyboard, Mouse, Mouse Pad, and Headphones.<br>
<b>3 .</b> Tournament Officials and Organizers will not be responsible for any loss or damage to the players’ gaming equipment.
</p>
</div>
    </div>
</section>



              </div>






























                    </div>
                </div>

<?php
	include('footer.php');
?>


    </body>
</html>
