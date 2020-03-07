 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.payment{
	    
	    display: none;

	}
	
	a{
		color:#ffffff;
		text-decoration:none;
	}

.form-control{
  height: 34px !important;
}
.bottomnav{
		border-radius:20px 20px 0px 0px;
		 background-color:rgba(0,0,0,0.4);
		 height:50px;
		 padding-top:10px;
		 width:200px;
		 text-align:center;
		 bottom:0px;
		 position:fixed;
		 left:46%;
	}
	.bnavlist{
		padding-left:0;
		color:#ffffff;
		font-size:20px;
	}
	#lower_icon{
		margin:3px;
	}
	.lower_logo{
		border-radius:20px 0px 0px 0px;
		 background-color:rgba(0,0,0,0.4);
		 height:60px;
		 padding-top:10px;
		 width:180px;
		 text-align:center;
		 bottom:0px;
		 position:fixed;
		 right:0;
	}
	.lower_notification{
		border-radius:0px 20px 0px 0px;
		 background-color:rgba(0,0,0,0.4);
		 height:60px;
		 padding-top:10px;
		 width:180px;
		 text-align:center;
		 bottom:0px;
		 position:fixed;
		 left:0;
	}

	@media (max-width: 767px){
	.notifibtn h4 span {
    margin-left: 0px;
}
	.payment{
	    font-family: 'bahnschrift', sans-serif;
	    box-shadow: 2px 2px 5px white, -3px 0 5px white;
	    display: block;
	    position: fixed;
	    bottom: 8.5%;
	    left: 0;
	    cursor: pointer;
	    height: auto;
	    padding: 8px 10px;
	    border-radius: 0px 20px 20px 0px;
		background-color:rgba(0,0,0,0.4);
		cursor: pointer;
	}
.lower_notification {
    
    height: 35px;
    width: 70px;

}
.contentbox_pwr {
    /* max-width: 1000px; */
    background: rgba(0,0,0,0.4);
    /* margin: 0 auto; */
    vertical-align: middle;
    color: #fff;
    max-height: 500px;
    overflow: auto;
    position: fixed;
     left: 5%;
    /* font-size: 20px; */
    top: 22%;
    height: 60%;
    right: 0;
    /* bottom: 48px; */
    width: 90%;

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
.title_img {
    width: 40%;
    top: 9%;
    left: 30%;
}
.title_img2{
	display:none;
}

.post_heading2 {
    background-color: #fff;
    width: 70%;
    color: #2A5D88;
    font-size: 18px;
    border-radius: 40px;
}

}

	@media (max-width: 767px){



.title111 {
    width: 161%;
    margin-left: -27%;
}

.title112 {
    width: 80%;
    margin-left: -36%;
    margin-top: -40%;
}
.hui{
    margin-left:10px;
        margin-top: 169px;
}

.hevents {
    width: 100px;
    position: fixed;
    top: 17%;
    left: 12%;
    transform: translate(-50%,0);
}
.iparabut {
    width: 110px;
    /* margin-right: 67px; */
    /* height: 130px; */
    padding: 5%;
    /* box-sizing: border-box; */
    font-size: 10px;
    position: relative;
    font-family: arial;
    /* background: #fff; */
    vertical-align: middle;
    overflow: hidden;
    /* padding-top: 53px; */
    /* padding: 20px; */
    /* padding-top: 53px; */
    font-weight: bold;
    color: #fff;
    border: 2px solid #fff;
    box-shadow: 6px 6px 20px 2px;
    border-radius: 20px 0px 20px 0;
    /* outline-width: 12px; */
    outline: 25px;
    /* outline: solid 2px blue; */
    /* outline-offset: 16px; */
    /* margin-right: 200px; */
}
.evnt_cont_box {
    position: absolute;
    left: 0;
    right: 0;
    width: 260px;
    height: 80px;
    /* margin-bottom: 100px; */
    top: 0;
    bottom: 0;
    background: rgba(4, 3, 11, 0.32);
    /* padding: 65px 13px 50px; */
    color: #fff;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 22px 22px 0px 0px;
    border: 2px solid #e2e2e2;
}
.evnt_cont_box p {
    font-size: 0;
}
.eventbox_wrp {
    position: relative;
    width: 100%;
    margin: 15px 0px 144px;
}
.sharktank{
    height:80px;
}
.missionimpo{
    height:80px;
}
.card_box {

    font-size: 14px;

}
.rbtlc{
    width: 200px;
}
.rbtle{
   height: 80px;
}
.designit{
    height:80px;
}
.entrophy{
    height:80px;
}
.urja{
    height:80px;
}
.electrac{
    width: 200px;
}
.siesmic{
    height:80px;
}
.civiqe{
    height:280px;
}
.civiqc{
    width: 220px;
}
.inquie{
    height:80px;
}
.inquic{
    width: 200px;
}
.aqua{
    height:80px;
}

}

</style>

<script>
$(function(){
	$('.forgetbtn').click(function(){
		$('#loginbox').modal('hide');
		$('#forgetmodal').modal('show');
	});
});
$(function(){
	$('.menuslhowbtn a').click(function(){
		$('.rightsidemenu').toggleClass('righmeShow');
	});
});
$(function(){
	$('.menusbtn').on('click', function(){
		$('.menushowwrp').addClass('topmenuShow');
	});
	$('.menuscloseb').click(function(){
		$('.menushowwrp').removeClass('topmenuShow');
	});
});

function checkcollege(obj) {
    var other = document.getElementById("othercollege");
    other.disabled = !(obj.value == "Others");
    other.value = "";
}

</script>

<div class="modal fade" id="forgetmodal" tabindex="-1" style="margin-top:200px;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Find your account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form" id="ff" action="#"   onsubmit="return send_message()">
      <div class="modal-body">

          <div class="row">
          	<div class="col-sm-12">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Email ID</label>
            <input type="email" class="form-control" name="regid" id="emailaaaa"  placeholder="Enter Email ID" required>
          </div>
            </div>

          </div>
         					 <p id="messagediv"></p>
                              <?=@$_SESSION['ff_msg'];@$_SESSION['ff_msg']=null;?>
      </div>
      <div class="modal-footer">
      	<span class="poppsrlo">I have account ?  &nbsp;<a href="#loginbox" data-toggle="modal" data-dismiss="modal"  style=
"color:#4871AA">Login</a></span>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-input" name="loginSubmit">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script language="javascript">
function send_message(){
	var email = document.getElementById("emailaaaa").value;
	//alert(email);
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
		//alert(email);
    document.getElementById("messagediv").innerHTML = xmlhttp.responseText;
    document.getElementById("ff").reset();
	}
  }
