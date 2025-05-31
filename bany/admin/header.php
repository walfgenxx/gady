<?php 

error_reporting(0);

//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

include('../data/config.php'); include('../data/settings.php'); include('../data/public_function.php'); include('../data/theclass.php');

$BrowserInfo = $yourbrowser;
$IpInfo = khodex_ip();
$CountryInfo = khodex_country();

$erro=""; $mtype_err=""; $errok=""; $msize_err=""; $messagetitle_err=""; $messagecont_err=""; $post_err=""; $post1_err=""; $post2_err=""; $post3_err=""; $post4_err="";$pa_err=""; $cp_exist=""; $pp_err=""; $ft_err=""; $fj_err=""; $fz_err=""; $fz_err2=""; $pc_err="";$pn_err="";$aa_err=""; $ad_err="";$a_exist="";$pg3="";$pg4=""; 



if(isset($_SESSION['user']['userid'])){
	
	$query = "SELECT * FROM users WHERE userid='".$_SESSION['user']['userid']."'";
        $result = $mysqli->query($query);
		
	  $row = $result->fetch_array();
			$id=$row['id'];
			$userid=$row['userid'];
			$username=$row['username'];
			$email=$row['email'];
			$accountnumber=$row['accountnumber'];
			$status=$row['status'];
			$role=$row['role'];
			$realpassword=$row['realpassword'];
			$ban=$row['ban'];
			$balance=$row['balance'];
			$accountcode=$row['accountcode'];
			$lastlogin=$row['lastlogin'];
			$logincounts=$row['logincounts'];
			$lastloginip=$row['lastloginip'];
			$lastloginbrowser=$row['lastloginbrowser'];
			$country=$row['country'];
			$state=$row['state'];
			$address=$row['address'];
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
			$load_account=$row['load_account'];
			$debit_account=$row['debit_account'];
			$edit_profile=$row['edit_profile'];
			$otherbills=$row['otherbills'];
			$creator=$row['creator'];
			$updated=$row['updated'];
			$routing=$row['routing'];
			$bankname=$row['bankname'];
			$created=$row['date'];
			$timeout_session = '0';
			$accounttype=$row['accounttype'];
			$loanaccess=$row['loanaccess'];
			$kyc=$row['kyc'];
			
			
			
if($timeout_session>0){
			
//header("Refresh: ".$timeout_session."; URL=logoff.php"); // Auto End Session After 5 Mins - 300 equals 5 Mins

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
	
	
	
$check_card = $mysqli->query("SELECT * FROM cards");
$cardscount = $check_card->num_rows;

$check_cardk = $mysqli->query("SELECT * FROM kyc");
$allkycs = $check_cardk->num_rows;

$check_loan = $mysqli->query("SELECT * FROM loan");
$loans = $check_loan->num_rows;

$check_cardt = $mysqli->query("SELECT * FROM tickets");
$alltickets = $check_cardt->num_rows;

$check_bz = $mysqli->query("SELECT * FROM banks");
$allbanks = $check_bz->num_rows;

$check_cardz = $mysqli->query("SELECT * FROM wallets");
$allwallets = $check_cardz->num_rows;
		
$check_users = $mysqli->query("SELECT * FROM users");
$allusers = $check_users->num_rows;
		
$check_clients = $mysqli->query("SELECT * FROM users WHERE role = ''");
$allclients = $check_clients->num_rows;

$check_pending = $mysqli->query("SELECT * FROM users WHERE creator='".$_SESSION['user']['userid']."' AND pendingbalance != ''");
$allpendingbalance = $check_pending->num_rows;


$check_notice = $mysqli->query("SELECT * FROM users WHERE creator='".$_SESSION['user']['userid']."' AND notice != ''");
$allnotice = $check_notice->num_rows;

$check_client2s = $mysqli->query("SELECT * FROM users WHERE creator='".$_SESSION['user']['userid']."' AND role =''");
$myclients = $check_client2s->num_rows;

		
$check_account = $mysqli->query("SELECT * FROM goals");
$goalscount = $check_account->num_rows;
		
$check_req = $mysqli->query("SELECT * FROM bills");
$billscount = $check_req->num_rows;
		
$check_trans = $mysqli->query("SELECT * FROM transactions");
$transcount = $check_trans->num_rows;
		
	if(empty($role)){
		header('location: ../');
	}	
	
		
}else{
	header('location: ../login?action=admin');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="theme-color" content="<?= $sitecolor;?>" />
	<script src="../khodex-editor/ckeditor.js"></script>
<script src="../khodex-editor/styles.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $sitedesc;?>">
	<meta property="og:title" content="<?= $title;?>">
	<meta property="og:description" content="<?= $sitedesc;?>">
	<meta property="og:image" content="<?= $thumb;?>">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<!-- PAGE TITLE HERE -->
	<title><?= $title;?></title>
	
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?= $favicon;?>">
	<link rel="stylesheet" href="vendor/dotted-map/css/contrib/jquery.smallipop-0.3.0.min.css" type="text/css" media="all">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    
	
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?= $favicon;?>">
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<?php include('css/style.php');?>
</head>

<body>

    <?php if($preloader !=='no'){?>
   <!--<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>--><?php }?>