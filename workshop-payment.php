<?php
include('config.php');
include("check_user.php");
$db=new Database();
$conn=$db->db_connect();

if($event_type=="Workshop")
{
	$transactionid=mysqli_real_escape_string($conn,$_POST['transactionid']);
	$redirectto="workshop.php";
}

if(isset($_POST['submitreg']))
{
  $url=$_POST['url'];
	$event_type=mysqli_real_escape_string($conn,$_POST['event_type']);
  $event_name=mysqli_real_escape_string($conn,$_POST['event_name']);
	$event_name=ucfirst($event_name);
	$teamsize=mysqli_real_escape_string($conn,$_POST['teamsize']);
	$regid=(array)$_POST['regid'];
	$emailid=(array)$_POST['emailid'];
	$password=(array)$_POST['password'];
	date_default_timezone_set("Asia/kolkata");
	$input = date('YmdHi');
	$datesss= date("D", strtotime($input))." ". date("d-M-Y",strtotime($input));
	//print_r($regid);
	$i=0;
	$flag=0;
	foreach($regid as $regstration)
	{
		$regstr=mysqli_real_escape_string($conn,$regstration);
		$query="SELECT * FROM `users` where register_id='$regstr'";
		$db_num=$db->db_num($query);
		if($db_num>0)
		{
			$user_rows=$db->SinglerunQuery($query);
			$db_email=$user_rows['email'];
			$db_pass=$user_rows['password'];
			if(($db_email==$emailid[$i]) && (base64_decode($db_pass)==$password[$i]))
			{
				// if($user_rows['mnit']=='No' && $user_rows['entry_fee_trid']!='SUCCESS')
				// {
				// 	$flag=1;
				// // 	echo "<script type='text/javascript'>alert('One of team member has not paid the entry fee or has'nt been verified yet.')</script>";
				// 	$_SESSION['Error']="One of team member has not paid the entry fee or has'nt been verified yet.";
					
					
				// 	header("Location:hospitality.php");
				// }
			}
			else
			{
				$flag=1;
				$_SESSION['suc_msg']="One of the registration details is incorrect. ";
				header("Location:".$url);
			}
		}
		else
		{
			$flag=1;
			$_SESSION['suc_msg']="One of the registration details is incorrect. ";
			header("Location:".$url);
		}
		$i++;
	}
}

else
{
	echo "Invalid";
}
?>
<!DOCTYPE html>

<html class="skrollr skrollr-desktop">
<head>
<link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption&display=swap" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Sphinx'19</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="images/favicon.png">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/parsley.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/main.css">
<link href="css/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body style="overflow:hidden;">
<script type="text/javascript" src="js/popper.js" charset="utf-8"></script>
<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>


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

<?php
	include('header.php');
?>

<style>
.payment_link{
	color:#fff;
	font-size:12px;
	font-weight:bold;
	text-align:center;
	border:2px solid #fff;
	box-shadow:4px 4px 0px 0px;
	border-radius:40px;
	width:170px;
	height:35px;
	padding-top:6px;
	margin:0 auto;
	display:inline-block;
	margin-left:5px;
}
.payment_link:hover{
	background-color:#fff;
	color:#2A5D88;
}
.payment_link:hover a{

	color:#2A5D88;
}
.payment_link a:hover{
	text-decoration:none;
}
.google_form{
	font-size:14px;
}
section::-webkit-scrollbar {
    width: 50px;
}

.contentbox_pwr {
 height: 450px;
 border-radius: 40px 0px 0px 0;
  width: 60%;
  margin: auto;
  top:19%;
}
.title_img2{
	width:25%; position:absolute; right:17%; top:30%;
}
.title_img{
	position:absolute;
   width:17%;
   top:100px;
   margin:auto;
   left: 42%;
}
.registration, .accomodation{
  text-align: center;
  font-size: 22px;
  margin: auto;
  width: auto;
  overflow: auto;
}

</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<!-- <img src="images/hospitality.png" class="title_img"> -->
<!-- <h2>Workshop Payment</h2> -->
  <section class="contentbox_pwr">
    <div>
      <div class="ourtemamanin_wrp">

                <div class="contact-info">
                  <!--<div class="title">
                    <center><p><span style="font-size:20px; font-weight:bold;">Accommodation:</span></p></center>
                  </div>
                  <ul class="contact-address">
                    <li class="place-icon">
                      <div class="icon-holder"> <span class="flaticon-building"></span> </div>
                      <div class="text-holder">
                   <div class="google_form">      Accommodation will be provided in MNIT Jaipur Hostels without food from 19th noon to 21st Midnight.Charges: 300/student.<br>
