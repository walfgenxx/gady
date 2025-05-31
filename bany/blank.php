<?php require_once('data/settings.php');
$title = 'Blank - '.$sitename;
$thepage = 'blank';

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
                Inset wide block with title.
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


     <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>