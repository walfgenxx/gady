<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Edit Profile - '.$sitename;
$thepage = 'Edit Profile';
$thepagecode = 'tools';

include('header.php');

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if($edit_profile !=='yes'){
	header('location: ./profile');
}

if (isset($_POST['update_myprofile'])) {
    $con = new khodexclass($mysqli);


if($role=='admin'){
    if ($con->update_myprofile_admin($_POST['city'],$_POST['mycolor'],$_POST['mycurrency'],$_POST['mycurrencysym'],$userid,$_POST['username'],$_POST['email'],$_POST['gender'],$_POST['income'],$_POST['expenses'],$_POST['savings'],$_POST['firstname'],$_POST['lastname'],$_POST['logincounts'],$_POST['routing'],$_POST['banklogo'],$_POST['bankname'],$_POST['state'],$_POST['address'],$_POST['country'],$_POST['phone'],$_POST['security'],$sitename,$sitedomain,$_POST['logobackground'],$_POST['mywithdraw_error'],$_POST['mytransfer_error'],$_POST['transfercode_name'],$_POST['withdrawcode_name'],$_POST['pendingbalance'],$_POST['notice'])) {$erro="good2";
    } else {
      $erro="bad2";
    }
}else{
   if ($con->update_myprofile($userid,$_POST['city'],$_POST['email'],$_POST['gender'],$_POST['income'],$_POST['expenses'],$_POST['savings'],$_POST['firstname'],$_POST['lastname'],$_POST['state'],$_POST['address'],$_POST['country'],$_POST['phone'],$_POST['security'],$sitename,$sitedomain)) {$erro="good2";
    } else {
      $erro="bad2";
    } 
}}



if (isset($_POST['update_pics'])) {
    $con = new khodexclass($mysqli);
	
    if ($con->update_pics($userid,$_FILES['pics']['tmp_name'],$_FILES['pics']['type'],$_FILES['pics']['size'],$_FILES['pics']['name'],$sitename,$sitedomain)) {$erro="good";
    } else {
      $erro="bad";
    }
}

if(isset($_GET['secureLogin']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "security='yes'" . " WHERE userid=" .$_GET['secureLogin']);
						 
						 
header('location: ./edit-profile#info');
    
}elseif(isset($_GET['unsecureLogin'])){$update=$mysqli->query("UPDATE users SET "
						 . "security='no'" . " WHERE userid=" .$_GET['unsecureLogin']); header('location: ./edit-profile#info');}


if(isset($_GET['gen_accountnumber2']) ){ 
$accountnumber2= mt_rand(1000000000, 9999999999);

$update=$mysqli->query("UPDATE users SET "
						 . "accountnumber2='$accountnumber2'" . " WHERE userid=" .$_GET['gen_accountnumber2']);
						header('location: ./edit-profile#info');}
						 
						 
if(isset($_GET['accountcode']) ){ 
$accountcode = mt_rand(1000, 9999);

$updatee=$mysqli->query("UPDATE users SET "
						 . "accountcode='$accountcode'" . " WHERE userid=" .$_GET['accountcode']);
						 header('location: ./edit-profile#info');}
						 
						 
if(isset($_GET['gen_accountnumber']) ){ 
$accountnumber= mt_rand(1000000000, 9999999999);

$update=$mysqli->query("UPDATE users SET "
						 . "accountnumber='$accountnumber'" . " WHERE userid=" .$userid);
						  header('location: ./edit-profile#info');}

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
                            Success! Profile picture has been updated.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>
		
		
		
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
                            Success! Your profile details has been updated.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
								
								
								<?php }
		?>
		
		
		
