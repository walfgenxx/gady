<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = $_SESSION['user']['bankname']." &raquo; Savings & Checking - ".$sitename;
$thepage = 'home';
$thepagecode = 'home';

include('header.php'); 


if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}


if(isset($_GET['delete_card'])){ if($clear=$mysqli->query("DELETE FROM cards WHERE cardid=".$_GET['delete_card'])){
   header('location: ./');
    
}}

include('app-header.php');


if (isset($_POST['transfer'])) {
    $con = new khodexclass($mysqli);
    if ($con->transfer($balance,$transferban,$userid,$_POST['account'],$_POST['destination'],$_POST['destination_name'],$_POST['sending_amount'],$_POST['sending_routing'],$_POST['sending_bank'],$_POST['description'],$sitename,$sitedomain,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo,$transfer_error_msg)) {
		header('location: confirm-transaction');
    } else {
      $erro="trans_fail";
    }
}

if (isset($_POST['withdraw'])) {
    $con = new khodexclass($mysqli);
    if ($con->withdraw($fullname,$balance,$accountnumber,$withdrawban,$userid,$_POST['w_account'],$_POST['w_amount'],$_POST['w_bank'],$sitename,$sitedomain,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo,$mywithdraw_error_msg)) {
		header('location: confirm-withdrawal');
    } else {
      $erro="trans_fail";
    }
}
?><!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
		
		<?php if ($erro == "trans_fail") {
    ?><div class="alert alert-imaged alert-danger alert-dismissible fade show mb-2" role="alert">
                        <div class="icon-wrap">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
                        </div>
                        <div>
                            Error! <br/>
							<ul> <?php echo"". $pn_err ."".$ad_err ."".$pc_err."".$errok."". $pa_err ."".$a_exist."".$cp_exist."".$pp_err."".$msize_err."".$ft_err."".$fj_err."".$fz_err."".$fz_err2; ?></ul>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
	
	
    <?php
}
?>
   <div class="wallet-card">
       
       <h2><div class="image-wrapper">
                            <img src="doc/images/<?= $pics;?>" alt="<?= $fullname;?>" class="imaged  w36">
                        Hi, <?= $fullname;?>.</div> </h2>
                <!-- Balance -->
                <?php if(empty($accountnumber2)){?>
                
                <div class="balance">
                    <div class="left">
                        <span class="title">Checking Balance</span>
                        <h1 style="font-size: 24px;" class="total"><span id="main"><?= $sitecurrencysym;?><?= number_format($balance);?>.<?php echo mt_rand(1,99);?></span>
<span id="hidden"><?= $sitecurrencysym;?>*****</span>
						
						
					<?php if(!empty($pendingbalance)){?>	<span class="title" style="font-size: 10px; color: #999;"><i class="fa fa-minus-circle" style="color: orange;"></i> Pending Balance: <?= $sitecurrencysym;?><?= number_format( $pendingbalance,1);?></span><?php }?>
						
						
                    </div>
                    <div class="right">
                        <span class="button" style="cursor: pointer" onclick="Hide();"><i class="fa fa-eye"></i></span>
                    </div>
                </div>
                
                <?php }else{?>
                <div data-form-order="1">

    <div id="opening-question" style="padding-bottom: 10px; border-bottom: 1px solid <?= $sitecolor;?>;">
      <select id="select-box" class="js-revealer form-control" style="border: 0.5px solid <?= $sitecolor;?>;">
      <option value="1" data-r-show-target=".opt-1, .opt-other" data-r-hide-target=".opt-2, .opt-3" selected>Checking - ****<?php echo substr($accountnumber, -4);?></option>
      <option value="2" data-r-show-target=".opt-2, .opt-other" data-r-hide-target=".opt-1, .opt-3">Savings - ****<?php echo substr($accountnumber2, -4);?></option>
    </select>
    </div>

    <!-- Checking Balance -->
    <div data-response="op1" class="opt-1">
      <div class="balance">
                    <div class="left">
                        <span class="title">Checking Balance</span>
                        <h1 style="font-size: 24px;" class="total"><span id="main"><?= $sitecurrencysym;?><?= number_format($balance);?>.<?php echo $randy1;?></span>
<span id="hidden"><?= $sitecurrencysym;?>*****</span>
						
						
					<?php if(!empty($pendingbalance)){?>	<span class="title" style="font-size: 10px; color: #999;"><i class="fa fa-minus-circle" style="color: orange;"></i> Pending Balance: <?= $sitecurrencysym;?><?= number_format( $pendingbalance,1);?></span><?php }?>
						
						
                    </div>
                    <div class="right">
                        <span class="button" style="cursor: pointer" onclick="Hide();"><i class="fa fa-eye"></i></span>
                    </div>
                </div>
    </div>
    <!-- Checking Balance end -->
    
    
    
    
    
    
    
    
    
    
    <!-- Savings Balance -->
    <div data-response="op2" class="opt-2 is-hidden">
      <div class="balance">
                    <div class="left">
                        <span class="title">Savings Balance</span>
                        <h1 style="font-size: 24px;" class="total"><span id="main2"><?= $sitecurrencysym;?><?= number_format($balance2);?>.<?php echo $randy2;?></span>
<span id="hidden2"><?= $sitecurrencysym;?>*****</span>
						
						
					<?php if(!empty($pendingbalance)){?>	<span class="title" style="font-size: 10px; color: #999;"><i class="fa fa-minus-circle" style="color: orange;"></i> Pending Balance: <?= $sitecurrencysym;?><?= number_format( $pendingbalance,1);?></span><?php }?>
						
						
                    </div>
                    <div class="right">
                        <span class="button" style="cursor: pointer" onclick="Hide2();"><i class="fa fa-eye"></i></span>
                    </div>
                </div>
    </div>
    <!-- Savings Balance end -->
  </div>
                <?php }?>
   
                <!-- * Balance -->
                
                <?php if(!empty($notice)){?>
                <div class="alert alert-warning alert-dismissible mb-1" style="background: #ffffe6; padding: 3px 10px 3px 10px; color: #1a1a1a; font-size: 12px; line-height: 150%; font-weight: semi-bold;">
  <i class="fa fa-warning" style="color: orange;"></i> <?= $notice;?>
</div>
                <?php }?>
                <!-- Wallet Footer -->
                <div class="wallet-footer">
                    <div class="item">
                        <a href="deposit" title="Withdraw">
                            <div class="icon-wrapper bg-danger">
                                <ion-icon name="arrow-down-outline" title="Withdraw"></ion-icon>
                            </div>
                            <strong title="Withdraw">Deposit</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                            <div class="icon-wrapper">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <strong>Send</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="cards">
                            <div class="icon-wrapper bg-success">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            <strong>Cards</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="loan">
                            <div class="icon-wrapper bg-warning">
                                <i class="fa fa-money" name="swap-vertical"></i>
                            </div>
                            <strong>Quick Loan</strong>
                        </a>
                    </div>

                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
        <!-- Wallet Card -->

        <!-- Deposit Action Sheet -->
        <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Balance</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form action="load" method="GET">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account1">From</label>
                                        <select class="form-control custom-select" id="account1">
                                            <option value="<?= $accountnumber;?>">Checking (*** <?= substr($accountnumber, -4);?>)</option>
											
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addona1">$</span>
                                        <input pattern="\d*" autocomplete="off" type="number" name="money" class="form-control khodexcomma" placeholder="Enter an amount"
                                          >
                                    </div>
                                </div>


                                <div class="form-group basic">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg"
                                    >Deposit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Deposit Action Sheet -->

        <!-- Withdraw Action Sheet -->
        <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Withdraw Money</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form action="" method="POST">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">From</label>
                                        <select class="form-control custom-select" id="account2d">
                                            <option value="0">Checking (*** <?php echo substr($accountnumber, -4);?>) - <?= $sitecurrencysym;?><?= number_format($balance);?>.<?php echo $randy1;?></option>
                                            
                                            
                                            <?php if(!empty($accountnumber2)){?><option value="1">Savings (*** <?php echo substr($accountnumber2, -4);?>) - <?= $sitecurrencysym;?><?= number_format($balance2);?>.<?php echo $randy2;?></option><?php }?>
                                        </select>
                                    </div>
                                </div>


