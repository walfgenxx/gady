<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");
$title = 'Tools - '.$sitename;
$thepage = 'tools';
$thepagecode = 'tools';

include('header.php');

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

include('app-header-back.php');?>
        <div class="right">
            
        </div>
    </div>
    <!-- * App Header -->

    <div id="appCapsule">
<div class="section inset mt-2">
<div class="wide-block pt-2 pb-2">
 
 
 
 
 
 
<?php if($load_account=='yes'){?> <div class="row">
                <div class="col-6">
                    <div align="center"><a <?php if($load_account=='yes'){?>href="load"<?php }else{?>data-bs-toggle="modal" data-bs-target="#Denied"<?php }?>><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="<?= $sitecolor;?>" class="bi bi-send-plus-fill" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z"/>
</svg><br /><b>Load Funds</b></a></div>
                </div>
                <div class="col-6">
                    <div align="center"><a <?php if($debit_account=='yes'){?>href="debit"<?php }else{?>data-bs-toggle="modal" data-bs-target="#Denied"<?php }?>><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="red" class="bi bi-send-dash-fill" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-5.5 0a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Z"/>
</svg><br />
<b>Deduct Funds</b></a></div>
                </div>
            </div><?php }?>
 
 
 <hr/>
 <div class="row mt-4">
                <?php if($debit_account=='yes'){?><div class="col-6">
                    <div align="center"><a href="editable-transactions"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="red" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
</svg><br /><b>Edit Transactions</b></a></div>
                </div><?php }?>
                <div class="col-<?php if($edit_profile=='yes'){echo '6';}else{echo '12';}?>">
                    <div align="center"><a <?php if($edit_profile=='yes'){?>href="edit-profile"<?php }else{?>data-bs-toggle="modal" data-bs-target="#Denied"<?php }?>><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="<?= $sitecolor;?>" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>
<br />
<b>Edit Profile</b></a>
</div>
                </div>
            </div>
 
 
 
 
 
 
 
            </div>
        </div>

    </div>
    <!-- * App Capsule -->
	
	
	
	<!-- Dialog Basic -->
    <div class="modal fade dialogbox" id="Denied" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Access Denied</h5>
                </div>
                <div class="modal-body">
                    Contact admins to enable this feature?
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Dialog Basic -->


     <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>