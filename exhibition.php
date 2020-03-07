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
.ex_items{
	font-size:20px;
	font-weight:bold;
}
.ex_items_content{
	font-size:12px;
	font-weight:normal;
}
.contentbox_pwr {
    border-radius: 40px 0px 0px 0;
	padding-right:10px;
	width:55%; height:37%; padding-left:10px; padding-top:10px; left:25px; position:absolute; top:245px;
	margin:auto;
}

.title_img2{
position:absolute; width:220px; top:300px; margin:0 auto; right:250px;
}
.title_img{
	position:absolute; width:18%; top:145px; left:41%;
}
</style>

<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">

<img src="images/exhibitions.png" class="title_img">
   <section class="contentbox_pwr">
    <div class="about_box_mainwrp" style="width:100%;height:auto;">
        <div class="about_text_wrp" style="width:100%;height:auto;">
          <p style="font-family: 'bahnschrift', sans-serif; font-size: 16px;">Sphinx’19 presents you with a slice of the future as a series of exhibitions: many different applications of Internet of Things will be on display, from a smart Wheelchair, smart lights, fans and other household electrical appliances, to a smart dustbin. The exhibition will also showcase the designing and modelling processes for remote-controlled planes, as well as quadcopters. The operation of these machines will also be explained to enthusiastic techies. A 3D printer, with live 3D printing, will be another highlight of the exhibition. 

Apart from all these gizmos, a slew of humanoid robots will be seen walking around the exhibit area. Two robots will be of note: one which can directly be controlled by your mind, and one more which is powered by artifical intelligence, and will be able to answer your questions.
</p>

        </div>
        
     
        

    </div>
  </section>
</div>
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
