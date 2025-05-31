<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'My Profile #'.$_SESSION['user']['userid'].' - '.$sitename;
$thepage = 'My Profile';
$thepagecode = 'profile';

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

include('header.php'); include('app-header-back.php');?>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-3 text-center">
            <div class="avatar-section">
          
                    <img src="doc/images/<?= $pics;?>" style="object-fit: cover; max-width: 100%; width: 100px; height: 100px;" alt="avatar" class="imaged w100 rounded">
              
            </div>
        </div>

        <div class="listview-title mt-1">Theme</div>
        <ul class="listview image-listview text inset no-line">
            <li>
                <div class="item">
                    <div class="in">
                        <div>
                            Dark Mode
                        </div>
                        <div class="form-check form-switch  ms-2">
                            <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                            <label class="form-check-label" for="darkmodeSwitch"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
		
<div class="listview-title mt-1">Profile Details</div>
        <ul class="listview image-listview text inset">
		
<li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Username:</b> <?= $username;?></div>
</li>

 <li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Email:</b> <?= $email;?></div>
</li>

 <li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Fullname:</b> <?= ucwords($fullname);?></div>
</li>
<li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Gender:</b> <?= ucwords($gender);?></div>
</li>

 <li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Checking Account Number:</b> <?= $accountnumber;?></div>
</li>
<li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Savings Account Number:</b> <?= $accountnumber2;?></div>
</li>

<?php if(!empty($address)){?><li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Address:</b> <?= $address;?></div>
</li><?php }?>
<li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Country:</b> <?= $country;?></div>
</li>
<?php if(!empty($state)){?><li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">State:</b> <?= $state;?></div>
</li><?php }?>

<?php if(!empty($city)){?><li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">City:</b> <?= $city;?></div>
</li><?php }?>

<li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Account Status:</b> <?= $mystatus;?></div>
</li>
<?php if(!empty($phone)){?>
<li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Phone Number:</b> <?= $phone;?></div>
</li><?php }?>
<li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Account Balance:</b> <?= $sitecurrencysym;?><?= number_format($balance);?></div>
</li>
<li>
<div class="in">
<div class="item"><b style="margin-right: 10px;">Account ID:</b> #<?= $_SESSION['user']['userid'];?></div>
</li>


        </ul>
		
		
		
		<div class="col-lg-12" style="padding: 0 20px 0 20px;"><a <?php if($edit_profile=='yes'){?>href="edit-profile"<?php }else{?>data-bs-toggle="modal" data-bs-target="#Denied"<?php }?> class="mt-2 btn btn-info btn-sm btn-block">Edit Your Profile</a></div>

        <div class="listview-title mt-1">Security</div>
        <ul class="listview image-listview text mb-2 inset">
            <li>
                <a <?php if($edit_profile=='yes'){?>href="change-password"<?php }else{?>data-bs-toggle="modal" data-bs-target="#Denied"<?php }?> class="item">
                    <div class="in">
                        <div>Update Password</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="logout" onclick="return confirm('Are you sure you want to logout?');" class="item">
                    <div class="in">
                        <div>Log out all devices</div>
                    </div>
                </a>
            </li>
        </ul>


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


 <?php include('bottom-menu.php'); include('allJS.php');?>