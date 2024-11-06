<?php 
if(isset($_GET['email'])){
    $id = $_GET['email'];
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Reset Password</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="admin/assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="css/portal.css">

</head> 

<body class="app app-reset-password p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2" src="favicon.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Password Reset</h2>

					<div class="auth-intro mb-4 text-center">Enter your email address below. We'll email you a link to a page where you can easily create a new password.</div>
	
					<div class="auth-form-container text-left">
						
						<form class="auth-form resetpass-form" method="POST" action="#">                
							<div class="email mb-3">
								<label class="sr-only" for="reg-email">New Password</label>
								<input id="reg-email" name="password" type="text" class="form-control login-email" placeholder="Enter New Password" required="required">
							</div><!--//form-group-->
                            <div class="email mb-3">
								<label class="sr-only" for="reg-email">Confirm Password</label>
								<input id="reg-email" name="confirm-password" type="password" class="form-control login-email" placeholder="Confrim Your Password" required="required">
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" name="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Reset Password</button>
							</div>
						</form>
						<?php 
                        if(isset($_POST["submit"])){
                            include 'admin/db_connect.php';
                            $password = $_POST['password'];
							$hash_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                            $confirm_password = $_POST['confirm-password'];
                            if($password == $confirm_password){
                                $sql = "UPDATE `alumni` SET `password`='$hash_password' WHERE `email`='$id'";
                                if(mysqli_query($conn,$sql)){
                                    echo "Password Changed Succesfully";
                                    
                                }
                                else{
                                    echo "Error!". mysqli_error($conn);
                                }
                            }
                            else{
                                echo "Password Didn't Match";
                            }
                        }
                        ?>
						<div class="auth-option text-center pt-5"><a class="app-link" href="login.html" >Log in</a> <span class="px-2">|</span> <a class="app-link" href="index.html" >Back to Home</a></div>
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

