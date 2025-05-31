<?php require_once('../data/settings.php'); date_default_timezone_set("$default_timezone");

$title = "Client's Details #".$_GET['update']." - ".$sitename;
$thepage = "Client's Details #".$_GET['update'];
$pagecode = 'user';

include('header.php');



$query2 = "SELECT * FROM users WHERE userid='".$_GET['update']."'";
        $result2 = $mysqli->query($query2); 
 $row2 = $result2->fetch_array();
 
 
 if(empty($row2['lastlogin'])){
	 $lastlogin = $row2['date'];
 }else{
	 $lastlogin = $row2['lastlogin'];
 }
 
 $thedepositban = $row2['depositban'];
 $thelogincounts = $row2['logincounts'];
 $thegender = $row2['gender'];
 $theban = $row2['ban'];
 $thestatus = $row2['status'];
 $therole = $row2['role'];
 $loanaccess = $row2['loanaccess'];
 $thewithdrawban = $row2['withdrawban'];
 $theuserid = $row2['userid'];
 $accounttype=$row2['accounttype'];
$loanaccess=$row2['loanaccess'];
$kyc=$row2['kyc'];
 $thepics = $row2['pics'];
 $thetransferban = $row2['transferban'];
 $thefullname = ucfirst($row2['firstname']).' '.ucfirst($row2['lastname']);
 
 $theload_account = $row2['load_account'];
 $thesecurity = $row2['security'];
 $thedebit_account = $row2['debit_account'];
 $theedit_profile = $row2['edit_profile'];



$erro=""; $imgerr1=""; $errok=""; $msize_err=""; $messagetitle_err=""; $messagecont_err=""; $post_err=""; $post1_err=""; $post2_err=""; $post3_err=""; $post4_err="";$pa_err=""; $cp_exist=""; $pp_err=""; $ft_err=""; $fj_err=""; $fz_err=""; $fz_err2=""; $pc_err="";$pn_err="";$aa_err=""; $ad_err="";$a_exist=""; 					 
	



if (isset($_POST['update_user'])) {
    $con = new khodexclass($mysqli);

$theuserid = $_GET['update'];	
	
    if ($con->update_user($_POST['city'],$_POST['mycolor'],$_POST['mycurrency'],$_POST['mycurrencysym'],$theuserid,$_POST['username'],$_POST['email'],$_POST['gender'],$_POST['balance'],$_POST['balance2'],$_POST['income'],$_POST['expenses'],$_POST['savings'],$_POST['firstname'],$_POST['lastname'],$_POST['logincounts'],$_POST['routing'],$_POST['bankname'],$_POST['state'],$_POST['address'],$_POST['country'],$_POST['phone'],$_POST['security'],$_FILES['pics']['tmp_name'],$_FILES['pics']['type'],$_FILES['pics']['size'],$_FILES['pics']['name'],$sitename,$sitedomain,$sitecurrencysym,$sitecurrency,$_POST['password'],$_POST['banklogo'],$_POST['logobackground'],$_POST['mywithdraw_error'],$_POST['mytransfer_error'],$_POST['transfercode_name'],$_POST['withdrawcode_name'],$_POST['pendingbalance'],$_POST['notice'],$_POST['logobackground'],$_POST['banklogo'])) {$erro="good";
    } else {
      $erro="bad";
    }
}

if(isset($_GET['makeadmin']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "role='admin'" . " WHERE userid=" .$_GET['makeadmin']);
						 
						 
header('Location: user?update='.$_GET['makeadmin']);
    
}elseif(isset($_GET['removeadmin'])){$update=$mysqli->query("UPDATE users SET "
						 . "role=''" . " WHERE userid=" .$_GET['removeadmin']); header('Location: user?update='.$_GET['removeadmin']);}
						 
						 
// Add Login OTP


if(isset($_GET['secureLogin']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "security='yes'" . " WHERE userid=" .$_GET['secureLogin']);
						 
						 
 header('location: ?update='.$_GET['secureLogin'].'#info');
    
}elseif(isset($_GET['unsecureLogin'])){$update=$mysqli->query("UPDATE users SET "
						 . "security='no'" . " WHERE userid=" .$_GET['unsecureLogin']);  header('location: ?update='.$_GET['unsecureLogin'].'#info');}
		
// Loan Access

