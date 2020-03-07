<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Chemathon"){
		$min=1;
		$max=3;
	} else if($event=='Chem-e-car') {
		$min=1;
		$max=4;
	} else {
		header("Location:chemical.php");
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
        <input type="hidden" name="event_type" value="Chemical">
        <input type="hidden" name="event_name" value="<?php echo $event;?>">
        <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
        <p style="color:#CF5759"><?=@$_SESSION['Error']; @$_SESSION['Error']=null;?></p>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submitreg" class="btn btn-input">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>






<div class="modal fade Chemathon  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CHEMATHON</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Abstract</h3>
            Being a chemical engineer (or scientist) involves a life-long quest of learning. In this profession we constantly learn new ideas and try to better ourselves. Our increasing reliance on the digital world means that to succeed we all need to be aware of the latest technology. Computing is an important part of chemical engineering and all chemical engineers are trained to be numerate, IT literate and develop new technologies.
            <br><br>
            In a position paper specifying a particular set of computing competencies that all chemical engineering graduates should possess the main recommendations from the body of the report are as follows:

            <ul class="checboxlist">

            <li>The chemical engineering graduate must have experience in the computer aided acquisition and processing of information. </li>
            <li>It would be desirable for the student to have an appreciation of principles of numerical analysis (including convergence and stability) and non-numeric programming (such as used in artificial intelligence). </li>
            <li>Understand the implementation of elementary algorithms for the numerical solution of engineering problems. </li>
            <li>Be able to solve more sophisticated engineering problems using appropriate applications software.</li>
            </ul>
          </div>

          <div class="evencon_box">
            <h3>Format: </h3>
            <ul class="checboxlist">
            <li>The event will consist of 3 rounds.</li>
            <li>Teams with the highest points will proceed to the next rounds and the remaining teams will be disqualified.</li>
            </ul>
		  </div>

          <div class="evencon_box">
            <h3>Team Specification: </h3>
            <ul class="checboxlist">
            <li>A maximum of 3 participants are allowed per team.</li>
            <li>Students of different institutions can also form a team.</li>
            <li>Student of any branch can form team together.</li>
            <li>The time limit and the maximum points of each event is mentioned in the event description</li>
            </ul>
		  </div>

          <div class="evencon_box">
            <h3>ROUND-1 : QUIGACITY</h3>
            The problems for this competition are derived for various field of undergraduate chemical engineering and will test your understanding as engineer, computing and numerical skills
            <ul class="checboxlist">
              <li>Round 1 consists of 5 questions to be solved within 24 hours.</li>
              <li>You need to first register for Round 1 by 1-11-2019 and get your access passcode. Round 1 will be held online and the link will be made active on a weekend and all the registered participants will be informed about the link and other details two days prior via Email. </li>
              <li>On the Online link portal you will be asked to provide specific parameter values in the question. The portal will give you a positive or negative feedback based on these parameter values. The feedback would be positive if the parameter value asked is within some range of expected answer and serves as a feedback for your code so that if the concerned value asked is way off you could rework on your program or concept.</li>
              <li>On the portal you are asked to provide a common ZIP file designed as follows:
              <ul>
                <li>1. It should have a base folder named <C_TEAM-ID> this folder should contain 5 folders namely question 1, question 2 and so on.  In each question folder you should have its code (if any) and a soft copy of solution.</li>
                <li>2. You can use only Turbo C++ 3.2/Python 3/Matlab/GNU Octave 4.4.1/MS Excel 2007 to solve the problem.</li>
              </ul>
              </li>
              <li>Result of all the qualified teams for second round will be  notified via email.</li>
              <li>Round 2 and 3 will be held on the event day here at MNIT Jaipur.</li>
            </ul>
          </div>

 <div class="evencon_box">
            <h3>Judging Criteria for 1st round:</h3>
            <ul class="checboxlist">

<li>1. Maximum number of questions solved.</li>
<li>2. Negative marking will not be there for first round.</li>
<li>3. Grading will be on the basis of maximum score achieved by the team.
Any use of unfair means will lead to disqualification of team. </li>
            </ul>
          </div>


 <div class="evencon_box">
            <h3>ROUND-2 : EXPERTLY CHEMICAL</h3>
            Every successful presentation is built on four pillars: People, Idea, Passion, and Presentation so if you can speak you can influence if you can influence you can change lives. Engineering is about visualizing the concepts and using science to find creative practical solutions.
            </div>

 <div class="evencon_box">
            <h3>FORMAT</h3>
            <ul class="checboxlist">

<li>1. The selected teams of round 1 will be provided with a topic one day prior via email.</li>
<li>2. They have to make a presentation which should consist of a brief description, problems we are facing and the solution to that problem.
</li>

            </ul>
          </div>

  <div class="evencon_box">
            <h3>TEAM STRUCTURE AND RULES:</h3>
            <ul class="checboxlist">

<li>1. In case of tie between 2 or more teams, further 5 questions would be asked for final selection.<li>
<li><b>2. Participants shall not be allowed to use mobile or other electronic instruments.</b></li>
<li>3. Organisers have the right to change the quiz format and specifications until the event day.</li>
<li>4. Final decision making authority lies with organising team.</li>
 <li>5. The maximum points for this round will be 50.</li>
          <li>6. Content should not be copied, if it is so the team would be disqualified</li>
            </ul>
          </div>

		  <div class="evencon_box">
            <h3>JUDGING CRITERIA</h3>
            <ul class="checboxlist">

<li>Teams will be judged based on the content of the presentation and presentation skills of the team.</li>
            </ul>
          </div>

         


 <div class="evencon_box">
            <h3>ROUND 3:-WORDTHERMITE</h3>
            This round consists of three stages as follows:
 </div>

 <div class="evencon_box">
            <h3>EVENT 1-BUZZ-DA-MIND</h3>
            <ul class="checboxlist">
            <li>A total of 15 questions will be asked.</li>
            <li>The team who presses the buzzer first will be given the chance to answer.</li>
            <li>If the response given by the team is incorrect, the question will be passed on to the next team.</li>
            <li>If the team took too long to respond after pressing the buzzer, the question will be passed on to the next team.</li>
            <li>For every incorrect response, -5 points will be awarded.</li>
            <li>For every correct response, +10 points will be awarded.</li>
            </ul>
          </div>

  <div class="evencon_box">
            <h3>EVENT 2-RAPIDO-FUEGO</h3>
            <ul class="checboxlist">
            <li>Be rapid and earn as many points as you can.</li>
            <li>There is NO NEGATIVE MARKING in this round.</li>
            <li>Each team will be fired upon with loads of questions in under 60 seconds.</li>
            <li>For every correct response, +5 points will be awarded.</li>
            </ul>
          </div>

		  <div class="evencon_box">
            <h3>EVENT 3-WHEEL OF WIT:</h3>
            <ul class="checboxlist">
            <li>Spin the wheel to select a topic.</li>
            <li>7 questions will be asked related to that field.</li>
            <li>Out of these 7 questions, one is a bonus.</li>
            <li>This bonus question is of 20 points with no negative marking for an incorrect response.</li>
            <li>For the remaining 6 questions, 10 points will be awarded for each correct response and -5 points will be awarded for an incorrect response.  
</li>
            </ul>
          </div>

          <div class="evencon_box">
          <h3>JUDGING CRITERIA</h3>
          <ul class="checboxlist">
          <li>The maximum marks obtained by the team will determine the winner.</li>
          </ul>
          </div>

          <div class="evencon_box">
            <h3>CERTIFICATES AND PRIZES:</h3>
            <ul class="checboxlist">
            <li>Certificates and Cash prizes will also be awarded to 3 top scoring teams. </li>
            <li>Certificate of Participation will be given to all the round 1 qualified teams performing on the event day. </li>
            </ul>
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
                  <td>Kanishka Gupta</td>
                  <td>+91-9588054440</td>
				  <td>2017uch1753@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Chhavi Shukla</td>
                  <td>+91-8217738437</td>
				   <td>2017uch1275@mnit.ac.in</td>
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
            <a href="chemical.php?event=Chemathon"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade Design-it  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CHEM-E-CAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>ABSTRACT:</h3>
            Being aware of the fact that demand for energy has increased over the years, which has increased the burden on the conventional sources of energy, it is of utmost importance that we start looking for sustainable sources of energy. The objective of this competition is to design a chemically powered car which is capable of travelling along a well defined path in a specified amount of time.
            </div>

          <div class="evencon_box">
            <h3>PROBLEM STATEMENT:</h3>
            The objective of the competition is to design a chemically powered car which is capable of travelling along a well defined path in a specified amount of time.
            <br><br>
            The mechanism used in driving the car must be should be non conventional sources, which might consist of chemical, physical and thermodynamic changes, but no manufactured electrical sources. The track taken is straight which is of approximately 1m with (including 200cm of extra track) which will mark the completion of the race.
		  </div>

		   <div class="evencon_box">
            <h3>GUIDELINES FOR THE COMPETITION:</h3>
            <ul class="checboxlist">
            <li>Each team should consist of maximum four members, with at least two members majoring in Chemical Engineering. Multiple teams from a college will be allowed to participate, given that their abstracts and models are different.
             <br>One team is allowed to present only one model.</li>
             <li>Teams must strictly adhere to the given deadlines. Failing to do so will lead to disqualification or heavy penalisation.</li>
             <li>Each team has to come up with an abstract along with their model on the event day . Your Chem-e-car model should be built based on the final abstract submitted.<li>
             <li>The decision of the judge or the event managers will be considered to be final and no further arguments will be entertained.</li>
             <li>The participants are expected to arrange and take care of their chemicals on their own. Team Sphinx holds no responsibility to provide chemicals for participants.</li>
             <li>Any changes in the problem statement and updates regarding the competition will be conveyed to the participants through emails.</li>
             <li>Participants are expected to arrive 15 minutes before their time slot.</li>
            </ul>
          </div>

          <div class="evencon_box">
            <h3>MODEL SPECIFICATIONS:</h3>
			<ul class="checboxlist">
      ● Chemicals which can be used to drive the car.
      <li>Using pressurized air (creating oxygen through a chemical reaction and allowing it to build pressure) </li>
      <li>Using electricity created by the dissolving of metals in certain acids (basic battery)</li>
      <li>Vinegar(CH3COOH)-liquid</li>
      <li>Baking Soda(NaHCO3)-Solid</li>
      <li>Usage of Thermoelectric Generators.</li>
      <li>Aluminium-Air Reaction</li>
      <li>Zinc reaction with dilute Hydrochloric Acid</li>
		</ul>
    <b>⮚
  Note- You can use your own proposed chemicals or methods but it should meet the safety guidelines given below.
    </b>
 </div>

 <div class="evencon_box">
    <h3>TRACK STRUCTURE:</h3>
    <img src="images/chem_pb1.png" style="width:80%;height:70%;">
 </div>


 <div class="evencon_box">
      <h3>SOME INFORMATION ABOUT THE TRACK STRUCTURE</h3>
      The central line is defined as the <b>middle line</b> in the figures that divides the track into two equal parts. It is labelled as a <b>dotted white line</b> in the figures.
      <b>1)</b> The straight track will be <b>1m</b> in length, marked in <b>the figure above</b>. As can be seen from Figure , the track would be tapered with two trapezoidal tracks combining at the shorter parallel edge to form a single track. The track is divided into 3 regions, and there is also an <b>Extra Region</b> marked in <b>blue</b>, the significance of which will be explained later. The outer width of the track is 160 cm, while the inner width at the intersection is 80 cm. The cars will start from point A on the central line and will try to complete the track. There will be <b>two obstacles</b> in the form of small cylindrical speed breakers (of approximate height 1-2cm), both at distances of 200 cm from the middle intersection line XY of the track. For better understanding of the track structure, refer to the figure <b>above</b>.
 </div>

 <div class="evencon_box">
            <h3>JUDGING CRITERIA:</h3>
           <ul class="checboxlist">
           <li>1. Abstract submission ( Weightage-15%)</li>
           <li>2. Innovativeness of the model ( Weightage-5%)</li>
           <li>3. Performance of the model on the event day ( Weightage-80%)</li>
			</ul>
          </div>


		  <div class="evencon_box">
            <h3>PERFORMANCE OF THE MODEL ( OUT OF 70 POINTS)</h3>
            Let <b>L</b> denote the <b>Central length</b> which is the distance travelled by the car along the central line, that is, the component of the length traversed along the central line.
            <br><br>
            Let <b>y</b> denote the <b>Deflection of the car</b> from the central line, in either direction
