<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Seismic"){
		$min=2;
		$max=4;
	} else if($event=="Costa-Rica") {
		$min=1;
		$max=5;
	}else if($event=="Quantro-civil"){
		$min=2;
		$max=3;
	}
	else
	{
		header("Location:civil.php");
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
        <input type="hidden" name="event_type" value="Civil">
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

<div class="modal fade Seismic modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SEISMIC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
<b>ZED</b> suffers hypersomnia and dreams about solving everyday problems when asleep. Once in a
dream he finds himself in a place called &#39;AMARA Island’ that is facing frequent earthquakes due to
seismic disturbances deep down earth. People have no clue and their houses are unable to
withstand the devastating force of nature. So if you think your design can withstand earthquakes
come help Sputnik by showing us your skills in SEISMIC.
			<br>
			<br>

			<b>This event will consist of 2 rounds.</b>
		</div>

      <div class="evencon_box">
            <h3>ROUND-1: QUIZ</h3>
          <ul class="checboxlist">
          	<li>This will be an elimination round consisting of questions related to aptitude, basic mathematics, basic civil engineering.</li>
						<li>The quiz will be of 1-hour duration.</li>
						<li>Each team would be given a set of question paper containing 60 multiple choice objective type questions (Single option correct type).</li>
          </ul>

					<b>Top 8 Teams would be selected for Round-2.</b>

					<h3>ROUND-2: MODEL MAKING</h3>

					<ol>
						<li>Actual implementation or design of building model from given raw material.</li>
						<li>The materials required for making the model will be provided on the spot for the event.</li>
						<ol type="i">
							<li>Standard wooden ice cream sticks (nearly 120mm*12mm*2mm), threads and fevicol will be provided at the time of event.</li>
							<li>The ceiling should be made of Popsicle sticks.</li>
							<li>Height of building should be in between 40-50 cm. The height of single floor should be at least 10cm.</li>
							<li>A cardboard will be provided as base for the structure. The teams have to attach the structure to it.</li>
							<li>The base and ceiling of building should be of max 20cm*20cm.</li>
							<li>Maximum number of sticks that can be used is 400.</li>
							<li>The thickness of adjacent sticks should not be more than thickness of 3 sticks.</li>
						</ol>
					</ol>

		  </div>

		   <div class="evencon_box">
            <h3>TEAM STRUCTURE AND RULES: </h3>
            <ul class="checboxlist">
							<li>A team shall consist of minimum 2 students and maximum 4 students.</li>
							<li>In case of tie between 2 or more teams, the team with lesser wrong answers will get a higher rank.</li>
							<li> <b>Participants shall not be allowed to use mobile or other electronic instruments.</b> </li>
							<li>Organisers have the right to change the quiz format and specifications until the event day.</li>
							<li>Final decision-making authority lies with organising team.</li>
            </ul>
          </div>

			 <div class="evencon_box">
            <h3>TESTING: </h3>
			<ol>
				<li>Shaking table will be used to stimulate earthquake.</li>
				<li><b> Some weight will be placed on structure and then tested for earthquake in this round.</b></li>
				<li><b>Finally the structure will be loaded and the load bore by the structure/weight of the structure ratio will be calculated.</b></li>
			</ol>

			</div>

			<div class="evencon_box">
			<h3>MARKING SCHEME AND OTHER REQUIREMENTS: </h3>
            <ol>
				<li>All the teams will be given 250 points at the starting.</li>
				<li>If the height of the building is found less than 40 cm, then 80 marks shall be deducted.</li>
				<li>Any other dimensions of the building not in specified dimensions will result in deduction of 20 points.</li>
				<li>Use of any sticking material other than fevicol will result in disqualification.</li>
				<li>If the building does not meet the specified requirements then penalty will be imposed or team can be disqualified.</li>
				<li>Come To the event with a fully prepared idea of construction of building and make sure that dimension of each and every element is within range.</li>
				<li>If the floor height is less than 10 cm then 20 points for a single floor will be deducted.</li>
				<li>Model will be judged on the following basis:</li>
				<ol type="i">
					<li>Originality and innovation.</li>
					<li>Technical content.</li>
					<li>Practical Applicability.</li>
				</ol>
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
                  <td>Aayush Gupta</td>
                  <td>8318351659</td>
				  <td>2017uce1662@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Anand Sharma</td>
                  <td>8949588398</td>
				   <td>2017uce1563@mnit.ac.in</td>
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
            <a href="civil.php?event=Seismic"   class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Costa-Rica modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COSTA RICA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview: </h3>
          Have you ever experienced the thrill of riding a roller coaster? Gives Goosebumps, no? Quick Fact:
					Roller coasters don’t have engines. So how do they run exactly? Roller coaster must be pulled by a motorized
					chain to the top of the first big hill. As the roller coaster rises higher, its potential energy increases and
					reaches maximum at crest of hill. The potential energy accumulated by the rise in height is transferred to kinetic
					energy as the cars race down the first downward slope.
</div>

          <div class="evencon_box">
            <h3>PROBLEM STATEMENT: </h3>
			Teams shall design and build a "roller coaster" meeting the requirements mentioned below. The "roller coaster" shall mean
			the entire structure, including the roller coaster track and the base, but not the actual vehicle. The "COASTER" shall mean
			 the vehicle that travels on the Roller Coaster track.
		  </div>

		   <div class="evencon_box">
            <h3>GUIDELINES FOR MODEL:</h3>
            <ol>
							<li>Basic hardware materials like plastic tubes, rubber tubes (transparent), paper, thermacol, cardboard etc can be used to make the roller coaster track.</li>
							<li>Participants can bring their model in disassemble form and can assemble it at the time of the event.</li>
							<li>Materials provided by Organising team: Five rectangular blocks (6"*6"), double sided tape, Fevicol and Scissor.</li>
							<li>Students have to bring their own track and any other material required for making the roller coaster.</li>
							<li>Organising team will not provide any other material apart from specified above.</li>
							<li>The energy source for the ride can be gravitational pull only. Use of external energy sources like magnets, springs,
								 and electricity are not allowed. However, these energy sources can be used for aesthetics and design (like background lightning). </li>
            </ol>
          </div>

          <div class="evencon_box">
            <h3>MODEL SPECIFICATIONS:</h3>
						<ol>
							<li>The height, length and width of the model should not be more than 1.5 metres.</li>
							<li> <b>The model should be designed for a regular size, steel or glass marble approx. 10 - 15 mm in diameter.</b> </li>
							<li>The starting and stopping points must be clearly marked in the model.</li>
							<li>Each team will have to measure the total length of the track of write it down on respective roller coasters.</li>
							<li>You cannot get ground support from more than five columns that rest on the given wooden blocks.</li>
							<li>Teams can use maximum 5 supports using the rectangular blocks provided only.</li>
						</ol>
			</div>

	<div class="evencon_box">
            <h3>JUDGING CRITERIA:</h3>
						<ol>
							<li>Time (40 Pts): <br> <br>
								Each model will be entitled to three runs. The longest time to go from the start position to the finish will be the official time for that model.
Calculation of Points for Time: -
Points will be relative.
Points = (Your time/max time) * 40
For example, if your time is 27 seconds and max time = 39 sec, then you will get marks = (27/39)*40. <br> <br>

							</li>

							<li>Technical Points (30 Pts): <br> <br>
								<ol type="i">
									<li>Vertical Jump Height (10 Pts): <br> <br>
										Height Coaster travels during jump. <br>
H = Max height Coaster jumps in any Roller Coaster in competition. <br>
h = Height jumped by your Coaster. Points = (h/H)*10. <br> <br>
									 </li>

									<li>Vertical Loop (10 Pts): <br> <br>
										Vertical loop is defined as, the loop of track where the ‘rider’ is upside down. If the vertical loop is a portion of a corkscrew (helix), it counts as a vertical loop. <br>
Points: For, 1 loop = 5 Pts, 2 loop = 10 Pts. <br> <br>
									</li>

									<li>Degree of Openness (10 Pts): <br> <br>
Points will be awarded for degree of openness of track. <br>
Mostly closed - 0 Pts. <br>
Around 50% open - 5 Pts. <br>
More than75% open - 10 Pts. <br> <br>
									</li>
								</ol>
							</li>
							<li>Aesthetics (30 Pts): <br> <br>
								<ol type="i">
									<li>Creativity (20 pts): <br> <br>
										For, 90º turn of the track, <br>
										Points: <br>
										For 1 turn = 2 Pts, for 2 turns = 5 Pts <br> <br>

										For, 180º turn of the track, <br>
										Points: <br>
										For 1 turn = 4 Pts, for 2 turn = 10 Pts. <br> <br>
									</li>

									<li>Aesthetically Charming (5 pts): <br> <br>
										Whether the track is neatly designed and is having uniformity in colour/design. <br>
										Whether it is well-constructed or having any roadway obstruction. <br> <br>
									 </li>

									 <li>Theme (5 pts): <br> <br>
									 What is the name of your roller coaster? Does your scenery support this theme? Does the design
									 support your theme? Is there a coolness or cleverness factor in your name? </li> <br> <br>
								</ol>
							</li>

							<li>Teams may be given max 3 trials to complete the track. <br>
In case of first failure to complete the track, 10 points shall be deducted.<br>
In case of second failure, 20 points shall be deducted.<br>
After the failure of third trial, model will be disqualified.
</li>
						</ol>
	</div>

	<div class="evencon_box">
        <h3>TEAM STRUCTURE AND RULES:</h3>
		<ul class="checboxlist">
		<li>Event is open to all.</li>
		<li>Maximum 5 members can be in a team.</li>
		<li>Participants can form team from any branch/ colleges/ university/institute.</li>
		<li>No two teams must have any common member.</li>
		<li>Time limit for completion of model is 180 minutes.</li>
		<li>All abstracts must be original. Plagiarism in any form
			(including and not limited to - Replication of old abstracts and models- Submission of similar abstracts by teams from the same institution)
			or falsifying information in the abstracts will lead to immediate disqualification.  The decision regarding final selection of the teams rests
			with team Sphinx 2019.</li>
			<li>The judging criteria and specifications may be subject to changes until the event day.</li>
			<li>Organising team holds the right to do the same.  Final decision making authority lies with organising team, MNIT Jaipur.</li>
	</div>

	<div class="evencon_box">
        <h3>CERTIFICATES AND PRIZES: </h3>
				<ol>
					<li>Top 3 teams will be awarded with Cash Prizes</li>
					<li>Certificates and Cash prizes will also be awarded to the team with "Best Innovative Model" (apart from the top 3 teams).</li>
					<li>Certificates will be given to all participating teams.</li>
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
                  <td>Aayush Gupta</td>
                  <td>8318351659</td>
				  <td>2017UCE1622@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Anand Sharma</td>
                  <td>8949588398</td>
				   <td>2017UCE1563@mnit.ac.in

</td>
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
            <a href="civil.php?event=Costa-Rica"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="modal fade Quantro-civil modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QUANTRO-CIVIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>ABSTRACT: </h3>
Quantro-Civil is a revolutionized style of conducting a quizzing event testing the knowledge of participants in a wide range of fields of Civil Engineering.
Quantro-Civil is the best opportunity for the intellect and the quizzing genius to test their knowledge and challenge their quick thinking.
</div>

          <div class="evencon_box">
            <h3>ROUND-1: QUANTRO</h3>
						<ol>
							<li>It will be a MCQ type quiz having questions from these topics. <br>
								<ol type="i">
									<li>Basic civil Engineering.</li>
									<li>Aptitude-Both Logical and Analytical Reasoning.</li>
									<li>Basic Mathematics, etc.</li> <br>
								</ol>
							</li>
							<li>Time Limit-1 hr.</li> <br>
							<li>Each team would be given a set of question paper containing 90 multiple choice objective type questions with no negative marking.</li>
						</ol>

						<b>~ Top 20 Teams would be selected for Round-2.</b>
		  </div>

		   <div class="evencon_box">
            <h3>ROUND-2: PROGRESSION ROUND</h3>
            <ol>
							<li>This round will consist of 20 questions. For each question, 90 seconds will be given.</li>
							<li>Marking scheme follows the sum of arithmetic progression. 10 points will be awarded for starting the correct answers sequence with an increment of 10 points for every subsequent correct answer. </li>
							<li>The catch is if any team skips a question, it will be awarded with -10 points but the progression will continue for next correct answer. But, if the answer is wrong, the team will be awarded with 0
								 points but the sequence will break. So, teams have to be smart in answering the questions.</li>
          </div>

					<b>~ Top 7 Teams would be selected for Round-2.</b>

          <div class="evencon_box">
            <h3>ROUND-3: SURPRISE EVENT</h3>
						<ol>
							<li>It is a surprise event. Details of this round will be given prior to the beginning of this round.</li>
						</ol>
			</div>

	<div class="evencon_box">
            <h3>TEAM STRUCTURE AND RULES:</h3>
						<ol>
							<li>A team shall consist of minimum 2 students and maximum 3 students.</li>
							<li>In case of tie between 2 or more teams, the team with lesser wrong answers will get a higher rank.</li>
							<li> <b>Participants shall not be allowed to use mobile or other electronic instruments.</b> </li>
							<li>Organisers have the right to change the quiz format and specifications until the event day</li>
							<li>Final decision making authority lies with organising team.</li>
						</ol>
	</div>

	<div class="evencon_box">
        <h3>CERTIFICATES AND PRIZES: </h3>
				<ol>
					<li>Top 3 teams will be awarded with Cash Prizes</li>
					<li>Certificates will be given to all participating teams.</li>
				</ol>
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
                  <td>Aayush Gupta</td>
                  <td>8318351659</td>
				  <td>2017UCE1622@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Swapnil Singariya</td>
                  <td>9588002210</td>
				   <td>2017uce1382@mnit.ac.in</td>
                </tr>

								<tr>
                  <td>Nikita Agrawal</td>
                  <td>7017233636</td>
				   <td>2017uce1124@mnit.ac.in</td>
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
            <a href="civil.php?event=Quantro-civil"  class="btn btn-input regist-popshow">Register Now</a>
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
	position:absolute; width:12%; top:150px; left:43.5%;
}
.siesmic{
    height:260px;
}
.civiqe{
    height:280px;
}
.civiqc{
    width: 220px;
}

