<?php

	ob_start();
	session_start();
	//require_once 'dbconnect.php';
	include "sqlconnec.php";
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: login.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
include "sqlconnec.php";
include "QR_BarCode.php";
$qr = new QR_BarCode(); 
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
//require '../vendor/autoload.php';

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
$search = $_SESSION['search'];


$result = mysqli_query($conn,"SELECT * FROM notion WHERE email='".$search."'");
$rows = mysqli_fetch_array($result);

$attendance="A";
$enum	=	$rows['enum'];
$fname    =  $rows['fname'];
$lname    =  $rows['lname'];
$pnum	=	$rows['pnum'];
$email   =  $rows['email'];
$institute    =  $rows['institute'];
$course	=	$rows['course'];
$event_1=$rows['event_1'];
$event_2=$rows['event_2'];
$event_3=$rows['event_3'];
$event_4=$rows['event_4'];
$event_5=$rows['event_5'];
$event_6=$rows['event_6'];
$event_7=$rows['event_7'];
$event_8=$rows['event_8'];
$event_9=$rows['event_9'];
$event_10=$rows['event_10'];
$event_11=$rows['event_11'];
$event_12=$rows['event_12'];
$event_13=$rows['event_13'];
$event_14=$rows['event_14'];
$event_15=$rows['event_15'];
$event_16=$rows['event_16'];
$event_17=$rows['event_17'];
$event_18=$rows['event_18'];
$event_19=$rows['event_19'];
$event_20=$rows['event_20'];
$nt_event_1=$rows['nt_event_1'];
$nt_event_2=$rows['nt_event_2'];
$nt_event_3=$rows['nt_event_3'];
$nt_event_4=$rows['nt_event_4'];
$nt_event_5=$rows['nt_event_5'];
$nt_event_6=$rows['nt_event_6'];
$nt_event_7=$rows['nt_event_7'];
$amount=$rows['total_money'];
$b=$rows['unique_qr'];
date_default_timezone_set('Asia/Kolkata');
$date = date('m/d/Y');
$time = date('h:i:s a');

		// create text QR code
		$qr->text($b);
		
		// save QR code image
		$qr->qrCode(200,'qr/'.$b.'.png');
		
		//$temp = 'images/'.$name.'.png';
		$temp = 'qr/'.$b.'.png';
