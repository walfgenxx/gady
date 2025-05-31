<!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- profile box -->
                    <div class="profileBox pt-2 pb-2">
                        <div class="image-wrapper">
                            <img src="doc/images/<?= $pics;?>" alt="<?= $fullname;?>" class="imaged  w36">
                        </div>
                        <div class="in">
                            <strong><?= $fullname;?></strong>
                            <?php if(!empty($role)){?>
                 <div title="Admin Account" class="text-success"><a href="../admin/" target="_blank">#<?= $accountnumber;?></a></div>           
                            <?php }else{?>
                     <div class="text-muted">#<?= $accountnumber;?></div>       
                            <?php }?>
                        </div>
                        <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                            <ion-icon name="close-outline"></ion-icon>
                        </a>
                    </div>
                    <!-- * profile box -->
                    <!-- balance -->
                    <div class="sidebar-balance">
                        <div class="listview-title">Checking Balance</div>
                        <div class="in">
                            <h1 class="amount"><?= $sitecurrencysym;?><?= number_format($balance);?></h1>
                        </div>
                    </div>
                    <!-- * balance -->

                    <!-- menu -->
                    <div class="listview-title mt-1">Menu</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <li>
                            <a href="cards" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="card-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Cards
                                    <span class="badge badge-primary"><?= number_format($cardscount);?></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="bills" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="document-text-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Bills
									<span class="badge badge-primary"><?= number_format($billscount);?></span>
                                </div>
                            </a>
                        </li>
                        <!--<li>
                            <a href="crypto-transactions" class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fa fa-btc"></i>
                                </div>
                                <div class="in">
                                    Crypto Transactions
									<span class="badge badge-primary"><?php echo mt_rand(9,100);?></span>
                                </div>
                            </a>
                        </li>-->
                        <li>
                            <a href="goals" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="apps-outline"></ion-icon>
                                </div>
                                <div class="in">
                                   Goals
								   <span class="badge badge-primary"><?= number_format($goalscount);?></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="profile" class="item">
                                <div class="icon-box bg-primary">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg>
                                </div>
                                <div class="in">
                                    My Profile
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- * menu -->

                    <!-- others -->
                    <div class="listview-title mt-1">Others</div>
                    <ul class="listview flush transparent no-line image-listview">
                        <!--<?php if(!empty($role)){?><li>
                            <a href="admin/" target="_blank" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="star-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Admin Panel
                                </div>
                            </a>
                        </li><?php }?>-->
                         <li>
                            <a href="tools" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="settings-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Settings
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="logout" onclick="return confirm('Are you sure you want to logout?');" class="item">
                                <div class="icon-box bg-primary">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </div>
                                <div class="in">
                                    Log out
                                </div>
                            </a>
                        </li>


                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- * App Sidebar -->