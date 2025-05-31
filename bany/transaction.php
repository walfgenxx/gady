<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Transaction Details - #'.$_GET['id'].' - '.$sitename;
$pdfTitle = 'Transaction Receipt - #'.$_GET['id'];
$thepage = 'transaction';
$thepagecode = 'transaction';

include('header.php');

if(!isset($_SESSION['user']['userid'])){
	header('location: ./login');
}

if($load_account=='yes'){
if(isset($_GET['delete'])){ if($clear=$mysqli->query("DELETE FROM transactions WHERE transactionid=".$_GET['delete'])){
   header('location: transactions');
    
}}
}


$result2 = $mysqli->query("SELECT * FROM transactions WHERE transactionid=".$_GET['id']);
    $transrow = $result2->fetch_array();
	
		
		$trans_name = $transrow['name'];
		$trans_userid = $transrow['userid'];
		$transactionid = $transrow['transactionid'];
		$trans_amount = $transrow['amount'];
		$trans_method = $transrow['method'];
		$trans_type = $transrow['type'];
		$trans_status = $transrow['status'];
		$trans_action = $transrow['action'];
		$trans_ip = $transrow['ip'];
		$trans_browser = $transrow['browser'];
		$transaction_serial = $transrow['transaction_serial'];
		$trans_description = $transrow['description'];
		$trans_bankname = $transrow['bankname'];
		$trans_category = $transrow['category'];
		$trans_previous_date = $transrow['previous_date'];
		$trans_updated = $transrow['updated'];
		$trans_date = $transrow['date'];
		
		
		
		$result3 = $mysqli->query("SELECT * FROM users WHERE userid=".$transrow['userid']);
    $row2 = $result3->fetch_array();
	
	$trans_client=$row2['firstname'].' '.$row2['lastname'];
	
		
		
		if($transrow['status'] =='success'){
			$statz ='<span class="badge badge-success"><i class="fa fa-check-circle"></i> Success</span>';
		}elseif($transrow['status'] =='pending'){
			$statz ='<span class="badge badge-warning"><i class="fa fa-minus-circle"></i> Pending</span>';
		}elseif($transrow['status'] =='declined'){
			$statz ='<span class="badge badge-danger"><i class="fa fa-times-circle"></i> Declined</span>';
		}  
		
		if($transrow['status'] =='success'){
			$statz2 ='<span style="text-transform: uppercase; font-weight: bold; color: #3c3;">Success <i class="fa fa-check-circle"></i></span>';
		}elseif($transrow['status'] =='pending'){
			$statz2 ='<span style="text-transform: uppercase; font-weight: bold; color: orange;">Pending <i class="fa fa-minus-circle"></i></span>';
		}elseif($transrow['status'] =='declined'){
			$statz2 ='<span style="text-transform: uppercase; font-weight: bold; color: red;">Declined <i class="fa fa-times-circle"></i></span>';
		} 
		


$erro=""; $imgerr1=""; $errok=""; $msize_err=""; $messagetitle_err=""; $messagecont_err=""; $post_err=""; $post1_err=""; $post2_err=""; $post3_err=""; $post4_err="";$pa_err=""; $cp_exist=""; $pp_err=""; $ft_err=""; $fj_err=""; $fz_err=""; $fz_err2=""; $pc_err="";$pn_err="";$aa_err=""; $ad_err="";$a_exist=""; 					 
	
$therow = $transrow['status'];	
	
	if($trans_type=='debit'){
			$payment_action = 'Sent';
			$color_class='danger';
			$toz = 'To';
			$arr = 'up';
		}elseif($trans_type=='transfer'){
			$payment_action = 'Sent';
			$color_class='danger';
			$toz = 'To';
			$arr = 'up';
		}elseif($trans_type=='withdrawal'){
			$payment_action = 'Withdrawal';
			$color_class='danger';
			$toz = 'To';
			$arr = 'up';
		}else{
			$arr ='down';
			$toz = 'From';
			$payment_action = 'Received';
			$color_class='success';
		}
		
		
		
		
		
		
		
		
		
		
		
		



if (isset($_POST['update_transaction'])) {
    $con = new khodexclass($mysqli);

$thetransid = $_GET['update'];	
	
    if ($con->update_transaction($thetransid,$_POST['amount'],$_POST['type'],$_POST['status'],$_POST['name'],$_POST['bankname'],$_POST['date'],$_POST['ip'],$_POST['browser'],$_POST['description'])) {$erro="good";
    } else {
      $erro="bad";
    }
}


include('app-header-back.php');?>
        <div class="right">
            <?php if($load_account=='yes'){?><a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#DialogBasic">
                <ion-icon name="trash-outline"></ion-icon>
            </a><?php }?>
        </div>
    </div>
    <!-- * App Header -->
