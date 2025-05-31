<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Transaction Completed - '.$sitename;
$thepage = 'Transaction Completed';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if($_SESSION['trial']!=='1'){
	header('location: ./confirm-transaction');
}

if(isset($_GET['ok'])){
	unset($_SESSION['trial'],$_SESSION['trans_name'],$_SESSION['trans_desc'],$_SESSION['trans_amount'],$_SESSION['trans_destination'],$_SESSION['transid'],$_SESSION['trans_routing'],$_SESSION['transcode'],$_SESSION['trans_bank'],$_SESSION['trans_userid'],$_SESSION['trans_browser'],$_SESSION['trans_ip'],$_SESSION['timestamp'],$_SESSION['trans_email']);
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
                <h2 class="mb-2 mt-2">Transaction Completed</h2>
                <p>
                    <b><?= $sitecurrencysym.''.number_format($_SESSION['trans_amount']).' '.$sitecurrency;?></b> has been sent to <?= ucwords($_SESSION['trans_name']);?>.
                </p>
				<hr />
				<p>Reference ID: #<?= $_SESSION['transid'];?></p>
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