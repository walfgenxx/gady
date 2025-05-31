<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Monthly Bills - '.$sitename;
$thepage = 'Monthly Bills';
$thepagecode = 'bills';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if(isset($_GET['delete'])){ if($clear=$mysqli->query("DELETE FROM bills WHERE billid=".$_GET['delete'])){
   header('location: bills');
    
}}

if (isset($_POST['add_bill'])) {
    $con = new khodexclass($mysqli);
	
    if ($con->add_bill($userid,$_POST['amount'],$_POST['billname'],$sitename,$sitedomain)) {$erro="good2";
    } else {
      $erro="bad2";
    }
}


include('app-header-back.php');?>
        <?php if($edit_profile=='yes'){?><div class="right">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#actionSheetForm">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div><?php }?>
    </div>
    <!-- * App Header -->

    <?php if($edit_profile=='yes'){?><!-- Form Action Sheet -->
    <div class="modal fade action-sheet" id="actionSheetForm" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Bill</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">

                        <form action="" method="post">
                            <div class="form-group basic">
                                <label class="label">Bill Amount</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><?= $sitecurrencysym;?></span>
                                    <input type="text" pattern="\d*" pattern="[0-9]*" name="amount" class="form-control" placeholder="Enter an amount">
                                </div>
                                <div class="input-info">Enter Bill Amount.</div>
                            </div>


                            <div class="form-group basic">
                                <label class="label">Bill Name</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">#</span>
                                    <input type="text" name="billname" class="form-control" placeholder="Enter Bill title">
                                </div>
                                <div class="input-info">What type of Bill? E.g: Security Fees.</div>
                            </div>


                            <div class="form-group basic">
                                <button type="submit" name="add_bill" class="btn btn-primary btn-block btn-lg"
                               >Add Bill</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div><?php }?>
    <!-- * Form Action Sheet -->


    <!-- App Capsule -->
    <div id="appCapsule" class="extra-header-active full-height">

        <div class="section tab-content mt-1 mb-1">
		
		
		
		
		
<?php if ($erro == "bad2") {
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
}elseif ($erro == "good2") {
?>


<div class="alert alert-imaged alert-success alert-dismissible fade show mb-2" role="alert">
                        <div class="icon-wrap">
                            <ion-icon name="card-outline" role="img" class="md hydrated" aria-label="card outline"></ion-icon>
                        </div>
                        <div>
                            Success! Bill added successfully.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>

            <!-- waiting tab -->
            <div class="tab-pane fade show active" id="waiting" role="tabpanel">
                <div class="row">
				<?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM bills WHERE userid=".$row['userid']." ORDER by id DESC";
        $result = $mysqli->query($query);
        $c= 0;
        while ($transrow = $result->fetch_array()) {
			
			
        
		$billname = $transrow['name'];
		$bill_userid = $transrow['userid'];
		$billid = $transrow['billid'];
		$billamount = $transrow['amount'];
		
	
		
		$nuz = $nuz+1;
		
		
		
		?>
                    <div class="col-6 mb-2">
                        <div class="bill-box">
                            <ion-icon name="card-outline" style="font-size: 50px;" role="img" class="md hydrated" aria-label="card outline"></ion-icon>
                            <div class="price"><?= $sitecurrencysym.''.number_format($billamount);?></div>
                            <p><?= ucwords($billname);?></p>
							
							<div class="row">
							<div class="col-<?php if($edit_profile=='yes'){echo '10';}else{echo '12';}?>"><a data-bs-toggle="modal" data-bs-target="#Processing<?= $nuz;?>" class="btn btn-primary btn-block btn-sm">PAY NOW</a></div>
							<?php if($edit_profile=='yes'){?><div class="col-2"><a onclick="return confirm('Are you sure to Delete this Bill? NOTE: This Action cannot be Undo!');" href="?delete=<?= $billid;?>" class="btn btn-danger btn-block btn-sm" ><i class="fa fa-trash"></i></a></div><?php }?>
							</div>
							
							
                            
                        
                        </div>
		</div>
		
		
		<!-- Dialog Basic -->
    <div class="modal fade dialogbox" id="Processing<?= $nuz;?>" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $sitecurrencysym.''.number_format($billamount);?> - Bill Processing...</h5>
                </div>
                <div class="modal-body" align="center">
                 <div class="fa-3x">
    <i class="fa fa-spinner fa-spin" style="font-size:50px; margin-bottom: 10px; color: <?= $sitecolor;?>;"></i>
    
  </div>
  <span style="font-size: 12px;"><?= ucwords($billname);?>...<br />it will be completed in few hours!</span>
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
					
					<?php if($billscount==0){echo '<center><h2>No Bills Yet!</h2></center>';}?>
                </div>
            </div>
            <!-- * waiting tab -->





        </div>

    </div>
    <!-- * App Capsule -->


 <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>