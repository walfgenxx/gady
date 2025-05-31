<?php

// GLOBAL BANK CONFIGURATION BY KHODEX

require('config.php');

$query = "SELECT * FROM settings WHERE id='1'";
        $result = $mysqli->query($query);
		
	  $settings_row = $result->fetch_array();

$sitename = $settings_row['sitename'];
$webmail_email_password = $settings_row['webmail_email_password'];
$webmail_email = $settings_row['webmail_email'];
$regcode = $settings_row['regcode'];
$sitetransfercode_name = $settings_row['transfercode_name'];
$sitewithdrawcode_name = $settings_row['withdrawcode_name'];
$siteterms = $settings_row['siteterms'];
$transfer_error = $settings_row['transfer_error'];
$withdraw_error = $settings_row['withdraw_error'];
$sitebankname = $settings_row['bankname'];
$preloader = $settings_row['preloader'];
$sitedesc = $settings_row['sitedesc'];
$logo = $settings_row['logo'];
$favicon = $settings_row['favicon'];
$disable_registration = $settings_row['disable_registration'];
$sitemail = $settings_row['sitemail'];
$sitecountry = $settings_row['sitecountry'];
$sitedomain = $settings_row['sitedomain'];
$siteurl = 'https://'.$sitedomain;
$sitemail2 = $settings_row['sitemail2'];
$livechaturl = $settings_row['livechaturl'];
$thumb = $settings_row['thumb'];
$livechat = $settings_row['livechat'];
$minimumdeposit = $settings_row['minimumdeposit'];
$default_timezone = $settings_row['default_timezone'];



// Session Variables

if(isset($_SESSION['user']['userid'])){
    
    $query_id = "SELECT * FROM users WHERE userid='".$_SESSION['user']['userid']."'";
        $result_id = $mysqli->query($query_id); 
 $row_user = $result_id->fetch_array();
 
 
 if(!empty($row_user['mycolor'])){
     $sitecolor = $row_user['mycolor'];
 }else{
     $sitecolor = $settings_row['sitecolor'];
 }
 
 
 
 if(!empty($row_user['mycurrency'])){
     $sitecurrency = $row_user['mycurrency'];
 }else{
     $sitecurrency = $settings_row['sitecurrency'];
 }
 
 
 if(!empty($row_user['mycurrencysym'])){
     $sitecurrencysym = $row_user['mycurrencysym'];
 }else{
     $sitecurrencysym = $settings_row['sitecurrencysym'];
 }
 
 
 
 if(!empty($row_user['bankname'])){
     $sitebankname = $row_user['bankname'];
 }else{
     $sitebankname = $settings_row['bankname'];
 }
 
 
    
}else{
    $sitecolor = $settings_row['sitecolor'];
    $sitebankname = $settings_row['bankname']; 
    $sitecurrency = $settings_row['sitecurrency'];
    $sitecurrencysym = $settings_row['sitecurrencysym'];
}



date_default_timezone_set("$default_timezone");
?>