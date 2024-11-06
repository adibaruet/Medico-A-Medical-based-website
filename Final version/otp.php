<?php
    if(isset($_GET['email'])){
        $email = $_GET['email'];
    }
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>OTP Verification</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- FontAwesome JS-->
    <script defer src="admin/assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="css/portal.css">

</head> 

<body class="app app-login p-0">    
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2" src="favicon.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Medico</h2>
			        <div class="auth-form-container text-start">
						<form class="auth-form login-form" method="POST">         
							<div class="email mb-3">
								<label class="sr-only" for="signin-email">OTP</label>
								<input id="otp" name="otp" type="text" class="form-control signin-email" placeholder="Type OTP" required="required">
							</div><!--//form-group-->
							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" name="submit">Submit</button>
							</div>
						</form>
						<?php
							include 'connection.php';
							if(isset($_POST['submit'])){
								$otp = $_POST['otp'];
                                
								$sql = "UPDATE patient SET verified=1 WHERE pemail='$email'";
								if(mysqli_query($database,$sql)){
									header('Location: login.php?Verification_Successful');
								}
								else{
									echo "Something went wrong";
								}
							}
						?>
						<div class="auth-option text-center pt-5">Didn't get the OTP? <a class="text-link" href="#" >Resend</a>.</div>
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Designed By Adiba</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>	
</html> 

