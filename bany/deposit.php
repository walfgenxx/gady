<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Bank Deposit - '.$sitename;
$thepage = 'Bank Deposit';
$thepagecode = 'deposit';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

// Random Bank Address

$first = '100 North Tryon Street Charlotte, North Carolina 28255';
$second = '135 S. LaSalle Street Chicago, Illinois 60603';
$third = 'One Bryant Park New York, New York 10036';
$fourth ='315 Montgomery Street San Francisco, California 94104';
$fifth = '701 Brickell Avenue Miami, Florida 33131';



$genewallet = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		
$swiftcode = substr(str_shuffle($genewallet), 0, 13);
$routing = mt_rand(1000000,9999999).''.mt_rand(1000000,9999999);

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if (isset($_POST['add_ticket'])) {
    $con = new khodexclass($mysqli);

if ($con->bank_ticket($userid,$_POST['amount'],$_POST['content'],$_POST['ticketid'],$sitename,$sitedomain,$webmail_email,$webmail_email_password,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo)) {$erro="good";
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
    Success! Your ticket has been submited, your ticket ID is [<?= $_POST['ticketid'];?>].
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>

		
<div class="section-title">Bank Deposit<br /><a class="btn btn-warning" href="deposit-btc"><i class="fa fa-btc" style="margin-right: 10px;"></i> Go to Bitcoin Deposit</a></div>
            <div class="card mb-4">
                <div class="card-body">
                    
                    <p>Use the below Bank Account Details below to make deposit. </p><p>kindly inform the customer billing department by opening a Support ticket after payment stating clearing your Bank deposit details for approval</p>
                  <hr />
                  
                  <form class="mb-4">
												
												<div class="row mt-4">
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Bank Name: <span onclick="bankname()" style="cursor: pointer;" class="mb-2 badge badge-success badge-sm"><i class="fa fa-copy"></i> Copy</span></label>
												<input id="bankname" onclick="bankname()" readonly class="form-control" value="<?php echo $bankname;?>" />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Bank Address: <span onclick="bankaddress()" style="cursor: pointer;" class="mb-2 badge badge-success badge-sm"><i class="fa fa-copy"></i> Copy</span></label>
												<input id="bankaddress" onclick="bankaddress()" readonly class="form-control" value="<?php $array  = array($first, $second, $third, $fourth, $fifth);
    echo $array[mt_rand(0, count($array) - 1)];?>" />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Account Number: <span onclick="accountnumber()" style="cursor: pointer;" class="mb-2 badge badge-success badge-sm"><i class="fa fa-copy"></i> Copy</span></label>
												<input id="accountnumber" onclick="accountnumber()" class="form-control" value="<?php echo $accountnumber;?>" readonly />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Account Name: <span onclick="accountname()" style="cursor: pointer;" class="mb-2 badge badge-success badge-sm"><i class="fa fa-copy"></i> Copy</span></label>
												<input id="accountname" onclick="accountname()" class="form-control" value="<?php echo $fullname;?>" readonly />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Swift IBAN: <span onclick="swift()" style="cursor: pointer;" class="mb-2 badge badge-success badge-sm"><i class="fa fa-copy"></i> Copy</span></label>
												<input id="swift" onclick="swift()" readonly class="form-control" value="<?php echo $swiftcode;?>" />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Routing Number: <span onclick="routing()" style="cursor: pointer;" class="mb-2 badge badge-success badge-sm"><i class="fa fa-copy"></i> Copy</span></label>
												<input id="routing" onclick="routing()" class="form-control" value="<?php echo $routing;?>" readonly />
												</div>
												</div>
												</div>
												
												</form>
                  
                  
                  
                  
                  
                  <hr />
                  
                  
                  
                  
                  	
	<div class="section-title"><i class="fa fa-bell" style="color: red;"></i> Notify Us After Payment</div>
	<hr />
	
	<form action="" enctype="multipart/form-data" method="POST">
				<input name="ticketid" type="hidden" value="<?= mt_rand(1000000,9999999);?>"/>								
												<div class="row">
												<div class="col-lg-12">
												<div class="form-group mb-2">
												<label>Deposited Amount:</label>
												<input required type="text" placeholder="Deposited amount here..." autocomplete="off" name="amount" pattern="\d*" pattern="[0-9]*" class="form-control" value="<?php if(isset($_POST['add_ticket'])){if ($erro == "fatal"){ echo $_POST['amount'];}}?>" />
												</div>
												</div>
												<div class="col-lg-12">
												<div class="form-group mb-2">
												<label>Description:</label>
												<textarea required name="content" class="form-control" placeholder="Description Here..."><?php if(isset($_POST['add_ticket'])){if ($erro == "fatal"){ echo $_POST['content'];}}?></textarea>
												</div>
												</div>
												</div>
												
												<button class="btn btn-lg btn-primary btn-block" name="add_ticket" type="submit">Submit Ticket</button>
												</form>	
							
                  
                  
                  
                  
                  
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->
    
    
<script>
function bankname() {
  /* Get the text field */
  var copyText = document.getElementById("bankname");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Bank Name Copied: " + copyText.value);
}
</script>






<script>
function bankaddress() {
  /* Get the text field */
  var copyText = document.getElementById("bankaddress");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Bank Address Copied: " + copyText.value);
}
</script>






<script>
function accountnumber() {
  /* Get the text field */
  var copyText = document.getElementById("accountnumber");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Account Number Copied: " + copyText.value);
}
</script>





<script>
function accountname() {
  /* Get the text field */
  var copyText = document.getElementById("accountname");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Account Name Copied: " + copyText.value);
}
</script>





<script>
function swift() {
  /* Get the text field */
  var copyText = document.getElementById("swift");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Swift IBAN Copied: " + copyText.value);
}
</script>





<script>
function routing() {
  /* Get the text field */
  var copyText = document.getElementById("routing");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Routing Number Copied: " + copyText.value);
}
</script>

	<?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>