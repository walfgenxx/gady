<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Cards - '.$sitename;
$thepage = 'cards';

include('header.php'); 

if($kyc=='no'){
    header('location: ./kyc');
}

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if($edit_profile=='yes'){
    
    if(isset($_GET['delete'])){ if($clear=$mysqli->query("DELETE FROM cards WHERE cardid=".$_GET['delete'])){
   header('location: cards');
    
}}

if (isset($_POST['add_card'])) {
    $con = new khodexclass($mysqli);
	
    if ($con->add_card($userid,$_POST['cardnumber'],$_POST['cardbalance'],$_POST['month'],$_POST['year'],$_POST['cvv'],$_POST['type'],$sitename,$sitedomain)) {$erro="good2";
    } else {
      $erro="bad2";
    }
}
}
include('app-header-back.php');?>
	
        <?php if($edit_profile=='yes'){?><div class="right">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#addCardActionSheet">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div><?php }?>
    </div>
    <!-- * App Header -->


    <!-- Add Card Action Sheet -->
    <?php if($edit_profile=='yes'){?><div class="modal fade action-sheet" id="addCardActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add a Card</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form action="" method="post">
                            <div class="row">
							<div class="col-8"><div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="cardnumber1">Card Number</label>
                                    <input name="cardnumber" min="14" value="<?php if(isset($_POST['add_card'])){if($erro=='bad2'){echo $_POST['cardnumber'];}}?>" pattern="\d*" autocomplete="off" pattern="[0-9]*" inputmode="numeric" max="16" type="text" id="cardnumber1" class="form-control"
                                        placeholder="Enter Card Number">
                                </div>
                            </div></div>
							<div class="col-4"><div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="cardnumber1">Card Balance (<?= $sitecurrencysym;?>)</label>
                                    <input name="cardbalance" <?php if(isset($_POST['add_card'])){if($erro=='bad2'){echo $_POST['cardbalance'];}}?> type="text" pattern="\d*" pattern="[0-9]*" inputmode="numeric" autocomplete="off" id="cardnumber1" class="form-control"
                                        placeholder="Enter Card Number">
                                </div>
                            </div></div>
							</div>
							
							
							
							<div class="row">
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label">Expiry Date</label>
                                            <div class="row">
                                                <div class="col-4">
                                                    <select name="month" required class="form-control custom-select" id="exp-month">
                                                        <option value="">Choose Month</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <select name="year" required class="form-control custom-select" id="exp-year">
                                                        <option value="">Choose Year</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                        <option value="2033">2033</option>
                                                        <option value="2034">2034</option>
                                                        <option value="2035">2035</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="cardcvv">
                                                CVV
                                                <a href="#" class="ms-05" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="3-4 digit number back of your card">
                                                    What is this?
                                                </a>
                                            </label>
                                            <input <?php if(isset($_POST['add_card'])){if($erro=='bad2'){echo $_POST['cvv'];}}?> pattern="\d*" autocomplete="off" type="number" name="cvv" min="3" id="cardcvv" class="form-control"
                                                placeholder="Enter 3 digit">
                                        </div>
                                    </div>
                                </div>
                            </div>
							
							<select name="type" required class="form-control custom-select" id="exp-year">
                                                        <option value="">Choose Card Type</option>
                                                        <option value="Debit Card">Debit Card</option>
                                                        <option value="Credit Card">Credit Card</option>
                                                        </select>


                            <div class="form-group basic mt-2">
                                <button type="submit" name="add_card" class="btn btn-primary btn-block btn-lg"
                                  >Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }?>
    <!-- * Add Card Action Sheet -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">


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
                            Success! Card added successfully.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>
		
		<?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM cards WHERE userid=".$row['userid']." ORDER by id DESC";
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
            <!-- card block -->
            <div class="card-block bg-<?php if($cardtype=='Debit Card'){echo 'dark';}else{echo 'warning';}?> mb-2">
                <div class="card-main">
                    <?php if($edit_profile=='yes'){?><div class="card-button dropdown">
                        <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                            <ion-icon name="ellipsis-horizontal"></ion-icon>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="update-card?id=<?= $cardid;?>">
                                <ion-icon name="pencil-outline"></ion-icon>Edit
                            </a>
                            <a class="dropdown-item" onclick="return confirm('Are you sure to Delete this Card? NOTE: This Action cannot be Undo!');" href="?delete=<?= $cardid;?>">
                                <ion-icon name="close-outline"></ion-icon>Remove
                            </a>
                        </div>
                    </div><?php }?>
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

            <?php }?>

        </div>
<?php if($cardscount==0){echo '<center><h2>No Card Yet!</h2></center>';}?>

    </div>
    <!-- * App Capsule -->

 <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>