<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="pubg"){
		$min=4;
		$max=4;
	} else if($event=='') {
		$min=1;
		$max=2;
	} else if($event=='') {
		$min=1;
		$max=2;
	}
	else{
		header("Location:pubg.php");
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
        <input type="hidden" name="event_type" value="Core Love Event">
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


<div class="modal fade pubg modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PUBG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
            <div class="evencon_box">
            <h3>General Rules:</h3>
            <ul class="checboxlist">
                <li> All the matches will be Classic TPP and will be played on ERANGEL Map.</li>
                <li>Only squad matches will be organised.</li>
                <li>Matches will be conducted online and the teams can play the matches from their
locations i.e. you do not need to visit our campus to participate in this event.</li>
                <li> You will be provided with your team number. Enter in your respective team slots only.</li>
                <li> Phone chargers, power banks, headphones and internet data is player’s responsibility.</li>
                <li> You have to take Screenshots as soon as your team is eliminated, no matter whether
your team rank is first or last. This is mandatory in order to confirm your position. Send
the screenshot to the admin of the Whatsapp group of the teams playing in that
slot.(Whatsapp group will be made by us prior to match).</li>
                <li> Don’t use PC emulator, it will show an icon on your profile and you will be removed from match.</li>
                <li>Tournament bracket size are subject to change based on the total number of eligible
teams at the end of registration.</li>
                <li>Some professional players would be spectating the match, Hacking or cheating are not allowed.</li>
                <li> Players can again join in the game if they are disconnected using the “Enter Match
Again” option until they are alive (Standard PUBG Mobile rules).</li>
                <li> Any kind of abusing, misbehavior with tournament officials or other players is strictly
prohibited and is subject to disqualification.</li>
                <li>You would be responsible for any network or your phone battery problems.</li>
                <li>The In-Game name that you mention in the Google Form must be the same with which
you play the game or else it would result in disqualification. Please take care of the
spelling and the character sensitivity while filling the form. You yourself will be
responsible for any mismatch.</li>
            </ul>
            </div>


                        <div class="evencon_box">
            <h3>Registration Process:</h3>
            <ul class="checboxlist">
                <li> Registrations can be done by first registering on the official sphinx website to generate
unique sphinx id for each team member and then registering your team for the PUBG
game in the Labyrinth section on the website. Each team will be given a unique SPHINX
Team ID (on the registered email ID of the team members).</li>
                <li>4 Players must register together as a squad, as only squad matches will be organized.
You will be provided with your team number.</li>
                <li>The next step is to pay the registration fee which is ₹100 per team. Fee has to be paid
via Paytm. <br>  Paytm Number -7387672310 (Parag Pise).</li>
<br>
<center><img src="/pubg-sample.jpg" style="width:34%;align:center;" ></center>
<br>
                <li> Team name and SPHINX Team ID must be written in the Paytm payment message in
the format shown in the above image where Shooting Stars is the Team Name and 1234
is SPHINX Team ID.</li>
                <li> After payment is completed, the captain of the team must fill the Google form available in
the Rulebook of PUBG on our website.</li>
                <li> We will cross verify all the payments. Confirmation mail would be sent if the payment is
received successfully. If your payment is not received by us then we will not be
responsible for it.</li>
                <li> Registration will be closed at 6:00 pm on 26th Sept 18.</li>
                <li>Whatsapp groups will be made for every match and all the match related info (Match
time, Room ID and pass) will be shared in the group.You will be added to the Whatsapp
group as soon as we receive and confirm your payment.</li>
                <li>It is the responsibility of every participant to remain active in the group.</li>
                <li>Room ID and password will be shared 15 minutes prior to the match.</li>
                <li> Timing will be strictly followed unless any technical issue arises in the host system..</li>
                <li>Once the match is started we will not be able to make you join in the match and no
refund will be provided.</li>
                <li>It is your responsibility to add your team name in the payment message.</li>
                <li>It is your responsibility to play your match in the provided time slot. No refund will be
initiated in case you are unable to play the match.</li>
<li><b>Your app must be updated with the latest version available on Google play store.</b></li>
<li><b>Note : </b> You will be responsible for the complete registration process. Verification process must be
completed in order to participate.</li>
            </ul>
            </div>


            <div class="evencon_box">
            <h3>Tournament Structure</h3>
			  <ul class="checboxlist">
                <li>Number of players in playoffs would depend on the Number of registrations.</li>
                <li>Maximum number of squads playing the final match will be 16.</li>
                <li>Top team will be declared as the winner of the tournament.</li>
                <li>Player with most kills in the final match will be given MVP prize money.</li>
              </ul>
		    </div>
                <div class="evencon_box">
            <h3> Fill your payment details :</h3>
		    <a href="https://goo.gl/forms/CoDT6XhCZWCdYEnn1" class="btn btn-primary" role="button">Click here</a>
		    </div>

            <div class="evencon_box">
            <h3>Note:</h3>
                <p> Any change in Tournament Structure or rules of the tournament is at the
discretion of tournament officials and are subject to change without any further notice. </p>
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
            <a href="pubg.php?event=pubg"  class="btn btn-input regist-popshow">Register Now</a>
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
<img src="images/pubg.png" style="position:absolute; width:17%; top:150px; left:42%;">
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
                   <center> <div class="card_box">PUBG</div></center>
					<p class="content_p">Over the last few months, PUBG an online survival shooting game has taken the gaming world by storm
and it’s this game that’s pegging the needle of Sputnnik's interest.And  he firmly believes that if you win in PUBG, you feel like you have accomplished a hell  lot in your life because of the difficulty to win and all the adrenaline just keeps pilling up until you finally win or lose.So he decides to organize a PUBG competition, to battle against the best in  business and to experience the pleasure and enthrallment of winning one of the toughest competitions the gaming world has ever produced!</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".pubg"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="pubg.php?event=pubg" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
