<?php
include("../res/x5engine.php");
$nameList = array("3p7","jgd","cdv","jgc","y3n","48f","knx","4fj","nte","262");
$charList = array("U","8","D","G","T","4","N","6","N","J");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
