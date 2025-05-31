<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Quick Loan - '.$sitename;
$thepage = 'Quick Loan';
$thepagecode = 'loan';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(isset($_GET['delete'])){ if($clear=$mysqli->query("DELETE FROM loan WHERE loanid=".$_GET['delete'])){header('location: loan');}}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if (isset($_POST['applyloan'])) {
    $con = new khodexclass($mysqli);

if ($con->loan($userid,$_POST['amount'],$_POST['duration'],$_POST['purpose'],$_POST['loanid'],$sitename,$sitedomain,$webmail_email,$webmail_email_password,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo,$kyc,$loanaccess)) {$erro="good";
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
    Success! Your quick loan has been submited, your loan ID is [<?= $_POST['loanid'];?>].
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>

		
<div class="section-title">Quick Loan</div>
            <div class="card mb-4">
                <div class="card-body">
                    
                    <center><i class="fa fa-money" style="font-size: 100px;" name="swap-vertical"></i></center>
                    
                    <p>Use our fastest loan processing application for your house, cars and property payments across the globe.</p>
                  <hr />
                  
                  <form action="" method="POST" class="mb-4">
							<input value="<?= mt_rand(1000,9999).''.mt_rand(1000,9999);?>" name="loanid" type="hidden" />	
												<div class="row mt-4">
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Estimated Duration:</label>
												<select required name="duration" class="default-select wide form-control">
   <option value="">Select Duration</option> 
                                                            <option value="0-6 months">0-6 months</option> 
                                                             <option value="7-12 months">7-12 months</option> 
                                                              <option value="24- 34 months">24-34 months</option> 
                                                               <option value="36 months">36 months</option>  
</select>
												</div>
												</div>
												
												
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Required Amount:</label>
												<input required pattern="\d*" pattern="[0-9]*" name="amount" autocomplete="off" type="text" class="form-control" placeholder="Loan amount here..." value="<?php if(isset($_POST['applyloan'])){if ($erro == "bad"){ echo $_POST['amount'];}}?>" />
												</div>
												</div>
												
												
												<div class="col-lg-12">
												<div class="form-group mb-2">
												<label>Purpose of the Loan:</label>
												<textarea required name="purpose" class="form-control" placeholder="state the purpose of the loan Here..."><?php if(isset($_POST['applyloan'])){if ($erro == "bad"){ echo $_POST['purpose'];}}?></textarea>
												</div>
												</div>
												</div>
												<button class="btn btn-lg btn-primary btn-block" name="applyloan" type="submit">Apply For Loan</button>
												</form>
                  
                   
                   
                   
                   
                   
                   	<table class="table">
										<thead>
											<tr>
												<th>Amount</th>
												<th>Status</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody><?php
        $query = "SELECT * FROM loan WHERE userid='".$_SESSION['user']['userid']."' ORDER by id DESC";
        $result = $mysqli->query($query);
        $c= 0;
        while ($row = $result->fetch_array()) {
            $c++;
		
	$query2 = "SELECT * FROM users WHERE userid='".$row['userid']."'";
        $result2 = $mysqli->query($query2); 
 $row2 = $result2->fetch_array();
 
 
 
 
 
 
 if($row['status']=='pending'){
     $staz ='<span title="Pending" class="badge badge-warning">Pending</span>';
 }elseif($row['status']=='success'){
     $staz ='<span title="Approved" class="badge badge-success">Approved</span>';
 }elseif($row['status']=='declined'){
     $staz ='<span title="Declined" class="badge badge-success">Declined</span>';
 }
            ?>
											<tr>
												<td><?= $sitecurrencysym.''.number_format($row['amount']);?></td>
												<td><?= $staz;?></td>
												<td><?php echo ''.date('dS F Y', strtotime($row['date'])).'';?></td>
												<td><a <?php if($row['status']!=='pending'){echo 'disabled';}else{?>onclick="return confirm('Are you sure you want to Delete this Loan? NOTE: This Action cannot be Undo!');" href="?delete=<?= $row['loanid'];?>"<?php }?> class="btn btn-sm btn-danger">Delete</a></td>
											</tr>
		<?php }?>
										</tbody>
									</table>
                   
                   
                   
                   
                   
                   </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->
    
	<?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>