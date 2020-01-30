<?php

if (isset($_POST['submit'])) {
	$name = $_POST['contact-name'];
	$department = $_POST['department'];
	$contactphone = $_POST['contact-phone'];
	$contactemail = $_POST['contact-email'];
	
	$devicetype = $_POST['device-type'];
	$devicelocation = $_POST['device-location'];
	$deviceid = $_POST['device-id'];

	$servicedescription = $_POST['device-problem'];
	
	$mailTo = "Nicholas.Wagner@ge.com";
	$subject = "Service Request from Great Falls Clinic.";
	$message = "From:  ".$name."\n".
		"Department:  ".$department."\n".
		"Contact Phone:  ".$contactphone."\n".
		"Contact Email:  ".$contactemail."\n\n".
		"Device Type:  ".$devicetype."\n".
		"Device Control Number:  ".$deviceid."\n".
		"Device Location:  ".$devicelocation."\n\n".
		"Description of Problem:  ".$servicedescription;
	
	mail($mailTo, $subject, $message);
	
	header("Location: index.html?mailsend");
}