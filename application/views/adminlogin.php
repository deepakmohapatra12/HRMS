<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/plugins/images/favicon.png">
<title>Welcome</title>
<!-- Bootstrap Core CSS -->
<link href="<?php echo BASEURL;?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?php echo BASEURL;?>css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php echo BASEURL;?>css/style.css" rel="stylesheet">
<link href="<?php echo BASEURL;?>dist/css/font-awesome.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?php echo BASEURL;?>css/colors/blue.css" id="theme"  rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
      <form class="form-horizontal" id="loginform" action="<?php echo BASEURL;?>login/usercheck" method="post">
        <a href="javascript:void(0)" class="text-center db"><img src="<?php echo BASEURL;?>plugins/images/1.png" alt="Home" /></a>  
        <center><?php echo $this->session->flashdata("msg")?></center>
        <div class="form-group m-t-40">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="required" placeholder="Username" name="email">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="required" placeholder="Password" name="password">
          </div>
        </div>
      
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12 text-center">
            <button class="btn btn-info btn-lg text-uppercase waves-effect waves-light" type="submit">Log In</button>
          </div>
        </div>
        <hr>
		  <div class="form-group">
          <div class="col-md-12">
           <a href="javascript:void(0)" id="to-recover" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> </div>
        </div>
        
      </form>
      <form class="form-horizontal" id="recoverform" action="index.html">
        <div class="form-group ">
          <div class="col-xs-12">
            <h3>Recover Password</h3>
            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12 text-center">
            <button class="btn btn-primary btn-lg text-uppercase waves-effect waves-light" type="submit">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="<?php echo BASEURL;?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo BASEURL;?>bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo BASEURL;?>plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="<?php echo BASEURL;?>js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo BASEURL;?>js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo BASEURL;?>js/custom.min.js"></script>
<!--Style Switcher -->
<script src="<?php echo BASEURL;?>plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
