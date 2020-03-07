<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="fifa"){
		$min=1;
		$max=1;
	}
	else{
		header("Location:fifa.php");
	}

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
<!--<script>

	$(function(){
		$('.regist-popshow').click(function(){
			$('.modalevent').modal('hide');

			$('#eventregister2').modal('show');

			$('#loginbox').modal('show');

		});
	});
</script> -->
<?php
if(isset($_REQUEST['event']))
{ ?>
	<script type="text/javascript">  $(window).load(function () {  $('#eventregister2').modal('show'); });</script>
<?php }
?>
<script>
$(function(){
	$('.teamC').change(function(){
		$('.teamember_detial').empty();
		var selVal = $(this).val();
		for (i = 0; i < selVal; i++) {
			$('.teamember_detial').append('<div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="recipient-name" class="form-control-label">Registration Id</label> </div> </div> <div class="col-sm-8"> <div class="form-group"> <input type="text" class="form-control" id="recipient-name" placeholder="Enter registration id" required name="regid[]"> </div> </div> </div> <div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="recipient-name" class="form-control-label">Email Id</label> </div> </div> <div class="col-sm-8"> <div class="form-group"> <input type="email" class="form-control" id="recipient-name" placeholder="Enter email address" required name="emailid[]"> </div> </div> </div> <div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="recipient-name" class="form-control-label">Password</label> </div> </div> <div class="col-sm-8"> <div class="form-group"> <input type="Password" name="password[]" class="form-control" id="recipient-name" placeholder="Enter your password"  required> </div> </div> </div><div class="breaklinke"></div>')
		}
	})
})
</script>

<!-- END WAYBACK TOOLBAR INSERT -->

<script>
$(window).bind("load", function() {
	//alert('hello');
  	$('#overlay').css({'left':'110%', 'transition':'all 1s ease-in-out'}, 2000);

});
</script>
<!--<div id="overlay" style="width:100%;">-->

<!--	<div style="position:absolute; top:0; left:0; background:rgba(21,24,33,1.0); width:100%; height:100%; text-align:center;" >-->
<!--		 <div style="position:absolute; width:100%; height:100%; background:url('images/loader6.gif') center 100% no-repeat; background-size:800px;"></div>-->
<!--		 <div style="position:absolute; width:100%; height:100%; background:url('images/title.png') center 40% no-repeat; background-size:500px;"></div>-->
<!--	</div>-->
<!--</div>-->

