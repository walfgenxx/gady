<?php require_once('../data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Create New User - Admin Dashboard &raquo; '.$sitename;
$thepage = 'Create User';
$pagecode = 'create_user';

include('header.php');

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);


if (isset($_POST['create'])) { 

    $con = new khodexclass($mysqli);
	if ($con->create_user($_POST['sendmail'],$_POST['mycolor'],$_POST['mycurrency'],$_POST['mycurrencysym'],$_POST['role'],$_POST['routing'],$_POST['bankname'],$_POST['username'],$_POST['accnum'],$_POST['accnum2'],$_POST['password'],$_POST['email'],$_POST['firstname'],$_POST['lastname'],$_POST['logins'],$_POST['gender'],$_POST['security'],$_POST['number'],$_POST['country'],$_POST['state'],$_POST['city'],$_POST['address'],$_POST['edit_profile'],$_POST['load_account'],$_POST['debit_account'],$_POST['depositban'],$_POST['withdrawban'],$_POST['transferban'],$_POST['balance'],$_POST['balance2'],$_POST['income'],$_POST['savings'],$_POST['expenses'],$_FILES['pics']['tmp_name'],$_FILES['pics']['type'],$_FILES['pics']['size'],$_FILES['pics']['name'],$BrowserInfo,$IpInfo,$sitename,$sitedomain,$sitecurrencysym,$sitecurrency,$_POST['logobackground'],$_POST['banklogo'])) {
		$erro="good";
    } else {
      $erro="bad";
    }
}

?>

    <div id="main-wrapper">

        <?php include('top.php'); include('nav.php'); include('sidebar.php');?>
		
		<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row mb-4">
					<div class="col-xl-12">
						<div class="col-12">
						
						
						
						
						
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
									<strong>Success!</strong> User Profile Created Succesfully, If you choose to send to mail, the Login Details will have been in your email <font style="color: red;"><?php echo $_POST['email'];?></font> as shown below, Check Inbox or Spambox!
		 <hr />
		 <p><b>Login Link:</b> https://<?php echo $sitedomain;?></p>
		 <p><b>Username:</b> <?php echo $_POST['username'];?></p>
		 <p><b>Checking Number:</b> <?php echo $_POST['accnum'];?></p>
		 <p><b>Savings Number:</b> <?php echo $_POST['accnum2'];?></p>
		 <p><b>Email:</b> <?php echo $_POST['email'];?></p>
		 <p><b>Password:</b> <?php echo $_POST['password'];?></p>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
								
								
								<?php }
		?>
						
						
						
						
						
						
						
						
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Create New User</h4>
                            </div>
                            <div class="card-body">
                                
								
								<form action="" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
												
												<div class="row mb-4">
												<div class="col-lg-4">
												<div class="form-group">
												<label >Username:</label>
												<input type="text" required placeholder="Valid Username Here..." name="username" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['username'];
												}};?>" />
												<div class="invalid-feedback">
															Please enter a username.
														</div>
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Password:</label>
												<input type="text" required placeholder="User Password Here..." name="password" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['password'];
												}};?>" />
												<div class="invalid-feedback">
															Please choose a password.
														</div>
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Email:</label>
												<input required type="email" name="email" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['email'];
												}};?>" placeholder="Valid Email Here..." />
												<div class="invalid-feedback">
															Please enter a valid email.
														</div>
												<input type="text" value="<?php $accountnum = mt_rand(0000000000, 9999999999);
												
												echo $accountnum;?>" name="accnum" hidden />
												<input type="text" value="<?php $accountnum2 = mt_rand(1000000000, 9999999999);
												
												echo $accountnum2;?>" name="accnum2" hidden />
												</div>
												</div>
												</div>
												
												
												
												<div class="row mb-4">
												<div class="col-lg-5">
												<div class="form-group">
												<label>Firstname:</label>
												<input type="text" required placeholder="User Firstname Here..." name="firstname" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['firstname'];
												}};?>" />
												<div class="invalid-feedback">
															Please enter firstname.
														</div>
												</div>
												</div>
												<div class="col-lg-5">
												<div class="form-group">
												<label>Lastname:</label>
												<input type="text" required name="lastname" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['lastname'];
												}};?>" placeholder="User Lastname Here..." />
												<div class="invalid-feedback">
															Please enter lastname.
														</div>
												</div>
												</div>
												<div class="col-lg-2">
												<div class="form-group">
												<label>Login Counts:</label>
												<input type="text" pattern="[0-9]*" inputmode="numeric" name="logins" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['logins'];
												}};?>" placeholder="login Counts Here..." />
												</div>
												</div>
												</div>
												
												
												<div class="row mb-4">
												<div class="col-lg-12"><div class="form-group">
												<label>Users Image:</label>
												<input type="file" accept="image/*" required placeholder="Picture..." name="pics" class="form-control form-control-sm" />
												<div class="invalid-feedback">
															Please upload client picture.
														</div>
												</div></div>
												</div>
												
												
												
												
												
												<div class="row mb-4">
												<div class="col-lg-3">
                          <label for="inputCountry">User's Role</label>
                          <select class="default-select wide form-control" id="inputCountry" name="role">
						   <option value="">- CHOOSE USER'S ROLE -</option>
   <option value="">Client</option>
   <option value="admin">Admin</option>
                          </select>
						  <div class="invalid-feedback">
															Please select gender.
														</div>
												</div>
												<div class="col-lg-3">
                          <label for="inputCountry">User's Gender</label>
                          <select required class="default-select wide form-control" id="inputCountry" name="gender">
						   <option value="">- CHOOSE USER'S GENDER -</option>
   <option value="Male">Male</option>
   <option value="Female">Female</option>
                          </select>
						  <div class="invalid-feedback">
															Please select gender.
														</div>
												</div>
												<div class="col-lg-3">
                          <label for="inputCountry">Security with OTP</label>
                          <select required class="default-select wide form-control" id="inputCountry" name="security">
						   <option value="">- CHOOSE SECURITY STATUS -</option>
   <option value="yes">Secure Account</option>
   <option value="no">Don't Secure Account</option>
   
                          </select><div class="invalid-feedback">
															Please select to require OTP to login or not.
														</div>
												</div><div class="col-lg-3">
												<div class="form-group">
												<label>Phone Number:</label>
												<input type="text" pattern="[0-9]*" inputmode="numeric" placeholder="User's Phone Number Here..." name="number" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['number'];
												}};?>" />
												</div>
												</div>
												</div>
											
											
											
											
											
											
											<div class="row mb-4">
												<div class="col-lg-8">
												<div class="form-group">
												<label>Bank Logo URL:</label>
												<input type="text" name="banklogo" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['banklogo'];
												}};?>" placeholder="Client Bank Logo URL Here..." />
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>Logo BG Color:</label>
												<input type="text" name="logobackground" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['logobackground'];
												}};?>" placeholder="Client Bank Logo BG Color Code Here..." />
												</div>
												</div>
												</div>	
												
												<h4><b>#Contact & Location</b></h4>
												
												<div class="row mb-4">
												<div class="col-lg-4">
                          <label for="inputCountry">User's Current Country</label>
                          <select required class="wide form-control" id="inputCountry" name="country">
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
   <option value="United States of America" selected>United States of America</option>
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
						  <div class="invalid-feedback">
															Please select a country.
														</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>User's State:</label>
												<input type="text" required name="state" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['state'];
												}};?>" placeholder="User's State Here..." />
												<div class="invalid-feedback">
															Please enter a state.
														</div>
												</div>
												</div>
												<div class="col-lg-4">
												<div class="form-group">
												<label>User's City:</label>
												<input type="text" name="city" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['city'];
												}};?>" placeholder="User's City Here..." />
												</div>
												</div>
												</div>
												
												
												
												
												<div class="row mb-2">
