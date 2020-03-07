<?php
include("config.php");
include("check_user.php");
$db= new Database();
$conn=$db->db_connect();
// if(isset($_REQUEST['event']))
// {
// 	$min="";
// 	$max="";
// 	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
// 	if($event=="Battlebots"){
// 		$min=1;
// 		$max=4;
// 	} else if($event=='DroneRush') {
// 		$min=1;
// 		$max=4;
// 	} else if($event=='Binary-battle') {
// 		$min=1;
// 		$max=4;
// 	}
// 	else{
// 		header("Location:registered-events.php");
// 	}
//
// }
if(isset($_REQUEST['rid'])){
	$rid=mysqli_real_escape_string($conn,$_REQUEST['rid']);
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
			$('.P-registrevnt').addClass('active');
	});
	P-profile

</script>



<!-- END WAYBACK TOOLBAR INSERT -->
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
          <button type="submit" name="submitreg" class="btn btn-input">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
.reg_side{
	display:inline-block;
	width:200px;
	background-color:#fff;
	color:#2A5D88;
	height:40px;
	font-weight:bold;
	padding:10px;
	font-size:15px;
}

.contentbox_pwr {
width:70%;     border-radius: 40px 40px 0px 0;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
	position:absolute; width:20%; top:150px; left:27%;
}


</style>

<?php
	include('header.php');
?>


<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/registeredevents.png" class="title_img">
<section class="contentbox_pwr" style="">
    <div class="ourtemamanin_wrp">
    <div class="eventmain_wrp">





							<table class="table">
								<thead>
									<br>
									<tr>
									<center><a href="profile.php"><div class="reg_side">Basic Profile</div></a>
									<a href="registered-events.php"><div class="reg_side">Registered Events</div></a>
									</center>
									</tr>
									<br>
									<tr>
										<th></th>
										<th>Events Name</th>
										<th>No. of Team Members</th>
										<th>Registraion Id</th>
										<th>Name</th>
										<th>Payment Status</th>
									</tr>
								</thead>
								<tbody>
                                <?php
								$user_login=$_SESSION["user_sphinx_sp"];
								$query_user=$db->SinglerunQuery("SELECT * FROM `users` where email='$user_login'");
								$get_reg_id=$query_user['register_id'];

								$query_reg="select * from registration where find_in_set('$get_reg_id',team_reg_id)";
								$nums_reg=$db->db_num($query_reg);
								if($nums_reg>0)
								{
									$i=1;
									$j=0;
									$rows_res=$db->runQuery($query_reg);
									foreach($rows_res as $row_reg)
									{
										if ($j % 2 == 0) {
										 $var="even";
										}
										else
										{
											$var="odd";
										}
									$team=$row_reg['team_size'];
									
									$reg_ids=explode(",",$row_reg['team_reg_id']);
								 $no1=$reg_ids[0];
								 $uer=$db->SinglerunQuery("select * from users where register_id='$no1'");
								 
								?>
									<tr class="<?=$var;?>">
										<td><span class="tb-title">SR.</span><span class="tb-content"><?=$i?></span></td>
										<td><span class="tb-title">Events Name</span><span class="tb-content"><? echo ucfirst($row_reg['event_name']);?> (<?=ucfirst($row_reg['event_type']);?>)</span></td>
										<td><span class="tb-title">No. of Team Members</span><span class="tb-content"><?=($row_reg['team_size']);?></span></td>
										<td><span class="tb-title">Registraion Id</span><span class="tb-content"><?=$no1;?></span></td>
										<td><span class="tb-title">Name</span><span class="tb-content"><?=$uer['name']?></span></td>
										<?php
											if($row_reg['payment']==NULL){ ?>
												<td class="btn btn-input">NONE</td>
											<?php }
											else if($row_reg['transaction_id']==NULL){ ?>
												<!-- <td><a href="registered-events.php?event=<?=ucfirst($row_reg['event_name'])?>"  class="btn btn-input regist-popshow">Enter Transaction ID</a></td> -->
												<td><a href="registered-events.php?rid=<?=ucfirst($row_reg['rid'])?>"  class="btn btn-input regist-popshow">Enter Transaction ID</a></td>
											<?php }
											else if($row_reg['transaction_id']!='SUCCESS'){ ?>
												<td class="btn btn-input">UNDER VERIFICATION</td>
											<?php }
											else{ ?>
												<td class="btn btn-input">SUCCESS</td>
										<?php }
										?>
									</tr>
                                    <?php
									if($team>1)
									{
										$k="";
										for($k=2;$k<=$team;$k++)
										{
											$next=$reg_ids[$k-1];
											$uer=$db->SinglerunQuery("select * from users where register_id='$next'");
									?>
									<tr class="<?=$var;?>">
										<td></td>
										<td></td>
										<td></td>
										<td><?=$next;?></td>
										<td><?=$uer['name'];?></td>

									</tr>
									<?php
									 $j++;
										}
									}
									else
									{
										$j++;
									}
									?>
									<?php
									$i++;
									 }
								}?>
								</tbody>
							</table>
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
