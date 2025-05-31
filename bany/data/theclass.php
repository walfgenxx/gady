<?php use PHPMailer\PHPMailer\PHPMailer; use PHPMailer\PHPMailer\Exception;
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\SMTP;
    
    
ob_start();

//error_reporting(0);

include('config.php');
include_once('settings.php');
date_default_timezone_set("$default_timezone");
require_once('public_function.php');

function esc(String $value)
	{	
		// bring the global db connect object into function
		global $mysqli;

		$val = trim($value); // remove empty space sorrounding string
		$val = mysqli_real_escape_string($mysqli, $value);

		return $val;
	}
/*
 *  PHP FUNCTION CLASSES BY ANONYMOUS KHODEX
 */

 $rande=date("Y/m/d").mt_rand(100, 999);
class khodexclass {
	private $mysqli = null;
    private $error = null;
	function __construct($mysqli){
		  $this->mysqli = $mysqli;

}



 public function withdraw_money($amount,$balance,$pendingwithdrawal,$account,$fee,$BrowserInfo,$IpInfo,$withban,$sitename,$sitedomain) { $err="";
			  
			  
			  $amountz = number_format($amount);
		$balancez = number_format($balance);
		$amountfe = $amount+$fee+100;
		$amountfee = $amount+$fee;
		$amountfeez = number_format($amountfee);
		
		


		if ($amountfee<100){$err="<li>Withdraw Limit is $100.</li>"; $GLOBALS['msize_err']=$err;}
					if ($amountfe>$balance){$err="<li>Your Balance is Not Up to $$amountfeez, Your Balance is $$balancez.</li>"; $GLOBALS['msize_err']=$err;}
					if (empty($account)){$err="<li>Choose Account to Withdraw to, Or Add Account!</li>"; $GLOBALS['msize_err']=$err;}
					
					if (!empty($pendingwithdrawal)){$err="<li>You have a Pending Withdrawal on Your Account!</li>"; $GLOBALS['msize_err']=$err;}
					if (!empty($withban)){$err="<li>You have a Withdrawal Ban on Your Account! Contact our Support Team to Fix this!</li>"; $GLOBALS['msize_err']=$err;}
					
					
					if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Your Deposit Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['msize_err']=$err;}
					
					
					
					
				

			 $randum= mt_rand(1000, 9999);
			 $randum2= mt_rand(100000, 999999);
			 
