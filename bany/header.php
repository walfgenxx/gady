<?php 

error_reporting(0);

//error_reporting(E_ALL); ini_set('display_errors', TRUE); ini_set('display_startup_errors', TRUE);

include_once('data/config.php'); include_once('data/public_function.php'); include_once('data/theclass.php');

$BrowserInfo = $yourbrowser;
$IpInfo = khodex_ip();

$erro=""; $mtype_err=""; $errok=""; $msize_err=""; $re=""; $messagetitle_err=""; $messagecont_err=""; $post_err=""; $post1_err=""; $post2_err=""; $post3_err=""; $post4_err="";$pa_err=""; $cp_exist=""; $pp_err=""; $ft_err=""; $fj_err=""; $fz_err=""; $fz_err2=""; $pc_err="";$pn_err="";$aa_err=""; $ad_err="";$a_exist="";$pg3="";$pg4=""; 

if(isset($_SESSION['user']['userid'])){
	
	$query = "SELECT * FROM users WHERE userid='".$_SESSION['user']['userid']."'";
        $result = $mysqli->query($query);
		
	  $row = $result->fetch_array();
			$id=$row['id'];
			$userid=$row['userid'];
			$city=$row['city'];
			$mycurrency = strtolower($row['mycurrency']);
			$username=$row['username'];
			$accounttype=$row['accounttype'];
			$loanaccess=$row['loanaccess'];
			$kyc=$row['kyc'];
			$pendingbalance = $row['pendingbalance'];
			$notice = $row['notice'];
			$email=$row['email'];
			$banklogo = $row['banklogo'];
			$accountnumber=$row['accountnumber'];
			$accountnumber2=$row['accountnumber2'];
			$randy2 = mt_rand(1,99);
			$randy1 = mt_rand(1,99);
			$mywithdraw_error=$row['mywithdraw_error'];
			$mytransfer_error=$row['mytransfer_error'];
			$status=$row['status'];
			$role=$row['role'];
			$realpassword=$row['realpassword'];
			$ban=$row['ban'];
			$balance=$row['balance'];
			$balance2=$row['balance2'];
			$accountcode=$row['accountcode'];
			$lastlogin=$row['lastlogin'];
			$logincounts=$row['logincounts'];
			$lastloginip=$row['lastloginip'];
			$lastloginbrowser=$row['lastloginbrowser'];
			$country=$row['country'];
			$transfercode=$row['transfercode'];
			$withdrawcode=$row['withdrawcode'];
			$transfercode_name=$row['transfercode_name'];
			$withdrawcode_name=$row['withdrawcode_name'];
			
			
			if(empty($transfercode_name)){
			    $thetransfercode_name = $sitetransfercode_name;
			}else{
			    $thetransfercode_name = $transfercode_name;
			}
			
			if(empty($withdrawcode_name)){
			    $thewithdrawcode_name = $sitewithdrawcode_name;
			}else{
			    $thewithdrawcode_name = $withdrawcode_name;
			}
			
			$state=$row['state'];
			$address=$row['address'];
			$logobackground = $row['logobackground'];
			$phone=$row['phone'];
			$depositban=$row['depositban'];
			$firstname=ucwords($row['firstname']);
			$lastname=ucwords($row['lastname']);
			$fullname = $firstname.' '.$lastname;
			$security=$row['security'];
			$gender=strtolower($row['gender']);
			$pics=$row['pics'];
			$withdrawban=$row['withdrawban'];
			$transferban=$row['transferban'];
			$income=$row['income'];
			$account_serial=$row['account_serial'];
			$expenses=$row['expenses'];
			$savings=$row['savings'];
			$routing=$row['routing'];
			$bankname=$row['bankname'];
			$load_account=$row['load_account'];
			$debit_account=$row['debit_account'];
			$edit_profile=$row['edit_profile'];
			$otherbills=$row['otherbills'];
			$updated=$row['updated'];
			$marital=$row['marital'];
			$job=$row['job'];
			$occupation = $job;
			$created=$row['date'];
			$timeout_session = '0';
			$totalbills = $income+$savings+$expenses;


if($mycurrency=='usd'){
    $mycurrency = 'USD';
    $mycurrencysym = '$';
    $sitecurrency = 'USD';
    $sitecurrencysym = '$';
}elseif($mycurrency=='pounds'){
    $mycurrency = 'GBP';
    $mycurrencysym = '£';
    $sitecurrency = 'GBP';
    $sitecurrencysym = '£';
}elseif($mycurrency=='euro'){
    $mycurrency = 'EUR';
    $mycurrencysym = '€';
    $sitecurrency = 'EUR';
    $sitecurrencysym = '€';
}elseif($mycurrency=='naira'){
    $mycurrency = 'Naira';
    $mycurrencysym = '₦';
    $sitecurrency = 'Naira';
    $sitecurrencysym = '₦';
}			


if($status=='active'){
	$mystatus = '<span class="badge badge-success">Active</span>';
}elseif($status=='inactive'){
	$mystatus = '<span class="badge badge-danger">In-Active</span>';
}elseif($status=='pending'){
	$mystatus = '<span class="badge badge-warning">Pendinge</span>';
}
			
			if(!empty($lastlogin)){
			    $lastlogin = $lastlogin;
			}else{
			  $lastlogin = $created; 
			}
			
			if(!empty($updated)){
			    $updated = $updated;
			}else{
			  $updated = $created; 
			}
		
if($gender == 'male'){
	$sex = 'Mr. ';
}else{
	$sex = 'Mrs. ';
}				
	
	
// Check KYC Details


$queryk = "SELECT * FROM kyc WHERE userid='".$_SESSION['user']['userid']."'";
        $resultk = $mysqli->query($queryk);
		
	  $rowkyc = $resultk->fetch_array();
			$kycid = $rowkyc['kycid'];
	
	$kycdoctype = $rowkyc['doctype'];
	$kycstatus = $rowkyc['status'];
	$kycnumber = $rowkyc['docnumber'];
	$kycdate = $rowkyc['date'];

if (isset($_POST['change_pics'])) { 
    $con = new khodexclass($mysqli);
	$picsname="";
	$picstemp="";
	$picssize="";
	$picstype="";
	if(isset($_FILES['pics']['name'])){$picsname=$_FILES['pics']['name'];$picstemp=$_FILES['pics']['tmp_name'];$picssize=$_FILES['pics']['size'];$picstype=$_FILES['pics']['type'];}

    if ($con->change_pics($picsname,$picstemp,$picssize,$picstype)) {
		$erro="goodpics";
    } else {
      $erro="fatalpics";
    }
}	
	
	
	
$check_card = $mysqli->query("SELECT * FROM cards WHERE userid ='".$_SESSION['user']['userid']."'");
$cardscount = $check_card->num_rows;
		
$check_account = $mysqli->query("SELECT * FROM goals WHERE userid ='".$_SESSION['user']['userid']."'");
$goalscount = $check_account->num_rows;
		
$check_req = $mysqli->query("SELECT * FROM bills WHERE userid ='".$_SESSION['user']['userid']."'");
$billscount = $check_req->num_rows;
		
$check_trans = $mysqli->query("SELECT * FROM transactions WHERE userid ='".$_SESSION['user']['userid']."'");
$transcount = $check_trans->num_rows;
		
		
	
$check_kyc = $mysqli->query("SELECT * FROM kyc WHERE userid = '".$userid."' AND status = 'pending'");
$kyccount = $check_kyc->num_rows;		
}

