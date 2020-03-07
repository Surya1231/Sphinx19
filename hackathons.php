<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Hack-24"){
		$min=2;
		$max=4;
	// } else if($event=="hack-e-app") {
	// 	$min=1;
	// 	$max=3;
	// } else if($event=="hack-e-web") {
	// 	$min=1;
	// 	$max=3;
	}
	else{
		header("Location:hackathons.php");
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
        <input type="hidden" name="event_type" value="Hackathon">
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

<div class="modal fade Hack-24 modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HACK-24</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
             <h1><b>Note: Participants should be present in Lab-9(Prabha Bhawan) by 2:45(UPDATED) on 06-11-2019.</b><br>Participants are allowed to report in the event till 06:00pm.</h1>
            <h3>Overview</h3>
Linguistically, "Hackathon" happens to be a portmanteau of the words "hack" and "marathon",
					where "hack" is used in the sense of exploratory programming.<br>

					Knitting the same spirit of an ideal Hackathon, Sphinx proudly presents its annual Hackathon,
					HACK-24. A fervent event with a mixed concoction of innovation, technology, teamwork and a
					marvelous profusion of computer "codes" flowing in torrents.<br>
					So, join us for this fun-packed event
					and witness yourself grow amid a diverse pool of tech enthusiasts and participants.
</div>
<div class="evencon_box">
				<h3>ITINERARY:</h3>
			<ol>
		<li>All the participants would gather in one of the classrooms at VLTC for the inauguration session. </li>
		<li>The event kicks off with a short presentation from the co-ordinators highlighting the main objectives of
		the event. The presentation would also include highlighting the mission of the Technical Society (SPHINX).</li>
		<li>As a welcoming gesture, we would conduct a short technical quiz with the aim of incorporating all the participants
		across all the teams. This would be accompanied by a short interactive session with the participants so as to make them
	confortable with the environment.</li>
	<li>After this refreshing session, the participants would proceed to the guided Computer Center room for the main event.</li>
	<li>Further guidance and instruction will be given in the respective labs.</li>

<br>
<br>
	<b> <u>NOTE: </u> </b><i>Participants are expected to bring in their own stationery items for rough design implementation and also
	their required multi-plugs, powerbank, chargers, etc. Amenities such as multiplugs and chargers won't be provided by the organizers.</i>

		</ol>
</div>
<div class="evencon_box">
            <h3>FORMAT:</h3>
            Number of round(s) : 1 (24 hours)

      <ol>
				<br>
				<b>TEAM EVENT :</b> The team can consist of 2 to 4 members. <br>
				 <b>MAIN ROUND :</b>
				Problem statement will be uploaded onsite.<br> Each team has to select one problem statement and work on it.
				Problem statements can be one of the trending categories like Education, Games, Health, Social Networking, Media, etc.<br>
				Each team has to develop a Web or App, according to their convenience, which should solve the problem statement
				selected by the team.<br>
				Teams can avail from any of the technology stacks commonly being used in the market ranging from Node.js to Ruby on Rails. However, at the end of the competition, participants are expected to have a fully functioning App or Website.
				<br>
				<br>
				<b> <i>NOTE: </i>The team faces immediate disqualification should they indulge in any kind of plagiarism or any of the "code copying" fraudulent practices. </b>
				<br>
				<br>

				<i><u>Expectations from the Teams:</u></i>
				<ol>
					<li>PPT (presentation of your product) for 10-15 minutes maximum.</li>
					<li>PPT should include all the necessary details about your website like key features of your website or app, tech talk,
					Scalability of your product, future scope, target audience, revenue, SWOT analysis, etc.</li>
					<li>Source Code (Application webpage with source code / README.txt (running instruction) / synopsis / report). We expect a fully "up and running" application
					for the evaluation.</li>
					<li>If applicable, Demo URL.</li>
					<li>Screenshots of design (wherever applicable).</li>
				</ol>

<br>
				<b>REGISTRATION AND TEAM FORMATION : </b>
					 <br>
					 <ol>
					 	<li>You can form a team with minimum of 2 and a maximum of 4 members.</li>
						<li>All the members of the team should have their SPHINX Id.</li>
						<li>Only the team leader has to register on the website and should mention the SPHINX Id of his/her teammates during the registration.</li>
						<li>Every team will get unique team ID which they have to show onsite for participation.</li>
					 </ol>
				</ol>
	</div>
		<div class="evencon_box">
            <h3>TIME DURATION:</h3>
			    <ol>
				<li>Time Duration: 24 HOURS. </li>
				<li>Each Team will be given 18-20 hours for the development of their product. This includes time spent during lunch break, dinner break, and other refreshment activities.</li>
				<li>The judgement round will be of 4 hours. Each Team will be given 10-15 minutes for their presentation.</li>

				</ol>
		</div>

		<div class="evencon_box">
            <h3>Certification Policy:</h3>
		<ol>
<li>Each Participant will be given a Certificate of Participation.</li>


		</ol>
		</div>
		<div class="evencon_box">
						<h3>Judging criteria:</h3>
				<ol>
					<li>The Webpage or App developed and submitted should be strictly in accordance with the
					Problem Statement.</li>
					<li> <b>The Originality</b> of the idea proposed. </li>
					<li>Security</li>
					<li>Understanding of the problem.</li>
					<li>Functioning of App or Website.</li>
					<li>Code/Scalability [quality of code, documentation].</li>
					<li>Design/Wireframe/Blueprints [quality of design].</li>
</ol>
In case of any dispute, decision of the organizers or Judges will be final and binding on all.
		</div>

		<div class="evencon_box">
            <h3><u>Main Points that will be considered:</u></h3>
			  <ol>
					<ol>
						<li> <b>Quality of Content: </b>All the entries would be judged on the basis of the relevancy of
						content, their accuracy, technical correctness, conciseness and originality. </li>
						<li> <b>Design Quality: </b> All the entries would also be subjected to yardstick of attractive appearance,
						style consistency, the effectiveness of links used for toggling across the pages of the website, appropriate
					use of multimedia contents and animation features and <i>responsiveness</i> of the website. </li>
					<li> <b>Adherence to the theme of the competition: </b> A website developed and submitted should strictly in accordance
					with the one the aforesaid Arena and in accordance to the Problem Statement. </li>
					<li> <b>Functional Quality: </b>Compatibility to various Browsers, relevant modules that serve the intended purpose and easy to use and
					adaptable by the user would be the key functionality measure while judging the entries. </li>
					</ol>
</ol>
		</div>


<div class="evencon_box">
	  <h3>Event Rules:</h3>
	  <ol>
	  <li>Each Team has to bring working Laptop according to their need.</li>
<li>Team members:- Minimum: 2 and Maximum: 4.</li>
<li>The participants should not leave the competition (evaluation of the problem) during the competition time. Else the team will be disqualified.</li>
<li>Any team attempting to communicate with another team, to tamper with the machiner, or
disrupt the competition environment in any way will be disqualified. However, socializing with other teammates
always gives a symbiotic advantage if done righteously.</li>
<li>Web pages designed for the competition should be original, i.e, design template or contents
should not be copied from any resources. In case found copied the participants will be disqualified. <b>(Plagiarism will be checked)</b>.</li>
<li>A template should be designed from scratch only.</li>
<li>Bring your own laptops with pre-installed tools necessary for competition <b>(Strongly recommended)</b>.</li>
<li>You can use any of the programming languages, Frameworks, Databases unless the code base is not copied from another source. There is
freedom to use varied and desired technology stacks but no freedom of plagiarism.</li>
<li> <b>The decision made by the organizing team will be final.</b> </li>

	  </ol>
 </div>

 <div class="evencon_box">
					<h3>Pre-Requisites: </h3>
		 <ul class="checboxlist">
			 <li>You should have Knowledge of Web or App Development.</li>
</ul>
 </div>
 <div class="evencon_box">
					<h3>Accomodation and Food:</h3>
		 <ol>
			 <li>The Accomodation facility will be provided to the teams by SPHINX'19.</li>
			 <li>Teams will be provided with snacks (tea, coffee, etc) and dinner.</li>
</ol>
 </div>




                              <div class="evencon_box">
            <h3>Prizes worth : 50,000/-</h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Anmol Mittal</td>
                  <td>7895200248</td>
				  <td>2017umt1501@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Prastik Gyawali</td>
                  <td>9680398528</td>
				  <td>2017uec1250@mnit.ac.in</td>
                </tr>
								<tr>
                  <td>Gaurab Dahit</td>
                  <td>9680397046</td>
				  <td>2017ucp1313@mnit.ac.in</td>
                </tr>
								<tr>
                  <td>Suryaprakash Agarwal</td>
                  <td>7016268414</td>
				  <td>2017uec1231@mnit.ac.in</td>
                </tr>
              </table>
            </div>
          </div>

<br>
<br>
<br>
		<b>Even if you are an absolute beginner, you can still show
up and discover if this for you. A hackathon is all about
making what you can, and learning on the way.</b>

        </div>
            <h4><b>Note: Participants should be present in Lab-9(Prabha Bhawan) by 2:45(UPDATED) on 06-11-2019.</b><br><br>Participants are allowed to report in the event till 06:00pm.</h4>
		<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="hackathons.php?event=Hack-24"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
        </div></div>


<!--
<div class="modal fade hack-e-app modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HACK-E-APP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview :</h3>
Android is the world's most popular mobile operating system, powering billions of
devices ranging from phones to watches, tablets, TVs, and more. It being a robust
operating system provides the stability that has strong Linux Core which helps the
android applications to withstand the internet traffic.
Thus if the ardour in you calls to bring some change to the world of android apps,
join us for the Android App Hackathon whose Main focus is to attract the innovative
ideas and brainstorming talent among college studentsin the field of Android.
</div>

            <div class="evencon_box">
            <h3>FORMAT:</h3>
            Number of round : 1
      <ul class="checboxlist">
				<li><b>TEAM EVENT :</b> Maximum 1 to 3 members.
</li>
				<li> <b>MAIN ROUND :</b> <br> Problem statement will be uploaded on the site on 15thSeptember 2018. (Or
sent to registered mail ID).
<br> • Minimum 10 Fragments or activities are
required), Prototype (APK), Source Code and README file Submission is to be
done during the event (In MNIT).
<br>
• The idea of the problem statement could be absolutely anything ranging from
creating an app to chat with friends to an app that solves some humongous
issue. Some example domains are: Education / Gaming / Entertainment /
Health.
<br>
Participants have to submit:
<ul>
    <li>Screenshots or design.</li>
    <li>PPT (presentation of your webpage) for 15-20 minutes maximum.</li>
    <li>Workflow document and deployment instructions if any.</li>
    <li>Source Code (Application APK with source code / Readme.txt).</li>