xmlhttp.open("GET","resetpass.php?email="+email,true);

	xmlhttp.send(null);
	return false;
	}
</script>
<style>
.modal-title{
	margin: 0 auto;
	font-size:25px;
}

select.form-control:not([size]):not([multiple]) {
    height: 100%;
}
</style>

<div class="modal fade" id="loginbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form" method="post" action="login_check.php">
      <div class="modal-body">

          <div class="row">
          	<div class="col-sm-12">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Registration Id</label>
            <input type="text" class="form-control" name="regid"  placeholder="Enter registration id" required>
          </div>
            </div>

          </div>
          <div class="row">
          	<div class="col-sm-12">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Password </label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
          </div>

            </div>
          <div class="col-sm-12">
			<div class="forgetpaswbt">
			<a href="javascript:;" class="forgetbtn" style="color:#4871AA">Forgot Password</a>
			</div>
		  </div>
          </div>
		  <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
          <p style="color:#B50A0C;"><?=@$_SESSION['message'];?> </p>
          <p style="color:#B50A0C;"><?=@$_SESSION['messagess'];?> </p>


      </div>
      <div class="modal-footer">
      <span class="poppsrlo">Don't have account ?  &nbsp;<a href="#registerbox" data-toggle="modal" data-dismiss="modal"  style="color:#4871AA">Register</a></span>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-input">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registerbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Now!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form" method="post" action="signup.php">
      <div class="modal-body">

          <div class="row">
          	<div class="col-sm-12">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Full Name <span class="mendatri-field">*</span></label>
            <input type="text" class="form-control txtOnly" value="<?=@$_SESSION['name'];?>" placeholder="Enter your full name" required name="name">
          </div>
            </div>

          </div>
          <div class="row">

          	<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Email <span class="mendatri-field">*</span></label>
            <input type="email" class="form-control" value="<?=@$_SESSION['email'];?>" name="email" placeholder="Enter your email address" required>
          </div>
            </div>
            <div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Phone No <span class="mendatri-field">*</span></label>
            <input type="text" class="form-control TxtNumbers" data-parsley-length="[10, 10]" data-parsley-error-message="Enter valid phone no" maxlength="10" placeholder="Enter your phone no" required name="phone" value="<?=@$_SESSION['phone'];?>">
          </div>
            </div>
          </div>
		  <div class="row">
          	<div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Password <span class="mendatri-field">*</span></label>
            <input type="password" class="form-control" id="pass" placeholder="Enter your password" required>
          </div>
            </div>
            <div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Confirm Password <span class="mendatri-field">*</span></label>
            <input type="password" name="password" class="form-control" data-parsley-equalto="#pass" placeholder="Enter confirm password" required>
          </div>
            </div>
          </div>

		  <div class="row">
          	<div class="col-sm-4">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Course</label>
            <select class="form-control" name="course">
            	<option>-Select Course-</option>
                <option value="B-Tech" <?php if((@$_SESSION['course']=='B-Tech')) { echo "selected"; }?>>B-Tech</option>
                <option value="B-Arch" <?php if((@$_SESSION['course']=='B-Arch')) { echo "selected"; }?>>B-Arch</option>
                <option value="PHD" <?php if((@$_SESSION['course']=='PHD')) { echo "selected"; }?>>PHD</option>
				<option value="M-Tech" <?php if((@$_SESSION['course']=='M-Tech')) { echo "selected"; }?>>M-Tech</option>
				<option value="M-Plan" <?php if((@$_SESSION['course']=='M-Plan')) { echo "selected"; }?>>M-Plan</option>
				<option value="OTHER" <?php if((@$_SESSION['course']=='OTHER')) { echo "selected"; }?>>OTHER</option>
            </select>
          </div>
            </div>

            <div class="col-sm-4">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Year</label>
            <select class="form-control" name="year" >
            	<option>-Select Year-</option>
                <option value="I Year" <?php if((@$_SESSION['year']=='I Year')) { echo "selected"; }?>>I Year</option>
                <option value="II Year" <?php if((@$_SESSION['year']=='II Year')) { echo "selected"; }?>>II Year</option>
				<option value="III Year" <?php if((@$_SESSION['year']=='III Year')) { echo "selected"; }?>>III Year</option>
				<option value="IV Year" <?php if((@$_SESSION['year']=='IV Year')) { echo "selected"; }?>>IV Year</option>
				<option value="V Year" <?php if((@$_SESSION['year']=='V Year')) { echo "selected"; }?>>V Year</option>
        <option value="OTHER" <?php if((@$_SESSION['year']=='OTHER')) { echo "selected"; }?>>OTHER</option>
            </select>
          </div>
            </div>
			<div class="col-sm-4">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">Branch</label>
            <input type="text" class="form-control txtOnly" name="branch" value="<?=@$_SESSION['branch'];?>" placeholder="Enter Branch">
          </div>
            </div>
          </div>

          <div class="row">
              	 <!-- <div class="col-sm-6">
                	<div class="form-group">
                <label for="recipient-name" class="form-control-label">College <span class="mendatri-field">*</span></label>
                <input type="text" class="form-control txtOnly" name="college" value="<?=@$_SESSION['college'];?>" placeholder="Enter your college" required>
              </div>
                </div>
                <div class="col-sm-6">
                	<div class="form-group">
                <label for="recipient-name" class="form-control-label">College Id <span class="mendatri-field">*</span></label>
                <input type="text" class="form-control" value="<?=@$_SESSION['colid'];?>" name="colid" placeholder="Enter your college id" required>
              </div>
                </div> -->

          	 <div class="col-sm-6">
                	<div class="form-group">
                    <label for="recipient-name" class="form-control-label">College <span class="mendatri-field">*</span></label>
                    <select class="form-control" name="college" id="collegeoption" onChange="checkcollege(this)">
                        <option value="MNIT" selected> MNIT </option>
                        <option value="NIT UK" > NIT UK </option>
        				        <option value="IIIT Kota" >IIIT Kota</option>
        				        <option value="Others" > Others </option>
                    </select>
                  </div>
            </div>
            <div class="col-sm-6">
                 <div class="form-group">
                   <label for="recipient-name" class="form-control-label">If Others, Specify name</label>
                   <input disabled type="text" id="othercollege" class="form-control txtOnly" name="collegename" value="<?=@$_SESSION['collegename'];?>" placeholder="Enter your college">
                 </div>
            </div>
            <div class="col-sm-12">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">College Id <span class="mendatri-field">*</span></label>
            <input type="text" class="form-control" value="<?=@$_SESSION['colid'];?>" name="colid" placeholder="Enter your college id" required>
          </div>
            </div>
          </div>


		  <div class="row">
          	 <div class="col-sm-6">
            	<div class="form-group">
            <label for="recipient-name" class="form-control-label">City <span class="mendatri-field">*</span></label>
            <input type="text" class="form-control txtOnly" value="<?=@$_SESSION['city'];?>" name="city" placeholder="Enter city" required>
          </div>
            </div>




		  <div class="col-sm-6">
            	<div class="form-group">

            <label for="recipient-name" class="form-control-label">Accommodation Needed <span class="mendatri-field">*</span></label>
            <div class="checkbox_wrp">
				<label class="checkbox"><input type="radio" name="accommondation" value="Yes" <?php if((@$_SESSION['accommondation']=='Yes')) { echo "checked"; }?> required> <span>Yes</span></label>
				<label class="checkbox"><input type="radio" name="accommondation" value="No" <?php if((@$_SESSION['accommondation']=='No')) { echo "checked"; }?>> <span>No</span></label>
			</div>


          </div>
            </div>
			      </div>
           <p style="color:#B50A0C;"><?=@$_SESSION['f_msg'];?> </p>

        <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
      </div>
      <div class="modal-footer">
      <span class="poppsrlo">Already have account ? &nbsp; <a href="javascript:;" data-toggle="modal" data-target="#loginbox" data-dismiss="modal" style="color:#4871AA">Login</a></span>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="register" value="register" class="btn btn-input">Register</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php
