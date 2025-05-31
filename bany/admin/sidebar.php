<div class="deznav">
            <div class="deznav-scroll">
				<!--<div class=" dropdown header-bx"> 
					<a class="nav-link header-profile2 position-relative" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
						<div class="header-content">
							<h2 class="font-w500"><?= $fullname;?></h2>
							<span class="font-w400"><?= $email;?></span>
						</div>
					</a> 
				</div>-->
				<ul class="metismenu" id="menu">
                    <li><a href="./">
							<i class="fa fa-home" title="tachometer"></i>
							<span class="nav-text">Dashboard</span>
						</a>                    </li>
                    <li><a href="./create-user">
							<i class="fa fa-user"></i>
							<span class="nav-text">Add New Client</span>
						</a>                    </li>
                    <li><a href="./users">
							<i class="fa fa-users"></i>
							<span class="nav-text">My Clients (<?= number_format($myclients);?>)</span>
						</a>
					</li>
					<li><a href="./load-account">
							<i class="fa fa-money"></i>
							<span class="nav-text">Load Account</span>
						</a>
					</li>
					<?php if($allpendingbalance>0){?><li><a href="./pendingbalance">
							<i class="fa fa-warning"></i>
							<span class="nav-text">Pending Bal (<?= number_format($allpendingbalance);?>)</span>
						</a>
					</li><?php }?>
					<li><a href="./debit-account">
							<i class="fa fa-minus-circle"></i>
							<span class="nav-text">Debit Account</span>
						</a>
					</li>
					<li><a href="./sendmail">
							<i class="fa fa-envelope"></i>
							<span class="nav-text">Send Mail</span>
						</a>
					</li>
					<li><a href="./transactions">
							<i class="fa fa-refresh"></i>
							<span class="nav-text">Transactions <?php if($_SESSION['user']['userid'] == 'khodex'){echo '('.number_format($transcount).')';}?></span>
						</a>
					</li>
						<?php if($allnotice>0){?><li><a href="./notice">
							<i class="fa fa-bell"></i>
							<span class="nav-text">Notice (<?= number_format($allnotice);?>)</span>
						</a>
					</li><?php }?>
					<li><a href="../logout" onclick="return confirm('Are you sure you want to logout?');">
							<i class="fa fa-power-off"></i>
							<span class="nav-text">Logout</span>
						</a>
					</li>
                </ul>
				<div class="copyright">
					<h6><?= $sitename;?> Admin Dashboard <span class="fs-14 font-w400">&copy; <?= date('Y');?> All Rights Reserved</span></h6>
					<p class="fs-12 mb-4">Made with <span class="heart"></span> by Khodex Adey</p>
				</div>
			</div>
        </div>