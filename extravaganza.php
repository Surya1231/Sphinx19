<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Bomb-squad"){
		$min=2;
		$max=3;
	} else if($event=="Fourth-estate") {
		$min=1;
		$max=3;
	}
 else if($event=="Ultimate-crossover") {
		$min=2;
		$max=2;
	}
 else if($event=="Mission-impossible") {
		$min=2;
		$max=5;
	}
 else if($event=="Maze-o-mania") {
		$min=1;
		$max=2;
	}
 else if($event=="Spell-Bound") {
		$min=1;
		$max=3;
	}
 else if($event=="Scavenger-hunt") {
		$min=1;
		$max=5;
	}
//  else if($event=="Photoshop-workshop") {
// 		$min=1;
// 		$max=1;
// 	}
 else if($event=="Egg-Suicide") {
		$min=3;
		$max=5;
	}
 else{
		header("Location:extravaganza.php");
	}

}
?>

<!DOCTYPE html>
<script>
function reg_closed(){
    alert('Registrations has been closed for this event.');
}
</script>
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

			$('#loginbox').modal('show');

		});
	});
</script> 
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
        <input type="hidden" name="event_type" value="Extravaganza">
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


<div class="modal fade Egg-Suicide modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Egg Suicide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
Egg suicide challenge is an on the spot event in which participating teams have to design an appealing compact structure using different types of materials acquired by them through auctioning. Teams have to throw the structure horizontally from a height of 40ft (3rd floor VLTC). The aim is to prevent the egg from cracking and cover maximum horizontal distance. The egg may be considered to be an analogical representation of some precious cargo, such as a human being, that ideally would not be harmed upon landing on earth from space. Egg Suicide challenge helps in cases where you have to drop something safe from a certain height in an emergency.

		 </div>

		   <div class="evencon_box">
            <h3>Event Structure:</h3>

            <ol>

<li>Slot 1(1 hr):
<ol>
    <li><b>10 mins: </b> Basic instructions and materials available for making the structure will be disclosed. </li>
    <li><b>20 mins: </b>This time is given for teams to decide on their design and choice of materials keeping in mind the fixed amount of Egg-Coins (virtual money) provided to them. After 20 minutes teams will be required to submit their material requirements.</li>
    <li><b>10 mins: </b>Materials auctioning process will be carried on.</li>
    <li><b>20 mins: </b>Materials will be provided.</li>
</ol>
</li>
<li>Slot 2(1 hr):
<ol>
    <li>One-hour time for making the structure. Early finish higher points criteria will be adopted. After one hour all the raw materials will be taken back. </li>
</ol>
</li>
<li>Slot 3:
<ol>
    <li>Teams will be screened</li>
</ol>
</li>
            </ol>
          </div>


			 <div class="evencon_box">
            <h3>Rules: </h3>
            <ol>