<b>Perpendicular</b> to the central line.
            <br><br>
            Let the <b>Effective length</b> be defined as the difference between the Central Length and the    Deflection of the car. Mathematically,
            <br><br>
            Effective Length = Central length - Deflection of the Car<br>
                            Effective Length = L – y
            <br><br>
            <b><i> STRAIGHT TRACK –</i></b>
            The track consists of three regions, <b>Region 1, Region 2</b> and <b>Region 3</b>, as marked in the figure below.<br>
            <img src="images/chem_pb2.png" style="width:80%;height:70%;"><br><br>
            As can be seen from the above figure, Region 1 is 375cm long, marked in <b>orange</b>. Region 2 is 25cm long, marked in <b>pink</b> and Region 3 is 400cm, marked in <b>yellow</b>. Thus the total length of the track is 800cm. The Extra region marked in blue is a buffer region for cars that might cross Region 3.
            <br>
            The judging for the three regions is as follows –<br>
            For Region 1 ( Weightage 30 points)<br>
            If the central length covered by the car in this region is L1 cm and the deflection is y1 cm, then the effective length travelled by the car <br>
            Effective Length = L1 – y<br><br>
            Now, the Ideal Length (L’) for Region 1 is 375 cm, as can be seen from the figure. Therefore, the <b>Normalised Score (N1)</b> for Region 1 out of 30 is calculated as-<br>
            N1= (Effective length/375)*30<br><br>
            For Region 2 ( Weightage 10 points)<br>