if(isset($_SESSION['register_msg']))
{ ?>
	<script>
    alert("<?=$_SESSION['register_msg'];?>");
    </script>
<?php
unset($_SESSION['register_msg']);
}
if(isset($_SESSION['f_msg']))
{ ?>
	<script type="text/javascript">  $(window).load(function () {  $('#registerbox').modal('show'); });</script>
<?php
unset($_SESSION['f_msg']);
}


if(isset($_SESSION['name']))
{
				unset($_SESSION['name']);
				unset($_SESSION['email']);
				unset($_SESSION['phone']);
				unset($_SESSION['course']);
				unset($_SESSION['year']);
				unset($_SESSION['college']);
				unset($_SESSION['branch']);
				unset($_SESSION['colid']);
				unset($_SESSION['accommondation']);
				unset($_SESSION['city']);
}
if(isset($_SESSION["message"]))
{ ?>
	<script type="text/javascript">  $(window).load(function () {  $('#loginbox').modal('show'); });</script>
<?php
unset($_SESSION["message"]);
}
if(isset($_SESSION["messagess"]))
{ ?>
	<script type="text/javascript">  $(window).load(function () {  $('#loginbox').modal('show'); });</script>
<?php
//unset($_SESSION["message"]);
}

?>
<center>
<div class="bottomnav"><center>
                <ul class="bnavlist">
					<a href="team.php" title="Team" ><i class="fa fa-user-circle" id="lower_icon"></i></a>
					<a href="schedule.php" title="Schedule" ><span class="glyphicon glyphicon-calendar" id="lower_icon"></span></a>
					<a href="hospitality.php" title="Hospitality" ><i class="fa fa-hotel" id="lower_icon"></i></a>
					<a href="sponsors.php" title="Sponsors" ><i class="fa fa-money" id="lower_icon"></i></a>
					<a href="mela.php" title="Mela" ><i class="fa fa-gift" id="lower_icon"></i></a>
                </ul></center>