if(empty($mywithdraw_error)){
    $mywithdraw_error_msg = $withdraw_error;
}else{
    $mywithdraw_error_msg = $mywithdraw_error;
}



if(empty($mytransfer_error)){
    $transfer_error_msg = $transfer_error;
}else{
    $transfer_error_msg = $mytransfer_error;
}






?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title><?= $title;?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <meta name="description" content="<?= ucwords($thepage); ?> - <?= $sitedesc; ?>">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet"> 
    <meta name="theme-color" content="<?= $sitecolor;?>" />
    <meta name="keywords" content="wallet, banking" />
    <link rel="icon" type="image/png" href="<?= $favicon;?>" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $favicon;?>">
    <link rel="stylesheet" href="assets/css/style.css">
	<?php include('assets/css/style.php');?>
    <link rel="manifest" href="__manifest.json">
</head>

<!-- echo '<!DOCTYPE html>
<html>
<head>
<title>Account Suspended... Upgrade overdue</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<h1>Account Suspended...<br /><span style="font-size: 22px;">Upgrade overdue</span></h1>

</body>
</html> 
'; die(); -->
<body>

    <?php if($preloader =='yes'){?>
    <div id="loader">
        <img src="<?= $favicon;?>" alt="icon" class="loading-icon">
    </div><?php }?>