For Region 2, let the central length be L2 cm. Let y2 cm be the deflection of the car in this region. The effective length for this region will be calculated as follows:<br>
Effective length= L2 - y2/4<br><br>

For Region 3 + Extra Region ( Weightage 30 points)<br><br>

Let the Central Length of the car in Region 3 be L3 cm.<br>
Let the Central Length of the car in the Extra Region be L4 cm.<br><br>

Let the Overall Deflection of the car (for Region 3) measured perpendicular to the central line be y3 cm. The above figure shows how L3 and y3 will be measured if the car stops in Region 3.<br><br>

<u><b>If the car moves on to the Extra Region, then 10 extra points  would be given for crossing the boundary of second region. The deflection won’t be counted  in this region.</b></u><br><br>

The effective length for this region will be calculated as follows.<br>
Effective Length=L3-Y3/3<br>
Now, the Ideal Length for Region 3 is 400 cm from the figure. Therefore,<b>Normalised Score (N3)</b> for this region out of 20 is calculated as-
N3 = (Effective Length/400)*20<br><br>

The combined Nominal Score (N) out of a total of 70 is given by –<br>
N = N1 + N2 + N3+10(for extra region)<br><br>

</li>
		</ul>
 </div>

 <div class="evencon_box">
            <h3>STRUCTURE OF THE COMPETITION</h3><br>
           <ul class="checboxlist">
           <b><font size="3">Stage 1- Abstract Submission (Mandatory for further selection)</font></b><br><br>
           <li>Each team is required to come with a copy of the abstract of their model (word limit 1000 words, with maximum 5 pages)on the event day. Your abstracts must include the following –</li>
           <li>Team ID, name of the team members and the Sphinx IDs.</li>
           <li>All the chemicals used and their costs.</li>
           <li>A Descriptive Procedure of the setup of your model.</li>
           <li>Working procedure of the model, and the mechanisms used.</li><br>
           Optional:<br>
           <li>Your model can also include the following –</li>
           <li>Unique features, innovative ideas and designs used in your model.</li>
           <li>Your views on why your model is environment friendly and the safety measures you have undertaken to ensure safe working of the model.</li>
           <br>
           <u><b>Without the abstract no team is allowed to participate in the race.</b></u>
           <br><br>
           <b><font size="3">Stage 2- Performing Round (On the day of the event)</font></b><br><br>
           <li>On the event day, each team will be given a <b>Trial Run</b> on a side track to test their model. In this test run, the model will be tested for any harmful chemical gases which might get released (poisonous gases, concentrated acids, etc). Your model would be declared unsafe if the chemicals used are hazardous and are harmful to the surroundings. You will be disqualified from the competition if the judges declare your model unsafe. You’ll be given only one opportunity to test your model.</li>
           <li>Each team will be given at maximum <b>two runs</b> on the main track and only the last run would be considered for evaluation. All of this would have to be performed in the given time slot. No extra time would be given for finishing the race. </li>
	</ul>
          </div>



		  <div class="evencon_box">
            <h3>TEAM STRUCTURE AND RULES:</h3>
			<ul class="checboxlist">
      <li>Use of chemicals <b>beyond 1- MSDS rating</b> is not allowed.</li>
      This includes i) <b>inflammable chemicals</b> like dynamite, fireworks, mercuric chloride, white phosphorous and nitro-glycerine, etc. <b>ii) strong concentrated acids</b> like concentrated Sulphuric Acid, Nitric Acid, Hydrofluoric acid, etc. <b>iii) Poisonous gases</b> like hydrogen cyanide, fluorine and chlorine, etc.
		  <br><br>
      <li>Chemical reactions that can be safely conducted indoors should be used.</li>
      <li>The model should not employ any battery or pre-manufactured source of energy.</li>
      <li>Make sure that the chemicals used do not spill on the track</li>
      <li>All abstracts must be original. Plagiarism in any form (including and not limited to -
        <ul>
          <li>1. Replication of old abstracts and models</li>
          <li>2. Submission of similar abstracts by teams from the same institution) or falsifying information in the abstracts will lead to immediate disqualification.</li>
        </ul>
      </li>
      <li>The decision regarding final selection of the teams rests with team Sphinx 2019.</li>
      <li>The judging criteria and specifications may be subject to changes until the event day. Team Sphinx holds the right to do the same.</li>
      <li>Final decision making authority lies with Team Sphinx, MNIT Jaipur.</li>
    </ul>
 </div>

 <div class="evencon_box">
            <h3>PRECAUTIONS AND SAFETY MEASURES</h3>
            Each team is required to incorporate appropriate safety measures and equipments in the chemical preparation and ensure that there are no spills, exposures or hazards. Each team is expected to follow the following rules –<br>
           <ul class="checboxlist">
			<li>All containers containing chemicals, like beakers, syringes, and bags must be properly labelled. This includes all the containers holding reactants, intermediates and products. The labels must properly specify the chemical contained and must also have the <b>Chem-e-Car Team ID</b> specified. It is the responsibility of the team to carry extra labels if necessary.</li>
      <li>All teams must possess the required personal protective equipment depending on the possible hazards that could be encountered. Equipment may include lab coats, safety glasses, gloves, face shields, and hearing protection.</li>
      <li>If the judge deems the car as <b>unsafe</b>, the team will be disqualified. Hence,every team should try to follow the given characteristics:</li>
      <b>Secure attachments</b>: Chemicals must be securely attached to the car to prevent the container from tipping over during the competition.<br><br>
      <li><b>Pressure related restriction</b>: Pressurized vessels and car components represent a significant explosion hazard due to the substantial energy contained in it. Student teams must demonstrate through appropriate pressure measurements that the pressures during normal operations do not exceed equipment specifications. The following restrictions apply to cars operating under pressure.
      <ul>
        <li><b>Maximum operating pressure</b> - This is the highest pressure within the vessel during normal operation. For initial design purposes, the maximum operating pressure can be estimated from the stoichiometry but the actual pressure must still be measured once the car is operational.</li>
        <li><b>Pressure requirement</b> - If the pressure of your car is greater than 1 psig, then your car should have the following: pressure gauge, emergency relief device (must be in the proper location), pressure certification, proper management system to prevent overcharging.</li>
      </li>
      <li><b>Chemical containment hazard</b>: This applies to any solvent, diluents, reactants, intermediate species or product that is present on your car during operation. Suitable measures must be taken while handling chemicals in the car preparation area to prevent human exposure.</li>
	</ul>
          </div>

		  <div class="evencon_box">
            <h3>CERTIFICATES AND PRIZES:</h3>
			<ul class="checboxlist">
      <li>Top 3 teams will be awarded Certificates and Cash Prizes.</li>
      <li>Certificates and Cash prizes will also be awarded to the team with “Best Innovative Model” (apart from the top 3 teams).</li>
      <li>Certificate of Participation will be given to all the teams performing on the event day</li>
		</ul>
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
                  <td> Tarang Nigam</td>
                  <td>+91-9451953921</td>
				  <td>2017uch1736@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Karmesh Gupta</td>
                  <td>+91-9610973211</td>
				   <td>2017uch1711@mnit.ac.in</td>
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
            <a href="chemical.php?event=Chem-e-car"   class="btn btn-input regist-popshow">Register Now</a>
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
	position:absolute; width:17%; top:150px; left:41.5%;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/chemical.png" class="title_img">
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">CHEMATHON</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> likes chemistry but at the same time he is fascinated by computers. So, <b>ZED</b> is looking for people who are similar to him having expertise in both computers and chemistry. He is thus organising an event to find the best amongst these people and is even willing to give prizes to them. So, participate in this event whole heartedly and be prepared to put your computing and engineering skills along with chemical knowledge to test.<br><br>
				
					
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Chemathon"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="chemical.php?event=Chemathon"  class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <div class="evnt_cont_box designit" style="    ">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">CHEM-E-CAR</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> is concerned about the energy consumption worldwide and passionately observes the boundless increase in demand of energy over the years. He wants to reduce the growing burden on the conventional resources. He started looking for sustainable sources of energy and came up with an idea of a competition named Chem-e-Car where the participants will have to design a chemically powered car which is capable of travelling along a well defined path in a specified time interval. This will assist and bolster <b>ZED</b> to find an alternative way out to save our resources and minimize the overload.
					</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Design-it"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="chemical.php?event=Chem-e-car"  class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