</ul>
</li>
				<li><b>REGISTRATION AND TEAM FORMATION :</b>

				<ul>
				    <li>You will have to register individually. </li>
				    <li> In case if you are forming a team then you have to mention the
Registration id of all members while evaluation of the app.</li>
                    <li>You can form a team with maximum 3 members. While forming teams
choose a Team id and all the members should add that Team Id.</li>
                    <li>Pre-Registration is necessary.</li>
				</ul>
				</li>

				</ul>
	</div>

		<div class="evencon_box">
            <h3>TIME DURATION:</h3>
			    <ul class="checboxlist">
				<li>Time Duration: 4 HOURS. Each Team will be given 15 – 20 minutes.</li>
				<li>All the participants should be present on the evaluation day.</li>

				</ul>
		</div>

		<div class="evencon_box">
            <h3>Certification Policy:</h3>
		<ul class="checboxlist">
<li>Each Participant will be given a Certificate of Participation.</li>


		</ul>
		</div>
<div class="evencon_box">
	  <h3>Event Rules:</h3>
	  <ul class="checboxlist">
	  <li>Each Team has to bring one working Laptop to present their ppts.</li>
<li>Team members:- Minimum: 1 and Maximum: 3.</li>
<li>The participants should not leave the competition (evaluation of the
problem) during the competition time Otherwise the team will be
disqualified.</li>
<li>Any team attempting to communicate with another team, to tamper with the
Machines, or disruptthe competition environment in any way will be
disqualified.</li>
<li>The decision of the judges shall be treated as final and binding on all.</li>


	  </ul>
 </div>

		<div class="evencon_box">
            <h3>Judging criteria:</h3>
			  <ul class="checboxlist">
