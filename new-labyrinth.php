<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min=1;
	$max=1;
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="csgo"){
		$min=5;
		$max=5;
	} else if($event=="fifa") {
		$min=1;
		$max=1;
	}else if($event=="nfs") {
		$min=1;
		$max=1;
	} else if($event=='pubg') {
		$min=4;
		$max=4;
	}  
	else if($event=='tekken') {
		$min=4;
		$max=4;
	}
	else
	{
		header("Location:new-labyrinth");
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
                  <option value="<?=$i;?>"  ><?=$i;?></option>
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
        <input type="hidden" name="event_type" value="Labyrinth">
        <input type="hidden" name="event_name" value="<?php echo $event; ?>">
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
            <h3>GENERAL RULES AND REGULATIONS:</h3>
            By entering the LAN GAMING Tournament, you acknowledge the
following terms and conditions and agree to adhere to the tournament rules:
            <ol>
                <li>The players are allowed to configure their preferred settings prior
to each match (cannot be altered once a match has begun).</li>
            <li>The players are allowed to use their own gaming equipments
such as Keyboard, Mouse, Mouse Pad, and Headphones.</li>
<li>Tournament Officials and Organizers will not be responsible for any
loss or
damage to the players’ gaming equipment.</li>
            </ol>
            </div>


            <div class="evencon_box">
            <h3>CONTENTS:</h3>
            <ol>
                <li>5 v 5 Team Play (Game Mode: Competitive _ Bomb Plant Scenario)</li>
                <li>All rules of Competitive game mode will apply.</li>
                <li>Practice Time of 5 minutes will be given to set the basic configuration.</li>
                <li>Group Stage:
                
                <ol type="a">
                    <li>Preliminaries: 30 In-game rounds (Knockout Matches till 4 teams
remain).</li>
<li>Semi-finals: 30 In-game rounds OR Best of 3 Maps (if time permits).</li>
<li>Finals: Best Of 3 Maps.</li>
                </ol>
                </li>
                <li>Teams will switch roles (Terrorists or Counter-Terrorists) after playing half of the number of In-game rounds.</li>
                <li>In case of tie, then six In-game rounds (OVERTIME) with 10,000 start money will be played until a winner is decided.</li>
                <li>Following Maps will be played –
                <ol type="a">
                    <li>Preliminaries– de_dust2, de_inferno, de_mirage.</li>
                    <li>Semi-Finals & Finals - de_dust2, de_inferno,
de_cache(old), de_overpass, de_mirage.</li>
                </ol>
                </li>
                <li>Choosing of map will be as follows:
                <ol type="a">
                    <li>For Preliminaries, knife round will decide the team role and map.</li>
                    <li>For Semi-finals
                    <ol type="i">
                        <li><u>If conducted as B01 Map:</u> - One map will be picked through the 3 maps by veto. Knife round
will decide the team role.</li>
<li><u>If conducted as BO3 Maps: -</u>Best Of 3 Maps will be picked through the entire map pool by veto.
Knife round will decide the team role.</li>
                    </ol>
                    </li>
                    <li>For Finals, Best Of 3 Maps will be picked through the entire map pool
through one-by-one elimination. Knife round will decide the team role.</li>
                </ol>
                </li>
            </ol>
		    </div>

		   <div class="evencon_box">
            <h3>Other Details: </h3>
            <ol>
                <li>Use of scripts is strictly PROHIBITED.</li>
                <li>Players can bring their config (.cfg file) with changes only in crosshair and viewmodel. Other changes can be made under the supervision of organisers.</li>
                <li>Team messages and chat are allowed.</li>
                <li>If disconnection occurs during a match then scores till the last round will continue and starting money will be decided by the organizers.</li>
                <li>If any of the team members cannot be located after his/her
name has been called then he/she will automatically forfeit the
match.</li>
<li>Any participant deliberately attempting to sabotage or damage
LAN Gaming equipment to restart matches will be immediately
disqualified from the tournament.</li>
<li>Players have to bring their headphones (at least). They may bring
other equipment (mouse, keyboard, mouse pad). Personal laptops
WILL NOT be used.</li>
<li>Systems will be provided .</li>
            </ol>
            </div>


            

            <div class="evencon_box">
              <h3>System Specifications:</h3>
              <ol>
                  <li>64 tick LAN server.</li>
                  <li>Intel Xeon W3680 @3.33 Ghz (6 core processor).</li>
                  <li>NVIDIA Quadro 2000 (4 GB).</li>
                  <li>RAM: 8 GB.</li>
                  <li>HP ZR2240w (21.5 inch) monitor @60Hz.</li>
                  <li>Mouse and keyboard.</li>
                  <li>FPS will be around 200.</li>
              </ol>
            </div>
            
            <div class="evencon_box">
              <h3>MATCH FORFEITURE:</h3>
              <ol>
                  <li>Any person who attempts to disrupt matches with verbal or physical abuse of gaming staff or tournament competitors will be disqualified from the tournament and may be removed from the venue.</li>
                  <li>Refusal to play a fight or committing any disruptive behavior that can delay the tournament will result in forfeiture of the match regardless of contestant tournament standings.</li>
              </ol>
            </div>
            
                        <div class="evencon_box">
              <h3>Further Terms and Conditions:</h3>
              <ol>
                  <li>Please note that in exceptional circumstances, the tournament rules may be subject to change at short notice. In the event of such a change, the tournament director and/or management will make every effort to make participants aware of this fact as soon as possible.</li>
                  <li>We also reserve the right to remove any participant who, in our opinion, is detrimental to, and/or is having a negative impact on the event.</li>
              </ol>
            </div>
            
            <h4>Decision of the Organiser will be the final decision irrespective of any consequences.</h4>

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                  <tr>
                  <td>Rishabh Singh</td>
                  <td>7742335562</td>

                </tr>
                <tr>
                  <td>Aman Bansiwal</td>
                  <td>9414944929</td>
                </tr>
              </table>
            </div>
          </div>
          
          You can also contact us through WhatsApp.
          
        </div>
		<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="https://forms.gle/LyxojWvsJWTADDfv5"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
        </div>
</div>

<div class="modal fade fifa modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FIFA 19</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>General Rules:</h3>
			<ol>
			    <li> Competition method: 1 vs 1</li>
                <li> Game mode: KickOff</li>
                <li> Teams: All international teams and clubs (except FC Barcelona, Real Madrid FC, FC Bayern Munich, Classic XI, World XI and Adidas All-Star).</li>
                <li> Players can bring their own controllers and keyboards.</li>
                <li> Players can only pause the game when the ball is out of play during his own possession.</li>
                <li> Consoles are not allowed.</li>
                <li> The team and players' abilities cannot be modified arbitrarily.</li>
                <li> Players on both sides must select the options before they begin the game. The match result will be accepted even if the players, during or after the match, find out each others settings were different from the official settings.</li>
                <li> Player changes and strategy changes are limited to 3 times during the game. (The changes before the start of first and second half are not included in this count.)</li>
                <li> Players must pause the final screen till the official records the result of the match.</li>
                <li>Legacy Defending is not allowed. Anyone found using will be
disqualified from the tournament.</li>
			</ol>
        </div>


          <div class="evencon_box">
            <h3>Game Rules:</h3>
            Preliminary Round:
            <ol>
                <li>In a case of a draw after 90 min, Direct Penalties will be
followed afterwards.</li>
<li>Neutral stadium and knockout matches.</li>
<li>If an odd number of players result after knockouts, the final
decision would be in the hands of the admin.</li>
            </ol>
                Semi-final and final round:
                <ol>
                    <li>Two legs (away goals rule will be followed).</li>
                    <li>In a case of a draw after both fixtures, Classic rule will be followed in extra time.</li>
                    <li>If a winner is not decided after extra time, the winner would be decided on Penalties.</li>
                </ol>
		  </div>


            <div class="evencon_box">
                <h3>Game Settings:</h3>
                <ol>
				    <li>Custom Formations: Allowed.</li>
                    <li>Custom Tactics: Allowed.</li>
                    <li>Half Length: 5 minutes.</li>
                    <li>Difficulty level: World Class</li>
                    <li>Game Speed: Normal.</li>
                    <li>Camera: Any. If the players cannot agree on which camera angle to use, admin shall decide it for them.</li>
                    <li>Injuries: ON.</li>
                    <li>Offside: ON</li>
                    <li>Bookings: ON.</li>
                    <li>Handball: ON.</li>
                    <li>Subs: On Bench-7.</li>
                    <li>Radar: 2D.</li>
                    <li>Time/Score Display: ON.</li>
                    <li>Weather: Clear.</li>
                    <li>Time of day: Day/Night.</li>
                    <li>Defending: Tactical Defending</li>
                    <li> Controller Settings: Players are allowed to choose any controller settings they prefer.</li>
				</ol>
				Decision of the Organiser will be the final decision irrespective of any consequences.
            </div>

	



            <div class="evencon_box">
               <h3>Prizes worth : TBD</h3>
            </div>

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                  <tr>
                  <td>Rashad</td>
                  <td>7907140270</td>
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
            <a href="https://forms.gle/1hZuYCTRRXGJ8tJc9"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
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
            <h3>GENERAL RULES AND REGULATIONS:</h3>
            <ol>
                <li>By entering the LAN GAMING Tournament, you acknowledge the following terms and conditions and agree to adhere to the tournament rules:</li>
                <li>The players are allowed to configure their preferred settings prior to each match (cannot be altered once a match has begun).</li>
                <li>The players are allowed to use their own gaming equipments such as Keyboard, Mouse, Mouse Pad, and Headphones.</li>
                <li>Tournament Officials and Organizers will not be responsible for any loss or damage to the players’ gaming equipment.</li>
            </ol>
            </div>


            <div class="evencon_box">
            <h3>CONTENTS:</h3>
            Game Type:-
			  <ol>
                <li>Host, client will be announced before the match or decided by coin toss. Players can bring their own controllers and keyboards.</li>
                <li>At the end of each match, players must maintain the final screens and receive confirmation from a referee.</li>
                <li>All the participants playing at a time will have to play with the same car.</li>
                <li>The car and the track will be decided by the chit system.</li>
                </ol>
		    </div>

		   <div class="evencon_box">
            <h3>Tournament Format</h3>
            
            Basic Rounds: <br>
            In this round sprint & circuit races will be played. Four participants will be competing in this round at a time. The winner after the race will advance to the next round.<br><br>
            
            
            Advance Rounds:
            <ol>
                <li>In these rounds there will be 3 races between the participants, Four participants will be competing in this round at a time.</li>
                <li>First will be Sprint.</li>
                <li>Second will be 2 lap circuit and the third will be Drag. The participant winning 2 of the 3 races will be in the semi-final. If a participant wins 2 races continuously, then the third race will not be run. This process will be continued until we get top 9 participants.</li>
                <li>In semi-finals there will be 4 races between participants. Three participants will be competing in this round at a time. First will be Sprint, 2nd will be 2 lap circuit, 3rd will be Sprint and 4th will be Drag.</li>
                <li>At the end of all races the participant who wins most races will be advanced to finals. In case of a tie an extra sprint round will be played.</li>
            </ol>
            <br><br>
            
            Finals:<br>In finals there will be 5 races between participants. Three participants will be competing in this round at a time. First will be Sprint, 2nd will be 2 lap circuit, 3rd will be OUTRUN** (details of this race are mentioned at the end of this section), 4th will be Drag and 5th will be sprint. The participant winning 3 races first will win the tournament. In case of a tie an extra sprint round will be played.<br><br>
            
            Outrun** <br>The loop for this race will be NFS World Loop. This loop race will be considered as a sprint race.
            </div>

		    <div class="evencon_box">
            <h3>Game Settings: -</h3>
            <ol>
                <li>The course selection may be changed prior to the tournament.</li>
                <li>Players will be informed of any such changes before the tournament.</li>
                <li>Race Mode Options: Circuit/ Sprint</li>
                <li>Track Direction: Forward</li>
                <li>Number of laps will be decided by admin.</li>
                <li>N2O: ON</li>
                <li>Collision Detection: OFF</li>
                <li>Performance Matching: OFF</li>
                <li>Performance Tuning: OFF</li>
            </ol>
            </div>
            
            		    <div class="evencon_box">
            <h3>Player Options: -</h3>
            <ol>
                <li>Game Moment Camera: OFF</li>
                <li>Car Damage: OFF</li>
                <li>Rear View Mirror: Player’s own discretion.</li>
                <li>Units: Player’s own discretion.</li>
                <li>Intentional Disconnection will be decided by the referee, any offending player will be charged with a loss by forfeit. If the disconnection is deemed to be unintentional by the referee, the match will be restarted. If any player does not agree to a match restart, that player will lose by default.</li>
            </ol>
            </div>

            <div class="evencon_box">
            <h3>Penalty For Unfair Play:</h3>
            <ol>
                <li>Use of any cheat program.</li>
                <li>Intentional disconnection.</li>
                <li>Use of any settings exceeding standard and permitted settings.</li>
                <li>If the match is disrupted due to unnecessary chatting, the player may be given a warning or lose by default at the referee’s sole discretion.</li>
                <li>Upon discovery of any player committing any violations regarded as unfair play that player will be disqualified from the tournament.</li>
                <li>During the course of any match, the operations staff and/or referee may determine other actions to be unfair play at any time.</li>
                <li>Two warnings constitute being disqualified from the tournament.</li>
            </ol>
            </div>
Decision of the Organiser will be the final decision irrespective of any consequences.
            
            <div class="evencon_box">
                <h3>Prizes worth : TBD</h3>
            </div>

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                  <tr>
                  <td>Rohit Verma</td>
                  <td>9571801510</td>
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
            <a href="https://forms.gle/ZeSA5xsF8UkkdgyA6"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
        </div>
</div>

<div class="modal fade pubg modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PUBG MobileTournament</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
            <div class="evencon_box">
            <h3>General Rules:</h3>
            <ol>
                <li>All the qualifying matches will be Classic TPP and will be played on ERANGEL Map.</li>
                <li>Top 25 teams will be selected from the qualifying matches for the final match,
   based on the Ranking System given below.</li>
                <li>Finals will be played on 4 maps viz ERANGLE(FPP), MIRAMAR(TPP),  
   SANHOK(FPP) and VIKENDI(TPP). Points will be given on the basis of total
   number of kills of the whole team and team position.</li>
                <li>Only squad matches will be organized.</li>
                <li>Teams will be given with particular room ID and password 15 minutes prior to the designated match start time for setup. Enter in your respectiveteam slots only.</li>
                <li>You have to take Screenshots as soon as you die(nomatter you are first or last) and the team captain is required to send that screenshot to the game organizer.</li>
                <li>You can play from your own venue.</li>
                <li>Don’t use PC emulator, it will show an icon on your profile and you will be removed from match and your complete squad will be disqualified.</li>
                <li>Some professional players would be spectating the match, Hacking or cheating is not allowed. Cheating by any player will lead to disqualification of the whole team.</li>
                <li>In-game name and real name of every member of the squad must be provided by the captain of the team at the time of registration.</li>
                <li> Tournament bracket size are subject to change based on the total number of eligible teams at the end of registration.</li>

            </ol>
            </div>
Decision of the Organizer will be the final decision irrespective of any
   consequences

                        <div class="evencon_box">
            <h3>RANKING SYSTEM:</h3>
            <ol>
                <li>Points given to a team would depend upon the team position as well as some points for each kill.</li>
                <li>Each kill will contribute 3 points.</li>
                <li>Position points are as given:</li>
                
            <div class="pptable">
              <table>
                  <tr>
                  <td>1st Position</td>
                  <td>100</td>
                </tr>
                                  <tr>
                  <td>2nd Position</td>
                  <td>90</td>
                </tr>
                                  <tr>
                  <td>3rd Position</td>
                  <td>80</td>
                </tr>
                                  <tr>
                  <td>4th Position</td>
                  <td>75</td>
                </tr>
                                  <tr>
                  <td>5th Position</td>
                  <td>70</td>
                </tr>
                                  <tr>
                  <td>6th Position</td>
                  <td>65</td>
                </tr>
                                  <tr>
                  <td>7th Position</td>
                  <td>60</td>
                </tr>
                                  <tr>
                  <td>8th Position</td>
                  <td>55</td>
                </tr>
                                  <tr>
                  <td>9th Position</td>
                  <td>50</td>
                </tr>
                                  <tr>
                  <td>10th Position</td>
                  <td>45</td>
                </tr>
                                  <tr>
                  <td>11th Position</td>
                  <td>40</td>
                </tr>
                                  <tr>
                  <td>12th Position</td>
                  <td>35</td>
                </tr>
                                  <tr>
                  <td>13th Position</td>
                  <td>30</td>
                </tr>
                                  <tr>
                  <td>14th Position</td>
                  <td>25</td>
                </tr>
                                  <tr>
                  <td>15th Position</td>
                  <td>20</td>
                </tr>
                                  <tr>
                  <td>16th Position</td>
                  <td>17</td>
                </tr>
                                  <tr>
                  <td>17th Position</td>
                  <td>14</td>
                </tr>
                                  <tr>
                  <td>18th Position</td>
                  <td>11</td>
                </tr>
                                  <tr>
                  <td>19th Position</td>
                  <td>08</td>
                </tr>
                                  <tr>
                  <td>20th Position</td>
                  <td>05</td>
                </tr>
                                  <tr>
                  <td>21th Position</td>
                  <td>05</td>
                </tr>
                                  <tr>
                  <td>22th Position</td>
                  <td>02</td>
                </tr>
                                  <tr>
                  <td>23th Position</td>
                  <td>02</td>
                </tr>
                                  <tr>
                  <td>24th Position</td>
                  <td>00</td>
                </tr>
                                  <tr>
                  <td>25th Position</td>
                  <td>00</td>
                </tr>

              </table>
            </div>
            <li>Every team captain has to send screenshot of their squad’s final stats as soon as the game ends on WhatsApp number (7742335562)</li>
            <li><b>Total score of each team = Position points + (3*number of kills).</b></li>
            <li><b>Total Score will decide the Team’s Position in the match.</b></li>
            </ol>
            </div>


            <div class="evencon_box">
            <h3>DISQUALIFICATIONS:</h3>
			  <ol>
                <li>Players using Emulators, Triggers, Hacks or any APKs will be disqualified.</li>
                <li>Any kind of abusing, misbehavior with tournament officials or other players is strictly prohibited and is subject to disqualification.</li>
    
              </ol>
		    </div>
                

            <div class="evencon_box">
            <h3>TOURNAMENT  STRUCTURE:</h3>
            <ol>
                <li>Number of teams playing in playoffs would depend on the Number of registrations.</li>
                <li>Maximum number of squads playing the playoffs will be between <b>16 and 25</b>(depending upon the situation).</li>
                <li>Finals will be played between 25 teams.</li>
                <li>Top two teams will be given prizes.</li>
            </ol>
            </div>
            
            
            <div class="evencon_box">
                <h3>Payment Method:</h3>
                <ol>
                    <li>First, all participants have to login into sphinx site (sphinxmnit.in) and make a sphinx ID, this ID is specific to all so save/remember it.</li>
                    <li>After registering on sphinx site, you have to make a payment of <b>Rs120 on the Paytm number 7742335562 (Registered on the name of Bhagchand Balai / Savitar),</b> along with your team name and captain’s name in the Paytm message column as shown below.</li>
                    <br>
                    <img src="images/paytm.jpg" style="width:60%; height: 1%; text-align:center;">
                    <br>
                    <br>
                    <li>After the successful payment the team’s captain has to send the screenshot of the payment to the same<b> WhatsApp number (7742335562)</b>  along with the real name, sphinx id, In-game name, WhatsApp no. of all the 4 team members.</li>
                    <li>After following all these steps, your registration will be considered valid.</li>
                </ol>
            </div>
            
            <h5>NOTE: If you do not follow any of the step mentioned above, your registration will not be considered valid and the payment may not be refunded.</h5>
            
            <h5>NOTE: Any change in Tournament Structure is at the discretion of tournament officials and are subject to change without any prior notice</h5>

		    <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                  <tr>
                  <td>Rishabh Singh</td>
                  <td>7742335562</td>

                </tr>
                <tr>
                  <td>Avinash Kumar</td>
                  <td>7388914232</td>
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
            <a href="" onclick="alert('Read More Details carefully for Registration.')" class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
        </div>
        </div>
        
<div class="modal fade tekken modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TEKKEN 7</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
            <div class="evencon_box">
            <h3> Tournament Structure: -</h3>
            <ol>
                <li>Competition method: 1 vs 1</li>
                <li>There are total 3 round	in preliminaries and quarters (The first player to win 3 rounds will win the match and proceed further).</li>
                <li>Arena – Random or Players choice.</li>
                <li>Each rounds of 60 seconds</li>
                <li>Players can bring their own controllers also.</li>
                <li>The final stats of every match will be recorded by the organizer.</li>
                <li>Round Setup:
                            <ol type="a">
                <li>For Preliminaries/Quarters: win 2 rounds</li>
                <li>For Semis: Best of 3 Arena(s) (each arena has 3 rounds per player)</li>
                <li>For Finals: Best of 3 Arena(s) (each arena has 4 rounds per player)</li>
            </ol>
                </li>
                <li>Any Change in Tournament Rule are subjected to No. of Participation which are in hands of ORGANISER.</li>
            </ol>
            </div>


            <div class="evencon_box">
            <h3>Rules:</h3>
            Game Type:-
			  <ol>
                <li>No round can end in a draw, somehow if this happens by the will of both the players then both of them will be disqualified.</li>
                <li>Every player will be given a one-minute practice match so that he/she can check his/her controls before the match.</li>
                </ol>
		    </div>
		    
		    <h4>NOTE: Any change in Tournament Structure is at the discretion of tournament officials and are subject to change without any further notice.
		    <br>
		    Decision of the Organiser will be the final decision irrespective of any consequences.
		    </h4>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                  <tr>
                  <td>Rohit Verma</td>
                  <td>9571801510</td>
                </tr>
                
                                  <tr>
                  <td>Divyanshu Gupta</td>
                  <td>7891560587</td>
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
            <a href="https://forms.gle/p8wfekBAWjg6TjJe8" class="btn btn-input regist-popshow">Register Now</a>
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
	 overflow-x: hidden; height: 45%;  padding-left: 210px; width:70%;border-radius: 40px 0px 0px 40px; position:absolute; margin:0 auto;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
	position:absolute; width:22%; top:150px; left:39%;
}
.rbtlc{
    width: 300px;
}
.rbtle{
   height: 320px;
}


