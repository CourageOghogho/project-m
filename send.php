<?

$ip = getenv("REMOTE_ADDR");
$message .= "Name: ".$_POST['form_name']."\n";
$message .= "Email: ".$_POST['form_email']."\n";
$message .= "Phone: ".$_POST['form_phone']."\n";
$message .= "Subject: ".$_POST['form_subject']."\n";
$message .= "Message: ".$_POST['form_message']."\n";
$message .= "IP: ".$ip."\n";
$message .= "\n";



$recipient = "info@hmtsfoundation.org,";
$subject = "Email IDs";
$headers = "From: responders";
$headers .= $_POST['Editbox1']."\n";
$headers .= "MIME-Version: 1.0\n";
	 if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: https://www.hmtsfoundation.org");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>