<li>Entries will be judged by a panel of experts.</li>
<li>Following are the broad guidelines for judging :</li>
<ol>
    <li>The app developed and submitted should be strictly in accordance with the
Problem Statement.</li>
    <li>Understanding of the problem.</li>
    <li>Tech-stack used [what tech you are using].</li>
    <li>Impact & feasibility.</li>
    <li>Code/Scalability [quality of code, documentation].</li>
    <li>Design/Wireframe/Blueprints [quality of design].</li>
    <li>Liked by Special Audience.</li>
</ol>
</ul>
In case of any dispute, decision of the organizers or Judges will be final and binding on all.
		</div>

		<div class="evencon_box">
	  <h3>Main points to be covered :</h3>
	  <ul class="checboxlist">
	  <li><b>Quality of Content: </b>Quality of Content: All the entries would be judged on the basis of relevancy
of content, their Accuracy, grammatical Correctness, conciseness and
originality.</li>
<li><b>Design Quality :</b> All the entries would also be subjected to yardstick of
attractive appearance, style consistency, effectiveness of links used for
toggling across the activities of app, appropriate use of multimedia contents
and animation features and responsiveness of the app.</li>
<li><b>Functional Quality :</b> Compatibility to various versions, relevant modules that
serve the intended purpose and easy to use and adaptable by the user would
be the key functionality measure while judging the entries.</li>

	  </ul>
 </div>


 		<div class="evencon_box">
	  <h3>Machine Specifications :</h3>
	  <ul class="checboxlist">
	  <li>Participants can use any platform to make the solutions for example</li>
