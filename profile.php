<?php
include("config.php");
include("check_user.php");
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['rid'])){
	$rid=mysqli_real_escape_string($conn,$_REQUEST['rid']);
	// $uid=mysqli_real_escape_string($conn,$_REQUEST['uid']);
}
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
			$('#eventregister2').modal('show');
		});
	});
	$(function(){
			$('.profile-sidebar-wrp ul li a').removeClass('active');
			$('.P-profile').addClass('active');
	});
	P-profile

</script>

<?php
if(isset($_REQUEST['rid']))
{ ?>
	<script type="text/javascript">  $(window).load(function () {  $('#eventregister2').modal('show'); });</script>
<?php }
?>

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

<div class="modal fade" id="eventregister2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <form class="form" method="post" action="process_transaction.php">
        <div class="modal-body">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">Transaction ID</label>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="form-group">
								<input type="text" class="form-control" id="transactionID" placeholder="Enter transaction ID" name="transactionID" required>
							</div>
						</div>
					</div>
        </div>
        <div class="modal-footer">
        <!-- <input type="hidden" name="event_type" value="Robotics">
        <input type="hidden" name="event_name" value="<?=$event;?>"> -->
        <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
				<input type="hidden" name="rid" value="<?=$rid;?>">
        <p style="color:#CF5759"><?=@$_SESSION['Error']; @$_SESSION['Error']=null;?></p>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submitreg2" class="btn btn-input">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
	.data_table td{
		width:100%;
		font-size:14px;
		font-weight:bold;
	}

.regi_side{
	display:inline-block;
	width:200px;
	background-color:#fff;
	color:#2A5D88;
	height:40px;
	font-weight:bold;
	padding:10px;
	font-size:15px;
	margin-top:10px;
}

.contentbox_pwr {
	width:40%; padding-left:30px; left:25px; position:absolute; top:240px;;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
	position:absolute; width:16%; top:140px; left:210px;
}


</style>

<?php
	include('header.php');
?>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/profile.png" class="title_img">
   <section class="contentbox_pwr" style="">
   <center>
			<a href="profile.php"><div class="regi_side">Basic Profile</div></a>
			<a href="registered-events.php"><div class="regi_side">Registered Events</div></a>
		</center>
    <div class="about_box_mainwrp" style="width:100%;">
        <div class="about_text_wrp" style="width:100%;">
			<?php
				$email=$_SESSION["user_sphinx_sp"];
				$query=$db->SinglerunQuery("select * from users where email='$email'");
			?>



			<table class="data_table">






				<tr>
					<td class="lefty">Registration ID</td>
					<td><?=$query['register_id'];?></td>
				</tr>
				<tr>
					<td class="lefty">Full Name</td>
					<td><?=$query['name'];?></td>
				</tr>
				<tr>
					<td class="lefty">Email</td>
					<td><?=$query['email'];?></td>
				</tr>
				<tr>
					<td class="lefty">Contact No.</td>
					<td><?=$query['phone'];?></td>
				</tr>
				<tr>
					<td class="lefty">Course</td>
					<td><?=$query['course'];?></td>
				</tr>
				<tr>
					<td class="lefty">Year</td>
					<td><?=$query['year'];?></td>
				</tr>
				<tr>
					<td class="lefty">Branch</td>
					<td><?=$query['branch'];?></td>
				</tr>
				<tr>
					<td class="lefty">College</td>
					<td><?=$query['collegename'];?></td>
				</tr>
				<tr>
					<td class="lefty">College ID</td>
					<td><?=$query['college_id'];?></td>
				</tr>
				<tr>
					<td class="lefty">City</td>
					<td><?=$query['city'];?></td>
				</tr>
				<?php
					if($query['mnit']=='No'){ ?>
						<td class="lefty">Entry Fee</td>
						<?php if($query['entry_fee_trid']==NULL){ ?>
						<td><a href="profile.php?rid=entryfee"  class="btn btn-input regist-popshow">Enter Transaction ID</a></td>
						<?php }
					 else if($query['entry_fee_trid']!='SUCCESS'){ ?>
						<td>UNDER VERIFICATION</td>
						<?php }
					 else{ ?>
						<td>SUCCESS</td>
						<?php } ?>
					<?php } ?>
				<tr>
					<td class="lefty">Accomodation</td>
					<td><?=$query['accommodation'];?></td>
				</tr>
				<?php
					if($query['accommodation']=='Yes'){ ?>
						<td class="lefty">Accomodation Fee</td>
						<?php if($query['accomodation_fee_trid']==NULL){ ?>
						<td><a href="profile.php?rid=accomodationfee"  class="btn btn-input regist-popshow">Enter Transaction ID</a></td>
						<?php }
					 else if($query['accomodation_fee_trid']!='SUCCESS'){ ?>
						<td>UNDER VERIFICATION</td>
						<?php }
					 else{ ?>
						<td>SUCCESS</td>
						<?php } ?>
					<?php } ?>
				<tr>
					<td class="lefty">Registered on</td>
					<td><?=$query['date_tym'];?></td>
				</tr>
			 </table>




        </div>
        <div class="about_text_wrp">

        </div>

    </div>
  </section>
</div>


<?php
	include('footer.php');
?>


</body>
</html>
