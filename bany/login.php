<?php use PHPMailer\PHPMailer\PHPMailer; require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\SMTP;

error_reporting(E_ALL); ini_set('display_errors', TRUE); ini_set('display_startup_errors', TRUE); error_reporting(E_WARNING); error_reporting(E_NOTICE);

require_once('data/settings.php'); 

$title = 'Account Login - '.$sitename;
$thepage = 'login';

include('header.php'); 

if(isset($_SESSION['user']['username'])){
	header('location: ./');
}




if (isset($_POST['login'])) {
	$con = new khodexclass($mysqli);
	
	if(!empty($_SESSION['created'])){
	    unset($_SESSION['created']);
	}
	
	$uzer = esc($_POST['account']);
		 $passwo = esc($_POST['password']);
	
	$pazz=md5($passwo);
	
	$query = "SELECT * FROM users WHERE (username='".$uzer."' || email='".$uzer."' || accountnumber='".$uzer."') AND password='".$pazz."'";
        $result = $mysqli->query($query);

    $rowc = $result->fetch_array();
	
			$zecure=$rowc['security'];
			$rankz=$rowc['role'];
		
			
	if($zecure=='no'){
		
		if ($con->login_main($_POST['account'],$_POST['password'],$BrowserInfo,$IpInfo,$sitename,$sitedomain)) {$erro="good";  
				$_SESSION['message'] = "You are now logged in";
				// redirect to public area
				if($_GET['action']=='admin' && $rankz=='admin'){
    
   header('location: ../admin/');	
    
}else{
   header('location: ./'); 
}			
				exit(0);
			
    } else {
      $erro="fatalz";
    }
	
	}elseif($zecure=='yes'){
		
		if ($con->login_secure($_POST['account'],$_POST['password'],$BrowserInfo,$IpInfo,$sitename,$sitedomain,$webmail_email,$webmail_email_password)) {
			
			$erro="good"; 

$session = mt_rand(1000000000, 9999999999);	

				header('location: verify?otp='.$session);				
				exit(0);
			
    } else {
      $erro="fatalz";
    }
		
		
	}
	
}


include('app-header-back.php');?>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1 style="font-size: 26px;"><i class="fa fa-lock" style="color: #3c3;"></i> Secured Banking</h1>
            <h4>Login with your account details</h4>
        </div>
        <div class="section mb-5 p-2">




<?php
if (isset($_POST['login'])) { 	
    ?>
        <div class="alert alert-danger solid alert-dismissible fade show mb-3">
									<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									<strong>Error!</strong><ul><li>Invalid login details</li></ul>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
    <?php
}?>

<?php
if (!empty($_SESSION['created'])) { 	
    ?>
	<div class="alert alert-success solid alert-dismissible fade show mb-3">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
									<strong>Success!</strong><br />Account created successfully, login with your details below!<hr />
									NOTE: Your account number and details has been sent to your email, kindly Check you Inbox, Spam or Junk.
		 
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
<?php }?>

            <form action="" method="post">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">Account Number</label>
                                <input type="text" name="account" class="form-control" id="email1" placeholder="Your account number here...">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password1">Password</label>
                                <input type="password" name="password" class="form-control" id="password1" autocomplete="off"
                                    placeholder="Your password here...">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-links mt-2">
                    <div>
                        <a href="register">Get Started</a>
                    </div>
                    <div><a href="forgot-password" class="text-muted">Forgot Password?</a></div>
                </div>

                <div class="form-button-group  transparent">
                    <button type="submit" name="login" class="btn btn-primary btn-block btn-lg">Log in</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->

 <?php include('allJS.php');?>