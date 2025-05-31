<?php use PHPMailer\PHPMailer\PHPMailer; require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\SMTP;

require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Open Account Online - '.$sitename;
$thepage = 'register';

//header('location: ./login'); exit(0);

include('header.php');


if (isset($_POST['register'])) { 
 
    $con = new khodexclass($mysqli);
	if ($con->registration($BrowserInfo,$IpInfo,$sitename,$sitedomain,$_POST['accounttype'],$_POST['job'],$_POST['marital'],$_POST['currency'],$_POST['username'],$_POST['password'],$_POST['email'],$_POST['firstname'],$_POST['lastname'],$_POST['gender'],$_POST['phone'],$_POST['address'],$_FILES['picture']['tmp_name'],$_FILES['picture']['type'],$_FILES['picture']['size'],$_FILES['picture']['name'],$webmail_email,$webmail_email_password)) {
		
		header('location: ./login');
    } else {
      $erro="bad";
    }
}


include('app-header-back.php');?>
        <div class="right">
            <a href="login" class="headerButton">
                Login
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>Get Started</h1>
            <h4>Create an Account Online now!</h4>
        </div>
        
        
        
        
        
        
        <div class="section mb-5 p-2">
            
            
            
            
            
            <?php if ($erro == "bad") {
    ?>
	
	<div class="alert alert-imaged alert-danger alert-dismissible fade show mb-2" role="alert">
                        <div class="icon-wrap">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
                        </div>
                        <div>
                            Error! <br/>
							<ul> <?php echo"". $pn_err ."".$ad_err ."".$pc_err."".$errok."". $pa_err ."".$a_exist."".$cp_exist."".$pp_err."".$ft_err."".$fj_err."".$fz_err."".$fz_err2; ?></ul>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
    <?php
}?>


            <?php if($disable_registration=='no'){?><form action="" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                        
                        
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-2">
												<label>Firstname:</label>
												<input name="firstname" autocomplete="off" required type="text" class="form-control" placeholder="Firstname here..." value="<?php if(isset($_POST['register'])){if ($erro == "bad"){ echo $_POST['firstname'];}}?>" />
												</div>
                            </div>
                            
                            
                            
                            <div class="col-lg-4">
                                <div class="form-group mb-2">
												<label>Lastname:</label>
												<input name="lastname" autocomplete="off" required type="text" class="form-control" placeholder="Lastname here..." value="<?php if(isset($_POST['register'])){if ($erro == "bad"){ echo $_POST['lastname'];}}?>" />
												</div>
                            </div>
                            
                            
                            <div class="col-lg-4">
                                <div class="form-group mb-2">
												<label>Email Address:</label>
												<input name="email" autocomplete="off" required type="email" class="form-control" placeholder="Your Email here..." value="<?php if(isset($_POST['register'])){if ($erro == "bad"){ echo $_POST['email'];}}?>" />
												</div>
                            </div>
                            
                            
                            <div class="col-lg-4">
                                <div class="form-group mb-2">
												<label>Your Picture:</label>
												<input accept="image/*" name="picture"  type="file" class="form-control" placeholder="Your Picture here..." />
												</div>
                            </div>
                            
                            <div class="col-lg-4">
                            <div class="form-group mb-2">
												<label>Gender:</label>
												<select required name="gender" class="default-select wide form-control">
   <option value="">Select Gender</option> 
  <option value="male">Male</option>  
  <option value="female">Female</option> 
</select></div></div>
                       
                       
                       
                       
                        <div class="col-lg-4">
                                <div class="form-group mb-2">
												<label>Phone Number:</label>
												<input name="phone" autocomplete="off" required type="number" class="form-control" placeholder="Your Number here..." value="<?php if(isset($_POST['register'])){if ($erro == "bad"){ echo $_POST['phone'];}}?>" />
												</div>
                            </div>
                            
                            
                            <div class="col-lg-4">
                            <div class="form-group mb-2">
												<label>Marital Status:</label>
												<select required name="marital" class="default-select wide form-control">
   <option value="">Select Gender</option> 
  <option value="Single">Single</option>  
  <option value="Married">Married</option> 
  <option value="Widowed">Widowed</option> 
  <option value="Divorced">Divorced</option> 
</select></div></div>
                            
                            <div class="col-lg-4">
                                <div class="form-group mb-2">
												<label>Occupation:</label>
												<input name="job" autocomplete="off" type="text" class="form-control" placeholder="Your Occupation here..." value="<?php if(isset($_POST['register'])){if ($erro == "bad"){ echo $_POST['job'];}}?>" />
												</div>
                            </div>
                            
                            
                            <div class="col-lg-4">
                            <div class="form-group mb-2">
												<label>Account Type:</label>
												<select required name="accounttype" class="default-select wide form-control">
   <option value="">Select Account Type</option> 
  <option value="Savings">Savings</option>
  <option value="Current">Current</option>
  <option value="Checking">Checking</option>
  <option value="Fixed Deposit">Fixed Deposit</option>
  <option value="NON-Resident">NON-Resident</option>
 <option value="Online Banking">Online Banking</option>
 <option value="Joint Account">Joint Account</option>
   <option value="Domiciliary Account">Domiciliary Account</option>
</select></div></div>
                            
                            
                            <div class="col-lg-12">
                                <div class="form-group mb-2">
												<label>Address:</label>
												<input name="address" autocomplete="off" required type="text" class="form-control" placeholder="Your Address here..." value="<?php if(isset($_POST['register'])){if ($erro == "bad"){ echo $_POST['address'];}}?>" />
												</div>
                            </div>
                            
                            
                           <div class="col-lg-4">
                            <div class="form-group mb-2">
												<label>Currency:</label>
												<select required name="currency" class="default-select wide form-control">
   <option value="">Select Currency</option> 
  <option value="usd">Dollars - USD</option>  
  <option value="euro">Euro - EUR</option> 
  <option value="pounds">Pounds - GBP</option> 
  <option value="naira">Naira - NG</option> 
</select></div></div> 
                            
                            <div class="col-lg-4">
                                <div class="form-group mb-2">
												<label>Username:</label>
												<input name="username" autocomplete="off" required type="text" class="form-control" placeholder="Provide a username here..." value="<?php if(isset($_POST['register'])){if ($erro == "bad"){ echo $_POST['username'];}}?>" />
												</div>
                            </div>
                            
                            
                            <div class="col-lg-4">
                                <div class="form-group mb-2">
												<label>Password:</label>
												<input name="password" autocomplete="off" required type="password" class="form-control" placeholder="Provide a password here..." />
												</div>
                            </div>
                            
                            </div>
                        
                        
                        
                        
                        
                        

                        <div class="custom-control custom-checkbox mt-2 mb-1">
                            <div class="form-check">
                                <input required type="checkbox" class="form-check-input" checked id="customCheckb1">
                                <label class="form-check-label" for="customCheckb1">
                                    I agree <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and
                                        conditions</a>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="form-button-group transparent">
                    <button name="register" type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                </div>

            </form><?php }else{?>
			<div class="mt-4" align="center">
			<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#f00" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
  <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
</svg><br />
			<h2>Registration Disabled</h2>
			</div>
			<?php }?>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- Terms Modal -->
    <div class="modal fade modalbox" id="termsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms and Conditions</h5>
                    <a href="#" data-bs-dismiss="modal">Close</a>
                </div>
                <div class="modal-body">
                    <?= $siteterms;?>
                </div>
            </div>
        </div>
    </div>
    <!-- * Terms Modal -->

 <?php include('allJS.php');?>