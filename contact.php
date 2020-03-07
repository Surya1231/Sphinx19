<?php
include('config.php');
$db=new Database();
?>
<style>
.rightsidemenu{
	display:none;
}
</style>
<!DOCTYPE html>

<html class="skrollr skrollr-desktop">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Sphinx'19</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<link rel="icon" type="image/png" href="images/favicon.png">
<link href="css/parsley.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/main.css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/popper.js" charset="utf-8"></script>
<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>
<script language="javascript">
	function send_message11(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var subjectz=document.getElementById("subjectz").value;
	var messagesss=document.getElementById("messagesss").value;


	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {

    document.getElementById("messagediv").innerHTML = xmlhttp.responseText;
    document.getElementById("ff").reset();
	}
  }
xmlhttp.open("GET","send_message.php?name="+name+"&email="+email+"&phone="+phone+"&subjectz="+subjectz+"&messagesss="+messagesss,true);




	xmlhttp.send(null);
	return false;
	}
</script>
</head>
<body style="overflow:hidden;">
<script type="text/javascript" src="js/timestamp.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/graph-calc.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/auto-complete.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/toolbar.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/parsley.js" charset="utf-8"></script>

<!-- END WAYBACK TOOLBAR INSERT -->
<script>
$(function(){
	$('.requiredform').parsley();
});
$(function(){
  //called when key is pressed in textbox
  $(".numeric").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $(this).parent('div').find(".errmsg").html("Enter Valid Number").show().delay(5000).fadeOut("slow");
               return false;
    }
   });
});
</script>
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
include("header.php");
?>

<style>
.contentbox_pwr {
	width:50%;
	margin:auto;
	height:300px;
}
.title_img2{
	width:27%; position:absolute; right:10%; top:20%;
}
.title_img{
	position:absolute; width:17%; top:180px; margin:0 auto; left:44%;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/contactus.png" class="title_img">
  <section class="contentbox_pwr" style="">
    <div>
      <div class="ourtemamanin_wrp">

                <div class="contact-info">
                  <div class="title" style="margin-bottom:-10px;">
                    <center><p><span style="font-family: 'bahnschrift', sans-serif; font-size: 19px; width: auto; margin: auto; font-weight:bold;">Visit Us:</span></p></center>
                  </div>
                  <ul class="contact-address">
                    
                      <div class="icon-holder"> <span class="flaticon-building"></span> </div>
                      <div class="text-holder">
                        <p style="font-family: 'bahnschrift', sans-serif; font-size: 14px; width: auto; margin: auto; text-align:center;">Malaviya National Institute of Technology, JLN Marg, Jhalana Gram, Malviya Nagar, Jaipur, Rajasthan-302017</p>
                      </div>
                    

					<center><li><span style="font-family: 'bahnschrift', sans-serif; font-size: 19px; width: auto; margin: auto; font-weight:bold;">Call Us:</span></li></center>

                      <div class="icon-holder"> <span class="flaticon-technology"></span> </div>
                      <div class="text-holder">
                        <p style="font-family: 'bahnschrift', sans-serif; font-size: 14px; width: auto; margin: auto; text-align:center;"> Divyaman : 8963052212 (Event Registration)</p>
                      </div>

                      <div class="icon-holder"> <span class="flaticon-technology"></span> </div>
                      <div class="text-holder">
                        <p style="font-family: 'bahnschrift', sans-serif; font-size: 14px; width: auto; margin: auto; text-align:center;"> Ansh Khandelwal : 8518066443 (Workshop)</p>
                      </div>

                      <div class="icon-holder"> <span class="flaticon-technology"></span> </div>
                      <div class="text-holder">
                        <p style="font-family: 'bahnschrift', sans-serif; font-size: 14px; width: auto; margin: auto; text-align:center;"> Ayush Singh : 9149225262 (Marketing)</p>
                      </div>

                      <div class="icon-holder"> <span class="flaticon-technology"></span> </div>
                      <div class="text-holder">
                        <p style="font-family: 'bahnschrift', sans-serif; font-size: 14px; width: auto; margin: auto; text-align:center;"> Anuj Srivastava : 9588072917 (General Queries) </p>
                      </div>

					<center><li><span style="font-family: 'bahnschrift', sans-serif; font-size: 19px; width: auto; margin: auto; font-weight:bold;">Mail Us:</span></li></center>

                      <div class="icon-holder"> <span class="flaticon-new-email-outline"></span> </div>
                      <div class="text-holder">
                          <p style="font-family: 'bahnschrift', sans-serif; font-size: 14px; width: auto; margin: auto; text-align:center;">sphinx@mnit.ac.in</p>
                        <p style="font-family: 'bahnschrift', sans-serif; font-size: 14px; width: auto; margin: auto; text-align:center;">support@sphinxmnit.org</p>
                      </div>


                  </ul>
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

include("footer.php");
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