		$transid = mt_rand(0000000000000000, 9999999999999999);
		$transcode = mt_rand(000000, 999999);
	 

if($err==""){ 

$amount = preg_replace("/[^0-9]/", "", $amount);
			  
			  $newbal = 	$balance-$amount;
$otp = mt_rand(1000, 9999);
$lastcode = mt_rand(000000, 999999);
$lastpercent = '30';
			  
			
			  $_SESSION['transid']=$transid;
			  $_SESSION['transcode']=$transcode; 
			  $_SESSION['fee']=$fee;
			  $_SESSION['amount']=$amount;
			  $_SESSION['userid']=$userid;
			  $_SESSION['view'] ='1';
			  $_SESSION['views'] ='1';
			  $_SESSION['tr'] ='0';
			  $_SESSION['trial'] ='0';
			  $_SESSION['trialz'] ='0';
			  $_SESSION['account']=$account;
			  $_SESSION['email']=$_SESSION['user']['email'];
			  $_SESSION['otp']=$otp;
			  $otpz = $otp;
			  $_SESSION['percent']='30';
			  $_SESSION['timestamp'] = time();
			  
			  $res = $this->mysqli->query("SELECT * FROM bank_accounts WHERE accountid='".$account."'");
						   $rowz = $res->fetch_array();
			
    
		
			$_SESSION['bankname']=$rowz['bankname'];
			$_SESSION['number']=$rowz['number'];

$dhat = time();
$am = '$'.number_format($_SESSION['amount']);
$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$newDateTime = date('h:i A', strtotime($dhat));

$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$thetime = $newDateTime;

$userbro = ucwords($_SESSION['user']['username']);
$email = $_SESSION['email'];
$datez = date("Y");
$to = $email;
$subject = "OTP: ".$sitename." Withdrawal OTP Code";
$headers = "From: ".$sitename." Withdrawal <support@".$sitedomain.">\r\n";
$headers .= "Reply-To: payment@".$sitedomain."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$email_message = <<<EOD

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your Withdrawal OTP Code is $otpz! Get ready to dive into your new account.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$sitename</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $userbro, You Processed a Withdrawal @ $thetime On $thedate</h3></td> 
                     </tr> 
                    
                    
                    
                    
                    <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">A Withdrawal of $am was Processed on your Account, Below is the OTP Code and device info!<br /><br /><span style="color: red; font-weight: bold; font-size: 30px; display: block; text-align: center;">Your OTP Code is $otpz</span><br />
                      <b>NOTE:</b> If you dont perform this transaction with this device at this time, Kindly Contact us to secure your account or ignore the OTP Code, It Expires in 15 Minutes!
                     </p></td> 
                     </tr> 
                     
                     
                     
                     
                     
                     
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">DEVICE DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Browser:</b> $BrowserInfo<br /><b>IP Address:</b> $IpInfo<br /><b>Date:</b> $thedate<br /><b>Time:</b> $thetime
					  </p></td> 
                     </tr>
                     
					 
					 <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:15px;padding-top:30px"><span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="https://$sitedomain/dashboard" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Secure account</a></span></td> 
                     </tr>
					 
					 
					 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't create an account using this email address, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $sitename</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>

EOD;

mail($to,$subject,$email_message,$headers);	

            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
///// SEND Money



public function sendmoney($user,$sender,$amount,$senderbank,$description) { $err="";

$sender = esc(trim(strip_tags($sender)));
$amount = esc(trim(strip_tags($amount)));
$senderbank = esc(trim(strip_tags($senderbank)));
$description = esc(trim(strip_tags($description)));

$checz = $this->mysqli->query("SELECT * FROM users WHERE userid = '".$user."'");
		$row = 
     	$checz->fetch_array();
		
		$balzz = $row['balance'];
		$uzerid = $row['userid'];
		$username = $row['username'];
		$fullname = $row['firstname'].' '.$row['lastname'];
		$account_num = $row['accountnumber'];
		$lastip = $row['lastloginip'];
		$lastbrowser = $row['lastloginbrowser'];
		
		
 
		 


					if (empty($sender)){$err="<li>Provide the sender's name</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($description)){
					    
					    $description = 'account funding';
					}
					if (empty($amount)){$err="<li>Choose User's Account to Load</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($senderbank)){$err="<li>Provide the sender's bank name!</li>";  $GLOBALS['pn_err']=$err;}
					if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Input the amount to load</li>";  $GLOBALS['pn_err']=$err;}
					
					if(!empty($amount)){
						
						if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Invalid Amount Type</li>";  $GLOBALS['pn_err']=$err;}
						
					}else{$err="<li>Amount Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}
					
					
							 
					 
if(empty($err)){
$typez = 'credit';
$newmoney = $amount+$balzz;
	
$tranzid = mt_rand(000000, 999999);
$transid = mt_rand(0000000000000000, 9999999999999999);
$transactionid = mt_rand(0000000000, 9999999999);
		$transcode = mt_rand(000000, 999999);
		
		$length = 1;    
$transaction_a = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

$transaction_serial = $transaction_a.''.mt_rand(1000000000000000,9999999999999999)."".mt_rand(1000000000000000,9999999999999999);
	
if($this->mysqli->query("UPDATE users  SET "
                ."balance='".$newmoney."'"

				 . " WHERE userid=" .$user))
	


			$statz = 'success';	
			$via = 'Account';
			$fee = '0';
			$action = 'deposit';
			$_SESSION['fullname_x'] = $fullname;
			 
 
if($this->mysqli->query("INSERT INTO transactions(userid, transactionid, amount, type, status, action, name, ip, browser, transaction_serial, description, bankname, category) VALUES("
               . "'".$user."',"
                . "'".$transactionid."',"
                . "'".$amount."',"
                . "'".$typez."',"
                . "'".$statz."',"
                . "'".$action."',"
                . "'".$sender."',"
                . "'".$lastip."',"
                . "'".$lastbrowser."',"
                . "'".$transaction_serial."',"
                . "'".$description."',"
                . "'".$senderbank."',"
                . "'".$via."'"
 . ")")) {
            return true;
			  }	
		
}

        
        $this->error = $this->mysqli->error;
        return false;
    }	
	



public function load_aza_user($load_account,$user,$sender,$amount,$senderbank,$description,$BrowserInfo,$IpInfo) { $err="";

$sender = esc(trim(strip_tags($sender)));
$amount = esc(trim(strip_tags($amount)));
$senderbank = esc(trim(strip_tags($senderbank)));
$description = esc(trim(strip_tags($description)));

$checz = $this->mysqli->query("SELECT * FROM users WHERE userid = '".$user."'");
		$row = 
     	$checz->fetch_array();
		
		$balzz = $row['balance'];
		$uzerid = $row['userid'];
		$username = $row['username'];
		$fullname = $row['firstname'].' '.$row['lastname'];
		$account_num = $row['accountnumber'];
		$lastip = $IpInfo;
		$lastbrowser = $BrowserInfo;
		
		
 
		 


					if (empty($sender)){$err="<li>Provide the sender's name</li>";  $GLOBALS['pn_err']=$err;}
					if ($load_account !=='yes'){$err="<li>Access denied, Contact admin to enable this feature</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($description)){$err="<li>A Short Description is required</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($amount)){$err="<li>Choose User's Account to Load</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($senderbank)){$err="<li>Provide the sender's bank name!</li>";  $GLOBALS['pn_err']=$err;}
					if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Input the amount to load</li>";  $GLOBALS['pn_err']=$err;}
					
					if(!empty($amount)){
						
						if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Invalid Amount Type</li>";  $GLOBALS['pn_err']=$err;}
						
					}else{$err="<li>Amount Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}
					
					
							 
					 
if(empty($err)){
$typez = 'credit';
$newmoney = $amount+$balzz;
	
$tranzid = mt_rand(000000, 999999);
$transid = mt_rand(0000000000000000, 9999999999999999);
$transactionid = mt_rand(0000000000, 9999999999);
		$transcode = mt_rand(000000, 999999);
		
		$length = 1;    
$transaction_a = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

$transaction_serial = $transaction_a.''.mt_rand(1000000000000000,9999999999999999)."".mt_rand(1000000000000000,9999999999999999);
	
if($this->mysqli->query("UPDATE users  SET "
                ."balance='".$newmoney."'"

				 . " WHERE userid=" .$user))
	


			$statz = 'success';	
			$via = 'Account';
			$fee = '0';
			$action = 'deposit';
			 
 
if($this->mysqli->query("INSERT INTO transactions(userid, transactionid, amount, type, status, action, name, ip, browser, transaction_serial, description, bankname, category) VALUES("
               . "'".$user."',"
                . "'".$transactionid."',"
                . "'".$amount."',"
                . "'".$typez."',"
                . "'".$statz."',"
                . "'".$action."',"
                . "'".$sender."',"
                . "'".$lastip."',"
                . "'".$lastbrowser."',"
                . "'".$transaction_serial."',"
                . "'".$description."',"
                . "'".$senderbank."',"
                . "'".$via."'"
 . ")")) {
            return true;
			  }	
		
}

        
        $this->error = $this->mysqli->error;
        return false;
    }	
	
public function deduct_money($user,$sender,$amount,$senderbank,$description) { $err="";

$sender = esc(trim(strip_tags($sender)));
$amount = esc(trim(strip_tags($amount)));
$senderbank = esc(trim(strip_tags($senderbank)));
$description = esc(trim(strip_tags($description)));

$checz = $this->mysqli->query("SELECT * FROM users WHERE userid = '".$user."'");
		$row = 
     	$checz->fetch_array();
		
		$balzz = $row['balance'];
		$uzerid = $row['userid'];
		$username = $row['username'];
		$fullname = $row['firstname'].' '.$row['lastname'];
		$account_num = $row['accountnumber'];
		$lastip = $row['lastloginip'];
		$lastbrowser = $row['lastloginbrowser'];
		
		
 
		 


					if (empty($sender)){$err="<li>Provide a Transaction name</li>";  $GLOBALS['pn_err']=$err;}
					if ($amount>$balzz){$err="<li>This user doesnt have up to this amount</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($description)){
					    
					    $description = 'account debit';
					}
					if (empty($amount)){$err="<li>Choose User's Account to Debit</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($senderbank)){$err="<li>Provide the Transaction bank name!</li>";  $GLOBALS['pn_err']=$err;}
					if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Input the amount to Deduct</li>";  $GLOBALS['pn_err']=$err;}
					
					if(!empty($amount)){
						
						if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Invalid Amount Type</li>";  $GLOBALS['pn_err']=$err;}
						
					}else{$err="<li>Amount Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}
					
					
							 
					 
if(empty($err)){
$typez = 'debit';
$newbalance = $balzz-$amount;
$_SESSION['fullname_xx'] = $fullname;
	
$tranzid = mt_rand(000000, 999999);
$transid = mt_rand(0000000000000000, 9999999999999999);
$transactionid = mt_rand(0000000000, 9999999999);
		$transcode = mt_rand(000000, 999999);
		
		$length = 1;    
$transaction_a = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

$transaction_serial = $transaction_a.''.mt_rand(1000000000000000,9999999999999999)."".mt_rand(1000000000000000,9999999999999999);
	
if($this->mysqli->query("UPDATE users  SET "
                ."balance='".$newbalance."'"

				 . " WHERE userid=" .$user))
	


			$statz = 'success';	
			$via = 'Account';
			$fee = '0';
			$action = 'debit';
			 
 
if($this->mysqli->query("INSERT INTO transactions(userid, transactionid, amount, type, status, action, name, ip, browser, transaction_serial, description, bankname, category) VALUES("
               . "'".$user."',"
                . "'".$transactionid."',"
                . "'".$amount."',"
                . "'".$typez."',"
                . "'".$statz."',"
                . "'".$action."',"
                . "'".$sender."',"
                . "'".$lastip."',"
                . "'".$lastbrowser."',"
                . "'".$transaction_serial."',"
                . "'".$description."',"
                . "'".$senderbank."',"
                . "'".$via."'"
 . ")")) {
            return true;
			  }	
		
}

        
        $this->error = $this->mysqli->error;
        return false;
    }	
	
public function deduct_money_user($debit_account,$user,$sender,$amount,$senderbank,$description,$BrowserInfo,$IpInfo) { $err="";

$sender = esc(trim(strip_tags($sender)));
$amount = esc(trim(strip_tags($amount)));
$senderbank = esc(trim(strip_tags($senderbank)));
$description = esc(trim(strip_tags($description)));

$checz = $this->mysqli->query("SELECT * FROM users WHERE userid = '".$user."'");
		$row = 
     	$checz->fetch_array();
		
		$balzz = $row['balance'];
		$uzerid = $row['userid'];
		$username = $row['username'];
		$fullname = $row['firstname'].' '.$row['lastname'];
		$account_num = $row['accountnumber'];
		$lastip = $IpInfo;
		$lastbrowser = $BrowserInfo;
		
		
 
		 


					if (empty($sender)){$err="<li>Provide a Transaction name</li>";  $GLOBALS['pn_err']=$err;}
					if ($debit_account!=='yes'){$err="<li>Action denied, contact admins to enable this!</li>";  $GLOBALS['pn_err']=$err;}
					if ($amount>$balzz){$err="<li>This user doesnt have up to this amount</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($description)){$err="<li>A Short Description is required</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($amount)){$err="<li>Input amount to Debit</li>";  $GLOBALS['pn_err']=$err;}
					if (empty($senderbank)){$err="<li>Provide the Transaction bank name!</li>";  $GLOBALS['pn_err']=$err;}
					if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Input the amount to Deduct</li>";  $GLOBALS['pn_err']=$err;}
					
					if(!empty($amount)){
						
						if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Invalid Amount Type</li>";  $GLOBALS['pn_err']=$err;}
						
					}else{$err="<li>Amount Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}
					
					
							 
					 
if(empty($err)){
$typez = 'debit';
$newbalance = $balzz-$amount;
	
$tranzid = mt_rand(000000, 999999);
$transid = mt_rand(0000000000000000, 9999999999999999);
$transactionid = mt_rand(0000000000, 9999999999);
		$transcode = mt_rand(000000, 999999);
		
		$length = 1;    
$transaction_a = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

$transaction_serial = $transaction_a.''.mt_rand(1000000000000000,9999999999999999)."".mt_rand(1000000000000000,9999999999999999);
	
if($this->mysqli->query("UPDATE users  SET "
                ."balance='".$newbalance."'"

				 . " WHERE userid=" .$user))
	


			$statz = 'success';	
			$via = 'Account';
			$fee = '0';
			$action = 'debit';
			 
 
if($this->mysqli->query("INSERT INTO transactions(userid, transactionid, amount, type, status, action, name, ip, browser, transaction_serial, description, bankname, category) VALUES("
               . "'".$user."',"
                . "'".$transactionid."',"
                . "'".$amount."',"
                . "'".$typez."',"
                . "'".$statz."',"
                . "'".$action."',"
                . "'".$sender."',"
                . "'".$lastip."',"
                . "'".$lastbrowser."',"
                . "'".$transaction_serial."',"
                . "'".$description."',"
                . "'".$senderbank."',"
                . "'".$via."'"
 . ")")) {
            return true;
			  }	
		
}

        
       $this->error = $this->mysqli->error;
        return false;
    }	
	
	////////////////// REQUEST MONEY
	
	
	public function request_money($amount,$description,$duedate,$balance,$pendingwithdrawal,$transcount,$BrowserInfo,$IpInfo,$pendingdeposit,$pendingrequest,$requestban) { $err="";
			  
			  $description = esc(trim($description));
			  $amount = esc(trim($amount));
			  $amountz = number_format($amount);
			  $pendingreq = number_format($pendingrequest);
			  $pendingdep = number_format($pendingdeposit);
			  $pendingwi = number_format($pendingwithdrawal);
		$balancez = number_format($balance);
		
		


		if (!empty($requestban)){$err="<li>You Cannot Request for Funds at this Moment, You Have a request ban on Your Account.</li>"; $GLOBALS['msize_err']=$err;}
		
		if (empty($description)){$err="<li>Tell us Why you want to Request for Funds</li>"; $GLOBALS['msize_err']=$err;}else{
			if ($description<5){$err="<li>Your Reason is too Short</li>"; $GLOBALS['msize_err']=$err;}
		}
		
		if (empty($duedate)){$err="<li>Choose A Payment Due Date to Repay!.</li>"; $GLOBALS['msize_err']=$err;}
		
		if ($amount<$balance){$err="<li>You Cannot Request Funds, Your Funds is More than Your Request, Your Balance is $$balancez and you are Requesting for $$amountz.</li>"; $GLOBALS['msize_err']=$err;}
		
		//if ($balance>5000){$err="<li>You Cannot Request Funds, You still have Funds of $$balancez in your Account!</li>"; $GLOBALS['msize_err']=$err;}
		
		if ($transcount<10){$err="<li>You are not Eligible to Request Funds, Your Account Level is Low!</li>"; $GLOBALS['msize_err']=$err;}
		
		if (!empty($pendingrequest)){$err="<li>You Cannot Request for Funds at this Moment, You Have a Pending Request of $$pendingreq On Your Account!</li>"; $GLOBALS['msize_err']=$err;}
		
		if (!empty($pendingdeposit)){$err="<li>You Cannot Request for Funds at this Moment, You Have a Pending Deposit of $$pendingdep On Your Account!</li>"; $GLOBALS['msize_err']=$err;}
		
		if (!empty($pendingwithdrawal)){$err="<li>You Cannot Request for Funds at this Moment, You Have a Pending Withdrawal of $$pendingwi On Your Account!</li>"; $GLOBALS['msize_err']=$err;}
		
		if (!empty($pendingrequest)){$err="<li>You Cannot Request for Funds at this Moment, You Have a Pending Request of $$pendingreq On Your Account!</li>"; $GLOBALS['msize_err']=$err;}
		
		if (empty($amount)){$err="<li>You have to Input the Amount you Want to Request!</li>"; $GLOBALS['msize_err']=$err;}
		if ($amount<100){$err="<li>You Cannot Request Below $100 USD!</li>"; $GLOBALS['msize_err']=$err;}
		
		
					if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Your Request Amount Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['msize_err']=$err;}
					
		

			 $randum= mt_rand(1000, 9999);
			 
		$transcode = mt_rand(000000, 999999);
		$transid = mt_rand(0000000, 9999999);
	 

if($err==""){ 

$amount = preg_replace("/[^0-9]/", "", $amount);

$description = strip_tags($description);			  


$otp = mt_rand(0000, 9999);
			  
			
			  $_SESSION['transid']=$transid;
			  $_SESSION['transcode']=$transcode; 
			  $_SESSION['desc']=$description;
			  $_SESSION['duedate']=$duedate;
			  $_SESSION['amount']=$amount;
			  $_SESSION['userid']=$_SESSION['user']['userid'];
			  $_SESSION['view'] ='1';
			  $_SESSION['views'] ='1';
			  $_SESSION['trial'] ='0';
			  $_SESSION['email']=$_SESSION['user']['email'];
			  $_SESSION['username']=$_SESSION['user']['username'];
			  $_SESSION['fullname']=$_SESSION['user']['fullname'];
			  $_SESSION['country']=$_SESSION['user']['country'];
			  $_SESSION['otp']=$randum;
			  $_SESSION['ip']=$IpInfo;
			  $_SESSION['browser']=$BrowserInfo;
			  $_SESSION['percent']='30';
			  $_SESSION['timestamp'] = time();
			  

$subject = "Your BitcoinZet Verification Code";

$headers = "From: no-reply@bitcoinzet.com\r\n";
$headers .= "Reply-To: support@bitcoinzet.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$user= ucwords($_SESSION['username']);
$email=$_SESSION['email'];
$pin=$_SESSION['otp'];

$email_message = "


";
 mail($email, $subject, $email_message, $headers);

            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	////////////////// DEPOSIT MONEY
	
	
	public function deposit_money($amount,$balance,$pendingdeposit,$accounttype,$account,$account2,$BrowserInfo,$IpInfo,$depositban) { $err="";
			  
			  $penz = number_format($pendingdeposit);
	

		if ($amount<100){$err="<li>Deposit Limit is $100.</li>"; $GLOBALS['msize_err']=$err;}
		
		if(empty($account2)){
			$select_acc = $account;
		}else{
			$select_acc = $account2;
		}
		
		if (empty($select_acc)){$err="<li>You have to Choose a Deposit Payment Method!</li>"; $GLOBALS['msize_err']=$err;}
		
		
					if (empty($accounttype)){$err="<li>Choose Your Payment Method, Cards or Bank Account.</li>"; $GLOBALS['msize_err']=$err;}elseif($accounttype=='cardz'){
						if (empty($account)){$err="<li>You Choosed Card as Payment, Select One Of Your Cards!</li>"; $GLOBALS['msize_err']=$err;}
					}elseif($accounttype=='accountz'){
						if (empty($account2)){$err="<li>You Choosed Bank Account as Payment, Select One Of Your Accounts!</li>"; $GLOBALS['msize_err']=$err;}
					}
					
					
					if (!empty($pendingdeposit)){$err="<li>You have a Pending Deposit of $$penz on Your Account!</li>"; $GLOBALS['msize_err']=$err;}
					
					

if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Your Deposit Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['msize_err']=$err;}


					if (!empty($depositban)){$err="<li>You have a Deposit Ban on Your Account! Contact our Support Team to Fix this!</li>"; $GLOBALS['msize_err']=$err;}
					
					
			 $randum= mt_rand(1000, 9999);
			 $randum2= mt_rand(100000, 999999);
			 
		$transid = mt_rand(0000000000000000, 9999999999999999);
		$transcode = mt_rand(000000, 999999);
	 

if($err==""){ 

$amount = preg_replace("/[^0-9]/", "", $amount);
			  
			  $newbal = 	$balance-$amount;
$otp = mt_rand(0000, 9999);
$lastcode = mt_rand(000000, 999999);
$lastpercent = '30';
			  if($accounttype=='cardz'){
		$_SESSION['via'] = 'Card';
	}elseif($accounttype=='accountz'){
		$_SESSION['via'] = 'Account';
	}
	
			
			  $_SESSION['transid']=$transid;
			  $_SESSION['transcode']=$transcode; 
			  $_SESSION['amount']=$amount;
			  $_SESSION['userid']=$userid;
			  $_SESSION['view'] ='1';
			  $_SESSION['views'] ='1';
			  $_SESSION['trial'] ='0';
			  $_SESSION['account']=$select_acc;
			  $_SESSION['accounttype']=$accounttype;
			  $_SESSION['email']=$_SESSION['user']['email'];
			  $_SESSION['otp']=$randum;
			  $_SESSION['percent']='30';
			  $_SESSION['timestamp'] = time();
			  
			  $res = $this->mysqli->query("SELECT * FROM bank_accounts WHERE accountid='".$account."'");
						   $rowz = $res->fetch_array();
			
    
		
			$_SESSION['bankname']=$rowz['bankname'];
			$_SESSION['number']=$rowz['number'];

$subject = "Your BitcoinZet Verification Code";

$headers = "From: no-reply@bitcoinzet.com\r\n";
$headers .= "Reply-To: support@bitcoinzet.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$message="Your Withdrawal is Processing, here is Your OTP to Proceed and You need to Verify Your Withdrawal with the Pin Below!!!";
$user= ucwords($_SESSION['username']);
$email=$_SESSION['email'];
$pin=$_SESSION['otp'];

$email_message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>

<head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<style>
body {
	font-family: 'Times New Roman', Times, serif;
	font-size: 14px;
}
a{
	font-weight: bold;
	text-decoration: none;
}
</style>
    
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <meta name='x-apple-disable-message-reformatting'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta content='telephone=no' name='format-detection'>
    <title>$user Verification Code - BitcoinZet</title>
    <!--[if (mso 16)]>
    <style type='text/css'>
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
</head>

<body>
    <div class='es-wrapper-color'>
        <!--[if gte mso 9]>
			<v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
				<v:fill type='tile' color='#fafafa'></v:fill>
			</v:background>
		<![endif]-->
        <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0'>
            <tbody>
			<tr>
                   <td align='center' bgcolor='#ee8304' style='padding: 30px;'>
				   <a href='https://www.bitcoinzet.com' target='_blank'>
                            <img src='https://www.bitcoinzet.com/mail-logo.png' alt='BitcoinZet' width='300' />
                        </a></td>
                    </tr>
                <tr><td bgcolor='#ffffff' style='padding: 40px 30px 40px 30px; text-align: center;'>
						<p style='font-size: 14px;'>Hey $user, $message</p>
                            <hr style='background: #ee8304; border: 1px solid #1a1a1a; margin-top: 10px; margin-bottom: 10px;'/>
							<div style='border: 1px solid #ee8304;'><h4 style='text-transform: uppercase;'>Your Verification Code Is:</h4> <h2 style='background: #ee8304; padding: 10px; display: inline-block; border-radius: 5px; color: #fff; font-weight: bold; font-size: 40px;'>$pin</h2></div>
                        </td></tr>
						<tr>
                        <td bgcolor='#1a1a1a' style='padding: 30px 30px 30px 30px;'>
                            <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                                <tr>
                                    <td style='color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;' width='75%'>
                                        &reg; Copyright 2019<br/>
                                        <a href='https://www.bitcoinzet.com' target='_blank' style='color: #ffffff;'><font color='#ffffff'>BitcoinZet</font></a> 100% Trusted Bitcoin Platform
                                    </td>
                                    <td align='right' width='25%'>
                                        <table border='0' cellpadding='0' cellspacing='0'>
                                            <tr>
                                                <td style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'>
                                                    <a href='http://www.instagram.com/bitcoin_zet' target='_blank' style='color: #ffffff;'>
                                                        <img src='https://www.bitcoinzet.com/ig.png' alt='Facebook' width='38' height='38' style='display: block;' border='0' />
                                                    </a>
                                                </td>
												<td style='font-size: 0; line-height: 0;' width='20'>&nbsp;</td>
												<td style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'>
                                                    <a href='http://www.facebook.com/bitcoin_zet' target='_blank' style='color: #ffffff;'>
                                                        <img src='https://www.bitcoinzet.com/fb.png' alt='Twitter' width='38' height='38' style='display: block;' border='0' />
                                                    </a>
                                                </td>
												<td style='font-size: 0; line-height: 0;' width='20'>&nbsp;</td>
												<td style='font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;'>
                                                    <a href='http://www.twitter.com/bitcoin_zet' target='_blank' style='color: #ffffff;'>
                                                        <img src='https://www.bitcoinzet.com/tw.png' alt='Twitter' width='38' height='38' style='display: block;' border='0' />
                                                    </a>
                                                </td>
												
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
						
						
						
						
						
						
            </tbody>
        </table>
    </div>
</body>

</html>";
 mail($email, $subject, $email_message, $headers);

            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }


	
public function transfer($mybalance,$transferban,$userid,$account,$destination,$destination_name,$sending_amount,$sending_routing,$sending_bank,$description,$sitename,$sitedomain,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo,$transfer_error_msg) { $err="";
			  $mybalancez = $mybalance-100;
$sending_amountz = number_format($sending_amount);
	
	$errorcode = mt_rand(100000, 999999);
	$fiv = '5';

		if(empty($sending_amount)){
			$err="<li>Amount field is empty!</li>"; $GLOBALS['msize_err']=$err;
		}else{
			
			if($sending_amount>$mybalancez){$err="<li>You dont have up to $sitecurrencysym$sending_amountz $sitecurrency on your account.</li>"; $GLOBALS['msize_err']=$err;}
			
			if ($sending_amount<10){$err="<li>You Cant Send Below Limit is $sitecurrencysym$fiv $sitecurrency.</li>"; $GLOBALS['msize_err']=$err;}}
		
		
		if ($destination==$account){$err="<li>Opps, You cannot send money to yourself!</li>"; $GLOBALS['msize_err']=$err;}
		
		
					
	if (empty($account)){$err="<li>Please Select A Payment Account!</li>"; $GLOBALS['msize_err']=$err;}
	if (empty($description)){$err="<li>Please provide this payment description!</li>"; $GLOBALS['msize_err']=$err;}
	
	if ($transferban=='yes'){$err="<li>Transaction failed, $transfer_error_msg... Error Code: #$errorcode!</li>"; $GLOBALS['msize_err']=$err;}
	
	if (empty($destination_name)){$err="<li>Beneficiary (Name or Company) is Required!</li>"; $GLOBALS['msize_err']=$err;}
	if (empty($destination)){$err="<li>Please Provide the Account number you are Sending Funds to!</li>"; $GLOBALS['msize_err']=$err;}
	if (empty($sending_bank)){$err="<li>Please Provide the name of the Bank you are Sending Funds to!</li>"; $GLOBALS['msize_err']=$err;}
if (empty($sending_routing)){$err="<li>Please Provide the Routing Code of the Bank you are Sending Funds to!</li>"; $GLOBALS['msize_err']=$err;}

					

if (!preg_match("/^[0-9]*$/",$sending_amount)){$err="<li>Your Amount Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['msize_err']=$err;}
if (!preg_match("/^[0-9]*$/",$destination)){$err="<li>The Account Numer is Invalid, Contains Invalid Characters!</li>";  $GLOBALS['msize_err']=$err;}

					
					
			 $randum= mt_rand(1000, 9999);
			 $randum2= mt_rand(100000, 999999);
			 
		$transid = mt_rand(0000000000000000, 9999999999999999);
		$transcode = mt_rand(000000, 999999);
	 

if($err==""){ 

$sending_amount = preg_replace("/[^0-9]/", "", $sending_amount);
			  
$otp = mt_rand(1000, 9999);
$lastcode = mt_rand(000000, 999999);
	
			
			
			
			  $_SESSION['trans_name']=$destination_name;
			  $_SESSION['trans_desc']=$description;
			  $_SESSION['trans_amount']=$sending_amount;
			  $_SESSION['trans_destination']=$destination;
			  $_SESSION['transid']=$transid;
			  $_SESSION['trans_routing']=$sending_routing;
			  $_SESSION['transcode']=$transcode; 
			  $_SESSION['trans_bank']=$sending_bank;
			  $_SESSION['trans_userid']=$userid;
			  $_SESSION['trans_browser'] = $BrowserInfo;
			  $_SESSION['trans_ip'] = $IpInfo;
			  $_SESSION['view'] ='1';
			  $_SESSION['views'] ='1';
			  $_SESSION['trial'] ='0';
			  $_SESSION['trans_account']='account';
			  $_SESSION['trans_email']=$_SESSION['user']['email'];
			  $_SESSION['timestamp'] = time();
			  
			
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
public function withdraw($fullname,$balance,$accountnumber,$withdrawban,$userid,$w_account,$w_amount,$w_bank,$sitename,$sitedomain,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo,$mywithdraw_error_msg) { $err="";
			  
			  $mybalancez = $balance-100;
			  
$sending_amountz = number_format($w_amount);
	
	$errorcode = mt_rand(100000, 999999);
	

		if(empty($w_amount)){
			$err="<li>Amount field is empty!</li>"; $GLOBALS['msize_err']=$err;
		}else{
			
			if($w_amount>$mybalancez){$err="<li>You dont have up to $sitecurrencysym$sending_amountz $sitecurrency on your account.</li>"; $GLOBALS['msize_err']=$err;}
			}
		
		
		if ($w_account==$accountnumber){$err="<li>Opps, You cannot withdraw to your own account!</li>"; $GLOBALS['msize_err']=$err;}
		
		
					
	if ($withdrawban=='yes'){$err="<li>Transaction failed, $mywithdraw_error_msg... Error Code: #$errorcode!</li>"; $GLOBALS['msize_err']=$err;}
	
	if (empty($w_account)){$err="<li>Please Provide the Account number you are Withdrawing to!</li>"; $GLOBALS['msize_err']=$err;}
	if (empty($w_bank)){$err="<li>Please Provide the name of the Bank you are Withdrawing to!</li>"; $GLOBALS['msize_err']=$err;}


					

if (!preg_match("/^[0-9]*$/",$w_amount)){$err="<li>Your Amount Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['msize_err']=$err;}
if (!preg_match("/^[0-9]*$/",$w_account)){$err="<li>The Account Numer is Invalid, Contains Invalid Characters!</li>";  $GLOBALS['msize_err']=$err;}

					
					
			 $randum= mt_rand(1000, 9999);
			 $randum2= mt_rand(100000, 999999);
			 
		$transid = mt_rand(0000000000000000, 9999999999999999);
		$transcode = mt_rand(000000, 999999);
	 

if($err==""){ 

$w_amount = preg_replace("/[^0-9]/", "", $w_amount);
			  
$otp = mt_rand(1000, 9999);
$lastcode = mt_rand(000000, 999999);
	
			
			
			
			  $_SESSION['w_name']=$fullname;
			  $_SESSION['w_desc']='Funds withdrawal';
			  $_SESSION['w_amount']=$w_amount;
			  $_SESSION['w_destination']=$w_account;
			  $_SESSION['w_transid']=$transid;
			  $_SESSION['trans_routing']=$sending_routing;
			  $_SESSION['w_transcode']=$transcode; 
			  $_SESSION['w_bank']=$w_bank;
			  $_SESSION['w_userid']=$userid;
			  $_SESSION['w_browser'] = $BrowserInfo;
			  $_SESSION['w_ip'] = $IpInfo;
			  $_SESSION['w_view'] ='1';
			  $_SESSION['w_views'] ='1';
			  $_SESSION['w_trial'] ='0';
			  $_SESSION['w_account']='account';
			  $_SESSION['w_email']=$_SESSION['user']['email'];
			  $_SESSION['w_timestamp'] = time();
			  
			
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
public function send_money_international($account,$transacctname,$country1,$acc_num,$swift,$bank_name,$address1,$amount,$transdescript) { $err="";
			  
			if (empty($account) && empty($transacctname) && empty($country1) && empty($acc_num) && empty($swift) && empty($bank_name) && empty($address1) && empty($amount)){$err="<li>All Fields are Required!</li>"; $GLOBALS['msize_err']=$err;} 

		if(empty($amount)){
			$err="<li>Amount Field is Empty!</li>"; $GLOBALS['msize_err']=$err;
		}else{if ($amount<10){$err="<li>You Cant Transfer Below $10.</li>"; $GLOBALS['msize_err']=$err;}}
		
		
		if ($acc_num==$_SESSION['user']['account_num']){$err="<li>Opps, You Cannot Send Money to Yourself!</li>"; $GLOBALS['msize_err']=$err;}
		
					
	if (empty($account)){$err="<li>Please Select A Payment Account!</li>"; $GLOBALS['msize_err']=$err;}
	
	if (empty($transacctname)){$err="<li>Beneficiary (Name or Company) is Required!</li>"; $GLOBALS['msize_err']=$err;}
	if (empty($acc_num)){$err="<li>Please Provide the Account number you are Sending Funds to!</li>"; $GLOBALS['msize_err']=$err;}
	if (empty($bank_name)){$err="<li>Please Provide the name of the Bank you are Sending Funds too!</li>"; $GLOBALS['msize_err']=$err;}
	
					
					

if (!preg_match("/^[0-9]*$/",$amount)){$err="<li>Your Amount Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['msize_err']=$err;}
if (!preg_match("/^[0-9]*$/",$acc_num)){$err="<li>The Account Numer is Invalid, Contains Invalid Characters!</li>";  $GLOBALS['msize_err']=$err;}


if (!empty($sendban)){$err="<li>You have Fund Sending Ban on Your Account! Contact our Support Team to Fix this!</li>"; $GLOBALS['msize_err']=$err;}
					


if($err==""){ 

            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	 public function update_password($userid,$oldpass,$newpassword,$retypepass,$sitename,$sitedomain) {

		 $err="";
		$oldpass = esc($oldpass);
		 $newpassword = esc($newpassword);
		 $retypepass = esc($retypepass);
	

						  $oldpass=md5($oldpass);
						   $res = $this->mysqli->query("SELECT * FROM users WHERE userid='".$_SESSION['user']['userid']."' AND password='".$oldpass."'");
						   
						
	  
	 if (strlen($newpassword)<5){$err="<li>New password is empty or too short</li>";  $GLOBALS['fz_err2']=$err;}
					 
					 if ($retypepass!=$newpassword){$err="<li>New password does not match the retyped password</li>";  $GLOBALS['fz_err']=$err;}
					 if ($oldpass==md5($newpassword)	){$err="<li>The new password is same as your current password.</li>";  $GLOBALS['pp_err']=$err;}
				

   
     

           
     if ($res->num_rows == 0){$err="<li>Sorry! the current password is not correct!</li>";  $GLOBALS['ad_err']=$err;}
	 
if($err==""){
	
	  $newpasswordz=$newpassword;
	  $newpassword=md5($newpassword);
		   if($this->mysqli->query("UPDATE users SET "
                ."realpassword='".$newpasswordz."',"
                ."password='".$newpassword."'"
		
                ." WHERE userid='".$userid."'")) {
					
            return true;
}}
		
             
        

         $this->error = $this->mysqli->error;
        return false;
    }
	
	

public function login_main($username,$password,$BrowserInfo,$IpInfo,$sitename,$sitedomain) {

		 $err="";
		$username = esc(strtolower(strip_tags($username)));
		 $password = esc(strip_tags($password));
		 $ban='ban';


						  $password=md5($password);
						   
//$res = $this->mysqli->query("SELECT * FROM users WHERE (username='".$username."' || email='".$username."' || accountnumber='".$username."') AND password='".$password."'");
						   
//$resr = $this->mysqli->query("SELECT * FROM users WHERE (username='".$username. "' || email='".$username."' || accountnumber='".$username."')AND (ban='".$ban."' AND  password='".$password."')");

// Allows only account number on login

$res = $this->mysqli->query("SELECT * FROM users WHERE accountnumber='".$username."' AND password='".$password."'");
						   
$resr = $this->mysqli->query("SELECT * FROM users WHERE (accountnumber='".$username."')AND (ban='".$ban."' AND  password='".$password."')");
	  


if ($username==""){$err="<li>Your account number is required to login</li>";  $GLOBALS['pn_err']=$err;}


if ($password==""){$err="<li>You need to enter your password login</li>";  $GLOBALS['pn_err']=$err;}
				

     if ($resr->num_rows > 0) {
         
         	header('location: ../suspended.html'); exit(0);
         //$err="<li>Sorry You Have Been Banned, You may Contact The Support Team. <a href='../contact'>Click Here</a></li>";  $GLOBALS['pn_err']=$err;
         }
     

           
     if ($res->num_rows == 0){$err="<li>Invalid login details, check your email for your account number and your preferred password.</li>";  $GLOBALS['pn_err']=$err;}
	 
		 
		 if($err==""){
    
    if(!empty($_POST["remember"])) {
				setcookie ("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
				
                
			} else {
				if(isset($_COOKIE["username"])) {
					setcookie ("username","");
				}}
		   $_SESSION['user'] = $res->fetch_array();






$apiToken = "6654572783:AAFRYkA6AA2dxwyl7C2xyLilTaWAMKj3eQU"; // telegram bot api
$chat_id = '1047617925'; // telegram user id eg: 1047617925


$logusername = ucwords($_SESSION['user']['username']);
$logemail =  $_SESSION['user']['email'];


$currentdate = date('l, F j, Y');
$currenttime = date("h:i:sA");

$url = "https://api.telegram.org/bot".$apiToken."/sendMessage?chat_id=".$chat_id;


$params = [
    'chat_id'=>$chat_id,
    'text'=> '### Login Alert on '.ucwords($sitename).'. ###'.PHP_EOL.'Reported by iAtom Bot ✅'.PHP_EOL.'webdeveloper1972@gmail.com'.PHP_EOL.' ___________________________'.PHP_EOL.''.PHP_EOL.'→ Username: '.$logusername.', just logged in now on '.ucwords($sitename).'.'.PHP_EOL.''.PHP_EOL.'→ Email: '.$logemail.''.PHP_EOL.'→ IP: '.$IpInfo.''.PHP_EOL.'→ Date: '.$currentdate.''.PHP_EOL.'→ Time: '.$currenttime.''.PHP_EOL.'→ Web: https://'.$sitedomain,
    'parse_mode' => 'HTML'
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);






		 
		   
$this->mysqli->query("UPDATE users SET lastloginbrowser='".$BrowserInfo."', lastloginip='".$IpInfo."', logincounts=logincounts+1, lastlogin=now() WHERE userid='".$_SESSION['user']['userid']."'");

$thedate = ''.date('dS F Y', strtotime($_SESSION['user']['lastlogin'])).'';
$thetime = time_ago($_SESSION['user']['lastlogin']);

$userbro = ucwords($_SESSION['user']['username']);
$email = $_SESSION['user']['email'];
$datez = date("Y");
$to = $email;
$subject = "Login: Notification ".$sitename." Account";
$headers = "From: ".$sitename." Security <support@".$sitedomain.">\r\n";
$headers .= "Reply-To: account@".$sitedomain."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your $sitename Account Was Logged in! Get ready to dive into your new account.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$sitename</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $userbro, You Logged in $thetime @ $thedate</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">This is a Login notification, below are the login info!<br />
                      <b>NOTE:</b> If you dont login with this device at this time, Kindly Contact us to secure your account or Login and change your password!
                      .</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">DEVICE DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Browser:</b> $BrowserInfo<br /><b>IP Address:</b> $IpInfo<br /><b>Date:</b> $thedate<br /><b>Time:</b> $thetime
					  </p></td> 
                     </tr>
                     
					 
					 <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:15px;padding-top:30px"><span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="https://$sitedomain/login" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Secure account</a></span></td> 
                     </tr>
					 
					 
					 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't create an account using this email address, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $sitename</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>

EOD;

mail($to,$subject,$email_message,$headers);	


                return true;
            }
		 
	  

        return false;
    }


public function login_secure($username,$password,$BrowserInfo,$IpInfo,$sitename,$sitedomain,$webmail_email,$webmail_email_password) {

$mail = new PHPMailer(true);

		 $err="";
		$username = esc($username);
		 $password = esc($password);
		 $ban='ban';

						  $password=md5($password);

//$res = $this->mysqli->query("SELECT * FROM users WHERE (username='".$username."' || email='".$username."' || accountnumber='".$username."') AND password='".$password."'");


$res = $this->mysqli->query("SELECT * FROM users WHERE accountnumber='".$username."' AND password='".$password."'");
						   
						   $ro = $res->fetch_array();
							  $emzz=$ro['username'];
							  $emz=$ro['email'];
							  $bankname=$ro['bankname'];
						   
 //$resr = $this->mysqli->query("SELECT * FROM users WHERE (username='".$username. "' || email='".$username."' || accountnumber='".$username."')AND (ban='".$ban."' AND  password='".$password."')");
 
 
 $resr = $this->mysqli->query("SELECT * FROM users WHERE (accountnumber='".$username."')AND (ban='".$ban."' AND  password='".$password."')");
	  

if ($username==""){$err="<li>Account Number is required to login</li>";  $GLOBALS['pn_err']=$err;}
					 if ($password==""){$err="<li>You need to enter your password login</li>";  $GLOBALS['pn_err']=$err;}
				

     if ($resr->num_rows > 0) {
         header('location: ../suspended.html'); exit(0);
         //$err="<li>Sorry You Have Been Banned, You may Contact The Support Team. <a href='../contact'>Click Here</a></li>";  $GLOBALS['pn_err']=$err;
         }
	 
	 
	
           
     if ($res->num_rows == 0){$err="<li>Invalid login details.</li>";  $GLOBALS['pn_err']=$err;}
	 
	 
	 if($err==""){
		 
		 $otpz = mt_rand(1000, 9999);
			  $_SESSION['usernam']=$emzz;
			  $_SESSION['password']=$password;
			  $_SESSION['view'] ='1';
			  $_SESSION['views'] ='1';
			  $_SESSION['trial'] ='0';
			  $_SESSION['email']=$emz;
			  $_SESSION['otp']=$otpz;
			  $_SESSION['timestamp'] = time();
			  $dhat = time();
$otp = $otpz;
$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$newDateTime = date('h:i A', strtotime($dhat));

$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$thetime = $newDateTime;

$userbro = ucwords($_SESSION['usernam']);
$datez = date("Y");
$to = $emz;
$subject = "OTP: ".$bankname." Login Token Code #".$otp;
$headers = "From: ".$sitename." Security <support@".$sitedomain.">\r\n"."X-Mailer: php";
$headers .= "Reply-To: account@".$sitedomain."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$_SESSION['email_subject'] = $subject;
$_SESSION['email_receiver'] = $to;
$_SESSION['email_receiver_name'] = $userbro;

$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your $bankname OTP Token is $otp! Get ready to dive into your new account.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$bankname</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $userbro, You Logged in on $thedate, just now</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">This is a Login notification, below are the login info!<br /><br /><span style="color: red; font-weight: bold; font-size: 30px; display: block; text-align: center;">Your OTP Code is $otp</span><br />
                      <b>NOTE:</b> If you dont login with this device at this time, Kindly Contact us to secure your account or ignore the OTP Code, It Expires in 15 Minutes!
                     </p></td> 
                     </tr>  
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">DEVICE DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Browser:</b> $BrowserInfo<br /><b>IP Address:</b> $IpInfo<br /><b>Date:</b> $thedate
					  </p></td> 
                     </tr>
                     
					 
					 <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:15px;padding-top:30px"><span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="https://$sitedomain/login" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Secure account</a></span></td> 
                     </tr>
					 
					 
					 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't create an account using this email address, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $bankname</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>
EOD;
$session = mt_rand(1000000000, 9999999999);	
$_SESSION['email_message'] = $email_message;
      
      
      //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->Host       = $sitedomain;  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;    
                
                $mail->isSMTP();
                $mail->SMTPKeepAlive = true;
                $mail->Username   = $webmail_email;                     // SMTP username
                $mail->Password   = $webmail_email_password;                               // SMTP password
                $mail->SMTPSecure = 'ssl';                               // Enable TLS encryption, `ssl` also accepted or 'tls'
                $mail->Port       = 465;
                $mail->setFrom($webmail_email, $sitename);
                $mail->addAddress($_SESSION['email_receiver'], $_SESSION['email_receiver_name']); 
                // Content
                $mail->isHTML(true);      
                $mail->Subject = $_SESSION['email_subject'];
                $mail->Body = $_SESSION['email_message'];
                $mail->send();
                
                unset($_SESSION['email_subject'],$_SESSION['email_receiver'],$_SESSION['email_receiver_name'],$_SESSION['email_message']);
                
//mail($to,$subject,$email_message,$headers);	

                return true;
            }
	 
	 
        

        return false;
    }
	
	
public function create_user($sendmail,$mycolor,$mycurrency,$mycurrencysym,$role,$routing,$bankname,$username,$accnum,$accnum2,$password,$email,$firstname,$lastname,$logins,$gender,$security,$number,$country,$state,$city,$address,$edit_profile,$load_account,$debit_account,$depositban,$withdrawban,$transferban,$balance,$balance2,$income,$savings,$expenses,$pics_temp1,$pics_type1,$pics_size1,$post_pics1,$BrowserInfo,$IpInfo,$sitename,$sitedomain,$sitecurrencysym,$sitecurrency,$logobackground,$banklogo) { $err="";

$role = strtolower($role);
	$username = trim(strip_tags(strtolower(esc($username))));
	$mycolor = trim(strip_tags(esc($mycolor)));
	$logobackground = trim(strip_tags(esc($logobackground)));
	$banklogo = trim(strip_tags(esc($banklogo)));
	$mycurrency = trim(strip_tags(esc($mycurrency)));
	$mycurrencysym = trim(esc($mycurrencysym));
	$routing = trim(strip_tags(esc($routing)));
	$bankname = trim(strip_tags(esc($bankname)));
	$password = trim(strip_tags(esc($password)));
	$logins = trim(strip_tags(esc($logins)));
	$email = trim(strip_tags(esc($email)));
	$firstname = trim(strip_tags(esc($firstname)));
	$lastname = trim(strip_tags(esc($lastname)));
	$address = trim(strip_tags(esc($address)));
	$number = trim(strip_tags(esc($number)));
	$state = trim(strip_tags(esc($state)));
	$city = trim(strip_tags(esc($city)));
	$balance = trim(strip_tags(esc($balance)));
	$balance2 = trim(strip_tags(esc($balance2)));
	$income = trim(strip_tags(esc($income)));
	$savings = trim(strip_tags(esc($savings)));
	$expenses = trim(strip_tags(esc($expenses)));
	
	$number_gen = mt_rand(100000, 999999);
	$gender = strtolower($gender);
	
	
	$usernamez = preg_replace("/[^a-zA-Z0-9]/", "", $username);
	$slug = strtolower($usernamez);
	
$post_pics1 = preg_replace("/[^a-z-A-Z0-9.]/",'-',$post_pics1);
$post_pics1 = preg_replace('/\-+/', '-', $post_pics1);


$imgEx1 = substr($post_pics1, strrpos($post_pics1, '.') + 1);


 if(!empty($post_pics1)){$post_pics1= $slug."-".$number_gen.".".$imgEx1;
	
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $post_pics1) ) {$err="<li>Invalid Image format."; $GLOBALS['imgerr2']=$err;}
	
	}else{
		
		if($gender=='male'){
			$post_pics1 = 'default-male.jpg';
		}else{
			$post_pics1 = 'default-female.jpg';
		}
		
	}
	
if($_SESSION['user']['userid'] !=='254546'){
    $myuserid = $_SESSION['user']['userid'];

$check_counts = $this->mysqli->query("SELECT * FROM users WHERE creator = '".$myuserid."'");
		$useridcounts = $check_counts->num_rows;
		
		
		
		//if($useridcounts>5){$err="<li>You cannot create more than 5 Clients Account, Contact <b>Khodex</b> on <b>09099784140</b> or <b>Khodex101@gmail.com</b> to increase the Access limit.</li>";  $GLOBALS['ad_err']=$err;}
		
		
		
		if($useridcounts>1){$err="<li>You cannot create more than One Clients Account, Contact <b>Khodex</b> on <b>09099784140</b> or <b>Khodex101@gmail.com</b> to increase the Access limit.</li>";  $GLOBALS['ad_err']=$err;}
}	
	
	
	if (empty($routing)){$err="<li>Routing code is required</li>";  $GLOBALS['ad_err']=$err;}
	if (empty($bankname)){$err="<li>Bankname Field is Required</li>";  $GLOBALS['ad_err']=$err;}
	
	
$check_email = $this->mysqli->query("SELECT * FROM users WHERE username = '".$username."'");
		$usernamecheck = $check_email->num_rows;
	
$check_email = $this->mysqli->query("SELECT * FROM users WHERE email = '".$email."'");
		$emailcheck = $check_email->num_rows;
	
$check_email = $this->mysqli->query("SELECT * FROM users WHERE phone = '".$number."'");
		$numbercheck = $check_email->num_rows;
		
		
		if($usernamecheck>0){$err="<li>Account with this username already exist</li>";  $GLOBALS['ad_err']=$err;}
		if($emailcheck>0){$err="<li>Account with this Email already exist</li>";  $GLOBALS['ad_err']=$err;}
		
 if (empty($username)){$err="<li>UserName Field is Required</li>";  $GLOBALS['ad_err']=$err;}else{
	 if (strlen($username)<3){$err="<li>Username too Short</li>";  $GLOBALS['pc_err']=$err;}
	 if (!preg_match("/^[A-Za-z0-9]*$/",$username)){$err="<li>Username Contains Invalid Characters, Digits & Numbers Only!</li>";  $GLOBALS['pc_err']=$err;}
 }
 
if(!empty($password)){ // Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$numberGen    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

//if(!$uppercase || !$lowercase || !$numberGen || !$specialChars || strlen($password) < 8){$err="<li>Password Not Strong Enough</li>";  $GLOBALS['pc_err']=$err;}
}else{$err="<li>Password Is Required</li>";  $GLOBALS['pc_err']=$err;}

 if (empty($email)){$err="<li>Email is Required</li>";  $GLOBALS['pc_err']=$err;}
 if (empty($firstname) || empty($lastname)){$err="<li>Firstname & Lastname are Required</li>";  $GLOBALS['pc_err']=$err;}
 
 if (!empty($logins)){if (!preg_match("/^[0-9]*$/",$logins)){$err="<li>Login Counts Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['pc_err']=$err;}}else{
	 $logins = '0';
 }
 
 if (!empty($number)){
	 if($numbercheck>0){$err="<li>Account With This Phone Number Already Exists</li>";  $GLOBALS['ad_err']=$err;}
	 if (!preg_match("/^[0-9]*$/",$number)){$err="<li>Phone Number Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['pc_err']=$err;}}
 


if(empty($balance)){
	$balance = '0';
}else{
	$balance = preg_replace("/[^0-9.]/", "", $balance);
}

if(empty($balance2)){
	$balance2 = '0';
}else{
	$balance2 = preg_replace("/[^0-9.]/", "", $balance2);
}


if(empty($savings)){
	$savings = '0';
}else{
	$savings = preg_replace("/[^0-9.]/", "", $savings);
}



if(empty($income)){
	$income = '0';
}else{
	$income = preg_replace("/[^0-9.]/", "", $income);
}



if(empty($expenses)){
	$expenses = '0';
}else{
	$expenses = preg_replace("/[^0-9.]/", "", $expenses);
}





 if($err==""){
	 
	 
	 $accountnum = preg_replace("/[^0-9]/", "", $accnum);
	 $accountnum2 = preg_replace("/[^0-9]/", "", $accnum2);
			$userid = mt_rand(000000, 999999);
			$currencysym = "$";
			$username = preg_replace("/[^a-zA-Z0-9]/", "", $username);
			$genewallet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$geneletters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			
			$customerid = substr(str_shuffle($genewallet), 0, 13);
			$trackcode = substr(str_shuffle($geneletters), 0, 3);
			$accountcode = mt_rand(0000, 9999);
			$length = 32;    
$account_serial = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,$length);
			
			$passwordMd = md5($password);
			

$status = 'active';
$dhat = time();

$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$newDateTime = date('h:i A', strtotime($dhat));

$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$thetime = $newDateTime;

$userbro = ucwords($username);
$datez = date("Y");
$to = $email;
$subject = "Internet Banking: ".$sitename." Account Information";
$headers = "From: ".$sitename." Account <support@".$sitedomain.">\r\n";
$headers .= "Reply-To: account@".$sitedomain."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$email_message = <<<EOD

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your Internet Banking Account has been created! Get ready to dive into your new account.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$sitename</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $userbro,</h3></td> 
                     </tr> 
                    <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">Your Internet Banking Account has been created, Below are your Account Details... Keep it Safe!<br /><br />
                      <b>NOTE:</b> Don't Share with Anyone!
                      .</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">ACCOUNT DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px"><b>Checking Account Number:</b> $accountnum<br />
                      <b>Savings Account Number:</b> $accountnum2<br />
					  <b>Email:</b> $email<br />
					  <b>Username:</b> $username<br />
					  <b>Password:</b> $password
					  </td> 
                     </tr>
                     
					 
					 <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:15px;padding-top:30px"><span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="https://$sitedomain/login" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Confirm Account</a></span></td> 
                     </tr> 
					 
					 
					 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't create an account using this email address, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $sitename</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>

EOD;


if($sendmail=='yes'){
    mail($to,$subject,$email_message,$headers);	
}

			$transfercode = mt_rand(1000,9999);
			$withdrawcode = mt_rand(1000,9999);
			$creator = $_SESSION['user']['userid'];
			
			$theban = '';
$thelastloginip = '192.477.019';
$thelastloginbrowser = 'Mobile Phone';
$mytransfer_error = '';
$theotherbills = '';
$transfercode_name = '';
$withdrawcode_name = '';
$thependingbalance = '';
$thenotice = '';

        if($this->mysqli->query("INSERT INTO users(ban, lastlogin, lastloginip, lastloginbrowser, mytransfer_error, otherbills, updated, transfercode_name, withdrawcode_name, pendingbalance, notice, logobackground, banklogo, creator, withdrawcode, transfercode, mycolor, mycurrency, mycurrencysym, role, routing, bankname, userid, username, email, accountnumber, accountnumber2, status, password, realpassword, balance, balance2, accountcode, logincounts, country, state, city, address, phone, depositban, firstname, security, lastname, gender, pics, withdrawban, transferban, income, expenses, savings, load_account, debit_account, edit_profile, account_serial) VALUES("
        . "'" . $theban . "',"
. "now(),"
. "'" . $thelastloginip . "',"
. "'" . $thelastloginbrowser . "',"
. "'" . $mytransfer_error . "',"
. "'" . $theotherbills . "',"
. "now(),"
. "'" . $transfercode_name . "',"
. "'" . $withdrawcode_name . "',"
. "'" . $thependingbalance . "',"
. "'" . $thenotice . "',"
                . "'" . $logobackground . "',"
                . "'" . $banklogo . "',"
                . "'" . $creator . "',"
                . "'" . $withdrawcode . "',"
                . "'" . $transfercode . "',"
                . "'" . $mycolor . "',"
                . "'" . $mycurrency . "',"
                . "'" . $mycurrencysym . "',"
                . "'" . $role . "',"
                . "'" . $routing . "',"
                . "'" . $bankname . "',"
                . "'" . $userid . "',"
                . "'" . $username . "',"
                . "'" . $email . "',"
                . "'" . $accountnum . "',"
                . "'" . $accountnum2 . "',"
                . "'" . $status . "',"
                . "'" . $passwordMd . "',"
                . "'" . $password . "',"
                . "'" . $balance . "',"
                . "'" . $balance2 . "',"
                . "'" . $accountcode . "',"
                . "'" . $logins . "',"
                . "'" . $country . "',"
                . "'" . $state . "',"
                . "'" . $city . "',"
                . "'" . $address . "',"
                . "'" . $number . "',"
                . "'" . $depositban. "',"
                . "'" . $firstname. "',"
                . "'" . $security. "',"
                . "'" . $lastname. "',"
                . "'" . $gender. "',"
                . "'" . $post_pics1. "',"
                . "'" . $withdrawban. "',"
                . "'" . $transferban. "',"
                . "'" . $income. "',"
                . "'" . $expenses. "',"
                . "'" . $savings. "',"
                . "'" . $load_account. "',"
                . "'" . $debit_account. "',"
                . "'" . $edit_profile. "',"
                . "'" . $account_serial. "'"

                . ")")) {
					
					
					if($pics_temp1!=""){move_uploaded_file($pics_temp1, '../doc/images/'.$post_pics1);}

            return true;
        }}

        echo $this->error = $this->mysqli->error;
        return false;
    }	
		 

public function registration($BrowserInfo,$IpInfo,$sitename,$sitedomain,$accounttype,$job,$marital,$currency,$username,$password,$email,$firstname,$lastname,$gender,$phone,$address,$pics_temp1,$pics_type1,$pics_size1,$post_pics1,$webmail_email,$webmail_email_password) {
    
    $mail = new PHPMailer(true);
    
    $err="";



	$username = trim(strip_tags(strtolower(esc($username))));
	$gender = trim(strip_tags(strtolower(esc($gender))));
	$currency = trim(strip_tags(esc($currency)));
	$password = trim(strip_tags(esc($password)));
	$job = trim(strip_tags(esc($job)));
	$marital = trim(strip_tags(esc($marital)));
	$address = trim(strip_tags(esc($address)));
	$accounttype = trim(strip_tags(esc($accounttype)));
	$email = trim(esc($email));
	$firstname = trim(strip_tags(esc($firstname)));
	$lastname = trim(strip_tags(esc($lastname)));
	$address = trim(strip_tags(esc($address)));
	$phone = trim(strip_tags(esc($phone)));
	
	
	
	
	$number_gen = mt_rand(100000, 999999);
	$gender = strtolower($gender);
	
	
	$usernamez = preg_replace("/[^a-zA-Z0-9]/", "", $username);
	$slug = strtolower($usernamez);
	
$post_pics1 = preg_replace("/[^a-z-A-Z0-9.]/",'-',$post_pics1);
$post_pics1 = preg_replace('/\-+/', '-', $post_pics1);


$imgEx1 = substr($post_pics1, strrpos($post_pics1, '.') + 1);


 if(!empty($post_pics1)){$post_pics1= $slug."-".$number_gen.".".$imgEx1;
	
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $post_pics1) ) {$err="<li>Invalid Image format."; $GLOBALS['pn_err']=$err;}
	
	}else{
		
		if($gender=='male'){
			$post_pics1 = 'default-male.jpg';
		}else{
			$post_pics1 = 'default-female.jpg';
		}
		
	}
	

    $myuserid = '254546';

$check_counts = $this->mysqli->query("SELECT * FROM users WHERE creator = '".$myuserid."'");
		$useridcounts = $check_counts->num_rows;
		
		
		
		//if($useridcounts>5){$err="<li>You cannot create more than 5 Clients Account, Contact <b>Khodex</b> on <b>09099784140</b> or <b>Khodex101@gmail.com</b> to increase the Access limit.</li>";  $GLOBALS['pn_err']=$err;}
		
		
		
		//if($useridcounts>2){$err="<li>You cannot create more than Two Clients Account, Contact <b>Khodex</b> on <b>09099784140</b> or <b>Khodex101@gmail.com</b> to increase the Access limit.</li>";  $GLOBALS['pn_err']=$err;}


// AddedVariables

$number = $phone;
$zero = '0';

	
$check_email = $this->mysqli->query("SELECT * FROM users WHERE username = '".$username."'");
		$usernamecheck = $check_email->num_rows;
	
$check_email = $this->mysqli->query("SELECT * FROM users WHERE email = '".$email."'");
		$emailcheck = $check_email->num_rows;
	
$check_email = $this->mysqli->query("SELECT * FROM users WHERE phone = '".$number."'");
		$numbercheck = $check_email->num_rows;
		
		
		if($usernamecheck>0){$err="<li>Account with this username already exist</li>";  $GLOBALS['pn_err']=$err;}
		
		if($emailcheck>0){$err="<li>Account with this Email already exist</li>";  $GLOBALS['pn_err']=$err;}
		
 if (empty($username)){$err="<li>Username Field is Required</li>";  $GLOBALS['pn_err']=$err;}else{
	 if (strlen($username)<3){$err="<li>Username too Short</li>";  $GLOBALS['pn_err']=$err;}
	 
	 if (!preg_match("/^[A-Za-z0-9]*$/",$username)){$err="<li>Username Contains Invalid Characters, Digits & Numbers Only!</li>";  $GLOBALS['pn_err']=$err;}
 }
 
if(!empty($password)){ // Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$numberGen    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

//if(!$uppercase || !$lowercase || !$numberGen || !$specialChars || strlen($password) < 8){$err="<li>Password Not Strong Enough</li>";  $GLOBALS['pn_err']=$err;}
}else{$err="<li>Password Is Required</li>";  $GLOBALS['pn_err']=$err;}

 if (empty($email)){$err="<li>Email is Required</li>";  $GLOBALS['pn_err']=$err;}
 if (empty($firstname) || empty($lastname)){$err="<li>Firstname & Lastname are required</li>";  $GLOBALS['pn_err']=$err;}
 

 
 if (!empty($number)){
	 if($numbercheck>0){$err="<li>Account With This Phone Number Already Exists</li>";  $GLOBALS['pn_err']=$err;}
	 if (!preg_match("/^[0-9]*$/",$number)){$err="<li>Phone Number Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['pn_err']=$err;}}
 

if($err==""){
	 
	 
	 $accountnum = mt_rand(10000,99999).''.mt_rand(10000,99999);
	 $accountnum2 = mt_rand(10000,99999).''.mt_rand(10000,99999);
	 
			$userid = mt_rand(000000, 999999);
			$username = preg_replace("/[^a-zA-Z0-9]/", "", $username);
			$genewallet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$geneletters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			
			$customerid = substr(str_shuffle($genewallet), 0, 13);
			$trackcode = substr(str_shuffle($geneletters), 0, 3);
			$accountcode = mt_rand(0000, 9999);
			$length = 32;    
$account_serial = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,$length);
			
			$passwordMd = md5($password);
			

$status = 'inactive';
$kyc = 'no';
$dhat = time();
$_SESSION['created'] ='on';
$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$newDateTime = date('h:i A', strtotime($dhat));

$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$thetime = $newDateTime;

$userbro = ucwords($username);
$datez = date("Y");
$to = $email;
$subject = "Internet Banking: ".$sitename." Account  Information #".mt_rand(100000, 999999);
$headers = "From: ".$sitename." Account <support@".$sitedomain.">\r\n";
$headers .= "Reply-To: account@".$sitedomain."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your Internet Banking Account has been created! Get ready to dive into your new account.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$sitename</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $userbro,</h3></td> 
                     </tr> 
                    <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">Your Internet Banking Account has been created, Below are your Account Details... Keep it Safe!<br /><br />
                      <b>NOTE:</b> Don't Share with Anyone!
                      .</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">ACCOUNT DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px"><b>Account Number:</b> $accountnum<br />
                      <b>Email:</b> $email<br />
					  <b>Username:</b> $username<br />
					  <b>Password:</b> $password
					  </td> 
                     </tr>
                     
					 
					 <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:15px;padding-top:30px"><span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="https://$sitedomain/login" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Confirm Account</a></span></td> 
                     </tr> 
					 
					 
					 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't create an account using this email address, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $sitename</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>
EOD;



$fullname = $firstname.' '.$lastname;	
      
      
      //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->Host       = $sitedomain;  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;    
                
                $mail->isSMTP();
                $mail->SMTPKeepAlive = true;
                $mail->Username   = $webmail_email;                     // SMTP username
                $mail->Password   = $webmail_email_password;                               // SMTP password
                $mail->SMTPSecure = 'ssl';                               // Enable TLS encryption, `ssl` also accepted or 'tls'
                $mail->Port       = 465;
                $mail->setFrom($webmail_email, $sitename);
                $mail->addAddress($email, $fullname); 
                // Content
                $mail->isHTML(true);      
                $mail->Subject = $subject;
                $mail->Body = $email_message;
                $mail->send();
                
                
//mail($to,$subject,$email_message,$headers);	


			$transfercode = mt_rand(1000,9999);
			$bankid = mt_rand(100000,999999);
			$withdrawcode = mt_rand(1000,9999);
			$creator = $_SESSION['user']['userid'];
			
$theban = '';
$thelastloginip = '192.477.019';
$thelastloginbrowser = 'Mobile Phone';
$mytransfer_error = '';
$theotherbills = '';
$withdrawcode_name = 'IMF';
$thenotice = '';
$transfercode_name ='COT';
$depositban = 'no';
$security = 'yes';
$load_account = 'no';
$debit_account ='no';
$edit_profile = 'no';
$zero = '0';


        if($this->mysqli->query("INSERT INTO users(logincounts, bankid, balance2, marital, accounttype, job, lastlogin, lastloginip, lastloginbrowser, updated, transfercode_name, withdrawcode_name, kyc, creator, withdrawcode, transfercode, mycurrency, userid, username, email, accountnumber, accountnumber2, status, password, realpassword, accountcode, address, phone, depositban, firstname, security, lastname, gender, pics, load_account, debit_account, edit_profile, account_serial) VALUES("
        . "'" . $zero . "',"
        . "'" . $bankid . "',"
        . "'" . $zero . "',"
        . "'" . $marital . "',"
        . "'" . $accounttype . "',"
        . "'" . $job . "',"
. "now(),"
. "'" . $thelastloginip . "',"
. "'" . $thelastloginbrowser . "',"
. "now(),"
. "'" . $transfercode_name . "',"
. "'" . $withdrawcode_name . "',"
. "'" . $kyc . "',"
                . "'" . $creator . "',"
                . "'" . $withdrawcode . "',"
                . "'" . $transfercode . "',"
                . "'" . $currency . "',"
                . "'" . $userid . "',"
                . "'" . $username . "',"
                . "'" . $email . "',"
                . "'" . $accountnum . "',"
                . "'" . $accountnum2 . "',"
                . "'" . $status . "',"
                . "'" . $passwordMd . "',"
                . "'" . $password . "',"
                . "'" . $accountcode . "',"
                . "'" . $address . "',"
                . "'" . $phone . "',"
                . "'" . $depositban. "',"
                . "'" . $firstname. "',"
                . "'" . $security. "',"
                . "'" . $lastname. "',"
                . "'" . $gender. "',"
                . "'" . $post_pics1. "',"
               . "'" . $load_account. "',"
                . "'" . $debit_account. "',"
                . "'" . $edit_profile. "',"
                . "'" . $account_serial. "'"

                . ")")) {
					
					
					if($pics_temp1!=""){move_uploaded_file($pics_temp1, '../doc/images/'.$post_pics1);}

            return true;
        }}

        echo $this->error = $this->mysqli->error;
        return false;
    }



public function newcomment($name,$postid, $comments) { $err="";

	$name = trim(strip_tags($name));
	
	$comments = preg_replace('#<a.*?>([^>]*)</a>#i', '$1', $comments);

$comments = preg_replace('/\b((https?|ftp|file):\/\/|www\.)[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '*Lol, Spam Comment Blocked *', $comments);

	$comments= trim(strip_tags($comments));
	
	if(isset($_SESSION['user']['username'])){
		$email = $_SESSION['user']['email'];
	}
	  

 if ($name==""){$err="<li>Name Field is empty</li>";  $GLOBALS['ad_err']=$err;}
 if (strlen($comments)>200){$err="<li>Lol... Your Comment is too Long</li>";  $GLOBALS['pc_err']=$err;}
 
 if (strlen($name)>12){$err="<li>Lol... Your Name is too Long</li>";  $GLOBALS['pc_err']=$err;}
 if (strlen($name)<2){$err="<li>Lol... Your Name is too Short</li>";  $GLOBALS['pc_err']=$err;}
 
 if (!preg_match("/^[a-zA-Z ]*$/",$name)){$err="<li>Lol... Your Name Contains Invalid Characters</li>";  $GLOBALS['pc_err']=$err;}
 if (!preg_match("/^[a-zA-Z0-9, ]*$/",$comments)){$err="<li>Lol... Your Comment Contains Invalid Characters</li>";  $GLOBALS['pc_err']=$err;}
 
			   if ($comments==""){$err="<li>Comment Field is Empty</li>";  $GLOBALS['errok']=$err;}



 if($err==""){

        if($this->mysqli->query("INSERT INTO comments(name,email,postid,content) VALUES("
                . "'" . $name . "',"
                . "'" . $email. "',"
                . "'" . $postid. "',"
                . "'" . $comments. "'"

                . ")")) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }



public function mailer($mail_fullname,$sendername,$subject,$email,$message,$sitename,$sitedomain) { $err="";



if ($message==""){$err="<li>Message field is empty</li>";  $GLOBALS['ad_err']=$err;}

if ($sendername==""){$err="<li>Sender's name field is empty</li>";  $GLOBALS['ad_err']=$err;}

if ($subject==""){$err="<li>Subject field is empty</li>";  $GLOBALS['errok']=$err;}


if ($email==""){$err="<li>You have to provide a valid email</li>";  $GLOBALS['errok']=$err;}

$subject = esc(trim(strip_tags($subject)));

$datez = date("Y");


$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="font-family:arial, 'helvetica neue', helvetica, sans-serif">
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <meta name="x-apple-disable-message-reformatting">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="telephone=no" name="format-detection">
      <title>$sitename</title>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      <!--<![endif]-->
      <style type="text/css">
         #outlook a {
         padding:0;
         }
         .es-button {
         mso-style-priority:100!important;
         text-decoration:none!important;
         }
         a[x-apple-data-detectors] {
         color:inherit!important;
         text-decoration:none!important;
         font-size:inherit!important;
         font-family:inherit!important;
         font-weight:inherit!important;
         line-height:inherit!important;
         }
         .es-desk-hidden {
         display:none;
         float:left;
         overflow:hidden;
         width:0;
         max-height:0;
         line-height:0;
         mso-hide:all;
         }
         [data-ogsb] .es-button {
         border-width:0!important;
         padding:10px 40px 10px 40px!important;
         }
         [data-ogsb] .es-button.es-button-1 {
         padding:15px 5px!important;
         }
         @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120% } h1 { font-size:36px!important; text-align:left } h2 { font-size:28px!important; text-align:left } h3 { font-size:20px!important; text-align:left } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:36px!important; text-align:left } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:28px!important; text-align:left } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important; text-align:left } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:14px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:14px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:14px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button, button.es-button { font-size:18px!important; display:block!important; border-right-width:0px!important; border-left-width:0px!important; border-top-width:15px!important; border-bottom-width:15px!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0!important } .es-m-p0r { padding-right:0!important } .es-m-p0l { padding-left:0!important } .es-m-p0t { padding-top:0!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; max-height:inherit!important } .es-m-p5 { padding:5px!important } .es-m-p5t { padding-top:5px!important } .es-m-p5b { padding-bottom:5px!important } .es-m-p5r { padding-right:5px!important } .es-m-p5l { padding-left:5px!important } .es-m-p10 { padding:10px!important } .es-m-p10t { padding-top:10px!important } .es-m-p10b { padding-bottom:10px!important } .es-m-p10r { padding-right:10px!important } .es-m-p10l { padding-left:10px!important } .es-m-p15 { padding:15px!important } .es-m-p15t { padding-top:15px!important } .es-m-p15b { padding-bottom:15px!important } .es-m-p15r { padding-right:15px!important } .es-m-p15l { padding-left:15px!important } .es-m-p20 { padding:20px!important } .es-m-p20t { padding-top:20px!important } .es-m-p20r { padding-right:20px!important } .es-m-p20l { padding-left:20px!important } .es-m-p25 { padding:25px!important } .es-m-p25t { padding-top:25px!important } .es-m-p25b { padding-bottom:25px!important } .es-m-p25r { padding-right:25px!important } .es-m-p25l { padding-left:25px!important } .es-m-p30 { padding:30px!important } .es-m-p30t { padding-top:30px!important } .es-m-p30b { padding-bottom:30px!important } .es-m-p30r { padding-right:30px!important } .es-m-p30l { padding-left:30px!important } .es-m-p35 { padding:35px!important } .es-m-p35t { padding-top:35px!important } .es-m-p35b { padding-bottom:35px!important } .es-m-p35r { padding-right:35px!important } .es-m-p35l { padding-left:35px!important } .es-m-p40 { padding:40px!important } .es-m-p40t { padding-top:40px!important } .es-m-p40b { padding-bottom:40px!important } .es-m-p40r { padding-right:40px!important } .es-m-p40l { padding-left:40px!important } }
      </style>
   </head>
   <body style="width:100%;font-family:arial, 'helvetica neue', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
      <div class="es-wrapper-color" style="background-color:#F9F4FF">
         <table class="es-wrapper" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-image:url(https://gefuxh.stripocdn.email/content/guids/CABINET_b5bfed0b11252243ebfb1c00df0e3977/images/rectangle_171_3.png);background-repeat:repeat;background-position:center top;background-color:#F9F4FF" width="100%" cellspacing="0" cellpadding="0" background="https://gefuxh.stripocdn.email/content/guids/CABINET_b5bfed0b11252243ebfb1c00df0e3977/images/rectangle_171_3.png">
            <tr>
               <td valign="top" style="padding:0;Margin:0">
                  <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                     <tr>
                        <td align="center" style="padding:0;Margin:0">
                           <table class="es-header-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px">
                              <tr>
                                 <td align="left" style="Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;padding-bottom:40px">
                                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                       <tr>
                                          <td align="left" style="padding:0;Margin:0;width:560px">
                                             <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                   <td style="padding:0;Margin:0;font-size:0px" align="center"><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#666666;font-size:14px"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
  <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
</svg></a></td>
                                                </tr>
                                             </table>
                                          </td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
                  <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                     <tr>
                        <td align="center" style="padding:0;Margin:0">
                           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B1B1B;width:600px">
                              <tr>
                                 <td align="left" style="Margin:0;padding-top:30px;padding-bottom:30px;padding-left:40px;padding-right:40px">
                                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                       <tr>
                                          <td valign="top" align="center" style="padding:0;Margin:0;width:520px">
                                             <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                   <td class="es-m-txt-c" align="center" style="padding:0;Margin:0;padding-top:20px;padding-bottom:20px">
                                                      <h1 style="Margin:0;mso-line-height-rule:exactly;font-family:Poppins, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#E9E9E9"><strong>$subject</strong></h1>
                                                   </td>
                                                </tr>
                                             </table>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td valign="top" align="center" style="padding:0;Margin:0;width:520px">
                                             <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-width:2px;border-style:solid;border-color:#4ca2f8;border-radius:20px;background-image:url(https://gefuxh.stripocdn.email/content/guids/CABINET_9aa36f49cdb5185ad35ee0f7a5c7d9380ade3ae69ada3493ecaa145d1284bee9/images/group_347_1.png);background-repeat:no-repeat;background-position:left center" width="100%" cellspacing="0" cellpadding="0" background="https://gefuxh.stripocdn.email/content/guids/CABINET_9aa36f49cdb5185ad35ee0f7a5c7d9380ade3ae69ada3493ecaa145d1284bee9/images/group_347_1.png" role="presentation">
                                                <tr>
                                                   <td class="es-m-p20r es-m-p20l" align="left" style="padding:40px;Margin:0">
                                                      <div style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Poppins, sans-serif;line-height:24px;color:#E9E9E9;font-size:16px">$message</div>
                                                   </td>
                                                </tr>
                                             </table>
                                          </td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                              <tr>
                                 <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:40px;padding-right:40px">
                                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                       <tr>
                                          <td valign="top" align="center" style="padding:0;Margin:0;width:520px">
                                             <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                   <td align="center" style="padding:0;Margin:0;padding-bottom:20px">
                                                     <span class="msohide es-button-border" style="border-style:solid;border-color:#2CB543;background:#4CA2F8;border-width:0px;display:block;border-radius:30px;width:auto;mso-hide:all"><a href="https://$sitedomain" class="es-button msohide es-button-1" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#4CA2F8;border-width:15px 5px;display:block;background:#4CA2F8;border-radius:30px;font-family:Poppins, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;mso-hide:all"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> Online Banking</a></span><!--<![endif]-->
                                                   </td>
                                                </tr>
                                             </table>
                                          </td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
                  <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                     <tr>
                        <td align="center" style="padding:0;Margin:0">
                           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B1B1B;width:600px">
                              <tr>
                                 <td style="padding:0;Margin:0;padding-top:20px;padding-left:40px;padding-right:40px;background-image:url(https://gefuxh.stripocdn.email/content/guids/CABINET_b5bfed0b11252243ebfb1c00df0e3977/images/20347363_v1072014converted_1_GkL.png);background-repeat:no-repeat;background-position:right top" background="https://gefuxh.stripocdn.email/content/guids/CABINET_b5bfed0b11252243ebfb1c00df0e3977/images/20347363_v1072014converted_1_GkL.png" align="left">
                                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                       <tr>
                                          <td valign="top" align="center" style="padding:0;Margin:0;width:520px">
                                             <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                   <td class="es-m-p0r es-m-p0l" align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:40px;padding-right:40px">
                                                      <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Poppins, sans-serif;line-height:24px;color:#E9E9E9;font-size:16px">$sitename,<br><strong>Support team</strong></p>
                                                   </td>
                                                </tr>
                                             </table>
                                          </td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="es-m-p40l" align="left" style="padding:0;Margin:0;padding-left:20px;padding-bottom:40px;padding-right:40px">
                                    <!--[if mso]>
                                    <table style="width:540px" cellpadding="0" cellspacing="0">
                                       <tr>
                                          <td style="width:46px" valign="top">
                                             <![endif]-->
                                             <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                                                <tr class="es-mobile-hidden">
                                                   <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:46px">
                                                      <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tr>
                                                            <td height="40" align="center" style="padding:0;Margin:0"></td>
                                                         </tr>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </table>
                                             <!--[if mso]>
                                          </td>
                                          <td style="width:10px"></td>
                                          <td style="width:484px" valign="top">
                                             <![endif]-->
                                             <table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                                                <tr>
                                                   <td align="left" style="padding:0;Margin:0;width:484px">
                                                      <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tr>
                                                            <td style="padding:0;Margin:0">
                                                               <table class="es-menu" width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                                  <tr class="links-images-left">
                                                                     <td style="padding:0;Margin:0;padding-right:5px;padding-top:0px;padding-bottom:5px;border:0" id="esd-menu-id-0" width="100%" valign="top" align="left"><a target="_blank" href="" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;font-family:Poppins, sans-serif;color:#E9E9E9;font-size:16px"><img src="https://gefuxh.stripocdn.email/content/guids/CABINET_b5bfed0b11252243ebfb1c00df0e3977/images/envelope.png" alt="support@$sitedomain" title="support@$sitedomain" width="20" align="absmiddle" style="display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:15px;vertical-align:middle">support@$sitedomain</a></td>
                                                                  </tr>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </table>
                                             <!--[if mso]>
                                          </td>
                                       </tr>
                                    </table>
                                    <![endif]-->
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
                  <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                     <tr>
                        <td align="center" style="padding:0;Margin:0">
                           <table class="es-footer-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px">
                              <tr>
                                 <td style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#77c82a" bgcolor="#77c82a" align="left">
                                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                       <tr>
                                          <td align="left" style="padding:0;Margin:0;width:560px">
                                             <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                   <td style="padding:0;Margin:0;font-size:0" align="center">
                                                      <table class="es-table-not-adapt es-social" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                         <tr>
                                                            <td valign="top" align="center" style="padding:0;Margin:0;padding-right:40px"><a style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img title="Facebook" src="https://gefuxh.stripocdn.email/content/assets/img/social-icons/circle-white/facebook-circle-white.png" alt="Fb" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                                            <td valign="top" align="center" style="padding:0;Margin:0;padding-right:40px"><a style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img title="Twitter" src="https://gefuxh.stripocdn.email/content/assets/img/social-icons/circle-white/twitter-circle-white.png" alt="Tw" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                                            <td valign="top" align="center" style="padding:0;Margin:0;padding-right:40px"><a style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img title="Instagram" src="https://gefuxh.stripocdn.email/content/assets/img/social-icons/circle-white/instagram-circle-white.png" alt="Inst" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                                            <td valign="top" align="center" style="padding:0;Margin:0"><a style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px"><img title="Youtube" src="https://gefuxh.stripocdn.email/content/assets/img/social-icons/circle-white/youtube-circle-white.png" alt="Yt" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td>
                                                         </tr>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </table>
                                          </td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
                  <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
                     <tr>
                        <td align="center" style="padding:0;Margin:0">
                           <table class="es-footer-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center">
                              <tr>
                                 <td align="left" style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:40px;padding-right:40px">
                                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                       <tr>
                                          <td align="left" style="padding:0;Margin:0;width:520px">
                                             <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                                <tr>
                                                   <td class="es-m-txt-c" align="center" style="padding:0;Margin:0">
                                                      <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Poppins, sans-serif;line-height:18px;color:#333333;font-size:12px">6305, Pelican City, Montana, 59436,US <br></p>
                                                      <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Poppins, sans-serif;line-height:18px;color:#333333;font-size:12px"><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#333333;font-size:12px" href="">Unsubscribe</a></p>
                                                   </td>
                                                </tr>
                                             </table>
                                          </td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
         </table>
      </div>
   </body>
</html>
EOD;


if($err==""){
     
     
     
     
// Creating Mail Session
     
     $_SESSION['email_message'] = $email_message;
     $_SESSION['email_subject'] = $subject;
     $_SESSION['email_receiver'] = $email;
     $_SESSION['email_sendername'] = $sendername;
     $_SESSION['mail_fullname'] = $mail_fullname;
     


return true;
}

        echo $this->error = $this->mysqli->error;
        return false;
    }


	//////////////set admin login


public function resetpass($email,$sitename,$sitedomain,$BrowserInfo,$IpInfo) {
		 $email=esc($email);

		 $err="";
$res = $this->mysqli->query("SELECT * FROM users WHERE email='".$email."' || username='".$email."' || accountnumber='".$email."'");

	       if($email==""){$err="<li>Sorry the reset password field needs either your E-mail, Account ID or Username</li>";  $GLOBALS['re']=$err;} elseif($res->num_rows == 0) {$err="<li>Sorry We Do Not Have This Details With Us</li>";  $GLOBALS['re']=$err;}


					 if($err==""){
						 $number = mt_rand(100000, 999999);
						$number2 =  md5($number);
						 $res = $this->mysqli->query("SELECT * FROM users WHERE email='" . $email . "' || username='" .$email . "'");
						   $row = $res->fetch_array();
				$user= $row['username'];
				$fullname = ucfirst($row['firstname']).' '.ucfirst($row['lastname']);
				$userid= $row['userid'];

		   $phones= $row['phone'];
		   $email_to= $row['email'];
		 $datz = date('Y');
		 
		 $to = $row['email'];

$subject = $sitename.': New Login Password';

$headers = "From: no-reply@".$sitedomain."\r\n";
$headers .= "Reply-To: info@".$sitedomain."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$email_message = "<html>
<head>

<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
	/* FONTS */
    @media screen {
		@font-face {
		  font-family: 'Lato';
		  font-style: normal;
		  font-weight: 400;
		  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
		}
		
		@font-face {
		  font-family: 'Lato';
		  font-style: normal;
		  font-weight: 700;
		  src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
		}
		
		@font-face {
		  font-family: 'Lato';
		  font-style: italic;
		  font-weight: 400;
		  src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
		}
		
		@font-face {
		  font-family: 'Lato';
		  font-style: italic;
		  font-weight: 700;
		  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
		}
    }
    
    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }

    /* RESET STYLES */
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    table { border-collapse: collapse !important; }
    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

    /* ANDROID CENTER FIX */
    div[style*='margin: 16px 0;'] { margin: 0 !important; }
</style>
</head>
<body style='background-color: #33cc33; margin: 0 !important; padding: 0 !important;'>

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
    <!-- LOGO -->
    <tr>
        <td bgcolor='#33cc33' align='center'>
            <table border='0' cellpadding='0' cellspacing='0' width='480' >
                <tr>
                    <td align='center' valign='top' style='padding: 40px 10px 40px 10px;'>
                        <a href='https://$sitedomain' target='_blank' style='text-transform: uppercase;'>
                           $sitename
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- HERO -->
    <tr>
        <td bgcolor='#33cc33' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='480' >
                <tr>
                    <td bgcolor='#ffffff' align='center' valign='top' style='padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;'>
                      <h1 style='font-size: 32px; font-weight: 400; margin: 0;'>Hey $fullname! Trouble Signing In?</h1>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- COPY BLOCK -->
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='480' >
              <!-- COPY -->
              <tr>
                <td bgcolor='#ffffff' align='left' style='padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;' >
                  <p style='margin: 0;'>We have made it easy for you and reset your password to access your account on $sitename easily. You password has been reset!!!</p>
                </td>
              </tr>
              <!-- BULLETPROOF BUTTON -->
              <tr>
                <td bgcolor='#ffffff' align='left'>
                  <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td bgcolor='#ffffff' align='center' style='padding: 20px 30px 60px 30px;'>
                        <table border='0' cellspacing='0' cellpadding='0'>
                          <tr>
                              <td align='center' style='border-radius: 3px;' bgcolor='red'><a href='https://$sitedomain/login' target='_blank' style='font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #000; display: inline-block;'>Your Password Is: $number</a></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
        </td>
    </tr>
    <!-- COPY CALLOUT -->
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='480' >
                <!-- HEADLINE -->
                <tr>
                  <td bgcolor='#111111' align='left' style='padding: 40px 30px 20px 30px; color: #ffffff; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;' >
                    <h2 style='font-size: 24px; font-weight: 400; margin: 0;'>Unable to click on the button above?</h2>
                  </td>
                </tr>
                <!-- COPY -->
                <tr>
                  <td bgcolor='#111111' align='left' style='padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;' >
                    <p style='margin: 0;'>Click on the link below and copy your password, and paste in the address bar.</p>
                  </td>
                </tr>
                <!-- COPY -->
                <tr>
                  <td bgcolor='#111111' align='left' style='padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;' >
                    <p style='margin: 0;'><a href='https://$sitedomain/contact' target='_blank' style='color: #33ff33; text-decoration: none;'>Need New Account? sign Up Here</a></p>
                  </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- SUPPORT CALLOUT -->
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 30px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='480' >
                <!-- HEADLINE -->
                <tr>
                  <td bgcolor='#C6C2ED' align='center' style='padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;' >
                    <h2 style='font-size: 20px; font-weight: 400; color: #111111; margin: 0;'>Need more help?</h2>
                    <p style='margin: 0;'><a href='mailto:info@$sitedomain' target='_blank' style='color: #7c72dc; text-decoration: none;'>We&rsquo;re here, Mail Us</a></p>
                  </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- FOOTER -->
    <tr>
        <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
            <table border='0' cellpadding='0' cellspacing='0' width='480' >
              
              <!-- PERMISSION REMINDER -->
              <tr>
                <td bgcolor='#f4f4f4' align='left' style='padding: 0px 30px 30px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;' >
                  <p style='margin: 0;'>You received this email because you requested a password reset. If you did not, <a href='https://$sitedomain/contact' target='_blank' style='color: #111111; font-weight: 700; text-decoration: none;'>Please contact us.</a>.</p>
                </td>
              </tr>
              
              <!-- ADDRESS -->
              <tr>
                <td bgcolor='#f4f4f4' align='left' style='padding: 0px 30px 30px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;' >
                  <p style='margin: 0; text-align: center;'>&copy; $datz, $sitename.. All Right Reserved</p>
                </td>
              </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
";
			
    if($this->mysqli->query("UPDATE users SET "
                . "realpassword='".$number."',"
                . "password='".$number2."'"
               
                . " WHERE userid='".$userid."'")) {

					 	  mail($to, $subject, $email_message, $headers);

    return true;


					 }}

        return false;
    }


	
	
public function add_wallet($type,$wallet,$pics_temp1,$pics_type1,$pics_size1,$post_pics1) { $err="";
		 
	 $walletid = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 $wallet = strip_tags(trim($wallet));
	 $wallet = preg_replace("/[^a-zA-Z0-9]/", "", $wallet);
	 
	 
	 if($post_pics1!=""){$post_pics1=$walletid."-".$post_pics1;
	 
	 
  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $post_pics1) ) {$err="<li>Invalid Wallet QR Code Image."; $GLOBALS['imgerr1']=$err;}
	
	} else { $err="<li>Wallet Wallet QR Code Image is Compulsory."; $GLOBALS['imgerr1']=$err;}
	
 

$check_email = $this->mysqli->query("SELECT * FROM wallets WHERE wallet = '".$wallet."' AND type = '".$type."'");
		$fiel_cnt = $check_email->num_rows; 
	
	if (empty($type)){$err="<li>Wallet Address type field must be selected.</li>";  $GLOBALS['imgerr1']=$err;}
	
			  	   
						 if(!isset($post_pics1)){$err="<li>Image 1 is compulsory </li>";  $GLOBALS['imgerr1']=$err;}		
					 if ( strlen($wallet)<20 || strlen($wallet)>60){$err="<li>This Wallet is not Valid</li>";  $GLOBALS['imgerr1']=$err;}
					 if ( $wallet==""){$err="<li>Wallet Address cannot be empty</li>";  $GLOBALS['imgerr1']=$err;}
                     if( $fiel_cnt > 0) {$err="<li>This wallet address was already added</li>";  $GLOBALS['imgerr1']=$err;}
					 
					 
					 
if($err=="" ){
	
	$userid = $_SESSION['user']['userid'];

if($this->mysqli->query("INSERT INTO wallets(walletid, wallet, type, img, updated, updated_by) VALUES("
				. "'" .$walletid. "',"
				. "'" .$wallet. "',"
				. "'" .$type. "',"
				. "'".$post_pics1."',"
				. "now(),"
				. "'" .$userid. "'"
		
                 . ")")) {	
				 
				 		 
			
				 if($post_pics1!=""){move_uploaded_file($pics_temp1, '../images/'.$post_pics1);}
						
            return true;
			
	
	}
		
    }                               

        
        echo $this->error = $this->mysqli->error;
        return false;
    }
	
	
	

	
public function add_category ($category) { $err="";

$slug = strtolower($category);
	$category = esc($category);
	$slug = esc($slug);
		

		$check_email = $this->mysqli->query("SELECT * FROM category WHERE title = '".$category."'");
		$field_cnt = $check_email->num_rows;


if (empty($category)){$err="<li>Category Field is Required</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This Category name Already Exist on Nagornet</li>";  $GLOBALS['pc_err']=$err;}
		


			  if($err==""){
				
        if($this->mysqli->query("INSERT INTO category(title,slug) VALUES("
                . "'" . $category . "',"
                . "'" . $slug. "'"
    . ")")) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
public function add_bill ($userid,$amount,$billname,$sitename,$sitedomain) { $err="";


	$amount = esc(trim(strip_tags($amount)));
	$billname = esc(trim(strip_tags($billname)));
	

	
		$check_email = $this->mysqli->query("SELECT * FROM bills WHERE userid = '".$userid."' AND (amount = '".$amount."') AND (name = '".$billname."')");
		$field_cnt = $check_email->num_rows;


if (empty($amount)){$err="<li>Bill amount is Required</li>"; $GLOBALS['pn_err']=$err;}
if (empty($billname)){$err="<li>Bill name is Required</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This bill already exist on your bills</li>";  $GLOBALS['pc_err']=$err;}
		
$billid = mt_rand(1000000, 9999999);

			  if($err==""){
				
        if($this->mysqli->query("INSERT INTO bills(userid, billid, amount, name) VALUES("
                . "'" . $userid . "',"
                . "'" . $billid . "',"
                . "'" . $amount . "',"
                . "'" . $billname. "'"
    . ")")) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
public function add_goal ($userid,$amount,$name,$goalpercent,$category,$sitename,$sitedomain) { $err="";


	$amount = esc(trim(strip_tags($amount)));
	$billname = esc(trim(strip_tags($name)));
	$goalpercent = esc(trim(strip_tags($goalpercent)));
	

	
		$check_email = $this->mysqli->query("SELECT * FROM goals WHERE userid = '".$userid."' AND (amount = '".$amount."') AND (name = '".$billname."')");
		$field_cnt = $check_email->num_rows;


if (empty($amount)){$err="<li>Goal amount is Required</li>"; $GLOBALS['pn_err']=$err;}
if (empty($billname)){$err="<li>Goal name is Required</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This Goal already exist on your Goals</li>";  $GLOBALS['pc_err']=$err;}
		
$goalid = mt_rand(1000000, 9999999);

			  if($err==""){
				
        if($this->mysqli->query("INSERT INTO goals(goalid, userid, amount, name, goalpercent, category) VALUES("
                . "'" . $goalid . "',"
                . "'" . $userid . "',"
                . "'" . $amount . "',"
                . "'" . $billname . "',"
                . "'" . $goalpercent . "',"
                . "'" . $category. "'"
    . ")")) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	

	
public function update_category ($id,$category) { $err=""; 
$slug = strtolower($category);
	$category = esc($category);
	$slug = esc($slug);
		

		$check_email = $this->mysqli->query("SELECT * FROM category WHERE title = '".$category."' and id!='".$id."'");
		$field_cnt = $check_email->num_rows;


if (empty($category)){$err="<li>Title Cannot be Empty</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This Category name Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		


			  if($err==""){
				
          if($this->mysqli->query("UPDATE category SET "
                . "title='" .$category . "',"
				 . "slug='" .$slug . "'"
                . " WHERE id=" . $id)) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	
public function update_transaction ($thetransid,$amount,$type,$status,$name,$bankname,$date,$ip,$browser,$description) { $err=""; 

$amount = esc(trim(strip_tags($amount)));
$name = esc(trim(strip_tags($name)));
$bankname = esc(trim(strip_tags($bankname)));
$date = esc(trim(strip_tags($date)));
$ip = esc(trim(strip_tags($ip)));
$browser = esc(trim(strip_tags($browser)));
$description = esc(trim(strip_tags($description)));

		

if (empty($type)){$err="<li>Select the transaction type</li>"; $GLOBALS['pn_err']=$err;}
if (empty($status)){$err="<li>Select the transaction status</li>"; $GLOBALS['pn_err']=$err;}
if (empty($amount)){$err="<li>Transaction amount cannot be empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($name)){$err="<li>Transaction name cannot be empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($bankname)){$err="<li>Transaction bank name cannot be empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($date)){$err="<li>Transaction date cannot be empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($description)){$err="<li>Transaction description cannot be empty</li>"; $GLOBALS['pn_err']=$err;}
			



if($err==""){
				
          if($this->mysqli->query("UPDATE transactions SET "
                . "amount='" .$amount . "',"
                . "type='" .$type . "',"
                . "status='" .$status . "',"
                . "name='" .$name . "',"
                . "bankname='" .$bankname . "',"
                . "date='" .$date . "',"
                . "ip='" .$ip . "',"
                . "browser='" .$browser . "',"
				 . "description='" .$description . "'"
                . " WHERE transactionid=" . $thetransid)) {
					
            return true;
        }}

        echo $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
public function delete_category($id) {
        if($this->mysqli->query("DELETE FROM category WHERE id=" . $id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
    
public function bank_ticket ($userid,$amount,$content,$ticketid,$sitename,$sitedomain,$webmail_email,$webmail_email_password,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo) {
    
    $mail = new PHPMailer(true);
    
    $err=""; 

// Selct user or Fetching user details

$result = $this->mysqli->query("SELECT * FROM users WHERE userid='".$userid."' ");
							 $ro = $result->fetch_array();
							  $bankname=$ro['bankname'];
							  
// Selct user or Fetching user details

$amount = preg_replace('/[^0-9\ ]/', '', $amount);
$content = esc(trim(strip_tags($content)));


if ($amount=="" || $content==""){$err="<li>Fill in the deposited amount and describe the deposit method in brief.</li>"; $GLOBALS['pn_err']=$err;}



if($err==""){
    $amountz = number_format($amount);
$subject = 'Your Bank Deposit Ticket ['.$ticketid.'] Has Been Opened';
$title = 'Bank Deposit Ticket - '.$ticketid;
$status ='pending';
$genewallet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$serial = substr(str_shuffle($genewallet), 0, 25);
$ticketkey = mt_rand(100000,999999).''.mt_rand(100000,999999).''.mt_rand(100000,999999);
$type = 'deposit';
$section ='Bank Deposit';

$email = $ro['email'];
$username = $ro['username'];
$fullname = $ro['firstname'].' '.$ro['lastname'];
$fullname = ucwords($fullname);

$firstname = ucwords($ro['firstname']);
$dhat = time();
$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$userbro = ucwords($_SESSION['user']['username']);
$datez = date("Y");


$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your Bank deposit ticket $ticketid has been opened.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$bankname</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $firstname, Your bank deposit ticket has been opened</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">The deposit ticket of $amountz into your account has been opened!<br /><br /><span style="color: red; font-weight: bold; font-size: 30px; display: block; text-align: center;">Your Ticket ID is $ticketid</span><br />
                      <b>NOTE:</b> If you don't deposit such amount at this time, Kindly Contact us to secure your account or ignore the ticket mail, It will be closed automatically after 3 days!
                     </p></td> 
                     </tr>  
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">TICKET DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Ticket ID:</b> $ticketid<br /><b>Subject:</b> Bank Deposit Confirmation<br /><b>Amount:</b> $sitecurrencysym$amountz<br /><b>Status:</b> Pending<br /><b>Message:</b> $content
					  </p></td> 
                     </tr>
                     
					</table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't make any deposit, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $bankname</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>
EOD;

      
      //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->Host       = $sitedomain;  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;    
                
                $mail->isSMTP();
                $mail->SMTPKeepAlive = true;
                $mail->Username   = $webmail_email;                     // SMTP username
                $mail->Password   = $webmail_email_password;                               // SMTP password
                $mail->SMTPSecure = 'ssl';                               // Enable TLS encryption, `ssl` also accepted or 'tls'
                $mail->Port       = 465;
                $mail->setFrom($webmail_email, $bankname);
                $mail->addAddress($email, $fullname); 
                // Content
                $mail->isHTML(true);      
                $mail->Subject = $subject;
                $mail->Body = $email_message;
                $mail->send();
            

// Updating Table
 
 
 $typez ='credit';
$via ='Account';

// Transaction

$transactionid = mt_rand(1000000,9999999);

if($this->mysqli->query("INSERT INTO transactions(userid, transactionid, amount, type, status, action, name, ip, browser, transaction_serial, description, bankname, transkey, category) VALUES("
               . "'".$userid."',"
                . "'".$transactionid."',"
                . "'".$amount."',"
                . "'".$typez."',"
                . "'".$status."',"
                . "'".$typez."',"
                . "'".$fullname."',"
                . "'".$IpInfo."',"
                . "'".$BrowserInfo."',"
                . "'".$serial."',"
                . "'".$content."',"
                . "'".$bankname."',"
                . "'".$ticketid."',"
                . "'".$via."'"
 . ")"))
 
			      
if($this->mysqli->query("INSERT INTO tickets(title, userid, ticketid, ticketkey, amount, type, subject, section, content, status, serial) VALUES("
                . "'" . $title . "',"
                . "'" . $userid . "',"
                . "'" . $ticketid . "',"
                . "'" . $ticketkey . "',"
                . "'" . $amount . "',"
                . "'" . $type . "',"
                . "'" . $subject . "',"
                . "'" . $section . "',"
                . "'" . $content . "',"
                . "'" . $status . "',"
                . "'" . $serial . "'"
    . ")")) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }

public function loan ($userid,$amount,$duration,$purpose,$loanid,$sitename,$sitedomain,$webmail_email,$webmail_email_password,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo,$kyc,$loanaccess) {
    
    $mail = new PHPMailer(true);
    
    $err=""; 

// Selct user or Fetching user details

$result = $this->mysqli->query("SELECT * FROM users WHERE userid='".$userid."' ");
							 $ro = $result->fetch_array();
							  $bankname=$ro['bankname'];
							  $mycurrencysym=$ro['mycurrencysym'];
							  
// Selct user or Fetching user details

$amount = preg_replace('/[^0-9\ ]/', '', $amount);
$purpose = esc(trim(strip_tags($purpose)));


if ($amount=="" || $duration=="" || $purpose==""){$err="<li>Fill in the loan amount and tell us the loan purpose in brief.</li>"; $GLOBALS['pn_err']=$err;}


$check_emails = $this->mysqli->query("SELECT * FROM loan WHERE userid = '".$userid."' AND status='pending'");
		$field_cnt2 = $check_emails->num_rows;

$check_email = $this->mysqli->query("SELECT * FROM loan WHERE amount = '".$title."' AND userid = '".$userid."'");
		$field_cnt = $check_email->num_rows;
		
	if($field_cnt>0){
	 $err="<li>You have applied for this loan ealier.</li>"; $GLOBALS['pn_err']=$err;   
	}
	
	
	if($kyc!=='verified'){
	 $err="<li>You need to verify your KYC before you can apply for loan.</li>"; $GLOBALS['pn_err']=$err;   
	}
	
	if($loanaccess!=='yes'){
	 $err="<li>You are not eligible to apply for loan at the moment, contact our support for more information.</li>"; $GLOBALS['pn_err']=$err;   
	}
	
	
	if($field_cnt2>0){
	 $err="<li>You still have a pending loan, you cannot apply for now, kindly wait for the outcome of your pending loan.</li>"; $GLOBALS['pn_err']=$err;   
	}
		

if($err==""){
    $amountz = number_format($amount);
$subject = 'Your Quick Loan Request ['.$loanid.'] Has Been Opened';
$title = 'Quick Loan Request - '.$loanid;
$status ='pending';
$genewallet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$serial = substr(str_shuffle($genewallet), 0, 25);
$type = 'loan';
$section ='Quick Loan';

$email = $ro['email'];
$username = $ro['username'];
$fullname = $ro['firstname'].' '.$ro['lastname'];
$fullname = ucwords($fullname);

$firstname = ucwords($ro['firstname']);
$dhat = time();
$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$userbro = ucwords($_SESSION['user']['username']);
$datez = date("Y");


$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your Quick loan request $loanid has been opened.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$bankname</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $firstname, Your quick loan request has been submitted</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">Your quick loan request of $mycurrencysym$amountz into your account has been submitted and still pending, you will be notified once approved!<br /><br /><span style="color: red; font-weight: bold; font-size: 30px; display: block; text-align: center;">Your Loan ID is $loanid</span><br />
                      <b>NOTE:</b> If you don't request for such loan at this time, Kindly Contact us to secure your account or ignore the ticket mail, It will be closed automatically after 3 days!
                     </p></td> 
                     </tr>  
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">LOAN DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Loan ID:</b> $loanid<br /><b>Amount:</b> $mycurrencysym$amountz<br /><b>Status:</b> Pending<br /><b>Duration:</b> $duration<br /><b>Purpose:</b> $purpose
					  </p></td> 
                     </tr>
                     
					</table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't make any loan request, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $bankname</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>
EOD;

      
      //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->Host       = $sitedomain;  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;    
                
                $mail->isSMTP();
                $mail->SMTPKeepAlive = true;
                $mail->Username   = $webmail_email;                     // SMTP username
                $mail->Password   = $webmail_email_password;                               // SMTP password
                $mail->SMTPSecure = 'ssl';                               // Enable TLS encryption, `ssl` also accepted or 'tls'
                $mail->Port       = 465;
                $mail->setFrom($webmail_email, $bankname);
                $mail->addAddress($email, $fullname); 
                // Content
                $mail->isHTML(true);      
                $mail->Subject = $subject;
                $mail->Body = $email_message;
                $mail->send();
            


if($this->mysqli->query("INSERT INTO loan(userid, duration, amount, purpose, status, loanid, serial) VALUES("
               . "'".$userid."',"
                . "'".$duration."',"
                . "'".$amount."',"
                . "'".$purpose."',"
                . "'".$status."',"
                . "'".$loanid."',"
                . "'".$serial."'"
 . ")")){
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }

public function btc_ticket ($userid,$amount,$content,$ticketid,$sitename,$sitedomain,$webmail_email,$webmail_email_password,$sitecurrency,$sitecurrencysym,$BrowserInfo,$IpInfo) {
    
    $mail = new PHPMailer(true);
    
    $err=""; 

// Selct user or Fetching user details

$result = $this->mysqli->query("SELECT * FROM users WHERE userid='".$userid."' ");
							 $ro = $result->fetch_array();
							  $bankname=$ro['bankname'];
							  
// Selct user or Fetching user details

$amount = preg_replace('/[^.0-9\ ]/', '', $amount);
$content = esc(trim(strip_tags($content)));


if ($amount=="" || $content==""){$err="<li>Fill in the deposited bitcoin, e.g: 0.35266 and describe the deposit method in brief.</li>"; $GLOBALS['pn_err']=$err;}



if($err==""){
$subject = 'Your Bitcoin Deposit Ticket ['.$ticketid.'] Has Been Opened';
$title = 'Bitcoin Deposit Ticket - '.$ticketid;
$status ='pending';
$genewallet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$serial = substr(str_shuffle($genewallet), 0, 25);

$genewallet2 = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$serial2 = substr(str_shuffle($genewallet2), 0, 25);
$ticketkey = mt_rand(100000,999999).''.mt_rand(100000,999999).''.mt_rand(100000,999999);
$type = 'deposit';
$section ='Bitcoin Deposit';

$email = $ro['email'];
$username = $ro['username'];
$fullname = $ro['firstname'].' '.$ro['lastname'];
$fullname = ucwords($fullname);

$firstname = ucwords($ro['firstname']);
$dhat = time();
$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$userbro = ucwords($_SESSION['user']['username']);
$datez = date("Y");


$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your Bitcoin deposit ticket $ticketid has been opened.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$bankname</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $firstname, Your bitcoin deposit ticket has been opened</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">The deposit ticket of $amount BTC into your bank has been opened!<br /><br /><span style="color: red; font-weight: bold; font-size: 30px; display: block; text-align: center;">Your Ticket ID is $ticketid</span><br />
                      <b>NOTE:</b> If you don't deposit such amount at this time, Kindly Contact us to secure your account or ignore the ticket mail, It will be closed automatically after 3 days!
                     </p></td> 
                     </tr>  
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">TICKET DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Ticket ID:</b> $ticketid<br /><b>Subject:</b> Bitcoin Deposit Confirmation<br /><b>Amount:</b> $amount BTC<br /><b>Status:</b> Pending<br /><b>Message:</b> $content
					  </p></td> 
                     </tr>
                     
					</table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't make any deposit, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $bankname</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>
EOD;

      
      //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->Host       = $sitedomain;  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;    
                
                $mail->isSMTP();
                $mail->SMTPKeepAlive = true;
                $mail->Username   = $webmail_email;                     // SMTP username
                $mail->Password   = $webmail_email_password;                               // SMTP password
                $mail->SMTPSecure = 'ssl';                               // Enable TLS encryption, `ssl` also accepted or 'tls'
                $mail->Port       = 465;
                $mail->setFrom($webmail_email, $bankname);
                $mail->addAddress($email, $fullname); 
                // Content
                $mail->isHTML(true);      
                $mail->Subject = $subject;
                $mail->Body = $email_message;
                $mail->send();
            

// Updating Table

$getrate = "https://api.alternative.me/v2/ticker/?convert=USD";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

// BTC in USD
$result = $result['data'][1]['quotes']['USD']['price'];

$quantity = $amount;
$realamount = $quantity * $result;
$typez ='credit';
$via ='Account';

// Transaction

$transactionid = mt_rand(1000000,9999999);
$transactionid2 = mt_rand(1000000,9999999);

if($this->mysqli->query("INSERT INTO btc_transactions(userid, transactionid, amount, type, status, action, name, ip, browser, transaction_serial, description, bankname, transkey, category) VALUES("
               . "'".$userid."',"
                . "'".$transactionid2."',"
                . "'".$amount."',"
                . "'".$typez."',"
                . "'".$status."',"
                . "'".$typez."',"
                . "'".$fullname."',"
                . "'".$IpInfo."',"
                . "'".$BrowserInfo."',"
                . "'".$serial2."',"
                . "'".$content."',"
                . "'".$bankname."',"
                . "'".$ticketid."',"
                . "'".$via."'"
 . ")"))



if($this->mysqli->query("INSERT INTO transactions(userid, transactionid, amount, type, status, action, name, ip, browser, transaction_serial, description, bankname, transkey, category) VALUES("
               . "'".$userid."',"
                . "'".$transactionid."',"
                . "'".$realamount."',"
                . "'".$typez."',"
                . "'".$status."',"
                . "'".$typez."',"
                . "'".$fullname."',"
                . "'".$IpInfo."',"
                . "'".$BrowserInfo."',"
                . "'".$serial."',"
                . "'".$content."',"
                . "'".$bankname."',"
                . "'".$ticketid."',"
                . "'".$via."'"
 . ")"))
 
			      
if($this->mysqli->query("INSERT INTO tickets(title, userid, ticketid, ticketkey, btc_amount, amount, type, subject, section, content, status, serial) VALUES("
                . "'" . $title . "',"
                . "'" . $userid . "',"
                . "'" . $ticketid . "',"
                . "'" . $ticketkey . "',"
                . "'" . $amount . "',"
                . "'" . $realamount . "',"
                . "'" . $type . "',"
                . "'" . $subject . "',"
                . "'" . $section . "',"
                . "'" . $content . "',"
                . "'" . $status . "',"
                . "'" . $serial . "'"
    . ")")) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
    
    
    
    

    
  //////// GLOBAL CONFIGURATIONS BY KHODEX
  

  
public function update_settings ($sitename,$sitemail,$sitecolor,$sitedesc,$logo,$favicon,$thumb,$livechat,$sitecurrencysym,$sitecurrency,$minimumdeposit,$bankname,$preloader,$siteterms,$sitedomain,$livechaturl,$sitemail2,$withdraw_error,$transfer_error,$transfercode_name,$withdrawcode_name,$webmail_email,$webmail_email_password,$default_timezone) { $err=""; 


$sitename = esc(trim(strip_tags($sitename)));
$default_timezone = esc(trim($default_timezone));
$withdraw_error = esc(trim(strip_tags($withdraw_error)));
$transfer_error = esc(trim(strip_tags($transfer_error)));
$transfercode_name = esc(trim(strip_tags($transfercode_name)));
$withdrawcode_name = esc(trim(strip_tags($withdrawcode_name)));
$sitemail = esc(trim(strip_tags($sitemail)));
$sitecolor = esc(trim(strip_tags($sitecolor)));
$sitedesc = esc(trim(strip_tags($sitedesc)));
$webmail_email = esc(trim($webmail_email));
$webmail_email_password = esc(trim($webmail_email_password));
$logo = esc(trim($logo));
$favicon = esc(trim($favicon));
$thumb = esc(trim($thumb));
$livechat = trim($livechat);
$livechat = htmlentities($livechat);
$sitecurrencysym = esc(trim($sitecurrencysym));
$sitecurrency = esc(trim(strip_tags($sitecurrency)));
$minimumdeposit = esc(trim(strip_tags($minimumdeposit)));
$bankname = esc(trim(strip_tags($bankname)));
$sitemail2 = esc(trim(strip_tags($sitemail2)));
$siteterms = esc(trim($siteterms));
$livechaturl = esc(trim($livechaturl));
$sitedomain = esc(trim($sitedomain));


if ($webmail_email=="" || $webmail_email_password==""){$err="<li>Webmail and its password field is empty, they are required... Contact the Developer at webdeveloper1972@gmail.com on how to setup a webmail or login to your cPanel to create a webmail</li>"; $GLOBALS['pn_err']=$err;}

if ($withdraw_error=="" || $transfer_error==""){$err="<li>Withdrawal & Transfer error message field is empty, they are required</li>"; $GLOBALS['pn_err']=$err;}

if ($transfercode_name=="" || $withdrawcode_name==""){$err="<li>Withdrawal & Transfer code name field is empty, they are required</li>"; $GLOBALS['pn_err']=$err;}
if (empty($sitename)){$err="<li>Website Name Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($bankname)){$err="<li>Bank Name you Wanna use Cannot be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($logo)){$err="<li>Website Logo URL Link Cannot be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($favicon)){$err="<li>Website Thumbnail Icon URL Link Cannot be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($sitedesc)){$err="<li>Website Descirption Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($sitemail)){$err="<li>Website Email Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($sitecurrency)){$err="<li>Website Currency Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($preloader)){$err="<li>Preloader Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($sitecolor)){$err="<li>Website Color Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($sitedomain)){$err="<li>Website Domain Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($thumb)){$err="<li>Website Thumb Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (empty($default_timezone)){$err="<li>Website default timezone cannot be empty, to set the timezone of any country and state, <a href='https://www.php.net/manual/en/timezones.php' target='_blank'>Click Here now</a>.</li>"; $GLOBALS['pn_err']=$err;}
if (empty($sitecurrencysym)){$err="<li>Website Currency Symbol Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
			


			  if($err==""){
			      
			      $basez = '1';
				  
				
          if($this->mysqli->query("UPDATE settings SET "
. "default_timezone='" .$default_timezone . "',"
. "webmail_email='" .$webmail_email . "',"
. "webmail_email_password='" .$webmail_email_password . "',"
. "transfercode_name='" .$transfercode_name . "',"
. "withdrawcode_name='" .$withdrawcode_name . "',"
. "withdraw_error='" .$withdraw_error . "',"
. "transfer_error='" .$transfer_error . "',"
. "sitename='" .$sitename . "',"
. "sitemail='" .$sitemail . "',"
. "sitecolor='" .$sitecolor . "',"
. "logo='" .$logo . "',"
. "favicon='" .$favicon . "',"
. "thumb='" .$thumb . "',"
. "livechat='" .$livechat . "',"
. "sitecurrencysym='" .$sitecurrencysym . "',"
. "sitecurrency='" .$sitecurrency . "',"
. "minimumdeposit='" .$minimumdeposit . "',"
. "bankname='" .$bankname . "',"
. "preloader='" .$preloader . "',"
. "siteterms='" .$siteterms . "',"
. "sitedomain='" .$sitedomain . "',"
. "livechaturl='" .$livechaturl . "',"
. "sitemail2='" .$sitemail2 . "',"
. "sitedesc='" .$sitedesc . "'"
                . " WHERE id=" . $basez)) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

/////// ADD HELP

public function add_help ($title,$category,$content) { $err="";


$title = esc(trim($title));
	
	$content = esc(trim($content));
	$helpid = mt_rand(10000, 99999);

		$check_email = $this->mysqli->query("SELECT * FROM helps WHERE title = '".$title."'");
		$field_cnt = $check_email->num_rows;


if ($title=="" || $category=="" || $content==""){$err="<li>One or More field is Still Empty, All Fields are Required</li>"; $GLOBALS['pn_err']=$err;}

if (strlen($title)<10){$err="<li>Your Title is too Short</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This Help Article Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		
			  if($err==""){
				
        if($this->mysqli->query("INSERT INTO helps(title,category,helpid,content) VALUES("
                . "'" . $title . "',"
                . "'" . $category . "',"
                . "'" . $helpid . "',"
                . "'" . $content . "'"
    . ")")) {
		
		
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
    
    
    
    
    
    
// Confirm


public function confirm_transfer ($code,$transfercode,$thetransfercode_name,$userid,$sitemail) { $err="";

$code = esc(trim(strip_tags($code)));

if ($code !== $transfercode ){$err="<li>Invalid ".$thetransfercode_name.", Contact support: <a href='mailto:".$sitemail."'><b>".$sitemail."</b></a> for a valid ".$thetransfercode_name.".</li>";  $GLOBALS['pc_err']=$err;}
		
if($err==""){
			
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
    
	
	
public function confirm_withdrawal ($code,$withdrawcode,$thewithdrawcode_name,$userid,$sitemail) { $err="";

$code = esc(trim(strip_tags($code)));

if ($code !== $withdrawcode ){$err="<li>Invalid ".$thewithdrawcode_name.", Contact support: <a href='mailto:".$sitemail."'><b>".$sitemail."</b></a> for a valid ".$thewithdrawcode_name.".</li>";  $GLOBALS['pc_err']=$err;}
		
if($err==""){
			
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
    
public function update_help ($id,$title,$category,$content) { $err=""; 

$title = esc(trim($title));
	
	$content = esc(trim($content));
	
		$check_email = $this->mysqli->query("SELECT * FROM helps WHERE title = '".$title."' AND help!='".$id."'");
		$field_cnt = $check_email->num_rows;

if ($title=="" || $category=="" || $content==""){$err="<li>One or More field is Still Empty, All Fields are Required</li>"; $GLOBALS['pn_err']=$err;}


if (strlen($title)<10){$err="<li>Your Title is too Short</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This Help Article Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		


			  if($err==""){
				
          if($this->mysqli->query("UPDATE helps SET "
                . "category='" .$category . "',"
                . "title='" .$title . "',"
				 . "content='" .$content . "'"
                . " WHERE helpid=" . $id)) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	
	
	


public function add_page ($title,$image_temp,$image_type,$image_size,$image_name,$content) { $err="";


$title = esc($title);
$slug = strtolower($title);
$slug = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $slug);
		 $slug = preg_replace('/\s+/', '-', $slug);
		 $slug = preg_replace('/-+/', '-', $slug);
		 $slug = strtolower($slug);
		 $slug = trim($slug);
		 
	
	$content = esc($content);
	$number = mt_rand(100000, 999999);
	$pageid = mt_rand(10000, 99999);




$errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
$bytes = 5120;
$KB = 5120;
$totalBytes = $bytes * $KB;
$UploadFolder = "../images";



$image_name = preg_replace("/[^a-z-A-Z0-9.]/",'-',$image_name);
$image_name = preg_replace('/\-+/', '-', $image_name);
$image_name = strtolower($image_name);


	 if(!empty($image_name)){$image_name=$number."-".$image_name;
	 
	 
   if($image_size > $totalBytes)
    {
      $err="<li>The Page Image Exceeds Maximum Upload Size of 5MB."; $GLOBALS['imgerr1']=$err;
    }
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $image_name) ) {$err="<li>Inavlid Image 1 format."; $GLOBALS['imgerr2']=$err;}
	
	}else{
	    $image_name = '';
	}	

		$check_email = $this->mysqli->query("SELECT * FROM pages WHERE title = '".$title."'");
		$field_cnt = $check_email->num_rows;


if ($title=="" || $content=="" ){$err="<li>One or More field is Empty</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This Page name Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		


			  if($err==""){
				
        if($this->mysqli->query("INSERT INTO pages(title,slug,image,pageid,content) VALUES("
                . "'" . $title . "',"
                . "'" . $slug . "',"
                . "'" . $image_name . "',"
                . "'" . $pageid . "',"
                . "'" . $content. "'"
    . ")")) {
		
		if($image_name!=""){move_uploaded_file($image_temp, '../images/'.$image_name);}
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
public function update_page ($id,$title,$content) { $err=""; 

$title = esc($title);
$slug = strtolower($title);
$slug = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $slug);
		 $slug = preg_replace('/\s+/', '-', $slug);
		 $slug = preg_replace('/-+/', '-', $slug);
		 $slug = strtolower($slug);
		 $slug = trim($slug);
		 
	$content = esc($content);
	
		$check_email = $this->mysqli->query("SELECT * FROM pages WHERE title = '".$title."' AND pageid!='".$id."'");
		$field_cnt = $check_email->num_rows;


if ($content=="" || $title=="" ){$err="<li>One or more field is Empty</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This Page name already Exist</li>";  $GLOBALS['pc_err']=$err;}
		


			  if($err==""){
				
          if($this->mysqli->query("UPDATE pages SET "
                . "title='" .$title . "',"
                . "slug='" .$slug . "',"
				 . "content='" .$content . "'"
                . " WHERE pageid=" . $id)) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }





public function update_user ($thecity, $mycolor,$mycurrency,$mycurrencysym,$duserid,$username,$theemail,$gender,$balance,$balance2,$income,$expenses,$savings,$firstname,$lastname,$logincounts,$routing,$bankname,$state,$address,$country,$phone,$security,$pics_temp1,$pics_type1,$pics_size1,$post_pics1,$sitename,$sitedomain,$sitecurrencysym,$sitecurrency,$password,$banklogo,$logobackground,$mywithdraw_error,$mytransfer_error,$transfercode_name,$withdrawcode_name,$pendingbalance,$notice) { $err="";

 $pendingbalance = preg_replace("/[^0-9]/", "", $pendingbalance);
$username = esc(trim(strip_tags($username)));
$pendingbalance = esc(trim(strip_tags($pendingbalance)));
$notice = esc(trim(strip_tags($notice)));
$mywithdraw_error = esc(trim(strip_tags($mywithdraw_error)));
$mytransfer_error = esc(trim(strip_tags($mytransfer_error)));
$transfercode_name = esc(trim(strip_tags($transfercode_name)));
$withdrawcode_name = esc(trim(strip_tags($withdrawcode_name)));
$mycolor = trim(strip_tags(esc($mycolor)));
$mycurrency = trim(strip_tags(esc($mycurrency)));
$mycurrencysym = trim(esc($mycurrencysym));
$logobackground = trim(esc($logobackground));
$thecity = esc(trim(strip_tags($thecity)));
$banklogo = trim(esc($banklogo));
$theemail = esc(trim(strip_tags($theemail)));
$balance = esc(trim(strip_tags($balance)));
$balance2 = esc(trim(strip_tags($balance2)));
$income = esc(trim(strip_tags($income)));
$expenses = esc(trim(strip_tags($expenses)));
$savings = esc(trim(strip_tags($savings)));
$firstname = esc(trim(strip_tags($firstname)));
$lastname = esc(trim(strip_tags($lastname)));
$logincounts = esc(trim(strip_tags($logincounts)));
$routing = esc(trim(strip_tags($routing)));
$state = esc(trim(strip_tags($state)));
$bankname = esc(trim(strip_tags($bankname)));
$address = esc(trim(strip_tags($address)));
$phone = esc(trim(strip_tags($phone)));
$password = esc(trim(strip_tags($password)));



$result = $this->mysqli->query("SELECT * FROM users WHERE userid='".$duserid."' ");
							 $ro = $result->fetch_array();
							  $pics=$ro['pics'];
							  $theuserid=$ro['userid'];



$number_gen = mt_rand(100000,999999);
	
	$usernamez = preg_replace("/[^a-zA-Z0-9]/", "", $username);
	$slug = strtolower($usernamez);
	
	$imgEx1 = substr($post_pics1, strrpos($post_pics1, '.') + 1);

if(!empty($post_pics1)){$post_pics1= $slug."-".$number_gen.".".$imgEx1;
	
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $post_pics1) ) {$err="<li>Invalid Image format."; $GLOBALS['imgerr2']=$err;}
	
	}else{
		
		$post_pics1 = $pics;
		
	}
	

		
		if ($firstname=="" || $firstname==""){$err="<li>Full names are Required</li>"; $GLOBALS['pn_err']=$err;}
		if ($theemail=="" || $username==""){$err="<li>Email & Username Cannot be Left Empty</li>"; $GLOBALS['pn_err']=$err;}

		$check_email = $this->mysqli->query("SELECT * FROM users WHERE username = '".$username."' AND userid!='".$theuserid."'");
		$field_cnt = $check_email->num_rows;
		
		if(!filter_var($theemail, FILTER_VALIDATE_EMAIL)){$err="<li>This Email is Invalid</li>"; $GLOBALS['pn_err']=$err;}
		
		if(!empty($phone)){if (!preg_match("/^[0-9]*$/",$phone)){$err="<li>Invalid Mobile Number</li>"; $GLOBALS['pn_err']=$err;}}
		
if(!empty($income)){if (!preg_match("/^[0-9]*$/",$income)){$err="<li>Invalid Characters in Income Field</li>"; $GLOBALS['pn_err']=$err;}}
if(!empty($savings)){if (!preg_match("/^[0-9]*$/",$savings)){$err="<li>Invalid Characters in Savings Field</li>"; $GLOBALS['pn_err']=$err;}}
if(!empty($expenses)){if (!preg_match("/^[0-9]*$/",$expenses)){$err="<li>Invalid Characters in Expenses Field</li>"; $GLOBALS['pn_err']=$err;}}
if(!empty($logincounts)){if (!preg_match("/^[0-9]*$/",$logincounts)){$err="<li>Invalid Characters in Login Counts Field</li>"; $GLOBALS['pn_err']=$err;}}
		
		if(!empty($balance)){if (!preg_match("/^[0-9]*$/",$balance)){$err="<li>Invalid Characters in Checking Balance Field</li>"; $GLOBALS['pn_err']=$err;}}
		
		
		if(!empty($balance2)){if (!preg_match("/^[0-9]*$/",$balance2)){$err="<li>Invalid Characters in Savings Balance Field</li>"; $GLOBALS['pn_err']=$err;}}
		
		$check_email = $this->mysqli->query("SELECT * FROM users WHERE email = '".$theemail."' AND userid!='".$theuserid."'");
		$emailcount = $check_email->num_rows;


		$check_phone = $this->mysqli->query("SELECT * from users WHERE phone = '".$phone."' AND userid!='".$theuserid."'");
		$numbercount = $check_phone->num_rows;
		
if(empty($thecity)){
    $err="<li>City field is empty</li>"; $GLOBALS['pn_err']=$err;
}

if ($theemail==""  || $username==""){$err="<li>One or more field is empty</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This User's Profile Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		if(	$emailcount > 0) {$err="<li>User With This Email Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		
if(empty($logobackground)){
    $logobg = $mycolor;
}else{
    $logobg = $logobackground;
}

			  if($err==""){
				  
				  $phone = preg_replace("/[^0-9]/", "", $phone);
				  $income = preg_replace("/[^0-9]/", "", $income);
				  $savings = preg_replace("/[^0-9]/", "", $savings);
				  $expenses = preg_replace("/[^0-9]/", "", $expenses);
				  $logincounts = preg_replace("/[^0-9]/", "", $logincounts);
				  $balance = preg_replace("/[^0-9]/", "", $balance);
				  $balance2 = preg_replace("/[^0-9]/", "", $balance2);

$realpassword = $password;
$password = md5($realpassword);
$security = strtolower($security);

if(!empty($pendingbalance)){
    $pendingbalance= $pendingbalance.'.'.mt_rand(1,9);
}
				
          if($this->mysqli->query("UPDATE users SET "
                . "withdrawcode_name='" .$withdrawcode_name . "',"
                . "pendingbalance='" .$pendingbalance . "',"
                . "notice='" .$notice . "',"
                . "city='" .$thecity . "',"
                . "transfercode_name='" .$transfercode_name . "',"
                . "mytransfer_error='" .$mytransfer_error . "',"
                . "mywithdraw_error='" .$mywithdraw_error . "',"
                . "realpassword='" .$realpassword . "',"
                . "banklogo='" .$banklogo . "',"
                . "logobackground='" .$logobg . "',"
                . "password='" .$password . "',"
                . "username='" .$username . "',"
                . "mycolor='" .$mycolor . "',"
                . "mycurrency='" .$mycurrency . "',"
                . "mycurrencysym='" .$mycurrencysym . "',"
                . "email='" .$theemail . "',"
                . "balance='" .$balance . "',"
                . "balance2='" .$balance2 . "',"
                . "gender='" .$gender . "',"
                . "income='" .$income . "',"
                . "expenses='" .$expenses . "',"
                . "savings='" .$savings . "',"
                . "firstname='" .$firstname . "',"
                . "lastname='" .$lastname . "',"
                . "logincounts='" .$logincounts . "',"
                . "routing='" .$routing . "',"
                . "bankname='" .$bankname . "',"
                . "state='" .$state . "',"
                . "address='" .$address . "',"
                . "country='" .$country . "',"
                . "phone='" .$phone . "',"
                . "pics='" .$post_pics1 . "',"
                . "security='" .$security . "'"
    

                . " WHERE userid=" . $theuserid)) {
					
					
					if($pics_temp1!=""){move_uploaded_file($pics_temp1, '../doc/images/'.$post_pics1);}
					
            return true;
			
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
public function update_myprofile ($duserid,$city,$theemail,$gender,$income,$expenses,$savings,$firstname,$lastname,$state,$address,$country,$phone,$security,$sitename,$sitedomain) { $err="";

 
 
 

$city = esc(trim(strip_tags($city)));
$theemail = esc(trim(strip_tags($theemail)));
$income = esc(trim(strip_tags($income)));
$expenses = esc(trim(strip_tags($expenses)));
$savings = esc(trim(strip_tags($savings)));
$firstname = esc(trim(strip_tags($firstname)));
$lastname = esc(trim(strip_tags($lastname)));
$state = esc(trim(strip_tags($state)));
$address = esc(trim(strip_tags($address)));
$phone = esc(trim(strip_tags($phone)));



$result = $this->mysqli->query("SELECT * FROM users WHERE userid='".$duserid."' ");
							 $ro = $result->fetch_array();
							  
							  $theuserid=$ro['userid'];
$username = $ro['username'];


$number_gen = mt_rand(100000, 999999);
	

	if ($firstname=="" || $firstname==""){$err="<li>Full names are Required</li>"; $GLOBALS['pn_err']=$err;}
		if ($theemail=="" || $username==""){$err="<li>Email & Username Cannot be Left Empty</li>"; $GLOBALS['pn_err']=$err;}

		$check_email = $this->mysqli->query("SELECT * FROM users WHERE username = '".$username."' AND userid!='".$theuserid."'");
		$field_cnt = $check_email->num_rows;
		
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $theemail)){$err="<li>This Email is Invalid</li>"; $GLOBALS['pn_err']=$err;}
		
		if(!empty($phone)){if (!preg_match("/^[0-9]*$/",$phone)){$err="<li>Invalid Mobile Number</li>"; $GLOBALS['pn_err']=$err;}}
		
if(!empty($income)){if (!preg_match("/^[0-9]*$/",$income)){$err="<li>Invalid Characters in Income Field</li>"; $GLOBALS['pn_err']=$err;}}
if(!empty($savings)){if (!preg_match("/^[0-9]*$/",$savings)){$err="<li>Invalid Characters in Savings Field</li>"; $GLOBALS['pn_err']=$err;}}
if(!empty($expenses)){if (!preg_match("/^[0-9]*$/",$expenses)){$err="<li>Invalid Characters in Expenses Field</li>"; $GLOBALS['pn_err']=$err;}}
if(empty($city)){
    $err="<li>City field is empty</li>"; $GLOBALS['pn_err']=$err;
}	
		
		
		$check_email = $this->mysqli->query("SELECT * FROM users WHERE email = '".$theemail."' AND userid!='".$theuserid."'");
		$emailcount = $check_email->num_rows;


		$check_phone = $this->mysqli->query("SELECT * from users WHERE phone = '".$phone."' AND userid!='".$theuserid."'");
		$numbercount = $check_phone->num_rows;
		


if ($theemail=="" || $username==""){$err="<li>One or more field is empty</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This User's Profile Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		if(	$emailcount > 0) {$err="<li>User With This Email Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		//if(	$numbercount > 0) {$err="<li>User WIth This Number Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		


			  if($err==""){
			      
			      $phone = preg_replace("/[^0-9]/", "", $phone);
				  $income = preg_replace("/[^0-9]/", "", $income);
				  $savings = preg_replace("/[^0-9]/", "", $savings);
				  $expenses = preg_replace("/[^0-9]/", "", $expenses);
				  

				
          if($this->mysqli->query("UPDATE users SET "
                . "email='" .$theemail . "',"
                . "city='" .$city . "',"
                . "gender='" .$gender . "',"
                . "income='" .$income . "',"
                . "expenses='" .$expenses . "',"
                . "savings='" .$savings . "',"
                . "firstname='" .$firstname . "',"
                . "lastname='" .$lastname . "',"
                . "state='" .$state . "',"
                . "address='" .$address . "',"
                . "country='" .$country . "',"
                . "phone='" .$phone . "',"
                . "security='" .$security . "'"
    

                . " WHERE userid=" . $theuserid)) {
					
					
					
					
            return true;
			
        }}

        $this->error = $this->mysqli->error;
        return false;
    }	
	
public function update_myprofile_admin ($city,$mycolor,$mycurrency,$mycurrencysym,$duserid,$username,$theemail,$gender,$income,$expenses,$savings,$firstname,$lastname,$logincounts,$routing,$banklogo,$bankname,$state,$address,$country,$phone,$security,$sitename,$sitedomain,$logobackground,$mywithdraw_error,$mytransfer_error,$transfercode_name,$withdrawcode_name,$pendingbalance,$notice) { $err="";

 
 
 
$pendingbalance = preg_replace("/[^0-9]/", "", $pendingbalance);

$city = esc(trim(strip_tags($city)));
$username = esc(trim(strip_tags($username)));
$pendingbalance = esc(trim(strip_tags($pendingbalance)));
$notice = esc(trim(strip_tags($notice)));
$transfercode_name = esc(trim(strip_tags($transfercode_name)));
$withdrawcode_name = esc(trim(strip_tags($withdrawcode_name)));
$mywithdraw_error = esc(trim(strip_tags($mywithdraw_error)));
$mytransfer_error = esc(trim(strip_tags($mytransfer_error)));
$logobackground = esc(trim(strip_tags($logobackground)));
$banklogo = esc(trim($banklogo));
$mycolor = trim(strip_tags(esc($mycolor)));
	$mycurrency = trim(strip_tags(esc($mycurrency)));
	$mycurrencysym = trim(esc($mycurrencysym));
$theemail = esc(trim(strip_tags($theemail)));
$income = esc(trim(strip_tags($income)));
$expenses = esc(trim(strip_tags($expenses)));
$savings = esc(trim(strip_tags($savings)));
$firstname = esc(trim(strip_tags($firstname)));
$lastname = esc(trim(strip_tags($lastname)));
$logincounts = esc(trim(strip_tags($logincounts)));
$routing = esc(trim(strip_tags($routing)));
$state = esc(trim(strip_tags($state)));
$bankname = esc(trim(strip_tags($bankname)));
$address = esc(trim(strip_tags($address)));
$phone = esc(trim(strip_tags($phone)));



$result = $this->mysqli->query("SELECT * FROM users WHERE userid='".$duserid."' ");
							 $ro = $result->fetch_array();
							  
							  $theuserid=$ro['userid'];



$number_gen = mt_rand(100000, 999999);
	
	if(empty($logobackground)){
	    $logobg = $mycolor;
	}else{
	    $logobg = $logobackground;
	}
	
	
	
	if ($firstname=="" || $firstname==""){$err="<li>Full names are Required</li>"; $GLOBALS['pn_err']=$err;}
		if ($theemail=="" || $username==""){$err="<li>Email & Username Cannot be Left Empty</li>"; $GLOBALS['pn_err']=$err;}

		$check_email = $this->mysqli->query("SELECT * FROM users WHERE username = '".$username."' AND userid!='".$theuserid."'");
		$field_cnt = $check_email->num_rows;
		
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $theemail)){$err="<li>This Email is Invalid</li>"; $GLOBALS['pn_err']=$err;}
		
		if(!empty($phone)){if (!preg_match("/^[0-9]*$/",$phone)){$err="<li>Invalid Mobile Number</li>"; $GLOBALS['pn_err']=$err;}}



if(empty($city)){
    $err="<li>City field is empty</li>"; $GLOBALS['pn_err']=$err;
}
if(!empty($income)){if (!preg_match("/^[0-9]*$/",$income)){$err="<li>Invalid Characters in Income Field</li>"; $GLOBALS['pn_err']=$err;}}
if(!empty($savings)){if (!preg_match("/^[0-9]*$/",$savings)){$err="<li>Invalid Characters in Savings Field</li>"; $GLOBALS['pn_err']=$err;}}
if(!empty($expenses)){if (!preg_match("/^[0-9]*$/",$expenses)){$err="<li>Invalid Characters in Expenses Field</li>"; $GLOBALS['pn_err']=$err;}}
if(!empty($logincounts)){if (!preg_match("/^[0-9]*$/",$logincounts)){$err="<li>Invalid Characters in Login Counts Field</li>"; $GLOBALS['pn_err']=$err;}}
		
		
		
		$check_email = $this->mysqli->query("SELECT * FROM users WHERE email = '".$theemail."' AND userid!='".$theuserid."'");
		$emailcount = $check_email->num_rows;


		$check_phone = $this->mysqli->query("SELECT * from users WHERE phone = '".$phone."' AND userid!='".$theuserid."'");
		$numbercount = $check_phone->num_rows;
		


if ($theemail==""  || $username==""){$err="<li>One or more field is empty</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This User's Profile Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		if(	$emailcount > 0) {$err="<li>User With This Email Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		//if(	$numbercount > 0) {$err="<li>User WIth This Number Already Exist</li>";  $GLOBALS['pc_err']=$err;}
		


			  if($err==""){
			      
			      if(!empty($pendingbalance)){
    $pendingbalance= $pendingbalance.'.'.mt_rand(1,9);
}
				  
				  $phone = preg_replace("/[^0-9]/", "", $phone);
				  $income = preg_replace("/[^0-9]/", "", $income);
				  $savings = preg_replace("/[^0-9]/", "", $savings);
				  $expenses = preg_replace("/[^0-9]/", "", $expenses);
				  $logincounts = preg_replace("/[^0-9]/", "", $logincounts);
				 

				
          if($this->mysqli->query("UPDATE users SET "
                . "transfercode_name='" .$transfercode_name . "',"
                . "city='" .$city . "',"
                . "pendingbalance='" .$pendingbalance . "',"
                . "notice='" .$notice . "',"
                 . "withdrawcode_name='" .$withdrawcode_name . "',"
                  . "username='" .$username . "',"
                . "mywithdraw_error='" .$mywithdraw_error . "',"
                . "mytransfer_error='" .$mytransfer_error . "',"
                . "logobackground='" .$logobg . "',"
                . "banklogo='" .$banklogo . "',"
                . "mycolor='" .$mycolor . "',"
                . "mycurrency='" .$mycurrency . "',"
                . "mycurrencysym='" .$mycurrencysym . "',"
                . "email='" .$theemail . "',"
                . "gender='" .$gender . "',"
                . "income='" .$income . "',"
                . "expenses='" .$expenses . "',"
                . "savings='" .$savings . "',"
                . "firstname='" .$firstname . "',"
                . "lastname='" .$lastname . "',"
                . "logincounts='" .$logincounts . "',"
                . "routing='" .$routing . "',"
                . "bankname='" .$bankname . "',"
                . "state='" .$state . "',"
                . "address='" .$address . "',"
                . "country='" .$country . "',"
                . "phone='" .$phone . "',"
                . "security='" .$security . "'"
    

                . " WHERE userid=" . $theuserid)) {
					
					
					
					
            return true;
			
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
////////////////////////////// UPDATE PROFILE ////////////////////////////////




public function update_email ($email,$formalemail,$BrowserInfo,$IpInfo,$sitename,$sitedomain) { $err=""; 

	$email = esc($email);
	$username = $_SESSION['user']['username'];
	$userid = $_SESSION['user']['userid'];
		

		$check_email = $this->mysqli->query("SELECT * FROM users WHERE username = '".$username."' and userid!='".$userid."'");
		$field_cnt = $check_email->num_rows;


if ($email==""){$err="<li>Email Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){$err="<li>This Email is Invalid</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This User's Profile already  exist</li>";  $GLOBALS['pc_err']=$err;}
		


			  if($err==""){
				
				$email = trim(strtolower($email));
				
          if($this->mysqli->query("UPDATE users SET "
                . "email='" .$email . "',"
                . "formalemail='" .$formalemail . "',"
				 . "email_changedate=now(),"
				 . "updated_at=now()"
				 
                . " WHERE userid=" . $userid)) {
                    
 $dhat = time();

$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$newDateTime = date('h:i A', strtotime($dhat));

$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$thetime = $newDateTime;

    $userbro = ucwords($_SESSION['user']['username']);
$emailz = $email.','.$formalemail;
$me = $email;
$datez = date("Y");
$to = $emailz;
$subject = $sitename.": E-Mail Change Notification";
$headers = "From: ".$sitename." Account <support@".$sitedomain.">\r\n";
$headers .= "Reply-To: account@".$sitedomain."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your $sitename Account Email was Changed! Get ready to dive into your new account.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$sitename</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $userbro, Your $sitename Account E-Mail was Changed @ $thetime on $thedate</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">This is a Profile Security notification, below are the info!<br />
                      <b>NOTE:</b> If you dont perform this action with this device at this time, Kindly Contact us to secure your account or Login with you Account ID and change your Email!
                      .</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                   
                   
                   <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px"><b>OLD EMAIL:</b> $formalemail<br />
                      <b>NEW EMAIL:</b> $me</p></td> 
                     </tr> 
                   
                   
                   
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">DEVICE DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Browser:</b> $BrowserInfo<br /><b>IP Address:</b> $IpInfo<br /><b>Date:</b> $thedate<br /><b>Time:</b> $thetime
					  </p></td> 
                     </tr>
                     
					 
					 <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:15px;padding-top:30px"><span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="https://$sitedomain/dashboard" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Secure account</a></span></td> 
                     </tr>
					 
					 
					 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't create an account using this email address, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $sitename</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>

EOD;

mail($to,$subject,$email_message,$headers);	
    
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
public function update_lang ($lang,$timezone,$BrowserInfo,$IpInfo) { $err=""; 

	$timezone = esc(trim($timezone));
	$lang = esc(trim($lang));
	
	$userid = $_SESSION['user']['userid'];
		
if ($lang==""){$err="<li>Language Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}

if ($timezone==""){$err="<li>Your Timezone Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}


		


			  if($err==""){
				
          if($this->mysqli->query("UPDATE users SET "
                . "lang='" .$lang . "',"
                . "timezone='" .$timezone . "',"
				 . "updated_at=now()"
				 
                . " WHERE userid=" . $userid)) {
    
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }	
public function notifications ($secure,$BrowserInfo,$IpInfo) { $err=""; 


	$username = $_SESSION['user']['username'];
	$userid = $_SESSION['user']['userid'];
		
		if(empty($secure)){
			$security ='';
		}else{
			$security ='yes';
		}

			  if($err==""){
				
			
				
          if($this->mysqli->query("UPDATE users SET "
                . "security='" .$security . "',"
                . "lastbrowser='" .$BrowserInfo . "',"
                . "lastip='" .$IpInfo . "',"
				 . "updated_at=now()"
				 
                . " WHERE userid=" . $userid)) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	
public function update_number ($number,$formalnumber,$BrowserInfo,$IpInfo,$sitename,$sitedomain) { $err=""; 

	$number = esc(trim($number));
	$username = $_SESSION['user']['username'];
	$userid = $_SESSION['user']['userid'];
	$email = $_SESSION['user']['email'];
		

		$check_email = $this->mysqli->query("SELECT * FROM users WHERE username = '".$username."' and userid!='".$userid."'");
		$field_cnt = $check_email->num_rows;


if ($number==""){$err="<li>Phone Number Cannot Be Empty</li>"; $GLOBALS['pn_err']=$err;}
if (strlen($number)>15){$err="<li>The Number is Invalid</li>"; $GLOBALS['msize_err']=$err;}
if (strlen($number)<5){$err="<li>The Number is Incomplete</li>"; $GLOBALS['msize_err']=$err;}

			if (!preg_match("/^[0-9]*$/",$number)){$err="<li>Invalid Mobile Number</li>"; $GLOBALS['pn_err']=$err;}
			
		if(	$field_cnt > 0) {$err="<li>This User's Profile already  exist</li>";  $GLOBALS['pc_err']=$err;}
		


			  if($err==""){
				
				$number = preg_replace("/[^0-9]/", "", $number);
				
          if($this->mysqli->query("UPDATE users SET "
                . "number='" .$number . "',"
                . "formalnumber='" .$formalnumber . "',"
				 . "number_changedate=now(),"
				 . "updated_at=now()"
				 
                . " WHERE userid=" . $userid)) {
                    
                    
$dhat = time();

$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$newDateTime = date('h:i A', strtotime($dhat));

$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$thetime = $newDateTime;

    $userbro = ucwords($_SESSION['user']['username']);

$datez = date("Y");
$to = $email;
$subject = $sitename.": Phone Number Change Notification";
$headers = "From: ".$sitename." Account <support@".$sitedomain.">\r\n";
$headers .= "Reply-To: account@".$sitedomain."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your $sitename Account Phone number was Changed! Get ready to dive into your new account.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$sitename</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $userbro, Your $sitename Account Mobile Number was Changed @ $thetime on $thedate</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">This is a Profile Security notification, below are the info!<br />
                      <b>NOTE:</b> If you dont perform this action with this device at this time, Kindly Contact us to secure your account or Login with you Account ID and change your Email!
                      .</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                   
                   
                   <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px"><b>OLD NUMBER:</b> $formalnumber<br />
                      <b>NEW NUMBER:</b> $number</p></td> 
                     </tr> 
                   
                   
                   
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">DEVICE DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Browser:</b> $BrowserInfo<br /><b>IP Address:</b> $IpInfo<br /><b>Date:</b> $thedate<br /><b>Time:</b> $thetime
					  </p></td> 
                     </tr>
                     
					 
					 <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:15px;padding-top:30px"><span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="https://$sitedomain/dashboard" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Secure account</a></span></td> 
                     </tr>
					 
					 
					 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't create an account using this email address, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $sitename</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>

EOD;

mail($to,$subject,$email_message,$headers);	

            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
/////////////////// UPDATE LANGUAGE & TIMEZONE
	


public function update_pics($userid,$picstemp,$picstype,$picssize,$picsname,$sitename,$sitedomain) { $err="";

if($picsname!=""){
if (!preg_match("/.(jpg|png|jpeg|JPG|JPEG|PNG)$/i", $picsname) ) {$err="<li>Image Should be in JPG or PNG Extension."; $GLOBALS['a_exist']=$err;}}else{$picsname=$_SESSION['user']['pics'];}


 $errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
$bytes = 5120;
$KB = 5120;
$totalBytes = $bytes * $KB;
$UploadFolder = "doc/images";
$number = mt_rand(100000, 999999);


$picsname = preg_replace("/[^a-z-A-Z0-9.]/",'-',$picsname);
$picsname = preg_replace('/\-+/', '-', $picsname);
$picsname = strtolower($picsname);

$picsname=$number."-".$picsname;


 if($picssize > $totalBytes)
    {
      $err="<li>Pics Exceeds Maximum Upload Size of 5MB."; $GLOBALS['imgerr1']=$err;
    }

					 
if($err=="" ){
	  if($this->mysqli->query("UPDATE users  SET "
                . "pics='" .$picsname . "',"
				. "updated=now()"
               
				 . " WHERE userid=" .$_SESSION['user']['userid']))
	
	
	 { 	if(isset($picsname)){ 
		 move_uploaded_file($picstemp, 'doc/images/'.$picsname);}
				
            return true;
			
	
    }                               
}
        
        $this->error = $this->mysqli->error;
        return false;
    }

public function update_kyc($userid,$docnumber,$doctype,$picstemp,$picstype,$picssize,$picsname,$picstemp2,$picstype2,$picssize2,$picsname2,$sitename,$sitedomain,$webmail_email,$webmail_email_password,$bankname) {
    
    $mail = new PHPMailer(true);
    
    $err="";
    
    $docnumber = esc(trim($docnumber));
    
    if(empty($bankname)){
       $bankname = $sitename; 
    }else{
        $bankname = $bankname;
    }
    
if(empty($docnumber)){
    $err="<li>Your SSN or Document number is required."; $GLOBALS['a_exist']=$err;
}


if(empty($doctype)){
    $err="<li>Your have to select your government issued document type."; $GLOBALS['a_exist']=$err;
}
    
    
    
$docnumber = preg_replace("/[^0-9]/",'',$docnumber);

if($picstemp!=""){
if (!preg_match("/.(jpg|png|jpeg|JPG|JPEG|PNG)$/i", $picsname) ) {$err="<li>Front Image Should be in JPG or PNG Extension."; $GLOBALS['a_exist']=$err;}}else{
$err="<li>Front image file of the government document is required."; $GLOBALS['a_exist']=$err;}


if($picstemp2!=""){
if (!preg_match("/.(jpg|png|jpeg|JPG|JPEG|PNG)$/i", $picsname2) ) {$err="<li>Back Image Should be in JPG or PNG Extension."; $GLOBALS['a_exist']=$err;}}else{
$err="<li>Back image file of the government document is required."; $GLOBALS['a_exist']=$err;}



$errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
$bytes = 5120;
$KB = 5120;
$totalBytes = $bytes * $KB;
$UploadFolder = "doc/images";
$number = mt_rand(100000, 999999);
$number2 = mt_rand(100000, 999999);


$picsname = preg_replace("/[^a-z-A-Z0-9.]/",'-',$picsname);
$picsname = preg_replace('/\-+/', '-', $picsname);
$picsname = strtolower($picsname);

$picsname = 'front-image-'.$number."-".$picsname;



$picsname2 = preg_replace("/[^a-z-A-Z0-9.]/",'-',$picsname2);
$picsname2 = preg_replace('/\-+/', '-', $picsname2);
$picsname2 = strtolower($picsname2);

$picsname2 = 'back-image-'.$number2."-".$picsname2;

$check_email = $this->mysqli->query("SELECT * FROM kyc WHERE userid = '".$userid."' AND status = 'pending'");

$field_cnt = $check_email->num_rows;


if($field_cnt > 0){
    $err="<li>You have already submited your document for KYC Verification and still pending, you will be notified via email."; $GLOBALS['a_exist']=$err;
}
				
				
$res = $this->mysqli->query("SELECT * FROM users WHERE userid='".$userid."'");
						   
						   $ro = $res->fetch_array();
							  $theemail=$ro['email'];
							  $thename = $ro['firstname'].' '.$ro['firstname'];
				$email = $theemail;
					 
if($err=="" ){
    
$kycid = mt_rand(10000,99999);
$genewallet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$serial = substr(str_shuffle($genewallet), 0, 25);
$status = 'pending';

// Sending Mail Notification

$dhat = time();
$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$newDateTime = date('h:i A', strtotime($dhat));

$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$thetime = $newDateTime;

$userbro = ucwords($ro['firstname']);
$datez = date("Y");
$subject = "KYC: ".$bankname." Account verification submitted #".mt_rand(100000, 999999);




$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your $bankname KYC Verification document has been submitted! Get ready to dive into your new account.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$bankname</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Your KYC Verification is under review</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">Hello $userbro, Your Government issued documents have been submitted for your account KYC Verification<br /><br /><span style="color: red; font-weight: bold; font-size: 30px; display: block; text-align: center;">UNDER REVIEW</span><br />
                      <b>NOTE:</b> If you don't submit any document with this device at this time, Kindly Contact us to secure your account or ignore the mails!
                     </p></td> 
                     </tr>  
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">DOCUMENT DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Document Type:</b> $doctype<br /><b>SSN or Doc. Number:</b> $docnumber<br />Front and back file was attached as well.
					  </p></td> 
                     </tr>
                     
					 
					 <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:15px;padding-top:30px"><span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="https://$sitedomain/login" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Secure account</a></span></td> 
                     </tr>
					 
					 
					 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't create an account using this email address, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $bankname</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>
EOD;
      
      
      //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->Host       = $sitedomain;  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;    
                
                $mail->isSMTP();
                $mail->SMTPKeepAlive = true;
                $mail->Username   = $webmail_email;                     // SMTP username
                $mail->Password   = $webmail_email_password;                               // SMTP password
                $mail->SMTPSecure = 'ssl';                               // Enable TLS encryption, `ssl` also accepted or 'tls'
                $mail->Port       = 465;
                $mail->setFrom($webmail_email, $sitename);
                $mail->addAddress($theemail, $thename); 
                // Content
                $mail->isHTML(true);      
                $mail->Subject = $subject;
                $mail->Body = $email_message;
                $mail->send();
	  
	  
if($this->mysqli->query("INSERT INTO kyc(kycid, userid, image_front, image_back, doctype, docnumber, status, serial) VALUES("
                . "'" . $kycid . "',"
				. "'" . $userid . "',"
				. "'" . $picsname . "',"
                . "'" . $picsname2 . "',"
				. "'" . $doctype . "',"
				. "'" .$docnumber. "',"
				. "'" .$status. "',"
				. "'" .$serial. "'"
		
				
                 . ")")){
                     
if(!empty($picstemp)){ 
		 move_uploaded_file($picstemp, 'doc/images/'.$picsname);}

if(!empty($picstemp2)){ 
		 move_uploaded_file($picstemp2, 'doc/images/'.$picsname2);}
				
            return true;
			
	
    }                               
}
        
        $this->error = $this->mysqli->error;
        return false;
    }

/////////////////////////////////// 

public function complete_profile($firstname,$lastname,$language,$country,$timezone,$gender,$address,$company,$position,$number,$biznumber,$ip,$cont,$brow) { $err="";
		
					$firstname =esc(trim($firstname));
					$lastname =esc(trim($lastname));
					$address =esc(trim($address));
					$company =esc(trim($company));
					$position =esc(trim($position));
					$number =esc(trim($number));
					$biznumber =esc(trim($biznumber));
					
					
					
					if ($position>20){$err="<li>Your Position in your Company is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					
					if ($lastname<3){$err="<li>Your Lastname is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					if ($firstname<3){$err="<li>Your firstname is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					
				
					$address = preg_replace("/[^a-zA-Z0-9-,._ ]/", "", $address);
					
					
					if(empty($company)){
						if(!empty($position)){
							$err="<li>You need to Fill in Your Company/Business Name Before Stating your Position</li>"; $GLOBALS['msize_err']=$err;
						}
					}
					
					
					$fullname = $firstname.' '.$lastname;
					$fullname = ucwords($fullname);
					$fullname = preg_replace("/[^a-zA-Z0-9 ]/", "", $fullname);
					

					if(!preg_match('/^[a-zA-Z\s]+$/', $firstname)){$err="<li>Your Firstname is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					if(!preg_match('/^[a-zA-Z\s]+$/', $lastname)){$err="<li>Your Lastname is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					
					
					
					
					
					if (!preg_match("/^[0-9]*$/",$biznumber)){$err="<li>Invalid Business Contact Number</li>"; $GLOBALS['pn_err']=$err;}
					
					if (!preg_match("/^[0-9]*$/",$number)){$err="<li>Invalid Mobile Number</li>"; $GLOBALS['pn_err']=$err;}
					
					$number = preg_replace("/[^0-9]/", "", $number);
					$biznumber = preg_replace("/[^0-9]/", "", $biznumber);
					
					
					
					if (empty($address)){$err="<li>Your Address Must Be Updated</li>"; $GLOBALS['msize_err']=$err;}
					if ($biznumber=="" && $number==""){$err="<li>Your Phone Number or Business Number Is Required</li>"; $GLOBALS['msize_err']=$err;}
					if (empty($country)){$err="<li>Choose Your Country</li>"; $GLOBALS['pg4']=$err;}
					 
					 
if($err=="" ){
	
	$profilepercent = '70';
	$lastip = $ip;
	$lastbrowser =$brow;
	$browser_country = $cont;
	
	  if($this->mysqli->query("UPDATE users  SET "
                . "fullname='" .$fullname . "',"
                . "firstname='" .$firstname . "',"
                . "lastname='" .$lastname . "',"
                . "country='" .$country . "',"
                . "company='" .$company . "',"
                . "position='" .$position . "',"
                . "lang='" .$language . "',"
                . "timezone='" .$timezone . "',"
                . "address='" .$address . "',"
                . "gender='" .$gender . "',"
                . "profilepercent='" .$profilepercent . "',"
                . "biznumber='" .$biznumber . "',"
                . "number='" .$number . "',"
                . "lastip='" .$lastip . "',"
                . "browser_country='" .$browser_country . "',"
                . "lastbrowser='" .$lastbrowser . "',"
                . "updated_at=now()"
				

				 . " WHERE userid=" .$_SESSION['user']['userid']))
	
	
	 { 
				
            return true;
			
	
	
	
		
    }                               
}

        
        $this->error = $this->mysqli->error;
        return false;
    }
	
	

public function update_personal($firstname,$lastname,$gender,$day,$month,$year,$address,$city,$state,$zipcode,$country,$BrowserInfo,$IpInfo,$sitename,$sitedomain) { $err="";
		
					$firstname =esc(trim($firstname));
					$lastname =esc(trim($lastname));
					$address =esc(trim($address));
					$city =esc(trim($city));
					$state =esc(trim($state));
					$zipcode =esc(trim($zipcode));
					$email = $_SESSION['user']['email'];
					
					
					if (strlen($state)>15){$err="<li>The State you Filled is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					if (strlen($state)<4){$err="<li>The State name is too short!</li>"; $GLOBALS['msize_err']=$err;}
					if (strlen($address)<8){$err="<li>Your Address is Invalid, too short!</li>"; $GLOBALS['msize_err']=$err;}
					if (strlen($city)<3){$err="<li>Your City is Not Recognized!</li>"; $GLOBALS['msize_err']=$err;}
					if (strlen($city)>15){$err="<li>Your City is Not Recognized, Name too Long!</li>"; $GLOBALS['msize_err']=$err;}
					if (strlen($zipcode)>10){$err="<li>Your Zip Code is Invalid!</li>"; $GLOBALS['msize_err']=$err;}
					if (strlen($zipcode)<3){$err="<li>Your Zip Code is too Short!</li>"; $GLOBALS['msize_err']=$err;}
					
					if (strlen($lastname)<3){$err="<li>Your Lastname is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					if (strlen($firstname)<3){$err="<li>Your firstname is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					
					if (empty($country)){$err="<li>Your Country is Needed</li>"; $GLOBALS['msize_err']=$err;}
					if (empty($year)){$err="<li>Choose Your Birth Year!</li>"; $GLOBALS['msize_err']=$err;}
					if (empty($day)){$err="<li>Choose Your Birth Day Year!</li>"; $GLOBALS['msize_err']=$err;}
					if (empty($month)){$err="<li>Choose Your Birth Month Year!</li>"; $GLOBALS['msize_err']=$err;}
					
					$address = strip_tags($address);
					
					$dob = $day.' of '.$month.', '.$year;
					
					$fullname = $firstname.' '.$lastname;
					$fullname = ucwords($fullname);
					$fullname = preg_replace("/[^a-zA-Z0-9 ]/", "", $fullname);
					

					if(!preg_match('/^[a-zA-Z\s]+$/', $firstname)){$err="<li>Your Firstname is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					if(!preg_match('/^[a-zA-Z\s]+$/', $lastname)){$err="<li>Your Lastname is Invalid</li>"; $GLOBALS['msize_err']=$err;}
					
					
			 
if($err=="" ){
	
	$profilepercent = '90';
	
	
	  if($this->mysqli->query("UPDATE users  SET "
                . "fullname='" .$fullname . "',"
                . "firstname='" .$firstname . "',"
                . "day='" .$day . "',"
                . "month='" .$month . "',"
                . "gender='" .$gender . "',"
                . "year='" .$year . "',"
                . "lastname='" .$lastname . "',"
                . "state='" .$state . "',"
                . "city='" .$city . "',"
                . "country='" .$country . "',"
                . "dob='" .$dob . "',"
                . "address='" .$address . "',"
                . "zipcode='" .$zipcode . "',"
                . "profilepercent='" .$profilepercent . "',"
                . "lastip='" .$IpInfo . "',"
                . "lastbrowser='" .$BrowserInfo . "',"
                . "updated_at=now()"
				

				 . " WHERE userid=" .$_SESSION['user']['userid']))
	
	
	 { 
				
				
				
$dhat = time();

$datetimeFormat= date('m/d/Y H:i:s', $dhat);
$newDateTime = date('h:i A', strtotime($dhat));

$thedate = ''.date('dS F Y', strtotime($datetimeFormat)).'';
$thetime = $newDateTime;

    $userbro = ucwords($_SESSION['user']['username']);

$datez = date("Y");
$to = $email;
$subject = $sitename.": Profile Update Notification";
$headers = "From: ".$sitename." Account <support@".$sitedomain.">\r\n";
$headers .= "Reply-To: account@".$sitedomain."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$email_message = <<<EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Mail</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:32px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:32px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button, button.es-button { font-size:16px!important; display:inline-block!important; border-width:15px 30px 15px 30px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:'open sans', 'helvetica neue', helvetica, arial, 
sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    Your $sitename Account Profile was Updated! Get ready to dive into your new account.
</div>
  <div class="es-wrapper-color" style="background-color:#EEEEEE"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#eeeeee"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
        <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"></tr> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#044767;width:600px" cellspacing="0" cellpadding="0" bgcolor="#044767" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <!--[if mso]><table style="width:530px" cellpadding="0" cellspacing="0"><tr><td style="width:340px" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
                 <tr style="border-collapse:collapse"> 
                  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:340px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="left" style="padding:0;Margin:0"><h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:36px;font-style:normal;font-weight:bold;color:#FFFFFF">$sitename</h1></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td style="width:20px"></td><td style="width:170px" valign="top"><![endif]--> 
               <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr class="es-hidden" style="border-collapse:collapse"> 
                  <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:170px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:5px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:1px solid #044767;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                     </table></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:35px;padding-right:35px;padding-top:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-l" align="left" style="padding:0;Margin:0;padding-top:15px"><h3 style="Margin:0;line-height:22px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:18px;font-style:normal;font-weight:bold;color:#333333">Hello $userbro, Your $sitename Account Profile was Updated @ $thetime on $thedate</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="left" style="padding:0;Margin:0;padding-bottom:10px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">This is a Profile Security notification, below are the info!<br />
                      <b>NOTE:</b> If you dont perform this action with this device at this time, Kindly Contact us to secure your account or Login with you Account ID and change your Email!
                      .</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;padding-bottom:15px;padding-top:20px;font-size:0" align="center"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:3px solid #EEEEEE;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:30px;padding-bottom:35px;padding-left:35px;padding-right:35px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-size:24px;font-style:normal;font-weight:bold;color:#333333">DEVICE DETAILS</h2></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:24px;color:#777777;font-size:16px">
					  <b>Browser:</b> $BrowserInfo<br /><b>IP Address:</b> $IpInfo<br /><b>Date:</b> $thedate<br /><b>Time:</b> $thetime
					  </p></td> 
                     </tr>
                     
					 
					 <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:15px;padding-top:30px"><span class="es-button-border" style="border-style:solid;border-color:transparent;background:#ED8E20 none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:5px;width:auto"><a href="https://$sitedomain/dashboard" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:18px;border-style:solid;border-color:#ED8E20;border-width:15px 30px;display:inline-block;background:#ED8E20 none repeat scroll 0% 0%;border-radius:5px;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center">Secure account</a></span></td> 
                     </tr>
					 
					 
					 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="border-top: 2px solid #888;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:35px;padding-left:35px;padding-right:35px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:530px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                    
                     <tr style="border-collapse:collapse"> 
                      <td esdev-links-color="#777777" class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-bottom:5px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#777777;font-size:14px">If you didn't create an account using this email address, please ignore this email or&nbsp;<u><a target="_blank" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;color:#777777;font-size:14px" class="unsubscribe" href="">unsubscribe</a></u>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#1B9BA3;width:600px;border-bottom:10px solid #48AFB5" cellspacing="0" cellpadding="0" bgcolor="#1b9ba3" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0"> 
                       <table class="es-menu" width="40%" cellspacing="0" cellpadding="0" align="center" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr class="links-images-top" style="border-collapse:collapse"> 
                         <p style="text-align: center; padding: 20px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:'open sans', 'helvetica neue', helvetica, arial, sans-serif;line-height:21px;color:#fff;font-size:14px">Copyright &copy; $datez, All right Reserved $sitename</p>
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>

EOD;

mail($to,$subject,$email_message,$headers);	
            return true;
			
	
	
	
		
    }                               
}

        
        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	

///////////////////////////////////////////////////////// ADD BANK DETAILS CLASS


	

public function add_bank($account_no,$bank_name,$user_accountid,$AccountType,$password,$ip,$brow,$ifscCode) { $err="";
		
		 $accountName = ucwords($_SESSION['user']['fullname']);
		 $accountNumber = esc(trim($account_no));
		 $bank_name = esc(trim($bank_name));
		 $ifscCode = esc(trim($ifscCode));

	 $accountid = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 
$check_email = $this->mysqli->query("SELECT * FROM bank_accounts WHERE number = '".$accountNumber."'");
		$fiel_cnt = $check_email->num_rows; 
	
				   
				   $res = $this->mysqli->query("SELECT * FROM bank_accounts WHERE userid ='".$_SESSION['user']['userid']."'");
				    
					$account_total = $res->num_rows;
				   
				   
				   if ($account_total>2){$err="<li>You Have Reached Your Account Limit, Delete One to Add More</li>";  $GLOBALS['pc_err']=$err;}
				   
				   
					if(empty($password)){$err="<li>Input your Account Password</li>";  $GLOBALS['pn_err']=$err;}else{
						
						if($password !== $_SESSION['user']['realpass']){$err="<li>Incorrect Password</li>";  $GLOBALS['pn_err']=$err;}
					}		
					if(empty($user_accountid)){$err="<li>Input your Account ID</li>";  $GLOBALS['pn_err']=$err;}else{
						
						if($user_accountid !== $_SESSION['user']['customerid']){$err="<li>Incorrect Account ID</li>";  $GLOBALS['pn_err']=$err;}
					}		
					if(empty($AccountType)){$err="<li>You have to Indicate if your Account Type, Business or Personal Account.</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($accountNumber)){$err="<li>Fill in Your Account Number, Digits Only!</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($ifscCode)){$err="<li>Enter Your Bank NEFT IFSC or SWIFT Code!</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($bank_name)){$err="<li>Enter Your Bank name In Full!</li>";  $GLOBALS['pn_err']=$err;}		
						
					
if (strlen($accountNumber)>12){$err="<li>This Account Details is Invalid</li>";  $GLOBALS['pc_err']=$err;}

	if (strlen($accountNumber)<8){$err="<li>Your Account Number is Incomplete</li>";  $GLOBALS['pc_err']=$err;}
	
	if (strlen($bank_name)<3){$err="<li>Your Bank Name is Invalid, Not Recognized</li>";  $GLOBALS['pc_err']=$err;}
	if (strlen($ifscCode)<3){$err="<li>Your Bank NEFT IFSC or SWIFT Code is Invalid</li>";  $GLOBALS['pc_err']=$err;}
	if (strlen($ifscCode)>15){$err="<li>Your Bank NEFT IFSC or SWIFT Code is not Correct</li>";  $GLOBALS['pc_err']=$err;}
 
 if (!preg_match("/^[0-9]*$/",$accountNumber)){$err="<li>Your Account Number Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['pc_err']=$err;}					
					 
                     if( $fiel_cnt > 0) {$err="<li>Account Details With this Details Already Exist On Our Database</li>";  $GLOBALS['cp_exist']=$err;}
					 
if($err=="" ){
	
 
 $accountNumber = preg_replace("/[^0-9]/",'',$accountNumber);
 $userid = $_SESSION['user']['userid'];
 $username = $_SESSION['user']['username'];
 $status ='active';
 $genewallet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
 $serial = substr(str_shuffle($genewallet), 0, 13);
 
 
 
$pieces = explode(' ', $bank_name);
$last_word = array_pop($pieces);

$thelast = strtolower($last_word);

if($thelast !=='bank'){

$banknm = $bank_name.' Bank';

}else{
$banknm = $bank_name;
}
	
	
if($this->mysqli->query("INSERT INTO bank_accounts(userid,username,swift_code,accountid,account_serial,bankname,type,status,accountname,number,updated,device,ip) VALUES("
                . "'" . $userid . "',"
				. "'" . $username . "',"
				. "'" . $ifscCode . "',"
                . "'" . $accountid . "',"
				. "'" . $serial . "',"
				. "'" .$banknm. "',"
				. "'" .$AccountType. "',"
				. "'" .$status. "',"
				. "'" .$accountName. "',"
				. "'".$accountNumber."',"
				. "now(),"
				. "'" .$brow. "',"
				. "'" .$ip. "'"
		
				
                 . ")")) {	
				
            return true;
			
	
	}
		
    }                               

        
        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	///////////////////////////////////////////////////////// ADD CARD CLASS

	
 public function add_card($userid,$cardnumber,$cardbalance,$month,$year,$cvv,$type,$sitename,$sitedomain) { $err="";
		
		
		

		 $cardbalance =esc(trim(strip_tags($cardbalance)));
		 $cardnumber =esc(trim(strip_tags($cardnumber)));
		 $cvv = esc(trim(strip_tags($cvv)));

	 $cardid = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 
$check_email = $this->mysqli->query("SELECT * FROM cards WHERE cardnumber = '".$cardnumber."'");
		$fiel_cnt = $check_email->num_rows; 
	
	
	$date = date("Y");
	$date = $date+1;
	$expiry = $month.''.$year;
			  	   
				   
				   $res = $this->mysqli->query("SELECT * FROM cards WHERE userid ='".$_SESSION['user']['userid']."'");
				    
						  $card_total = $res->num_rows;
				   
				   
				   if ($card_total>5){$err="<li>You Have Reached Your Card Limit, Delete One to Add More, You cannot add more than 5 cards</li>";  $GLOBALS['pc_err']=$err;}
				   
				   
					if(empty($expiry)){$err="<li>Choose Your Card Expiring Month & Year.</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($cardnumber)){$err="<li>Fill in the Card Numbers, Digits Only!</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($cvv)){$err="<li>Enter The 3 Digits CVV located at the Back of your Card!</li>";  $GLOBALS['pn_err']=$err;}		
							
					if(empty($type)){$err="<li>You have to Indicate if your Card is a Credit or Debit Card!</li>";  $GLOBALS['pn_err']=$err;}	
					
if (strlen($cardnumber)>16){$err="<li>This Card is Invalid</li>";  $GLOBALS['pc_err']=$err;}
if ($year<$date){$err="<li>This Card is Invalid, Its Either Expiring this Year or Not Correct</li>";  $GLOBALS['pc_err']=$err;}
	if (strlen($cardnumber)<14){$err="<li>Your Card Number is Incomplete</li>";  $GLOBALS['pc_err']=$err;}
	
	if (strlen($cvv)<3){$err="<li>Your CVV Must Be 3 Digits</li>";  $GLOBALS['pc_err']=$err;}
	if (strlen($cvv)>4){$err="<li>Your CVV Must Be 3 Digits</li>";  $GLOBALS['pc_err']=$err;}

 
 if (!preg_match("/^[0-9]*$/",$cardnumber)){$err="<li>Your Card Digits Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['pc_err']=$err;}					
					 
                     if( $fiel_cnt > 0) {$err="<li>This card already owned by someone or you!</li>";  $GLOBALS['cp_exist']=$err;}
					 
if($err=="" ){
	
 
 $cardnumber = preg_replace("/[^0-9]/",'',$cardnumber);
 $cvv = preg_replace("/[^0-9]/",'',$cvv);
 $cardbalance = preg_replace("/[^0-9]/",'',$cardbalance);
 $userid = $_SESSION['user']['userid'];
 $username = $_SESSION['user']['username'];
 $status ='active';
 $genewallet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
 $cardserial = substr(str_shuffle($genewallet), 0, 13);
	
	
if($this->mysqli->query("INSERT INTO cards(userid, cardid, cardnumber, month, year, cardcvv, cardtype, cardserial, balance) VALUES("
                . "'" . $userid . "',"
				. "'" . $cardid . "',"
				. "'" . $cardnumber . "',"
                . "'" . $month . "',"
				. "'" .$year. "',"
				. "'" .$cvv. "',"
				. "'" .$type. "',"
				. "'" .$cardserial. "',"
				. "'" .$cardbalance. "'"
		
				
                 . ")")) {	
				
            return true;
			
	
	}
		
    }                               

        
        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	/////////////////////////////////// EDIT CARD CLASS

	
public function update_card ($debit_credit,$card_type,$card_name,$card_number,$card_cvv,$expiry,$ip,$brow,$year,$cardid) { $err=""; 


$card_name = ucwords($card_name);
		 $card_name =esc(trim($card_name));
		 $card_number =esc(trim($card_number));
		 $card_cvv =esc(trim($card_cvv));
		 
		 
		$check_email = $this->mysqli->query("SELECT * FROM cards WHERE number = '".$card_number."' and cardid!='".$cardid."'");
		$fiel_cnt = $check_email->num_rows;
		
		$date = date("Y");
	$date = $date+1;


if(empty($card_name)){$err="<li>Card Holders Name is Required</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($expiry)){$err="<li>Choose Your Card Expiring Month & Year.</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($card_number)){$err="<li>Fill in the Card Numbers, Digits Only!</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($card_cvv)){$err="<li>Enter The 3 Digits CVV located at the Back of your Card!</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($card_type)){$err="<li>Choose Your Card Type, Either Master Card or Visa or Others!</li>";  $GLOBALS['pn_err']=$err;}		
					if(empty($debit_credit)){$err="<li>You have to Indicate if your Card is a Credit or Debit Card!</li>";  $GLOBALS['pn_err']=$err;}	
					
if (strlen($card_number)>16){$err="<li>This Card is Invalid</li>";  $GLOBALS['pc_err']=$err;}
if ($year<$date){$err="<li>This Card is Invalid, Its Either Expiring this Year or Not Correct</li>";  $GLOBALS['pc_err']=$err;}
	if (strlen($card_number)<16){$err="<li>Your Card Number is Incomplete</li>";  $GLOBALS['pc_err']=$err;}
	
	if (strlen($card_cvv)<3){$err="<li>Your CVV Must Be 3 Digits</li>";  $GLOBALS['pc_err']=$err;}
	if (strlen($card_cvv)>3){$err="<li>Your CVV Must Be 3 Digits</li>";  $GLOBALS['pc_err']=$err;}
 
 if (strlen($card_name)>40){$err="<li>Card Holders Name is Invalid</li>";  $GLOBALS['pc_err']=$err;}
 if (strlen($card_name)<5){$err="<li>Card Holders Name is too Short</li>";  $GLOBALS['pc_err']=$err;}
 
 if (!preg_match("/^[0-9]*$/",$card_number)){$err="<li>Your Card Digits Contains Invalid Characters, Digits Only!</li>";  $GLOBALS['pc_err']=$err;}					
					 
if( $fiel_cnt > 0) {$err="<li>Card With this Details Already Exist On Our Database</li>";  $GLOBALS['cp_exist']=$err;}
		


if($err==""){
	
$card_number = preg_replace("/[^0-9]/",'',$card_number);
$card_cvv = preg_replace("/[^0-9]/",'',$card_cvv);
				
          if($this->mysqli->query("UPDATE cards SET "
                . "cardtype='" .$card_type . "',"
                . "cardlabel='" .$debit_credit . "',"
                . "number='" .$card_number . "',"
                . "name='" .$card_name . "',"
                . "valid='" .$expiry . "',"
                . "cvv='" .$card_cvv . "',"
                . "updated=now(),"
                . "device='" .$brow . "',"
				 . "ip='" .$ip . "'"
				 
				 
				 
                . " WHERE cardid=" . $cardid)) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }


	
////////////////////////////// ARTISTS ////////////////////////////////

public function add_artist($names,$country,$label,$style,$fullname,$age,$facebook,$twitter,$instagram,$seo,$bio,$artistpics_temp,$artistpics_type,$artistpics_size,$artistpics,$userid) { $err="";

		 $slug = strtolower($names);
		 $slug = preg_replace("/[\s_]/", "-", $slug);
	 $number = mt_rand(100000, 999999);
	 $postid = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 
	 $errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
$bytes = 5120;
$KB = 5120;
$totalBytes = $bytes * $KB;
$UploadFolder = "../doc/images";

	 if($artistpics!=""){$artistpics="NagorNet-".$slug."-".$number."-".$artistpics;
	 
	 
   if($artistpics > $totalBytes)
    {
      $err="<li>Artist Pics Exceeds Maximum Upload Size of 5MB."; $GLOBALS['imgerr1']=$err;
    }
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $artistpics) ) {$err="<li>Inavlid Image 1 format."; $GLOBALS['imgerr2']=$err;}
	
	} else { $err="<li>Artist Image is Compulsory."; $GLOBALS['imgerr1']=$err;}
	 
 
$counter = 0;
 


					$names =  esc($names);
					$seo =esc($seo);
					$facebook =esc($facebook);
					$twitter =esc($twitter);
					$instagram =esc($instagram);
					$label =esc($label);
	               
					$slug = esc($slug);
					$bio = esc($bio);
						$bio = str_replace("'", "", $bio);
				
$check_email = $this->mysqli->query("SELECT * FROM artist WHERE stagename = '".$names."'");
		$fiel_cnt = $check_email->num_rows; 
	
	
	
			  	   
						 if($artistpics==""){$err="<li>Please Select An image</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $names==""){$err="<li>Artist Name Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $bio==""){$err="<li>Content Cannot Be Empty</li>";  $GLOBALS['pc_err']=$err;}	
					 if ( $instagram==""){$err="<li>Instagram Field Cannot Be Empty</li>";  $GLOBALS['pc_err']=$err;}	
					 
					 if ( $seo==""){$err="<li>SEO Title Cannot Be Empty</li>";  $GLOBALS['fj_err']=$err;}
                     if( $fiel_cnt > 0) {$err="<li>Artist Already Exist On NagorNet</li>";  $GLOBALS['cp_exist']=$err;}
					 
					 
					 
if($err=="" ){
	
	if($artistpics!=""){move_uploaded_file($artistpics_temp, '../doc/images/'.$artistpics);}
		
		 if($this->mysqli->query("INSERT INTO artist(postid,userid,stagename,slug,country,label,style,fullname,image,dob,facebook,twitter,instagram,seotitle,bio) VALUES("
                . "'" . $postid . "',"			
                . "'" . $userid. "',"
                . "'" . $names . "',"
                . "'" . $slug . "',"
                . "'" . $country . "',"
                . "'" . $label . "',"
                . "'" . $style. "',"
                . "'" . $fullname. "',"
				. "'" .$artistpics. "',"
				. "'" .$age. "',"
				. "'" .$facebook. "',"
				. "'" .$twitter. "',"
				. "'" .$instagram. "',"
				. "'" .$seo. "',"
				. "'" .$bio. "'"
			
		
				
                 . ")")) { 	
				 
				 		
			
            return true;
			
	
	}

    }
        
        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	//////////////////////////////////  
	

public function update_artist($id,$name,$country,$label,$style,$fullname,$age,$facebook,$twitter,$instagram,$seo,$bio) { $err="";
	
					$name =esc($name);
					$fullname =esc($fullname);
					$facebook =esc($facebook);
					$instagram =esc($instagram);
					$twitter =esc($twitter);
					$seo =esc($seo);
					$label =esc($label);
	               
					$style = esc($style);
					$bio = esc($bio);
						$bio = str_replace("'", "", $bio);
				
$check_email = $this->mysqli->query("SELECT * FROM artist WHERE stagename = '".$name."' and postid='".$id."'");
		$fiel_cnt = $check_email->num_rows; 
	
	
	
			  	   
						
					 if ( $name==""){$err="<li>Artist Name Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}
					 if ( $fullname==""){$err="<li>FullName Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $instagram==""){$err="<li>Instagram Field Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $age==""){$err="<li>Date Of Birth Cannot Be Empty</li>";  $GLOBALS['pc_err']=$err;}		
					 if ( $bio==""){$err="<li>Content Cannot Be Empty</li>";  $GLOBALS['pc_err']=$err;}
					 
					 if ( $seo==""){$err="<li>SEO Title Cannot Be Empty</li>";  $GLOBALS['fj_err']=$err;}
                 
					 
				 
if($err=="" ){
	  if($this->mysqli->query("UPDATE artist  SET "
                . "style='" .$style . "',"
                . "dob='" .$age . "',"
                . "facebook='" .$facebook . "',"
                . "twitter='" .$twitter . "',"
                . "instagram='" .$instagram . "',"
                . "fullname='" .$fullname . "',"
                . "stagename='" .$name . "',"
                . "seotitle='" .$seo . "',"
                . "label='" .$label . "',"
                . "bio='" .$bio . "',"
                . "country='" .$country . "'"


				 . " WHERE postid=" .$id))
	
	
	 { 	
				 
	
			
            return true;
			
	
	
	
		
    }                               
}

        
        $this->error = $this->mysqli->error;
        return false;
    }

public function delete_artist($id) {
        if($this->mysqli->query("DELETE FROM artist WHERE postid=".$id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
////////////////////////////// ARTISTS ////////////////////////////////

		
	  public function members ($username,$email,$phone,$pass1,$pass2,$confirm) { $err="";


	$email = trim(strip_tags($email));
		$username = trim(strip_tags($username));
	$phone = trim(strip_tags($phone));

		$check_email = $this->mysqli->query("SELECT * FROM members WHERE email = '".$email."'");
		$field_cnt = $check_email->num_rows;


		$check_phone = $this->mysqli->query("select * from `members` where `phone` = '".$phone."'");
		$field_cnt2 = $check_phone->num_rows;

		$check_username = $this->mysqli->query("select * from `members` where `username` = '".$username."'");
		$field_cnt3 = $check_username->num_rows;

			    if ($username==""){$err="<li>Username Is Empty</li>"; $GLOBALS['reg2']=$err;}
				if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email))
	{
		$err = "<li>Sorry, Your Email address is Invalid</li>"; $GLOBALS['reg3']=$err;
	}
	    if ($confirm=="no"){$err="<li>Please Agree to the Terms & Conditions</li>";  $GLOBALS['reg7']=$err;}
	    if ($phone=="" || strlen($phone < 11) ){$err="<li>Phone Number  is empty or too short</li>";  $GLOBALS['reg5']=$err;}
		if (strlen($pass1) < 6 ){$err="<li>Password too short or Empty, Input Atleast 6 characters</li>";  $GLOBALS['reg6']=$err;}
		if ($pass1 !== $pass2 ){$err="<li>Password did not Match</li>";  $GLOBALS['reg4']=$err;}
		if(	$field_cnt > 0) {$err="<li>Email already exist</li>";  $GLOBALS['reg8']=$err;}
		if(	$field_cnt2 > 0) {$err="<li>Phone number already exist</li>";  $GLOBALS['reg9']=$err;}
			if(	$field_cnt3 > 0) {$err="<li>Username already choosen </li>";  $GLOBALS['reg10']=$err;}


			  if($err==""){
				  $pass1=md5($pass1);
        if($this->mysqli->query("INSERT INTO members(username,email,phone,pass) VALUES("
                . "'" . $username . "',"
                . "'" . $email. "',"
                . "'" . $phone. "',"
                . "'" . $pass1. "'"

                . ")")) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }


	

	
	
	///////////////////////////////////

	 public function update_question($id,$examtype,$examname,$pagenumber,$examyear,$subject,$question,$correct,$topic,$pics_temp,$pics_type,$pics_size,$post_pics) { $err="";
$status="";
echo $examname;

$check_email = $this->mysqli->query("SELECT * FROM question WHERE question = '".$question."' ");
		$fiel_cnt = $check_email->num_rows;


			  	  			 if ($pagenumber==""){$err="<li>The question number is important</li>";  $GLOBALS['post1_err']=$err;}
					 if ($question==""){$err="<li>No question yet to post </li>";  $GLOBALS['aa_err']=$err;}
					 if (($examtype=="" )||($examname=="" )||($examyear=="" )||($subject=="" )){$err="<li>One of the selection field is empty </li>";  $GLOBALS['ad_err']=$err;}
					  	 if ($correct==""){$err="<li>Correct answer shouldn't be empty </li>";  $GLOBALS['aa_err3']=$err;}

  if($post_pics!="" && $pics_type !='image/jpeg'){$err="<li>image should be in jpg type."; $GLOBALS['fj_err']=$err;}
 if($post_pics!="" && $pics_size > 500000000){$err="<li>image uploaded exceeds maximum upload size."; $GLOBALS['fz_err']=$err;}
 

					    if($err==""){  $number = mt_rand(100000, 999999);

                                if($correct==""){$correct=$_POST['correct2'];}
 $finalimg="";
                $html = $question;

                   $doc = new DOMDocument();
                   $doc->loadHTML($html);
                   $xpath = new DOMXPath($doc);
                   $src = $xpath->evaluate("string(//img/@src)"); # "/images/image.jpg"


                                $base64string =$src;
                                if($src!=""){  $finalimg=uniqid().".jpg";
                     file_put_contents('questionpics/'.$finalimg, base64_decode(explode(',',$base64string)[1]));}
       if($this->mysqli->query("UPDATE question SET "
                . "question='" .$question . "',"
				 . "examtype='" .$examtype . "',"
				 . "examname='" .$examname . "',"
				 . "correct='" .$correct . "',"
				 . "topic='" .$topic . "',"
				 . "topic='".$topic."',"
				  . "examyear='" .$examyear . "',"
				  . "pagenumber='" .$pagenumber . "',"
				    . "subject='" .$subject . "',"

				. "pics='" . $finalimg . "'"
                . " WHERE id=" . $id)){
				 if ( $post_pics!=""){
				move_uploaded_file($_FILES['post']['tmp_name'], 'questionpics/' . $_FILES['post']['name']);

				$picks='questionpics/'.$_FILES['post']['name']; $picks2='questionpics/thumbnails/'.$_FILES['post']['name'];

				 createthumb($picks,$picks2,250,200);}
            return true;
						}}
	
        $this->error = $this->mysqli->error;
        return false;
    }


	public function delete_post($id) {
        if($this->mysqli->query("DELETE FROM posts WHERE postid=" . $id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	/////////////////////////////////////////////////////////PAYMENT DETAILS

		public function delete_question($id) {
        if($this->mysqli->query("DELETE FROM question WHERE id=" . $id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
		 public function subsong( $stagename,$title,$pics_temp,$pics_type,$pics_size,$postsong) { $err="";
					$stagename = esc( $stagename);
					$title = esc( $title);
					
					 $number = mt_rand(100000, 999999);
	 $number2 = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 
	 $songname=$postsong;

$check_slide = $this->mysqli->query("SELECT * FROM pending WHERE username = '".$_SESSION['user']['username']."' and title='".$title."' and stagename='".$stagename."' ");
		$fiel_cnt = $check_slide->num_rows;
		
		if((!$pics_type =='audio/mp3') || (!$pics_type =='audio/wav') || (!$pics_type =='audio/mpeg3')){$err="<li>Audio Is Not in Mp3 or Wav Fomart."; $GLOBALS['pn_err']=$err;}


			  	     if(!$pics_type =='audio/mp3'){$err="<li>Audio Should be in Mp3 or Wav Fomart."; $GLOBALS['pn_err']=$err;}
			  	     
					 if($pics_size > 5000000){$err="<li>Oops... Your Song is Too Large, Maximum Size is 5MB, Compress It."; $GLOBALS['pc_err']=$err;}
					 
					 if($pics_size < 1000000){$err="<li>Lol... Your Song is Small, Minimum Size is 1MB, Check The Audio File."; $GLOBALS['pc_err']=$err;}
		 if ($stagename=="" || $title==""){$err="<li>Stage Name & Title Are Both Required</li>";  $GLOBALS['pa_err']=$err;}

                     if(	$fiel_cnt > 0) {$err="<li>This Song Was Already Submited By You or Another User, And Its Pending Review By Our Team</li>";  $GLOBALS['cp_exist']=$err;}
					    if($err==""){
        if($this->mysqli->query("INSERT INTO pending(title,stagename,username,email,userid,number,song) VALUES("
                . "'" . $title. "',"
                . "'" . $stagename. "',"
				. "'" . $_SESSION['user']['username']. "',"
				. "'" . $_SESSION['user']['email']. "',"
				. "'" . $_SESSION['user']['userid']. "',"
				. "'" . $_SESSION['user']['number']. "',"

				. "'" . $songname. "'"

                 . ")")) { move_uploaded_file($pics_temp, 'uploads/'.$postsong);

            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	


	 public function add_slide($userid,$slide_name,$category,$url,$pics_temp,$pics_type,$pics_size,$post_pics) { $err="";
					$slide_name = trim(strip_tags( $slide_name));
					
					 $number = mt_rand(100000, 999999);
	 $number2 = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 
	 $picsname="nagornet_".$number2."_".$post_pics;


$check_slide = $this->mysqli->query("SELECT * FROM slide WHERE url = '".$url."' ");
		$fiel_cnt = $check_slide->num_rows;
		if(!preg_match( '/^(http|https):\\/\\/[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$url)){$err="<li>URL is Invalid."; $GLOBALS['ad_err']=$err;}
			  	     if(!$pics_type =='image/jpg'){$err="<li>image should be in jpg or png type."; $GLOBALS['pn_err']=$err;}
					 if($pics_size > 500000000){$err="<li>Image uploaded exceeds maximum upload size."; $GLOBALS['pc_err']=$err;}
					 if ($slide_name==""){$err="<li>slide name cannot be empty</li>";  $GLOBALS['pa_err']=$err;}

                     if(	$fiel_cnt > 0) {$err="<li>slide already exist</li>";  $GLOBALS['cp_exist']=$err;}
					    if($err==""){
        if($this->mysqli->query("INSERT INTO slider(userid,title,category,url,img) VALUES("
                . "'" . $userid. "',"
                . "'" . $slide_name. "',"
                . "'" . $category. "',"
				. "'" . $url . "',"
				. "'" . $picsname. "'"

                 . ")")) { move_uploaded_file($_FILES['slide_pics']['tmp_name'], '../doc/images/' . $picsname);

            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	///////////////////////////////////
	
	public function delete_slide($id) {
        if($this->mysqli->query("DELETE FROM slider WHERE id=" . $id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
	/////////////// Sponsored
	
	public function add_promo( $sponsor_name,$promolink,$promoart_temp,$promoart_type,$promoart_size,$promoart) { $err="";
					$sponsor_name = trim(strip_tags( $sponsor_name));
	 $number = mt_rand(100000, 999999);
	 $number2 = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 
	 $picsname="DJMoremusic_".$number2."_".$promoart;

$check_sponsor = $this->mysqli->query("SELECT * FROM sponsored WHERE title = '".$sponsor_name."' ");
		$fiel_cnt = $check_sponsor->num_rows;
		if(!preg_match( '/^(http|https):\\/\\/[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$promolink)){$err="<li>Sponsored Link invalid."; $GLOBALS['ad_err']=$err;}
			  	     if(!$promoart_type =='image/jpg'){$err="<li>Image should be in JPG or PNG type."; $GLOBALS['pn_err']=$err;}
					 if($promoart_size > 500000000){$err="<li>image uploaded exceeds maximum upload size."; $GLOBALS['pc_err']=$err;}
					 if ($sponsor_name==""){$err="<li>Sponsor name cannot be empty</li>";  $GLOBALS['pa_err']=$err;}

                     if(	$fiel_cnt > 0) {$err="<li>Song Already Sponsored</li>";  $GLOBALS['cp_exist']=$err;}
					    if($err==""){
        if($this->mysqli->query("INSERT INTO sponsored(title,link,art) VALUES("
                . "'" . $sponsor_name. "',"
				. "'" . $promolink . "',"

				. "'" . $picsname. "'"

                 . ")")) { move_uploaded_file($_FILES['promoart']['tmp_name'], '../doc/images/' . $picsname);

            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	///////////////////////////////////

public function delete_sponsor($id) {
        if($this->mysqli->query("DELETE FROM sponsored WHERE id=".$id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }


	
	/////////////////////////////////////////////////////////   ADD EVENT
	
	
	
	
	
	public function add_event($title,$videoid,$content,$image_temp1,$image_type1,$image_size1,$image_name1,$image_temp2,$image_type2,$image_size2,$image_name2,$image_temp3,$image_type3,$image_size3,$image_name3,$image_temp4,$image_type4,$image_size4,$image_name4,$video_temp,$video_type,$video_size,$video_name,$audio_temp,$audio_type,$audio_size,$audio,$usersid) { $err="";



$title = esc(trim($title));
					$videoid = esc(trim($videoid));
					$content = esc(trim($content));
					
					
		 
		 $slug = $title;
		 $slug = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $slug);
		 $slug = preg_replace('/\s+/', '-', $slug);
		 $slug = preg_replace('/-+/', '-', $slug);
		 $slug = strtolower($slug);
		 $slug = trim($slug);
		 
		 $author = ucwords($usersid);


$keyword = preg_replace('/[^A-Za-z0-9\ ]/', '', $title);
		 $keyword = strtolower($keyword);
		 
		 
		 $seo = $title;
		 $seotitle = ucwords($seo);
		 
		

	 $number = mt_rand(100000, 999999);
	 $postid = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 
$errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
$bytes = 5120;
$KB = 5120;
$totalBytes = $bytes * $KB;
$UploadFolder = "../uploads/images";



$image_name1 = preg_replace("/[^a-z-A-Z0-9.]/",'-',$image_name1);
$image_name1 = preg_replace('/\-+/', '-', $image_name1);
$image_name1 = strtolower($image_name1);


$image_name2 = preg_replace("/[^a-z-A-Z0-9.]/",'-',$image_name2);
$image_name2 = preg_replace('/\-+/', '-', $image_name2);
$image_name2 = strtolower($image_name2);


$image_name3 = preg_replace("/[^a-z-A-Z0-9.]/",'-',$image_name3);
$image_name3 = preg_replace('/\-+/', '-', $image_name3);
$image_name3 = strtolower($image_name3);


$image_name4 = preg_replace("/[^a-z-A-Z0-9.]/",'-',$image_name4);
$image_name4 = preg_replace('/\-+/', '-', $image_name4);
$image_name4 = strtolower($image_name4);


	 if(!empty($image_name1)){$image_name1=$number."-".$image_name1;
	 
	 
   if($image_size1 > $totalBytes)
    {
      $err="<li>The First Image Exceeds Maximum Upload Size of 5MB."; $GLOBALS['imgerr1']=$err;
    }
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $image_name1) ) {$err="<li>Inavlid Image format for the First Image."; $GLOBALS['imgerr2']=$err;}
	
	} else { $err="<li>The First Image is Compulsory."; $GLOBALS['imgerr1']=$err;}
	
	
	
	
	if(!empty($image_name2)){$image_name2=$number."-".$image_name2;
	 
	 
   if($image_size2 > $totalBytes)
    {
      $err="<li>The Second Image Exceeds Maximum Upload Size of 5MB."; $GLOBALS['imgerr1']=$err;
    }
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $image_name2) ) {$err="<li>Inavlid Image format for the Second Image."; $GLOBALS['imgerr2']=$err;}
	
	}
	
	
	
	if(!empty($image_name3)){$image_name3=$number."-".$image_name3;
	 
	 
   if($image_size3 > $totalBytes)
    {
      $err="<li>The Third Image Exceeds Maximum Upload Size of 5MB."; $GLOBALS['imgerr1']=$err;
    }
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $image_name3) ) {$err="<li>Inavlid Image format for the Third Image."; $GLOBALS['imgerr2']=$err;}
	
	}
	
	
	
	if(!empty($image_name4)){$image_name4=$number."-".$image_name4;
	 
	 
   if($image_size4 > $totalBytes)
    {
      $err="<li>The Fourth Image Exceeds Maximum Upload Size of 5MB."; $GLOBALS['imgerr1']=$err;
    }
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $image_name4) ) {$err="<li>Inavlid Image format for the Fourth Image."; $GLOBALS['imgerr2']=$err;}
	
	}
	 
	 
	 if($audio!=""){$audio="[UncommonMiracle.com] ".$audio;}
	 if($audio!=""){
	     if (!preg_match("/.(MP3|mp3)$/i", $audio) ) {$err="<li>Audio File Must be In Mp3 Format."; $GLOBALS['ft_err']=$err;}
	 
	 }
	
	
 if($video_name!=""){$video_name="[UncommonMiracle.com] ".$video_name;}
	 if($video_name!=""){
	     if (!preg_match("/.(MP4|mp4)$/i", $video_name) ) {$err="<li>Video File Must be In Mp4 Format."; $GLOBALS['ft_err']=$err;}
	 
	 }
	
	
 
$counter = 0;


if (strpos($videoid, '=') !== false) {

   $vidid = substr($videoid, strrpos($videoid, '=') + 1);
   
}elseif (strpos($videoid, '/') !== false){
$vidid = substr($videoid, strrpos($videoid, '/') + 1);
}else{

$vidid = $videoid;

}


					
						$content = str_replace("'", "", $content);
				
$check_email = $this->mysqli->query("SELECT * FROM events WHERE slug = '".$slug."'");
		$fiel_cnt = $check_email->num_rows; 
	
	
	
			  	   
					if(!isset($image_name1)){$err="<li>The First Image is compulsory, It Serves as Thumbnail</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $title==""){$err="<li>Event Title Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $content==""){$err="<li>Content Box Cannot Be Empty</li>";  $GLOBALS['pc_err']=$err;}		
					 if( $fiel_cnt > 0) {$err="<li>This Post Already Exist On Our Database</li>";  $GLOBALS['cp_exist']=$err;}
					 
					 
					 
if($err==""){
	
$views = '1';


if($this->mysqli->query("INSERT INTO events(userid,postid,title,slug,keyword,img1,img2,img3,img4,views,audio,video,seotitle,videoid,content) VALUES("
                . "'" . $author . "',"
                . "'" . $postid . "',"
                . "'" . $title . "',"
                . "'" . $slug . "',"
                . "'" . $keyword . "',"
                . "'" . $image_name1 . "',"
                . "'" . $image_name2 . "',"
                . "'" . $image_name3 . "',"
                . "'" . $image_name4 . "',"
                . "'" . $views . "',"
				. "'" .$audio. "',"
				. "'" .$video_name. "',"
				. "'" .$seotitle. "',"
				. "'" .$vidid. "',"
				. "'".$content."'"
		
				
                 . ")")) {	
				 
			if($audio!=""){move_uploaded_file($audio_temp, '../uploads/audio/'.$audio);
		 
		}		
			
				 if($image_name1!=""){move_uploaded_file($image_temp1, '../uploads/images/'.$image_name1);}
				 if($image_name2!=""){move_uploaded_file($image_temp2, '../uploads/images/'.$image_name2);}
				 if($image_name3!=""){move_uploaded_file($image_temp3, '../uploads/images/'.$image_name3);}
				 if($image_name4!=""){move_uploaded_file($image_temp4, '../uploads/images/'.$image_name4);}
				 
				if($video_name!=""){move_uploaded_file($video_temp, '../uploads/video/'.$video_name);}
            return true;
			
	
	}
		
    }                               

        
        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	
	
	
	
	public function update_event($id,$title,$videoid,$content) { $err="";
		
	$title = esc(trim($title));
					$videoid = esc(trim($videoid));
					$content = esc(trim($content));
					
					
		 
		 $slug = $title;
		 $slug = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $slug);
		 $slug = preg_replace('/\s+/', '-', $slug);
		 $slug = preg_replace('/-+/', '-', $slug);
		 $slug = strtolower($slug);
		 $slug = trim($slug);
		 
		 $author = ucwords($usersid);


$keyword = preg_replace('/[^A-Za-z0-9\ ]/', '', $title);
		 $keyword = strtolower($keyword);
		 
		 
		 $seo = $title;
		 $seotitle = ucwords($seo);
				
$check_email = $this->mysqli->query("SELECT * FROM events WHERE title = '".$title."' and postid!='".$id."'");
		$fiel_cnt = $check_email->num_rows; 
	
		
					 if ( $title==""){$err="<li>Event Title Cannot Be Empty, The Title of The Program</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $content==""){$err="<li>Content Box Cannot Be Empty</li>";  $GLOBALS['pc_err']=$err;}		
					 if( $fiel_cnt > 0) {$err="<li>This Post Already Exist On Our Database</li>";  $GLOBALS['cp_exist']=$err;}
					 
				if (strpos($videoid, '=') !== false) {

   $vidid = substr($videoid, strrpos($videoid, '=') + 1);
   
}elseif (strpos($videoid, '/') !== false){
$vidid = substr($videoid, strrpos($videoid, '/') + 1);
}else{

$vidid = $videoid;

}	 
					 
if($err=="" ){
	

	  if($this->mysqli->query("UPDATE events  SET "
                . "slug='" .$slug . "',"
                . "videoid='" .$vidid . "',"
                . "seotitle='" .$seotitle . "',"
                . "title='" .$title . "',"
                . "content='" .$content . "',"
                . "keyword='" .$keyword . "',"
                . "updated_at=now()"


				 . " WHERE postid=" .$id))
	
	
	 { 	
				 
	
			
            return true;
			
	
	
		
    }                               
}

        
        $this->error = $this->mysqli->error;
        return false;
    }





	
	
	
	
	
public function delete_event($id) {
        if($this->mysqli->query("DELETE FROM events WHERE postid=" . $id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
	/////////////////////////////////////////////////////////   ADD SERMON
	
	
	
	
	
	public function add_sermon($title,$verse,$videoid,$sermondate,$content,$pastor,$image_temp,$image_type,$image_size,$image_name,$video_temp,$video_type,$video_size,$video_name,$audio_temp,$audio_type,$audio_size,$audio,$usersid) { $err="";



$verse = esc(trim($verse));
					$sermondate = esc(trim($sermondate));
					$title = esc(trim($title));
					$pastor = esc(trim($pastor));
					$videoid = esc(trim($videoid));
					
					
					$content = esc(trim($content));
					
					$sermondates = ''.date('dS, F Y', strtotime($sermondate)).'';
					
					
		 
		 $slug = $title."-by-".$pastor;
		 $slug = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $slug);
		 $slug = preg_replace('/\s+/', '-', $slug);
		 $slug = preg_replace('/-+/', '-', $slug);
		 $slug = strtolower($slug);
		 $slug = trim($slug);
		 
		 $author = ucwords($usersid);
		 
		 
		 $keyword = $title." by ".$pastor." on ".$sermondates.", ".$title." by ".$pastor;
		 $keyword = strtolower($keyword);
		 
		 
		 $seo = $title." (By: ".$pastor.") on ".$sermondates;
		 $seotitle = ucwords($seo);
		 
		

	 $number = mt_rand(100000, 999999);
	 $sermonid = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 
$errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
$bytes = 5120;
$KB = 5120;
$totalBytes = $bytes * $KB;
$UploadFolder = "../uploads/images";



$image_name = preg_replace("/[^a-z-A-Z0-9.]/",'-',$image_name);
$image_name = preg_replace('/\-+/', '-', $image_name);
$image_name = strtolower($image_name);


	 if(!empty($image_name)){$image_name=$number."-".$image_name;
	 
	 
   if($image_size > $totalBytes)
    {
      $err="<li>The Sermon Image Exceeds Maximum Upload Size of 5MB."; $GLOBALS['imgerr1']=$err;
    }
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $image_name) ) {$err="<li>Inavlid Image 1 format."; $GLOBALS['imgerr2']=$err;}
	
	} else { $err="<li>Sermon Image is Compulsory."; $GLOBALS['imgerr1']=$err;}
	 
	 
	 if($audio!=""){$audio="[UncommonMiracle.com] ".$audio;}
	 if($audio!=""){
	     if (!preg_match("/.(MP3|mp3)$/i", $audio) ) {$err="<li>Audio File Must be In Mp3 Format."; $GLOBALS['ft_err']=$err;}
	 
	 }
	
	
 if($video_name!=""){$video_name="[UncommonMiracle.com] ".$video_name;}
	 if($video_name!=""){
	     if (!preg_match("/.(MP4|mp4)$/i", $video_name) ) {$err="<li>Video File Must be In Mp4 Format."; $GLOBALS['ft_err']=$err;}
	 
	 }
	
	
 
$counter = 0;


if (strpos($videoid, '=') !== false) {

   $vidid = substr($videoid, strrpos($videoid, '=') + 1);
   
}elseif (strpos($videoid, '/') !== false){
$vidid = substr($videoid, strrpos($videoid, '/') + 1);
}else{

$vidid = $videoid;

}


					
						$content = str_replace("'", "", $content);
				
$check_email = $this->mysqli->query("SELECT * FROM sermons WHERE slug = '".$slug."'");
		$fiel_cnt = $check_email->num_rows; 
	
	
	
			  	   
					if(!isset($image_name)){$err="<li>Sermon Image is compulsory, It Serves as Thumbnail</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $title==""){$err="<li>Sermon tile Cannot Be Empty, The Title of The Program</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $pastor==""){$err="<li>Sermon Pastor/Prophet Cannot Be Empty</li>";  $GLOBALS['pc_err']=$err;}		
					 if ( $sermondate==""){$err="<li>Sermon Must have a Specific Time</li>";  $GLOBALS['pp_err']=$err;}
					 if( $fiel_cnt > 0) {$err="<li>Sermon Already Exist On Our Database</li>";  $GLOBALS['cp_exist']=$err;}
					 
					 
					 
if($err==""){
	
$views = '1';

if($this->mysqli->query("INSERT INTO sermons(sermonid,title,slug,content,bible_verse,videoid,sermondate,author,audio,video,image,pastor,views,seo,keyword) VALUES("
                . "'" . $sermonid . "',"
                . "'" . $title . "',"
                . "'" . $slug . "',"
                . "'" . $content . "',"
                . "'" . $verse . "',"
                . "'" . $vidid . "',"
				. "'" .$sermondate. "',"
				. "'" .$author. "',"
				. "'" .$audio. "',"
				. "'" .$video_name. "',"
				. "'" .$image_name. "',"
				. "'" .$pastor. "',"
				. "'".$views."',"
				. "'".$seotitle."',"
				. "'".$keyword."'"
		
				
                 . ")")) {	
				 
			if($audio!=""){move_uploaded_file($audio_temp, '../uploads/audio/'.$audio);
		 
		}		
			
				 if($image_name!=""){move_uploaded_file($image_temp, '../uploads/images/'.$image_name);}
				if($video_name!=""){move_uploaded_file($video_temp, '../uploads/video/'.$video_name);}
            return true;
			
	
	}
		
    }                               

        
        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	
	
	
	public function update_sermon($id,$title,$verse,$videoid,$sermondate,$content,$pastor) { $err="";
		
	
$verse = esc(trim($verse));
					$sermondate = esc(trim($sermondate));
					$title = esc(trim($title));
					$pastor = esc(trim($pastor));
					$videoid = esc(trim($videoid));
					
					
					$content = esc(trim($content));
					
					$sermondates = ''.date('dS, F Y', strtotime($sermondate)).'';
					
					
		 
		 $slug = $title."-by-".$pastor;
		 $slug = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $slug);
		 $slug = preg_replace('/\s+/', '-', $slug);
		 $slug = preg_replace('/-+/', '-', $slug);
		 $slug = strtolower($slug);
		 $slug = trim($slug);
		 
		 $author = ucwords($usersid);
		 
		 
		 $keyword = $title." by ".$pastor." on ".$sermondates.", ".$title." by ".$pastor;
		 $keyword = strtolower($keyword);
		 
		 
		 $seo = $title." (By: ".$pastor.") on ".$sermondates;
		 $seotitle = ucwords($seo);
		 ;
		 
				
$check_email = $this->mysqli->query("SELECT * FROM sermons WHERE title = '".$title."' and sermonid!='".$id."'");
		$fiel_cnt = $check_email->num_rows; 
	
	
			  	   
							
					 if ( $title==""){$err="<li>Sermon tile Cannot Be Empty, The Title of The Program</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $pastor==""){$err="<li>Sermon Pastor/Prophet Cannot Be Empty</li>";  $GLOBALS['pc_err']=$err;}		
					 if ( $sermondate==""){$err="<li>Sermon Must have a Specific Time</li>";  $GLOBALS['pp_err']=$err;}
                     if( $fiel_cnt > 0) {$err="<li>Sermon Already Exist On Our Database</li>";  $GLOBALS['cp_exist']=$err;}
				
if (strpos($videoid, '=') !== false) {

   $vidid = substr($videoid, strrpos($videoid, '=') + 1);
   
}elseif (strpos($videoid, '/') !== false){
$vidid = substr($videoid, strrpos($videoid, '/') + 1);
}else{

$vidid = $videoid;

}				


					 
					 
if($err=="" ){

	  if($this->mysqli->query("UPDATE sermons  SET "
                . "slug='" .$slug . "',"
                . "videoid='" .$videoid . "',"
                . "bible_verse='" .$verse . "',"
                . "videoid='" .$vidid . "',"
                . "sermondate='" .$sermondate . "',"
                . "pastor='" .$pastor . "',"
                . "seo='" .$seotitle . "',"
                . "title='" .$title . "',"
                . "content='" .$content . "',"
                . "keyword='" .$keyword . "',"
                . "updated_at=now()"


				 . " WHERE sermonid=" .$id))
	
	
	 { 	
				 
	
			
            return true;
			
	
	
		
    }                               
}

        
        $this->error = $this->mysqli->error;
        return false;
    }





	
	
	
	
	
public function delete_sermon($id) {
        if($this->mysqli->query("DELETE FROM sermons WHERE sermonid=" . $id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	
	
	/////////////////////////////////////////////////////////   ADD ACTIVITIES
	 

public function add_act($day,$period,$title,$start,$end,$videoid,$content,$image_temp,$image_type,$image_size,$image_name,$video_temp,$video_type,$video_size,$video_name,$audio_temp,$audio_type,$audio_size,$audio,$usersid) { $err="";


		 $slug = $day."-".$period."-".$title;
		 $slug = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $slug);
		 $slug = preg_replace('/\s+/', '-', $slug);
		 $slug = preg_replace('/-+/', '-', $slug);
		 $slug = strtolower($slug);
		 $slug = trim($slug);
		 $author = ucwords($usersid);
		 
		 
		 $keyword = $day." ".$period." ".$title.", ".$day.", ".$period.", ".$title;
		 $keyword = strtolower($keyword);
		 
		 
		 $seo = $day." (".$period."): ".$title." (Starting from ".$start." to ".$end.")";
		 $seotitle = ucwords($seo);
		 
		 
		 
		 

	 $number = mt_rand(100000, 999999);
	 $actid = mt_rand(100, 999)."".mt_rand(1000, 9999);
	 
$errors = array();
$uploadedFiles = array();
$extension = array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
$bytes = 5120;
$KB = 5120;
$totalBytes = $bytes * $KB;
$UploadFolder = "../doc/images";



$image_name = preg_replace("/[^a-z-A-Z0-9.]/",'-',$image_name);
$image_name = preg_replace('/\-+/', '-', $image_name);
$image_name = strtolower($image_name);


	 if(!empty($image_name)){$image_name=$number."-".$image_name;
	 
	 
   if($image_size > $totalBytes)
    {
      $err="<li>The Activity Image Exceeds Maximum Upload Size of 5MB."; $GLOBALS['imgerr1']=$err;
    }
	  if (!preg_match("/.(JPG|jpg|JPEG|jpeg|PNG|png|GIF|gif)$/i", $image_name) ) {$err="<li>Inavlid Image 1 format."; $GLOBALS['imgerr2']=$err;}
	
	} else { $err="<li>Activity Image is Compulsory."; $GLOBALS['imgerr1']=$err;}
	 
	 
	 if($audio!=""){$audio="[UncommonMiracle.com] ".$audio;}
	 if($audio!=""){
	     if (!preg_match("/.(MP3|mp3)$/i", $audio) ) {$err="<li>Audio File Must be In Mp3 Format."; $GLOBALS['ft_err']=$err;}
	 
	 }
	
	
 if($video_name!=""){$video_name="[UncommonMiracle.com] ".$video_name;}
	 if($video_name!=""){
	     if (!preg_match("/.(MP4|mp4)$/i", $video_name) ) {$err="<li>Video File Must be In Mp4 Format."; $GLOBALS['ft_err']=$err;}
	 
	 }
	
	
 
$counter = 0;


if (strpos($videoid, '=') !== false) {

   $vidid = substr($videoid, strrpos($videoid, '=') + 1);
   
}elseif (strpos($videoid, '/') !== false){
$vidid = substr($videoid, strrpos($videoid, '/') + 1);
}else{

$vidid = $videoid;

}


					$day = esc(trim($day));
					$period = esc(trim($period));
					$title = esc(trim($title));
					$start = esc(trim($start));
					$end = esc(trim($end));
					$videoid = esc(trim($videoid));
					
					
					$content = esc(trim($content));
						$content = str_replace("'", "", $content);
				
$check_email = $this->mysqli->query("SELECT * FROM activities WHERE slug = '".$slug."'");
		$fiel_cnt = $check_email->num_rows; 
	
	
	
			  	   
					if(!isset($image_name)){$err="<li>Activity Image is compulsory, It Serves as Thumbnail</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $title==""){$err="<li>Activity tile Cannot Be Empty, The Title of The Program</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $period==""){$err="<li>Activity Period Cannot Be Empty, Either Monday or Tuesday</li>";  $GLOBALS['pc_err']=$err;}		
					 if ( $start==""){$err="<li>Activity Must have a Start Time</li>";  $GLOBALS['pp_err']=$err;}
					 if ( $end==""){$err="<li>Activity Must have a Ending Time</li>";  $GLOBALS['pp_err']=$err;}
					 if( $fiel_cnt > 0) {$err="<li>Activity Already Exist On Our Database</li>";  $GLOBALS['cp_exist']=$err;}
					 
					 
					 
if($err==""){

if($this->mysqli->query("INSERT INTO activities(userid,actid,slug,period,day,videoid,audiofile,videofile,img,start,end,seotitle,title,content,keyword) VALUES("
                . "'" . $author . "',"
                . "'" . $actid . "',"
                . "'" . $slug . "',"
                . "'" . $period . "',"
                . "'" . $day . "',"
				. "'" .$vidid. "',"
				. "'" .$audio. "',"
				. "'" .$video_name. "',"
				. "'" .$image_name. "',"
				. "'" .$start. "',"
				. "'".$end."',"
				. "'".$seotitle."',"
				. "'".$title."',"
				. "'".$content."',"
				. "'".$keyword."'"
		
				
                 . ")")) {	
				 
			if($audio!=""){move_uploaded_file($audio_temp, '../uploads/audio/'.$audio);
		 
		}		
			
				 if($image_name!=""){move_uploaded_file($image_temp, '../uploads/images/'.$image_name);}
				if($video_name!=""){move_uploaded_file($video_temp, '../uploads/video/'.$video_name);}
            return true;
			
	
	}
		
    }                               

        
        $this->error = $this->mysqli->error;
        return false;
    }
	



public function update_act($id,$day,$period,$title,$start,$end,$videoid,$content) { $err="";
		 $status="";
	

$day = esc(trim($day));
					$period = esc(trim($period));
					$title = esc(trim($title));
					$start = esc(trim($start));
					$end = esc(trim($end));
					$videoid = esc(trim($videoid));
					
					
					$content = esc(trim($content));
						$content = str_replace("'", "", $content);
						
						
						
$slug = $day."-".$period."-".$title;
		 $slug = preg_replace('/[^A-Za-z0-9\ ]/', ' ', $slug);
		 $slug = preg_replace('/\s+/', '-', $slug);
		 $slug = preg_replace('/-+/', '-', $slug);
		 $slug = strtolower($slug);
		 $slug = trim($slug);
		 
		 
		 $keyword = $day." ".$period." ".$title.", ".$day.", ".$period.", ".$title;
		 $keyword = strtolower($keyword);
		 
		 
		 $seo = $day." (".$period."): ".$title." (Starting from ".$start." to ".$end.")";
		 $seotitle = ucwords($seo);
		 
				
$check_email = $this->mysqli->query("SELECT * FROM activities WHERE title = '".$post_name."' and actid!='".$id."'");
		$fiel_cnt = $check_email->num_rows; 
	
	
			  	   
						
					 if(!isset($image_name)){$err="<li>Activity Image is compulsory, It Serves as Thumbnail</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $title==""){$err="<li>Activity tile Cannot Be Empty, The Title of The Program</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $period==""){$err="<li>Activity Period Cannot Be Empty, Either Monday or Tuesday</li>";  $GLOBALS['pc_err']=$err;}		
					 if ( $start==""){$err="<li>Activity Must have a Start Time</li>";  $GLOBALS['pp_err']=$err;}
					 if ( $end==""){$err="<li>Activity Must have a Ending Time</li>";  $GLOBALS['pp_err']=$err;}
                     if( $fiel_cnt > 0) {$err="<li>Activity Already Exist On Our Database</li>";  $GLOBALS['cp_exist']=$err;}
		

if (strpos($videoid, '=') !== false) {

   $vidid = substr($videoid, strrpos($videoid, '=') + 1);
   
}elseif (strpos($videoid, '/') !== false){
$vidid = substr($videoid, strrpos($videoid, '/') + 1);
}else{

$vidid = $videoid;

}		
					 
					 
if($err=="" ){


	  if($this->mysqli->query("UPDATE activities  SET "
                . "slug='" .$slug . "',"
                . "videoid='" .$vidid . "',"
                . "period='" .$period . "',"
                . "day='" .$day . "',"
                . "start='" .$start . "',"
                . "end='" .$end . "',"
                . "seotitle='" .$seotitle . "',"
                . "title='" .$title . "',"
                . "content='" .$content . "',"
                . "keyword='" .$keyword . "',"
                . "updated_at=now()"


				 . " WHERE actid=" .$id))
	
	
	 { 	
				 
	
			
            return true;
			
	
	
		
    }                               
}

        
        $this->error = $this->mysqli->error;
        return false;
    }





	
	
	
	
	
public function delete_act($id) {
        if($this->mysqli->query("DELETE FROM activities WHERE actid=" . $id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
	
	
	///////////////////////////////////

		 public function update_post($id,$post_name,$keyword,$post_content,$category,$tags,$videoid,$embed,$link,$seo) { $err="";
		 $status="";
	

$keyword = strtolower($keyword);

					$post_name =esc($post_name);
					$videoid =esc($videoid);
					$tags =esc($tags);
					$seo =esc($seo);
					$link =esc($link);
	               
					$keyword = esc($keyword);
					
					$post_content = esc($post_content);
						$post_content = str_replace("'", "", $post_content);
				
$check_email = $this->mysqli->query("SELECT * FROM posts WHERE title = '".$post_name."' and postid!='".$id."'");
		$fiel_cnt = $check_email->num_rows; 
	
	
	
			  	   
						
					 if ( $post_name==""){$err="<li>Post tile Cannot Be Empty</li>";  $GLOBALS['pn_err']=$err;}		
					 if ( $post_content==""){$err="<li>Content Cannot Be Empty</li>";  $GLOBALS['pc_err']=$err;}		
					 if ( $category==""){$err="<li>You Must Select a Category</li>";  $GLOBALS['pw_err']=$err;}
					 if ( $seo==""){$err="<li>SEO Title Cannot Be Empty</li>";  $GLOBALS['fj_err']=$err;}
                     if( $fiel_cnt > 0) {$err="<li>Post Already Exist On Nagornet</li>";  $GLOBALS['cp_exist']=$err;}
					 
				if (strpos($videoid, '=') !== false) {

   $vidid = substr($videoid, strrpos($videoid, '=') + 1);
   
}elseif (strpos($videoid, '/') !== false){
$vidid = substr($videoid, strrpos($videoid, '/') + 1);
}else{

$vidid = $videoid;

}	 
					 
if($err=="" ){

	  if($this->mysqli->query("UPDATE posts  SET "
                . "keyword='" .$keyword . "',"
                . "tags='" .$tags . "',"
                . "videoid='" .$vidid . "',"
                . "embed='" .$embed . "',"
                . "downloadlink='" .$link . "',"
                . "title='" .$post_name . "',"
                . "seotitle='" .$seo . "',"
                . "content='" .$post_content . "',"
                . "category='" .$category . "'"


				 . " WHERE postid=" .$id))
	
	
	 { 	
				 
	
			
            return true;
			
	
	
		
    }                               
}

        
        $this->error = $this->mysqli->error;
        return false;
    }


	 public function ailments_posts( $post_name,$ailment_name) { $err="";
					$post_name = trim(strip_tags( $post_name));
	                $ailment_name = trim(strip_tags( $ailment_name));

$check_email = $this->mysqli->query("SELECT * FROM ailments_posts WHERE post_name = '".$post_name."' && ailment_name = '".$ailment_name."' ");
		$fiel_cntd = $check_email->num_rows;

					 if ($post_name==""){$err="<li>post name cannot be empty</li>";  $GLOBALS['pn_err']=$err;}
					 if ( $ailment_name==""){$err="<li>post description cannot be empty</li>";  $GLOBALS['pc_err']=$err;}
                     if(	$fiel_cntd > 0) {$err="<li>post already exist</li>";  $GLOBALS['cp_exist']=$err;}
					    if($err==""){
        if($this->mysqli->query("INSERT INTO ailments_posts(post_name,ailment_name) VALUES("
                . "'" . $post_name. "',"
                . "'" . $ailment_name. "'"
                 . ")")) {
            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }
	/////////////////////////////////

	public function update_admin( $id,$username,$old,$pass1,$pass2) { $err="";
					$username = trim(strip_tags( $username));
	              $old=md5($old);

					$results = $this->mysqli->query("SELECT id FROM admin WHERE id='".$id."' AND password='".$old."'");
            if ($fiel_cntd=$results->num_rows == 0) { $err="<li>Old password in incorrect.</li>";  $GLOBALS['post4_err']=$err;}


					 if (strlen($username) < 5 ){$err="<li>username empty or short (max 6 characters )</li>";  $GLOBALS['post1_err']=$err;}
					if (($pass1!="") && (strlen($pass1) < 6 )){$err="<li>password too short or empty atleast 6 characters</li>";  $GLOBALS['post2_err']=$err;}
		if ($pass1 !== $pass2 ){$err="<li>password did not match</li>";  $GLOBALS['post3_err']=$err;}




					    if($err==""){

							 if (($pass1=="") && ($pass2=="") ) {$result = $this->mysqli->query("SELECT * FROM admin WHERE id='".$id."' ");
							 $ro = $result->fetch_array();
							  $pass1=$ro['password'];}else {$pass1=md5($pass1);}
     if($this->mysqli->query("UPDATE admin  SET "
                . "username='" .$username . "',"


				  . "password='" .$pass1 . "'"

				 . " WHERE id=" .$id)) {


            return true;
        }}

        $this->error = $this->mysqli->error;
        return false;
    }




	 public function update_aimentpro($id, $post_name,$ailment_name) { $err="";
					$post_name = trim(strip_tags( $post_name));
	                $ailment_name = trim(strip_tags( $ailment_name));

$check_email = $this->mysqli->query("SELECT * FROM ailments_posts WHERE post_name = '".$post_name."' && ailment_name = '".$ailment_name."' ");
		$fiel_cntd = $check_email->num_rows;



					 if ($post_name==""){$err="<li>post name cannot be empty</li>";  $GLOBALS['pn_err']=$err;}
					 if ( $ailment_name==""){$err="<li>post description cannot be empty</li>";  $GLOBALS['pc_err']=$err;}

					    if($err==""){
         if($this->mysqli->query("UPDATE ailments_posts SET "
                . "post_name='" .$post_name . "',"
				 . "ailment_name='" .$ailment_name. "'"
				 . " WHERE id=" .$id)) {
            return true;
        }}}

		 public function delete_postailment($id) {
        if($this->mysqli->query("DELETE FROM ailments_posts WHERE id=" . $id)) {
            return true;
        }

        $this->error = $this->mysqli->error;
        return false;
    }
		}