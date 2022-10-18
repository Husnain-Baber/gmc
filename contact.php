<?php 

if (isset($_POST)) {
   
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
    // print_r($name.$email.$phone.$message);
    // die();
	$to_mail="husnainbaber@gmail.com,sales@gmetalco.com";

	$dated_="Date: ". date('d-M-Y').PHP_EOL . PHP_EOL;

	$sender_name= " Sender Name: ".$name.PHP_EOL . PHP_EOL;
    $sender_email=" Sender Email: ".$email.PHP_EOL . PHP_EOL;
    $sender_phone=" Sender Phone: ".$phone.PHP_EOL . PHP_EOL;
    $sender_message=" Message: ". $message.PHP_EOL . PHP_EOL;
    $totalmsg=$dated_ . $sender_name . $sender_email . $sender_phone . $sender_message .PHP_EOL . PHP_EOL;
	$mail_sent = mail($to_mail, "Contact Form Global Metal Corporation", $totalmsg, "From:" . $email);

    if($mail_sent) {

        echo "Thanks! we have received your message.";
    }
    else{
        echo "Sorry! Due to some problem email could not be sent";
    }
	
}
else {
    echo "Server Error";
    die;
}

?>