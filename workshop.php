<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="ethical-hacking"){
		$min=1;
		$max=1;
	} else if($event=="arduino-robotics") {
		$min=1;
		$max=1;
	} else if($event=="machine-learning") {
		$min=1;
		$max=1;
	} else if($event=="iot") {
		$min=1;
		$max=1;
	} else if($event=="quadcopter") {
		$min=1;
		$max=1;
	}else if($event=="industrial-automation") {
		$min=1;
		$max=1;
	}
	else if($event=="digital-marketing") {
		$min=1;
		$max=1;
	}
	else if($event=="mercedes") {
		$min=1;
		$max=1;
	}
	
	 else
	{
		header("Location:workshop.php");
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

<style>
    .evnt_cont_box {
    width: auto !important;
    height: 130px !important;
    }
    
    .eventbox_wrp{
        margin: 15px 0px 200px !important;
    }
    @media (max-width: 767px){
        .evnt_cont_box{
            width: 240px !important;
        }
    }
</style>
</head>
<body style="overflow:hidden;">
<script type="text/javascript" src="js/timestamp.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/graph-calc.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/auto-complete.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/toolbar.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/popper.js" charset="utf-8"></script>
<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>
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
      <form class="form" method="post" action="workshop-payment.php">
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
        <input type="hidden" name="event_type" value="Workshop">
        <input type="hidden" name="event_name" value="<?=$event;?>">
        <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
        <!--<p style="color:#CF5759"><b>NOTE:- PARTICIPANTS FROM ALL COLLEGES OTHER THAN MNIT, IIIT KOTA AND NIT UK, NEED TO FIRST PAY THE ENTRY FEES AND ENTER TRANSACTION ID OF PAYMENT BY GOING TO YOUR PROFILE. YOU WILL BE ABLE TO REGISTER FOR EVENTS AND WORKSHOP ONLY AFTER YOUR PAYMENT IS VERIFIED BY US.</b> <?=@$_SESSION['Error']; @$_SESSION['Error']=null;?></p>-->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submitreg" class="btn btn-input">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade ethical-hacking modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ETHICAL HACKING AND CYBER SECURITY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
                Information security and ethical hacking is the latest buzz word in the industry. In the past five years, the percentage of hacking crimes, data thefts, data losses, viruses and other cyber crimes have increased exponentially. Ethical hacking is described as the technical art of a networking expert to penetrate networks and computer systems with the purpose of finding and fixing security vulnerabilities. It is also called as white-hat hacking in which professionals scan, test, hack and secure their own systems.
        </div>

        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>


<div class="evencon_box">
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>

	<div class="evencon_box">
	  <h3>Note:</h3>
	    Students are required to bring their own laptops and pendrives for the workshop.
    </div>
		<div class="evencon_box">
		  <h3>
		      Detailed Information of Workshop:
		  </h3><br>
		  <ol>
		      <li>What is Hacking? </li>
		      <li>Can hacking be Ethical? </li>
		      <li>Terms we use in Hacking </li>
		      <li>Hackers & Hacking Methodologies </li>
		      <li>Types Of Hackers </li>
		      <li>Cyber Law in India </li>
		      <li>Need of Ethical Hacking</li>
		      <li>Some Big Cases of Hacking in India and across the Globe </li>
		      <li>Hiding Your Identity While Performing Attack </li>
		      <li>Overview of Cyber World </li>
		      <li>Indian Cyber Law & Case Studies </li>
		      <li>Methods to Report Cyber Crime </li>
		      <li>Bug Bounty Techniques and Methods </li>
		      <li>Open Source Information Gathering of Target </li>
		      <li>Virtualization & Setup Hacking Tools </li>
		      <li>Windows System Hacking & Security (Windows 10 & 8)</li>
		      <li>Data Privacy Techniques & Cracking Application Passwords. </li>
		      <li>Hacking by Batch Programming </li>
		      <li>Hacking Target System by Spyware & Trojans etc.</li>
		      <li>Hide Everything - Proxy Server & VPN Technologies</li>
		      <li>Email Hacking & Security Issues </li>
		      <li>Facebook Hacking & Security </li>
		      <li>Android Mobile Hacking & Security </li>
		      <li>WhatsApp Data Hacking & Security </li>
		      <li>Credit Card Frauds & Cases </li>
		      <li>ATM Hacking Techniques of Hackers & Its Prevention </li>
		      <li>Case Study (Live Demo by Our Team) </li>
		  </ol>

	    </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Ansh Khandelwal</td>
                  <td>8518066443</td>
				  <td>2017uch1770@mnit.ac.in</td>
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
            <a href="" onclick="alert('Registration Closed')" class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="home" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>


<div class="modal fade arduino-robotics  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ROBOTICS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
Robotics is an interdisciplinary branch of engineering and science which deals with the design, construction, operation, and application of robots, as well as computer systems for their control, sensory feedback, and information processing. These technologies deal with automated machines, that can take the place of humans in dangerous environments or manufacturing processes, or resemble humans in appearance, behaviour, and/or cognition.
        </div>

        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>


<div class="evencon_box">
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>

	 <div class="evencon_box">
		 <h3>Detailed Information of Workshop:</h3><br>
		 <ol>
		     <li>Motors and their controlling.
		     
		     </li>
		     <li>Features and Types of Robots
		     <ol type="i">
		         <li>Kids Special Bot</li>
		         <li>Tri Bot, Animal Bot</li>
		         <li>Spider Bot</li>
		         <li>Brainstorming Bot</li>
		     </ol>
		     </li>
		     
		     <li>Learning Mobile Communication
		     <ol type="i">
		         <li>Motors and its controlling</li>
		         <li>Mobile Tone decoding</li>
		         <li>DTMF Technology</li>
		         <li>Sensor Botix</li>
		         <li>Introduction to Infrared Sensor</li>
		     </ol>
		     </li>
		     <li>Embedded Systems and its applications
		     <ol type="i">
		         <li>Microprocessors and Microcontrollers</li>
		         <li>AVR Micro-controller and its programming</li>
		         <li>TechieNest Development Board, Its explanation and interfacings</li>
		     </ol></li>
		 </ol>
		 </div>

<!--	<div class="evencon_box">
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      -->

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Ansh Khandelwal</td>
                  <td>8518066443</td>
				  <td>2017uch1770@mnit.ac.in</td>
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
            <a href="workshop.php?event=arduino-robotics"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>


<div class="modal fade machine-learning modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ARTIFICIAL INTELLIGENCE & MACHINE LEARNING</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
            This course aims to provide an introduction to the basic principles, techniques, and applications of Machine Learning. Programming assignments are used to help clarify basic concepts. The course covers the principles, design and implementation of learning programs that improve their performance on some set of tasks with experience.
            Upon successful completion of the course, students will have a broad understanding of machine learning algorithms and their use in data-driven knowledge discovery and program synthesis. Students will have designed and implemented several machine learning algorithms in Python. Students will also be able to identify, formulate and solve machine learning problems that arise in practical applications.
            Students will have a knowledge of the strengths and weaknesses of different machine learning algorithms (relative to the characteristics of the application domain) and be able to adapt or combine some of the key elements of existing machine learning algorithms to design new algorithms as needed. You will have an understanding of the current state of the art in machine learning and be able to begin to conduct original research in machine learning.
        </div>

        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>

<div class="evencon_box">
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>
 <div class="evencon_box">
	 <h3> Detailed Information of Workshop:</h3><br>
	 <ol>
	     <li>What is machine learning?
	     <ol type="i">
	         <li>Introduction to machine learning</li>
	         <li>Understanding the need</li>
	         <li>Understanding Big data and machine learning</li>
	         <li>Running machine learning under Linux platform</li>
	         <li>Why is Linux important for future developments in machine learning?</li>
	         <li>Role of Python and R programming in this domain</li>
	         <li>Basic introduction to Python syntax and programming logics</li>
	         <li>Deep dive with Supervised and Unsupervised learning</li>
	     </ol>
	     </li>
	     <li>Python programming
	     <ol type="i">
	         <li>Introduction to Python and importance of Python in machine learning</li>
	         <li>Installation of software on different OS.</li>
	         <li>Understanding basic syntax with data types</li>
	         <li>Number, string, list, tuple and dictionary</li>
	         <li>Loops and conditions</li>
	         <li>User input and user defined functions</li>
	         <li>How to use libraries</li>
	         <li>Creating and importing own library</li>
	     </ol>
	     </li>

	         <li>Numpy
	         <ol type="i">
	             <li>Formation of Arrays and its operation</li>
	             <li>Working with multidimensional arrays using numpy</li>
	             <li>Data formation and matrix manipulations</li>
	             <li>Use of Numpy in Data Science</li>
	         </ol>
	         </li>
	    
	         <li>Matplotlib
	         <ol type="i">
	             <li>Data Visualisation in linear graphs</li>
	             <li>Bar Graph</li>
	             <li>Pie Charts</li>
	             <li>Multiple data visualisation in one plot</li>
	         </ol>
	         </li>

	         <li>Working with Python for ML
	         <ol type="i">
	             <li>Types of learning</li>
	             <li>Supervised Learning lab with Hello World Program</li>
	             <li>Classification and regression</li>
	             <li>Entropy and Information Gain</li>
	             <li>Training your machine with real time datasets</li>
	             <li>KNN Algo</li>
	             <li>KNN algo with deep dive</li>
	         </ol>
	         </li>
	    
	             <li>Pandas
	             <ol type="i">
	                 <li>Introduction to dataframes</li>
	                 <li>Reading / writing data files</li>
	                 <li>Structure of dataframes</li>
	                 <li>Use of dataframes with ML</li>
	                 <li>Datasets reading from Scikit-Learn</li>
	                 <li>Image Processing with Python</li>
	                 <li>Image Read and type conversions</li>
	             </ol>
	             </li>
	             
	             <li>Deep Learning, Image search and recognition
	             <ol type="i">
	                 <li>Concept of neural network</li>
	                 <li>Understanding neural networks</li>
	                 <li>Searching for image</li>
	                 <li>Registering image for training model</li>
	                 <li>Training image datasets</li>
	                 <li>Recognition of different images to detect face</li>
	             </ol>
	             </li>

	 </ol>
	 </div>

<!--	<div class="evencon_box">
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      -->

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <div class="pptable">
              <table>
                <tr>
                  <td>Ansh Khandelwal</td>
                  <td>8518066443</td>
				  <td>2017uch1770@mnit.ac.in</td>
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


<div class="modal fade iot modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">IOT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
            The Internet of Things (IoT) is the network of physical devices, vehicles, buildings and other items embedded with electronics, software, sensors, actuators, and network connectivity that enable these objects to collect and exchange data, creating opportunities for more direct integration of the physical world into computer-based systems, resulting in efficiency improvements, economic benefits, and reduced human exertions
        </div>

        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>

<div class="evencon_box">
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>

 <div class="evencon_box">
	 <h3>Detailed Information of Workshop:</h3><br>
<ol>
    <li>Introduction to IoT & Raspberry_Pi
        <ol type="i">
            <li>What is IoT</li>
            <li>Historical Background, Features, Applications & Scope of Raspberry_Pi</li>
            <li>Raspberry_Pi & its Various OS</li>
            <li>Introduction to Raspbian</li>
        </ol>
    </li>
    <li>Basics of Python Programming
        <ol type="i">
            <li>Features of Command Window & Script Window</li>
            <li>Basic Python Commands & Keyboard Shortcuts</li>
            <li>Defining Editing and Clearing Variables & Checking for Existence</li>
            <li>My First Python Program</li>
        </ol>
    </li>
    <li>High Level Programming and its Easy Interaction
        <ol type="i">
            <li>Introduction to Arrays</li>
            <li>Python Data Types and Basic I/O operations</li>
            <li>Various Python Functions & their use</li>
            <li>Creating & running User defined Functions</li>
        </ol>
    </li>
    <li>Getting Started with Raspberry_Pi
        <ol type="i">
            <li>Raspbian – A Debian Derivative</li>
            <li>The Concept of Open Source</li>
            <li>Disk Fragmentation</li>
            <li>Installing & Starting Raspberry_Pi</li>
            <li>Understanding the Raspberry_Pi Desktop Layout</li>
            <li>Command Window (Terminal), Editor Window, Workspace, Command History, Graphic Window</li>
        </ol>
    </li>
    <li>Controlling I/O’s
        <ol type="i">
            <li>Accessing GPIO Pins</li>
        </ol>
    </li>
    <li>Programming on Raspberry_Pi
        <ol type="i">
            <li>Glowing multiple different pattern LED</li>
        </ol>
    </li>
    <li>Ultrasonic Sensor
        <ol type="i">
            <li>Concept, Capabilities & limitations.</li>
            <li>Applications</li>
        </ol>
    </li>
    <li>Relays
        <ol type="i">
            <li>Definition, Working Methodology</li>
            <li>Types, Advantages & Application Areas</li>
            <li>Switching/Controlling of DC Relay using Pi</li>
        </ol>
    </li>
    <li>IOT over cloud
        <ol type="i">
            <li>What is cloud?</li>
            <li>What are the features & scope of using IOT over cloud?</li>
            <li>Data connectivity of IoT devices with open cloud.</li>
            <li>Development of various applications in IoT.</li>
        </ol>
    </li>
    <li>Working with API
        <ol type="i">
            <li>What is API</li>
            <li>How to use API with Python</li>
            <li>Controlling Raspberry_Pi with API</li>
        </ol>
    </li>
</ol>
</div>
<!--	<div class="evencon_box">
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      -->

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Ansh Khandelwal</td>
                  <td>8518066443</td>
				  <td>2017uch1770@mnit.ac.in</td>
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
            <a href="workshop.php?event=iot"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>

<div class="modal fade quadcopter modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QUADCOPTER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
            <div class="evencon_box">
            <h3>Overview:</h3>
            One of the most engaging marvels of the recent times, the Quadcopter,soaring through the sky, cutting through the air, and drifting past obstacles. Get ready to experience how it actually feels to operate this magnificent piece of avant-garde tech. Learn how  a Quadcopter is built and designed , and race it around with other enthusiasts.  Sphinx'19, is providing you with a opportunity at the Quadcopter workshop to experience the sky and challenge its limits.
        </div>

        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>

<div class="evencon_box">
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>

					<div class="evencon_box">
						<h3> Detailed Information of Workshop:</h3><br>
						<ol>
    <li>Introduction to Flight
        <ol type="i">
            <li>History of manned and Unmanned flight</li>
            <li>Types of flying models (Rubber-powered, engine-controlled and electro-power controlled)</li>
            <li>Multi-rotor technology</li>
            <li>Helicopter to Quadcopter</li>
            <li>Operation, advancements and advantages of Quadcopters</li>
        </ol>
    </li>
    <li>Quadcopter modeling (Dynamics)
        <ol type="i">
            <li>PD and PID controller for stability and control</li>
        </ol>
    </li>
    <li>Components of a Quadcopter
        <ol type="i">
            <li>Frame (types, configuration and sizing)</li>
            <li>Propeller (design, sizing, forces acting on it and analysis of parameters such as pitch, diameter and RPM)</li>
            <li>Battery (Li-ion and Lipo batteries)</li>
            <li>Electronic speed controller (PWM, start-up, troubleshooting and working)</li>
            <li>Sensors (Accelerometer, Gyroscope and GPS)</li>
        </ol>
    </li>
</ol>
					</div>

<!--	<div class="evencon_box">
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      -->

		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Ansh Khandelwal</td>
                  <td>8518066443</td>
				  <td>2017uch1770@mnit.ac.in</td>
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
            <a href="workshop.php?event=quadcopter"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>


<div class="modal fade mercedes modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mercedes Engine Analysis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
This course aims to provide an introduction to the basic principles, characteristics and specialities of the Mercedes Engine. Mercedes-Benz engine systems are all about performance without compromise, power with economic feasibility and long term sustenance. The driving dynamics, high power delivery even at low engine speeds, smooth running characteristic and  powerful engine brake gives the Mercedes engine an unparalled distinction in the world of automobiles.

        </div>

        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>


<div class="evencon_box">
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>

		<div class="evencon_box">
		  <h3>
		      Detailed Information of Workshop:
		  </h3><br>
		  <ol>
		      <li>Understanding steering system and tyres </li>
		      <li>Understanding suspension system and types</li>
		      <li>Understanding brakes and types </li>
		      <li>Understanding tyres and types </li>
		      <li>Traction concept  </li>
		      <li>Understanding engine </li>
		      <li>CC measurement technique</li>
		      <li>Relation among power, torque, rpm and CC </li>
		      <li>Power to weight ratio and its effects </li>
		      <li>Basics of engine development </li>
		      <li>Types of cooling arrangement and its effects </li>
		      <li>Types of Cam arrangements and its effects </li>
		      <li>Types of valve arrangements and effects </li>
		      <li>Types of cylinder arrangements and effects </li>
		      <li>Several related calculations </li>
		      <li>Stopping distance</li>
		      <li>Lift and drag forces </li>
		      <li>Vehicle aerodynamics intro </li>
		      <li>Vehicle dynamics</li>
		      
		  </ol>

	    </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Ansh Khandelwal</td>
                  <td>8518066443</td>
				  <td>2017uch1770@mnit.ac.in</td>
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
            <a href="workshop.php?event=ethical-hacking"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>



		<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="workshop.php?event=industrial-automation"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>

		<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="workshop.php?event=digital-marketing"  class="btn btn-input regist-popshow">Register Now</a>
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

<style>
.content_p{
	margin-top:10px;
}
.card_box{

	border:2px solid #fff; padding:10px; color:#2A5D88; border-radius :22px; background-color:#fff; width:200px;  margin-top:-25px;
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
 overflow-x: hidden; height: 40%;   border-radius: 40px 0px 0px 40px; position:absolute; margin:0 auto;
 width:90%;
 height: 350px;
 paddig-right:20px;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
position:absolute; width:17%; top:100px; left:42%;
}
.sponser_img{
position:absolute; width:5%; top:185px; left:52%;height:6%;
}
.sponser_text{
position:absolute;top:180px; left:41%;color:white;
}
.temp{
	font-family: 'bahnschrift', sans-serif; font-size: 30px; font-weight: bold;
}
</style>


<!--top nav end-->

<!--
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/workshops.png" class="title_img">
   <section class="contentbox_pwr" style="">
    <div class="about_box_mainwrp" style="width:100%;">
        <div class="about_text_wrp" style="width:100%;">
          <p>Sputnik is a tech savvy person. and is determined to learn, analyze and create all the
technologies he can dream of. So he decides to conduct a workshop, giving us an
insight into all the modern technologies including Robotics , Aerodynamics, Ethical
hacking and Internet of things for us to gain practical wisdom and to have an
uncompromised learning experience.</p>
        </div>
        <div class="about_text_wrp">

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
</div>
</div>
<?php
	include('footer.php');
?>
</body>
</html>         -->


<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/workshops.png" class="title_img">
<h3 class="sponser_text" style="font-family: 'bahnschrift', sans-serif;">Powered By : </h3><img src="images/workshop-sponser.png" class="sponser_img">

  <section class="contentbox_pwr" style="">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%; border-radius:0px 0px 0px 0px; padding-top: 25px; padding-right: 40px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">



              <div class="col-md-4 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Ethical Hacking and Cyber Security</div></center>
					<!--<p class="content_p" style="font-family: 'bahnschrift', sans-serif; font-size: 16px;">Information security and ethical hacking is the latest buzz word in the industry. In the past five years, the percentage of hacking crimes, data thefts, data losses, viruses and other cyber crimes have increased exponentially. Ethical hacking is described as the technical art of a networking expert to penetrate networks and computer systems with the purpose of finding and fixing security vulnerabilities.</p>-->
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".ethical-hacking"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
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


			   <div class="col-md-4 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Robotics</div></center>
<!--					<p class="content_p" style="font-family: 'bahnschrift', sans-serif; font-size: 16px;">Robotics is the branch of mechanical engineering, electrical engineering and computer science that deals with the design, construction, operation, and application of robots, as well as computer systems for their control, sensory feedback, and information processing.-->
<!--These technologies deal with automated machines that can take the place of humans in dangerous environments or manufacturing processes, or resemble humans in appearance, behavior, and/or cognition.</p>-->
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".arduino-robotics"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop.php?event=arduino-robotics" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

			  <div class="col-md-4 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Artificial Intelligence & Machine Learning</div></center>
					<!--<p class="content_p" style="font-family: 'bahnschrift', sans-serif; font-size: 16px;">This course aims to provide an introduction to the basic principles, techniques, and applications of Machine Learning. Programming assignments are used to help clarify basic concepts. The course covers the principles, design and implementation of learning programs that improve their performance on some set of tasks with experience. </p>-->
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".machine-learning"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
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


        <div class="col-md-4 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">IOT</div></center>
					<!--<p class="content_p" style="font-family: 'bahnschrift', sans-serif; font-size: 16px;">The Internet of Things (IoT) is the network of physical devices, vehicles, buildings and other items embedded with electronics, software, sensors, actuators, and network connectivity that enable these objects to collect and exchange data, creating opportunities for more direct integration of the physical world into computer-based systems, resulting in efficiency improvements, economic benefits, and reduced human exertions.</p>-->
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".iot"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop.php?event=iot" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>


        <div class="col-md-4 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Quadcopter</div></center>
					<!--<p class="content_p" style="font-family: 'bahnschrift', sans-serif; font-size: 16px;">Aerodynamics is the way air moves around things. The rules of aerodynamics explain how an airplane is able to fly. Anything that moves through air reacts to aerodynamics. A rocket blasting off the launch pad and a kite in the sky react to aerodynamics. Aerodynamics even acts on cars, since air flows around cars.</p>-->
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".quadcopter"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop.php?event=quadcopter" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-md-4 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box" style="font-family: 'bahnschrift', sans-serif;">Mercedes Engine Analysis</div></center>
<!--					<p class="content_p" style="font-family: 'bahnschrift', sans-serif; font-size: 16px;">This course aims to provide an introduction to the basic principles, techniques of Mercedes Engine. Mercedes-Benz engine systems are all about performance without compromise, economic efficiency and sustainability. The driving dynamics, the high power at low engine speeds, the smooth running characteristic and its powerful engine brake makes Mercedes engine an interesting topic to learn.-->
<!--</p>-->
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".mercedes"><span style="font-family: 'bahnschrift', sans-serif;">More Details</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop.php?event=mercedes" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span style="font-family: 'bahnschrift', sans-serif;">Register</span></a>
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
