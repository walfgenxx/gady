<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Withdrawal Completed - '.$sitename;
$thepage = 'Withdrawal Completed';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if($_SESSION['w_trial']!=='1'){
	header('location: ./confirm-withdrawal');
}

if(isset($_GET['ok'])){
	unset($_SESSION['w_name'],$_SESSION['w_desc'],$_SESSION['w_amount'],$_SESSION['w_destination'],$_SESSION['w_transid'],$_SESSION['trans_routing'],$_SESSION['w_transcode'],$_SESSION['w_bank'],$_SESSION['w_userid'],$_SESSION['w_browser'],$_SESSION['w_ip'],$_SESSION['w_view'],$_SESSION['w_views'],$_SESSION['w_trial'],$_SESSION['w_account'],$_SESSION['w_email'],$_SESSION['w_timestamp']);
        header("location: ./transactions");
}


include('app-header-back.php');?>
        <div class="right"> </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section">
            <div class="splash-page mt-5 mb-5">

                <div class="transfer-verification">
				<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#3c3" class="bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
</svg>
                </div>
                <h2 class="mb-2 mt-2">Withdrawal Completed</h2>
                <p>
                    <b><?= $sitecurrencysym.''.number_format($_SESSION['w_amount']).' '.$sitecurrency;?></b> has been sent to your <?= ucwords($_SESSION['w_bank']);?> account.
                </p>
				<hr />
				<p>Reference ID: #<?= $_SESSION['w_transid'];?></p>
            </div>
        </div>

        <div class="fixed-bar">
            <div class="row">
                <div class="col-12">
                    <a href="?ok" class="btn btn-lg btn-primary btn-block">View Transaction</a>
                </div>
            </div>
        </div>

    </div>
    <?php include('allJS.php');?>