</div>
</center>



        <div class="lower_logo">  <a href="http://www.mnit.ac.in" target="_blank"><img src="images/mnit_logo.png" style="position:fixed; bottom:15px; right:20px; width:30px;"></a>
				<a href="http://www.mnit.ac.in/sw/cacs/societies.php" target="_blank"><img src="images/society_logo.png" style="position:fixed; bottom:15px; right:67px; width:30px;"></a>
				<a href="http://www.mnit.ac.in/sw/cacs/about.php" target="_blank"><img src="images/cacs_logo.png" style="position:fixed; bottom:15px; right:113px; width:30px;"></a>
				</div>

<div class="rightsidemenu">
	<div class="menuslhowbtn">
		<a href="javascript:;"><i class="fa fa-address-book" aria-hidden="true"></i></a>
	</div>
	<ul>
		<li>
        <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="profile.php">Profile</a> /
            <a href="logout.php">Logout</a>
            <?php
		}
		else
		{
		?>
            <a href="javascript:;"  data-toggle="modal" data-target="#registerbox">Register</a> /
            <a href="javascript:;"  data-toggle="modal" data-target="#loginbox">Login</a>
        <?php } ?>
        </li>
	</ul>
</div>

<div class="rightsidemenu" style="top:50%;">
	<div class="menuslhowbtn">
		<a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
	</div>
	<ul>
		<li>
            <a href="hospitality.php">Fee Payment</a>
        </li>
	</ul>
