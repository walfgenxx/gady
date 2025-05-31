<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Editing Transaction #'.$_GET['id'].' - '.$sitename;
$thepage = 'Editing Transaction';
$thepagecode = 'transaction';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if($edit_profile !=='yes'){
	header('location: ./editable-transactions');
}

$result2 = $mysqli->query("SELECT * FROM transactions WHERE transactionid=".$_GET['id']);
    $transrow = $result2->fetch_array();
	
		
		$trans_name = $transrow['name'];
		$trans_userid = $transrow['userid'];
		$transactionid = $transrow['transactionid'];
		$trans_amount = $transrow['amount'];
		$trans_type = $transrow['type'];
		$trans_status = $transrow['status'];
		$trans_action = $transrow['action'];
		$trans_ip = $transrow['ip'];
		$trans_browser = $transrow['browser'];
		$transaction_serial = $transrow['transaction_serial'];
		$trans_description = $transrow['description'];
		$trans_bankname = $transrow['bankname'];
		$trans_category = $transrow['category'];
		$trans_previous_date = $transrow['previous_date'];
		$trans_updated = $transrow['updated'];
		$trans_date = $transrow['date'];
		
		
		
		$result3 = $mysqli->query("SELECT * FROM users WHERE userid=".$transrow['userid']);
    $row2 = $result3->fetch_array();
	
	$trans_client=$row2['firstname'].' '.$row2['lastname'];
	
		
		
		if($transrow['status'] =='success'){
			$statz ='<span class="badge badge-success"><i class="fa fa-check-circle"></i> Success</span>';
		}elseif($transrow['status'] =='pending'){
			$statz ='<span class="badge badge-warning"><i class="fa fa-minus-circle"></i> Pending</span>';
		}elseif($transrow['status'] =='declined'){
			$statz ='<span class="badge badge-danger"><i class="fa fa-times-circle"></i> Declined</span>';
		}  
		
		if($transrow['status'] =='success'){
			$statz2 ='<span style="text-transform: uppercase; font-weight: bold; color: green;">Success <i class="fa fa-check-circle"></i></span>';
		}elseif($transrow['status'] =='pending'){
			$statz2 ='<span style="text-transform: uppercase; font-weight: bold; color: orange;">Pending <i class="fa fa-minus-circle"></i></span>';
		}elseif($transrow['status'] =='declined'){
			$statz2 ='<span style="text-transform: uppercase; font-weight: bold; color: red;">Declined <i class="fa fa-times-circle"></i></span>';
		}  
						 



$erro=""; $imgerr1=""; $errok=""; $msize_err=""; $messagetitle_err=""; $messagecont_err=""; $post_err=""; $post1_err=""; $post2_err=""; $post3_err=""; $post4_err="";$pa_err=""; $cp_exist=""; $pp_err=""; $ft_err=""; $fj_err=""; $fz_err=""; $fz_err2=""; $pc_err="";$pn_err="";$aa_err=""; $ad_err="";$a_exist=""; 					 
	



