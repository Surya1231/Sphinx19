<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Cadastrophe"){
		$min=1;
		$max=3;
	} else if($event == "Advert-maniacs") {
	    $min=3;
	    $max=5;
	} else if($event == "Quiztopher") {
	    $min=2;
	    $max=2;
	} else if($event == "model/poster-making") {
	    $min=1;
	    $max=1;
	}
	else if($event == "Digital-Camera-Photography-Contest") {
	    $min=1;
	    $max=1;
	}
	else if($event == "Mathematica") {
	    $min=3;
	    $max=3;
	}
		else if($event == "Economization") {
	    $min=2;
	    $max=2;
	}
	else if($event == "Social-challenge") {
	    $min=6;
	    $max=10;
	}
	else if($event == "DUEL-THE-DEAL") {
	    $min=2;
	    $max=2;
	}
	else if($event=="Picathon") {
		$min=1;
		$max=1;
	}
	else if($event=="Lensational") {
		$min=1;
		$max=1;
	}
	else
	{
		header("Location:socevents.php");
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
        <input type="hidden" name="event_type" value="SOC events">
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

<div class="modal fade Cadastrophe  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CADastrophe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
						CAE Society presents to you “CADastrophe”, a design challenge that will spur you to think outside the box and prove your mettle and creativity.

	 You have to create a 3D model using Autodesk AutoCAD, Inventor and Fusion 360.

 </div>

  <div class="evencon_box">
            <h3>Event Description:</h3>
						A problem statement will be provided based on which you have to provide the following files:
			<ul class="checboxlist">
				<li>3D model file of any above-listed software.</li>
<li>Rendered images in .jpeg format.</li>
<li>A Presentation file of the design including the feasibility, manufacturing
          details and estimated cost report.</li>
			</ul>
			The problem statement will be released on the social media pages of CAE Society & SPHINX  a few days prior to the start of the fest.
<br>
There will be a presentation round in which the participants are required to give a short presentation of their design and submit the above-mentioned files.


	</div>

	<div class="evencon_box">
		<h3>CERTIFICATES AND PRIZES:</h3>
		<ul class="checboxlist">
			<li>Top 3 teams will be awarded Certificates and Cash Prizes.</li>
			<li>Certificates and Cash prizes will also be awarded to the team with “Best Innovative Model” (apart from the top 3 teams).</li>
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
                  <td>Saumay Gupta</td>
                  <td>+918947878575</td>
				  <td>2017UME1353@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>ParamPreet</td>
                  <td>+918433474126</td>
				   <td>2017UME1451@mnit.ac.in</td>
                </tr>

								<tr>
                  <td> Pulkit Aggarwal</td>
                  <td>+917834962157</td>
				  <td>2017UME1616@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Adit Agarwal</td>
                  <td>+919785988778</td>
				   <td>2017UME1136@mnit.ac.in</td>
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
            <a  href="mechanical.php?event=Cadastrophe"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade model/poster-making modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Model/Poster Making</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Event description</h3>
         <ul class="checboxlist">
             <li>Open to all UG/PG as well as research scholars
</li>
             <li>Participants can make model/posters to convey their ideas related to given topics:
             <ol>
                 <li> Energy storage</li>
                 <li>Space physics and related technology</li>
                 <li> Communication technology</li>
                 <li> Quantum technology(sensing, communication, computing)</li>
                 <li> Medical physics</li>
                 <li>Air filters</li>
             </ol>
             </li>
         </ul>
		 </div>

		 

		   


          <div class="evencon_box">
            <h3>Format</h3>
           Participants will be given 3-5mins to represent their models

			</div>



			 <div class="evencon_box">
            <h3>Rules and Regulations</h3>
            <ul class="checboxlist">
                <li>Every team have to register for Sphinx</li>
                <li>Every team consist of a max of two members (individual entries allowed)</li>
                <li>Final decision of selection committee shall be treated as final and binding to all</li>
            </ul>
          </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Honey Tyagi </td>
                  <td>9599156855</td>
				  
                </tr>

                <tr>
                  <td>Naman Jain  </td>
                  <td> 9953374346</td>
				  
                </tr>
                 <tr>
                  <td>Sudhava</td>
                  <td>7838209243</td>
				   
                </tr>
                <tr>
                  <td>Yashika </td>
                  <td>9053838281</td>
				   
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
            <a href="socevents.php?event=model/poster-making"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Quiztopher modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QUIZTOPHER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Event description</h3>
         Be prepared to test your knowledge of fundamental physics and it's application in technology. Crystal clear concepts of fundamental physics might bestow you with a prize.


         </div>

		   <div class="evencon_box">
            <h3>Rules and regulations:</h3>
			
            <ul class="checboxlist">
<li>.Every team has to register for Sphinx
</li>
<li>There will be three rounds in total
</li><li>Participants have to participate in team of 2
</li>



            </ul>
            
          </div>
          
          <div class="evencon_box">
            <h3>Round description</h3>
         <ul class="checboxlist">
            <li><u>Round 1:</u>Screening round with total 25 questions each carrying one mark time allowed is 20min.
Shortlisted teams will qualify for next round
</li>
            <li><u>Round 2:</u> Picture perception round
</li>
            <li><u>Round 3</u>Buzzer round ( negative marking each for wrong answers)</li> 
         </ul >
            
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
                  <td>Honey Tyagi </td>
                  <td>9599156855</td>
				  
                </tr>

                <tr>
                  <td>Naman Jain </td>
                  <td> 9953374346</td>
				   
                </tr>
                 <tr>
                  <td>Sudhava</td>
                  <td>7838209243</td>
				   
                </tr>
                <tr>
                  <td>Yashika</td>
                  <td>9053838281</td>
				   
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
            <a href="socevents.php?event=Quiztopher"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Advert-maniacs modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AD MAD SHOW</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Event description</h3>
  <b>AD MAD Show</b>is an <b>'Advertisement Making Competition'</b> for Engineering and B School students to showcase their creativity in Marketing products and services. Its objective is to acquaint the students about promotional strategies in marketing through advertisements. It comprises of humorous & conceptual ad presentation by the students. Students will act out on various advertisement script and ideas relevant for different sectors including FMCG product, while goods, services, automobiles and social awareness etc. All the teams will be given a time frame to showcase their talent.The entire event updates will be made available on the website <a href="www.sphinxmnit.in" style="color: blue">www.sphinxmnit.in</a>. To stay updated with the latest developments you can also like our Facebook page <a href="www.facebook.com/mnit-dms" style="color:blue">www.facebook.com/mnit-dms</a>.<br>
  
  Bring out the creativity inside you and make an outstanding advertisement of your own. Be it hilarious or sensitive, be it just your creativity and ad sense.


         </div>

		   <div class="evencon_box">
            <h3>Format:</h3>
			
            <ol>
<li>Group Event.</li>
<li>The Maximum time allowed for performance is 3 minutes.</li>
<li>Team Size: 3 – 5</li>



            </ol>
            
          </div>
          
          <div class="evencon_box">
            <h3>Screening Round:      Keep Thinking Marketing</h3>
         <ol>
            <li>In the round 1, the participants will have to come prepared & present an  advertisement for a product/service of their choice.
</li>
            <li>Different forms of expression like a short skit, jingles, slogans or any other innovative form can be incorporated.</li>
            <li>The ad prepared by the contestant must not contain any obscene words/any subject that hurts the feelings of a culture/language/religion/region.</li> 
         </ol >
            
         </div>
         
                   <div class="evencon_box">
            <h3>Final Round:    Impromptu
</h3>
         <ol>
            <li>The selected top 10 teams will be competing in this round.

</li>
            <li>In this round certain products or name of services will be given and the teams have to prepare an advertisement for it.</li>
            <li>Different forms of expression like a short skit, jingles, slogans or any other innovative form can be incorporated</li> 
            <li>20 minutes will be given to each team for preparation.</li>
            <li>Time Limit for presentation: 3 Minutes</li>
         </ol >
            
         </div>
         
                            <div class="evencon_box">
            <h3>Rules And Regulations:

</h3>
         <ol>
            <li>All participants must carry their college ID Cards.

</li>
            <li>Every team has to register for SPHINX.</li>
            <li>The teams must bring their own props and music CD.</li> 
            <li>All props are allowed except for the following:
            <ol type="a">           
            <li>Swords, knives, or any other sharp objects (unless plastic – but must be approved prior to performance)</li>
            <li>Fire in any form (candles, torches, etc.)</li>
            <li>Fog or smoke</li>
            <li>Helium balloons</li>
            <li>Special lighting</li></ol>
            </li>
            <li>The final decision of judges and event coordinators shall be treated as final and binding to all.</li>
         </ol >
            
         </div>
         
                                     <div class="evencon_box">
            <h3>Judging Criteria:

</h3>
The teams will be judged on following criterion—
         <ol>
            <li>Advertisement’s content – How humorous it is.</li>
            <li>Expressions</li>
            <li>The presenter’s fluency</li> 
            <li>Creativity</li>
            <li>Customer appeal</li>
            <li>Stage presence</li>
         </ol >
            
         </div>
         
         
         <div class="evencon_box">
            <h3>Awards:</h3>

         <ol>
            <li>Top 3 teams will be awarded with cash prizes and certificates.</li>
            <li>The remaining teams will be awarded with the participation certificates.</li>
         </ol >
            
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
                  <td>Diksha</td>
                  <td>9882591465</td>
				  <td>2018pbm5247@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Tripti Pandey</td>
                  <td>9451224099</td>
                  <td>2018pbm5269@mnit.ac.in</td>
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
            <a href="socevents.php?event=Advert-maniacs"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Digital-Camera-Photography-Contest modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SPIE Student Chapter MNIT - Digital Camera Photography Contest</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Event Description:</h3>
The SPIE Digital Camera Photography Contest 2019 is organized to raise public awareness about the vital role played by light and its related technology in our daily lives. This contest gives professional and amateur photographers alike, the opportunity to show how light impacts the cultural, economic, and political aspects of our global society. The theme of this photography contest is <b>“A World of Light: The Vital Role That Light and Light-Based Technologies Play in Daily Life”.</b> This broad theme of light allows many different sectors of society to participate in activities that demonstrate how science, technology, art, and culture can help achieve the goals of education, equality, and peace.
</div>

		 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            
            <ol>
                <li><b>Eligibility</b>: Open to all students having a valid college ID card. Only one entry per student is permitted.</li>
                <li>Submissions will not be accepted after the deadline.</li>
                <li>Photos submitted must not be less than 3MB, and not more than 7MB. Photos must be in JPEG format.</li>
                <li>You are required to provide a unique title & description for each image submitted. The artist statement should also include the location and date the image was taken, the equipment used to capture the image, any adjustments made to the image, a description of how it is tied to the contest’s theme, and any other interesting details about the photo.</li>
                <li>Photos must be original and not taken through the internet or any other sources; each image will be crossed checked by our team.</li>
                <li>All submitted photos must contain the original EXIF metadata information. However, there must be no border(s), logo(s), copyright marks, identifying marks, or any other visible references and/or marks on the image.</li>
                <li>Basic editing, including color enhancement, the use of filters, and cropping of the Photo(s) is acceptable, provided any such editing does not affect the authenticity and/or genuineness of the Photo(s).</li>
                <li>Advanced editing used to create illusions, deceptions and/or manipulations, and the adding and removing of significant elements within the frame is prohibited.</li>
                <li>Organizers reserve the right to assess and disregard any submitted photo at their discretion.</li>
                <li>Photos that portray or otherwise include inappropriate and/or offensive content, violence, human rights and/or environmental violation, and/or any other contents deemed to be contrary to the law, religious, cultural & moral traditions and practices of India, are strictly prohibited and will be immediately discarded. A participant who submits any such photos may be permanently banned, subject to Organizer’s discretion, from participating in any future contests.</li>
                <li>Each entrant grants SPIE MNIT Student branch chapter a royalty-free, worldwide, perpetual, non-exclusive license to display, distribute, copy, and reproduce in any medium images submitted to the photo contest, and to use the images in derivative works such as posters, articles, or via any means or form of dissemination.</li>
            </ol>
		 </div>
		 
		 <div class="evencon_box">
            <h3>Judging Criteria</h3>
            Each photograph will be judged on the following criteria:
            <ol>
                <li>Content: Appropriateness and coverage of content in relation to the theme.</li>
                <li>Scientific interest: Overall effectiveness in engaging and communicating the contest theme to viewers.</li>
                <li>Creativity/artistry: Innovation and creativity in the concept.</li>
                <li>Execution: Execution of photography techniques used to enhance the quality and content of entries.</li>
            </ol>
		 </div>
		 
		 <div class="evencon_box">
            <h3>Judging</h3>
            Judging will be conducted by a panel of judges selected by the SPIE MNIT Student Chapter and may include SPIE MNIT Student Chapter officers. Decisions of the organizer and judges are final and binding.
		 </div>
		 
		 <div class="evencon_box">
            <h3>Theme:</h3>
            
            <b>“A World of Light: The Vital Role That Light and Light-Based Technologies Play in Daily Life”</b> <br><br>
            
             Examples of content include, but are not exclusive to, artistic images that depict:
             <br><br>
        
            <ol>
                <li>Various properties of light and how it interacts with the atmosphere, nature, and materials.</li>
                <li>Light technology such as lasers, LEDs, etc.</li>
                <li>Images created with light technology such as telescopes and microscopes.</li>
                <li>People interacting with light and/or light technology.</li>
                <li>The betterment of the human condition with light.</li>
                <ol>
		 </div>
		 
		 <div class="evencon_box">
            <h3>Sample images can be found at:</h3>
            
            <a href="https://spie.org/about-spie/international-day-of-light/spie-idl-photo-contest?SSO=1" style="color: blue">https://spie.org/about-spie/international-day-of-light/spie-idl-photo-contest?SSO=1</a>
            <br>
            &&
            <br>
            <a href="https://spie.org/about-spie/international-day-of-light/spie-idl-photo-contest?SSO=1" style="color: blue">https://spie.org/about-spie/international-day-of-light/spie-idl-photo-contest?SSO=1</a>
        
            
            <h3>Important Dates:</h3>
            <br>

            <b>Contest opens</b>: October 26, 2019<br>
            <b>Contest closes</b>: November 6, 2019 (Before 5.00 pm)<br>
            <b>Winners announced on</b>: November 8, 2019<br>
            
            Prizes:<br>
            <ol>
                <li>1st Place: ₹1500/- + certificate of appreciation</li>
                <li>2nd Place: ₹1000/- + certificate of appreciation</li>
                <li>3rd Place: ₹500/- + certificate of appreciation</li>
            </ol>
            Certificates of participation will be awarded to the remaining participants. <br>
            Winners:  List will be notified individually by email or telephone.
		 </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Bipin</td>
                  <td>bipin.ece@mnit.ac.in</td>
                  <td>9549650140</td>
                </tr>

                <tr>
                  <td>Ashish</td>
                  <td>ashish.ecmnit12@gmail.com</td>
                  <td>9461230731</td>
                </tr>
                
                <tr>
                  <td>Chaithanya</td>
                  <td>2018REC9029@mnit.ac.in</td>
                  <td>9640644567</td>
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
            <a href="https://forms.gle/zyh6PNKuUBioHDcMA" class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Mathematica modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mathematica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
For the proficient mathematicians who love to be challenged every now and then and have calculations running at all times in their brains , Sphinx’19 presents Mathematica for all interested. Be ready with your quantitative skills, use them wisely and win lots of exciting prizes.
</div>

		 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            1. Reading is an art, so read the instructions carefully. 5 extra minutes are provided for this. 

<br>2. Total number of rounds: 3
      Round 1: Will have 50 multiple choice questions and time limit will be 30 minutes.
      Round 2: Will have two tasks each of 15 minutes and that will be disclosed to the selected teams for                     round 2 and
      Round 3: It will be a final round and it will be of 1 hour containing 2-3 rounds.
     
<br>3. An answer sheet is provided at the end. Only the answers marked there will be considered for the score. 

<br>4. Before attempting the question paper, please mention (on the answer sheet) your `Mathematica Team Number, Sphinx ID, Names of the participants and name of the academic institution to which the participants belong. 

<br>5. Every question has ONLY one correct option as answer. Each question carries +3 points for a correct answer, 0 points if left un-attempted and minus (-1) point in all other cases. 

<br>6. During the quiz, in case if a participant finds a typo in the paper, or has a doubt regarding any question, he/she is supposed to raise his/her hand till a member of the organizing team turns up. 

<br>7. Time taken to complete a particular round will be considered in the judging criteria, rest depends on your number of correct answers.

<br>8. Use of any unfair means shall lead to immediate disqualification. 

<br>9. The decision of the quiz master in case of any dispute will be final and will not be subjected to any change.

<br>10. The results of Round-I will be announced 30 minutes after the end of Round-I. The participants are required to be back at the same room after the said duration. 

<br>11. This is a group contest and the strength of group should be EXACTLY  3 (Strength lies in unity) 

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
                  <td>ISHA DEEP</td>
                  <td>2019pma5673@mnit.ac.in</td>
                  <td>+918955651645</td>
                </tr>

                <tr>
                  <td>SUMIT BANSAL</td>
                  <td>2019pma5657@mnit.ac.in</td>
                  <td>+917793076902</td>
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
            <a href="socevents.php?event=Mathematica"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Economization modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Economization</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
One may take part in this event trusting their instincts or their knowledge of basic concepts of Economics. This enthralling event of Economization will take part in two rounds. First is the quiz competition where you will be asked simple questions related to real life implementation of economics, like profit or loss. The second and the mesmerising and thrilling part of the event is where teams will have to bid for different companies and have to maximise their overall profit from companies and technologies they buy. The real play will begin when your instincts fire well and suddenly your company pays off due to changing circumstances.
</div>

		 <div class="evencon_box">
            <h3>Objective:</h3>
            
            <ol>
                <li>To impart training of basic economic tools</li>
                <li>To inculcate the best decision-making in real world scenario</li>
            </ol>
		 </div>
		 
		 <div class="evencon_box">
            <h3>Rules: </h3>
            <ol>
                <li>There will be a total of 10 teams, comprising of 2 members in each team. </li>
                <li>The selection of these 10 teams will be based on the screening test. The screening test will have question related to the basic concepts of economics.</li>
                <li>This game is solely for the 1st year students.</li>
                <li>Each team will be provided virtual cash that will be used by them to bid and buy the companies and technologies present in the virtual market in the game.</li>
                <li>Teams have to choose the companies wisely based on the profit they generate and pollution they cause and other surprise factors mentioned.</li>
            </ol>
        </div>
        
        		 <div class="evencon_box">
            <h3>ROUND 1: </h3>
            The round one judging criteria is the points scored in the quiz<br>
            The marking scheme for the quiz will be +4 for correct answer and -1 for wrong answer.
            <h3>ROUND 2:</h3>
            In this round points will be awarded for the overall profit made by the companies a team buys. Points will be deducted for pollution caused and other harms caused to environment by the company.<br>
            No points will be awarded for the virtual cash remaining at the end of the game.
            
            <h3>PRIZE MONEY</h3>
            
            <b>Top three teams will be given cash reward and certificates will be provided to top ten teams</b>
        </div>

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Prakrati Sharma</td>
                  <td>9413658156</td>
                </tr>

                <tr>
                  <td>Tavish Nain</td>
                  <td>6375590533</td>
                </tr>
                
                <tr>
                    <td>Sumedha Bhatnagar</td>
                    <td>9772555599</td>
                </tr>
                
                <tr>
                    <td>Surbhi Sethi</td>
                    <td>9462448301</td>
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
            <a href="socevents.php?event=Economization" class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade Social-challenge modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Social Challenge</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
            The game is designed to create mass awareness among the students and staff around the campus. Social challenge as the name suggests will include teams to indulge themselves into the topic allotted to them and spread the word into the maximum possible heads around the campus.The game will include teams who will take one social topic each on which they have to create awareness in the campus. The team who gets the maximum reach in the campus will win. Teams can use these three methods to create awareness or as per their creativity-
            <ol>
                <li>FIRST through <b>posters and slogans</b></li>
                <li>SECOND through <b>nukkad natak</b></li>
                <li>THIRD through <b>flash mob</b></li>
            </ol>
            
            The team has these three methods to create awareness. Team can either use these three methods or up to their convenience and creativity. 
</div>

		 <div class="evencon_box">
            <h3>Objective:</h3>
            
            To sensitize students and other people around the campus about social issues and to motivate them to take suitable action to resolve those issues. 
		 </div>
		 
		 <div class="evencon_box">
            <h3>Rules: </h3>
            <ol>
                <li>A team should consist of minimum 6 and maximum 10 members.</li>
                <li>Teams will be allotted 1.5 hours each to spread awareness around the campus inclusive of preparation and presentation.</li>
                <li>Teams will be allotted with their respective topics on the basis of chit system at the beginning of the game by the supervisory committee.</li>
                <li>Teams need to cover all the four directions of the campus i.e. North: VLTC, South: Library, central lawn and MBA department, West: Annapurna canteen, East: Dispensary and open theatre.</li>
                <li>Apart from these four directions, teams are free to cover other side of the campus as well according to their convienenice.</li>
                <li>A team of volunteers will be present at every direction of the campus to evaluate the team.</li>
            </ol>
        </div>
        
        		 <div class="evencon_box">
            <h3>EVALUATION</h3>
             It will be based on the video made by volunteers spread in four directions of the MNIT campus and feedback from the volunteers.
        </div>
        
        <div class="evencon_box">
            <h3>SUPERVISION</h3>
             Committee from Humanities and Social Sciences, MNIT Jaipur will be responsible for supervision by the end of the game.
        </div>

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>NAMRATA BHARDWAJ</td>
                  <td>9828805883</td>
                </tr>

                <tr>
                    
                  <td>VARSHALI BRAHMA</td>
                  <td>8011529287</td>
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
            <a href="socevents.php?event=Social-challenge" class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade DUEL-THE-DEAL modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DUEL THE DEAL- Tug of war redefined</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
<b>ZED</b> says, “I can't wait to be part of all the crazy events of Sphinx'19! Have you heard of Duel The Deal? They're reimagining tug of war and this time its going to be about wits and words in the bizworld. <b>ZED</b> already got an adrenaline rush and I'm sure it's going to be a total blast! See you all there!" 
</div>

		 <div class="evencon_box">
            <h3>FORMAT:</h3>
            
            <ol>
                <li>Participate in a team of 2. </li>
                <li>At the venue, 2 teams will be randomly assigned a company each, working in the same domain, given one conventional and the other contemporary.</li>
                <li>After allotting companies 5 minutes preparation time will be provided before the competition begins. You can use internet for research during this time.</li>
                <li>Both teams will be given 3 minutes to put forward their points in defense. The competition is head on which allows both teams to draw parallels on the same points at the same time. </li>
                <li>You will be judged by a panel of startup mentors. The team that draws concise and crisp parallels within the stipulated time wins.</li>
            </ol>
		 </div>
		 
		 <div class="evencon_box">
            <h3>WHEN? and WHERE? </h3>
            
            Day 2- Nov 7,2019 – VLTC 306 at 11 am. 

        </div>
        
        		 <div class="evencon_box">
            <h3>Prizes</h3>
            <ol>
                <li>1st Prize: INR 3,000 </li>
                <li>2nd Prize: INR 2,000 </li>
                <li>3rd Prize: INR 1,000 </li>
            </ol>
        </div>
        

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Shubh</td>
                  <td>7840047578</td>
                </tr>

                <tr>
                    
                  <td>Aditya</td>
                  <td>9559224437</td>
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
            <a href="socevents.php?event=DUEL-THE-DEAL" class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Picathon  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MyNIT:  Photography and Short Video Contest (Picathon)
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Introduction</h3>
            
            The students and alumni are both ambassadors and supporters of the institute. They withhold the capability to define what MNIT means to them, what feeling does it encapsulates, what makes its unique selling point, what emotion does MyNIT reflect and therefore what does the MNIT or MyNIT stands for. Through MyNIT: Photography and Short Video Contest, students will be encouraged to express their viewpoints about MNIT in a succinct form of either a photograph or/ and 90 second short video along with a tagline and a written or verbal justification for the same. The students can submit their entry for either one or both the contests, i.e Photography and Short Video Contest. 
All the entries must be sent on sphinx facebook page.



		 </div>

		 

		   <div class="evencon_box">
            <h3>Use of Submissions</h3>
In applying to the contest, participants agree that their photos and/or videos may be used by Malaviya National Institute of Technology for the purposes of promotion, advertising, and written and electronic documentation.
          </div>
          
          <div class="evencon_box">
              <h3>Ownership of submissions</h3>
              All photos and short videos submitted to the MyNIT: Photography and Short Video Contest become the property of the Malaviya National Institute of Technology.           </div>
          
          <div class="evencon_box">
              <h3>Important</h3>
              <ul class="checboxlist">
                  <li>You may submit up to three photographs along with this form.</li>
                  <li>	Each photo must be accompanied by a tagline and a brief statement of about 50 words justifying the photograph. </li>
                  <li>We are looking for original photographs that embrace the emotion of MyNIT.</li>
                  <li>All submissions must be submitted via facebook sphinx page.  no later than 8 november 4 pm. Please note late entries won’t be entertained. </li>
                  
              </ul>
          </div>
          
          <div class="evencon_box">
              <h3>Selection criteria:</h3>
              <ul class="checboxlist">
                  <li>	Quality of the photo. </li>
                  <li>	Originality of the photo.</li>
                  <li>	Quality of the statement accompanying your photo.</li>
              </ul>
          </div>
          
          <div class="evencon_box">
              <h3>Terms and conditions </h3>
              1. Each entry should be accompanied by a brief written Justification of at least 50 words and Tagline and how best it encapsulates its essence. <br>
2. The contest is open to all students of MNIT. The entry can be an individual project or a team project but should be represented by an individual only.<br>
3. Each participant / team can submit multiple entries. The submission of entry is free. <br>
4. The photograph or short video must be original and should not violate any provision of the Indian Copyright Act, 1957 or the Intellectual Property Rights of any third party. The logo should not have been previously published in any print and digital media and must not contain any provocative, objectionable or inappropriate or otherwise prohibited obscene content.<br>
 5. In case of any copy right issues, the participant/applicant shall be solely responsible to settle all and any legal proceedings that may arise out of such actions and to indemnify the institute fully. <br>
6. Plagiarism of any nature is not allowed. Anyone found infringing any copyright stand automatically disqualified from the contest, apart responsible for other legal consequences.<br>
 7. All entries are governed by the provisions of Emblems and Names (Prevention of improper use) Act, 1950 and any violation of the said Act will result in disqualification, apart legal consequences.<br>
 8. Participants must make sure that the details ( such as the name, complete postal address, email ID and phone number etc.,) shared about themselves are accurate and updated as the department may use the same for further communication. Entries with incomplete profiles would not be considered. <br>
9. The onus will be on the participant/applicant to prove that he/she is the only authorized representative to send the entry for MyNIT. In case of the selection for an award, it will be given to the participant only. MNIT, in no case, be responsible for any dispute, legal or otherwise, arising out of it. <br>
10. The responsibility to comply with the Submission of entries, Competition Technical Criteria and Selection Process fully lies with the participant(s) and MNIT shall not be answerable to any dispute raised by a third party.<br> 
11. MNIT takes no responsibility for corrupted or late entries.<br> 
12. The winning photograph and short video shall be the intellectual property of the Malaviya National Institute of Technology  and the winner cannot exercise any right over it, after acceptance of the prize. <br>
13. The winning photograph and short video is meant to be used by any/all departments within the MNIT for promotional and display purposes, information, Education and Communication materials and also for any other uses as may be deemed appropriate by the institute. The participants would be required to surrender copyright of the design to the institute.<br> 
14. The photograph and short video should be usable on the website / mobile app / social media such as Twitter / Facebook / Instagram and on Magazines, Commercial Hoardings / Standees, Brochures, Leaflets and Pamphlets, Souvenirs and other Publicity and Marketing materials.<br>
15. There shall be no notification to participants of rejected entries. <br>
16. MNIT reserves the right to cancel or amend all or any part of the Contest and/ or the Terms & Conditions/ Technical Parameters/ Evaluation Criteria. However, any changes to the Terms & Conditions/ Technical Parameters/ Evaluation Criteria, or cancellation of the Contest, will be updated/posted on the website. It would be the responsibility of the participants to keep themselves informed about any extant changes in the Terms & Conditions /Technical Parameters /Evaluation Criteria stated for this Contest. <br>
17. The winning entry will be considered for award of……..& a certificate . The second and third best entries will be considered for award of ……. and ……… respectively <br>
18. Result and Submissions will be done on sphinx facebook page.<br>

          </div>
          
          <div class="evencon_box">
              <h3>Prizes:-</h3>
              <b>Prizes Worth: Rs.3000/-</b>
          </div>

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Purva Bhatt </td>
                  <td>2019RHS9126</td>
				  <td>9929274947</td>
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
            <a href="socevents.php?event=Picathon"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Lensational  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MyNIT:  Photography and Short Video Contest (Lensational)
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Introduction</h3>
            
            The students and alumni are both ambassadors and supporters of the institute. They withhold the capability to define what MNIT means to them, what feeling does it encapsulates, what makes its unique selling point, what emotion does MyNIT reflect and therefore what does the MNIT or MyNIT stands for. Through MyNIT: Photography and Short Video Contest, students will be encouraged to express their viewpoints about MNIT in a succinct form of either a photograph or/ and 90 second short video along with a tagline and a written or verbal justification for the same. The students can submit their entry for either one or both the contests, i.e Photography and Short Video Contest. 
All the entries must be posted on sphinx facebook page.



		 </div>

		 
		   <div class="evencon_box">
            <h3>Use of Submissions</h3>
In applying to the contest, participants agree that their photos and/or videos may be used by Malaviya National Institute of Technology for the purposes of promotion, advertising, and written and electronic documentation.
          </div>
          
          <div class="evencon_box">
              <h3>Ownership of submissions</h3>
              All photos and short videos submitted to the MyNIT: Photography and Short Video Contest become the property of the Malaviya National Institute of Technology.           </div>
          
          <div class="evencon_box">
              <h3>Important</h3>
              <ul class="checboxlist">
                  <li>	The video should not exceed the time duration of 90 seconds.</li>
                  <li>		Your video should focus on the theme MyNIT (as also given in the introduction) </li>
                  <li>•	Each video must be accompanied by a tagline and a brief statement of about 50 words justifying the video. </li>
                  <li>	The deadline for submitting a short video via …… is July …….. Late entries will not be entertained.  </li>
                  <li>	Kindly check the reference videos for more clarity</li>
                  
              </ul>
          </div>
          
          <div class="evencon_box">
              <h3>Selection criteria:</h3>
              <ul class="checboxlist">
                  <li>		Presence of the themes mentioned in the introduction. </li>
                  <li>		Originality.</li>
                  <li>	Relevance.</li>
              </ul>
          </div>
          
          <div class="evencon_box">
              <h3>Terms and conditions </h3>
              1. Each entry should be accompanied by a brief written Justification of at least 50 words and Tagline and how best it encapsulates its essence. <br>
2. The contest is open to all students of MNIT. The entry can be an individual project or a team project but should be represented by an individual only.<br>
3. Each participant / team can submit multiple entries. The submission of entry is free. <br>
4. The photograph or short video must be original and should not violate any provision of the Indian Copyright Act, 1957 or the Intellectual Property Rights of any third party. The logo should not have been previously published in any print and digital media and must not contain any provocative, objectionable or inappropriate or otherwise prohibited obscene content.<br>
 5. In case of any copy right issues, the participant/applicant shall be solely responsible to settle all and any legal proceedings that may arise out of such actions and to indemnify the institute fully. <br>
6. Plagiarism of any nature is not allowed. Anyone found infringing any copyright stand automatically disqualified from the contest, apart responsible for other legal consequences.<br>
 7. All entries are governed by the provisions of Emblems and Names (Prevention of improper use) Act, 1950 and any violation of the said Act will result in disqualification, apart legal consequences.<br>
 8. Participants must make sure that the details ( such as the name, complete postal address, email ID and phone number etc.,) shared about themselves are accurate and updated as the department may use the same for further communication. Entries with incomplete profiles would not be considered. <br>
9. The onus will be on the participant/applicant to prove that he/she is the only authorized representative to send the entry for MyNIT. In case of the selection for an award, it will be given to the participant only. MNIT, in no case, be responsible for any dispute, legal or otherwise, arising out of it. <br>
10. The responsibility to comply with the Submission of entries, Competition Technical Criteria and Selection Process fully lies with the participant(s) and MNIT shall not be answerable to any dispute raised by a third party.<br> 
11. MNIT takes no responsibility for corrupted or late entries.<br> 
12. The winning photograph and short video shall be the intellectual property of the Malaviya National Institute of Technology  and the winner cannot exercise any right over it, after acceptance of the prize. <br>
13. The winning photograph and short video is meant to be used by any/all departments within the MNIT for promotional and display purposes, information, Education and Communication materials and also for any other uses as may be deemed appropriate by the institute. The participants would be required to surrender copyright of the design to the institute.<br> 
14. The photograph and short video should be usable on the website / mobile app / social media such as Twitter / Facebook / Instagram and on Magazines, Commercial Hoardings / Standees, Brochures, Leaflets and Pamphlets, Souvenirs and other Publicity and Marketing materials.<br>
15. There shall be no notification to participants of rejected entries. <br>
16. MNIT reserves the right to cancel or amend all or any part of the Contest and/ or the Terms & Conditions/ Technical Parameters/ Evaluation Criteria. However, any changes to the Terms & Conditions/ Technical Parameters/ Evaluation Criteria, or cancellation of the Contest, will be updated/posted on the website. It would be the responsibility of the participants to keep themselves informed about any extant changes in the Terms & Conditions /Technical Parameters /Evaluation Criteria stated for this Contest. <br>
17. The winning entry will be considered for award of……..& a certificate . The second and third best entries will be considered for award of ……. and ……… respectively <br>

          </div>
          
          <div class="evencon_box">
              <h3>Prizes:-</h3>
              <b>Prizes Worth: Rs.3000/-</b>
          </div>

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Purva Bhatt </td>
                  <td>2019RHS9126</td>
				  <td>9929274947</td>
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
            <a href="socevents.php?event=Lensational"  class="btn btn-input regist-popshow">Register Now</a>
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

</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/socevents.png" class="title_img">
  <section class="contentbox_pwr" style=" ">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">


            <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Quiztopher</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> is profoundly enthusiastic about fundamental physics and its application in technology. Overwhelmed with the colossal technical knowledge, <b>ZED</b> now wants to check if you too are a physics aficionado. ‘Quiztopher’ is thus <b>ZED</b>'s way to tickle the physics maniac inside you by taxing you with an electrifying quiz. Your grip on fundamental concepts in physics would be a weapon to overcome the challenges in this exhilarating battle of physics geeks.
So it's about time that you register for Quiztopher to win massive prizes.

</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Quiztopher"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents.php?event=Quiztopher" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">CADastrophe</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> has decided to take a break from the laborious task of engineering and is going to try his hands in the Designing biz. But, despite of his pumped-up enthusiasm, he is facing some tough time using the new design software. Do you think that you have the perfect skills in CAD that will blow <b>ZED</b>’s mind away? Participate in the exhilarating event ‘CADastrophe’ to show off your designing skills and help <b>ZED</b> find his perfect partner in the creative world of CAD designing.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Cadastrophe"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents.php?event=Cadastrophe" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Advert-maniacs</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;">Lines from popular advertisements often stick in <b>ZED</b>'s mind. He ponders a lot about what it actually takes to make an ad catchy. To truly understand this, he is organising the AD-MAD SHOW, inviting students to showcase their creativity and ingenuity in marketing products through captivating advertisements. Don't miss it, "It's the real thing".</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Advert-maniacs"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents.php?event=Advert-maniacs" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Digital Camera Photography Contest</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> is tired of clicking selfies. Always making the same face, monotonous filters and tasteless editing doesn’t interest him anymore. At the same time, he loves photography. Freezing the moment at his fingertips excites him. So like any typical engineering student in India, <b>ZED</b>’s go-to was a digital camera. </p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Digital-Camera-Photography-Contest"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="https://forms.gle/zyh6PNKuUBioHDcMA" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Mathematica</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> being an expert in the engineering field, Mathematics lies deep in his core. Due to his colossal love for Mathematics, <b>ZED</b> has decided to test your logical as well as quantitative thinking, this time by throwing ‘Mathematica’ as a challenge, as <b>ZED</b> believes, ”Pure mathematics is, in its way, the poetry of logical ideas”. In this challenge, <b>ZED</b> will judge you in every criteria he has decided, with various rounds to scrutinize the real mathematician who deserves to be rewarded. If you have the veridical mathematician hidden inside you, accept the challenge and 'Let’s Think Math'.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Mathematica"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents.php?event=Mathematica" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Picathon</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> has just found out his passion and surprisingly, it’s photography rather than engineering ,now he wants to commemorate MNIT, the institute he’s admired the most through this new-found passion. But it’s not a one-man-task to catch the perfect glimpse of this gigantic institution which has so much to offer.So, he has decided to pick someone who has the same amount of zeal as that in him. So, guys <b>ZED</b> is inviting you to participate in ‘Picathon’ and help him uplift the MNIT=MyNIT spirit to a whole new level.
</p>
 <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Picathon"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents.php?event=Picathon" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Lensational</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> has always been fond of short films which speak a whole lot in very short time. He’s decided to pay homage to the institute he’s admired the most, MNIT by making a short film depicting the various facets of the institute. But he's gonna need some equally talented individuals to help him carry out this prestigious job. Participate in ‘Lensational’ to show your skills in film-making and grab this very opportunity to collaborate with the extremely proficient and accomplished <b>ZED</b>.
</p>
 <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Lensational"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents.php?event=Lensational" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Economization</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><br>One may take part in this event trusting their instincts or their knowledge of basic concepts of Economics. This enthralling event of Economization will take part in two rounds. </p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Economization"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents.php?event=Economization" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Social Challenge</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><br>The game is designed to create mass awareness among the students and staff around the campus. Social challenge as the name suggests will include teams to indulge themselves into the topic allotted to them and spread the word into the maximum possible heads around the campus.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Social-challenge"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents.php?event=Social-challenge" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">DUEL THE DEAL</div></center>
					<p class="content_p" style="font-family: 'bahnschrift', sans-serif;"><b>ZED</b> is bewildered by certain topics . He is left puzzled after going through the pros and cons of various issues, and wants to figure out which decision would be optimal. Hence he has organised "Duel the Deal" where team members are assigned companies and after intense cogitation, the wrangle takes place. This will help <b>ZED</b> out of his enigma while nourishing your critical thinking skills, and helping you acquire poise and oratory skills. Equip yourself with strong theories and convincing opinions, and get yourself ready for this redefining tug of war.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".DUEL-THE-DEAL"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents.php?event=DUEL-THE-DEAL" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