<div class="row">
<div class="col-6"><div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">To</label>
                                        <input type="text" pattern="\d*" autocomplete="off" name="w_account" class="form-control" id="text11d" placeholder="Enter IBAN">
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div></div>
<div class="col-6"><div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">Bank</label>
                                        <input type="text" name="w_bank" class="form-control" id="text11d" placeholder="Enter Bank name">
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div></div>
</div>




<div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addonb1">$</span>
                                        <input pattern="\d*" autocomplete="off" type="text" name="w_amount" class="form-control khodexcomma" placeholder="Enter an amount"
                                           >
                                    </div>
                                </div>
                                

                                

                                <div class="form-group basic">
                                    <button type="submit" name="withdraw" class="btn btn-primary btn-block btn-lg">Withdraw</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Withdraw Action Sheet -->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Send Money | <span style="color: red;cursor: pointer;" data-bs-dismiss="modal">Close (X)</span></h5>
                    </div> 
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form method="POST" action="">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2">From</label>
                                        <select name="account" class="form-control custom-select" id="account2">
                                            <option value="<?= $accountnumber;?>">Checking (*** <?= substr($accountnumber, -4);?>) - <?= $sitecurrencysym;?><?= number_format($balance);?>.<?php echo $randy1;?></option>
                                            
                                            
                                            <?php if(!empty($accountnumber2)){?><option value="1">Savings (*** <?php echo substr($accountnumber2, -4);?>) - <?= $sitecurrencysym;?><?= number_format($balance2);?>.<?php echo $randy2;?></option><?php }?>
                                        </select>
                                    </div>
                                </div>



