<?php
include("config.php");
$db= new Database();
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
 height: 400px;
 border-radius: 40px 0px 0px 0;
  width: 50%;
  margin: auto;
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
.registration, .accommodation{
  text-align: center;
  font-size: 22px;
  margin: auto;
  width: auto;
  overflow: auto;
}

</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/hospitality.png" class="title_img">
  <section class="contentbox_pwr">
      
    
		    <div  style="height:200px; margin-top:20px; padding-left:20px; font-family: 'bahnschrift', sans-serif; font-size: 14.4px;">
		        <b>NOTE:- PARTICIPANTS FROM ALL COLLEGES OTHER THAN MNIT, IIIT KOTA AND NIT UK, NEED TO FIRST PAY THE ENTRY FEES.</b><br>
		        <b>Online Payment Gateways are closed. Still you can visit us , pay at Registration Desk. For any querry contact Finance Secretary Jonesh : 8871112126</b>
          <div class="registration">
            Registration Categories
          </div>
          <br>

          <ul>
            <li>Event registration + campus visit : <b>Rs. 450/-</b><br></li>
            <li>Workshop for MNIT Students : <b>Rs. 700/-</b><br></li>
            <li>Workshop for IIITK and NIT UK students: <b>Rs. 800/-</b><br></li>
            <li>Workshop for Non-MNIT Students : <b>Rs. 1100/-</b><br></li>
            <li>Event registration + Workshop for Non-MNIT students : <b>Rs. 1400/-</b><br><br></li>
          </ul>

          <div class="accommodation">
            Accommodation
          </div>
          <br>

          <ul>
            <li>Accommodation charge (3-days) : <b>Rs. 300/-</b> </li>
            <li> Accommodation will be provided for 3-days excluding food and accommodation will be on sharing basis.</li>
          </ul>

          <!--<br>-->
          <!--         Payment will be done on this Bank account via Internet Banking.<br><br>-->
          <!--         NAME: MALVIYA NATIONAL INSTITUTE OF TECHNOLOGY<BR>-->
          <!--         ACCOUNT NO: 00000037347860345<BR>-->
          <!--         IFS CODE: SBIN0015921<BR><BR>-->
                       
          <!--             FOR UPI SYSTEMS :--->
          <!--         <img id="upi" src="images/upi_qr.png" style="width:100%;max-width:350px;height:500px;"><br><br>-->


          <!--          <br>-->

                    <h3>Note:</h3>
                    <ul class="checkboxlist">
                    <li>The event registration fee includes registration fee for all the events in the fest.</li>
                    <li>For the specific events which require additional amount, it will be collected at the time of event.</li>
                    <li>For team events, each participant has to register and pay the charges individually.</li>
                    <li>Accommodation will be provided for three days- 6<sup>th</sup>, 7<sup>th</sup> and 8<sup>th</sup> November.</li>
                    <li>Accommodation does not include food.</li>
                    </ul>

                    <h3>Payment Gateway:</h3>
                    <ul class="checkboxlist">
                    <li>Online Payment Gateways are closed. Still you can visit us , pay at Registration Desk. </li>
                    <!--<li>The transaction ID obtained after payment should be submitted for verification of payment by going to your profile and clicking 'Enter Transaction ID'(for entry and accommodation fee for outside MNIT students).For workshop payment verification, enter transaction id  on page at which you are redirected after registration. <b>Your registration for workshop won't be considered unless you enter transaction id.</b> </li>-->
                    <!--<li>The payment can also be done via Paytm app. Go to ‘Money Transfer’, enter the Bank account number, IFSC number and the account holder name (mentioned above) and the amount to be paid. The ‘Transaction ID’ has to be filled in the Google form provided below. You can obtain the ‘Transaction ID’ by visiting ‘Passbook’
                        -> Your bank name from which you transferred’->’UPI Transaction History’. Select your Last transaction detail where you can find ‘Txn ID’ at the bottom.<br>
                        <b>NOTE:</b> The Paytm mode of payment is valid only if your Paytm account is linked with your bank account.</li>
                    <li><b>It is mandatory to submit the transacion id of fee payment after the payment is completed, otherwise the payment will not be considered.</b></li> -->
                    </ul>
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
