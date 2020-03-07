<?php
include("config.php");
$db= new Database();
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
<script>

	$(function(){
		$('.regist-popshow').click(function(){
			$('.modalevent').modal('hide');
			$('#eventregister').modal('show');
		});
	});
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
<?php
	include('header.php');
?>

<style>
.contentbox_pwr {
    width: 60%;
    margin: auto;
    height: 400px;
    padding: 20px;
    top: 25%;
}
.title_img2{
	position:absolute; width:350px; top:280px; margin:0 auto; right:140px;
}
.title_img{
	position:absolute; width:22%; top:12%; left:41%;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/aboutus (1).png" class="title_img">
   <section class="contentbox_pwr" style="width: ">
    <div class="about_box_mainwrp" style="width:100%;">
        <div class="about_text_wrp" style="width:100%;">
          <p style="font-family: 'bahnschrift', sans-serif; font-size: 14px;">Malaviya National Institute of Technology, Jaipur, is back with a bigger, better and revamped edition of its annual Technical Festival, Sphinx, from the 6th of November to the 8th of November, 2019. As the biggest youth-oriented technical destination of Rajasthan, with a footfall of over 10,000 young minds from across the nation, the fest is a unique convergence of intellectual workshops, galvanizing declamations, extravagant gala nights and unrelenting competitions..</p>
	<center><img src="images/director.png" style="width:150px; float:left; display:inline-block; margin-right:20px;">
	<div style="font-family: 'bahnschrift', sans-serif; font-size: 19px; margin-top:20px;">Director's Address</div></center>
		  <p><span style="font-family: 'bahnschrift', sans-serif; font-size: 14px;">Malaviya National Institute of Technology, Jaipur, has been a pioneer institute in technical education for over 50 years. Students skilled in their respective fields have made a mark on the global community with aid from the institute’s academic programme. It aims to inculcate sincerity, dedication and goal-oriented focus, into all students. The technical fest plays an important role: it is an event where young minds showcase and sharpen their skills, compete with others, and bring out the best in themselves. A lot of new ideas are born and thrive, students learn, build their confidence, and are inspired to go beyond their assumed limits. So it is a matter of great privilege to announce Sphinx ‘19, this year’s edition of the Annual Technical Festival of MNIT Jaipur, from the 6th to the 8th of November, 2019. As always, we aspire to present the largest techno-fest in Rajasthan. This festival marks a 3-day long bonanza of unprecedented TechTalks, Marquee Technical Events, Hackathons, and Pronites which are set to bring any budding technocrat to a stage where they may shine.
</span>
</p>
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