</style>

<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/civil.png" class="title_img">
  <section class="contentbox_pwr" style=" ">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">


              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box seismic" style="">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">SEISMIC</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> is devasted by news of earthquakes around the world and the destruction to life and property they cause. He ponders a lot about techniques to minimize these damages. In his quest, he asks for your help. He has organized ‘SEISMIC’, a competition in which where participants can present their earthquake- resistant building ideas, make models and test them for stability. Do you have what it takes to resist one of the nature’s most devastating calamities?</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Seismic"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="civil.php?event=Seismic" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <div class="evnt_cont_box seismic" style=" ">
                   <center> <div class="card_box civiqc" style="font-family: 'bahnschrift', sans-serif;">COSTA RICA</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;">Have you ever experienced the thrill of riding a roller coaster? Everyone loves to ride it and so does our very own <b>ZED</b>. But <b>ZED</b> is no longer amused by going to the usual roller coasters in amusement parks and so he wants you to build a roller coaster specially designed for him. He even gives you the golden opportunity of winning prizes for doing the same. So grab this chance with both hands and get ready to have your designing skills tested by <b>ZED</b>!</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Costa-Rica"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="civil.php?event=Costa-Rica" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

<?php // TODO: CHANGES TO BE MADE FOR QUANTRO SECTION  ?>

							<div class="col-md-12 col-sm-12">
			                <div class="eventbox_wrp">
			                   <div class="evnt_cont_box seismic" style=" ">
			                   <center> <div class="card_box civiqc" style="font-family: 'bahnschrift', sans-serif;">QUANTRO-CIVIL</div></center>
								<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> was too fatigued from the conventional ways of exercising his knowledge. He is surfeited with dull and drab matches and now craves for some healthy competition. This led him to organise a remodelled form of quiz named Quantro-Civil. It is a refashioned style of quizzing event  to test the intellect of participants in various fields concerned with Civil Engineering, providing the best platform to challenge their logic, endless scope to boost their limits and ceaseless opportunities to quantum leap their expertise.</p>
			                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Quantro-civil"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
			                    <?php
					if(isset($_SESSION["user_sphinx_sp"]))
					{
						?>
			                    <a href="civil.php?event=Quantro-civil" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
