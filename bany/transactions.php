<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Transaction History- '.$sitename;
$thepage = 'transaction History';
$thepagecode = 'transaction';

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}


include('header.php'); include('app-header-back.php');?>
<div class="right">
            (<?= number_format($transcount);?>)
        </div>
    </div>
    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Transactions (<?= number_format($transcount);?>)</div>
            <div class="transactions">
                <?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM transactions WHERE userid=".$row['userid']." ORDER by id DESC";
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


        <div class="section mt-2 mb-2">
            <a href="" class="btn btn-primary btn-block btn-lg">Load More</a>
        </div>


    </div>
    <!-- * App Capsule -->

 <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>