</div>

<a href="hospitality.php"><div class="payment">Fee Payment</div></a>


<div class="lower_notification">
<div style="z-index:0" class="notificationwrp">
	<div class="notificlist">
		<div class="notifibtn">
        <?php
		$query_notif="SELECT * FROM `notification` order by nid desc";
		$notif_num=$db->db_num($query_notif);
		?>
			<h4><span class="notif_headinf">Notifications </span><span><i class="fa fa-commenting-o" aria-hidden="true"></i> <sup><?=$notif_num;?></sup></span></h4>
		</div>
		<ul style="position:absolute;z-index:20101">
			<?php
			if($notif_num>0)
			{
				$rows_noti=$db->runQuery($query_notif);
				foreach($rows_noti as $row_noti)
				{
			?>
			<li>
				<h4><?=$row_noti['title'];?></h4>
				<p><?=nl2br($row_noti['description']);?></p>
			</li>
			<?php }  }?>
		</ul></div></div></div>


    <script type="text/javascript">
        var select =  $("[name='collegename']");
        var textarea = $("[name='college']");
        $("[name='college']").change(function(){
              if (textarea.val() == 'Others') {
                  select.attr('required', true);
              }
              else {
                  select.attr('required', false);
              }
        });
    </script>


<!-- <audio autoplay loop>
        <source
            type="audio/mp3"
            src="track.mp3">
</audio>
-->