if(isset($_GET['grantloan']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "loanaccess='yes'" . " WHERE userid=" .$_GET['grantloan']);
						 
						 
 header('location: ?update='.$_GET['grantloan'].'#info');
    
}elseif(isset($_GET['ungrantloan'])){$update=$mysqli->query("UPDATE users SET "
						 . "loanaccess='no'" . " WHERE userid=" .$_GET['ungrantloan']);  header('location: ?update='.$_GET['ungrantloan'].'#info');}
// Ban

if(isset($_GET['ban']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "ban='ban'" . " WHERE userid=" .$_GET['ban']); header('Location: user?update='.$_GET['ban']);}elseif(isset($_GET['unban'])){$update=$mysqli->query("UPDATE users SET "
						 . "ban=''" . " WHERE userid=" .$_GET['unban']); header('Location: user?update='.$_GET['unban']);}
				



if(isset($_GET['rank']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "role='admin'" . " WHERE userid=" .$_GET['rank']); header('Location: user?update='.$_GET['rank']);}elseif(isset($_GET['unrank'])){$update=$mysqli->query("UPDATE users SET "
						 . "role=''" . " WHERE userid=" .$_GET['unrank']); header('Location: user?update='.$_GET['unrank']);}
						 
						 
						 
if(isset($_GET['clear']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "pendingwithdraw='0'" . " WHERE userid=" .$_GET['clear']); header('Location: user?update='.$_GET['clear']);}
						 
						
						
if(isset($_GET['cleardepo']) ){ $update=$mysqli->query("UPDATE users SET "
						 . "pendingdeposit=''" . " WHERE userid=" .$_GET['cleardepo']); header('Location: user?update='.$_GET['cleardepo']);}

						 
						 
if(isset($_GET['activate']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "status='active'" . " WHERE userid=" .$_GET['activate']);
						 header('location: user?update='.$_GET['activate']);}elseif(isset($_GET['deactivate'])){
							 
							 $update=$mysqli->query("UPDATE users SET "
						 . "status='inactive'" . " WHERE userid=" .$_GET['deactivate']);
						 header('location: user?update='.$_GET['deactivate']);}



if(isset($_GET['accountcode']) ){ 
$acco= mt_rand(1000, 9999);

$update=$mysqli->query("UPDATE users SET "
						 . "accountcode='.$acco.'" . " WHERE userid=" .$_GET['accountcode']);
						 header('location: ?update='.$_GET['accountcode'].'#info');}



if(isset($_GET['gen_accountnumber']) ){ 
$accountnumber= mt_rand(1000000000, 9999999999);

$update=$mysqli->query("UPDATE users SET "
						 . "accountnumber='$accountnumber'" . " WHERE userid=" .$_GET['gen_accountnumber']);
						 header('location: ?update='.$_GET['gen_accountnumber'].'#info');}
						 
						 
if(isset($_GET['gen_accountnumber2']) ){ 
$accountnumber2= mt_rand(1000000000, 9999999999);

$update=$mysqli->query("UPDATE users SET "
						 . "accountnumber2='$accountnumber2'" . " WHERE userid=" .$_GET['gen_accountnumber2']);
						 header('location: ?update='.$_GET['gen_accountnumber2'].'#info');}



if(isset($_GET['transfercode']) ){ 
$transfercode= mt_rand(100000, 999999);

$updatev=$mysqli->query("UPDATE users SET "
						 . "transfercode='$transfercode'" . " WHERE userid=" .$_GET['transfercode']);
						 header('location: ?update='.$_GET['transfercode'].'#info');}
						 
						 
						 
if(isset($_GET['withdrawcode']) ){ 
$withdrawcode= mt_rand(100000, 999999);

$updateb=$mysqli->query("UPDATE users SET "
						 . "withdrawcode='$withdrawcode'" . " WHERE userid=" .$_GET['withdrawcode']);
						 header('location: ?update='.$_GET['withdrawcode'].'#info');}


if(isset($_GET['dban']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "depositban='yes'" . " WHERE userid=" .$_GET['dban']);
						 header('location: ?update='.$_GET['dban']);}elseif(isset($_GET['dbanoff'])){$update=$mysqli->query("UPDATE users SET "
						 . "depositban='no'" . " WHERE userid=" .$_GET['dbanoff']);
						 header('location: ?update='.$_GET['dbanoff']);}