<div class="row">
<div class="col-6"><div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11">To</label>
                                        <input name="destination" pattern="\d*" autocomplete="off" type="text" class="form-control" id="text11"
                                            placeholder="Enter Account Number">
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div></div>
<div class="col-6"><div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11">Account Name</label>
                                        <input name="destination_name" type="text" class="form-control" id="text11"
                                            placeholder="Enter Account name">
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div></div>
</div>

<div class="row">
<div class="col-6"><div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input max="<?= $balance;?>" name="sending_amount" pattern="\d*" autocomplete="off" type="number" class="form-control khodexcomma" placeholder="Enter an amount">
                                    </div>
                                </div></div>
<div class="col-6"><div class="form-group basic">
                                    <label class="label">Routing</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon1">#</span>
                                        <input name="sending_routing" type="text" class="form-control" placeholder="Enter Routing...">
                                    </div>
                                </div></div>
</div>


<div class="form-group basic">
                                    <label class="label">Bank Name</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon1">#</span>
                                        <input name="sending_bank" type="text" class="form-control" placeholder="Enter a bank name">
                                    </div>
                                </div>
								
								
								
								<div class="form-group basic">
                                    <label class="label">Description</label>
                                    <div class="input-group mb-2">
                                        <textarea name="description" type="text" class="form-control" placeholder="Enter a description"></textarea>
                                    </div>
                                </div>



                                

                                

                                <div class="form-group basic">
                                    <button type="submit" name="transfer" class="btn btn-primary btn-block btn-lg"
                                        >Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet -->

        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Income</div>
                        <div style="font-size: 18px;" class="value text-success"><?= $sitecurrencysym.''.number_format($income);?></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Expenses</div>
                        <div style="font-size: 18px;" class="value text-danger"><?= $sitecurrencysym.''.number_format($expenses);?></div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Total Bills</div>
                        <div style="font-size: 18px;" class="value"><?= $sitecurrencysym.''.number_format($totalbills);?></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Savings</div>
                        <div style="font-size: 18px;" class="value"><?= $sitecurrencysym.''.number_format($savings);?></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Stats -->

        <!-- Transactions -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title" style="font-size: 18px;"><i class="fa fa-refresh"></i> Recent Transactions</h2>
                <a href="transactions" class="link">View All</a>
            </div>
            <div class="transactions">
                <?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM transactions WHERE userid=".$row['userid']." ORDER by id DESC LIMIT 10";
        $result = $mysqli->query($query);
        $c= 0;
        while ($transrow = $result->fetch_array()) {
			
			
            //$c++;
		
		
		$result2 = $mysqli->query("SELECT * FROM users WHERE userid=".$transrow['userid']);
    $row2 = $result2->fetch_array();
	
	$trans_client=$row2['firstname'].' '.$row2['lastname'];
		
		$trans_name = ucfirst($transrow['name']);
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
		
	
		if($trans_type=='debit'){
			$sym = '-';
			$color_class='danger';
		}elseif($trans_type=='transfer'){
			$sym = '-';
			$color_class='danger';
		}elseif($trans_type=='withdrawal'){
			$sym = '-';
			$color_class='danger';
		}else{
			$sym = '+';
			$color_class='success';
		}
		
		
		if($transrow['status'] =='success'){
			$statz ='<span class="badge badge-success"><i class="fa fa-check-circle"></i> Success</span>';
		}elseif($transrow['status'] =='pending'){
			$statz ='<span class="badge badge-warning"><i class="fa fa-minus-circle"></i> Pending</span>';
		}elseif($transrow['status'] =='declined'){
			$statz ='<span class="badge badge-danger"><i class="fa fa-times-circle"></i> Declined</span>';
		}  
		
		if($transrow['status'] =='success'){
			$color = '#3c3';
			$statz2 ='<span style="text-transform: uppercase; font-weight: bold; color: #3c3;">Success <i class="fa fa-check-circle"></i></span>';
		}elseif($transrow['status'] =='pending'){
			$color = 'orange';
			$statz2 ='<span style="text-transform: uppercase; font-weight: bold; color: orange;">Pending <i class="fa fa-minus-circle"></i></span>';
		}elseif($transrow['status'] =='declined'){
			$color = 'red';
			$statz2 ='<span style="text-transform: uppercase; font-weight: bold; color: red;">Declined <i class="fa fa-times-circle"></i></span>';
		}  
		
		
		$nuz = $nuz+1;
		
		
		
		?>
                <a href="transaction?id=<?= $transactionid;?>" class="item">
                    <div class="detail">
                        <?php if($trans_type=='credit'){?>
						<svg title="<?= ucwords($trans_status);?>" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="<?= $color;?>" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg>
						<?php }else{?>
						<svg title="<?= ucwords($trans_status);?>" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="<?= $color;?>" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
						<?php }?>
                        <div style="margin-left: 10px;">
                            <strong><?php echo khodex_character_limit($trans_name,12);?></strong>
                            <p><?= ucwords($trans_type);?>: <?php echo khodex_character_limit($trans_bankname,20);?></p>

                        </div>
                    </div>
                    <div class="right">
                        <div style="float: right; right: 0;" class="price text-<?= $color_class;?>"><?= $sym;?> <?= $sitecurrencysym.''.number_format($trans_amount);?>
						
						
</div><br /><p class="text-small">
                    <?php $addHours = new DateTime($trans_date);
$addHours->modify('-6 hours');
echo $addHours->format('M d, Y');?>
                                    </p>
                    </div>
                </a>
		<?php }?>
				
				<?php if($transcount==0){echo '<center><h2>No Transaction Yet!</h2><hr /></center>';}?>
            </div>
        </div>
        <!-- * Transactions -->

        <!-- my cards -->
        <div class="section full mt-4">
            <div class="section-heading padding">
                <h2 class="title">My Cards</h2>
                <a href="cards" class="link">View All</a>
            </div>

            <!-- carousel single -->
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">
<?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM cards WHERE userid=".$row['userid']." ORDER by RAND()";
        $result = $mysqli->query($query);
        $c= 0;
        while ($transrow = $result->fetch_array()) {
			
			
        
		$cardid_userid = $transrow['userid'];
		$cardid = $transrow['cardid'];
		$cardnumber = $transrow['cardnumber'];
		$cardbalance = $transrow['balance'];
		$cardtype = $transrow['cardtype'];
		$cardcvv = $transrow['cardcvv'];
		$expires = $transrow['month'].'/'.substr($transrow['year'], -2);
		
		$nuz = $nuz+1;
		
		
		
		?>
                        <li class="splide__slide">
                            <!-- card block -->
                            <div class="card-block bg-<?php if($cardtype=='Debit Card'){echo 'dark';}else{echo 'primary';}?>">
                                <div class="card-main">
                                    <div class="card-button dropdown">
                                        <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                            <ion-icon name="ellipsis-horizontal"></ion-icon>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="update-card?id=<?= $cardid;?>">
                                <ion-icon name="pencil-outline"></ion-icon>Edit
                            </a>
                            <a class="dropdown-item" onclick="return confirm('Are you sure to Delete this Card? NOTE: This Action cannot be Undo!');" href="?delete_card=<?= $cardid;?>">
                                <ion-icon name="close-outline"></ion-icon>Remove
                            </a>
                        </div>
                                    </div>
                                    <div class="balance">
                        <span class="label">BALANCE</span>
                        <h1 class="title"><?= $sitecurrencysym.''.number_format($cardbalance);?></h1>
                    </div>
                    <div class="in">
                        <div class="card-number">
                            <span class="label">Card Number</span>
                            ******<?php echo substr($cardnumber, -4);?>
                        </div>
                        <div class="bottom">
                            <div class="card-expiry">
                                <span class="label">Expiry</span>
                                <?= $expires;?>
                            </div>
                            <div class="card-ccv">
                                <span class="label">CCV</span>
                                <?= $cardcvv;?>
                            </div>
                        </div>
                    </div>
                                </div>
                            </div>
                            <!-- * card block -->
                        </li>

		<?php }?>

                    </ul>
					<?php if($cardscount==0){echo '<center><h2>No Card Yet!</h2><hr /></center>';}?>
                </div>
            </div>
            <!-- * carousel single -->

        </div>
        <!-- * my cards -->


        <!-- Monthly Bills -->
        <div class="section full mt-4">
            <div class="section-heading padding">
                <h2 class="title">Monthly Bills</h2>
                <a href="bills" class="link">View All</a>
            </div>
            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">
