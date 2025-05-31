<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'KYC Verification - '.$sitename;
$thepage = 'KYC Verification';
$thepagecode = 'kyc';

include('header.php');

if(!isset($_POST['submitkyc'])){
    if($kyc !=='no'){
    header('location: ./');
}
}
if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if (isset($_POST['submitkyc'])) {
    $con = new khodexclass($mysqli);

if ($con->update_kyc($userid,$_POST['docnumber'],$_POST['doctype'],$_FILES['image_front']['tmp_name'],$_FILES['image_front']['type'],$_FILES['image_front']['size'],$_FILES['image_front']['name'],$_FILES['image_back']['tmp_name'],$_FILES['image_back']['type'],$_FILES['image_back']['size'],$_FILES['image_back']['name'],$sitename,$sitedomain,$webmail_email,$webmail_email_password,$bankname)) {$erro="good";
    } else {
      $erro="bad";
    }
    

}

include('app-header-back.php');?>
        <div class="right">
            
        </div>
    </div>
    <!-- * App Header -->

    <div id="appCapsule">
<div class="section inset mt-2">






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
}elseif ($erro == "good") {
?>


<div class="alert alert-imaged alert-success alert-dismissible fade show mb-2" role="alert">
                        <div class="icon-wrap">
                            <ion-icon name="card-outline" role="img" class="md hydrated" aria-label="card outline"></ion-icon>
                        </div>
                        <div>
    Success! Your KYC Verification documents has been submited, you will be notified once approved.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>


<?php if(!isset($_POST['submitkyc'])){

if($kyc=='no'){?>

<div class="alert alert-imaged alert-warning mb-2" role="alert">
                        <?php if($kyccount==0){?><div class="icon-wrap">
                            <class role="img" class="fa fa-bell md hydrated" aria-label="card outline"></i>
                        </div><?php }?>
                        <div>
    <?php if($kyccount==0){
    echo '<b>IMPORTANT:</b> Your account is not yet fully verified, kindly proceed with the KYC Verification to verify your account! ';}else{echo '<center><i class="fa fa-spinner fa-spin" style="font-size:100px"></i><br /><b>ALERT:</b> Your account is pending KYC Approval, you will be notified once your account is verified!</center>';}?>
                        </div>
                    </div>

<?php }}?>


<?php if($kyccount>0){?>
<div class="card mb-4">
                <div class="card-body">
<h4>Verification Details</h4>
<hr />
<p><b>Document Type:</b> <?= ucwords($kycdoctype);?></p>
<p><b>SSN or Doc Number:</b> <?= $kycnumber;?></p>
<p><b>Status:</b> <?= ucwords($kycstatus);?></p>
<p><b>Date:</b> <?php $addHours = new DateTime($kycdate);
$addHours->modify('-0 hours'); 
echo $addHours->format('M d, Y');?></p>
</div></div><?php }?>
		
<div class="section-title">KYC Verification</div>
            <div class="card mb-4">
                <div class="card-body">
                    
                    <center><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5"/>
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
</svg></center>
                    
                    <p class="mt-4">Verify your account with your government issued document or international passport or drivers license to enjoy full account access.</p>
                  <hr />
                  
                  <form action="" enctype="multipart/form-data" method="POST" class="mb-4">	
												<div class="row mt-4">
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>SSN or Document Number:</label>
												<input <?php if($kyccount>0){echo 'disabled';}?> required pattern="\d*" pattern="[0-9]*" name="docnumber" autocomplete="off" maxlength="15" type="text" class="form-control" placeholder="SSN or Document Number here..." value="<?php if(isset($_POST['submitkyc'])){if ($erro == "bad"){ echo $_POST['docnumber'];}}?>" />
												</div>
												</div>
												
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Document Type:</label>
												<select <?php if($kyccount>0){echo 'disabled';}?> required name="doctype" class="default-select wide form-control">
   <option value="">Select Document Type</option> 
   <option value="Drivers License">Drivers License</option>
   <option value="ID Card">Government ID Card</option>
   <option value="Passport">Passport</option>
</select>
												</div>
												</div>
												
												
		<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Document Image (Front):</label>
												<input <?php if($kyccount>0){echo 'disabled';}?> accept="image/*" required name="image_front" type="file" class="form-control" />
												</div>
												</div>
												
		<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Document Image (Back):</label>
												<input <?php if($kyccount>0){echo 'disabled';}?> accept="image/*" required name="image_back" type="file" class="form-control" />
												</div>
												</div>										
												
												</div>
												<button class="btn btn-lg btn-primary btn-block" <?php if($kyccount>0){echo 'disabled';}?> name="submitkyc" type="submit">Verify Now</button>
												</form>
                  
                   
                   
                   
                   
                   
                   	</div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->
    
	<?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>