<div class="col-lg-9">
<div class="form-group mb-2">
												<label>Address:</label>
												<input type="text" placeholder="User's Address Here..." name="address" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['address'];
												}};?>" />
												</div>
</div>
<div class="col-lg-3">
    <div class="form-group mb-2">
                          <label for="inputCountry">Mail Details</label>
                          <select required class="default-select wide form-control" id="inputCountry" name="sendmail">
						   <option value="">- CHOOSE OPTION -</option>
   <option value="yes">Yes (Send To Email)</option>
   <option value="no">No (Don't Send to Email)</option>
                          </select>
						  <div class="invalid-feedback">
															Please select gender.
														</div>
												</div></div>
</div>
												
												
												
												
												<h4><b>#Action Access</b></h4>
												
												
												
												
												<div class="row mb-4">
												<div class="col-lg-4">
                          <label for="inputCountry">Can Edit Account</label>
                          <select required class="default-select wide form-control" id="inputCountry" name="edit_profile">
						   <option value="">- CHOOSE OPTION -</option>
   <option value="no">No</option>
   <option value="yes">Yes</option>
                          </select><div class="invalid-feedback">
															Please select an option.
														</div>
												</div>
												<div class="col-lg-4">
                          <label for="inputCountry">Can Load Funds</label>
                          <select required class="default-select wide form-control" id="inputCountry" name="load_account">
						   <option value="">- CHOOSE OPTION -</option>
   <option value="yes">Yes</option>
   <option value="no">No</option>
                          </select><div class="invalid-feedback">
															Please select an option.
														</div>
												</div>
												<div class="col-lg-4">
                          <label for="inputCountry">Can Deduct Funds</label>
                          <select required class="default-select wide form-control" id="inputCountry" name="debit_account">
						   <option value="">- CHOOSE OPTION -</option>
   <option value="yes">Yes</option>
   <option value="no">No</option>
                          </select><div class="invalid-feedback">
															Please select an option.
														</div>
												</div>
												</div>
												
												
												
												<h4><b>#Transaction Access</b></h4>
												
												
												
												
												<div class="row mb-4">
												<div class="col-lg-4">
                          <label for="inputCountry">Deposit Ban</label>
                          <select required class="default-select wide form-control" id="inputCountry" name="depositban">
						   <option value="">- CHOOSE OPTION -</option>
   <option value="no">No</option>
   <option value="yes">Yes</option>
                          </select><div class="invalid-feedback">
															Please select an option.
														</div>
												</div>
												<div class="col-lg-4">
                          <label for="inputCountry">Withdrawal Ban</label>
                          <select required class="default-select wide form-control" id="inputCountry" name="withdrawban">
						   <option value="">- CHOOSE OPTION -</option>
   <option value="yes">Yes</option>
   <option value="no">No</option>
                          </select><div class="invalid-feedback">
															Please select an option.
														</div>
												</div>
												<div class="col-lg-4">
                          <label for="inputCountry">Transfer Ban</label>
                          <select required class="default-select wide form-control" id="inputCountry" name="transferban">
						   <option value="">- CHOOSE OPTION -</option>
   <option value="yes">Yes</option>
   <option value="no">No</option>
                          </select><div class="invalid-feedback">
															Please select an option.
														</div>
												</div>
												</div>
												
												
												
												<div class="row mb-2">
<div class="col-lg-4 mb-2">
												<div class="form-group">
												<label>Dashboard Color (Optional):</label>
												<input type="text" name="mycolor" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['mycolor'];
												}};?>" placeholder="Client Website color Here..." />
												</div>
												</div>
												
												
												
												<div class="col-lg-4 mb-2">
												<div class="form-group">
												<label>Client Currency Name (Optional):</label>
												<input type="text" name="mycurrency" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['mycurrency'];
												}};?>" placeholder="Client Currency name Here..." />
												</div>
												</div>
												
												
												
												<div class="col-lg-4 mb-2">
												<div class="form-group">
												<label>Client Currency Symbol (Optional):</label>
												<input type="text" name="mycurrencysym" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['mycurrencysym'];
												}};?>" placeholder="Client Currency Symbol Here..." />
												</div>
												</div>
