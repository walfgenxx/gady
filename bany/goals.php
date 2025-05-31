<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Savings & Goals - '.$sitename;
$thepage = 'Savings & Goals';
$thepagecode = 'goals';

include('header.php');

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if(isset($_GET['delete'])){ if($clear=$mysqli->query("DELETE FROM goals WHERE goalid=".$_GET['delete'])){
   header('location: goals');
    
}}

if (isset($_POST['add_goal'])) {
    $con = new khodexclass($mysqli);
	
    if ($con->add_goal($userid,$_POST['amount'],$_POST['name'],$_POST['goalpercent'],$_POST['category'],$sitename,$sitedomain)) {$erro="good2";
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

    <!-- Form Action Sheet -->
    <?php if($edit_profile=='yes'){?><div class="modal fade action-sheet" id="actionSheetForm" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Saving Goal</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">

                        <form action="" method="POST">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account1">Saving Category</label>
                                    <select class="form-control custom-select" name="category" id="account1">
                                        <option value="Lifestyle">Lifestyle</option>
                                        <option value="Living">Living</option>
                                        <option value="Gaming">Gaming</option>
                                        <option value="Mortgage">Mortgage</option>
                                        <option value="Travel">Travel</option>
                                        <option value="Gift">Gift</option>
                                        <option value="Visiting">Visiting</option>
                                        <option value="Love">Love</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">Title</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter a title">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                                <div class="input-info">Minimum 5 Characters</div>
                            </div>

                            <div class="row">
                            <div class="col-6"><div class="form-group basic">
                                <label class="label">Enter Total Amount</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><?= $sitecurrencysym;?></span>
                                    <input type="tex" pattern="\d*" pattern="[0-9]*" required name="amount" class="form-control" placeholder="Enter an amount">
                                </div>
                                <div class="input-info">Minimum $10</div>
                            </div></div>
                            <div class="col-6"><div class="form-group basic">
                                <label class="label">Goal Percent</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">%</span>
                                    <input type="text" pattern="\d*" pattern="[0-9]*" required name="goalpercent" class="form-control" placeholder="1 to 100" min="1" max="100">
                                </div>
                                <div class="input-info">Minimum 10%</div>
                            </div></div>
							</div>

                            <div class="form-group basic">
                                <button type="submit" name="add_goal" class="btn btn-primary btn-block btn-lg"
                                   >Add Goal</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div><?php }?>
    <!-- * Form Action Sheet -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 mb-2">
		
		
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
                            Success! Savings, Goals added successfully.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>

            <div class="goals">
                <!-- item -->
				<?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM goals WHERE userid=".$row['userid']." ORDER by id DESC";
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
                        <div class="price"><?= $sitecurrencysym.''.number_format($billamount);?> <?php if($edit_profile=='yes'){?><a onclick="return confirm('Are you sure to Delete this Goal? NOTE: This Action cannot be Undo!');" href="?delete=<?= $goalid;?>"><i class="fa fa-trash" style="color: red;"></i></a><?php }?></div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $goalpercent;?>%;" aria-valuenow="<?= $goalpercent;?>"
                            aria-valuemin="0" aria-valuemax="100"><?= $goalpercent;?>%</div>
                    </div>
                </div><?php }?>
				<?php if($goalscount==0){echo '<center><h2>No Goal Yet!</h2></center>';}?>
            </div>

        </div>

    </div>
    <!-- * App Capsule -->

<?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>