<li>Maximum size of structure – 30*30*30(cms.)</li>
<li>Throwing Height – 40 feet </li>
<li>Maximum of 5 members per team is allowed. </li>
<li>Use of adhesives between Material and Egg is not permitted. </li>
<li>Maximum time will be 1 hour for designing the structure after getting material from auctioning</li>
<li>The structure should be thrown horizontally. </li>
<li>Two chances for drop shall be given to each team. However, the second chance will lead to a penalty of 10 points.</li>
<li>Teams are not allowed to take the structure with them</li>
<li>Teams can only use material provided at that time through auctioning. Using materials from outside will lead to disqualification.</li>
<li>Participating teams will be given an equal amount of Egg-Coins worth <b>EC 100</b> which they will use in buying the materials they are planning to use.</li>


            </ol>
          </div>


            <div class="evencon_box">
            <h3>Judging Criteria</h3>
            The model will be evaluated based on its effectiveness, simplicity, design, explanation, aesthetics and time to design the model. The model will be graded only if the egg remains intact or is just partially cracked (content of the egg doesn’t come out). There will be some penalty in case the model doesn’t work in the first attempt.  
        </div>
        
                                <div class="evencon_box">
            <h3>Grading Policy (out of 100 points):</h3>
          <ol>
              <li>Partially Cracked Egg = 10 points </li>
              <li>Intact Egg = 30 points</li>
          
          On Basis of... <br>
          <li>Horizontal Distance(d): <br>20 points if d >= 10meters <br>15 points if d >= 5meters <br> 10 points for rest</li>
          <li>Design effectiveness and explanation = (20 points || 10 points || 0 points)</li>
          <li>Time taken = (<30 min = 20 points) || (<45 min = 10 points)</li>
              <li>Aesthetics = 10 points</li>
              <li>Second Chance = -10 points</li>
          </ol>
          
          Weightage will be higher for structures with the lowest amount of virtual money used. <br> <br>
          
          Time taken to retrieve the egg from the structure (after it has landed on the ground) would be considered for grading.

        </div>
        
                <div class="evencon_box">
            <h3>Prizes worth : 7,000/-</h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Naman Agrawal</td>
                  <td>7425855258</td>
				  <td>2017ume1461@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Priya Kanodia</td>
                  <td>8875731825</td>
				   <td>2017uch1367@mnit.ac.in</td>
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
            <a href="extravaganza.php?event=Egg-Suicide"   class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="extravaganza.php?event=Egg-Suicide" class="btn btn-input regist-popshow">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Bomb-squad  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BOMB Squad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
A fast paced, nerve racking, enthralling real life experience is what you are looking for, then this is it.<b>Do you have it in you to diffuse the bomb in time?</b> <br>
All you need is to think and respond fast to the clues and puzzles we provide with a good general knowledge. So hurry up before the bomb explodes and form your squad and register.

		 </div>

		   <div class="evencon_box">
            <h3>GENERAL RULES:</h3>

            <ol>

<li>Maximum 3 members are allowed in each team.</li>
<li>Participant team will be provided with some clues which will help them to diffuse the bomb.</li>
<li>Maximum time limit to diffuse the bomb is 15 minutes.</li>
<li>Mobile phones are not allowed.</li>
<li>Any use of unfair means will lead to the disqualification of the team </li>
<li>Organizers are free to make any changes which will be informed prior to the event.</li>
            </ol>
          </div>


			 <div class="evencon_box">
            <h3>WINNERS:</h3>
            <ul class="checboxlist">

<li>The teams which are unable to diffuse the bomb will lose the event directly.</li>
<li>The winners will be decided on the basis of time taken by teams for completing the task.</li>


            </ul>
          </div>


                              <div class="evencon_box">
            <h3>Prizes worth : 6,000/-</h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Priya Kanodia</td>
                  <td>8875731825</td>
				   <td>2017uch1367@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Savita Bais</td>
                  <td>9460876795</td>
				   <td>2017uce1370@mnit.ac.in</td>
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
            <a href="extravaganza.php?event=Bomb-squad"   class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="extravaganza.php?event=Bomb-squad" class="btn btn-input regist-popshow">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Fourth-estate  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">The Fourth Estate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
    <p>
      Investigative journalism is a form of journalism in which reporters deeply investigate a single topic of interest. There will be some victims who may or may not have committed a crime but there is a controversy going on against him/her, so now the reporters get a chance to dig deep into the story and interview them.
    </p>

		 </div>


		   <div class="evencon_box">
            <h3>General Rules:</h3>
            
			<ol>
<li>A team shall consist of 1-3 members.</li>
<li> The decision of the judges or the organizing team will be final and will not be subjected to any changes.
</li>
<li>Participants shall not be allowed to use mobile or other electronic instruments.</li>
<li> Taking hints or collaboration with other team may lead to disqualification. </li>
<li> Audience shall not give any hints or clues to the competitors.</li>
<li> Reports must use appropriate language while asking the questions.</li>

