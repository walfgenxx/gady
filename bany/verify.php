<?php require_once('data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'OTP Verification - Session &raquo; '.$_GET['otp'].' | '.$sitename;
$thepage = 'login';

include('header.php'); 

if(isset($_SESSION['user']['username'])){
	header('location: ./');
}


if(empty($_SESSION['otp'])){
	header('location: ./');
}



if(empty($_SESSION['otp']) || empty($_SESSION['timestamp'])){
	header('location: ./');
}else{
    
    $_SESSION['user_start'] = time();
}

if((time() - $_SESSION['timestamp']) > 900) // 300 = 5 Minutes
           {  
               session_destroy();
               unset($_SESSION['timestamp'],$_SESSION['user_start'],$_SESSION['otp']);
              header('location: ./'); 
           }

if((time() - $_SESSION['user_start']) > 900) // 300 = 5 Minutes
           {  
               session_destroy(); 
               unset($_SESSION['user_start'],$_SESSION['user_start'],$_SESSION['otp']);
               header('location: ./');
           }





if(isset($_POST['verify'])){$pin=$_POST['pin'];

if($pin!=$_SESSION['otp']){
	$erro="otpfail";
	$_SESSION['trial'] = $_SESSION['trial']+1;
} else{
	
setcookie ("username",$_SESSION["usernam"],time()+ (10 * 365 * 24 * 60 * 60));
				if(isset($_COOKIE["username"])) {
					setcookie ("username","");
				}
				
				$uzs = $_SESSION["usernam"];
				$us = $_SESSION["password"];
				
				
				$query = "SELECT * FROM users WHERE (username='".$uzs."' || email='".$uzs."') AND password='".$us."'";
        $result = $mysqli->query($query);
						   
						 
		   $_SESSION['user'] = $result->fetch_array();

		  
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


$mysqli->query("UPDATE users SET lastloginbrowser='".$BrowserInfo."', lastloginip='".$IpInfo."', logincounts=logincounts+1, lastlogin=now() WHERE userid='".$_SESSION['user']['userid']."'");

unset($_SESSION['usernam'],$_SESSION['user_start'],$_SESSION['password'],$_SESSION['view'],$_SESSION['views'],$_SESSION['trial'],$_SESSION['email'],$_SESSION['otp'],$_SESSION['timestamp']);
                
header('location: ./');
            		
}}


if($_SESSION['trial']>3){
	unset($_SESSION['usernam'],$_SESSION['user_start'],$_SESSION['password'],$_SESSION['view'],$_SESSION['views'],$_SESSION['trial'],$_SESSION['email'],$_SESSION['otp'],$_SESSION['timestamp']);
        header("location: ./");
}


$emailz = $_SESSION['email'];
$first = substr($emailz, 0, 4);
$after = substr($emailz, strpos($emailz, "@") + 1);    
$HiddenEmail = $first.'*********@'.$after;
?>

    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>Enter Login OTP Code</h1>
            <h4>Enter the 4 digit verification code sent to your email, Check your Inbox, Spambox or Junk Folder.<br /><br />
            <b>NOTE:</b> it comes in less than 15 minutes, not instantly.</h4>
        </div>
		
		<div class="section mb-5 p-2"> 
		<?php if ($erro == "otpfail") {
    ?><div class="alert alert-imaged alert-danger alert-dismissible fade show mb-2" role="alert">
                        <div class="icon-wrap">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
                        </div>
                        <div>
                            Error! <br/>
							Error! OTP Code is Invalid, You Have Only 3 Trails, You have Used <?php echo $_SESSION['trial'];?> out of 3
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
	<?php }?>
            <form action="" method="POST">
                <div class="form-group basic">
                    <input type="text" name="pin" pattern="[0-9]*" required class="form-control verification-input" id="smscode" placeholder="••••"
                        maxlength="4">
                </div>

                <div class="form-button-group transparent">
                    <button name="verify" type="submit" class="btn btn-primary btn-block btn-lg">Verify</button>
                </div>

            </form>
			<hr />
			<center>E-Mail: <?= $HiddenEmail;?></center>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>


</body>

</html>