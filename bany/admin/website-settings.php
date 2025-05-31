<?php require_once('../data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Website Settings - '.$sitename;
$thepage = 'Website Settings';
$pagecode = 'settings';

include('header.php');


if (isset($_POST['update_settings'])) { 
    
    $base = '1';

    $con = new khodexclass($mysqli);
	if ($con->update_settings($_POST['sitename'],$_POST['sitemail'],$_POST['sitecolor'],$_POST['sitedesc'],$_POST['logo'],$_POST['favicon'],$_POST['thumb'],$_POST['livechat'],$_POST['sitecurrencysym'],$_POST['sitecurrency'],$_POST['minimumdeposit'],$_POST['bankname'],$_POST['preloader'],$_POST['siteterms'],$_POST['sitedomain'],$_POST['livechaturl'],$_POST['sitemail2'],$_POST['withdraw_error'],$_POST['transfer_error'],$_POST['transfercode_name'],$_POST['withdrawcode_name'],$_POST['webmail_email'],$_POST['webmail_email_password'],$_POST['default_timezone'])) {
		$erro="good";
    } else {
      $erro="bad";
    }
}

?>

    <div id="main-wrapper">

        <?php include('top.php'); include('nav.php'); include('sidebar.php');?>
		
		<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
<?php if ($erro == "bad") {
    ?>
	
	<div class="alert alert-danger solid alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									<strong>Error!</strong><ul> <?php echo"". $pn_err ."".$ad_err ."".$pc_err."".$errok."". $pa_err ."".$a_exist."".$cp_exist."".$pp_err."".$ft_err."".$fj_err."".$fz_err."".$fz_err2; ?></ul>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
    <?php
}elseif ($erro == "good") {
?>


<div class="alert alert-success solid alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
									<strong>Success!</strong> Website settings updated
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
								
								
								<?php }
		?>
						<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Website Settings</h4>
                            </div>
                            <div class="card-body">
                                
								
								<form action="" method="POST">
												
												<div class="row mb-2">
												<div class="col-4 mb-2">
												<div class="form-group">
												<label>Website Name:</label>
												<input type="text" required placeholder="Website Name..." name="sitename" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['sitename'];
												}else{
													echo $sitename;
												}?>" />
												</div>
												</div>
												<div class="col-4 mb-2">
												<div class="form-group">
												<label>WebSite Email:</label>
												<input type="email" required placeholder="Website Public Email..." name="sitemail" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['sitemail'];
												}else{
													echo $sitemail;
												}?>" />
												</div>
												</div>
												<div class="col-4 mb-2">
												<div class="form-group">
												<label>Website Color:</label>
												<input type="text" required name="sitecolor" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['sitecolor'];
												}else{
													echo $sitecolor;
												}?>" placeholder="Website Color Code Here..." />
												</div>
												</div>
												</div>
												
												
												<div class="form-group mb-2">
												<label>WebSite Description:</label>
												<textarea required placeholder="Global Description..." class="form-control" type="text" name="sitedesc"><?php if(isset($_POST['update_settings'])){
													echo $_POST['sitedesc'];
												}else{
													echo $sitedesc;
												}?></textarea>
												</div>
												
												
												<div class="row mb-2">
												<div class="col-lg-4 mb-2"><div class="form-group">
												<label>Website Logo URL (<b>PNG Logo, Min: 259 x 69px</b>):</label>
												<input required type="text" name="logo" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['logo'];
												}else{
													echo $logo;
												}?>" placeholder="Website Logo Image Link Here..." />
												</div></div>
												<div class="col-lg-4 mb-2"><div class="form-group">
												<label>Website Favicon URL (<b>Min: 350 x 350px</b>):</label>
												<input required type="text" name="favicon" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['favicon'];
												}else{
													echo $favicon;
												}?>" placeholder="Website Favicon PNG Image Link Here..." />
												</div></div>
												<div class="col-lg-4 mb-2"><div class="form-group">
												<label>Website Thumb URL (<b>Min: 350 x 350px</b>):</label>
												<input required type="text" name="thumb" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['thumb'];
												}else{
													echo $thumb;
												}?>" placeholder="Website Thumb PNG Image Link Here..." />
												</div></div>
												</div>
												
												
												<div class="form-group mb-4">
												<label>Livechat Code:</label>
												<textarea placeholder="Livechat code..." class="form-control" type="text" name="livechat"><?php if(isset($_POST['update_settings'])){
													echo $_POST['livechat'];
												}else{
													echo $livechat;
												}?></textarea>
												</div>
												
												
												<div class="row mb-2">
												<div class="col-lg-2 mb-2">
												<div class="form-group">
												<label>Currency Symbol:</label>
												<input required type="text" placeholder="Symbol..." name="sitecurrencysym" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['sitecurrencysym'];
												}else{
													echo $sitecurrencysym;
												}?>" />
												</div>
												</div>
												<div class="col-lg-2 mb-2">
												<div class="form-group">
												<label>Site Currency:</label>
												<input required type="text" name="sitecurrency" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['sitecurrency'];
												}else{
													echo $sitecurrency;
												}?>" placeholder="Site Currency Here..." />
												</div>
												</div>
												<div class="col-lg-2 mb-2">
												<div class="form-group">
												<label>Minimum Deposit:</label>
												<input type="text" name="minimumdeposit" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['minimumdeposit'];
												}else{
													echo $minimumdeposit;
												}?>" placeholder="Deposit Fee Here..." />
												</div>
												</div>
												<div class="col-lg-4 mb-2">
												<div class="form-group">
												<label>Bank Name:</label>
												<input required type="text" name="bankname" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['bankname'];
												}else{
													echo $bankname;
												}?>" placeholder="Bank Name Here..." />
												</div>
												</div>
												<div class="col-lg-2 mb-2">
												<div class="form-group">
												<label>Preloader:</label>
												<select required name="preloader" class="form-control" id="autologout">
												<?php if(!empty($preloader)){?>
								<option value="<?= $preloader;?>">=>  <?= ucwords($preloader);?></option>				
												<?php }?>
    <option value="">- Choose -</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