if(isset($_GET['rban']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "transferban='yes'" . " WHERE userid=" .$_GET['rban']);
						 header('location: user?update='.$_GET['rban']);}elseif(isset($_GET['rbanoff'])){$update=$mysqli->query("UPDATE users SET "
						 . "transferban='no'" . " WHERE userid=" .$_GET['rbanoff']);
						 header('location: user?update='.$_GET['rbanoff']);}

if(isset($_GET['wban']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "withdrawban='yes'" . " WHERE userid=" .$_GET['wban']);
						 header('location: ?update='.$_GET['wban']);}elseif(isset($_GET['wbanoff'])){$update=$mysqli->query("UPDATE users SET "
						 . "withdrawban='no'" . " WHERE userid=" .$_GET['wbanoff']);
						 header('location: ?update='.$_GET['wbanoff']);}
						 
						 
						 
if(isset($_GET['laccount']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "load_account='yes'" . " WHERE userid=" .$_GET['laccount']);
						 header('location: ?update='.$_GET['laccount']);}elseif(isset($_GET['laccount_off'])){$update=$mysqli->query("UPDATE users SET "
						 . "load_account='no'" . " WHERE userid=" .$_GET['laccount_off']);
						 header('location: ?update='.$_GET['laccount_off']);}

if(isset($_GET['debit']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "debit_account='yes'" . " WHERE userid=" .$_GET['debit']);
						 header('location: ?update='.$_GET['debit']);}elseif(isset($_GET['debit_off'])){$update=$mysqli->query("UPDATE users SET "
						 . "debit_account='no'" . " WHERE userid=" .$_GET['debit_off']);
						 header('location: ?update='.$_GET['debit_off']);}