</ol>

		 </div>




		   <div class="evencon_box">
    <h3><b>Elimination Round:</b></h3>
    
    <ol>
        <li>This round will be a group round-so all the teams with the victim will be in a room.</li>
        <li>Each team will get 2:30 mins to ask the questions from the victim in front of everyone.</li>
        <li>After listening to the answers from the victim the team needs to form a report. </li>
        <li>The reporter should try to reach close to the real story whether the victim is found guilty or not.</li>
        <li> The selected 16 teams shall have to appear for the next rounds.</li>
        <li>Teams will be judged based on how close they get to the actual storyline and on the report as well as the reporting skills.</li>
    </ol>
          </div>


		   <div class="evencon_box">
    <h3><b>Knock out Rounds:</b></h3>
    
    From now there will be a series of knock out rounds (1 team will be eliminated after every match).

    
    <ol>
        <li>Each match will consist of two rounds.</li>
        <li>The setting will be of a radio show and the team that will be interviewing are the hosts of a radio show. </li>
        How it will happen: <br>
        
        <ol type="a">
            <li>In the first round one member of a team (selected by the team) would be a victim.</li>
            <li>Victim will get a storyline from the organizing team.</li>
            <li>Another team would try to reach as close as possible to the storyline by asking relevant questions to the victim.</li>
            <li>In the end, the team has to write a report telling what could have happened in reality and present it as a radio show. </li>
            <li>In the second round, the roles will be reversed and the team that was being interviewed before, will now be the hosts of the radio show. </li>
        </ol>
        
        <li>Each round will be of 10 minutes.</li>
        <li>Teams will be judged based on how close they get to the actual storyline and on how entertaining their radio show is.</li>
    </ol>
          </div>


		   <div class="evencon_box">
    <h3><b>Final Round:</b></h3>
    
    It all comes down to the Final Round where the remaining 8 teams will be given a chance to present their News Program, i.e Host their own News-Hour Show (eg. Arnab Goswami)
    
    <ol>
        <li>Each program will be 10 minutes long.</li>
        <li>Their news program should contain the following: 
        <ol type="a">
            <li>A reporter presenting the main story from the first round.</li>
            <li>A debate round where “famous” personalities are invited on the show to talk about that story.</li>
            <li>Individuals will stick to the agenda/stand of the personality assigned to them. One must not sway from the ideology of the said personality. Points will be given for the same.</li>
        </ol>
        </li>
        <li>The teams will be judged on their simulated News Program.</li>

    </ol>
          </div>

        <div class="evencon_box">
            <h3>Prizes worth : 5,000/-</h3>
        </div>



		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Rahul Tuteja</td>
                  <td>9416944577</td>
                  <td>2017ucp1479@mnit.ac.in</td>
				  
                </tr>

                <tr>
                  <td>Akash</td>
                  <td>8875047326</td>
                  <td>2017ucp1001@mnit.ac.in</td>
				  
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
            <a href="extravaganza.php?event=Fourth-estate"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Maze-o-mania  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MAZE-O-MANIA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
Maze is a fun challenging puzzle,a path from entrance to goal. Here  sphinx is giving you a chance to participate  in maze-o-mania where you have to create your own maze and you can win exciting pizes.

		 </div>


		   <div class="evencon_box">
            <h3>GENERAL RULES:</h3>
			<ol>
			<li>A team shall consists of maximum two participants</li>
			<li>Participants should not be allowed to use mobiles or electronic instruments.</li>
			<li>No extra time will be given to late comers.</li>
			<li>There will be three rounds.</li>
			<li>Prize for single participant or team will be same.</li>
			</ol>
          </div>





		   <div class="evencon_box">
            <h3>ROUNDS:</h3>
			<ul class="checboxlist">
			<li>ROUND 1: In this round paticipants will have to make a maze within a specific time(maximum 10 minutes), which will be solved by other team.</li>
			<li>ROUND 2: Participants will be given maze which is made by other team and they have to solve it in 10 minutes.</li>
			<li>**ROUND 1 and ROUND 2 will be conducted at the same time</li>
			<li>ROUND 3: Shortlisted Participants will be given two mazes and they have to solve it in given time </li>
			<li>**there are extra points for time also</li>
			</ul>
          </div>






		   <div class="evencon_box">
            <h3>Judging Criteria</h3>
            Teams who will complete the task in given time will be considered and top three with least amount of time will be the winners
          </div>


                  <div class="evencon_box">
            <h3>Prizes worth : 5,000/-</h3>
        </div>



		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>JYOTI KUMARI</td>
                  <td>8875458198</td>
				  <td>2017ucp1383@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>KUNAL SOLANKI</td>
                  <td>7615052059</td>
				   <td>2017uch1099@mnit.ac.in</td>
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
            <a href="extravaganza.php?event=Maze-o-mania"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Scavenger-hunt  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Treasure hunt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