<li>Design Tools: Adobe Photoshop.</li>
<li>App Development Tools: Eclipse, Android Studio, Java-JRE.</li>
<li>Database Development Tools: SQLite.</li>

	  </ul>
 </div>                            <div class="evencon_box">
            <h3>Prizes worth : 20000/-</h3>
        </div>



		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Aashish Goel</td>
                  <td>+91-8398948495</td>
				  <td>2016ucp1404@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Varun Kumar   Verma</td>
                  <td>+91-7014578315</td>
				  <td>2016ucp1398@mnit.ac.in</td>
                </tr>
              </table>
            </div>
          </div>

          		<div class="evencon_box">
            <h3>Pre-Requisites :</h3>
<ol>
    <li>You need to know at least one programming language to implement your solution
in.</li>
<li>You should be able to modify sample code.</li>
<li>You don't need to necessarily understand how it works in detail, but you should
be able to use it.</li>
<li>The ground rule for a hackathon is that everything should be built from scratch at
the venue itself.</li>
</ol>
		</div>

		<b>Even if you are an absolute beginner, you can still show
up and discover if this for you. A hackathon is all about
making what you can, and learning on the way.</b>

        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/app problem.pdf" class="btn btn-secondary" role="button">Problem Statement</a>

          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="hackathons?event=hack-e-app"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!--
<div class="modal fade hack-e-web modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HACK-E-WEB</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview :</h3>
Web development can include anything from simply programming the data of a website

to adding client liaison, content, network security and web server configuration, e-
commerce development and more. It usually ranges from creating the simplest, plain

text to the most difficult web-based applications, social network services and electronic
business.
It’s a challenge to create a dynamic and responsive database driven website using
the provided machine specifications containing at least 8 pages and targeting the
task related to the domains specified within stipulated time. The content should
accurately depict what your service provides and be geared towards enticing the
site's visitors, in order to keep them engaged. <br>
<b>The main focus is to stimulate the creative juices and foster problem-solving and
risktaking in a casual environment.</b>
</div>

            <div class="evencon_box">
            <h3>FORMAT:</h3>
            Number of round : 1
      <ul class="checboxlist">
				<li><b>TEAM EVENT :</b> Maximum 1 to 3 members.