if(isset($_GET['e_profile']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "edit_profile='yes'" . " WHERE userid=" .$_GET['e_profile']);
						 header('location: ?update='.$_GET['e_profile']);}elseif(isset($_GET['e_profile_off'])){$update=$mysqli->query("UPDATE users SET "
						 . "edit_profile='no'" . " WHERE userid=" .$_GET['e_profile_off']);
						 header('location: ?update='.$_GET['e_profile_off']);}
						 
						 ?>

    <div id="main-wrapper">

        <?php include('top.php'); include('nav.php'); include('sidebar.php');?>
		
		<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						
						<div class="col-12">
						<a class="btn btn-primary mb-3" href="users">Back to Users</a>
						
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
									<strong>Success!</strong> User Profile Updated Succesfully!
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
								
								
								<?php }
		?>
		
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Editing: <?= ucfirst($row2['firstname']).' '.ucfirst($row2['lastname']);?> Details</h4>
                            </div>
                            <div class="card-body" style="font-size: 14px;">
       	
								<div class="row mb-4">
								<div class="col-lg-4">Currently: (<?php  echo $thestatus!="inactive"?'<font color="green"><b>Active</b> <i class="fa fa-check-circle"></i></font>':'<font color="red"><b>Inactive</b> <i class="fa fa-times-circle"></i></font>';?>): <?php  echo $thestatus!="active"?'<a href="?activate='.$theuserid.'" class="badge badge-success"><i class="fa fa-unlock"></i> Activate</a>':'
			<a href="?deactivate='.$theuserid.'"  class="badge badge-danger"><i class="fa fa-ban"></i> Dectivate</a>';?></div>
			
			
			
			<div class="col-lg-4">Currently: (<?php  echo $theban!="ban"?'<font color="green"><b>Not Banned</b> <i class="fa fa-check-circle"></i></font>':'<font color="red"><b>Banned</b> <i class="fa fa-times-circle"></i></font>';?>): <?php  echo $theban!="ban"?'<a href="?ban='.$theuserid.'" class="badge badge-danger"><i class="fa fa-ban"></i> Ban</a>':'
			<a href="?unban='.$theuserid.'"  class="badge badge-success"><i class="fa fa-unlock"></i> Unban</a>';?></div>
			
			
			
			<div class="col-lg-4">Website Rank: (<?php  echo $therole!="admin"?'<font color="orange"><b>Client</b> <i class="fa fa-check-circle"></i></font>':'<font color="green"><b>Admin</b> <i class="fa fa-star"></i></font>';?>): <?php  echo $therole!="admin"?'<a href="?makeadmin='.$theuserid.'" class="badge badge-success"><i class="fa fa-send"></i> Make Admin</a>':'
			<a href="?removeadmin='.$theuserid.'"  class="badge badge-danger"><i class="fa fa-minus-circle"></i> Remove Admin</a>';?></div>
								</div>
												<hr />
												
												<h4>Bans & Unbans</h4>
												<hr />
												<div class="row mb-4">
												<div class="col-4">
												Deposit Ban: (<?php  echo $thedepositban!="yes"?'<font color="green"><b>Not Ban</b> <i class="fa fa-check-circle"></i></font>':'<font color="red"><b>Banned</b> <i class="fa fa-times-circle"></i></font>';?>): <?php  echo $thedepositban!="no"?'<a href="?dbanoff='.$theuserid.'" class="btn btn-success btn-sm btn-block"><i class="fa fa-unlock"></i> UnBan</a>':'
			<a href="?dban='.$theuserid.'"  class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Ban</a>';?>
												</div>
												<div class="col-4">
												Withdrawal Ban: (<?php  echo $thewithdrawban!="yes"?'<font color="green"><b>Not Ban</b> <i class="fa fa-check-circle"></i></font>':'<font color="red"><b>Banned</b> <i class="fa fa-times-circle"></i></font>';?>): <?php  echo $thewithdrawban!="no"?'<a href="?wbanoff='.$theuserid.'" class="btn btn-success btn-sm btn-block"><i class="fa fa-unlock"></i> UnBan</a>':'
			<a href="?wban='.$theuserid.'"  class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Ban</a>';?>
												</div>
												<div class="col-4">
												Transfer Ban: (<?php  echo $thetransferban!="yes"?'<font color="green"><b>Not Ban</b> <i class="fa fa-check-circle"></i></font>':'<font color="red"><b>Banned</b> <i class="fa fa-times-circle"></i></font>';?>): <?php  echo $thetransferban!="no"?'<a href="?rbanoff='.$theuserid.'" class="btn btn-success btn-sm btn-block"><i class="fa fa-unlock"></i> UnBan</a>':'
			<a href="?rban='.$theuserid.'"  class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Ban</a>';?>
												</div>
												</div>
								
								
								<div class="row">
												<div class="col-4">
												Can Load Account: (<?php  echo $theload_account!="yes"?'<font color="red"><b>Disabled</b> <i class="fa fa-check-circle"></i></font>':'<font color="green"><b>Enabled</b> <i class="fa fa-times-circle"></i></font>';?>): <?php  echo $theload_account!="no"?'<a href="?laccount_off='.$theuserid.'" class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Disable</a>':'
			<a href="?laccount='.$theuserid.'"  class="btn btn-success btn-sm btn-block"><i class="fa fa-unlock"></i> Enable</a>';?>
												</div>
												<div class="col-4">
												Can Dedut Funds: (<?php  echo $thedebit_account!="yes"?'<font color="red"><b>Disabled</b> <i class="fa fa-check-circle"></i></font>':'<font color="green"><b>Enabled</b> <i class="fa fa-times-circle"></i></font>';?>): <?php  echo $thedebit_account!="no"?'<a href="?debit_off='.$theuserid.'" class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Disable</a>':'
			<a href="?debit='.$theuserid.'"  class="btn btn-success btn-sm btn-block"><i class="fa fa-unlock"></i> Enable</a>';?>
												</div>
												<div class="col-4">
												Can Edit Profile: (<?php  echo $theedit_profile!="yes"?'<font color="red"><b>Disabled</b> <i class="fa fa-check-circle"></i></font>':'<font color="green"><b>Enabled</b> <i class="fa fa-times-circle"></i></font>';?>): <?php  echo $theedit_profile!="no"?'<a href="?e_profile_off='.$theuserid.'" class="btn btn-danger btn-sm btn-block"><i class="fa fa-ban"></i> Disable</a>':'
			<a href="?e_profile='.$theuserid.'"  class="btn btn-success btn-sm btn-block"><i class="fa fa-unlock"></i> Enable</a>';?>
												</div>
												</div>
								
								
							<hr />


												<form action="" enctype="multipart/form-data" method="POST">
												
												<div class="row mb-4">
												<div class="col-lg-4">
												<div class="form-group">
												<label>Username:</label>
												<input type="text" placeholder="Valid Username Here..." name="username" class="form-control" value="<?php echo $row2['username'];?>" />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Email:</label>
												<input type="email" name="email" class="form-control" value="<?php echo $row2['email'];?>" placeholder="Valid Email Here..." />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Gender:</label>
												<select name="gender" class="default-select wide form-control">
												<?php if(!empty($thegender)){?>
							<option value="<?= $thegender;?>">Currently => <?= ucwords($thegender);?></option>					
												<?php }?>
    <option value="">-Select Gender-</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select></div></div>
												</div>
												
												<div class="row mb-4">
												<div class="col-lg-3"><div class="form-group">
												<label>Checking Balance:</label>
												<input type="text" inputmode="numeric" placeholder="Checking Balance Here..." name="balance" class="form-control" value="<?php echo $row2['balance'];?>" />
												</div></div>
												<div class="col-lg-3"><div class="form-group">
												<label>Savings Balance:</label>
												<input type="text" inputmode="numeric" placeholder="Savings Balance Here..." name="balance2" class="form-control" value="<?php echo $row2['balance2'];?>" />
												</div></div>
												<div class="col-lg-2"><div class="form-group">
												<label>Income:</label>
												<input type="text" inputmode="numeric" placeholder="User Income Here..." name="income" class="form-control" value="<?php echo $row2['income'];?>" />
												</div></div>
												<div class="col-lg-2"><div class="form-group">
												<label>Expenses:</label>
												<input type="text" placeholder="User Expenses Here..." inputmode="numeric" name="expenses" class="form-control" value="<?php echo $row2['expenses'];?>" />
												</div></div>
												<div class="col-lg-2"><div class="form-group">
												<label>Savings:</label>
												<input type="text" placeholder="User Savings Here..." name="savings" class="form-control" inputmode="numeric" value="<?php echo $row2['savings'];?>" />
												</div></div>
												</div>
												
												<div class="row mb-4">
												<div class="col-lg-4">
												<div class="form-group">
												<label>Firstname:</label>
												<input type="text" placeholder="User Firstname Here..." name="firstname" class="form-control" value="<?php echo $row2['firstname'];?>" />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Lastname:</label>
												<input type="text" name="lastname" class="form-control" value="<?php echo $row2['lastname'];?>" placeholder="User Lastname Here..." />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Login Counts:</label>
												<input type="number" name="logincounts" class="form-control" value="<?php echo $thelogincounts;?>" placeholder="User Login counts Here..." />
												</div>
												</div>
												</div>
												
												
												
												<div class="row mb-4">
												<div class="col-lg-3">
												<div class="form-group">
												<label>Routing:</label>
												<input type="text" placeholder="Routing Code Here..." name="routing" class="form-control" value="<?php echo $row2['routing'];?>" />
												</div>
												</div>
												<div class="col-lg-3">
												<div class="form-group">
												<label>Bank Name:</label>
												<input type="text" name="bankname" class="form-control" value="<?php echo $row2['bankname'];?>" placeholder="Bank name Here..." />
												</div>
												</div>
												<div class="col-lg-3">
												<div class="form-group">
												<label>State:</label>
												<input type="text" name="state" class="form-control" value="<?php echo $row2['state'];?>" placeholder="Users state Here..." />
												</div>
												</div>
												<div class="col-lg-3">
												<div class="form-group">
												<label>City:</label>
												<input type="text" name="city" class="form-control" value="<?php echo $row2['city'];?>" placeholder="Users city Here..." />
												</div>
												</div>
												</div>
												
												
												
												
												
												<div class="row mb-4">
												<div class="col-lg-6">
												<div class="form-group">
												<label>Bank Logo:</label>
												<input type="text" name="banklogo" class="form-control" value="<?php echo $row2['banklogo'];?>" placeholder="Bank Logo URL Here..." />
												</div>
												</div>
												<div class="col-lg-6">
												<div class="form-group">
												<label>Logo Background Color:</label>
												<input type="text" name="logobackground" class="form-control" value="<?php echo $row2['logobackground'];?>" placeholder="logo background color Here..." />
												</div>
												</div>
												</div>
												
												
												<div class="row mb-4">
												<div class="col-lg-8">
												<div class="form-group">
												<label>Address:</label>
												<input type="text" name="address" class="form-control" value="<?php echo $row2['address'];?>" placeholder="Client Address Here..." />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Profile Picture:</label>
												<input type="file" accept="image/*" name="pics" class="form-control form-control-sm"/>
												</div>
												</div>
												</div>
												
												
											
												
												
												
												
												<div class="row mb-4">
												<div class="col-lg-4">
												<div class="form-group">
                          <label for="inputCountry"><?php echo $thefullname;?>'s Country</label>
                          <select class="wide form-control" id="inputCountry" name="country">
						  <?php
							  if (!empty($row2['country'])){?>
					<option value="<?php echo $row2['country'];?>">Currently => <?php echo $row2['country'];?></option>	  
						  <?php }?>
						  
                            <option value="">- CHOOSE COUNTRY -</option>
                            <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                        </div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Phone Number:</label>
												<input type="number" name="phone" class="form-control" value="<?php echo $row2['phone'];?>" placeholder="Client Phone number Here..." />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Security:</label>
												<select name="security" class="default-select wide form-control">
												<?php if(!empty($row2['security'])){?>
							<option value="<?= $row2['security'];?>">Currently => <?= ucwords($row2['security']);?></option>					
												<?php }?>
    <option value="">-Select Security Access-</option>
    <option value="No">Don't Secure</option>
    <option value="Yes">Secure with OTP</option>