Treasure Hunt is a fun team building activity where players try to find hidden mysteries and places of the college by using a series of clues. The game takes the participants to the historical streets and the most famous monuments in the campus while they search for the Secret Treasure. During the treasure hunt the teams are challenged to fulfill various tasks in the quickest time possible. Answering all the questions allows to puzzle out the secret. Get your jack sparrow out, start your journey and register to find your treasure.


		 </div>

		 <div class="evencon_box">
            <h3>Rules:</h3>
			<ol>
			    <li>Maximum 4 members in each team are allowed.</li>
			    <li>Each team has to announce a leader at the time of registration.</li>
			    <li>There is a time limit of 2 hrs for all the competing teams to find the treasure.</li>
			    <li>The clues are to be found in a particular order. A team cannot skip a clue. Skipping a clue leads to disqualification of the team.</li>
			    <li>Teams can have mobile phones and cycles with them.</li>
			    <li>All the means used by the teams should be fair, in case of any violation of the rules or any use of unfair means, teams will be disqualified from the contest.</li>
			    <li>The Treasure Hunt consists of clues, each one leading to the next clue. Each correctly solved clue carries 10 points. And final Treasure carries 50 points.</li>
			    <li>All the clues of the teams may or may not be different and may be located at different places but the final destination i.e. the treasure is same. The team which finds the treasure first wins.</li>
			    <li>The total number of clues kept at a place will decrease with the progress of event, so the teams which will get there first will get the clues and the rest will be eliminated.</li>
			    <li>Organizers are free to make any changes which will be informed prior to the competition.</li>
			</ol>
          </div>



        <div class="evencon_box">
            <h3>Prizes worth : 8,000/-</h3>
        </div>



		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Savita Bais</td>
                  <td>9460876795</td>
				   <td>2017uce1370@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Navneet Shah</td>
                  <td>8149409397</td>
				   <td>2017umt1747@mnit.ac.in</td>
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
            <a href="extravaganza.php?event=Scavenger-hunt"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Spell-Bound  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Spell Bound Rules
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>General rules</h3>
            
            <ol>
            <li> <b>Pronouncers</b> role: 
            <ol>
                <li>Homonyms: If a word has one or more homonyms, the pronouncer indicates which word is to be spelled by defining the word.</li>
                <li>Speller’s requests: The pronouncer must respond one to two times to a speller’s requests for pronunciation, definition, sentence, part of speech, language of origin, and alternate pronunciations.</li>
            </ol>
            </li>
            <li>Judges role: The judge(s) uphold the rules and determine whether or not words are spelled correctly. Their decision is final on all questions.
            <ol>
                <li>Spellers are encouraged to face judge(s) to reduce misunderstandings or misspellings.</li>
                <li> The judge(s) will disqualify a speller (1) who refuses a request to start spelling;(2) who engages in unsportsmanlike conduct; (3) who, in the process of retracing a spelling, alters the letters from those first uttered; or(4) who, in the process of spelling, utters unintelligible or nonsense sounds.</li>
            </ol>
            </li>
            <li>Spellers role: The speller makes an effort to face the judges and pronounce the word for the judge(s) before spelling it and after spelling it.
            <ol>
                <li>Misunderstandings: The speller is responsible for any misunderstanding of the word unless the pronouncer failed to provide a correct pronunciation,provided incorrect information in regards to definition, part of speech, or language of origin.</li>
            </ol>
            </li>
            <li>Correction of misspelling: The pronouncer will not ask the speller to correct another speller’s misspelling.</li>
            <li>Misspelling: Upon misspelling the speller immediately drops out of the competition.</li>
            <li>Participants shall not be allowed to use mobile or other electronic instruments.</li>
            <li>Audience shall not give any hints or clues to the competitors.
