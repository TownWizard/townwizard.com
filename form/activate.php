<?php

$con = mysql_pconnect("localhost","root","bitnami");
if (!$con){die('Could not connect: ' . mysql_error($con));}
$dblink = mysql_select_db("master");


if (isset($_REQUEST['createguide'])) { 
    
	//calling of creating internal site

	$querystring = "id=2&token=EBDBB91F-BCFE-4f00-AFF5-F33F19A345E8&email=".$_REQUEST['email']."&password=".$_REQUEST['pass']."&guideinternalurl=".$_REQUEST['gname']."&guidezipcode=".$_REQUEST['zip']."&timezone=".$_REQUEST['time_zone']."&language=".$_REQUEST['language']."&tformat=".$_REQUEST['time_format']."&dformat=".$_REQUEST['date_format']."&wunit=".$_REQUEST['temperature']."&dunit=".$_REQUEST['distance'];
	//echo $querystring;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"http://operations.townwizard.com/internal_cms_create.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$querystring);
	$server_output = curl_exec ($ch);
	curl_close ($ch);

	if ($server_output == "OK"){ 
		 $updateuser="UPDATE user_signup SET signup_type = '0', user_status = '1' WHERE id = '".$_REQUEST['userid']."' ";
         
        $result = mysql_query($updateuser);
        // Send the email:
        $twadminemail = $_REQUEST['email'];

	   $message = "Your new local guide is ready! Check out the site  link and login information below.<br/>\n\n";
        $message.= "<b>Guide Name : </b>".$_REQUEST['gname']."<br/>";
        $message.= "<b>Guide Administration URL : </b>http://".$_REQUEST['gname'].".townwizard.com/administrator<br/>";
        $message.= "<b>Username : </b>".$_REQUEST['email']."<br/>";
        $message.= "<b>Password : </b>".$_REQUEST['pass']."<br/>";
        $message.= "Also, be sure to check out these helpful links to help you get started:<br/>***knowledge base link***<br/>***link to upgrade to paid account***<br/>Sincerely,<br/>The TownWizard Team";
	  
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1\r\n";
		$headers .= "From: no-reply@townwizard.com";

        $finalmail = mail($twadminemail, 'Your TownWizard Local Guide is Ready!', $message,$headers);

        if($finalmail){

            $_REQUEST[] = "";
            $serverurl = $_SERVER["HTTP_HOST"];

			header('Location:http://'.$serverurl.'/form/thanks2.html');
//exit;
        }else{
            echo '<div class="errormsgbox">You could not be registered due to error.Please contact at <b>support@townwizard.com</b></div><br/>';
        }

	}else{

	 	echo '<div class="errormsgbox">You could not be registered due to a system error.</div>';
	}
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Partner Activation</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

if (isset($_REQUEST['key']) && (strlen($_REQUEST['key']) == 32)){//The Activation key will always be 32 since it is MD5 Hash
   $key = $_REQUEST['key']; 
   
}else{
	echo '<div class="errormsgbox">Activation key is not Proper.</div>';
	exit;
}

if (isset($key)){
	
	//echo $_REQUEST['key'];

	// Select from database to set the "activation" field
	$sql="SELECT * FROM user_signup WHERE `activation`='$key' AND user_status='0' LIMIT 1";
	$result = mysql_query($sql);
	$data = mysql_fetch_array($result);


   // Print a customized message:
	if($data['activation'] == TRUE){

		?>
		
	<form id="contact2" method="post">	
		<table width="100%" cellpadding="0" cellspacing="5" border="0">
			<tr>
				<td colspan="4">
					<?php 		
						echo '<div class="success" style="font-size: 133%;padding: 10px 9px;">Please complete the information below and then click the “Activate” button.</div>';
						echo "<br/>"; 
					?>
				</td>
			</tr>
			<tr>
				<td width="97px">
					<label for="website">Guide Name : </label>
				</td>
				<td width="124px">		
					<input type="text" class="disable" name="gname" id="gname" placeholder="Selected guide name" value="<?php echo $data['guide_name'];?>" ReadOnly=true>
				</td>					
				<td width="61px">
					<label for="fname">First Name : </label>
				</td>
				<td width="114px">		
					<input type="text" class="disable" name="fname" id="fname" placeholder="First Name" value="<?php echo $data['first_name'];?>" ReadOnly=true>
				</td>				
			</tr>
			<tr>
				<td>
					<label for="email">Guide Login E-mail : </label>
				</td>
				<td>
					<input type="email" class="disable" name="email" id="email" placeholder="yourname@domain.com" value="<?php echo $data['email'];?>" ReadOnly=true>
				</td>					
				<td>
					<label for="lname">Last Name : </label>
				</td>
				<td>
					<input type="text" class="disable" name="lname" id="lname" placeholder="Last Name" value="<?php echo $data['last_name'];?>" ReadOnly=true>
				</td>				
			</tr>
			<tr>
				<td>
					<input type="hidden" name="pass" id="pass" value="<?php echo $data['password'];?>" ReadOnly=true>
				</td>
				<td>
					<input type="hidden" name="userid" id="userid" value="<?php echo $data['id'];?>">		
				</td>		
			</tr>
		</table>
	
	<table width="100%" cellpadding="0" cellspacing="5" border="0">
		<tr><td><label for="zip">City zip code<span class="require">*</span></label></td>
		<td><input type="text" name="zip" id="zip" placeholder="City zip code" required oninvalid="setCustomValidity('Zip code required. A-Z, a-z or 0-9 only.')" onchange="try{setCustomValidity('')}catch(e){}" pattern="[a-zA-Z0-9]+" /></td></tr>	
		
		
		<tr><td><label for="language">Language</label></td>
		<td><select name="language" id="language">
			<option value="english">English</option>
			<option value="spanish">Spanish</option>
			<option value="dutch">Dutch</option>
			<option value="portuguese">Portuguese</option>
			<option value="croatian">Croatian</option>
			<option value="French">French</option>
		</select></td></tr>		
		
		<tr><td><label for="time_zone">Time zone</label></td>
		<td><select name="time_zone" id="time_zone" class="inputbox" size="1">
			<option value="-12:00:00">(GMT -12:00) Eniwetok, Kwajalein</option>
			<option value="-11:00:00">(GMT -11:00) Midway Island, Samoa</option>
			<option value="-10:00:00">(GMT -10:00) Hawaii</option>
			<option value="-9:00:00">(GMT -9:00) Alaska</option>
			<option value="-8:00:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
			<option value="-7:00:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
			<option value="-6:00:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
			<option value="-5:00:00" selected>(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
			<option value="-4:00:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
			<option value="-3:30:00">(GMT -3:30) Newfoundland</option>
			<option value="-3:00:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
			<option value="-2:00:00">(GMT -2:00) Mid-Atlantic</option>
			<option value="-1:00:00">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
			<option value="00:00:00">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
			<option value="1:00:00">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
			<option value="2:00:00">(GMT +2:00) Kaliningrad, South Africa</option>
			<option value="3:00:00">(GMT +3:30) Tehran</option>
			<option value="4:00:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
			<option value="4:30:00">(GMT +4:30) Kabul</option>
			<option value="5:00:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
			<option value="5:30:00">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
			<option value="6:00:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
			<option value="7:00:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
			<option value="8:00:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
			<option value="9:00:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
			<option value="9:30:00">(GMT +9:30) Adelaide, Darwin</option>
			<option value="10:00:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
			<option value="11:00:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
			<option value="12:00:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
		</select></td></tr>
	
		<tr><td><label for="time_format">Time format</label></td>
		<td><select name="time_format" id="time_format">
			<option value="12">12 - Hour Time</option>
			<option value="24">24 - Hour Time</option>
		</select></td></tr>		

		<tr><td><label for="date_format">Date Format</label></td>
		<td><select name="date_format" id="date_format">
			<option value="mmdd">Month/Date</option>
			<option value="ddmm">Date/Month</option>
		</select></td></tr>			
		
		<tr><td><label for="temperature">Temperature</label></td>
		<td><select name="temperature" id="temperature">
			<option value="c">Celsius</option>
			<option value="f" selected>Fahrenheit</option>
		</select></td></tr>			

		<tr><td><label for="distance">Distance</label></td>
		<td><select name="distance" id="distance">
			<option value="KM">KM</option>
			<option value="Miles" selected>Miles</option>
		</select></td></tr>	
		</table>		
		<div style="clear: both"></div>
		<input type="submit" name="createguide" class="myButton" id="submit" value="Activate" />
	</form>
	
	<?php
	}else{
		echo '<div class="errormsgbox">Guide has already been activated.</div>';
	}	

	$key="";
 	mysql_close($con);

} else {
	echo '<div class="errormsgbox">Error Occured .</div>';
}


?>
</body>
</html>
