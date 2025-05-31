<?php require_once('../data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Admin Dashboard - '.$sitename;
$thepage = 'Admin Backend';
$pagecode = 'home';

include('header.php');

if(isset($_GET['delete'])){ if($clear=$mysqli->query("DELETE FROM users WHERE userid=".$_GET['delete'])){
   header('location: '.$_SERVER['HTTP_REFERER']);
    
}}

if(isset($_GET['makeadmin']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "role='admin'" . " WHERE userid=" .$_GET['makeadmin']); header('Location: '.$_SERVER['HTTP_REFERER']);}elseif(isset($_GET['removeadmin'])){$update=$mysqli->query("UPDATE users SET "
						 . "role=''" . " WHERE userid=" .$_GET['removeadmin']); header('location: '.$_SERVER['HTTP_REFERER']);}
		
		
		if(isset($_GET['ban']) ){  $update=$mysqli->query("UPDATE users SET "
						 . "ban='ban'" . " WHERE userid=" .$_GET['ban']); header('location: '.$_SERVER['HTTP_REFERER']);}elseif(isset($_GET['unban'])){$update=$mysqli->query("UPDATE users SET "
						 . "ban=''" . " WHERE userid=" .$_GET['unban']); header('Location: '.$_SERVER['HTTP_REFERER']);}
						 
						 ?>

    <div id="main-wrapper">

        <?php include('top.php'); include('nav.php'); include('sidebar.php');?>
		
		<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="col-xl-12 card h-auto">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
										<div class="card trading mb-sm-0 mb-3"><a href="create-user">
											<div class="card-body">
												<div class="income-data d-flex justify-content-between align-items-center mb-sm-0 mb-2 ps-lg-0">
													<div>
														<h3 class="font-w600 fs-2 mb-0 text-white">Add User</h3>
														<span class="fs-6 font-w500 text-white">Create new profile</span>
													</div>
													<span class="income-icon style-2" style="background: red;">
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
													</span>
												</div>
											</div></a>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
										<div class="card trading mb-sm-0 mb-3"><a href="users">
											<div class="card-body">
												<div class="income-data d-flex justify-content-between align-items-center mb-sm-0 mb-2 ps-lg-0">
													<div>
														<h3 class="font-w600 fs-2 mb-0 text-white"><?= number_format($myclients);?></h3>
														<span class="fs-6 font-w500 text-white">All Clients</span>
													</div>
													<span class="income-icon style-2">
														<svg width="34" height="24" viewbox="0 0 34 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M33.5 22.5C33.5 22.8978 33.342 23.2793 33.0607 23.5606C32.7794 23.8419 32.3978 24 32 24H14C13.6022 24 13.2206 23.8419 12.9393 23.5606C12.658 23.2793 12.5 22.8978 12.5 22.5C12.5 20.113 13.4482 17.8238 15.136 16.136C16.8239 14.4482 19.1131 13.5 21.5 13.5H24.5C26.8869 13.5 29.1761 14.4482 30.864 16.136C32.5518 17.8238 33.5 20.113 33.5 22.5ZM23 0C21.8133 0 20.6533 0.351893 19.6666 1.01118C18.6799 1.67047 17.9108 2.60754 17.4567 3.7039C17.0026 4.80025 16.8838 6.00665 17.1153 7.17053C17.3468 8.33442 17.9182 9.40352 18.7574 10.2426C19.5965 11.0817 20.6656 11.6532 21.8295 11.8847C22.9933 12.1162 24.1997 11.9974 25.2961 11.5433C26.3925 11.0891 27.3295 10.3201 27.9888 9.33341C28.6481 8.34672 29 7.18668 29 5.99999C29 4.4087 28.3679 2.88257 27.2426 1.75736C26.1174 0.63214 24.5913 0 23 0ZM9.5 0C8.31331 0 7.15327 0.351893 6.16658 1.01118C5.17988 1.67047 4.41085 2.60754 3.95672 3.7039C3.5026 4.80025 3.38378 6.00665 3.61529 7.17053C3.8468 8.33442 4.41824 9.40352 5.25736 10.2426C6.09647 11.0817 7.16557 11.6532 8.32946 11.8847C9.49334 12.1162 10.6997 11.9974 11.7961 11.5433C12.8925 11.0891 13.8295 10.3201 14.4888 9.33341C15.1481 8.34672 15.5 7.18668 15.5 5.99999C15.5 4.4087 14.8679 2.88257 13.7426 1.75736C12.6174 0.63214 11.0913 0 9.5 0ZM9.5 22.5C9.49777 20.9244 9.80818 19.364 10.4133 17.9093C11.0183 16.4545 11.9061 15.1342 13.025 14.025C12.1093 13.6793 11.1388 13.5014 10.16 13.5H8.84C6.62931 13.504 4.5103 14.3839 2.94711 15.9471C1.38391 17.5103 0.503965 19.6293 0.5 21.84V22.5C0.5 22.8978 0.658035 23.2793 0.93934 23.5606C1.22064 23.8419 1.60218 24 2 24H9.77C9.59537 23.519 9.50406 23.0117 9.5 22.5Z" fill="#FFFFFF"></path>
														</svg>
													</span>
												</div>
											</div></a>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
										<div class="card booking mb-0">
											<div class="card-body">
												<div class="income-data d-flex justify-content-between align-items-center mb-sm-0 mb-2  mb-sm-0 mb-2 ps-lg-0 ">
													<a href="website-settings"><div>
														<h3 class="font-w600 fs-2 mb-0">Settings</h3>
														<span class="fs-6 font-w500">Configure Website</span>
													</div></a>
													<span class="income-icon style-1"><a href="website-settings">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fffff" class="bi bi-gear" viewBox="0 0 16 16">
  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
</svg>	
													</a></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clients Profile (<?= number_format($myclients);?>)</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
								<style>
								table.kit tr td { font-size: 14px;
								cursor: pointer;
								}
								</style>
                                    <table id="example3" class="display kit" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Balance</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <th>Country</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM users WHERE creator='".$_SESSION['user']['userid']."' AND role ='' ORDER by id DESC";
        $result = $mysqli->query($query);
        $c= 0;
        while ($userrow = $result->fetch_array()) {
            $c++;
		
		$fullname = $userrow['firstname'].' '.$userrow['lastname'];
		
		if($userrow['status'] =='active'){
			$statz ='<span class="badge badge-success"><i class="fa fa-check-circle"></i> Active</span>';
		}elseif($userrow['status'] =='inactive'){
			$statz ='<span class="badge badge-danger"><i class="fa fa-minus-circle"></i> InActive</span>';
		}  
		
		
		$nuz = $nuz+1;
		?>
                                            <tr>
                                                <td><img data-bs-toggle="modal" data-bs-target="#basicModal<?= $nuz;?>" class="rounded-circle" width="35" height="35" style="object-fit: cover;" src="../doc/images/<?= $userrow['pics'];?>" alt="<?= ucwords($fullname);?>"></td>
                                                <td data-bs-toggle="modal" data-bs-target="#basicModal<?= $nuz;?>"><?= ucwords($fullname);?></td>
                                                <td data-bs-toggle="modal" data-bs-target="#basicModal<?= $nuz;?>"><b><?= $sitecurrencysym;?><?= number_format($userrow['balance']);?></b></td>
                                                <td data-bs-toggle="modal" data-bs-target="#basicModal<?= $nuz;?>"><?= ucwords($userrow['gender']);?></td>
                                                <td><?= $statz;?></td>
                                                <td data-bs-toggle="modal" data-bs-target="#basicModal<?= $nuz;?>"><?= $userrow['country'];?></td>
                                                <td data-bs-toggle="modal" data-bs-target="#basicModal<?= $nuz;?>"><?= $userrow['email'];?></td>
                                                <td>
													<div class="d-flex">
														<a href="user?update=<?= $userrow['userid'];?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-edit"></i></a>
														<a href="?delete=<?= $userrow['userid'];?>" onclick="return confirm('Are you sure to Delete this Account? NOTE: This Action cannot be Undo!');" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
												</td>




<!-- Modal -->
                                    <div class="modal fade" id="basicModal<?= $nuz;?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Client: <b><?= ucwords($fullname);?> => @<?= $userrow['username'];?></b></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="font-size: 14px;">
												
												<center><img style="border-radius: 20px;" width="200" src="../doc/images/<?= $userrow['pics'];?>" alt="<?= ucwords($fullname);?>"></center>
												<hr />
											<p>User ID: <b>#<?php echo $userrow['userid'];?></b></p>
		<p>Account Name: <b><?php echo $fullname;?></b></p>												
		<?php if(!empty($userrow['phone'])){?><p>Phone Number: <b><?php echo $userrow['phone'];?></b></p><?php }?>												
		<p>Email: <b><?php echo $userrow['email'];?></b></p>	
		<p>Account Balance: <b><?= $sitecurrencysym;?><?php echo number_format($userrow['balance']);?></b> </p>	
		<p>Account Number: <b><?php echo $userrow['accountnumber'];?></b></p>	
		<p>Bank Name: <b><?php echo $userrow['bankname'];?></b></p>	
		<p>State & Country: <b><?php echo $userrow['state'];?>, <?php echo $userrow['country'];?></b></p>	
		<hr />
		<p>Savings: <b><?= $sitecurrencysym;?><?php echo number_format($userrow['balance']);?></b> </p>
		<p>Income: <b><?= $sitecurrencysym;?><?php echo number_format($userrow['income']);?></b> </p>
		<p>Expenses: <b><?= $sitecurrencysym;?><?php echo number_format($userrow['expenses']);?></b> </p>
		<?php if(!empty($userrow['lastlogin'])){?><p>Lastlogin: <?php echo ''.date('dS F, Y', strtotime($userrow['lastlogin']));?> at <?= date('h:i A', strtotime($userrow['lastlogin']));;?></p>	<?php }?>
		<?php if($userrow['logincounts']>0){?><p>Login Counts: <?= number_format($userrow['logincounts']);?></p><?php }?>	
		<?php if(!empty($userrow['lastloginbrowser'])){?><p>Last Login Browser: <?= $userrow['lastloginbrowser'];?></p><?php }?>	
		<?php if(!empty($userrow['lastloginip'])){?><p>Last Login IP: <?= $userrow['lastloginip'];?></p><?php }?>
												
												
												
												
												<a class="badge badge-success" style="width: 100%;" href="user?update=<?= $userrow['userid'];?>">Edit Client Info</a>
												</div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

									
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					</div>
				</div>
            </div>
        </div>
        
		<?php include('footer.php');?>