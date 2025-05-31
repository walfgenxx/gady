<?php require_once('../data/settings.php'); date_default_timezone_set("$default_timezone");

$title ='Banks &raquo; '.$sitename;
$thepage = 'Banks';
$pagecode = 'banks';

include('header.php');


if(isset($_GET['delete'])){ if($clear=$mysqli->query("DELETE FROM banks WHERE bankid=".$_GET['delete'])){header('location: banks');}}



if (isset($_POST['add_bank'])) {
    $con = new khodexclass($mysqli);
    if ($con->add_bank($_POST['type'],$_POST['wallet'],$_FILES['wallet_img']['tmp_name'],$_FILES['wallet_img']['type'],$_FILES['wallet_img']['size'],$_FILES['wallet_img']['name'])) {$erro="good";
    } else {
      $erro="fatal";
    }
}

?>

    <div id="main-wrapper">

        <?php include('top.php'); include('nav.php'); include('sidebar.php');?>
		
		<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
<?php if ($erro == "bad") {
    ?>
	
	<div class="alert alert-danger solid alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									<strong>Error!</strong><ul> <?php echo"". $pn_err ."".$ad_err ."".$pc_err."".$errok."". $pa_err ."".$a_exist."".$cp_exist."".$pp_err."".$ft_err."".$fj_err."".$fz_err."".$fz_err2; ?></ul>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
    <?php
}elseif ($erro == "good") {
?>


<div class="alert alert-success solid alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
									<strong>Success!</strong> <i class="fa fa-check-circle"></i> Payment Wallet: <font color="red">"<b><?php echo ucwords($_POST ['wallet']);?></b>"</font> Updated Succesfully!
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
								
								
								<?php }
		?>
						<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Banks (<?= number_format($allbanks);?>)</h4>
                            </div>
                            <div class="card-body">
                                
                                
                                
                                
                                
                                
                                
                                <div class="table-responsive">
									<table id="example3" class="display kit" style="min-width: 845px">
										<thead>
											<tr>
												<th>Bank Name</th>
												<th>Account Number</th>
												<th>Routing Number</th>
												<th>Updated</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody><?php
        $query = "SELECT * FROM banks ORDER by id DESC";
        $result = $mysqli->query($query);
        $c= 0;
        while ($row = $result->fetch_array()) {
            $c++;
            ?>
											<tr>
												<td><?= strtoupper($row['type']);?></td>
												<td><?= $row['wallet'];?></td>
												<td><?= $row['wallet'];?></td>
												<td><?php echo ''.date('dS F Y', strtotime($row['updated'])).'';?> - <?= date('h:i A', strtotime($row['updated']));?></td>
												<td><a onclick="return confirm('Are you sure you want to Delete this Bank? NOTE: This Action cannot be Undo!');" class="btn btn-sm btn-danger" href="?delete=<?= $row['walletid'];?>">Delete</a></td>
											</tr>
		<?php }?>
										</tbody>
									</table>
								</div><hr />
								
								
								
							<h4 class="mb-4 mt-4">Add New Bank</h4>
								
								
				<form method="POST" class="needs-validation" action="" enctype="multipart/form-data">
		
<div class="row mb-4">
<div class="col-lg-4 col-6">
<div class="form-group">
<label for="daily">Bank Name</label>
<input required class="form-control" name="bankname" value="" placeholder="Bank name here...">
</div></div>
<div class="col-lg-6 col-6">
<div class="form-group">
<label for="daily">Wallet QR Code Image</label>
<input type="file" required accept="image/*" class="form-control form-control-sm" name="wallet_img">
</div>
</div>
</div>


<div class="form-group mb-4">
<label for="daily">Wallet Address</label>
<textarea class="form-control" required name="wallet" placeholder="Bitcoin Wallet Address..."><?php if(isset($_POST['add_bank'])){if ($erro == "fatal"){ echo $_POST['wallet'];}}?></textarea>
</div>




                 


				 
				  
				   <button type="submit" name="add_bank" class="btn btn-success btn-block">Add Bank</button>
              </form>	
								
								
								
                            </div>
                        </div>
                    </div>
					</div>
				</div>
            </div>
        </div>
        
		<?php include('footer.php');?>