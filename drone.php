<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Battlebots"){
		$min=1;
		$max=4;
	} else if($event=='DroneRush') {
		$min=1;
		$max=3;
	} else if($event=='Robotryst') {
		$min=1;
		$max=4;
	}
	else{
		header("Location:robotics.php");
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
        <input type="hidden" name="event_type" value="Robotics">
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

<div class="modal fade Battlebots  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BATTLEBOTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
						BATTLEBOTS, an excellent opportunity to witness the UFC of robot-to-robot combat, where
			mass destruction, carnage, and mayhem can happen in every match as participants battle it out
			for the ULTIMATE PRIZE. It is a battle of life and death. If you’re looking to see the best
			engineers facing off each other, Sphinx 3.0, Battlebots is the place to be. Expect intense
			competition as teams fight it out and unleash their fury. Intense matches, fierce competition,
			Destruction and Glory! So come and be part of one of the largest events of Sphinx 3.0 and be
			amazed.
</div>
          <div class="evencon_box">
            <h3>General Rules</h3>
			  <ul class="checboxlist">
         <li>The competition will be played on a knock-out basis.
		 <li>The bot will be inspected for safety before the event begins. If found to be unsafe for the participants/spectators, it will be discarded.</li>
<li>The organizers reserve the right to change any or all of the rules as they deem fit. Changes in rules, if any, will be highlighted on the website.</li>
<li>Violation of any of the rules will result in immediate disqualification.</li>
<li>The maximum time limit for the clash of combatants inside the arena is 6 minutes.</li>
<li>A bot will be declared immobile (out) if it cannot exhibit linear motion of at least one inch within
20 seconds. A bot with one side of its drive train disabled will not be counted out if it can
demonstrate some degree of controlled movement.</li>
<li>In case of Pin down condition the bots will be separated after 10 sec by a distance of a foot</li>
<li>Teams that are not ready when called for battle will be considered to have declared a walkover, and will receive no points.</li>
<li>The bot cannot be split into two sub-units. Two distinct parts connected by a flexible cable will be considered separate units.</li>
<li>Damaging the arena will lead to immediate disqualification.</li>
<li>Lego kits, readymade kits, car bases and development boards are not permitted. Readymade gear boxes are permitted.</li>
<li>In all cases, the judges' decision will be final and binding.</li>
<li>The team can comprise of a maximum of 4 students from the same institute or other institutes as well. </li>
<li>The teams are not allowed to tamper with the opponent’s robot or hinder at their time of the competition.</li>
</ul>
		  </div>

		   <div class="evencon_box">
            <h3>Bot Specifications :-</h3>
          </div>

<div class="evencon_box">

            <h3>Bot Dimensions</h3>
      <ul class="checboxlist">
				<li>The machine should fit in a box of dimension 350mm x 350mm x 500 mm
(l x b x h) at any given point during the match. The external device used to control the machine or any external tank is not included in the size constraint.
</li>
				<li>The machine should not exceed 45 kilograms of weight excluding the weight of pneumatic/hydraulic source/tank and batteries, if any. Weight of remote controller will not be counted.
</li>
				<li>Jumping and hopping is not allowed.</li>
				<li>Flying (using airfoil, helium balloons, ornithopters, etc.) is not allowed.</li>
				</ul>
	</div>

		<div class="evencon_box">
            <h3>Bot Control Specifications</h3>
			    <ul class="checboxlist">
				<li>The machine can be controlled through a wired/wireless remote. Power supply may or may not be on board. Refer below for further details on battery and power.</li>
<li>If using a wireless control, there should be binding capability between transmitters and receivers. The remotes with such facility will only be allowed. The team must have at least four frequency wireless remote control circuit or two dual control circuits which may be interchanged before the start of the race to avoid frequency interference with other teams.</li>
<li>The case of any interference in the wireless systems will not be considered for rematch or results.</li>
<li>Remote control systems from toys might be used. Remote control systems available in the market may also be used.</li>
<li>Team should pair up the wireless remote with the machine before putting it into the arena.</li>

				</ul>
		</div>

		<div class="evencon_box">
            <h3>Battery Specifications</h3>
		<ul class="checboxlist">
<li>The machine can be powered electrically only. Use of an IC engine in any form is not allowed. On board batteries must be sealed, immobilized-electrolyte types (such as gel cells, lithium, NiCad, NiMH, or dry cells).</li>
<li>AC power supply will also be provided if required by the team.</li>
<li>The electric voltage between 2 points anywhere in the machine should not be more than 36V DC at any point of time.</li>
<li>All efforts must be made to protect battery terminals from a direct short and causing a battery fire, failure to do so will cause direct disqualification.</li>
<li>Use of damaged, non-leak proof batteries may lead to disqualification.</li>
<li>Special care should be taken to protect the on-board batteries. If judges found that the battery is not properly protected, then team will be disqualified immediately.</li>
<li>Change of battery will not be allowed during the match.</li>

		</ul>
		</div>
<div class="evencon_box">
	  <h3>Weapons</h3>
	Robots can have any kind of magnetic weapons, cutters, flippers, saws, lifting devices, spinning hammers etc. as weapons with following exceptions and limitations:
	  <ul class="checboxlist">
	  <li>Liquid projectiles.</li>
<li>Any kind of inflammable liquid.</li>
<li>Flame-based weapons.</li>
<li>Pneumatic or hydraulic mechanism.</li>


	  </ul>
 </div>

		<div class="evencon_box">
            <h3>Arena Specifications</h3>
			  <ul class="checboxlist">
<li>Arena will be a rectangular area of dimension 2.8m X 2.8m.</li>
<li>A rectangular area of 60cm X 60cm at corner of the arena will be the starting zone for the bot.</li>
<li>The starting zones will be placed on the opposite corners of arena.</li>
<li>The arena will have square region of 80cm x 80cmon opposite corners. Pushing the opponent's bot into one of the regions will fetch points.</li>
<li>The arena will have pebbles. Pushing the opponent's bot on to the pebbles will fetch points.</li>
<li>The arena might be plane ground.</li>
</ul>
		</div>

		<div class="evencon_box">
            <h3>Scoring</h3>
			  <ul class="checboxlist">
<li>Pushing a bot into square region will fetch 100 points.</li>
<li>Pushing a bot into pebbles will fetch 50 points.</li>
<li>Score will be calculated as: (100 X No. of times the bot pushes opponent into square region) + (50 X No. of times the bot pushes opponent into pebbles).</li>
<li>Either the last bot standing or the bot with maximum scores will move to next round.</li>
<li>In case of tie extra time of 1 minute 30 seconds shall be provided.</li>

</ul>
		</div>

			<div class="evencon_box">
            <h3>Arena</h3>
			  <center>
			<img src="images/battlebots_arena.jpg" style="width:50%;">
			<br>
			<a href="images/battlebots_arena.jpg" target="_blank"><span style="color:#000;">Click here for full size image</span></a>
	  </center>
		</div>


		<div class="evencon_box">
            <h3>Certification</h3>
			<ul class="checboxlist">
<li>The top three teams would be awarded with certificates as per their wining position.</li>
<li>The participation certificate will be awarded to all the participants.</li>
</ul>
		</div>                            <div class="evencon_box">
            <h3>Prizes worth : TBA</h3>
        </div>



		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Tanishk dudi</td>
                  <td>8947892024</td>
				  <td>2017ume1366@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Vatsal Jain</td>
                  <td>8758190857</td>
				  <td>2017ume1030@mnit.ac.in</td>
                </tr>
								<tr>
                  <td>Dhruv Golani</td>
                  <td>9619730222</td>
				  <td>2017uec1056@mnit.ac.in</td>
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
            <a href="robotics.php?event=Battlebots"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
        </div></div>


		<div class="modal fade DroneRush  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DRONE-RUSH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
						Sphinx’19 is organizing ‘DroneRush’, one of the trickiest robotics competitions. Let’s design a wireless remote-controlled flying platform to complete an obstacle course in
			minimum time without crashing.</div>

	   <div class="evencon_box">
            <h3>Problem Statement</h3>
						Design a wireless remote-controlled flying platform to complete an obstacle course in
			minimum time without crashing.
		</div>

		<div class="evencon_box">
					 <h3>Path</h3>
					 The path will consist of pillars, loops, bends, underpass, turbines placed in
random sequence along an aerial track. It will end with drop zone and landing pad for testing
manoeuvrability skills.
	 </div>

	 <div class="evencon_box">
					<h3>General Instructions</h3>
					<ul class="checboxlist">
						<li>The participating teams will be given max time of 5 minutes to complete the track.</li>
						<li>Each team will be given two runs and best of two will be the final score.</li>
						<li>The timer will start from the moment the countdown finishes.</li>
						<li>The timer will stop only when the drone finally lands on the landing zone. </li>
						
						<li>The time measured by the organizers will be final and will be used for scoring the
						teams. </li>
						<li>Time measured by any contestant by any other means is not acceptable for scoring.</li>
						<li>In case of any disputes / discrepancies, the organizers’ decision will be final and
						binding.</li>
						<li>The organizers reserve the rights to change any or all of the above rules as they
						deem fit. ​ Changes in rules, if any will be highlighted on the website and notified to the
						registered teams.</li>
						<li>The participating teams will be allowed to take a timeout of 1 minute max. (The total
						time would exclude the time taken during the timeout.</li>
						<li>They must not land their drone anywhere (except for the timeout)</li>
						<li>Each team would be allowed to skip any one of the obstacles.</li>
						<li>Team gaining the maximum points will win.</li>
						<!--<li>In case of a tie the team taking the lesser time would be declared the winner.</li>-->
						<!--<li>Quadcopter must be built within the specified dimensions.</li>-->
						<!--<li>Each team will be given two runs and best of two will be the final time and score.</li>-->
					</ul>
	</div>


		  <div class="evencon_box">
            <h3>Field Arena</h3>
			  <ul class="checboxlist">
					<li>There are marked/specified regions/spots to take off and land the quadcopter.</li>
					<li>Hurdles will be placed at different location in the arena.</li>
					<li>Fields will have arrows marked to depict manoeuvring path</li>
					<li>The requirement of time of charging the batteries during the conduct of
competition will not be entertained.</li>
					<!--<li>Specific check points will be defined on the arena for changing the batteries,-->
					<!--adjusting gains, calibration of sensors, etc.</li>-->
					<!--<li>Time will be given to the teams for charging their batteries at the completion of every-->
					<!--stage. The requirement of time of charging the batteries during the conduct of-->
					<!--competition will not be entertained.</li>-->
					<li>If the Quad is found making damage to the arena, judges reserve the right
to eliminate a particular Obstacle/Complete Participation.</li>

</ul>
		  </div>

			<div class="evencon_box">
						 <h3>Eligibility</h3>
						 <ul class="checboxlist">
							 <li>Different Teams from the same school/college must use their own individual
   					 	multirotor for the competition.</li>
   					 	<li>Anyone with a valid student id is Eligible.</li>
   					 	<li>A team may consist of a maximum of 3 participants.</li>
  						 <!--<li>The Quadcopter should follow the Quadcopter specifications provided. Any-->
  						 <!--deviation from the mentioned specifications will lead to disqualification</li>-->
  						 <!--<li>If the Quad is found making damage to the arena, Judges reserve the right to-->
  						 <!--eliminate a particular Stage/Checkpoint/Complete Participation.</li>-->
  						 <!--<li>The requirement of time for charging the batteries during the conduct of-->
  						 <!--competition will not be entertained.</li>-->
  						 <!--<li>Replacement of the parts of Quad will be allowed in case only if an accident-->
  						 <!--occurs and the referee permits</li>-->
  						 <!--<li>Replacement and charging of battery are allowed only before the-->
  						 <!--commencement of round.</li>-->
						 </ul>
		 </div>

<!--		   <div class="evencon_box">-->
<!--            <h3>The Multirotor</h3>-->
<!--			<ul class="checboxlist">-->
<!--				<li>The Multirotor (including Battery and landing gear) should be of length-->
<!--	75cm*75cm*75cm (LxBxH) and must weigh less than 1Kg.</li>-->
<!--				<li>There is no restriction on the use of the any Quad frame material or specification of-->
<!--				the BLDC Motors, Electronic Speed Controllers, Propellers, Batteries and Weight of-->
<!--				the Quadcopter.</li>-->
<!--				<li>Ready-made toy quadcopter kits are strictly restricted.</li>-->
<!--				<li>Construction: Any building material may be used, if the Quad fits the above-->
<!--				specifications and as long as the design and construction are primarily the original-->
<!--				work of the team</li>-->
<!--</ul>-->
<!--          </div>-->

<div class="evencon_box">
	<h3>Sample Arena</h3>
	*Sample arena and scoring will be updated soon.
	<!--<center>-->
	<!-- <img src="images/dronerush.jpeg" style="width:50%;">-->
	<!-- <br>-->
	<!-- <a href="images/dronerush.jpeg" target="_blank"><span style="color:#000;">Click here for full size image</span></a>-->
 <!--</center>-->
</div>


<!--		<div class="evencon_box">-->
<!--            <h3>General Rules</h3>-->
<!--			    <ul class="checboxlist">-->
<!--<li>Only one member of the team is allowed to handle the bot.</li>-->
<!--<li>Participants are not allowed to keep anything inside the arena other than the bot.</li>-->
<!--<li>The time measured by the organizers will be final and will be used for scoring the teams.</li>-->
<!--<li>Time measured by any participant by any other means is not acceptable for scoring.</li>-->
<!--<li>In case of any discrepancies, the organizers decision will be final and binding.</li>-->
<!--<li>The organizers reserve the right to change any or all of the above rules as they deem fit. Change in rules, if any will be highlighted on the website and notified to the registered teams.</li>-->
<!--<li>Register your team at www.sphinxmnit.org</li>-->

<!--				</ul>-->
<!--		</div>-->

		<!-- <div class="evencon_box">
            <h3>Scoring</h3>
		<ul class="checboxlist">
<li>T= Total time (5 min).</li>
<li>Q=Time taken.</li>
<li>P=penalties (Touching each bomb will cause a 50 points penalty).</li>
<li>R=No of boxes taken out of circle (Each box is having 20 points).</li>
<li>Z=No of zones cleared (Each zone is having 100 points).</li>
<li>Marks = T-Q(Example: If q= 200 second then 100 marks will be given to team).</li>
<li>Total marks = Marks-P+R+Z.</li>

		</ul>
	</div> -->
<!--<div class="evencon_box">-->
<!--	  <h3>Team Specifications</h3>-->
<!--	A team may consist of a maximum of 4 participants. Students from different institutes can form a team.-->
<!-- </div>-->

 <!--<div class="evencon_box">-->
	<!--  <h3>Eligibility</h3>-->
	<!--All students with a valid identity card of their respective educational institutes are eligible to participate.-->
 <!--</div>-->

 <div class="evencon_box">
	  <h3>Certification</h3>
	  <ul class="checboxlist">
<li>The top three teams would be awarded with certificates as per their winning position.</li>
<li>The participation certificate will be awarded to all the participants.</li>
<!--<li>Participants should bring their AADHAR CARD photocopy along with original and college identity card to claim prizes and certificates and prizes.</li>-->
</ul>
 </div>

    <div class="evencon_box">
            <h3>Prizes worth : TBA</h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Vishal Kothari</td>
                  <td>990943279</td>
				  <td>2017uec1683@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Keshav Sarraf</td>
                  <td>8696784122</td>
				  <td>2017uec1341@mnit.ac.in</td>
                </tr>
								<tr>
                  <td>Dhruv Golani</td>
                  <td>9619730222</td>
				  <td>2017uec1056@mnit.ac.in</td>
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
            <a href="robotics.php?event=DroneRush"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Robotryst  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ROBOTRYST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
						Sphinx’19 is organizing ‘RoboTryst’, one of the trickiest robotics competitions. Let’s try to solve
				problem by building an autonomous robot which will crack the given arena in given constraints.
</div>

	   <div class="evencon_box">
            <h3>Problem Statement</h3>
						Teams have to build an autonomous robot which can follow black lines and aim to reach the end
			of arena. The bot will follow the path and at random checkpoints, detect a placed box’s colour. At
			the end of the arena, the bot will display the order of the colours encountered.
			</div>


		  <div class="evencon_box">
            <h3>Arena</h3>
						The game field consists of grid dimension as 200 cm x 180cm (lxb) and whole arena is 10 ft. x
			10ft (lxb). It consists of the following:
			  <ul class="checboxlist">
<li>The arena is composed of grids made by black strips and has a white background.</li>
<li>Angle between two adjacent black lines in the path is 90 degree. </li>
<li>The width of all black strips will be 2.5cm.</li>
<li>The maze will consist of 3 checkpoints with boxes of any of the three colours (Green, Red or
Yellow). The exact location of the checkpoint will be informed at the time of the event. The actual
maze would be different from the one shown in the illustration.</li>
<li>There would be a (25cmx 25cm) black square at the end of the grid which would signify the end
of the run.</li>


</ul>
		  </div>


		   <div class="evencon_box">
            <h3>Game Play</h3>
			The game play is as follows:
			<ul class="checboxlist">
<li>The bot will start at the START position as shown in the illustration. The bot will traverse
through the maze by following the black lines.</li>
<li>A path may lead to a dead end. At end of random such dead ends will be placed a box
which may be coloured either of red, yellow or green. (There will be only one box of each
colour).</li>
<li>A black square of dimension (25 cm x 25 cm) will signify end of arena. The bot must
display the order of the encountered boxes. This will be done by displaying LED of the
respective colour for 2 seconds each. Any other method will not be accepted.</li>
</ul>
          </div>

<div class="evencon_box">

            <h3>Boxes</h3>
      <ul class="checboxlist">
			<li>The boxes as shown in the figure are 3 dimension boxes of dimension (10cm x 10 cm x 10 cm).</li>
			<li>The colour of box may be Red, Yellow or Green.</li>
			<li>The number of boxes present in the arena will be three.</li>
			<li>The boxes may have some changes in respect of their position.</li>
			<li>There would be a penalty if the bot touches the boxes however the bot would not be stopped if it
touches the box.</li>

</ul>
	</div>



		<div class="evencon_box">
            <h3>Bot Specifications</h3>
			    <ul class="checboxlist">
<li>The autonomous bot must fit into the box of dimension of 22cm x22cm x 22cm (l x b x h). </li>
<li>When using the electric power supply, the potential difference between any 2 points must not exceed 24 V at any point of time during the game.</li>
<li>Bot must be started individually by only one switch. However, a team may have an onboard switch for restart. This switch has to be shown to the organizer before the run.</li>
<li> During the run, the autonomous bot must not damage the arena in any way. It is not allowed to leave anything behind or make any marks while traversing the arena. Any bot found damaging the arena will be immediately disqualified. The final decision is at the discretion of the organizers.</li>
<li>The autonomous bot should not separate or split into two or more units. All bots/units which are touching each other or are in the starting point will be considered as one bot.</li>
<li>Bot cannot be constructed using readymade ‘Lego kits’ or any readymade mechanism. But they can make use of readymade gear assemblies. Violating this clause will lead to disqualification of the team.</li>


				</ul>
		</div>

		<div class="evencon_box">
            <h3>Game Rules</h3>
		<ul class="checboxlist">
<li>The teams will have to submit their bot before the start of the competition. Only those teams which submit their bots will be allowed to participate. The bot will be handed back to the team during the time of their run.</li>
<li>Teams will be given 1 minute for calibration. If any team is found to alter its code after depositing its bots, then it will be immediately disqualified from the competition. They are however allowed to make any other hardware changes.</li>
<li>Only one autonomous bot per team is allowed.</li>
<li>When the autonomous bot starts, no team member is allowed to touch the bot or enter the arena.</li>
<li>There will be one trial available for the calibration of sensor and for checking the proper working of bot.</li>
<li>Only one team member is allowed to be near the game field while starting the bot.</li>
<li>When the bot start, no team member is allowed to touch the bot or enter the arena.</li>
<li>Run will start only when organizers give the signal.</li>
<li>A total of 5 minutes will be given. The bot have to finish the run in that period only.</li>
		</ul>
		</div>

		<div class="evencon_box">
            <h3>General Rules</h3>
		<ul class="checboxlist">
<li>Only one member of the team is allowed to handle the bot.</li>
<li>Participants are not allowed to keep anything inside the arena other than the bot.</li>
<li>The time measured by the organizers will be final and will be used for scoring the teams.</li>
<li>Time measured by any participant by any other means is not acceptable for scoring.</li>
<li>In case of any discrepancies, the organizers decision will be final and binding.</li>
<li>The organizers reserve the right to change any or all of the above rules as they deem fit. Change in rules, if any will be highlighted on the website and notified to the registered teams.</li>
<li>Register your team at www.sphinxmnit.org</li>

		</ul>
		</div>

		<div class="evencon_box">
            <h3>Judging</h3>
		<ul class="checboxlist">
		<li>10 points will be awarded as it crosses any of the checkpoints but it will be counted only once for
each checkpoint.</li>
		<li>50 points will be provided if the bot successfully reaches end of the arena.</li>
		<li>25 points will be provided for each correct display of colour at end of arena.</li>
		<li>Time Bonus: 300 - T where T is the time taken by the team in seconds. Time Bonus will only be
provided if team has successfully solved the entire problem statement.</li>


		</ul>
		</div>

		<div class="evencon_box">
            <h3>Penalties</h3>
		<ul class="checboxlist">
<li>10 marks will be deducted if the bot goes out of the arena or any it’s any part is not on the black line.</li>
<li>15 marks will be deducted if the bot touches the boxes.</li>
<li>10 marks will be deducted for every restart in a run and a maximum of two restarts are allowed.One restart will be provided without any deduction. Thus, total of three restarts may be taken.</li>



		</ul>
		</div>


		<div class="evencon_box">
            <h3>Scoring</h3>
		<ul class="checboxlist">
<li>A = 10 points * (Number of checkpoints covered).</li>
<li>B = 50 points if the bot successfully reaches end of arena.</li>
<li>T = 300 - Total time taken in seconds in completing the Dry Run.</li>
<li>L = 25 points for each LED correctly displayed.</li>
<li>P= penalties</li>
<li>Total = (A + B + L + T)-P</li>




		</ul>
		</div>


<div class="evencon_box">
	  <h3>Team Specifications</h3>
	A team may consist of a maximum of 4 participants. Students from different institutes can form a team.
 </div>

 <div class="evencon_box">
	  <h3>Eligibility</h3>
	All students with a valid identity card of their respective educational institutes are eligible to participate.
 </div>

 <div class="evencon_box">
	  <h3>Certification</h3>
	  <ul class="checboxlist">
<li>The top three teams would be awarded with certificates as per their wining position.</li>
<li>The participation certificate will be awarded to all the participants.</li>
<li>Participants should bring their AADHAR CARD photocopy along with original and college identity card to claim prizes and certificates and prizes.</li>

</ul>
 </div>

  <div class="evencon_box">
	  <h3>Arena</h3>
	   <center>
			<img src="images/robotryst.png" style="width:50%;">
			<br>
			<a href="images/robotryst.png" target="_blank"><span style="color:#000;">Click here for full size image</span></a>
	  </center>

 </div>

    <div class="evencon_box">
            <h3>Prizes worth : TBA</h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Tanmay Agarwal</td>
                  <td>9680389686</td>
				  <td>2017uec1547@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Dhruv Golani</td>
                  <td>9619730222</td>
				  <td>2017uec1056@mnit.ac.in</td>
                </tr>
								<tr>
									<td>Paarth Bir</td>
									<td>9871856190</td>
					<td>2017uec1096@mnit.ac.in</td>
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
            <a href="robotics.php?event=Robotryst"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>





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


.contentbox_pwr {
 overflow-x: hidden; height: 40%;  padding-left: 210px; width:70%;border-radius: 40px 0px 0px 40px; position:absolute; margin:0 auto;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
position:absolute; width:17%; top:150px; left:42%;
}
</style>

<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/robotics.png" class="title_img">
  <section class="contentbox_pwr" style="">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">




			   <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">DRONE RUSH</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;">Zed is done accepting challenges at ground level. It's time for him to conquer the air, too. He would like to have a flying experience this time .He wants to compete in an obstacle course and have a race on air. "Drone Rush" is all set to grant him a chance to soar high into the skies and be victorious as always.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".DroneRush"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="robotics.php?event=DroneRush" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;"> Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