</li>
				<li> <b>MAIN ROUND :</b> <br> Problem statement will be uploaded on the site on 15thSeptember 2018. (Or
sent to registered mail ID).
<br> • Problem statement can be one of the trending categories like:
Education/Reference or Games or Social Networking or Media, or Misc.
<br>
• Prototype (webpage), Source Code and README file Submission will be done on
the spot(In MNIT).
<br>
Participants have to submit:
<ul>
    <li>Screenshots or design.</li>
    <li>PPT (presentation of your webpage) for 15-20 minutes maximum.</li>
    <li>Source Code (Application webpage with source code / Readme.txt (running
instruction) / synopsis / report).</li>
    <li>If applicable, Demo URL.</li>
</ul>
</li>
				<li><b>REGISTRATION AND TEAM FORMATION :</b>

				<ul>
				    <li>You will have to register individually. </li>
				    <li> In case if you are forming a team then you have to mention the
Registration id of all members while evaluation of the webpage.</li>
                    <li>You can form a team with maximum 3 members. While forming teams
choose a Team id and all the members should add that Team Id.</li>
                    <li>Pre-Registration is necessary.</li>
				</ul>
				</li>

				<li><b>Arena: :</b>
				All the website entries should be centric to the below mentioned areas :
				<ul>
				    <li>Digital amenity of technical education- The Knowledge Capital. </li>
				    <li> Stay tuned with wearable Technologies- The Technology Fashion.</li>

				</ul>
				</li>

				</ul>
	</div>

		<div class="evencon_box">
            <h3>TIME DURATION:</h3>
			    <ul class="checboxlist">
				<li>Time Duration: 4 HOURS. Each Team will be given 15 – 20 minutes.</li>
				<li>All the participants should be present on the evaluation day.</li>

				</ul>
		</div>

		<div class="evencon_box">
            <h3>Certification Policy:</h3>
		<ul class="checboxlist">
<li>Each Participant will be given a Certificate of Participation.</li>


		</ul>
		</div>
<div class="evencon_box">
	  <h3>Event Rules:</h3>
	  <ul class="checboxlist">
	  <li>Each Team has to bring one working Laptop to present their webpage.</li>
<li>Team members:- Minimum: 1 and Maximum: 3.</li>
<li>The participants should not leave the competition (evaluation of the
problem) during the competition time Otherwise the team will be
disqualified.</li>
<li>Any team attempting to communicate with another team, to tamper with the
Machines, or disruptthe competition environment in any way will be
disqualified.</li>
<li>Web pages designed for the competition should be original, i.e., design
template or contents should not be copied from any resources. In case
found copied the participants will be disqualified. (Plagiarism can be
checked).</li>
<li>A template should be designed from scratch only.</li>
<li>Bring your own laptops with pre-installed tools necessary for competition
(Strongly recommended).</li>
<li>The decision of the judges shall be treated as final and binding on all.</li>


	  </ul>
 </div>

		<div class="evencon_box">
            <h3>Judging criteria:</h3>
			  <ul class="checboxlist">
<li>The webpage developed and submitted should be strictly in accordance with
the Problem Statement.</li>
<li>Security.</li>
<li>Understanding of the problem.</li>
<li>Code/Scalability [quality of code, documentation]</li>
<li>Design/Wireframe/Blueprints [quality of design].</li>

</ul>
		</div>

		<div class="evencon_box">
	  <h3>Main points to be covered :</h3>
	  <ul class="checboxlist">
	  <li><b>Quality of Content: </b>Quality of Content: All the entries would be judged on the basis of relevancy
of content, their Accuracy, grammatical Correctness, conciseness and
originality.</li>
<li><b>Design Quality :</b> All the entries would also be subjected to yardstick of
attractive appearance, style consistency, effectiveness of links used for
toggling across the activities of app, appropriate use of multimedia contents
and animation features and responsiveness of the app.</li>
<li><b>Functional Quality :</b> Compatibility to various versions, relevant modules that
serve the intended purpose and easy to use and adaptable by the user would
be the key functionality measure while judging the entries.</li>
		<li><b>Adherence to the theme of the competition:</b> A website developed and