<h3 style="display:inline-block; line-height:0px;">**&nbsp;</h3>After payment is done save your e-receipt and bring it during sphinx'18 and fill the following Form to confirm your payment.</div>
<center> <div class="payment_link"><a href="https://www.onlinesbi.com/prelogin/icollecthome.htm?corpID=873895">Click here for payment</a></div>
 <div class="payment_link"><a href="https://goo.gl/forms/qlbRf9FNVBMMHStD2">Confirm Form</a></div></center>

                    </li>

                  </ul>-->
                </div>
				<!--<hr class="hr1">-->
				<div class="contact-info">
                 <!-- <div class="title">
                    <center><p><span style="font-size:20px; font-weight:bold;">Event + Workshop:</span></p></center>
                  </div>
                  <ul class="contact-address">
                    <li class="place-icon">
                      <div class="icon-holder"> <span class="flaticon-building"></span> </div>
                      <div class="text-holder">
               <div class="google_form">        Participants will be allowed to participate in any technical event and any one workshop according to their registration on website. Make sure to register for workshop before payment.Charges: 1100/student .<br>
<h3 style="display:inline-block; line-height:0px;">**&nbsp;</h3>After payment is done save your e-receipt and bring it during sphinx'18 and fill the following Form to confirm your payment.</div>


<center> <div class="payment_link"><a href="https://www.onlinesbi.com/prelogin/icollecthome.htm?corpID=873895" > Click here for payment</a></div>
 <div class="payment_link"><a href="https://goo.gl/forms/qlbRf9FNVBMMHStD2">Confirm Form</a></div></center>
                    </li>

                  </ul>-->
                </div>

				<!--<hr class="hr1">-->
				<div class="contact-info" style="font-size:14px;">
                 <!-- <div class="title">
                    <center><p><span style="font-size:20px; font-weight:bold;">Events and Campus Visit:</span></p></center>
                  </div>
                  <ul class="contact-address">
                    <li class="place-icon">
                      <div class="icon-holder"> <span class="flaticon-building"></span> </div>
                      <div class="text-holder">
                 <div class="google_form">       Participants(Non MNIT student) will be allowed to participate any of the technical event except workshops. Charges: 300/student..<br>
 <h3 style="display:inline-block; line-height:0px;">**&nbsp;</h3>After payment is done save your e-receipt and bring it during sphinx'18 and fill the following Form to confirm your payment.</div>