</li>
            </ol>
            
            
		 </div>

		 <div class="evencon_box">
            <h3>Round 1 Elimination round</h3>
            <ol>
                <li>All the participants will be given an objective quiz.
</li>
<li>The quiz will consist of interesting puzzles and word games and anagrams.
</li>
<li>According to the scores of the quiz teams will be made.</li>
<li>All the rounds ahead will be a team game.</li>
<li>10 teams of 2 people will be made.</li>
            </ol>
          </div>



		   <div class="evencon_box">
            <h3>Round 2 Buzzer Round</h3>
			Teams won't be asked to spell direct spellings they'll be asked questions. The questions can be like anything.
			
            <ol>
            <li>A question will be fired & the team who presses the buzzer first gets to spell first.</li>
            <li>10 marks for the correct spelling and negative 5 marks for the wrong or if a team doesn’t spell after pressing the buzzer.</li>
            <li>Unanswered questions will not be forwarded.</li>
            <li>Answering time is only 05 seconds.</li>
            <li>Top 5 teams will move on to the next round.</li>
            </ol>
			</div>


		  <div class="evencon_box">
            <h3>ROUND 1</h3>
			Round 1 is the elimination round. It will decide the finalist for the events.
			<ul class="checboxlist">
<li>This will be pen and paper based quiz round.</li>
<li>There will be 60 questions in the paper. Topics will range  from Marvel Realm to DC Realm.</li>
<li>The paper will be of 60 minutes.</li>
<li>Certain Sections of paper will carry more weightage. </li>
<li>Only teams clearing the set cut-off will qualify for next round. Cut-off will be decided after considering the performance of teams in this round</li>


</ul>

 </div>

   <div class="evencon_box">
            <h3>Round 3 Rapid Fire Round</h3>
            <ol>
                <li>All team will be asked as many questions as possible one after another in one minute of time.</li>
                <li>10 marks for the correct spelling and negative 5 marks for the wrong spelling.</li>
                <li>Team discussion is allowed.</li>
                <li>If a team cannot answer the question, they can say pass for the next question. The question will not be forwarded to the next team.</li>
            </ol>

 </div>

   <div class="evencon_box">
            <h3>
Miscellaneous/Back up Round</h3>
This round will  take place if there’s a tie between the teams after Round 3. <br> 

In this round teams will be given jumbled words and anagrams and will be shown pictures and accordingly they have to make out the words and spell them.

			<ol>
<li>10 marks for each correct answer.</li>
<li>Each Team would be asked 2 visual questions. ( 1 slide in each round )</li>
<li>Answering time is only 20 seconds.</li>
<li>No passing to the next  team. Audience can answer.</li>


</ol>

 </div>

        <div class="evencon_box">
            <h3>Prizes worth : 5,000/-</h3>
        </div>

  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Aakash Vachhani</td>
                  <td>8875047326</td>
				  <td>2017UCP1001@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Upasana Mishra</td>
                  <td>9101136127</td>
				   <td>2017UEC1016@mnit.ac.in</td>
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
            <a href="extravaganza.php?event=Spell-Bound" class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" class="btn btn-input regist-popshow">Register Now</a>
		<?php  }?>
        </div>
		</div>
    </div>
  </div>
