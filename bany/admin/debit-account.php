<?php require_once('../data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Debit Client Account - '.$sitename;
$thepage = 'Debit Client Account';
$pagecode = 'debit';

include('header.php');


if (isset($_POST['deduct_money'])) {
    $con = new khodexclass($mysqli);
    if ($con->deduct_money($_POST['user'],$_POST['sender'],$_POST['amount'],$_POST['senderbank'],$_POST['description'])) {$erro="good";
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
						
						
						<?php if ($erro == "fatal") {
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
									<strong>Success!</strong> Funds of <?= $sitecurrencysym;?><?php echo number_format($_POST['amount']);?> has been deducted from <b>#<?php echo $_SESSION['fullname_xx'];?>'s</b> account!!
		 
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
								
								
								<?php }
		?>
						
						<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Debit Client Account</h4>
                            </div>
                            <div class="card-body">
                               
							   
							   <form action="" method="post">
							   <div class="row mb-4">
							   <div class="col-lg-3">
							   <div class="form-group">
												<label>Account to Debit:</label>
												<select name="user" class="wide form-control" oninvalid="this.setCustomValidity('Select a User to Send Money to')"
 oninput="setCustomValidity('')" required>
 <option value="">Choose User's Account</option>
										<?php
										$query = "SELECT * FROM users WHERE creator='".$_SESSION['user']['userid']."' ORDER by id desc";
        $result = $mysqli->query($query);
        $c= 0;
        while ($ros = $result->fetch_array()) {
			
			
			
			if($ros['gender']=='male'){
				$sex = 'Mr. ';
			}else{
				$sex = 'Mrs. ';
			}
			
			$fullnamz = $sex.''.ucwords($ros['firstname']).' '.ucwords($ros['lastname']);
			
			
            $c++;
			
			
			
			?>
										<option value="<?php echo $ros['userid']; ?>"><?php echo  $fullnamz; ?> => <?php echo  $ros['email']; ?></option><?php }?>
										</select>
												</div>
							   </div>
							   <div class="col-lg-3">
							   <div class="form-group">
												<label>Amount (<?= $sitecurrencysym;?>):</label>
												<input type="number" placeholder="Amount in Numbers..." name="amount" class="form-control" value="<?php if(isset($_POST['deduct_money'])){if($erro=='fatal'){echo $_POST['amount'];}}?>" />
												</div>
							   </div>
							   <div class="col-lg-3">
							   <div class="form-group">
												<label>Transaction's Name:</label>
												<input type="text" placeholder="Senders Name Here..." name="sender" class="form-control" value="<?php if(isset($_POST['deduct_money'])){if($erro=='fatal'){echo $_POST['sender'];}}?>" />
												</div>
												</div>
							   
							   <div class="col-lg-3">
							   <div class="form-group">
												<label>Transaction's Bank Name:</label>
												<input type="text" placeholder="Bank name Here..." name="senderbank" class="form-control" value="<?php if(isset($_POST['deduct_money'])){if($erro=='fatal'){echo $_POST['senderbank'];}}?>" />
												</div>
												</div>
							   
							   </div>
							   
							   <div class="form-group mb-4">
							   <textarea class="form-control" name="description" placeholder="Brief Desc..."><?php if(isset($_POST['deduct_money'])){if($erro=='fatal'){echo $_POST['description'];}}?></textarea>
							   </div>
							   
							   <button type="submit" name="deduct_money" class="btn btn-primary btn-lg btn-block">Debit Account Now</button>
							   </form>
							   
							   
							   
                            </div>
                        </div>
                    </div>
					</div>
				</div>
            </div>
        </div>
        
		<?php include('footer.php');?>