<?php if($load_account=='yes'){?>
    <!-- Dialog Basic -->
    <div class="modal fade dialogbox" id="DialogBasic" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete</h5>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this transaction?
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
                        <a href="?delete=<?= $_GET['id']?>" class="btn btn-text-primary">DELETE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Dialog Basic --><?php }?>

    <!-- App Capsule -->
    <div id="appCapsule" class="full-height">
        

        <div class="section mt-2 mb-2">


            <div class="listed-detail mt-3">
                
                <?php if($trans_type=='debit' && $therow=='success'){?>
                <div align="center"><img src="images/check.png" style="width: 80px;"></div>
                <h3 class="text-center mt-2">Payment <?= $payment_action;?></h3>
                <?php }elseif($trans_type !=='debit' && $therow=='success'){?>
                <div align="center"><img src="images/check.png" style="width: 80px;"></div>
                <h3 class="text-center mt-2">Payment <?= $payment_action;?></h3>
                <?php }elseif($trans_status=='success'){?>
				<div class="icon-wrapper">
                    <div class="iconbox" style="background: #3c3;">
                        <ion-icon name="arrow-<?= $arr;?>-outline"></ion-icon>
                    </div>
                </div>
                <h3 class="text-center mt-2">Payment <?= $payment_action;?></h3>
				<?php }elseif($trans_status=='pending'){?>
				<div class="icon-wrapper">
                    <div class="iconbox" style="background: orange;">
                        <ion-icon name="arrow-<?= $arr;?>-outline"></ion-icon>
                    </div>
                </div>
                <h3 class="text-center mt-2">Pending Payment</h3>
				<?php }elseif($trans_status=='declined'){?>
				<div class="icon-wrapper">
                    <div class="iconbox" style="background: red;">
                        <ion-icon name="arrow-<?= $arr;?>-outline"></ion-icon>
                    </div>
                </div>
                <h3 class="text-center mt-2">Payment Declined</h3>
				<?php }?>
            </div>

            <ul class="listview flush transparent simple-listview no-space mt-3">
			<li>
                    <strong>Amount</strong>
                    <h3 class="m-0"><?= $sitecurrencysym.''.number_format($trans_amount);?></h3>
                </li>
                <li>
                    <strong>Status</strong>
                    <?= $statz2;?>
                </li>
              
                <li>
                    <strong><?= $toz;?></strong>
                    <span><?= ucwords($trans_name);?></span>
                </li>
                <?php if(!empty($trans_method)){?><li>
                    <strong>Method</strong>
                    <span><?= ucwords($trans_method);?></span>
                </li><?php }?>
                <li>
                    <strong>Bank Name</strong>
                    <span><?= ucwords($trans_bankname);?></span>
                </li>
                  <?php if($trans_type=='debit' || $trans_type=='transfer'){?><li>
                    <strong>From</strong>
                    <span><?= ucwords($fullname);?></span>
                </li><?php }?>
				<li>
                    <strong>Date</strong>
                    <span><?php $addHours = new DateTime($trans_date);
$addHours->modify('-6 hours');
echo $addHours->format('M d, Y');?></span>
                </li>
                <li>
                    <strong>Description</strong>
                    <span><?= $trans_description;?></span>
                </li>
                <li>
                    <strong>Reference ID</strong>
                    <span><?= $transaction_serial;?></span>
                </li>
				<?php if(!empty($trans_ip)){?>
                <li>
                    <strong>IP Address</strong>
                    <span><?= $trans_ip;?></span>
                </li><?php }?>
				<?php if(!empty($trans_browser)){?>
                <li>
                    <strong>Browser</strong>
                    <span style="margin-left: 15px; text-align: right;" align="right"><?= $trans_browser;?></span>
                </li><?php }?>
            </ul>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
  <hr />
<div align="center"><button class="btn btn-success" onclick="generatePDF()" style="background: <?= $sitecolor;?>;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 5px;" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
  <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
  <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
</svg> Download Receipt</button></div>
<hr />



<div style="color: #1a1a1a; font-size: 10px; text-align: center;">Copyright &copy; <?= $sitebankname.'<span style="font-family: normal; font-size: 8px;">®</span> - Online Banking';?>, <i class="fa fa-lock" style="color: #3c3;"></i> Secured by <?= $sitebankname;?><span style="font-family: normal; font-size: 8px;">®</span></div>


<script type="text/javascript">
  function generatePDF() {
        
        // Choose the element id which you want to export.
        var element = document.getElementById('appCapsule');
        element.style.width = '700px';
        element.style.height = '900px';
        var opt = {
            margin:       0.5,
            filename:     '<?= $pdfTitle;?>.pdf',
            image:        { type: 'jpeg', quality: 1 },
            html2canvas:  { scale: 1 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait',precision: '12' }
          };
        
        // choose the element and pass it to html2pdf() function and call the save() on it to save as pdf.
        html2pdf().set(opt).from(element).save();
      }
</script>
        </div>

    </div>
    
    
    <!-- * App Capsule -->


     <?php include('bottom-menu.php'); include('app-sidebar.php'); include('allJS.php');?>