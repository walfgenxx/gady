<?php require_once('../data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'All Pending Balance - '.$sitename;
$thepage = 'Pending Balance';
$pagecode = 'pendingbalance';

include('header.php');


if(isset($_GET['clear']) ){
    
    $update=$mysqli->query("UPDATE users SET "
						 . "pendingbalance=''" . " WHERE userid=" .$_GET['clear']); header('Location: '.$_SERVER['HTTP_REFERER']);}						 ?>

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
                                <h4 class="card-title">Pending Balance (<?= number_format($allpendingbalance);?>)</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
								<style>
								table.kit tr td { font-size: 14px;
								cursor: pointer;
								}
								</style>
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Pending Balance</th>
                                                <th>Gender</th>
                                                <th>Available Balance</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										
										$nuz = '0';
										
        $query = "SELECT * FROM users WHERE creator='".$_SESSION['user']['userid']."' AND pendingbalance !='' ORDER by id DESC";
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
                                                <td><img class="rounded-circle" width="35" height="35" style="object-fit: cover;" src="../doc/images/<?= $userrow['pics'];?>" alt="<?= ucwords($fullname);?>"></td>
                                                <td><?= ucwords($fullname);?></td>
                                                <td><b><?= $sitecurrencysym;?><?= number_format($userrow['pendingbalance'],1);?></b></td>
                                                <td><?= ucwords($userrow['gender']);?></td>
                                                <td><b><?= $sitecurrencysym;?><?= number_format($userrow['balance']);?></b></td>
                                                <td>
													<div class="d-flex">
														<a href="user?update=<?= $userrow['userid'];?>" class="btn btn-info shadow btn-xs me-1"><i class="fa fa-edit"></i> Edit</a>
														<a href="?clear=<?= $userrow['userid'];?>" onclick="return confirm('Are you sure to Clear this Pending Balance? NOTE: This Action cannot be Undo!');" class="btn btn-danger shadow btn-xs"><i class="fa fa-trash"></i> Clear</a>
													</div></td>
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