<div class="modal fade" id="eventregister2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Now!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <form class="form" method="post" action="core-love-reg.php">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-7">
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Number of Team Members</label>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <select class="form-control teamC"  required name="teamsize">
                <option value="">Select</option>
                  <?php
				  for($i=$min;$i<=$max;$i++)
				  {
				  ?>
                  <option value="<?=$i;?>"><?=$i;?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="teamember_detial">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Registration Id</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="recipient-name" placeholder="Enter registration id" name="regid[]" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Email Id</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="recipient-name" placeholder="Enter email address" name="emailid[]" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Password</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="Password" class="form-control" id="recipient-name" placeholder="Enter your password" name="password[]" required>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <input type="hidden" name="event_type" value="fifa">
        <input type="hidden" name="event_name" value="<?=$event;?>">
        <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
        <p style="color:#CF5759"><?=@$_SESSION['Error']; @$_SESSION['Error']=null;?></p>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submitreg" class="btn btn-input">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade fifa modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FIFA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>General Rules:</h3>
			<ul class="checboxlist">
			    <li> Competition method: 1 vs 1</li>
                <li> Game mode: KickOff</li>
                <li> Teams: All international teams and clubs (except FC Barcelona, Real Madrid FC, FC Bayern Munich, Classic XI, World XI and Adidas All-Star).</li>
                <li> Players can bring their own controllers and keyboards.</li>
                <li> Players can only pause the game when the ball is out of play during his own possession.</li>
                <li> Consoles are not allowed.</li>
                <li> The team and players' abilities cannot be modified arbitrarily.</li>
                <li> Players on both sides must select the options before they begin the game. The match result will be accepted even if the players, during or after the match, find out each others settings were different from the official settings.</li>
                <li> Player changes and strategy changes are limited to 3 times during the game. (The changes before the start of first and second half are not included in this count.)</li>
                <li> Players must pause the final screen till the official records the result of the match.</li>
			</ul>
        </div>


          <div class="evencon_box">
            <h3>Game Rules:</h3>
			    <ul class="checboxlist">
                <li>Preliminary Round:
                <ul class="checboxlist">
                    <li> In case of a draw after 90 min, Golden Goal rule will be followed in extra time.</li>
                    <li> If a winner is not decided after extra time, a new match would be started and the first player to score a goal wins.</li>
                    <li> Neutral stadium and knockout matches.</li>
                    <li> If an odd number of players result after knockouts, the final decision would be in the hands of the admin.</li>
                </ul>
                </li>
                <li>Semi-final and final round:
                <ul class="checboxlist">
                    <li> Two legs (away goals rule will be followed).</li>
                    <li> In case of a draw after both fixtures, Classic rule will be followed in extra time.</li>
                    <li> If a winner is not decided after extra time, the winner would be decided on penalties.</li>
                </ul>
                </li>
                </ul>
		  </div>


            <div class="evencon_box">
                <h3>Game Settings:</h3>
                <ul class="checboxlist">
				    <li> Custom Formations: NOT allowed.</li>
                    <li>Custom Tactics: Allowed.</li>
                    <li> Half Length: 5 minutes.</li>
                    <li> Difficulty level: World Class</li>
                    <li> Game Speed: Normal.</li>
                    <li>Camera: Any. If the players cannot agree on which camera angle to use, admin shall decide it for them.</li>
                    <li> Injuries: ON.</li>
                    <li> Offside: ON</li>
                    <li> Bookings: ON.</li>
                    <li> Handball: OFF.</li>
                    <li> Subs: On Bench-7.</li>
                    <li> Radar: 2D.</li>
                    <li> Time/Score Display: ON.</li>
                    <li> Weather: Clear.</li>
                    <li> Time of day: Night.</li>
                    <li> Controller Settings: Players are allowed to choose any controller settings they prefer.</li>
				</ul>
            </div>

	<div class="evencon_box">
                <h3>Registration Fee:</h3>
                 <ul class="checboxlist">
                    <li>Rs 50 per participant (Registration fee will be collected on the spot).</li>
            </div>




		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>

                <tr>
                  <td>Parag Pise</td>
                  <td>7387672310</td>
				  <td>2016umt1464@mnit.ac.in</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
		<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="fifa.php?event=fifa"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
        </div></div>





<!--top nav-->
<?php
	include('header.php');
?>

<!--top nav end-->
<style>
.content_p{
	margin-top:10px;

}
.card_box{

	border:2px solid #fff; padding:10px; color:#2A5D88; border-radius :22px; background-color:#fff; width:200px;  margin-top:-25px; font-size:20px; font-weight:bold;
}
.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
    margin: 0 auto;
	font-size:32px;
	font-family:text;
}
.btn-secondary {
    color: #fff;
    background-color: #2A5D88;
    border-color: #868e96;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/fifa.png" style="position:absolute; width:17%; top:150px; left:42%;">
  <section class="contentbox_pwr" style=" overflow-x: hidden; height: 40%;  padding-left: 210px; width:70%;border-radius: 40px 0px 0px 40px; position:absolute; margin:0 auto;">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">




              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box">FIFA</div></center>
					<p class="content_p">Sputnik believes that Fifa 18 is the best football game in the series to date with gorgeous graphics and amazing lighting detail. Watching the players in FIFA curve their shots into the top corner of the net blew his mind, and he was certain there was no way they could do that in real life.His assumptions about the sport were blown apart, along with his eardrums due to technology found in this amazing and tantalizing soccer game.So Sputnik organized FIFA 18 competition to experience the ultimate pleasure of a real soccer game and prove to the world that your techniques and skills are  next to none.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".fifa"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="fifa.php?event=fifa" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>




            </div>
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
