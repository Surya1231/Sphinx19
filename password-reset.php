<?php
include("config.php");
$db= new Database();
$conn=$db->db_connect();
@$reset_link=mysqli_real_escape_string($conn,$_REQUEST['reset_link']);
$query="select * from password_req where token='$reset_link'";

$nums=$db->db_num($query);
if($nums>0)
{
	$row=$db->SinglerunQuery($query);

	date_default_timezone_set("Asia/kolkata");
 	$date= date("Y-m-d H:i:s",time());
	$token=$row['token'];
	$times=$row['datetimesss'];
	if(($reset_link==$token)&&($times>=$date))
	{
		$flag=1;
		//echo "gud";
	}
	else
	{
		$flag=0;
		$msg= "The password reset link may be expired or invalid";

	}
}
else
{
	$flag=0;
	$msg="Invalid Request, please try again !";
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
<link href="css/parsley.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/main.css">
<link href="css/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<noscript><div id='NoScript'>
<h6>Please Enable Javascript to View This Page.</h6>
</div>
</noscript>
<style>
#NoScript{background:none repeat scroll 0% 0% rgba(255,255,255,0.7);text-align:center;padding:5px 0;position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999;opacity:0.9}
#NoScript h6{font-size:24px;color:#aaa;position:absolute;top:50%;width:100%;text-align:center;margin-left:-30px;margin-top:-18px;text-shadow:2px 2px 3px #ccc}
</style>
 <script type="text/javascript">
	var noc = 0;
	var cmpnys="";
	var cntr=0;
	function validate(){

	var alrt = document.getElementById("alrt");
	var newpassword = document.getElementById("newpassword").value;
	var newssspassword = document.getElementById("newssspassword").value;
	if(newpassword.length<5){
		alrt.innerHTML="The password length is too short !";
		document.getElementById("newpassword").focus();
		return false;
		}
		if(newpassword!=newssspassword){
		alrt.innerHTML="Your passwords do not match. Please type more carefully";
		document.getElementById("newssspassword").focus();
		return false;
	}
	}
</script>
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

	<div style="position:absolute; top:0; left:0; background:rgba(21,24,33,1.0); width:100%; height:100%; text-align:center;" >
		 <div style="position:absolute; width:100%; height:100%; background:url('images/loader6.gif') center 100% no-repeat; background-size:800px;"></div>
		 <div style="position:absolute; width:100%; height:100%; background:url('images/title.png') center 40% no-repeat; background-size:500px;"></div>
	</div>
</div>

<?php
	include('header.php');
?>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
  <section class="contentbox_pwr">
    <div class="about_box_mainwrp">
		<div class="container">
        <div class="ourtem_heding">
          <h2>Reset Password </h2>
        </div>
      </div>
      <div class="container">
    	<div class="about_text_wrp">

		 <div class="ourteamtedablog">
          <div class="contact_form">
                   <?php
	if($flag==0)
	{
		echo "<h1 class='animated fadeInDown'>".$msg."</h1>";
	}
	else
	{

	?>
                  <form class="requird_form_contect requiredform" method="post" onSubmit="return validate()"  action="change_reset.php">

                    <div class="form_group">
                      <label>New Password</label>
                      <input type="password" name="password" data-parsley-error-message="Enter new  Password"  data-parsley-trigger="keyup" class="form-control" id="newpassword" required>
                    </div>
                     <div class="form_group">
                      <label>New Password</label>
                      <input type="password" name="cpassword" data-parsley-error-message="Enter confirm Password" data-parsley-trigger="keyup" class="form-control" id="newssspassword" required>
                    </div>
                    <input type="hidden" name="tokenss" value="<?=$reset_link;?>">
                     <p id="alrt" style="color:white;"></p>
 							<p id="ttl" style="color:white;"></p>
                    <div class="form_group">
                      <input type="submit" class="a_btn"  name="changepass" value="Submit">
                    </div>
                  </form>
              <?php
	} ?>
                </div>
        </div>

		<div class="about_text_wrp">

			<div class="sponsorhead">
				<h4>Mail: support@sphinxmnit.org</h4>
			</div>

			<div class="row">
			<div class="col-sm-4">
                <div class="spondtdeibox">
                    <h4>Ronak Gadia</h4>
                   <p>Marketing Secretary</p>
				   <p> +91-8879755487</p>
              </div>
			</div>
			<div class="col-sm-4">
                <div class="spondtdeibox">
                    <h4>Aditya Sinha</h4>
                   <p>Event Management</p>
				   <p> +91-8949296150 </p>
              </div>
			</div>
			<div class="col-sm-4">
                <div class="spondtdeibox">
                    <h4>Varun Verma</h4>
                   <p>President Sphinx 2.0</p>
				   <p> +91-7014578315</p>
              </div>
			</div>

		</div>

    </div>
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
