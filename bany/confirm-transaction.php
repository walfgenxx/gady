<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Confirm Transaction - '.$sitename;
$thepage = 'Confirm transaction';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if(!isset($_SESSION['transcode'])){
	header('location: ./');
}

if(isset($_GET['cancel'])){
	unset($_SESSION['trans_name'],$_SESSION['trans_desc'],$_SESSION['trans_amount'],$_SESSION['trans_destination'],$_SESSION['transid'],$_SESSION['trans_routing'],$_SESSION['transcode'],$_SESSION['trans_bank'],$_SESSION['trans_userid'],$_SESSION['trans_browser'],$_SESSION['trans_ip'],$_SESSION['timestamp'],$_SESSION['trans_email']);
        header("location: ./");
}





if(isset($_POST['confirm'])){
    
    
    $con = new khodexclass($mysqli);
	if ($con->confirm_transfer($_POST['code'],$transfercode,$thetransfercode_name,$userid,$sitemail)) {
		
		$_SESSION['trial'] = '1';
	
	$newbalance = $balance-$_SESSION['trans_amount'];
	
	
	$mysqli->query("UPDATE users SET "
                ."balance='".$newbalance."'"
		
                ." WHERE userid='".$userid."'");
$type='transfer';
$action='transfer';
$status='success';
$category='Account';

$length = 1;    
$transaction_a = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

$transaction_serial = $transaction_a.''.mt_rand(1000000000000000,9999999999999999)."".mt_rand(1000000000000000,9999999999999999);

$mysqli->query("INSERT INTO transactions(userid, transactionid, amount, type, status, action, name, ip, browser, transaction_serial, description, bankname, category) VALUES("
               . "'".$userid."',"
                . "'".$_SESSION['transid']."',"
                . "'".$_SESSION['trans_amount']."',"
                . "'".$type."',"
                . "'".$status."',"
                . "'".$action."',"
                . "'".$_SESSION['trans_name']."',"
                . "'".$IpInfo."',"
                . "'".$BrowserInfo."',"
                . "'".$transaction_serial."',"
                . "'".$_SESSION['trans_desc']."',"
                . "'".$_SESSION['trans_bank']."',"
                . "'".$category."'"
 . ")"); 


header('location: transaction-completed');
    } else {
      $erro="transfail";
    }

	
	
	

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
                    <div class="transfer-amount">
                        <span class="caption">Amount</span>
                        <h2><?= $sitecurrencysym.''.number_format($_SESSION['trans_amount']).' '.$sitecurrency;?></h2>
                    </div>
                    <div class="from-to-block mb-5">
                        <div class="item text-start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-arrow-up-right-square-fill" viewBox="0 0 16 16">
  <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM5.904 10.803 10 6.707v2.768a.5.5 0 0 0 1 0V5.5a.5.5 0 0 0-.5-.5H6.525a.5.5 0 1 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 .707.707z"/>
</svg>
                            <strong><?= ucwords($fullname);?></strong>
                        </div>
                        <div class="item text-end">
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#3c3" class="bi bi-arrow-down-right-square-fill" viewBox="0 0 16 16">
  <path d="M14 16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12zM5.904 5.197 10 9.293V6.525a.5.5 0 0 1 1 0V10.5a.5.5 0 0 1-.5.5H6.525a.5.5 0 0 1 0-1h2.768L5.197 5.904a.5.5 0 0 1 .707-.707z"/>
</svg>
                            <strong><?= ucwords($_SESSION['trans_name']);?></strong>
                        </div>
                        <div class="arrow"></div>
                    </div>
                </div>
                <?php
if ($erro == "transfail") {
    ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>Error!<br></strong><ol> <?php echo"". $pn_err ."".$ad_err ."".$pc_err."".$pw_err."".$errok."". $pa_err ."".$cp_exist."".$pp_err."".$ft_err."".$fj_err."".$fz_err."".$fz_err2."".$imgerr1."".$imgerr2."".$imgerr3."".$imgerr4."".$imgerr5."".$imgerr6."".$imgerr7."".$imgerr8; ?></ol>
        </div>
    <?php
}?>
                <h2 class="mb-2 mt-2">Verify the Transaction</h2>
                <p>
                    You are sending <strong class="text-primary"><?= $sitecurrencysym.''.number_format($_SESSION['trans_amount']).' '.$sitecurrency;?></strong> to <?= ucwords($_SESSION['trans_name']);?>. <br>Are you sure?
                </p>
            </div>
        </div>
        
        
        
        

        <div class="fixed-bar">
            <div class="row">
                <div class="col-6">
                    <a href="?cancel" class="btn btn-lg btn-outline-secondary btn-block">Cancel</a>
                </div>
                <div class="col-6">
                    <a data-bs-toggle="modal" data-bs-target="#confirm_transfer" href="#" class="btn btn-lg btn-primary btn-block">Confirm</a>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        <!-- Confirm Action Sheet -->
        <div class="modal fade action-sheet" id="confirm_transfer" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Transaction</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form action="" method="POST">
                                
                                
                                
                                <div align="center"><svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-key text-primary" viewBox="0 0 16 16">
  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
<hr />

<div style="background: #ffebe6; color: #000; border: 0.5px solid red; border-radius: 10px; padding: 10px; margin-bottom: 4px; font-size: 12px;"><i class="fa fa-warning" style="color: red"></i> <b>NOTE:</b> to secure and complete this transaction of <b><?= $sitecurrencysym.''.number_format($_SESSION['trans_amount']).' '.$sitecurrency;?></b> to <b><?= ucwords($_SESSION['trans_name']);?></b>, you need a <b><?= $thetransfercode_name;?></b>, kindly provide the <b><?= $thetransfercode_name;?></b> below or contact support: <a href="mailto:<?= $sitemail;?>"><b><?= $sitemail;?></b></a></div>

<div class="form-group basic">
                                    <label class="label"><?= $thetransfercode_name;?></label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addonb1"><i class="fa fa-key"></i></span>
                                        <input autocomplete="off" required pattern="\d*" type="text" name="code" class="form-control" placeholder="<?= $thetransfercode_name;?> here..."
                                           >
                                    </div>
                                </div></div>


                                

                                

                                <div class="form-group basic">
                                    <button type="submit" name="confirm" class="btn btn-primary btn-block btn-lg">Confirm Transaction</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Confirm Action Sheet -->
        
        
        
        
        
        

    </div>
    <?php include('allJS.php');?>