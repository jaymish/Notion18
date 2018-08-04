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
		$mail->Host = 'smtp.gmail.com';
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
		$mail->Username = "notion@ljinstitutes.edu.in";
		//Password to use for SMTP authentication
		$mail->Password = "notion@2k18";
		//Set who the message is to be sent from
		$mail->setFrom('notion@ljinstitutes.edu.in', 'LJ Notion');
		//Set an alternative reply-to address
		//$mail->addReplyTo('notion2018@gmail.com', 'First Last');
		//Set who the message is to be sent to
		$mail->addAddress($email, $fname);
		//Set the subject line
		$mail->Subject = 'Workshop Carnival 2k18 Confirmation';
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';
		//Attach an image file
		$mail->addAttachment('qr/'.$b.'.png');
		//send the message, check for errors

		$mail->Body = '<body>
<table class="m_-1716573750875966021wrapper" style="border-spacing:0;width:100%;background-color:#f1f2f6;table-layout:fixed">
		<tbody><tr>
			<td align="center" class="m_-1716573750875966021text-logo" style="padding-right:0;padding-left:0;vertical-align:top;padding-top:24px;padding-bottom:0;font-family:sans-serif;font-size:14px;color:#bec7cf">
				<center>
					<div class="m_-1716573750875966021spacer m_-1716573750875966021body-buffer" style="font-size:20px;line-height:20px;display:block">&nbsp;</div>
					<table class="m_-1716573750875966021gmail m_-1716573750875966021hide" style="border-spacing:0;width:650px;min-width:650px"><tbody><tr><td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;font-size:1px;line-height:1px">&nbsp;</td></tr></tbody></table>
					<div style="font-size: 35px; font-weight:bold; font-family: cambria">Workshop Carnival 2k18</div>
				</center>
			</td>
		</tr>
	</tbody></table>
