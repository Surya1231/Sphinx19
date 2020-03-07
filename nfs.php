<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="nfs"){
		$min=1;
		$max=1;
	}
	else{
		header("Location:nfs.php");
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
        <input type="hidden" name="event_type" value="nfs">
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


<div class="modal fade nfs modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NFS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
            <div class="evencon_box">
            <h3>General Rules:</h3>
            <ul class="checboxlist">
                <li>1. Game Type: Circuit /Sprint.</li>
                <li>2. Host, client will be announced before the match or decided by coin toss. Players can bring their own controllers and keyboards.</li>
                <li>3. At the end of each match, players must maintain the final screens and receive confirmation from a referee.</li>
                <li>4. All the participants playing at a time will have to play with the same car.</li>
                <li>5. The car and the track will be decided by the chit system.</li>
            </ul>
            </div>


            <div class="evencon_box">
            <h3>Tournament Format</h3>
			  <ul class="checboxlist">
                <li>Basic Rounds:<br>
                        <p>In this round sprint & circuit races will be played. Four participants will be competing in this round at a time. The winner after the race will advance to the next round.</p>
                </li>
                <li>Advance Rounds:<br>
                        <p>In these rounds there will be 3 races between the participants. Four participants will be competing in this round at a time. First will be Sprint, second will be 2 lap circuit and the third will be Drag. The participant winning 2 of the 3 races will be in the semi -  final. If a participant wins 2 races continuously, then the third race will not be run. This process will be continued until we get top 9 participants.</p>
                </li>
                <li>Semi-Finals:<br>
                        <p>In semi-finals there will be 4 races between participants. Three participants  will be competing in this round at a time. First will be Sprint, second will be 2 lap circuit, third will be Sprint and fourth will be Drag. At the end of all races the participant who wins most races will be advanced to finals. In case of a tie an extra sprint round will be played.</p>
                </li>
                <li>Finals:<br>
                        <p>In finals there will be 5 races between participants. Three participants will be competing in this round at a time. First will be Sprint, second will be 2 lap circuit, third will be OUTRUN** (details of this race are mentioned at the end of this section), fourth will be Drag and fifth will be sprint. The participant winning 3 races first will win the tournament. In case of a tie an extra sprint round will be played.</p>
                </li>
                <li>OUTRUN**<br>
                        <p>The loop for this race will be NFS World Loop. Every participant will play individually and the best timer will be adjudged the winner of outrun.</p>
                </li>
                </ul>
		    </div>

		   <div class="evencon_box">
            <h3>Game Settings:</h3>
            <ul class="checboxlist">
                <li>1. The courses election may be changed prior to the tournament. Players will be informed of any such changes before the tournament.</li>
                <li>2. Race Mode Options: Circuit/Sprint</li>
                <li>3. Track Direction: Forward</li>
                <li>5. Number of laps will be decided by admin</li>
                <li>6. N2O: ON</li>
                <li>7. Collision Detection: OFF</li>
                <li>8. Performance Matching: OFF</li>
            </ul>
            </div>

		    <div class="evencon_box">
            <h3>Player Options:</h3>
            <ul class="checboxlist">
                <li>1. Game Moment Camera: OFF</li>
                <li>2. Car Damage: OFF</li>
                <li>3. Rear View Mirror: Player’s own discretion.</li>
                <li>4. Units: Player’s own discretion.</li>
                <li>5. Intentional Disconnection will be decided by the referee, any offending player will be charged with a loss by forfeit. If the disconnection is deemed to be unintentional by the referee, the match will be restarted. If any player does not agree to a match restart, that player will lose by default.</li>
            </ul>
            </div>

            <div class="evencon_box">
            <h3>Penalty For Unfair Play:</h3>
            <ul class="checboxlist">
                <li>1. Use of any cheat program.</li>
                <li>2. Intentional disconnection.</li>
                <li>3. Use of any settings exceeding standard and permitted settings.</li>
                <li>4. If the match is disrupted due to unnecessary chatting, the player may be given a warning or lose by default at the referee’s sole discretion.</li>
                <li>5. Upon discovery of any player committing any violations regarded as unfair play that player will be disqualified from the tournament.</li>
                <li>6. During the course of any match, the operations staff and/or referee may determine other actions to be unfair play at any time.</li>
                <li>7. Two warnings constitute being disqualified from the tournament.</li>
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
            <a href="nfs.php?event=nfs"  class="btn btn-input regist-popshow">Register Now</a>
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
<img src="images/nfs.png" style="position:absolute; width:17%; top:150px; left:42%;">
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
                   <center> <div class="card_box">NFS</div></center>
					<p class="content_p">Sputnik is always excited to see F1 racing cars on tracks. He has been playing racing games for last many years and his all time favourite is Need For Speed (NFS). As online gaming is becoming popular now Sputnik plans to play with best players online. For this he organises an event where he calls the best gamers to compete him. Do you think you can beat Sputnik? Then join and compete</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".nfs"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="nfs.php?event=nfs" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
