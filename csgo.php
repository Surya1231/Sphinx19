<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="csgo"){
		$min=1;
		$max=5;
	}
	else{
		header("Location:csgo.php");
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
<!--		 <div style="position:absolute; width:100%; height:100%; background:url('https://s3.gifyu.com/images/Rocket.gif') center 100% no-repeat; background-size:800px;"></div>-->
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
      <form class="form" method="post" action="workshop-payment.php">
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
        <input type="hidden" name="event_type" value="csgo">
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


<div class="modal fade csgo modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COUNTER STRIKE: GLOBAL OFFENSIVE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
            <div class="evencon_box">
            <h3>Tournament Structure:</h3>
            <ul class="checboxlist">
                <li>1. 5v5Team Play (Game Mode : Competitive_BombPlantScenario).</li>
                <li>2. All rules of Competitive game mode will apply.</li>
                <li>3. Practice Time of 5 minutes will be given to set the basic configuration.</li>
                <li>4. Group Stage: Preliminaries: 16 In-game rounds (Knock out Matches till 8 teams remain).</li>
                <li>5. Quarter-Finals & Semi-finals: 30 In-game rounds.</li>
                <li>6. Finals: Best Of 3Maps (30 In-game rounds).</li>
                <li>7. Teams will switch roles (Terrorists or Counter-Terrorists) after playing half of the number of In-game rounds.</li>
                <li>8. In case of tie, then six In-game rounds (OVERTIME) with 10,000 start-money will be played until a winner is decided.</li>
                <li>9. Following Maps will be played-
                    <ul class="checboxlist">
                    <li>Preliminaries - de_dust2(new), de_inferno (new)</li>
                    <li>Quarter Finals &Semi-Finals - de_dust2 (new), de_inferno (new), de_mirage.</li>
                    <li>Finals - de_dust2 (new), de_inferno (new),  de_cache, de_cbble, de_mirage.</li>
                    </ul>
                </li>
                <li>10. Choosing of map will be as follows :
                    <ul class="checboxlist">
                    <li>For Preliminaries, knife round will decide the team role and map.</li>
                    <li>For Semi-finals, one map will be picked through the 3 maps through one-by-one elimination. Knife round will decide the team role.</li>
                    <li>For Finals, Best Of 3Maps will be picked through the entire map pool through one-by-one elimination. Knife round will decide the team role.</li>
                    </ul>
                </li>
            </ul>
            </div>


            <div class="evencon_box">
            <h3>Other Details:</h3>
			  <ul class="checboxlist">
                <li>1. Use of scripts is strictly PROHIBITED.</li>
                <li>2. Players can bring their config.cfg file with changes only in crosshair.</li>
                <li>3. Other changes can be made under the supervision of organizers.</li>
                <li>4. Use of console commands is strictly PROHIBITED.</li>
                <li>5. Team messages and chat are allowed.</li>
                <li>6. If disconnection occurs during a match then scores till the last round will continue and starting money will be decided by the organizers.</li>
                <li>7. Players have to bring their headphones (at least). They may bring other equipment (mouse, keyboard, mouse pad). Personal laptops WILL NOT be used.</li>
                <li>8. Systems will be provided.</li>
            </ul>
		    </div>

		   <div class="evencon_box">
            <h3>Match Forfeiture:</h3>
            <ul class="checboxlist">
                <li>1. If any of the team members cannot be located after his/her name has been called then he/she will automatically forfeit the match.</li>
                <li>2. Any participant deliberately attempting to sabotage or damage Labyrinth Gaming equipment to restart matches will be immediately disqualified from the tournament.</li>
                <li>3. Any person who attempts to disrupt matches with verbal or physical abuse of gaming staff or tournament competitors will be disqualified from the tournament and may be removed from the venue.</li>
                <li>4. Refusal to play a fight or committing any disruptive behavior that can delay the tournament will result in forfeiture of the match regardless of contestant tournament standings.</li>
            </ul>
            </div>


            <div class="evencon_box">
            <h3>Further Terms and Conditions:</h3>
            <ul class="checboxlist">
				<li>1. The machine should fit in a box of dimension 350mm x 350mm x 500 mm (l x b x h) at any given point during the match. The external device used to control the machine or any external tank is not included in the size constraint.</li>
				<li>2. The machine should not exceed 45 kilograms of weight excluding the weight of pneumatic/hydraulic source/tank and batteries, if any. Weight of remote controller will not be counted.</li>
				<li>3. Jumping and hopping is not allowed.</li>
				<li>4. Flying (using airfoil, helium balloons, ornithopters, etc.) is not allowed.</li>
				</ul>
	        </div>

            <div class="evencon_box">
                <h3>Registration Fee:</h3>
                 <ul class="checboxlist">
                    <li>Rs 100 per team (Registration fee will be collected on the spot).</li>
            </div>
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Sumeet Nandi</td>
                  <td>8208669864</td>
				  <td>2016umt1095@mnit.ac.in</td>
                </tr>
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
            <a href="csgo.php?event=csgo"  class="btn btn-input regist-popshow">Register Now</a>
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
<img src="images/csgo.png" style="position:absolute; width:17%; top:150px; left:42%;">
  <section class="contentbox_pwr" style=" overflow-x: hidden; height: 40%;  padding-left: 210px; width:70%;border-radius: 40px 0px 0px 40px; position:absolute; margin:0 auto;">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">


<!--				<div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp" >
                   <div class="evnt_cont_box" style="height:100px;">
                   <center> <h1>Coming Soon</h1></center>


                  </div>
                </div>
              </div>        -->


			  <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box">CS-GO</div></center>
					<p class="content_p">Sputnik loves the counter strike series and the army-terrorists clash it offers. After beating his friends in many games, Sputnik decides to plan a larger event  for mass participation. Can you beat Sputnik in this exciting event to become champion of CS-GO.
</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".csgo"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="csgo.php?event=csgo" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