if (isset($_POST['update_transaction'])) {
    $con = new khodexclass($mysqli);

$thetransid = $_GET['id'];	
	
    if ($con->update_transaction($thetransid,$_POST['amount'],$_POST['type'],$_POST['status'],$_POST['name'],$_POST['bankname'],$_POST['date'],$_POST['ip'],$_POST['browser'],$_POST['description'])) {$erro="good";
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
                            Success! Transaction details has been updated.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>

<div class="wide-block pt-2 pb-2 mb-4">
								<div class="row" style="font-size: 14px;">
								<div class="col-lg-3"><p>Transaction ID: <b>#<?php echo $transrow['transactionid'];?></b></p></div>
								<div class="col-lg-3"><p>Name: <b><?php echo $trans_name;?></b></p></div>
								<div class="col-lg-3"><p>Amount: <b><?php echo $sitecurrencysym.''.number_format($trans_amount);?></b></p></div>
								<div class="col-lg-3"><p>Type: <?= ucwords($trans_type);?></p></div>
								</div>
								
								
								
								<div class="row mb-2" style="font-size: 14px;">
								<div class="col-lg-3"><p>Status: <?= $statz2;?></p>	</div>
								<div class="col-lg-3"><p>Bank: <?= $trans_bankname;?></p>	</div>
								<div class="col-lg-3"><p>Date & Time: <?php echo ''.date('l', strtotime($trans_date)).'';?>, <?php echo ''.date('dS F Y', strtotime($trans_date)).'';?> at <?= date('h:i A', strtotime($trans_date));;?></p>	</div>
								<div class="col-lg-3"><p>Reference ID: <?php echo $transrow['transaction_serial'];?></p></div>
								</div>
								
								
											
														
			
			
		
		
		<p>Description: <?php echo $transrow['description'];?></p>	
		
			
		<?php if(!empty($trans_browser)){?><hr />
		<p>Browser: <?= $trans_browser;?></p><?php }?>	
		<?php if(!empty($trans_ip)){?>
		<p>IP: <?= $trans_ip;?></p><?php }?>
								
								<hr />
								
				<form action="" method="POST" class="needs-validation" novalidate="">
												
												<div class="row mb-2">
												<div class="col-lg-4 mb-2">
												<div class="form-group">
												<label>Amount (<?= $sitecurrencysym;?>):</label>
												<input retype="number" required placeholder="Amount Here..." name="amount" class="form-control khodexcomma" value="<?php echo $trans_amount;?>" />
												<div class="invalid-feedback">
															Please enter an amount.
														</div>
												</div>
												</div>
												<div class="col-lg-4 mb-2">
												<div class="form-group">
												<label>Transaction Type:</label>
												<select required name="type" class="default-select wide form-control">
												<?php if(!empty($trans_type)){?>
							<option value="<?= $trans_type;?>">Currently => <?= ucwords($trans_type);?></option>					
												<?php }?>
    <option value="">-Select The Type-</option>
    <option value="debit">Debit</option>
    <option value="credit">Credit</option>
    <option value="withdrawal">Withdrawal</option>
    <option value="transfer">Transfer</option>
</select><div class="invalid-feedback">choose a transaction type.
														</div></div>
												</div>
												<div class="col-lg-4 mb-2">
												<div class="form-group">
												<label>Status:</label>
												<select required name="status" class="default-select wide form-control">
												<?php if(!empty($trans_status)){?>
							<option value="<?= $trans_status;?>">Currently => <?= ucwords($trans_status);?></option>					
												<?php }?>
    <option value="">-Select Status-</option>
    <option value="pending">Pending</option>
    <option value="success">Success</option>
    <option value="declined">Declined</option>
</select>
<div class="invalid-feedback">
															Please choose its status.
														</div>
														</div></div>
												</div>
												
												<div class="row mb-2">
												<div class="col-lg-3 mb-2"><div class="form-group">
												<label>Name:</label>
												<input type="text" required placeholder="Name Here..." name="name" class="form-control" value="<?php echo $trans_name;?>" />
												<div class="invalid-feedback">
															Please enter a name.
														</div>
												</div></div>
												<div class="col-lg-3 mb-2"><div class="form-group">
												<label>Bank Name:</label>
												<input type="text" required placeholder="Bank Name Here..." name="bankname" class="form-control" value="<?php echo $trans_bankname;?>" />
												<div class="invalid-feedback">
															Please provide the bank name.
														</div>
												</div></div>
												<div class="col-lg-3 mb-2"><div class="form-group">
												<label>Transaction Date:</label>
												<input type="text" required placeholder="Transaction Date Here..." name="date" class="form-control" value="<?php echo $trans_date;?>" />
												<div class="invalid-feedback">
															Transaction date is required
														</div>
												</div></div>
												<div class="col-lg-3 mb-2"><div class="form-group">
												<label>Transaction IP:</label>
												<input type="text" placeholder="Transaction IP Here..." name="ip" class="form-control" value="<?php echo $trans_ip;?>" />
												</div></div>
												</div>
												
												<div class="form-group mb-2">
												<label>Browser Details:</label>
												<textarea placeholder="Browser Details Here..." name="browser" class="form-control"><?php echo $trans_browser;?></textarea>
												</div>
												
												
												<div class="form-group mb-2">
												<label>Transaction Description:</label>
												<textarea required placeholder="Transaction Description Here..." name="description" class="form-control"><?php echo $trans_description;?></textarea>
												<div class="invalid-feedback">
															Please description is needed.
														</div>
												</div>
												
												
												
												
												
												
												<button class="btn btn-lg btn-primary btn-block" name="update_transaction" type="submit">Update Transaction</button>
												</form>		
								
								
								
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


     <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>