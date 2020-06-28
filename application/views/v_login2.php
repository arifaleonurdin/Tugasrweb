<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rukada/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:12:17 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Rukada - Responsive Bootstrap4  Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="../assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="../assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="../assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<style>
body {
  background-image: url('../assets/images/kota.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>


<body>
	
	<br><br><br><br>

 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="bg-dark card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="../assets/images/baubau.png" alt="logo icon" width="20%" height="20%">
		 	</div>
		  <div class="text-light card-title text-uppercase text-center py-3">Selamat Datang</div>
		  
		    <form method="post" action="<?php echo site_url('login/aksi')?>">
			  <div class="form-group">
			 <!--  <label for="exampleInputUsername" class="" id="email">Email</label> -->
			   <div class="position-relative has-icon-right">
				  <input type="text" name="email" id="exampleInputUsername" class="form-control" placeholder="Enter email">
				  <!-- <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div> -->
			   </div>
			  </div>
			  <div class="form-group">
			 <!--  <label for="exampleInputPassword" class="" id="password">Password</label> -->
			   <div class="position-relative has-icon-right">
				  <input type="password" name="password" id="exampleInputPassword" class="form-control" placeholder="Enter password">
				 <!--  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div> -->
			   </div>
			  </div><br><?php echo validation_errors(); ?>
			<?php 	  echo $this->session->flashdata('pesan_flash'); ?><br><br>
			
			 <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign In</button>
			  
			 </form>
		   </div>
		  </div>
		  
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  
</body>

<!-- Mirrored from codervent.com/rukada/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:12:17 GMT -->
</html>