</div>
												
												
												
												<div class="row mb-4">
												<div class="col-lg-6">
												<div class="form-group">
												<label>Routing:</label>
												<input type="text" required placeholder="User routing Here..." name="routing" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['routing'];
												}};?>" />
												<div class="invalid-feedback">
															Please enter routing code.
														</div>
												</div>
												</div>
												<div class="col-lg-6">
												<div class="form-group">
												<label>Bank Name:</label>
												<input type="text" required name="bankname" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['bankname'];
												}};?>" placeholder="User bank name Here..." />
												<div class="invalid-feedback">
															Please enter bank name.
														</div>
												</div>
												</div>
												</div>
												
												
												
												
												<h4><b>#Funds & Bills</b></h4>
												<div class="row mb-4">
												<div class="col-lg-3">
												<div class="form-group">
												<label>Checking Balance ($):</label>
												<input type="text" inputmode="numeric" required placeholder="Checking Balance Here..." name="balance" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['balance'];
												}};?>" /><div class="invalid-feedback">
															Please input checking balance.
														</div>
												</div>
												</div>
												<div class="col-lg-3">
												<div class="form-group">
												<label>Savings Balance ($):</label>
												<input type="text" inputmode="numeric" required placeholder="Savings Balance Here..." name="balance2" class="form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['balance2'];
												}};?>" /><div class="invalid-feedback">
															Please input savings balance.
														</div>
												</div>
												</div>
												<div class="col-lg-2">
												<div class="form-group">
												<label>User's Income ($):</label>
												<input type="text" inputmode="numeric" name="income" class="form-control " value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['income'];
												}};?>" placeholder="User's income here..." />
												</div>
												</div>
												<div class="col-lg-2">
												<div class="form-group">
												<label>User's Savings ($):</label>
												<input type="text" inputmode="numeric" name="savings" class="form-control " value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['savings'];
												}};?>" placeholder="User's savings Here..." />
												</div>
												</div>
												<div class="col-lg-2">
												<div class="form-group">
												<label>User's Expenses ($):</label>
												<input type="text" inputmode="numeric" name="expenses" class=" form-control" value="<?php if(isset($_POST['create'])){if ($erro == "bad"){
													echo $_POST['expenses'];
												}};?>" placeholder="User's expenses Here..." />
												</div>
												</div>
												</div>
												
												<button class="btn btn-primary btn-lg btn-block" name="create" type="submit">Submit Info</button>
												</form>		
								
								
                            </div>
                        </div>
                    </div>
					</div>
				</div>
            </div>
        </div>
        
		<?php include('footer.php');?>