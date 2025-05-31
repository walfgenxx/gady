<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Reset Password - '.$sitename;
$thepage = 'Reset Password';

include('header.php'); 


if (isset($_POST['reset'])) {
    $con = new khodexclass($mysqli);
    if ($con->resetpass($_POST['details'],$sitename,$sitedomain,$BrowserInfo,$IpInfo)) {$erro="good";  
		
    } else {
      $erro="fatal";
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
            <h1>Forgot password</h1>
            <h4>Type your e-mail or account id to reset your password</h4>
        </div>
        <div class="section mb-5 p-2">
		
		<?php
if ($erro == "fatal") { 	
    ?>
        <div class="alert alert-danger solid alert-dismissible fade show mb-3">
									<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									<strong>Error!</strong><ul> <?php echo"". $pn_err ."".$re ."".$ad_err ."".$pc_err."".$errok."". $pa_err ."".$a_exist."".$cp_exist."".$pp_err."".$ft_err."".$fj_err."".$fz_err."".$fz_err2; ?></ul>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
    <?php
}elseif ($erro == "good") { 	
    ?>
        <div class="alert alert-success solid alert-dismissible fade show mb-3">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
									<strong>Success!</strong><br />Great! Your Password has Reset & a new password has been sent to your email!
		 
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
    <?php
}?>
            <form action="" method="POST">
                <div class="card">
                    <div class="card-body pb-1">

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">E-mail or Username</label>
                                <input type="text" name="details" class="form-control" id="email1" placeholder="Your e-mail">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-button-group transparent">
                    <button type="submit" name="reset" class="btn btn-primary btn-block btn-lg">Reset Password</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->
 <?php include('allJS.php');?>