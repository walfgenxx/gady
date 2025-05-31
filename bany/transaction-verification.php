<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Confirm Transaction - '.$sitename;
$thepage = 'Confirm transaction';

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

include('header.php'); include('app-header-back.php');?>
        <div class="right"> </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section">
            <div class="splash-page mt-5 mb-5">

                <div class="transfer-verification">
                    <div class="transfer-amount">
                        <span class="caption">Amount</span>
                        <h2>$ 50.00</h2>
                    </div>
                    <div class="from-to-block mb-5">
                        <div class="item text-start">
                            <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w48">
                            <strong>Jonathan</strong>
                        </div>
                        <div class="item text-end">
                            <img src="assets/img/sample/avatar/avatar4.jpg" alt="avatar" class="imaged w48">
                            <strong>Amanda</strong>
                        </div>
                        <div class="arrow"></div>
                    </div>
                </div>
                <h2 class="mb-2 mt-2">Verify the Transaction</h2>
                <p>
                    You are sending <strong class="text-primary">$ 50.00</strong> to Amanda. <br>Are you sure?
                </p>
            </div>
        </div>

        <div class="fixed-bar">
            <div class="row">
                <div class="col-6">
                    <a href="app-pages.html" class="btn btn-lg btn-outline-secondary btn-block">Cancel</a>
                </div>
                <div class="col-6">
                    <a href="app-pages.html" class="btn btn-lg btn-primary btn-block">Confirm</a>
                </div>
            </div>
        </div>

    </div>
    <?php include('allJS.php');?>