</div>

<div class="modal fade Photoshop-workshop  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Photoshop Workshop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Photoshop introduction</h3>
            
            Theory on graphic designing, Toolbar, Menu Bar, Options Bar, Toolbox All New, Opening an Existing File, Screen Modes, Standard Screen Mode, Full Screen Mode with Menu Bar, Creating a New Document, Saving Files, Reverting Files, Closing Files and Quitting Photoshop.


		 </div>

		 <div class="evencon_box">
            <h3>Document Window</h3>
			Selecting Workspace, keyboard Shortcuts and Menu, File Handling Preferences and cursor Preferences, Differences between Bitmap and Vector Images, Understanding Image Resolution, Understanding Pixel Logic, Changing the Resolution of an Image, Changing the Size of a Document, Re-sampling an Image, Editing Images, Rotating an Image, Cropping an Image, Hiding an Image Instead of Cropping, Adjusting the Canvas Size, Duplicating an Image.
          </div>

		   <div class="evencon_box">
            <h3>Working with Selections</h3>
Working with Selection Tools, Marquee Tools, Lasso Tools, Magic Wand Tool, Making a Selection Based on Color Range, Modifying a Selection, Adding and Subtracting from a Selection, Refine Edges, Inverse Selection.
          </div>
          
          <div class="evencon_box">
              <h3>Transforming a Selection</h3>
              Scaling a Selection, Rotating a Selection, Distorting a Selection, Skewing a Selection, Warping a Selection, Saving and Loading Selection.
          </div>
          
          <div class="evencon_box">
              <h3>Setting the Current Foreground and Background Colors through Pen tool</h3>
              The Color Picker Dialog Box, Eyedropper Tool, the Color Palette, the Swathes Palette, the Drawing Tools Using Ellipse Tool, Custom Shape, Pen Tool, Painting Tools, And Gradient Tool.
          </div>
          
          <div class="evencon_box">
              <h3>Basic Tools</h3>
              Retouching Tools, Spot Healing Brush Tool, Healing Brush Tool, Patch Tool, Clone Stamp Tool, Pattern Stamp Tool, Eraser Tools, Background Eraser & Magic Eraser Tool, Blur Tool, Sharpen Tool, Smudge Tool, Dodge Tool, Burn and Sponge Tool.
          </div>
          
          <div class="evencon_box">
              <h3>Mastering Layers in Photoshop</h3>
              About the LAYERS Palette, Working with Layers, Creating a New Layer, Hiding and Showing Layers, Deleting Layers, Deleting a Layer using Layer Menu, Changing the Stacking Order of the Layer, Relocating Layers in the Image, Merging Layers, Flattening Images, Moving Layers between Images, Applying blend Modes, Masking Layers, Layer Masking.
          </div>
          
          <div class="evencon_box">
              <h3>Layer Style and Filter Effects</h3>
              Layer Style & Layer Style Dialog Box, Applying a Layer Style Copying Styles Clearing Styles, Creating Layers from Layer Styles, using filters, About Smart Objects and filters.
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="" onclick="alert('Registration Closed')" class="btn btn-input regist-popshow">Register Now</a>
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
position:absolute; width:22%; top:150px; left:39%;
}
.sharktank{
    height:300px;
}
.missionimpo{
    height:350px;
}
.contentbox_pwr{
    width: 50%;
    padding: 0 12%;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/extravaganza.png" class="title_img">
  <section class="contentbox_pwr" style=" ">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%; border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">
               
                           <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Egg-Suicide</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;">Eggy has arrived to accompany <b>ZED</b> at Sphinx'19. He is <b>ZED</b>'s closest friend and is extremely fond of adventure. <b>ZED</b> wants to surprise him by giving him a thrilling experience and charge him with ultimate excitement for the upcoming events. Hence he has plotted to organize an event named 'Egg-Suicide' where participating teams have to design an appealing compact structure using various objects acquired by them through auctioning. Challenge is to ensure safe landing of Eggy on that structure from a certain height. Hope you all give a safe and secure ride to Eggy. </p>
					
 <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Egg-Suicide"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="extravaganza.php?event=Egg-Suicide" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box"style="font-family: 'bahnschrift', sans-serif;">BOMB Squad</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> knows the importance of time. He wants people to know about how significant it is, like in diffusing a bomb. Thus, he is organising a nail biting contest for you. All you need for this event is to think and respond fast to the clues and puzzles, challenging your general knowledge and intellect. So get ready to be a part of this thrilling, fast paced and enthralling life experience. Get set to diffuse the bomb before the time’s up.
.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Bomb-squad"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                   		 <a href="extravaganza.php?event=Bomb-squad" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
		
		
                    </div>
                  </div>
                </div>
              </div>

			  <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">The Fourth Estate</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> is intrigued by crime enigmas. Deciphering them, makes him feel like Sherlock Holmes , using his exceptional investigative skills , deconstructing and reconstructing crime scenes, decoding concealed clues and finding the culprit. He has come across some new ones that have left him perplexed. Can you help him? 
Can you read between the lines, see more than meets the eye, and comprehend more than the cloaked reality?

    </p>
</p>
					<div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Fourth-estate"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="extravaganza.php?event=Fourth-estate" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

			   <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">MAZE-O-MANIA </div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;">Our friend <b>ZED</b> apparently thinks he is indomitable because he's got what it takes to decipher the most bewildering puzzles. So Sphinx'19 wants you to challenge <b>ZED</b> with the exciting Maze-o-Mania, a  challenging puzzle, potent enough to put <b>ZED</b>'s puzzling skills under fire. The slower <b>ZED</b> cracks the code, the faster you will be pacing towards the trophy. It's time to bring to life your inner maze-o-maniac and confront <b>ZED</b> with an unsolvable oblivion.
Go ahead and register now!

</p>
<div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Maze-o-mania" style="font-family: 'bahnschrift', sans-serif;"><span>More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    		 <a href="extravaganza.php?event=Maze-o-mania" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			<a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

			   <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp"  >
                   <div class="evnt_cont_box sharktank" style="">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Treasure Hunt</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;">Someone has stolen <b>ZED</b>'s most precious asset. He is too worried and depressed but he has one ray of hope left. The thief was a bit reckless and while conspiring against <b>ZED</b>, he has left behind some significant clues. <b>ZED</b> has thus organised 'Treasure Hunt’, where the participating teams will have to look for hidden mysteries, specific destinations of the institute and hunt for the secrets using the hints and puzzles to reach the treasure.  The thief has designed certain tasks for the teams to bar them from reaching the treasure. So get your Jack Sparrow out and help <b>ZED</b> to get out of this bewildering situation as quick as possible.</p>
					<div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Scavenger-hunt"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="extravaganza.php?event=Scavenger-hunt" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

			   <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Spell Bound</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"> <b>ZED</b> is fond of honey. But the grungy bees are all set to put <b>ZED</b> at task. The bees will shoot the words and he’ll have to scatter them into letters. All the language lovers out there lend him a hand in this grand spellbound challenge. <b>ZED</b> has only one thing to say, “The journey is not smooth. Help me out in this rollercoaster of twists and turns!”
</p>
 <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Spell-Bound"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="extravaganza.php?event=Spell-Bound" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Photoshop Workshop</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b>, like any other millennial, is obsessed with photos and graphic designing. He enjoys expressing his artistic visions and aesthetic ideas through a digital outlet, that is, through his favourite graphic designing platform, PHOTOSHOP. To give other students a chance to truly understand graphic designing, he is organising a workshop covering everything there is to know about working in PHOTOSHOP. Grab this opportunity; chances like it don't come along often.<br>

</p>
 <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Photoshop-workshop"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="" onclick="alert('Registration Closed')" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
