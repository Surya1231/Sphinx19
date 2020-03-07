<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="material-world"){
		$min=2;
		$max=2;
	} else if($event=="innovative-sein") {
		$min=2;
		$max=3;
	} else
	{
		header("Location:metallurgy.php");
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
        <input type="hidden" name="event_type" value="Metallurgy">
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


<div class="modal fade innovative-sein  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="height: auto; overflow: auto;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">JUST INNOVATIVE SEIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>ABSTRACT: </h3>
Blending materials and creating an entirely different sort of composition is one of the alluring traits of an engineer.

JUST INNOVATIVE SEIN gives you an opportunity to create a material of your own.


		</div>
          <div class="evencon_box">
            <h3>ROUND-1: QUIZ </h3>

					<ol>
						<li>The quiz will be in two parts.</li>
						<li>Each team will be provided with a question paper consisting of 30 objective type questions related to general aptitude.</li>
						<li>As soon as a team completes the first question paper, they will be provided with a new question paper consisting of 20-30 objective type questions related to technical knowledge. <br>
							Topics:
							<ol type="i">
								<li>Physical Metallurgy </li>
								<li>Engineering Materials </li>
								<li>Extractive Metallurgy </li>
								<li>Foundry </li>
								<li>Fuels and Furnaces.</li>
							</ol>
							<li>Time limit: 60 minutes</li>
						</li>
					</ol>

					<b>~ Top 5 Teams would be selected for Round-2.</b>
		  </div>

		   <div class="evencon_box">
            <h3>ROUND-2:</h3>
            <ul class="checboxlist">
							<li>In this round riddles will be asked, which will have elements as their solutions, participants need to identify the correct elements and with the help of these elements form an alloy composition best suited for the required application (provided on the spot).</li>
							<li>If a team identifies a wrong element they will be provided with the correct answer with a penalty.</li>
							<li>A list of related properties with every element will be provided to the teams.</li>
            </ul>
          </div>

          <div class="evencon_box">
            <h3>TEAM STRUCTURE AND RULES:</h3>
			<ul class="checboxlist">
			<li>A team shall consist of maximum 3 students.</li>
			<li>In case of tie between 2 or more teams, team with less number of wrong answers will be ranked higher.</li>
			<li> <b>Participants shall not be allowed to use mobile or other electronic instruments.</b> </li>
			<li>Organisers have the right to change the quiz format and specifications until the event day.</li>
			<li>Final decision making authority lies with organising team, MNIT Jaipur.</li>
 </div>

		<div class="evencon_box">
			<h3>CERTIFICATES AND PRIZES:</h3>
			<ul class="checboxlist">
				<li>Top 3 teams will be awarded with Cash Prizes.  </li>
				<li>Certificates will be given to all participating teams.</li>
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
                  <td>Samyak Srivastava</td>
                  <td>8005328897</td>
				  <td>2017umt1716@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Yashank Dixit</td>
                  <td>9001793429</td>
				   <td>2017umt1108@mnit.ac.in </td>
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
            <a href="metallurgy.php?event=innovative-sein"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade material-world  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="height: auto; overflow: auto;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">THE MATERIAL WORLD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>ABSTRACT: </h3>
	Materials are an integral part of our existence, and in this developing era we are keen to know more about materials and their various applications. <br> <br>
The material world will revolve around engineering material, their applications and nanotechnology.

		</div>
		<div class="evencon_box">
			<h3>ROUND-1 : QUIZ</h3>

			<ol>
				<li>A quiz based on materials and their applications.</li>
				<ol type="i">
					<li>Engineering Materials</li>
					<li>Nanotechnology</li>
					<li>Characterisation of Materials</li>
				</ol>
				<li>Each team will be provided with a question paper consisting of 60 questions of objective type.</li>
				<li>The time limit for this round will be 60 minutes.</li>
			</ol>

			<b> ~ Top 5 Teams would be selected for Round-2 </b>
</div>

<div class="evencon_box">
		<h3>ROUND 2:</h3>
		<ol>
			<li>In this round each team will be provided with a well known metallurgical process or equipment and teams will have to modify the process/equipment giving a detailed analysis of the merits, demerits and cost incurred.</li>
			<li>The time limit for this round will be 45 minutes.</li>
		</ol>
	</div>

	<div class="evencon_box">
						<h3>TEAM STRUCTURE AND RULES:</h3>
						<ul class="checboxlist">
							<li>A team shall consist of maximum 3 students.</li>
							<li>In case of tie between 2 or more teams, the team with lesser wrong answers will get a higher rank.</li>
							<li> <b>Participants shall not be allowed to use mobile or other electronic instruments.</b> </li>
							<li>Organisers have the right to change the quiz format and specifications until the event day.</li>
							<li>Final decision making authority lies with organising team.</li>
						</ol>
 </div>

		<div class="evencon_box">
			<h3>CERTIFICATES AND PRIZES:</h3>
			<ul class="checboxlist">
				<li>Top 3 teams will be awarded with Cash Prizes.  </li>
				<li>Certificates will be given to all participating teams.</li>
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
                  <td>Aniket Soni</td>
                  <td>9950891716</td>
				  <td>2017umt1730@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Samyak Srivastava</td>
                  <td>8005328897</td>
				   <td>2017umt1716@mnit.ac.in</td>
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
            <a href="metallurgy.php?event=material-world"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- </div> -->


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

	border:2px solid #fff; padding:10px; color:#2A5D88; border-radius :22px; background-color:#fff; width:240px;  margin-top:-25px; font-size:20px; font-weight:bold;
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
	position:absolute; width:17.5%; top:150px; left:41%;
}
.modal{
	height: 1000px;

}
.entrophy{
    height:230px;
}
.urja{
    height:260px;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/metallurgy.png" class="title_img">
  <section class="contentbox_pwr" style=" ">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">


              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">THE MATERIAL WORLD</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> is a passionate metallurgist. He thinks materials can change the world we are living in today. Lately he is into the world of Nanotechnology. He wants to revolutionise the world with mind bending applications and possibilities of metallurgy. But so far, he is in a crisis of insolvency. <b>ZED</b> invites you to this crusade. So will you help him? Come apply your technicalities and facts about Engineering Materials, their applications in the Material World and help <b>ZED</b> metamorph our existence.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".material-world"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="metallurgy.php?event=material-world" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <div class="evnt_cont_box" style="">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">JUST INNOVATIVE SEIN</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> is eager about new ideas and inventing some modern stuff with contemporary ingredients. He is yearning for a neoteric layout since long. Hence he thought of an event named Just Innovation Sein which gives an amazing platform to participants for blending materials to create an entirely different composition and prove their inventive prowess. Thus this will help <b>ZED</b> in his search for an out of the box idea and lead him to build paraphernalia of his own.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".innovative-sein"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="metallurgy.php?event=innovative-sein" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