</select>
												</div>
												</div>
												</div>
												
												
												<div class="form-group mb-4">
												<label>Terms & Condition:</label>
												<textarea placeholder="Terms code..." class="form-control" id="siteterms" type="text" name="siteterms"><?php if(isset($_POST['update_settings'])){
													echo $_POST['siteterms'];
												}else{
													echo $siteterms;
												}?></textarea>
												<script>
                // Replace the <textarea id="post_content"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'siteterms' );
            </script>
												</div>
												
												
												
												<div class="row mb-4">
												<div class="col-lg-4"><div class="form-group">
												<label>Website Domain:</label>
												<input required type="text" placeholder="Website Domain Here..." name="sitedomain" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['sitedomain'];
												}else{
													echo $sitedomain;
												}?>" />
												</div></div>
												<div class="col-lg-4 mb-2"><div class="form-group">
												<label>WebSite Livechat URL:</label>
												<input type="text" placeholder="Website Address Here..." name="livechaturl" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['livechaturl'];
												}else{
													echo $livechaturl;
												}?>" />
												</div></div>
												<div class="col-lg-4 mb-2"><div class="form-group">
												<label>Website Second Email:</label>
												<input type="text" placeholder="Website Second Email Here..." name="sitemail2" class="form-control" value="<?php if(isset($_POST['update_settings'])){
													echo $_POST['sitemail2'];
												}else{
													echo $sitemail2;
												}?>" />
												</div></div>
												</div>
												
												
												
												
												
										<div class="form-group mb-4">
												<label>Transfer Error Message Text:</label>
												<textarea placeholder="Transfer Error Message here..." class="form-control" type="text" name="transfer_error"><?php if(isset($_POST['update_settings'])){
													echo $_POST['transfer_error'];
												}else{
													echo $transfer_error;
												}?></textarea>
												</div>
												
												
												
												
												<div class="form-group mb-4">
												<label>Withdrawal Error Message Text:</label>
												<textarea placeholder="Withdrawal Error Message here..." class="form-control" type="text" name="withdraw_error"><?php if(isset($_POST['update_settings'])){
													echo $_POST['withdraw_error'];
												}else{
													echo $withdraw_error;
												}?></textarea>
												</div>
												
												
												
												<div class="row mb-3">
												   <div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Transfer Code Name:</label>
												<input type="text" placeholder="eg OTP Here..." name="transfercode_name" class="form-control" value="<?php echo $sitetransfercode_name;?>" />
												</div>
												</div>
												
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Withdrawal Code Name:</label>
												<input type="text" placeholder="eg OTP Here..." name="withdrawcode_name" class="form-control" value="<?php echo $sitewithdrawcode_name;?>" />
												</div>
												</div>
												<div class="col-lg-4">
												    
												<div class="form-group mb-2">
												<label>Default Timezone:</label>
												<input type="text" placeholder="eg America/New_York..." name="default_timezone" class="form-control" value="<?php echo $default_timezone;?>" />
												</div>
												</div>
												    
												</div>
												
												
												<div class="row mb-4">
												   <div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Webmail Email:</label>
												<input required type="email" placeholder="eg khodex@<?php if(!empty($sitedomain)){echo $sitedomain;}else{echo 'website.com';}?>..." name="webmail_email" class="form-control" value="<?php echo $webmail_email;?>" />
												</div>
												</div>
												
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Webmail Password:</label>
												<input required type="text" placeholder="password to the webmail..." name="webmail_email_password" class="form-control" value="<?php echo $webmail_email_password;?>" />
												</div>
												</div>
												    
												</div>
												
												
												
												
												<button class="btn btn-primary btn-lg btn-block" name="update_settings" type="submit">Update All Settings</button>
												</form>
								
								
                            </div>
                        </div>
                    </div>
					</div>
				</div>
            </div>
        </div>
        
		<?php include('footer.php');?>