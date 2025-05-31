<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Change Password - '.$sitename;
$thepage = 'Change Password';
$thepagecode = 'tools';

include('header.php');

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if($edit_profile !=='yes'){
	header('location: ./profile');
}

if (isset($_POST['update_password'])) {
    $con = new khodexclass($mysqli);
	
    if ($con->update_password($userid,$_POST['c_password'],$_POST['password'],$_POST['password2'],$sitename,$sitedomain)) {$erro="good2";
    } else {
      $erro="bad2";
    }
}



include('app-header-back.php');?>
        <div class="right">
            
        </div>
    </div>
    <!-- * App Header -->

    <div id="appCapsule">
<div class="section inset mt-2">



		
<?php if ($erro == "bad2") {
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
}elseif ($erro == "good2") {
?>


<div class="alert alert-imaged alert-success alert-dismissible fade show mb-2" role="alert">
                        <div class="icon-wrap">
                            <ion-icon name="card-outline" role="img" class="md hydrated" aria-label="card outline"></ion-icon>
                        </div>
                        <div>
                            Success! Your account password has been changed.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>
		
		
		
<div class="section-title">Change Password</div>
            <div class="card mb-4">
                <div class="card-body">
                    
                    
					
					
					
					<form action="" method="POST">
												
												
												<div class="form-group mb-2 mt-4">
												<label>Current Password:</label>
												<input type="text" placeholder="Your Current password Here..." name="c_password" autocomplete="off" class="form-control" />
												</div>
												<div class="row">
												<div class="col-6">
												<div class="form-group mb-2">
												<label>New Password:</label>
												<input type="password" placeholder="New Password..." name="password" class="form-control" />
												</div>
												</div>
												<div class="col-6">
												<div class="form-group mb-2">
												<label>Retype Password:</label>
												<input type="password" name="password2" class="form-control" placeholder="Repeat Password..." />
												</div>
												</div>
												</div>
												
												
												
												
												<button class="btn btn-lg btn-primary btn-block" name="update_password" type="submit">Change Password</button>
												</form>
					
					
					
					
					
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->
	
	<?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>