<?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM bills WHERE userid=".$row['userid']." ORDER by RAND()";
        $result = $mysqli->query($query);
        $c= 0;
        while ($transrow = $result->fetch_array()) {
			
			
        
		$billname = $transrow['name'];
		$bill_userid = $transrow['userid'];
		$billid = $transrow['billid'];
		$billamount = $transrow['amount'];
		
	
		
		$nuz = $nuz+1;
		
		
		
		?>
                        <li class="splide__slide">
                            <div class="bill-box">
                                <div class="img-wrapper">
                                    <div class="iconbox">
                                        <ion-icon name="card-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="price"><?= $sitecurrencysym.''.number_format($billamount);?></div>
                                <p><?= ucwords($billname);?></p>
                                <a data-bs-toggle="modal" data-bs-target="#Processing" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                            </div>
                        </li>
	<?php }?>

                    </ul>
					<?php if($billscount==0){echo '<center><h2>No Bill Yet!</h2><hr /></center>';}?>
                </div>
            </div>
            <!-- * carousel multiple -->
        </div>
        <!-- * Monthly Bills -->

<!-- Dialog Basic -->
    <div class="modal fade dialogbox" id="Processing" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bill Processing...</h5>
                </div>
                <div class="modal-body" align="center">
                 <div class="fa-3x">
    <i class="fa fa-spinner fa-spin" style="font-size:50px; margin-bottom: 10px; color: <?= $sitecolor;?>;"></i>
    
  </div>
  <span style="font-size: 12px;">it will be completed in few hours!</span>
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Saving Goals -->
        <div class="section mt-4 mb-4">
            <div class="section-heading">
                <h2 class="title">Saving Goals</h2>
                <a href="goals" class="link">View All</a>
            </div>
            <div class="goals">
                <?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM goals WHERE userid=".$row['userid']." ORDER by id DESC LIMIT 10";
        $result = $mysqli->query($query);
        $c= 0;
        while ($transrow = $result->fetch_array()) {
			
			
        
		$goalname = $transrow['name'];
		$goal_userid = $transrow['userid'];
		$goal_category = $transrow['category'];
		$goalid = $transrow['goalid'];
		$goalpercent = $transrow['goalpercent'];
		$billamount = $transrow['amount'];
		
	
		
		$nuz = $nuz+1;
		
		
		
		?>
                <div class="item">
                    <div class="in">
                        <div>
                            <h4><?= ucwords($goalname);?></h4>
                            <p><?= ucwords($goal_category);?></p>
                        </div>
                        <div class="price"><?= $sitecurrencysym.''.number_format($billamount);?></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $goalpercent;?>%;" aria-valuenow="<?= $goalpercent;?>"
                            aria-valuemin="0" aria-valuemax="100"><?= $goalpercent;?>%</div>
                    </div>
                </div><?php }?>
				<?php if($goalscount==0){echo '<center><h2>No Goal Yet!</h2></center>';}?>
            </div>
        </div>
        <!-- * Saving Goals -->

        <?php include('footer.php');?>

    </div>
    <!-- * App Capsule -->


    <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>