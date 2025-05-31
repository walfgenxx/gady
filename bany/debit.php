<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Deduct Money - '.$sitename;
$thepage = 'Debit Funds';
$thepagecode = 'debit';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if($debit_account !=='yes'){
	header('location: settings');
}

if (isset($_POST['deduct'])) {
    $con = new khodexclass($mysqli);
    if ($con->deduct_money_user($debit_account,$userid,$_POST['sender'],$_POST['amount'],$_POST['senderbank'],$_POST['description'],$BrowserInfo,$IpInfo)) {$erro="good";
    } else {
      $erro="fatal";
    }
}

include('app-header-back.php');?>
        <div class="right">
            
        </div>
    </div>
    <!-- * App Header -->

    <div id="appCapsule">
<div class="section inset mt-2 mb-3">


<?php if ($erro == "fatal") {
    ?><div class="alert alert-imaged alert-danger alert-dismissible fade show mb-2" role="alert">
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
                            Success! <?= $sitecurrencysym;?><?= number_format($_POST['amount']);?> has been deducted from your account balance.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								<?php }
		?>

	
					
<div class="wide-block pt-2 pb-2">
                <h3>Balance: <?= $sitecurrencysym;?><?= number_format($balance);?></h3>
				<hr />
				
				
				<form action="" method="POST">
				
				<div class="row">
				<div class="col-4 col-lg-4"><div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="text4b">Amount (<?= $sitecurrencysym;?>)</label>
                                <input type="text" class="form-control" name="amount" id="text4b" placeholder="<?= $sitecurrencysym;?>">
                                <i class="clear-input">
                                    <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                </i>
                            </div>
                        </div></div>
				<div class="col-8 col-lg-4"><div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="text4b">Transaction Name</label>
                                <input type="text" class="form-control" name="sender" id="text4b" placeholder="Text Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                </i>
                            </div>
                        </div></div>
				<div class="col-lg-4"><div class="form-group boxed">
                            <div class="input-wrapper">
                                <label class="label" for="text4b">Bank Name</label>
                                <input type="text" class="form-control" name="senderbank" id="text4b" placeholder="Text Input">
                                <i class="clear-input">
                                    <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                </i>
                            </div>
                        </div></div>
				</div>
				
				
				<div class="form-group boxed">
				<label class="label" for="text4b">Description</label>
							   <textarea class="form-control" name="description" placeholder="Brief Desc..."></textarea>
							   </div>
				
				
				<button class="btn btn-primary btn-block" name="deduct" type="submit">Deduct Now</button>
				</form>
				
				
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


     <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>