try
{
	mysqli_query($conn,"INSERT into payment (temp_no,unique_qr,enum,fname,lname,pnum,email,institute,course,reciever,amount,date,time) VALUES('".$search."','".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$userRow['userEmail']."','".$amount."','".$date."','".$time."')");
if($event_1)
{
	mysqli_query($conn,"INSERT into event_1 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_1,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_1."','".$temp."','".$attendance."')");
}
if($event_2)
{
	mysqli_query($conn,"INSERT into event_2 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_2,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_2."','".$temp."','".$attendance."')");
}
if($event_3)
{
	mysqli_query($conn,"INSERT into event_3 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_3,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_3."','".$temp."','".$attendance."')");
}
if($event_4)
{
	mysqli_query($conn,"INSERT into event_4 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_4,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_4."','".$temp."','".$attendance."')");
}
if($event_5)
{
	mysqli_query($conn,"INSERT into event_5 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_5,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_5."','".$temp."','".$attendance."')");
}
if($event_6)
{
	mysqli_query($conn,"INSERT into event_6 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_6,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_6."','".$temp."','".$attendance."')");
}
if($event_7)
{
	mysqli_query($conn,"INSERT into event_7 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_7,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_7."','".$temp."','".$attendance."')");
}
if($event_8)
{
	mysqli_query($conn,"INSERT into event_8 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_8,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_8."','".$temp."','".$attendance."')");
}
if($event_9)
{
	mysqli_query($conn,"INSERT into event_9 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_9,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_9."','".$temp."','".$attendance."')");
}
if($event_10)
{
	mysqli_query($conn,"INSERT into event_10 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_10,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_10."','".$temp."','".$attendance."')");
}
if($event_11)
{
	mysqli_query($conn,"INSERT into event_11 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_11,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_11."','".$temp."','".$attendance."')");
}
if($event_12)
{
	mysqli_query($conn,"INSERT into event_12 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_12,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_12."','".$temp."','".$attendance."')");
}
if($event_13)
{
	mysqli_query($conn,"INSERT into event_13 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_13,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_13."','".$temp."','".$attendance."')");
}
if($event_14)
{
	mysqli_query($conn,"INSERT into event_14 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_14,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_14."','".$temp."','".$attendance."')");
}
if($event_15)
{
	mysqli_query($conn,"INSERT into event_15 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_15,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_15."','".$temp."','".$attendance."')");
}
if($event_16)
{
	mysqli_query($conn,"INSERT into event_16 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_16,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_16."','".$temp."','".$attendance."')");
}
if($event_17)
{
	mysqli_query($conn,"INSERT into event_17 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_17,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_17."','".$temp."','".$attendance."')");
}
if($event_18)
{
	mysqli_query($conn,"INSERT into event_18 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_18,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_18."','".$temp."','".$attendance."')");
}
if($event_19)
{
	mysqli_query($conn,"INSERT into event_19 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_19,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_19."','".$temp."','".$attendance."')");
}
if($event_20)
{
	mysqli_query($conn,"INSERT into event_20 (unique_qr,enum,fname,lname,pnum,email,institute,course,event_20,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_20."','".$temp."','".$attendance."')");
}
if($nt_event_1)
{
	mysqli_query($conn,"INSERT into nt_event_1 (unique_qr,enum,fname,lname,pnum,email,institute,course,nt_event_1,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$nt_event_1."','".$temp."','".$attendance."')");
}
if($nt_event_2)
{
	mysqli_query($conn,"INSERT into nt_event_2 (unique_qr,enum,fname,lname,pnum,email,institute,course,nt_event_2,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$nt_event_2."','".$temp."','".$attendance."')");
}
if($nt_event_3)
{
	mysqli_query($conn,"INSERT into nt_event_3 (unique_qr,enum,fname,lname,pnum,email,institute,course,nt_event_3,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$nt_event_3."','".$temp."','".$attendance."')");
}
if($nt_event_4)
{
	mysqli_query($conn,"INSERT into nt_event_4 (unique_qr,enum,fname,lname,pnum,email,institute,course,nt_event_4,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$nt_event_4."','".$temp."','".$attendance."')");
}
if($nt_event_5)
{
	mysqli_query($conn,"INSERT into nt_event_5 (unique_qr,enum,fname,lname,pnum,email,institute,course,nt_event_5,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$nt_event_5."','".$temp."','".$attendance."')");
}
if($nt_event_6)
{
	mysqli_query($conn,"INSERT into nt_event_6 (unique_qr,enum,fname,lname,pnum,email,institute,course,nt_event_6,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$nt_event_6."','".$temp."','".$attendance."')");
}
if($nt_event_7)
{
	mysqli_query($conn,"INSERT into nt_event_7 (unique_qr,enum,fname,lname,pnum,email,institute,course,nt_event_7,qr_code,attendance) VALUES('".$b."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$nt_event_7."','".$temp."','".$attendance."')");
}


		//echo "<br>you have to pay $total";	

		// create text QR code
		//$qr->text($b);
		
		// save QR code image
		//$qr->qrCode(200,'qr/'.$b.'.png');
		
		//$temp = 'images/'.$name.'.png';
		//$temp = 'qr/'.$b.'.png';
		
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		//Set the hostname of the mail server
		$mail->Host = 'smtp-mail.outlook.com';
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "notion_2018@outlook.com";
		//Password to use for SMTP authentication
		$mail->Password = "notion@2018";
		//Set who the message is to be sent from
		$mail->setFrom('notion_2018@outlook.com', 'NOTION 2018');
		//Set an alternative reply-to address
		//$mail->addReplyTo('notion2018@gmail.com', 'First Last');
		//Set who the message is to be sent to
		$mail->addAddress($email, $fname);
		//Set the subject line
		$mail->Subject = 'NOTION QR_CODE';
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';
		//Attach an image file
		$mail->addAttachment('qr/'.$b.'.png');
		//send the message, check for errors

		$mail->Body = 'Hello,Here is your Qr code<br>Bring this qr code at the time of Event';
		if (!$mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Message sent!";
			header("Location: thankyou_1.php");
			
			//Section 2: IMAP
			//Uncomment these to save your message in the 'Sent Mail' folder.
			#if (save_mail($mail)) {
			#    echo "Message saved!";
			#}
		}
		//Section 2: IMAP
		//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
		//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
		//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
		//be useful if you are trying to get this working on a non-Gmail IMAP server.
		function save_mail($mail)
		{
			//You can change 'Sent Mail' to any other folder or tag
			$path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
			//Tell your server to open an IMAP connection using the same username and password as you used for SMTP
			$imapStream = imap_open($path, $mail->Username, $mail->Password);
			$result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
			imap_close($imapStream);
			return $result;
		}
}
catch(Exception $e) {
 echo 'Message: ' .$e->getMessage();
 }
?>