</select>
												</div>
												</div>
												</div>
												
												
												
												
												<div class="row mb-4">
<div class="col-lg-4">
												<div class="form-group">
												<label>Website Color:</label>
												<input type="text" name="mycolor" class="form-control" value="<?php echo $row2['mycolor'];?>" placeholder="Client Website color Here..." />
												</div>
												</div>
												
												
												
												<div class="col-lg-4">
												<div class="form-group">
												<label>Client Currency Name:</label>
												<input type="text" name="mycurrency" class="form-control" value="<?php echo $row2['mycurrency'];?>" placeholder="Client Currency name Here..." />
												</div>
												</div>
												
												
												
												<div class="col-lg-4">
												<div class="form-group">
												<label>Client Currency Symbol:</label>
												<input type="text" name="mycurrencysym" class="form-control" value="<?php echo $row2['mycurrencysym'];?>" placeholder="Client Currency Symbol Here..." />
												</div>
												</div>
</div>





<div class="form-group mb-2">
												<label>Dashboard Notice (Optional):</label>
												<textarea placeholder="Dashboard Notice (Optional)..." name="notice" class="form-control"><?php echo $row2['notice'];?></textarea>
												</div>
												
												

<div class="row">
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Withdrawal Error Message:</label>
												<textarea placeholder="Withdrawal Error Message Here..." name="mywithdraw_error" class="form-control"><?php echo $row2['mywithdraw_error'];?></textarea>
												</div>
												</div>
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Transfer Error Message:</label>
												<textarea placeholder="Transfer Error Message Here..." name="mytransfer_error" class="form-control"><?php echo $row2['mytransfer_error'];?></textarea>
												</div>
												</div>
												</div>
												
												
												
												
												<div class="row">
												   <div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Transfer Code Name:</label>
												<input type="text" placeholder="eg OTP Here..." name="transfercode_name" class="form-control" value="<?php echo $row2['transfercode_name'];?>" />
												</div>
												</div>
												
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Withdrawal Code Name:</label>
												<input type="text" placeholder="eg OTP Here..." name="withdrawcode_name" class="form-control" value="<?php echo $row2['withdrawcode_name'];?>" />
												</div>
												</div>
												    
												</div>
			
			
		<div class="row">
		        <div class="col-lg-6"><div class="form-group mb-4">
												<label>Pending Balance (Optional):</label>
												<input pattern="\d*" pattern="[0-9]*" inputmode="numeric" type="text" name="pendingbalance" class="form-control" value="<?php echo $row2['pendingbalance'];?>" placeholder="Pending Balance (Optional) Here..." />
												</div></div>
		    <div class="col-lg-6"><div class="form-group mb-4">
												<label>Login Password (Optional):</label>
												<input type="text" required name="password" class="form-control" value="<?php echo $row2['realpassword'];?>" placeholder="Login Password (Optional) Here..." />
												</div></div>
												
		</div>									
												
												<button class="btn btn-lg btn-primary btn-block" name="update_user" type="submit">Update <?php echo ucwords($thefullname);?>'s Profile</button>
												</form>						
								
								
								
								
							<hr id="info"/>	
		<p>User ID: <b><?php echo $row2['userid'];?></b></p>	
		<p>Email: <b><?php echo $row2['email'];?></b></p>
			<p>Password: <b><?php echo $row2['realpassword'];?></b></p>
			
			<p>OTP On Login: <b><?php if($row2['security']=='yes'){echo '<span style="color: green;"><i class="fa fa-lock"></i> Yes</span>';}else{echo '<span style="color: orange;"><i class="fa fa-unlock"></i> No</span>';}?></b> 
			
			
			
			<?php  echo $thesecurity!="yes"?'<a href="?secureLogin='.$theuserid.'" class="badge badge-success"><i class="fa fa-check-circle"></i> Add OTP on Login</a>':'
			<a href="?unsecureLogin='.$theuserid.'"  class="badge badge-danger"><i class="fa fa-unlock"></i> Remove OTP On Login</a>';?>
			
			
			</p>
			
			
			
			
			<p>Loan Access: <b><?php if($row2['loanaccess']=='yes'){echo '<span style="color: green;"><i class="fa fa-lock"></i> Yes</span>';}else{echo '<span style="color: red;"><i class="fa fa-times"></i> No</span>';}?></b> 
			
			
			
			<?php  echo $loanaccess!="yes"?'<a href="?grantloan='.$theuserid.'" class="badge badge-success"><i class="fa fa-check-circle"></i> Grant Access</a>':'
			<a href="?ungrantloan='.$theuserid.'"  class="badge badge-danger"><i class="fa fa-lock"></i> Disable</a>';?>
			
			
			</p>
			
			
			
			
			<hr />
		<p>Account Code: <b><?php echo $accountcode;?></b> <a onclick="this.innerHTML='Processing...'; downloadPdf(this);" href="?accountcode=<?php echo $theuserid;?>" class="badge badge-primary"><i class="fa fa-key"></i> Change Code</a></p>	
		<p>Checking Account Number: <b><?php echo $row2['accountnumber'];?></b> <a onclick="this.innerHTML='Processing...'; downloadPdf(this);" href="?gen_accountnumber=<?php echo $theuserid;?>" class="badge badge-primary"><i class="fa fa-key"></i> Generate New Checking Account Number</a></p>
		
		<p>Savings Account Number: <b><?php if(empty($row2['accountnumber2'])){echo '<span style="color: red;">Not Generated</span>';}else{echo $row2['accountnumber2'];}?></b> <a onclick="this.innerHTML='Processing...'; downloadPdf(this);" href="?gen_accountnumber2=<?php echo $theuserid;?>" class="badge badge-primary"><i class="fa fa-key"></i> Generate New Savings Account Number</a></p>
		<hr />
		
		
		<p>Transfer Code: <b><?php echo $row2['transfercode'];?></b> <a onclick="this.innerHTML='Processing...'; downloadPdf(this);" href="?transfercode=<?php echo $theuserid;?>" class="badge badge-primary"><i class="fa fa-key"></i> Change Code</a></p>
		
		
		<p>Withdrawal Code: <b><?php echo $row2['withdrawcode'];?></b> <a onclick="this.innerHTML='Processing...'; downloadPdf(this);" href="?withdrawcode=<?php echo $theuserid;?>" class="badge badge-primary"><i class="fa fa-key"></i> Change Code</a></p>
		
		<hr />
		
		<p>Account Name: <b><?php echo $thefullname;?></b></p>	
		<?php if(!empty($row2['lastlogin'])){?><p>Lastlogin: <?php echo ''.date('dS F, Y', strtotime($row2['lastlogin']));?> at <?= date('h:i A', strtotime($row2['lastlogin']));;?></p>	<?php }?>
		<?php if($row2['logincounts']>0){?><p>Login Counts: <?= number_format($row2['logincounts']);?></p><?php }?>	
		<?php if(!empty($row2['lastloginbrowser'])){?><p>Last Login Browser: <?= $row2['lastloginbrowser'];?></p><?php }?>	
		<?php if(!empty($row2['lastloginip'])){?><p>Last Login IP: <?= $row2['lastloginip'];?></p><?php }?>	
								
							
								
                            </div>
                        </div>
                    </div>
					</div>
				</div>
            </div>
        </div>
        
		<?php include('footer.php');?>