<center><div class="payment_link"><a href="https://www.onlinesbi.com/prelogin/icollecthome.htm?corpID=873895">Click here for payment</a></div>
 <div class="payment_link"><a href="https://goo.gl/forms/qlbRf9FNVBMMHStD2">Confirm Form</a></div>
                    </center></li>

                  </ul>-->
                </div>



            </div>
          </div>
		    <div  style="height:200px; margin-top:-20px; padding-left:20px; font-family: 'bahnschrift', sans-serif; font-size: 14.4px;">
          <div class="registration">
            WORKSHOP PAYMENT(Registration Categories)
          </div>

          <br>

          <ul>
            <!-- <li>Event registration + campus visit : <b>Rs. 450/-</b><br></li> -->
            <li>Workshop for MNIT Students : <b>Rs. 700/-</b><br></li>
            <li>Workshop for IIITK and NIT UK students: <b>Rs. 800/-</b><br></li>
            <li>Workshop for Non-MNIT Students : <b>Rs. 1100/-</b><br></li>
            <li>Event registration + Workshop for Non-MNIT students : <b>Rs. 1400/-</b><br><br></li>
          </ul>


          <br>
                   Payment will be done on this Bank account via Internet Banking. <br><br>
                   NAME: MALVIYA NATIONAL INSTITUTE OF TECHNOLOGY<BR>
                   ACCOUNT NO: 00000037347860345<BR>
                   IFS CODE: SBIN0015921<BR><BR>
                    NOTE:-For workshop payment verification, enter transaction id  on page at which you are redirected after registration. <b>Your registration for workshop won't be considered unless you enter transaction id.</b>
                    <br>


    
                   <img id="upi" src="images/upi_qr.png" style="width:100%;max-width:350px;height:500px;"><br><br>
                     <br>
                     <b>**NOTE:-
                     <ul>
                         <li>If you have already paid Rs.1400/-(Event registration + Workshop for Non-MNIT students), you can enter the transaction id for that payment here.</li>
                         <li>Otherwise make the payment as instructed above and enter the transaction id.</li>
                     </ul>
                      </b>
                      <br>
                      
                     Enter Transaction ID:-
                     

                     <form class="form" method="post" action="core-love-reg.php">

                       <input type="text" class="form-control" name="transactionid" value="">

                       <input type="hidden" name="event_type" value="Workshop">
                       <input type="hidden" name="event_name" value="<?=$event_name;?>">
                       <input type="hidden" name="teamsize" value="<?=$teamsize;?>">
                       <input type="hidden" name="regid[]" value="<?=$regid[0];?>">
                       <input type="hidden" name="emailid[]" value="<?=$emailid[0];?>">
                       <input type="hidden" name="password[]" value="<?=$password[0];?>">

                       <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
                       
                       <button type="submit" name="submitreg" class="btn btn-input">Register</button>

                     </form>


                    <!-- <h3>Note:</h3>
                    <ul class="checkboxlist">
                    <li>The event registration fee includes registration fee for all the events in the fest.</li>
                    <li>For the specific events which require additional amount, it will be collected at the time of event.</li>
                    <li>For team events, each participant has to register and pay the charges individually.</li>
                    <li>Accommodation will be provided for three days- 6<sup>th</sup>, 7<sup>th</sup> and 8<sup>th</sup> November.</li>
                    <li>Accommodation does not include food.</li>
                    </ul>

                    <h3>Payment Gateway:</h3>
                    <ul class="checkboxlist">
                    <li>The payment must be made through Internet Banking (NEFT or IMPS) to the above mentioned account.</li>
                    <li>The transaction ID obtained after payment should be filled in Google form provided below.</li>
                    <li>The payment can also be done via Paytm app. Go to ‘Money Transfer’, enter the Bank account number, IFSC number and the account holder name (mentioned above) and the amount to be paid. The ‘Transaction ID’ has to be filled in the Google form provided below. You can obtain the ‘Transaction ID’ by visiting ‘Passbook’
                        -> Your bank name from which you transferred’->’UPI Transaction History’. Select your Last transaction detail where you can find ‘Txn ID’ at the bottom.<br>
                        <b>NOTE:</b> The Paytm mode of payment is valid only if your Paytm account is linked with your bank account.</li>
                    <li>It is mandatory to fill the Google form after the payment is completed, otherwise the payment will not be considered.</li>
                    </ul> -->
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
<script src="js/skrollr.min.js"></script>
<script src="js/jquery.ticker.js" type="text/javascript"></script>
<script type="text/javascript" src="js/skrollr.menu.js"></script>
<script type="text/javascript">
        var x = screen.width;
        var y = window.innerWidth;
        var z = window.devicePixelRatio;
        var phyWidth = x;

        if(phyWidth > 30){

        setTimeout(function() {
        var s = skrollr.init({
			forceHeight: false

        });


        skrollr.menu.init(s, {
            change: function(hash, top) {
                }
            });
        }, 500);
         $(window).load(function(){
                $('#loader').delay(2000).fadeOut();

        });
    }
    else{
         $('#mob_text').append("Use your device in landscape mode for better experience");
         $(window).load(function(){
                $('#loader').delay(400).fadeOut();

        });
        $('#slides').css("display","none");
        $('.topnav').css("display","none");
        $('.mobile').show();
    }

        $(window).resize(function(){
        var x = screen.width;
        var y = window.innerWidth;
        var z = window.devicePixelRatio;
        var w = $(window).width();
        var phyWidth = w;
        console.log(x);
        console.log(y);
        console.log(z);
        console.log(w);
        console.log(phyWidth);
        if(phyWidth > 450){

        setTimeout(function() {
        var s = skrollr.init({

        });


        skrollr.menu.init(s, {
            change: function(hash, top) {
                console.log(hash, top);
                }
            });
        }, 500);
        $('#slides').css("display","block");
        $('.topnav').css("display","block");
        $('.mobile').hide();
         $(window).load(function(){
                /*$('#loader').delay(350).fadeOut();*/
        });

    }
    else{
         $('#mob_text').append("Use your device in landscape mode for better experience");
         $(window).load(function(){
               /* $('#loader').delay(400).fadeOut();*/

        });
        $('#slides').css("display","none");
        $('.topnav').css("display","none");
        $('.bottomnav').css("transform","translate(0,0)");
        $('.mobile').show();
    }
    });
    </script>
<script type="text/javascript">
        $(function () {
  $('#js-news').ticker();
  });
    </script>
</body>
</html>