</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/labyrinth4.png" class="title_img">
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">CSGO</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;">
					    <br>
					    At twenty-five years of age, after university, festivities, 70 hour work-weeks, concerts, <b>ZED</b> has not yet lived the typical gamer life. He makes a brand new start of his gaming journey with CS GO.
Counter-Strike is a man's struggle against temptation and their ability to succeed at risk-management. So help <b>ZED</b> weigh the risks and win rewards with every move!
</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".csgo"><span  style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="https://forms.gle/LyxojWvsJWTADDfv5" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span  style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">FIFA 19</div></center>
                   
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif; ">
					    <br>
					    
					    <b>ZED</b>, an aficionado of soccer has been really sweating it out in the field to somehow get into the college team. But unfortunately an injury on his left knee left him bedridden and discouraged, but still his enthusiasm for soccer doesn’t die .He starts trying his hands on FIFA. So it’s your chance to show off your skills and tactics among the best in business.</p>
					
					
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".fifa"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="https://forms.gle/1hZuYCTRRXGJ8tJc9" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span  style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">NFS</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><br>
					    <b>ZED</b>, a speedster who loves to wander around the town isn’t really getting the kick.
So he takes onto the game of NFS, which is all about running from the law and trying to finish first. So now here’s an opportunity for you all to be a part of the story of slowly climbing up the Most Wanted List  and to beat’em all.
 </p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".nfs"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="https://forms.gle/ZeSA5xsF8UkkdgyA6" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">PUBG</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;">People talking about guns, scopes and grenades even while being glued to their mobile phones is now a common sight as they are busy playing the most famed mobile game till date, PUBG .Like most of us, <b>ZED</b> feels that his squad is pro at this game .He thus gives an open challenge to all the PUBG enthusiasts out there to beat his squad, if they can. Participate in this event if you want to grab the unusual chance of getting appreciation instead of being scolded by others for playing on mobiles. </p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".pubg"><span  style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="" onclick="alert('Click on More Details for registration')" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span  style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Tekken 7</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"> </p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".tekken"><span  style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="https://forms.gle/p8wfekBAWjg6TjJe8" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span  style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
