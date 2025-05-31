<?php use PHPMailer\PHPMailer\PHPMailer; require_once '../vendor/autoload.php'; require_once('../data/settings.php'); date_default_timezone_set("$default_timezone");

$title = 'Send Mail - Admin - '.$sitename;
$thepage = 'Send Mail';

include('header.php');



if (isset($_POST['mail'])) {
    $con = new khodexclass($mysqli);
    if ($con->mailer($_POST['mail_fullname'],$_POST['sendername'],$_POST['subject'],$_POST['email'],$_POST['message'],$sitename,$sitedomain)) {$erro="good";
    
    // Mailing
    
 
    $email_msg = $_SESSION['email_message'];
     $email_subject = $_SESSION['email_subject'];
     $email_receiver = $_SESSION['email_receiver'];
     $email_sender = $_SESSION['email_sendername'];
     $mail_fullname = $_SESSION['mail_fullname'];
    
    
    
    $mail = new PHPMailer(true);
      
                //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->Host       = $sitedomain;  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = $webmail_email;                     // SMTP username
                $mail->Password   = $webmail_email_password;                               // SMTP password
                $mail->SMTPSecure = 'ssl';                               // Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 465;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom($webmail_email, $_SESSION['email_sendername']);
                $mail->addAddress($_SESSION['email_receiver'], $_SESSION['mail_fullname']);               // Name is optional

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $_SESSION['email_subject'];
                $mail->Body = $_SESSION['email_message'];
                $mail->send();
                
       unset($_SESSION['email_message'],$_SESSION['email_subject'],$_SESSION['email_receiver'],$_SESSION['mail_fullname'],$_SESSION['email_sendername']);         
                
    
    
    } else {
      $erro="bad";
    }
}?>

    <div id="main-wrapper">

        <?php include('top.php'); include('nav.php'); include('sidebar.php');?>
		
		<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
				    
				    
				    
					<div class="col-xl-12">
						<div class="col-12">
						    
						    
						    	<?php if ($erro == "fatal") {
    ?>
	
	<div class="alert alert-danger solid alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
									<strong>Error!</strong><ul> <?php echo"". $pn_err ."".$ad_err ."".$pc_err."".$errok."". $pa_err ."".$a_exist."".$cp_exist."".$pp_err."".$ft_err."".$fj_err."".$fz_err."".$fz_err2; ?></ul>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
    <?php
}elseif ($erro == "good") {
?>


<div class="alert alert-success solid alert-dismissible fade show">
									<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
									<strong>Success!</strong> Mail sent successfully!!
		 
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                    </button>
                                </div>
								
								
								<?php }
		?>
                                
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $thepage;?></h4>
                            </div>
                            <div class="card-body">
                                
								
							<form action="" method="post">
  <div class="row">
  
  <div class="col-md-4 mb-4"><div class="form-group">
<label for="title">Reciever's Email</label>
<input type="email" name="email" placeholder="eg: caleb@gmail.com" id="from" class="form-control" value="<?php if(isset($_POST['mail']) && $erro="bad"){echo $_POST['email'];}?>">
</div></div>

<div class="col-md-4 mb-4"><div class="form-group">
<label for="title">Reciever's Name</label>
<input type="text" name="mail_fullname" placeholder="Client Fullname here" id="from" class="form-control" value="<?php if(isset($_POST['mail']) && $erro="bad"){echo $_POST['mail_fullname'];}?>">
</div></div>
									
									<div class="col-md-4 mb-4"><div class="form-group">
<label for="title">From</label>
<input type="text" name="sendername" id="from" class="form-control" value="<?php echo ucwords($sitename);?>">
</div></div>
  </div>
 

  <div class="form-group mb-4">
<label for="title">Mail Subject</label>
<input type="text" placeholder="Subject here..." name="subject" id="subject" class="form-control" value="<?php if(isset($_POST['mail']) && $erro="bad"){echo $_POST['subject'];}?>">
</div>
  <div class="form-group">
<label for="content">Message</label>
<textarea name="message" id="message" class="form-control" rows="10"><?php if(isset($_POST['mail']) && $erro="bad"){echo $_POST['message'];}?></textarea>
			<script>
                // Replace the <textarea id="message"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'message' );
            </script>
									</div>
  <button type="submit" class="btn btn-success btn-block btn-lg mt-2" name="mail" style="width: 100%;"><i class="fa fa-envelope"></i> Send Mail Now</button>
</form>
								
								
                            </div>
                        </div>
                    </div>
					</div>
				</div>
            </div>
        </div>
        
		<?php include('footer.php');?>