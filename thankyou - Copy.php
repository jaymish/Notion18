
<?php
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['enrollment']))
{
	include "sqlconnec.php";




	$enum = $_POST['enrollment'];
	$fname    =  $_POST['firstname'];
	$lname    =  $_POST['lastname'];
	$pnum	=	$_POST['number'];
	$email   =  $_POST['email'];
	$institute    =  $_POST['institute'];
	$course	=	$_POST['course'];
	$event_1=isset($_POST['solidworks']);
	$event_2=isset($_POST['fff']);
	$event_3=isset($_POST['comagic']);
	$event_4=isset($_POST['cocar']);
	$event_5=isset($_POST['cohousie']);
	$event_6=isset($_POST['dream']);
	$event_7=isset($_POST['pop']);
	$event_8=isset($_POST['bbs']);
	$event_9=isset($_POST['intricate']);
	$event_10=isset($_POST['cdoku']);
	$event_11=isset($_POST['cswap']);
	$event_12=isset($_POST['sherlocked']);
	$event_13=isset($_POST['web']);
	$event_14=isset($_POST['curry']);
	$event_15=isset($_POST['rwb']);
	$event_16=isset($_POST['ed']);
	$event_17=isset($_POST['technosense']);
	$event_18=isset($_POST['mania']);
	$event_19=isset($_POST['grinders']);
	$event_20=isset($_POST['matworks']);
	$nt_event_1=isset($_POST['cs']);
	$nt_event_2=isset($_POST['housie']);
	$nt_event_3=isset($_POST['cr']);
	$nt_event_4=isset($_POST['cr2v2']);
	$nt_event_5=isset($_POST['treasure']);
	$nt_event_6=isset($_POST['methics']);
	$nt_event_7=isset($_POST['onemin']);
	$total=0;

	$result = mysqli_query($conn,"SELECT * FROM notion");
	$a=0;
	$z=0;
	$c=uniqid("notion");
	$b=uniqid(2018);
	try
	{
	if($event_1)
	{
		$total=$total+20;
	}
	if($event_2)
	{
		$total=$total+20;
	}
	if($event_3)
	{
		$total=$total+70;
		$event_team=uniqid("comagic");
		$comagic_n1=$_POST['chmagic_n1'];
		$comagic_p1=$_POST['chmagic_p1'];
		$comagic_n2=$_POST['chmagic_n2'];
		$comagic_p2=$_POST['chmagic_p2'];
		$comagic_n3=$_POST['chmagic_n3'];
		$comagic_p3=$_POST['chmagic_p3'];
		$comagic_n4=$_POST['chmagic_n4'];
		$comagic_p4=$_POST['chmagic_p4'];
		$chmagic_event="event_3";
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$chmagic_event."')");
		if(isset($comagic_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$comagic_n1."','".$comagic_p1."','".$chmagic_event."')");
		}
		if(isset($comagic_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$comagic_n2."','".$comagic_p2."','".$chmagic_event."')");
		}
		if(isset($comagic_n3))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$comagic_n3."','".$comagic_p3."','".$chmagic_event."')");
		}
		if(isset($comagic_n4))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$comagic_n4."','".$comagic_p4."','".$chmagic_event."')");
		}
	}
	if($event_4)
	{
		$total=$total+70;
		$event_team=uniqid("ccar");
		$ccar_event="event_4";
		$ccar_n1=$_POST['ccar_n1'];
		$ccar_p1=$_POST['ccar_p1'];
		$ccar_n2=$_POST['ccar_n2'];
		$ccar_p2=$_POST['ccar_p2'];
		$ccar_n3=$_POST['ccar_n3'];
		$ccar_p3=$_POST['ccar_p3'];
		$ccar_n4=$_POST['ccar_n4'];
		$ccar_p4=$_POST['ccar_p4'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$ccar_event."')");
		if(isset($ccar_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$ccar_n1."','".$ccar_p1."','".$ccar_event."')");
		}
		if(isset($ccar_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$ccar_n2."','".$ccar_p2."','".$ccar_event."')");
		}
		if(isset($ccar_n3))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$ccar_n3."','".$ccar_p3."','".$ccar_event."')");
		}
		if(isset($ccar_n4))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$ccar_n4."','".$ccar_p4."','".$ccar_event."')");
		}
	}
	if($event_5)
	{
		$total=$total+30;
	}
	if($event_6)
	{
		$total=$total+90;
		$event_team=uniqid("dream");
		$dream_event="event_6";
		$ljk_n1=$_POST['ljk_n1'];
		$ljk_p1=$_POST['ljk_p1'];
		$ljk_n2=$_POST['ljk_n2'];
		$ljk_p2=$_POST['ljk_p2'];
		$ljk_n3=$_POST['ljk_n3'];
		$ljk_p3=$_POST['ljk_p3'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$dream_event."')");
		if(isset($ljk_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$ljk_n1."','".$ljk_p1."','".$dream_event."')");
		}
		if(isset($ljk_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$ljk_n2."','".$ljk_p2."','".$dream_event."')");
		}
		if(isset($ljk_n3))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$ljk_n3."','".$ljk_p3."','".$dream_event."')");
		}
	}
	if($event_7)
	{
		$total=$total+50;
		$event_team=uniqid("psb");
		$psb_event="event_7";
		$psb_n1=$_POST['psb_n1'];
		$psb_p1=$_POST['psb_p1'];
		$psb_n2=$_POST['psb_n2'];
		$psb_p2=$_POST['psb_p2'];
		$psb_n3=$_POST['psb_n3'];
		$psb_p3=$_POST['psb_p3'];
		$psb_n4=$_POST['psb_n4'];
		$psb_p4=$_POST['psb_p4'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$psb_event."')");
		if(isset($psb_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$psb_n1."','".$psb_p1."','".$psb_event."')");
		}
		if(isset($psb_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$psb_n2."','".$psb_p2."','".$psb_event."')");
		}
		if(isset($psb_n3))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$psb_n3."','".$psb_p3."','".$psb_event."')");
		}
		if(isset($psb_n4))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$psb_n4."','".$psb_p4."','".$psb_event."')");
		}
	}
	if($event_8)
	{
		$total=$total+50;
		$event_team=uniqid("beg");
		$beg_event="event_8";
		$beg_n1=$_POST['beg_n1'];
		$beg_p1=$_POST['beg_p1'];
		$beg_n2=$_POST['beg_n2'];
		$beg_p2=$_POST['beg_p2'];
		$beg_n3=$_POST['beg_n3'];
		$beg_p3=$_POST['beg_p3'];
		$beg_n4=$_POST['beg_n4'];
		$beg_p4=$_POST['beg_p4'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$beg_event."')");
		if(isset($beg_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$beg_n1."','".$beg_p1."','".$beg_event."')");
		}
		if(isset($beg_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$beg_n2."','".$beg_p2."','".$beg_event."')");
		}
		if(isset($beg_n3))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$beg_n3."','".$beg_p3."','".$beg_event."')");
		}
		if(isset($beg_n4))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$beg_n4."','".$beg_p4."','".$beg_event."')");
		}
	}
	if($event_9)
	{
		$total=$total+30;
	}
	if($event_10)
	{
		$total=$total+30;
	}
	if($event_11)
	{
		$total=$total+40;
		$event_team=uniqid("pair");
		$pair_event="event_11";
		$pair_n1=$_POST['pair_n1'];
		$pair_p1=$_POST['pair_p1'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$pair_event."')");
		if(isset($pair_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$pair_n1."','".$pair_p1."','".$pair_event."')");
		}
	}
	if($event_12)
	{
		$total=$total+30;
	}
	if($event_13)
	{
		$total=$total+30;
	}
	if($event_14)
	{
		$total=$total+50;
		$event_team=uniqid("curry");
		$curry_event="event_14";
		$cc_n1=$_POST['cc_n1'];
		$cc_p1=$_POST['cc_p1'];
		$cc_n2=$_POST['cc_n2'];
		$cc_p2=$_POST['cc_p2'];
		$cc_n3=$_POST['cc_n3'];
		$cc_p3=$_POST['cc_p3'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$curry_event."')");
		if(isset($cc_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$cc_n1."','".$cc_p1."','".$curry_event."')");
		}
		if(isset($cc_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$cc_n2."','".$cc_p2."','".$curry_event."')");
		}
		if(isset($cc_n3))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$cc_n3."','".$cc_p3."','".$curry_event."')");
		}
	}
	if($event_15)
	{
		$total=$total+150;
		$event_team=uniqid("race");
		$race_event="event_15";
		$race_n1=$_POST['race_n1'];
		$race_p1=$_POST['race_p1'];
		$race_n2=$_POST['race_n2'];
		$race_p2=$_POST['race_p2'];
		$race_n3=$_POST['race_n3'];
		$race_p3=$_POST['race_p3'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$race_event."')");
		if(isset($race_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$race_n1."','".$race_p1."','".$race_event."')");
		}
		if(isset($race_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$race_n2."','".$race_p2."','".$race_event."')");
		}
		if(isset($race_n3))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$race_n3."','".$race_p3."','".$race_event."')");
		}
	}
	if($event_16)
	{
		$total=$total+30;
	}
	if($event_17)
	{
		$total=$total+80;
		$event_team=uniqid("techno");
		$techno_event="event_17";
		$techno_n1=$_POST['techno_n1'];
		$techno_p1=$_POST['techno_p1'];
		$techno_n2=$_POST['techno_n2'];
		$techno_p2=$_POST['techno_p2'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$techno_event."')");
		if(isset($techno_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$techno_n1."','".$techno_p1."','".$techno_event."')");
		}
		if(isset($techno_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$techno_n2."','".$techno_p2."','".$techno_event."')");
		}
	}
	if($event_18)
	{
		$total=$total+80;
		$event_team=uniqid("circuit");
		$circuit_event="event_18";
		$circuit_n1=$_POST['circuit_n1'];
		$circuit_p1=$_POST['circuit_p1'];
		$circuit_n2=$_POST['circuit_n2'];
		$circuit_p2=$_POST['circuit_p2'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$circuit_event."')");
		if(isset($circuit_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$circuit_n1."','".$circuit_p1."','".$circuit_event."')");
		}
		if(isset($circuit_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$circuit_n2."','".$circuit_p2."','".$circuit_event."')");
		}
	}
	if($event_19)
	{
		$total=$total+50;
		$event_team=uniqid("mindg");
		$mindg_event="event_19";
		$mg_n1=$_POST['mg_n1'];
		$mg_p1=$_POST['mg_p1'];
		$mg_n2=$_POST['mg_n2'];
		$mg_p2=$_POST['mg_p2'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$mindg_event."')");
		if(isset($mg_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$mg_n1."','".$mg_p1."','".$mindg_event."')");
		}
		if(isset($mg_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$mg_n2."','".$mg_p2."','".$mindg_event."')");
		}
	}
	if($event_20)
	{
		$total=$total+30;
	}
	if($nt_event_1)
	{
		$total=$total+100;
		$event_team=uniqid("cstrike");
		$cstrike_event="nt_event_1";
		$cstrike_n1=$_POST['cstrike_n1'];
		$cstrike_p1=$_POST['cstrike_p1'];
		$cstrike_n2=$_POST['cstrike_n2'];
		$cstrike_p2=$_POST['cstrike_p2'];
		$cstrike_n3=$_POST['cstrike_n3'];
		$cstrike_p3=$_POST['cstrike_p3'];
		$cstrike_n4=$_POST['cstrike_n4'];
		$cstrike_p4=$_POST['cstrike_p4'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$cstrike_event."')");
		if(isset($cstrike_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$cstrike_n1."','".$cstrike_p1."','".$cstrike_event."')");
		}
		if(isset($cstrike_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$cstrike_n2."','".$cstrike_p2."','".$cstrike_event."')");
		}
		if(isset($cstrike_n3))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$cstrike_n3."','".$cstrike_p3."','".$cstrike_event."')");
		}
		if(isset($cstrike_n4))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$cstrike_n4."','".$cstrike_p4."','".$cstrike_event."')");
		}
	}
	if($nt_event_2)
	{
		$total=$total+20;
	}
	if($nt_event_3)
	{
		$total=$total+20;
	}
	if($nt_event_4)
	{
		$total=$total+40;
		$event_team=uniqid("cr2v2");
		$cr2v2_event="nt_event_4";
		$c2_n1=$_POST['c2_n1'];
		$c2_p1=$_POST['c2_p1'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$cstrike_event."')");
		if(isset($c2_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$c2_n1."','".$c2_p1."','".$cstrike_event."')");
		}
	}
	if($nt_event_5)
	{
		$total=$total+100;
		$event_team=uniqid("thunt");
		$thunt_event="nt_event_5";
		$thunt_n1=$_POST['thunt_n1'];
		$thunt_p1=$_POST['thunt_p1'];
		$thunt_n2=$_POST['thunt_n2'];
		$thunt_p2=$_POST['thunt_p2'];
		$thunt_n3=$_POST['thunt_n3'];
		$thunt_p3=$_POST['thunt_p3'];
		$thunt_n4=$_POST['thunt_n4'];
		$thunt_p4=$_POST['thunt_p4'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$thunt_event."')");
		if(isset($thunt_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$thunt_n1."','".$thunt_p1."','".$thunt_event."')");
		}
		if(isset($thunt_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$thunt_n2."','".$thunt_p2."','".$thunt_event."')");
		}
		if(isset($thunt_n3))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$thunt_n3."','".$thunt_p3."','".$thunt_event."')");
		}
		if(isset($thunt_n4))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$thunt_n4."','".$thunt_p4."','".$thunt_event."')");
		}
	}
	if($nt_event_6)
	{
		$total=$total+60;
		$event_team=uniqid("meth");
		$meth_event="nt_event_6";
		$meth_n1=$_POST['meth_n1'];
		$meth_p1=$_POST['meth_p1'];
		$meth_n2=$_POST['meth_n2'];
		$meth_p2=$_POST['meth_p2'];
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$fname."','".$pnum."','".$meth_event."')");
		if(isset($meth_n1))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$meth_n1."','".$meth_p1."','".$meth_event."')");
		}
		if(isset($meth_n2))
		{
		mysqli_query($conn,"INSERT into team_event (Event_team,email,name,phone_no,event_name) VALUES('".$event_team."','".$email."','".$meth_n2."','".$meth_p2."','".$meth_event."')");
		}
	}
	if($nt_event_7)
	{
		$total=$total+20;
	}
	while ($rows = mysqli_fetch_array($result))
		{
			$name_1 = $rows['email'];
			if($name_1==$email)
			{
				$a=1;
			}
		}
		if($a==0)
		{?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Notion'18 - Registrations</title>


		<!-- ====Open Sans==== -->
		<!--link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,700italic,800,300italic,600italic' rel='stylesheet' type='text/css'>

		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

		<!-- ====Bootstrap css==== -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- ====Material==== -->
		<link rel="stylesheet" href="css/material-design-iconic-font.min.css">

		<!-- ====Font awesome css==== -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- ====Animate css==== -->
		<link rel="stylesheet" href="css/animate.css">

		<!-- ====Meanmenu css==== -->
		<link rel="stylesheet" href="css/meanmenu.min.css">

		<!-- ====VenoBox css==== -->
		<link rel="stylesheet" href="css/venobox.css">

		<!-- ====Camera css==== -->
		<link rel="stylesheet" href="css/camera.css">

		<!-- ====Owl carousel 2 css==== -->
		<link rel="stylesheet" href="css/owl.carousel.css">

		<!-- ====Custom css==== -->
		<link rel="stylesheet" href="style.css">

		<!-- ====Favicons==== -->
		<!--<link rel="apple-touch-icon-precomposed" href="img/favicon_app.png">-->
		<link rel="shortcut icon" type="image/png" href="img/logo1.png" />

		<!-- ====Institute-Course Selector==== -->
		<script type= "text/javascript" src = "js/courses.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			  <script src="js/html5shiv.min.js"></script>
			  <script src="js/respond.min.js"></script>
			<![endif]-->
	</head>
	<body id="body" class="onepage Border_radius border_radius">
		
		<div id="registration" class="registration section-padding">
			<div class="container">
				<div class="row mb70">
					<div class="col-xs-12">
						<div class="section_title">
							<h2 class="sec_Hd">Registration Successful!</h2>
							<h5 class="sub_title">Thanks for Registration, Please Complete your payment to recieve QR code</h5>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<div class="form">
							<input type="text" name="program_2" id="program" value="<?php echo "You have to pay: ₹$total";	?>" disabled="disabled" required>
							<input type="text" name="payment_display_msg" id="payment_display_msg" value="Pay at LJ Engineering Room:109" disabled="disabled" required>
							<input type="text" name="payment_display_msg" id="payment_display_msg" value="7th Floor BSC. Building" disabled="disabled" required>
							<input type="text" name="payment_display_msg" id="payment_display_msg" value="Timing:10:45AM to 11:30AM" disabled="disabled" required>
							<input type="text" name="payment_display_msg" id="payment_display_msg" value="After 1:30PM" disabled="disabled" required>
						</div>
					</div><!--"Pay at LJ engineering Room:109 & 7th Floor Bsc. Building"<br>"Timing:10:45AM to 11:30AM & After 1:30PM"-->
				</div>
		<?php
			
			
			mysqli_query($conn,"INSERT into notion (temp_no,unique_qr,enum,fname,lname,pnum,email,institute,course,event_1,event_2,event_3,event_4,event_5,event_6,event_7,event_8,event_9,event_10,event_11,event_12,event_13,event_14,event_15,event_16,event_17,event_18,event_19,event_20,nt_event_1,nt_event_2,nt_event_3,nt_event_4,nt_event_5,nt_event_6,nt_event_7,total_money) VALUES('".$b."','".$c."','".$enum."','".$fname."','".$lname."','".$pnum."','".$email."','".$institute."','".$course."','".$event_1."','".$event_2."','".$event_3."','".$event_4."','".$event_5."','".$event_6."','".$event_7."','".$event_8."','".$event_9."','".$event_10."','".$event_11."','".$event_12."','".$event_13."','".$event_14."','".$event_15."','".$event_16."','".$event_17."','".$event_18."','".$event_19."','".$event_20."','".$nt_event_1."','".$nt_event_2."','".$nt_event_3."','".$nt_event_4."','".$nt_event_5."','".$nt_event_6."','".$nt_event_7."','".$total."')");
			
			
			
				//echo "Message sent!";?>
				<div class="row">
					<div class="col-xs-12 col-md-6" class="from">
						<form action="Registration.php" method="post" >
							<div class="form">
								<button name="submit" type="submit">Submit another Response</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--====== FOOTER AREA START ======-->
		<footer id="contact" class="footer_area footer-padding">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 col-md-6">
	                    <div class="row">
	                        <div class="col-sm-6">
	                            <div class="contact_info">
	                                <h3>Contact <span>Us</span></h3>
	                                <ul class="address_info">
	                                    <li><i class="fa fa-map-marker"></i> L.J. Campus, Between Sarkhej Circle & Kataria Motors, S.G. Road, Ahmedabad - 382210</li>
	                                    <li><i class="fa fa-envelope-o"></i> notion@ljinstitutes.edu.in</a></li>
	                                    <li><i class="fa fa-phone"></i> +91-9558233754</li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="footer-copyright">
	            <div class="container">
	                <div class="row">
	                    <div class="col-xs-12">
	                        <ul class="iconlink">
	                            <li>
	                                <a href="https://www.facebook.com/notionthetechfest/" target="_blank"> 
	                                    <i class="fa fa-facebook"></i>
	                                </a>
	                            </li>
	                            <li>
	                                <a href="https://www.instagram.com/notion_2.0/" target="_blank">
	                                    <i class="fa fa-instagram"></i>
	                                </a>
	                            </li>
	                        </ul>
	                        <p>&copy; Notion'18. All Rights Reserved</p>
	                    </div>
	                </div>
	            </div>
	            <div class="back-to-top">
	                <a href="#">
	                    <i class="fa fa-angle-up" aria-hidden="true"></i>
	                </a>
	            </div>
	        </div>
	    </footer>
		<!--====== FOOTER AREA END ======-->
		<!-- ====jQuery Latest version==== -->
		<script src="js/vendor/jquery-1.12.0.min.js"></script>

		<!-- ====Google Maps API==== -->
		<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->

		<!-- ====Bootstrap JS==== -->
		<script src="js/bootstrap.min.js"></script>

		<!-- ====jQuery Counterup==== -->
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>

		<!-- ====jQuery Countdown==== -->
		<script src="js/jquery.lwtCountdown-1.0.js"></script>

		<!-- ====jQuery Meanmenu==== -->
		<script src="js/jquery.meanmenu.min.js"></script>

		<!-- ====jQuery easing==== -->
		<script src="js/jquery.easing.1.3.min.js"></script>

		<!-- ====jQuery owl carousel==== -->
		<script src="js/owl.carousel.min.js"></script>

		<!-- ====jQuery parallax==== -->
		<script src="js/jquery.parallax-1.1.3.js"></script>

		<!-- ====jQuery Tubular==== -->
		<script src="js/jquery.tubular.1.0.js"></script>

		<!-- ====jQuery VenoBox==== -->
		<script src="js/venobox.min.js"></script>

		<!-- ====jQuery Camera==== -->
		<script src="js/camera.min.js"></script>

		<!-- ====jQuery Nicescroll and knob==== -->
		<script src="js/nicescroll.js"></script>


		<!--Opacity & Other IE fix for older browser-->
		<!--[if lte IE 8]>
				<script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
			<![endif]-->

		<!-- ====jQuery main script==== -->
		<script src="js/main.js"></script>
	</body>
	</html>
					<?php
		}
		else
		{
			echo "<br>";
			//throw new Exception("You have already registered");?>
			<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Notion'18 - Registrations</title>


		<!-- ====Open Sans==== -->
		<!--link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,700italic,800,300italic,600italic' rel='stylesheet' type='text/css'>

		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

		<!-- ====Bootstrap css==== -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- ====Material==== -->
		<link rel="stylesheet" href="css/material-design-iconic-font.min.css">

		<!-- ====Font awesome css==== -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- ====Animate css==== -->
		<link rel="stylesheet" href="css/animate.css">

		<!-- ====Meanmenu css==== -->
		<link rel="stylesheet" href="css/meanmenu.min.css">

		<!-- ====VenoBox css==== -->
		<link rel="stylesheet" href="css/venobox.css">

		<!-- ====Camera css==== -->
		<link rel="stylesheet" href="css/camera.css">

		<!-- ====Owl carousel 2 css==== -->
		<link rel="stylesheet" href="css/owl.carousel.css">

		<!-- ====Custom css==== -->
		<link rel="stylesheet" href="style.css">

		<!-- ====Favicons==== -->
		<!--<link rel="apple-touch-icon-precomposed" href="img/favicon_app.png">-->
		<link rel="shortcut icon" type="image/png" href="img/Notion1.jpeg" />

		<!-- ====Institute-Course Selector==== -->
		<script type= "text/javascript" src = "js/courses.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			  <script src="js/html5shiv.min.js"></script>
			  <script src="js/respond.min.js"></script>
			<![endif]-->
	</head>
	<body id="body" class="onepage Border_radius border_radius">
		
		<div id="registration" class="registration section-padding">
			<div class="container">
				<div class="row mb70">
					<div class="col-xs-12">
						<div class="section_title">
							<h2 class="sec_Hd">Registration Successful!</h2>
							<h5 class="sub_title">A unique code has been sent to your mail id</h5>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<div class="form">
							<input type="text" name="program_2" id="program" placeholder="You have already registered" disabled="disabled" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6" class="from">
						<form action="Registration.php" method="post" >
							<div class="form">
								<button name="submit" type="submit">Submit another Response</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--====== FOOTER AREA START ======-->
		<footer id="contact" class="footer_area footer-padding">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 col-md-6">
	                    <div class="row">
	                        <div class="col-sm-6">
	                            <div class="contact_info">
	                                <h3>Contact <span>Us</span></h3>
	                                <ul class="address_info">
	                                    <li><i class="fa fa-map-marker"></i> L.J. Campus, Between Sarkhej Circle & Kataria Motors, S.G. Road, Ahmedabad - 382210</li>
	                                    <li><i class="fa fa-envelope-o"></i> notion@ljinstitutes.edu.in</a></li>
	                                    <li><i class="fa fa-phone"></i> +91-9558233754</li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="footer-copyright">
	            <div class="container">
	                <div class="row">
	                    <div class="col-xs-12">
	                        <ul class="iconlink">
	                            <li>
	                                <a href="https://www.facebook.com/notionthetechfest/" target="_blank"> 
	                                    <i class="fa fa-facebook"></i>
	                                </a>
	                            </li>
	                            <li>
	                                <a href="https://www.instagram.com/notion_2.0/" target="_blank">
	                                    <i class="fa fa-instagram"></i>
	                                </a>
	                            </li>
	                        </ul>
	                        <p>&copy; Notion'18. All Rights Reserved</p>
	                    </div>
	                </div>
	            </div>
	            <div class="back-to-top">
	                <a href="#">
	                    <i class="fa fa-angle-up" aria-hidden="true"></i>
	                </a>
	            </div>
	        </div>
	    </footer>
		<!--====== FOOTER AREA END ======-->
		<!-- ====jQuery Latest version==== -->
		<script src="js/vendor/jquery-1.12.0.min.js"></script>

		<!-- ====Google Maps API==== -->
		<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->

		<!-- ====Bootstrap JS==== -->
		<script src="js/bootstrap.min.js"></script>

		<!-- ====jQuery Counterup==== -->
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>

		<!-- ====jQuery Countdown==== -->
		<script src="js/jquery.lwtCountdown-1.0.js"></script>

		<!-- ====jQuery Meanmenu==== -->
		<script src="js/jquery.meanmenu.min.js"></script>

		<!-- ====jQuery easing==== -->
		<script src="js/jquery.easing.1.3.min.js"></script>

		<!-- ====jQuery owl carousel==== -->
		<script src="js/owl.carousel.min.js"></script>

		<!-- ====jQuery parallax==== -->
		<script src="js/jquery.parallax-1.1.3.js"></script>

		<!-- ====jQuery Tubular==== -->
		<script src="js/jquery.tubular.1.0.js"></script>

		<!-- ====jQuery VenoBox==== -->
		<script src="js/venobox.min.js"></script>

		<!-- ====jQuery Camera==== -->
		<script src="js/camera.min.js"></script>

		<!-- ====jQuery Nicescroll and knob==== -->
		<script src="js/nicescroll.js"></script>


		<!--Opacity & Other IE fix for older browser-->
		<!--[if lte IE 8]>
				<script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
			<![endif]-->

		<!-- ====jQuery main script==== -->
		<script src="js/main.js"></script>
	</body>
	</html><?php
		}



	}
	catch(Exception $e) {
	 echo 'Message: ' .$e->getMessage();
	 }
}
else
{
	header("Location: Registration.php");
}
?>