<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Bitcoin (BTC) Deposit - '.$sitename;
$thepage = 'Bitcoin (BTC) Deposit';
$thepagecode = 'btcdeposit';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if (isset($_POST['add_btcticket'])) {
    $con = new khodexclass($mysqli);
    
    // Bitcoin Deposit Ticket Mailing

if ($con->btc_ticket($userid,$_POST['amount'],$_POST['content'],$_POST['ticketid'],$sitename,$sitedomain,$webmail_email,$webmail_email_password,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo)) {$erro="good";
    } else {
      $erro="bad";
    } 
    

}



$query2 = "SELECT * FROM wallets WHERE type ='btc' ORDER by RAND() LIMIT 1";
        $result2 = $mysqli->query($query2);
		
       
     $roww = $result2->fetch_array();
     $paymentwallet=$roww['wallet'];
			$paymentwallet_img=$roww['img']; 
     
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
    Success! Your ticket has been submited, your ticket ID is [<?= $_POST['ticketid'];?>].
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>

		
<div class="section-title">Bitcoin Deposit<br /><a class="btn btn-success" href="deposit"><i class="fa fa-bank" style="margin-right: 10px;"></i> Go to Bank Deposit</a></div>
            <div class="card mb-4">
                <div class="card-body">
                    
                    
                    <p>Use the below BTC Wallet Address to make deposit.</p><p>kindly inform the customer billing department by opening a Support ticket after payment stating clearing your deposit details for approval</p>
                  <hr />
                  
                  <span class="mb-4">
												
												<div class="row mt-4">
												<div class="col-lg-12">
												<div class="form-group mb-2">
											<center><img src="../images/<?= $paymentwallet_img;?>" style="border-radius: 10px; max-width: 70%;" /></center>
												</div>
												</div>
												<div class="col-lg-12">
												<div class="form-group mb-2">
												<label>Wallet Address:</label>
												<input id="walletaddress" onclick="walletaddress()" readonly class="form-control" value="<?= $paymentwallet;?>" />
												</div>
												</div>
												
												<div class="col-lg-12">
												<button onclick="walletaddress()" style="cursor: pointer; width: 100%;" class="mb-2 btn btn-success btn-lg"><i class="fa fa-copy"></i> Copy Wallet Address</button></div>
												
												</div>
												
												</span>
                  
                  
                  
                  
                  
                  <hr />
                  
                  
                  
                  
                  	
	<div class="section-title"><i class="fa fa-bell" style="color: red;"></i> Notify Us After Payment</div>
	<hr />
	
	<form action="" enctype="multipart/form-data" method="POST">
				<input name="ticketid" type="hidden" value="<?= mt_rand(1000000,9999999);?>"/>								
												<div class="row">
												<div class="col-lg-12">
												<div class="form-group mb-2">
												<label>Bitcoin Deposited Amount:</label>
												<input id="amount" oninput="validateNumber(this);" required type="text" placeholder="E.g: 0.136488" autocomplete="off" name="amount" class="form-control" value="<?php if(isset($_POST['add_btcticket'])){if ($erro == "fatal"){ echo $_POST['amount'];}}?>" />
												</div>
												</div>
												<div class="col-lg-12">
												<div class="form-group mb-2">
												<label>Description:</label>
												<textarea required name="content" class="form-control" placeholder="Description Here..."><?php if(isset($_POST['add_btcticket'])){if ($erro == "fatal"){ echo $_POST['content'];}}?></textarea>
												</div>
												</div>
												</div>
												
												<button class="btn btn-lg btn-primary btn-block" name="add_btcticket" type="submit">Submit Ticket</button>
												</form>	
							
                  
                  
                  
                  
                  
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->
 
<script>
var validNumber = new RegExp(/^\d*\.?\d*$/);
var lastValid = document.getElementById("amount").value;
function validateNumber(elem) {
  if (validNumber.test(elem.value)) {
    lastValid = elem.value;
  } else {
    elem.value = lastValid;
  }
}
</script>

<script>
function walletaddress() {
  /* Get the text field */
  var copyText = document.getElementById("walletaddress");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Wallet Address Copied: " + copyText.value);
}
</script>
	<?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>