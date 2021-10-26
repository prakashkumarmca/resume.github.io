<?php
//print_r($_POST);
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$phone= $_REQUEST['phone'];
$contant= $_REQUEST['message'];
?>




<?php
         $to = "pprakashkumarppp@gmail.com";
         $subject = "Enquiry From  GV Website!";
         
            $message = "<b>Enquiry From GV Website!</b>";
			$message .= "<h3>Name:$name.</h3>";
			$message .= "<h3>Email:$email.</h3>";				
			$message .= "<h3>Phone:$phone.</h3>";
			$message .= "<h3>Message:$contant.</h3>";
         $header = "From:$email \r\n";
        
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
			?>
				<script language="javascript">
setTimeout(function() {
    $('#confDivC').fadeOut('fast');
}, 10000);
 window.location="contact.html";
</script>   
			<?php
         }else {
            echo "Message could not be sent...";
         }
      ?>