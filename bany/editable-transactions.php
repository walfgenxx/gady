<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Editable Transactions - '.$sitename;
$thepage = 'Editable Transactions';
$thepagecode = 'transaction';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if($load_account=='yes'){
if(isset($_GET['delete'])){ if($clear=$mysqli->query("DELETE FROM transactions WHERE transactionid=".$_GET['delete'])){
   header('location: ' . $_SERVER['HTTP_REFERER']);
    
}}
}

include('app-header-back.php');?>
        <div class="right">
            (<?= number_format($transcount);?>)
        </div>
    </div>
    <!-- * App Header -->

    <div id="appCapsule">
<div class="section mt-2">
            <div class="section-title"><?= $thepage;?></div>
            <div class="card mb-4">

                <div class="table-responsive">
                    <table class="table" id="example">
                        <thead>
                            <tr>
                                <th scope="col">Type</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col" class="text-end">Edit</th>
                            </tr>
                        </thead>
                        <tbody><?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM transactions WHERE userid=".$row['userid']." ORDER by id DESC";
        $result = $mysqli->query($query);
        $c= 0;
        while ($transrow = $result->fetch_array()) {
			
			
            //$c++;
		
		
		$result2 = $mysqli->query("SELECT * FROM users WHERE userid=".$transrow['userid']);
    $row2 = $result2->fetch_array();
	
	$trans_client=$row2['firstname'].' '.$row2['lastname'];
		
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
		
		
		if($trans_type=='debit'){
			$sym = '-';
			$color_class='danger';
			$thearrow = '<i class="fa fa-angle-up" style="color: red;"></i>';
		}elseif($trans_type=='transfer'){
			$sym = '-';
			$color_class='danger';
			$thearrow = '<i class="fa fa-angle-up" style="color: red;"></i>';
		}elseif($trans_type=='withdrawal'){
			$sym = '-';
			$color_class='danger';
			$thearrow = '<i class="fa fa-angle-up" style="color: red;"></i>';
		}else{
			$sym = '+';
			$color_class='success';
			$thearrow = '<i class="fa fa-angle-down" style="color: #3c3;"></i>';
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
                            <tr>
                                <th scope="row" data-bs-toggle="modal" data-bs-target="#ModalBasic<?= $nuz;?>"><?= $thearrow.' '.ucwords($trans_type);?></th>
                                <td data-bs-toggle="modal" data-bs-target="#ModalBasic<?= $nuz;?>"><?= $sitecurrencysym.''.number_format($trans_amount);?></td>
                                <td data-bs-toggle="modal" data-bs-target="#ModalBasic<?= $nuz;?>"><?= $statz2;?>
                                <span style="display: block; font-size: 10px;"><?php echo ''.date('dS F Y', strtotime($trans_date)).'';?></span>
                                </td>
                                <td><a class="btn btn-success btn-sm" <?php if($edit_profile=='yes'){?>href="edit-transaction?id=<?= $transactionid;?>"<?php }else{?>data-bs-toggle="modal" data-bs-target="#Denied"<?php }?>>Edit</a></td>
		</tr>
		
		
		
		
		
		
		<!-- Modal Basic -->
        <div class="modal fade modalbox" id="ModalBasic<?= $nuz;?>" tabindex="-1" role="dialog" style="z-index: 999999;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Transaction #<?= $transactionid;?></h5>
                        <a href="#" data-bs-dismiss="modal">Close</a>
                    </div>
                    <div class="modal-body" style="font-size: 14px;">
												
												<center>
												<?php if($trans_status=='success'){?>
												<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#3c3" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>
												<?php }elseif($trans_status=='pending'){?>
												
												<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#ffb833" class="bi bi-patch-exclamation-fill" viewBox="0 0 16 16">
  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>

												<?php }elseif($trans_status=='declined'){?>
												
												<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="#ff3333" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
  <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z"/>
</svg>

												<?php }?>
												
												
												
												
												</center>
												<hr />
											<p>Transaction ID: <b>#<?php echo $transrow['transactionid'];?></b></p>
		<p>Name: <b><?php echo $trans_name;?></b></p>												
		<p>Amount: <b><?php echo $sitecurrencysym.''.number_format($trans_amount);?></b></p>	
		<p>Type: <?= ucwords($trans_type);?></p>	
		<p>Status: <?= $statz2;?></p>	
		<p>Bank: <?= $trans_bankname;?></p>	
		<p>Description: <?php echo $transrow['description'];?></p>	
		<p>Date & Time: <?php echo ''.date('l', strtotime($trans_date)).'';?>, <?php echo ''.date('dS F Y', strtotime($trans_date)).'';?> at <?= date('h:i A', strtotime($trans_date));;?></p>	
		<p>Reference ID: <?php echo $transrow['transaction_serial'];?></p>	
		<?php if(!empty($trans_browser)){?><hr />
		<p>Browser: <?= $trans_browser;?></p><?php }?>	
		<?php if(!empty($trans_ip)){?>
		<p>IP: <?= $trans_ip;?></p><?php }?>
												
												
												
												<div class="row">
												<div class="col-6"><a class="badge badge-success" style="width: 100%; color: #fff;" href="edit-transaction?id=<?= $transactionid;?>">Edit Transaction</a></div>
												<div class="col-6"><a class="badge badge-danger" style="width: 100%; color: #fff;" onclick="return confirm('Are you sure to Delete this Transaction? NOTE: This Action cannot be Undo!');" href="?delete=<?= $transactionid;?>">Delete Transaction</a></div>
												</div>
												</div>
                </div>
            </div>
        </div>
        <!-- * Modal Basic -->
		
		
		
		
		
		<!-- Dialog Basic -->
    <div class="modal fade dialogbox" id="Denied" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Access Denied</h5>
                </div>
                <div class="modal-body">
                    Contact admins to enable this feature?
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Dialog Basic -->
		
<?php }?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>
    <!-- * App Capsule -->


     <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>