submitted should be strictly in accordance with the one the aforesaid Arena and
in accordance with the Problem statement.</li>
	  </ul>
 </div>


 		<div class="evencon_box">
	  <h3>Machine Specifications :</h3>
	  <ul class="checboxlist">
	  <li>Operating System: Windows, Mac, Linux.</li>
<li>Web Design Tools: Visual Studio X, Corel Draw, Adobe Photoshop, Html 5,
Css, BootStrap.</li>
<li>Web Development Tools: ASP.NET, JAVA, PHP, Ajax, JavaScript.</li>
<li>Database Development Tools: SQLServer, OracleDB, MySQL, MongoDB.</li>
<li>Browsers: Google Chrome, Mozilla Firefox, Opera Internet Explorer, Safari.</li>

	  </ul>
 </div>                            <div class="evencon_box">
            <h3>Prizes worth : 20000/-</h3>
        </div>



		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
              <tr>
                  <td>Jagriti Aggarwal</td>
                  <td>+91-9549820478</td>
				  <td>2016ucp1413@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Aashish Goel</td>
                  <td>+91-8398948495</td>
				  <td>2016ucp1404@mnit.ac.in</td>
                </tr>

              </table>
            </div>
          </div>

          		<div class="evencon_box">
            <h3>Pre-Requisites :</h3>
<ol>
    <li>There is no prerequisite to start learning web development.</li>
<li>Web Development

includes: Front-
End Development and Back-End Development.</li>
<li>In Front-End Development you

will learn HTML, CSS, JS, Various JS Frameworks. For Back-End You will learn
SQL, node.js, etc. So basically you don’t need any prerequisite. Just start with
Front-End and then move to Back-End. Become a Full Stack Developer.</li>

</ol>
		</div>

		<b>Even if you are an absolute beginner, you can still show
up and discover if this for you. A hackathon is all about
making what you can, and learning on the way.</b>

        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/web problem.pdf" class="btn btn-secondary" role="button">Problem Statement</a>

          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="hackathons?event=hack-e-app"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div> -->


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
<img src="images/hackathons.png" class="title_img">
  <section class="contentbox_pwr" style="">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">

				<!--
				<div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp" >
                   <div class="evnt_cont_box" style="height:100px;">
                   <center> <h1>Coming Soon</h1></center>


                  </div>
                </div>
              </div>
              -->



              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">HACK-24</div></center>
					<!--<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b>, who is a budding entrepreneur, is building his company around, providing tech solutions to various companies. In order to kick-start the company, he is looking for some promising talent who possess a good problem solving aptitude and extraordinary coding skills. So, it is a wonderful opportunity for all of you out there to come up with some alternative solutions to some real world problems. So join us for a fun-packed event and get a chance to directly get recruited to his company, and witness yourself grow amid a diverse pool of technology for this fun-packed event.</p>-->
					
					            <h4><b>Note: Participants should be present in Lab-9(Prabha Bhawan) by 2:45(UPDATED) on 06-11-2019.</b><br><br>Participants are allowed to report in the event till 06:00pm.</h4>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Hack-24"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="hackathons.php?event=Hack-24" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>


			   <!-- <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box">HACK-E-APP</div></center>
					<p class="content_p">Android is the world's most popular mobile operating system, powering billions of
devices ranging from phones to watches, tablets, TVs, and more. It being a robust
operating system provides the stability that has strong Linux Core which helps the
android applications to withstand the internet traffic.
Thus if the ardour in you calls to bring some change to the world of android apps,
join us for the Android App Hackathon whose Main focus is to attract the innovative
ideas and brainstorming talent among college studentsin the field of Android.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".hack-e-app"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="hackathons?event=hack-e-app" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
                   <center> <div class="card_box">HACK-E-WEB</div></center>
					<p class="content_p">Web development can include anything from simply programming the data of a website

to adding client liaison, content, network security and web server configuration, e-
commerce development and more. It usually ranges from creating the simplest, plain

text to the most difficult web-based applications, social network services and electronic
business.
</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".hack-e-web"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="hackathons?event=hack-e-web" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div> -->



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