<table class="m_-1716573750875966021wrapper" style="border-spacing:0;width:100%;background-color:#f1f2f6;table-layout:fixed">
		<tbody><tr>
			<td class="m_-1716573750875966021main-content" align="center" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top">
				<div class="m_-1716573750875966021spacer m_-1716573750875966021hide" style="font-size:40px;line-height:40px;height:40px;display:block">&nbsp;</div>
				<center>
 					<table class="m_-1716573750875966021table-top" width="610" style="border-spacing:0;Margin:0 auto">
						<tbody><tr>
							<td width="100%" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top">
								<table width="100%" style="border-spacing:0">
									<tbody><tr>
										<td class="m_-1716573750875966021outer-top-rounding" width="100%" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;height:3px;font-size:3px;line-height:3px;border-left-width:1px;border-left-style:solid;border-left-color:#e2e3e7;border-top-width:1px;border-top-style:solid;border-top-color:#e2e3e7;border-right-width:1px;border-right-style:solid;border-right-color:#e2e3e7;border-top-left-radius:3px;border-top-right-radius:3px;background-color:#ffffff;border-bottom-style:none">
											&nbsp;
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>
					</tbody></table>
					
					<table class="m_-1716573750875966021standard-white m_-1716573750875966021viewport" width="612" style="border-spacing:0;Margin:0 auto">
						<tbody><tr>
							<td class="m_-1716573750875966021border-outer" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#edeff3;width:1px">&#8203;</td>
							<td class="m_-1716573750875966021border-inner" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#e3e6ec;width:1px">&#8203;</td>
							<td class="m_-1716573750875966021viewport" width="608" bgcolor="#ffffff" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;Margin:0 auto">
								<table class="m_-1716573750875966021public-canvas-top" width="100%" style="border-spacing:0">
									<tbody><tr>
										<td class="m_-1716573750875966021pad-top m_-1716573750875966021pad-sides m_-1716573750875966021pad-bottom" style="vertical-align:top;padding-top:60px;padding-bottom:70px;padding-left:70px;padding-right:70px">
											<table class="m_-1716573750875966021download" width="100%" style="border-spacing:0">
												<tbody><tr>
													<td class="m_-1716573750875966021copy" style="padding-top:0;padding-right:0;padding-left:0;vertical-align:top;padding-bottom:7px;text-align:left">
														<p style="Margin-top:0;font-weight:normal;color:#677483;font-family:sans-serif;font-size:14px;line-height:25px;Margin-bottom:15px"><b style="color:#445359">Hi There!</b></p>
															<p style="Margin-top:0;font-weight:normal;color:#677483;font-family:sans-serif;font-size:14px;line-height:25px;Margin-bottom:15px">Thank you, your registration at  <a href="http://notion.ljinstitutes.org/" style="color:#1bb4d5;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://www.campaignmonitor.com/?utm_campaign%3Dpubcanvas%26utm_source%3Ddownload%26utm_medium%3Demail&amp;source=gmail&amp;ust=1533444053950000&amp;usg=AFQjCNGY7r_i7YoBTS-vF1mWKhMW7D8oRg">Workshop Carnival 2k18</a> is confirm. You are ready to go! </p>
													</td>
												</tr>
											</tbody></table>
										</td>
									</tr>
								</tbody></table>
							</td>
							<td class="m_-1716573750875966021border-inner" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#e3e6ec;width:1px">&#8203;</td>
							<td class="m_-1716573750875966021border-outer" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#edeff3;width:1px">&#8203;</td>
						</tr>
					</tbody></table>
					<table class="m_-1716573750875966021inset-grey m_-1716573750875966021viewport" width="612" style="border-spacing:0;Margin:0 auto">
						<tbody><tr>
							<td class="m_-1716573750875966021border-outer" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#edeff3;width:1px">&#8203;</td>
							<td class="m_-1716573750875966021border-inner" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#e3e6ec;width:1px">&#8203;</td>
							<td class="m_-1716573750875966021inner-shadow" width="608" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#fdfdfe">
								<table class="m_-1716573750875966021feature-more-once-month" width="100%" style="border-spacing:0">
									<tbody><tr><td class="m_-1716573750875966021inset-top" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#f8f9fb;border-top-width:1px;border-top-style:solid;border-top-color:#e7e7ea;font-size:3px;line-height:3px">&nbsp;</td></tr>
									<tr>
										<td class="m_-1716573750875966021inset-pad-top m_-1716573750875966021pad-sides m_-1716573750875966021sub-pad-bottom" style="vertical-align:top;padding-left:70px;padding-right:70px;padding-bottom:30px;padding-top:40px">
											<table width="100%" style="border-spacing:0">
												<tbody><tr>
													<td class="m_-1716573750875966021copy" style="padding-top:0;padding-right:0;padding-left:0;vertical-align:top;padding-bottom:7px;text-align:left">
														<p style="Margin-top:0;font-weight:normal;color:#677483;font-family:sans-serif;font-size:14px;line-height:25px;Margin-bottom:15px">Please find the QR code in attachment, bring Qr at the time of workshop.</p>
														<p style="Margin-top:0;font-weight:normal;color:#677483;font-family:sans-serif;font-size:14px;line-height:25px;Margin-bottom:15px">If you have any queries in the meanwhile, Please contact on the information provided below.</p>
													</td>
												</tr>
											</tbody></table>
										</td>
									</tr>
								</tbody></table>
							</td>
							<td class="m_-1716573750875966021border-inner" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#e3e6ec;width:1px">&#8203;</td>
							<td class="m_-1716573750875966021border-outer" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#edeff3;width:1px">&#8203;</td>
						</tr>
					</tbody></table>
					
					<table class="m_-1716573750875966021standard-white m_-1716573750875966021viewport" width="612" style="border-spacing:0;Margin:0 auto">
						<tbody><tr>
							<td class="m_-1716573750875966021border-outer" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#edeff3;width:1px">&#8203;</td>
							<td class="m_-1716573750875966021border-inner" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#e3e6ec;width:1px">&#8203;</td>
							<td class="m_-1716573750875966021viewport" width="608" bgcolor="#ffffff" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;Margin:0 auto">
								<table width="100%" style="border-spacing:0">
									<tbody><tr class="m_-1716573750875966021spacer-bar">
										<td height="23" style="font-size:3px;line-height:3px;color:#ffffff;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top">&nbsp;</td>
									</tr>
								</tbody></table>
							</td>
							<td class="m_-1716573750875966021border-inner" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#e3e6ec;width:1px">&#8203;</td>
							<td class="m_-1716573750875966021border-outer" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#edeff3;width:1px">&#8203;</td>
						</tr>
					</tbody></table>
					
					<table class="m_-1716573750875966021cap-bottom" width="610" style="border-spacing:0;Margin:0 auto">
						<tbody><tr>
							<td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top">
								<table width="100%" style="border-spacing:0">
									<tbody><tr>
										<td width="610" class="m_-1716573750875966021outer-bottom-shadow" style="background-color:#ffffff;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;height:3px;font-size:3px;line-height:3px;border-left-width:1px;border-left-style:solid;border-left-color:#e2e3e7;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#e2e3e7;border-right-width:1px;border-right-style:solid;border-right-color:#e2e3e7;border-bottom-left-radius:3px;border-bottom-right-radius:3px">
											&#8203;
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>
					</tbody></table>
					<table class="m_-1716573750875966021bottom-cap m_-1716573750875966021bb1" width="608" style="border-spacing:0;Margin:0 auto">
						<tbody><tr class="m_-1716573750875966021border" style="font-size:1px;line-height:1px"><td class="m_-1716573750875966021border-inner" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#e3e6ec;width:1px">&#8203;</td></tr>
					</tbody></table>
					<table class="m_-1716573750875966021bottom-cap m_-1716573750875966021bb2" width="606" style="border-spacing:0;Margin:0 auto">
						<tbody><tr class="m_-1716573750875966021border" style="font-size:1px;line-height:1px"><td class="m_-1716573750875966021border-middle" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#e6e9ee;width:1px">&#8203;</td></tr>
					</tbody></table>
					<table class="m_-1716573750875966021bottom-cap m_-1716573750875966021bb3" width="604" style="border-spacing:0;Margin:0 auto">
						<tbody><tr class="m_-1716573750875966021border" style="font-size:1px;line-height:1px"><td class="m_-1716573750875966021border-outer" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#edeff3;width:1px">&#8203;</td></tr>
					</tbody></table>
					<table class="m_-1716573750875966021bottom-cap m_-1716573750875966021bb4" width="600" style="border-spacing:0;Margin:0 auto">
						<tbody><tr class="m_-1716573750875966021border" style="font-size:1px;line-height:1px"><td class="m_-1716573750875966021border-outer" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;background-color:#edeff3;width:1px">&#8203;</td></tr>
					</tbody></table>
					<table class="m_-1716573750875966021footer m_-1716573750875966021viewport" width="400" style="border-spacing:0;Margin:0 auto">
					  <tbody><tr>
					    <td class="m_-1716573750875966021buffer" style="padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;text-align:center;padding-top:45px">
					      <table width="72" style="display:inline-block;border-spacing:0">
					        <tbody><tr>
					          <td class="m_-1716573750875966021image" width="34" style="padding-right:2px;padding-top:0;padding-bottom:0;padding-left:0;vertical-align:top;text-align:center">
					            <a href="https://api.whatsapp.com/send?phone=919558233754" style="color:#1bb4d5;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://twitter.com/campaignmonitor&amp;source=gmail&amp;ust=1533444053950000&amp;usg=AFQjCNFQ0U3MWA9EfQFAcqS1-7i6a4L1og">
					              <img src="https://webiconspng.com/wp-content/uploads/2017/09/Whatsapp-PNG-Image-29965.png" alt="twitter" width="34" height="32" style="border-width:0;display:block" class="CToWUd">
					            </a>
					          </td>
					          <td class="m_-1716573750875966021image" width="34" style="padding-left:2px;padding-top:0;padding-bottom:0;padding-right:0;vertical-align:top;text-align:center">
					            <a href="mailto:notion@ljinstitutes.edu.in" style="color:#1bb4d5;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.facebook.com/campaignmonitor&amp;source=gmail&amp;ust=1533444053950000&amp;usg=AFQjCNE6VCkxNA3MDj_5qpHn9WOWzNEKxg">
					              <img src="https://www.iotforall.com/wp-content/uploads/2017/07/emailicon.png" alt="facebook" width="34" height="32" style="border-width:0;display:block" class="CToWUd">
					            </a>
					          </td>
					        </tr>
					      </tbody></table>
					    </td>
					  </tr>
					  <tr>
					    <td class="m_-1716573750875966021copy" style="padding-top:12px;padding-bottom:14px;padding-right:0;padding-left:0;vertical-align:top;text-align:center">
					      <p style="Margin-top:0;font-weight:normal;font-family:sans-serif;Margin-bottom:15px;text-align:center;font-size:13px;line-height:19px;color:#97a3b1;Margin:0"><em style="font-style:normal;color:#677483">LJ Group of Institutes</em><br><a href="https://goo.gl/maps/mKjejxt1GxG2">L.J. Campus, Between Sarkhej Circle & Kataria Motors, S.G. Road, Ahmedabad - 382210</a></p>
					    </td>
					  </tr>
					  <tr>
					    <td style="line-height:5px;font-size:5px;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;text-align:center">
					      <img src="https://ci6.googleusercontent.com/proxy/ZPVSK2jRFbQQgh6C1rLdxdK6LcdaTeLHm52nnJCnTt7jjiEREDhmmUdnjcCXNx9IaEv41qpm8FeW0cMxHDngjEGmWZPjMsJdN78fHmCHllTkgJsvB5R43DQ=s0-d-e1-ft#https://i1.campaignmonitor.com/assets/images/canvas-public/bull.png" alt="" width="5" height="5" style="border-width:0" class="CToWUd">
					    </td>
					  </tr>
					  <tr>
					    <td class="m_-1716573750875966021copy m_-1716573750875966021pad-extra" style="padding-top:12px;padding-right:0;padding-left:0;vertical-align:top;padding-bottom:7px;text-align:center">
					      <p style="Margin-top:0;font-weight:normal;font-family:sans-serif;Margin-bottom:15px;text-align:center;font-size:13px;line-height:19px;color:#97a3b1;Margin:0">You are receiving this because you have registered for Workshop Carnival 2k18.</p>
					    </td>
					  </tr>
					  <tr><td height="80" style="font-size:0;line-height:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;vertical-align:top;text-align:center">&nbsp;</td></tr>
					</tbody></table>
				</center>
			</td>
		</tr>
	</tbody>
	</table>
	</body>';
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