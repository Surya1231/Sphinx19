<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event==""){
		$min=1;
		$max=2;
	} else if($event=='') {
		$min=1;
		$max=2;
	} else if($event=='') {
		$min=1;
		$max=2;
	}
	else{
		header("Location:hackathons");
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
	 overflow-x: hidden; height: 50%;  padding-left:0 ; width:70%;border-radius: 40px 0px 0px 40px; position:absolute; margin:0 auto;margin-top:-50px;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
position:absolute; width:17%; top:150px; left:42%;margin-top:-50px;
}

body{font-family:arial;}
table{font-size:15px; font-family:arial; border: 2px solid #fff; margin-left:-100px;}
 td{width:200px; text-align:center; border: 2px solid #fff; padding:20px;}
tr th{text-align:center;}
h3 {margin-left:-100px;}
tr{height:50px;}

@media screen and (max-width: 600px) {
    table{font-size:11px; font-family:arial; border: 1px solid #fff; margin-left:-20px;}
 td{width:auto; text-align:center; border: 1px solid #fff; padding:0px;}
tr th{text-align:center;}
h3 {margin-left:0px;}
tr{height:auto;}
}

.coming{
	width: 50%;
	overflow: auto;
	margin: 90px auto;
}
</style>


<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%; color: white;">
<img src="images/schedule.png" class="title_img" >



  <section class="contentbox_pwr" style="">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               
				
				<div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp" >
                    <center>
                    <b><h3>6<sup>TH</sup> November</h3> </b>
                    <table style="color:white;">
                    <tr><th>EVENTS</th><th>VENUE</th><th>TIMINGS</th></tr>
                    <tr><td>Photoshop Workshop</td><td>Lab 6</td><td>10:00am-2:00pm</td></tr>
                    <tr><td>Hackathon</td><td>Lab 9</td><td>3pm onwards(1 day)</td></tr>
                    <tr><td>Chemathon(Round 2)</td><td>VLTC L308,309</td><td>10:00am-12:00pm</td></tr>
                    <tr><td>Quantro Civil(Round 1 and 2)</td><td>VLTC L007,008</td><td>10:30am-3:00pm</td></tr>
                    <tr><td>Seismic</td><td>VLTC L103,104</td><td>9:00-10:00am</td></tr>
                    <tr><td>Just Innovate Sein(Round 1)</td><td>VLTC L304</td><td>10:00-11:00 am</td></tr>
                    <tr><td>Roborush</td><td>VLTC Porch</td><td>11:00 am onwards</td></tr>
                    <tr><td>Digilog(Round 1)</td><td>VLTC L304,305</td><td>2:00-3:00pm</td></tr>
                    <tr><td>Cantilivo </td><td>VLTC Porch</td><td>2:30-4:30pm</td></tr>
                    <tr><td>Mathematica</td><td>VLTC L 206,207,208,209</td><td>1:00-2:00pm</td></tr>
                    <tr><td>Mathematica(Round 2)</td><td>VLTC L 206,207,208,209</td><td>4:00-5:00pm</td></tr>
                    <tr><td>Bomb Squad</td><td>VLTC T001</td><td>2:00-5:00pm</td></tr>
                    <tr><td>Tech Talks</td><td>VLTC L205</td><td>12:00-1:00 & 3:00-4:00pm</td></tr>
                    <tr><td>Reading Between The Lines(Round 1)</td><td>VLTC L203,204</td><td>12:00-1:00pm</td></tr>
                     <tr><td>Reading Between The Lines(Round 2)</td><td>Lab 1</td><td>3:00-5:00pm</td></tr>
                    <tr><td>Inquizitive(Round 1)</td><td>VLTC L101,102</td><td>9:00-10:00am</td></tr>
                    <tr><td>Inquizitive(Round 2)</td><td>VLTC L101,102</td><td>4:00-5:00pm</td></tr>
                    <tr><td>Economization</td><td>VLTC L302,303</td><td>2:00-3:00pm</td></tr>
                    <tr><td>Robotics Workshop</td><td>VLTC L107</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>Mercedes Engine Analysis</td><td>VLTC L106</td><td>8:00am-5:00pm</td></tr>
                    <tr><td>Internet of Things</td><td>Lab 4</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>Quadcopters</td><td>VLTC L108</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>AI with ML</td><td>CSE Dept.(cloud computing lab)</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>Ethical Hacking & Cyber Security  </td><td>Lab 7</td><td>8:00am-1:00pm</td></tr>
                    </table>

                    <br><br>
                    <b><h3>7<sup>TH</sup> November</h3> </b>
                    <table style="color:white;">
                    <tr><th>EVENTS</th><th>VENUE</th><th>TIMINGS</th></tr>
                    <tr><td>Chem-e-Car</td><td>VLTC Corridor 4th Floor</td><td>10:00am-1:00pm</td></tr>
                    <tr><td>Seismic</td><td>APJ Hall</td><td>8:00am-3:00pm</td></tr>
                    <tr><td>Code Of War (Round 2)</td><td>Lab 7</td><td>1:30pm-4:30pm</td></tr>
                    <tr><td>The Material World</td><td>VLTC L208</td><td>11:00am-12:00pm</td></tr>
                    <tr><td>Digilog(Round 2)</td><td>VLTC L305</td><td>10:00am-12:00pm</td></tr>
                    <tr><td>Plugged In</td><td>VLTC L003,004</td><td>9:00-10:00am</td></tr>
                    <tr><td>Electrocrossword Puzzle</td><td>VLTC L008,009</td><td>1:30-2:30pm</td></tr>
                    <tr><td>Hackathon </td><td>Lab 9</td><td>Continued</td></tr>
                    <tr><td>Egg Suicide</td><td>CV Raman Hall</td><td>1:30-5:30pm</td></tr>
                    <tr><td>Fourth Estate(Round 1)</td><td>VLTC L405</td><td>01:00pm-3:00pm</td></tr>
                    <tr><td>Fourth Estate(Round 2)</td><td>VLTC L405</td><td>03:15pm-5:00pm</td></tr>
                    <tr><td>Robotryst</td><td>VLTC L201,202</td><td>11:30 onwards</td></tr>
                    <tr><td>Tech Talk</td><td>Malaviya Sabhagar</td><td>12:00-1:00pm</td></tr>
                    <tr><td>Just Innovate Sein(Round 2)</td><td>VLTC L206</td><td>10:00-12:00pm</td></tr>
                    <tr><td>Mathematica (Round 3)</td><td>VLTC L207,208,209</td><td>1:00-3:00pm</td></tr>
                    <tr><td>CADastrophe</td><td>Lab 7,8</td><td>3:00-6:00pm</td></tr>
                    <tr><td>Drone Rush</td><td>SAC</td><td>11am onwards</td></tr>
                    <tr><td>Duel The Deal </td><td>VLTC L306,307,308</td><td>11:00am-2:00pm</td></tr>
                    <tr><td>Economization(Round 2)</td><td>VLTC L007,008</td><td>4:00-6:00pm</td></tr>
                    <tr><td>Social Awareness</td><td>OAT</td><td>1:00-3:00pm</td></tr>
                    <tr><td>Bomb Squad</td><td>VLTC T001</td><td>2:00-5:00pm</td></tr>
                    <tr><td>Photoshop Workshop</td><td>Lab 6</td><td>10:00am-2:00pm</td></tr>
                    <tr><td>Robotics Workshop</td><td>VLTC L107</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>Mercedes Engine Analysis</td><td>VLTC L106</td><td>8:00am-5:00pm</td></tr>
                    <tr><td>Internet of Things</td><td>Lab 4</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>Quadcopters</td><td>VLTC L108</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>AI with ML</td><td>Cse Dept.(cloud computing lab)</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>Ethical Hacking & Cyber Security  </td><td>Lab 7</td><td>8:00am-1:00pm</td></tr>
                    </table>
                    
                    <br><br>
                    <b><h3>8<sup>TH</sup> November</h3> </b>
                    <table style="color:white;">
                    <tr><th>EVENTS</th><th>VENUE</th><th>TIMINGS</th></tr>
                    <tr><td>Chemathon(Round 3)</td><td>VLTC L308</td><td>10:00am-12:00pm</td></tr>
                    <tr><td>Costa Rica</td><td>APJ Hall</td><td>9:00am-12:00pm</td></tr>
                    <tr><td>Digilog(Round 3)</td><td>Analog Circuit and Signals Lab</td><td>11:00am-1:00pm</td></tr>
                    <tr><td>Plugged In(Round 2)</td><td>VLTC L003</td><td>9:00am-11:00am</td></tr>
                    <tr><td>Electrocrossword Puzzle(Round 2)</td><td>VLTC L008</td><td>1:00-3:00pm</td></tr>
                    <tr><td>Macgyver</td><td>VLTC Porch</td><td>9:00am-12:00pm</td></tr>
                   <tr><td>Spell Bound(Round 1 & 2)</td><td>VLTC L304</td><td>01:00pm-05:00pm</td></tr>
                    <tr><td>Treasure Hunt</td><td>VLTC Porch</td><td>1:00-4:00pm</td></tr>
                    <tr><td>Battle Bots</td><td>VLTC </td><td>1pm onwards</td></tr>
                    <tr><td>Aqua Missile</td><td>Football Ground</td><td>10am onwards</td></tr>
                    <tr><td>Quiztopher</td><td>VLTC L104</td><td>10:00-1:00pm</td></tr>
                    <tr><td>The Material World(Round2)</td><td>VLTC  L208</td><td>10:00am-12:00pm</td></tr>
                    <tr><td>Bomb Squad</td><td>VLTC T001</td><td>10:00-2:00pm</td></tr>
                    <tr><td>Advert Maniacs</td><td>VLTC L205,206</td><td>2:00-5:00pm</td></tr>
                    <tr><td>Binary Battle(Round 2)</td><td>Lab 9</td><td>9:00am-1:00pm</td></tr>
                    <tr><td>Maze-o-Mania</td><td>VLTC L203,204</td><td>1:00-3:00pm</td></tr>
                    <tr><td>Robotics Workshop</td><td>VLTC L107</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>Internet of Things</td><td>Lab 4</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>Quadcopters</td><td>VLTC L108</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>AI with ML</td><td>CSE Dept.(cloud computing lab)</td><td>8:00am-1:00pm</td></tr>
                    <tr><td>Ethical Hacking & Cyber Security  </td><td>Lab 7</td><td>8:00am-1:00pm</td></tr>
                    </table>
                    
                    
                      </center>
                </div>
              </div>
			  
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
<style>
@media screen and (max-width: 600px) {

.contentbox_pwr {
    /* max-width: 1000px; */
    background: rgba(0,0,0,0.4);
    /* margin: 0 auto; */
    vertical-align: middle;
    color: #fff;
    max-height: 500px;
    overflow: auto;
    position: fixed;
    left: 0%;
    /* font-size: 20px; */
    top: 22%;
    height: 72%;
    right: 0;
    /* bottom: 48px; */
    width: 100%;
    /* border-radius: 40px 0px 40px 0; */
    padding: 15px;
    order: 0;
    box-shadow: 0 0 0;
    z-index: 4;
    font-family: text;
    margin-bottom: 0;
    /* padding-top: 20px; */
    padding-bottom: -50px;
}


}

</style>
</body>
</html>
