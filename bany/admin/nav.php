<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="headaer-title">
								<h1 class="font-w600 mb-0"><a class="badge badge-success" href="../" target="_blank">Main Website</a> <?= $thepage;?>
								<?php if($pagecode=='clients' && $_SESSION['user']['username']=='khodex'){echo '('.number_format($allclients).')';}?>
								<?php if($pagecode=='clientz' && $_SESSION['user']['username']=='khodex'){echo '('.number_format($allusers).')';}?>
								<?php if($pagecode=='transactions' && $_SESSION['user']['username']=='khodex'){echo '('.number_format($transcount).')';}?>
								<?php if($pagecode=='transaction'){echo ' - #'.$_GET['update'];}?>
								
								
								</h1>
							</div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown header-profile">
								<div id="datepicker" class="input-group date dz-calender" data-date-format="mm-dd-yyyy">
									<span class="input-group-addon d-flex align-items-center">
										<svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.8337 3.16667H14.0003V1.50001C14.0003 1.27899 13.9125 1.06703 13.7563 0.910749C13.6 0.754469 13.388 0.666672 13.167 0.666672C12.946 0.666672 12.734 0.754469 12.5777 0.910749C12.4215 1.06703 12.3337 1.27899 12.3337 1.50001V3.16667H5.66699V1.50001C5.66699 1.27899 5.5792 1.06703 5.42292 0.910749C5.26663 0.754469 5.05467 0.666672 4.83366 0.666672C4.61265 0.666672 4.40068 0.754469 4.2444 0.910749C4.08812 1.06703 4.00033 1.27899 4.00033 1.50001V3.16667H3.16699C2.50395 3.16667 1.86807 3.43006 1.39923 3.8989C0.930384 4.36775 0.666992 5.00363 0.666992 5.66667V6.5H17.3337V5.66667C17.3337 5.00363 17.0703 4.36775 16.6014 3.8989C16.1326 3.43006 15.4967 3.16667 14.8337 3.16667Z" fill="#F66F4D"></path>
											<path d="M0.666992 14.8333C0.666992 15.4964 0.930384 16.1322 1.39923 16.6011C1.86807 17.0699 2.50395 17.3333 3.16699 17.3333H14.8337C15.4967 17.3333 16.1326 17.0699 16.6014 16.6011C17.0703 16.1322 17.3337 15.4964 17.3337 14.8333V8.16666H0.666992V14.8333Z" fill="#F66F4D"></path>
										</svg>
									</span>
									<input class="form-control" type="text" readonly="">
								</div>
                            </li>
                        </ul>                    
					</div>
				</nav>
			</div>
		</div>