<div class="section-title">Edit Profile Picture and Details</div>
            <div class="card mb-4">
                <div class="card-body">
                    <ul class="nav nav-tabs capsuled" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link <?php if(!isset($_POST['update_pics'])){echo 'active';}?>" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="true">
                                Edit Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($_POST['update_pics'])){echo 'active';}?>" data-bs-toggle="tab" href="#changepics" role="tab">
                                Change Picture
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-1">
                        <div class="tab-pane fade <?php if(!isset($_POST['update_pics'])){echo 'active';}?> show" id="profile" role="tabpanel">
                            
							
						
						
						
						
						
						
						
						
						<form action="" enctype="multipart/form-data" method="POST">
												
												<div class="row mt-4">
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Username:</label>
												<input type="text" placeholder="Valid Username Here..." readonly name="username" class="form-control" value="<?php echo $row['username'];?>" />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Email:</label>
												<input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" placeholder="Valid Email Here..." />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Gender:</label>
												<select name="gender" class="default-select wide form-control">
												<?php if(!empty($gender)){?>
							<option value="<?= $gender;?>">Currently => <?= ucwords($gender);?></option>					
												<?php }?>
    <option value="">-Select Gender-</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select></div></div>
												</div>
												
												<div class="row">
												<?php if($role=='admin'){?><div class="col-lg-3"><div class="form-group mb-2">
												<label>Checking Balance:</label>
												<input type="text" readonly name="balance" class="form-control" value="<?php echo number_format($row['balance']);?>" />
												</div></div>
												
												<div class="col-lg-3"><div class="form-group mb-2">
												<label>Savings Balance:</label>
												<input type="text" readonly name="balance2" class="form-control" value="<?php echo number_format($row['balance2']);?>" />
												</div></div><?php }?>
												
												<div class="col-lg-2"><div class="form-group mb-2">
												<label>Income:</label>
												<input type="text" pattern="\d*" pattern="[0-9]*" inputmode="numeric" placeholder="User Income Here..." name="income" class="form-control" value="<?php echo $row['income'];?>" />
												</div></div>
												<div class="col-lg-2"><div class="form-group mb-2">
												<label>Expenses:</label>
												<input type="text" pattern="\d*" pattern="[0-9]*" inputmode="numeric" placeholder="User Expenses Here..." name="expenses" class="form-control" value="<?php echo $row['expenses'];?>" />
												</div></div>
												<div class="col-lg-2"><div class="form-group mb-2">
												<label>Savings:</label>
												<input type="text" pattern="\d*" pattern="[0-9]*" inputmode="numeric" placeholder="User Savings Here..." name="savings" class="form-control" value="<?php echo $row['savings'];?>" />
												</div></div>
												</div>
												
												
												
												<?php if($role=='admin'){?>
												<div class="row">
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Withdrawal Error Message:</label>
												<textarea placeholder="Withdrawal Error Message Here..." name="mywithdraw_error" class="form-control"><?php echo $row['mywithdraw_error'];?></textarea>
												</div>
												</div>
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Transfer Error Message:</label>
												<textarea placeholder="Transfer Error Message Here..." name="mytransfer_error" class="form-control"><?php echo $row['mytransfer_error'];?></textarea>
												</div>
												</div>
												</div>
												
												
												
												
												<div class="row">
												   <div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Transfer Code Name:</label>
												<input type="text" placeholder="eg OTP Here..." name="transfercode_name" class="form-control" value="<?php echo $row['transfercode_name'];?>" />
												</div>
												</div>
												
												<div class="col-lg-6">
												<div class="form-group mb-2">
												<label>Withdrawal Code Name:</label>
												<input type="text" placeholder="eg OTP Here..." name="withdrawcode_name" class="form-control" value="<?php echo $row['withdrawcode_name'];?>" />
												</div>
												</div>
												    
												</div><?php }?>
												
												
												
												
												
												
												<div class="row">
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Firstname:</label>
												<input type="text" placeholder="User Firstname Here..." name="firstname" class="form-control" value="<?php echo $row['firstname'];?>" />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Lastname:</label>
												<input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname'];?>" placeholder="User Lastname Here..." />
												</div>
												</div>
												<?php if($role=='admin'){?><div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Login Counts:</label>
												<input type="text" pattern="\d*" pattern="[0-9]*" inputmode="numeric" name="logincounts" class="form-control" value="<?php echo $logincounts;?>" placeholder="User Login counts Here..." />
												</div>
												</div><?php }?>
												</div>
												
												
												
												<div class="row">
												<div class="col-lg-3">
												<div class="form-group mb-2">
												<label>Routing:</label>
												<input readonly type="text" placeholder="Routing Code Here..." name="routing" class="form-control" value="<?php echo $row['routing'];?>" />
												</div>
												</div>
												<?php if($role=='admin'){?><div class="col-lg-3">
												<div class="form-group mb-2">
												<label>Bank Name:</label>
												<input type="text" name="bankname" class="form-control" required value="<?php echo $row['bankname'];?>" placeholder="Bank name Here..." />
												</div>
												</div><?php }?>
												<div class="col-lg-3">
												<div class="form-group mb-2">
												<label>State:</label>
												<input type="text" name="state" class="form-control" value="<?php echo $row['state'];?>" placeholder="Users state Here..." />
												</div>
												</div>
												<div class="col-lg-3">
												<div class="form-group mb-2">
												<label>City:</label>
												<input type="text" name="city" class="form-control" value="<?php echo $row['city'];?>" placeholder="city Here..." />
												</div>
												</div>
												</div>
												
												
												<div class="row">
												<div class="col-lg-12">
												<div class="form-group mb-2">
												<label>Address:</label>
												<input type="text" name="address" class="form-control" value="<?php echo $row['address'];?>" placeholder="Client Address Here..." />
												</div>
												</div>
												</div>
												
												
												
												
												<div class="row">
												<?php if($role=='admin'){?><div class="col-lg-8 col-12">
												<div class="form-group mb-2">
												<label>Bank Logo (Not Must):</label>
												<input type="text" name="banklogo" class="form-control" value="<?php echo $row['banklogo'];?>" placeholder="Bank Logo in PNG Here..." />
												</div>
												</div><?php }?>
												
												
												<?php if($role=='admin'){?><div class="col-lg-4 col-12">
												<div class="form-group mb-2">
												<label>Logo Background Color:</label>
												<input type="text" name="logobackground" class="form-control" value="<?php echo $row['logobackground'];?>" placeholder="Logo Background color Here..." />
												</div>
												</div><?php }?>
												</div>
												
												
												
												<div class="row">
												<div class="col-lg-4">
												<div class="form-group mb-2">
                          <label for="inputCountry">My Country</label>
                          <select class="wide form-control" id="inputCountry" name="country">
						  <?php
							  if (!empty($row['country'])){?>
					<option value="<?php echo $row['country'];?>">Currently => <?php echo $row['country'];?></option>	  
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
												<div class="form-group mb-2">
												<label>Phone Number:</label>
												<input type="text" inputmode="numeric" name="phone" class="form-control" value="<?php echo $row['phone'];?>" placeholder="Client Phone number Here..." />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group mb-2">
												<label>Security:</label>
												<select name="security" required class="default-select wide form-control">
												<?php if(!empty($row['security'])){?>
							<option value="<?= $row['security'];?>">Currently => <?= ucwords($row['security']);?></option>					
												<?php }?>
    <option value="">-Select Security Access-</option>
    <option value="No">Don't Secure</option>
    <option value="Yes">Secure with OTP</option>
</select>
												</div>
												</div>
												</div>
												
											
											
											
											<?php if($role=='admin'){?><div class="row">
												<div class="col-lg-12">
												<div class="form-group mb-2">
												<label>Dashboard Notice (Optional):</label>
												<textarea type="text" name="notice" class="form-control" placeholder="Dashboard Notice (Optional) Here..."><?php echo $row['notice'];?></textarea>
												</div>
												</div>
												</div>
												
												
												<div class="row mb-2">
												    
												    <div class="col-lg-3 mb-2">
												<div class="form-group">
												<label>Pending Balance (Optional):</label>
												<input type="text" name="pendingbalance" class="form-control" value="<?php echo $row['pendingbalance'];?>" placeholder="Pending Balance (Optional) Here..." />
												</div>
												</div>
												
<div class="col-lg-3 mb-2">
    
												<div class="form-group">
												<label>Website Color:</label>
												<input type="text" name="mycolor" class="form-control" value="<?php echo $row['mycolor'];?>" placeholder="My Website color Here..." />
												</div>
												</div>
												
												
												
												<div class="col-lg-3 col-6 mb-2">
												<div class="form-group">
												<label>My Currency Name:</label>
												<input type="text" name="mycurrency" class="form-control" value="<?php echo $row['mycurrency'];?>" placeholder="My Currency name Here..." />
												</div>
												</div>
												
												
												
												<div class="col-lg-3 col-6 mb-2">
												<div class="form-group">
												<label>Currency Symbol:</label>
												<input type="text" name="mycurrencysym" class="form-control" value="<?php echo $row['mycurrencysym'];?>" placeholder="My Currency Symbol Here..." />
												</div>
												</div>
</div><?php }?>
												
												
												<button class="btn btn-lg btn-primary btn-block" name="update_myprofile" type="submit">Update Profile</button>
												</form>	
							
							
							
							
							
							
							
							
							
							
							
							
							
							
                        </div>
                        <div class="tab-pane <?php if(isset($_POST['update_pics'])){echo 'active';}?> fade" id="changepics" role="tabpanel">
                           
						   
						   
						  <center><img style="max-width: 70%; margin-bottom: 20px; margin-top: 10px;" src="doc/images/<?= $pics;?>" alt="<?= $fullname;?>" class="imaged"></center>
						   
						   
						   <form action="" enctype="multipart/form-data" method="POST">
												
												<div class="custom-file-upload mb-2" id="fileUpload1">
                            <input type="file" required name="pics" id="fileuploadInput" accept="image/*">
                            <label for="fileuploadInput">
                                <span>
                                    <strong>
                                        <ion-icon name="arrow-up-circle-outline"></ion-icon>
                                        <i>Upload a Photo</i>
                                    </strong>
                                </span>
                            </label>
                        </div>
												
												
												<button class="btn btn-lg btn-primary btn-block" name="update_pics" type="submit">Update Profile Picture</button>
												</form>
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
                        </div>
                    </div>
					
					
					
					
					
					<hr id="info"/>	
		<p>User ID: <b><?php echo $row['userid'];?></b></p>	
		<p>Email: <b><?php echo $row['email'];?></b></p>
		
		<p>OTP On Login: <b><?php if($security=='yes'){echo '<span style="color: green;"><i class="fa fa-lock"></i> Yes</span>';}else{echo '<span style="color: orange;"><i class="fa fa-unlock"></i> No</span>';}?></b> 
			
			
			
			<?php  echo $security!="yes"?'<a href="?secureLogin='.$userid.'" class="badge badge-success"><i class="fa fa-check-circle"></i> Add OTP on Login</a>':'
			<a href="?unsecureLogin='.$userid.'"  class="badge badge-danger"><i class="fa fa-unlock"></i> Remove OTP On Login</a>';?>
			
			
			</p>
		<hr />
		<p>Account Code: <b><?php echo $accountcode;?></b> <a onclick="this.innerHTML='Processing...'; downloadPdf(this);" href="?accountcode=<?php echo $userid;?>" style="color: #fff;" class="badge badge-danger"><i class="fa fa-key"></i> Change Code</a></p>	
		<p>Checking Account Number: <b><?php echo $row['accountnumber'];?></b> <a onclick="this.innerHTML='Processing...'; downloadPdf(this);" href="?gen_accountnumber=<?php echo $userid;?>" style="color: #fff;" class="badge badge-danger"><i class="fa fa-key"></i> Generate New Checking Account Number</a></p>
		<p>Savings Account Number: <b><?php if(empty($accountnumber2)){echo '<span style="color: red;">Not Generated</span>';}else{echo $accountnumber2;}?></b> <a onclick="this.innerHTML='Processing...'; downloadPdf(this);" href="?gen_accountnumber2=<?php echo $userid;?>" style="color: #fff;" class="badge badge-danger"><i class="fa fa-key"></i> Generate New Savings Account Number</a></p>
		<p>Account Name: <b><?php echo $fullname;?></b></p>	
		<?php if(!empty($row['lastlogin'])){?><p>Lastlogin: <?php echo ''.date('dS F, Y', strtotime($row['lastlogin']));?></p>	<?php }?>
		<?php if($row['logincounts']>0){?><p>Login Counts: <?= number_format($row['logincounts']);?></p><?php }?>	
		<?php if(!empty($row['lastloginbrowser'])){?><p>Last Login Browser: <?= $row['lastloginbrowser'];?></p><?php }?>	
		<?php if(!empty($row['lastloginip'])){?><p>Last Login IP: <?= $row['lastloginip'];?></p><?php }?>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->
	
	<?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>