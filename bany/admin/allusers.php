<?php require_once('../data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Clients & Users - '.$sitename;
$thepage = 'All Clients & Users';
$pagecode = 'clientz';

include('header.php');


if($_SESSION['user']['userid'] !=='254546'){
 header('location: ./');   exit(0);
}


if(isset($_GET['delete'])){ if($clear=$mysqli->query("DELETE FROM users WHERE userid=".$_GET['delete'])){
   header('location: users');
    
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
						
						
						
						
						<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $thepage;?> (<?= number_format($allusers);?>)</h4>
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
										
        $query = "SELECT * FROM users ORDER by id DESC";
        $result = $mysqli->query($query);
        $c= 0;
        while ($userrow = $result->fetch_array()) {
            $c++;
		
		$fullname = $userrow['firstname'].' '.$userrow['lastname'];
		
		$isban = $userrow['ban'];
		
		if($userrow['status'] =='active'){
			$statz ='<span class="badge badge-success"><i class="fa fa-check-circle"></i> Active</span>';
		}elseif($userrow['status'] =='inactive'){
			$statz ='<span class="badge badge-danger"><i class="fa fa-minus-circle"></i> InActive</span>';
		}  
		
		
		$nuz = $nuz+1;
		?>
                                            <tr>
                                                <td><img data-bs-toggle="modal" data-bs-target="#basicModal<?= $nuz;?>" class="rounded-circle" width="35" height="35" style="object-fit: cover;" src="../doc/images/<?= $userrow['pics'];?>" alt="<?= ucwords($fullname);?>"></td>
                                                <td <?php if(!empty($isban)){?>style="color: red;" title="Banned Account"<?php }?>data-bs-toggle="modal" data-bs-target="#basicModal<?= $nuz;?>"><?= ucwords($fullname);?></td>
                                                <td data-bs-toggle="modal" <?php if(!empty($isban)){?>style="color: red;" title="Banned Account"<?php }?>data-bs-target="#basicModal<?= $nuz;?>"><b><?= $sitecurrencysym;?><?= number_format($userrow['balance']);?></b></td>
                                                <td data-bs-toggle="modal" <?php if(!empty($isban)){?>style="color: red;" title="Banned Account"<?php }?>data-bs-target="#basicModal<?= $nuz;?>"><?= ucwords($userrow['gender']);?></td>
                                                <td><?php if(!empty($isban)){?><span class="badge badge-danger"><i class="fa fa-ban"></i> BANNED</span><?php }else{echo $statz;}?></td>
                                                <td data-bs-toggle="modal" <?php if(!empty($isban)){?>style="color: red;" title="Banned Account"<?php }?>data-bs-target="#basicModal<?= $nuz;?>"><?= $userrow['country'];?></td>
                                                <td data-bs-toggle="modal" <?php if(!empty($isban)){?>style="color: red;" title="Banned Account"<?php }?>data-bs-target="#basicModal<?= $nuz;?>"><?= $userrow['email'];?></td>
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
                                                    <h5 class="modal-title"><?php if(!empty($isban)){?><span class="badge badge-danger"><i class="fa fa-ban"></i> BANNED</span><?php } ?> Client: <b><?= ucwords($fullname);?> => @<?= $userrow['username'];?></b></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="font-size: 14px;">
												
												<center><img style="border-radius: 20px;" width="200" src="../doc/images/<?= $userrow['pics'];?>" alt="<?= ucwords($fullname);?>"></center>
												<hr />
												<?php if(!empty($isban)){?><p>Status: <span style="color: red"><i class="fa fa-ban"></i> BANNED</span></p><?php } ?>
											<p>User ID: <b>#<?php echo $userrow['userid'];?></b></p>
		<p>Account Name: <b><?php echo $fullname;?></b></p>												
		<?php if(!empty($userrow['phone'])){?><p>Phone Number: <b><?php echo $userrow['phone'];?></b></p><?php }?>												
		<p>Username: <b><?php echo $userrow['username'];?></b></p>
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