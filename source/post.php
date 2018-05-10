<?php
session_start();
if(isset($_POST['username'])){
	$text = $_POST['text'];
        $user = $_POST['username'];
	
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$user."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	fclose($fp);
}
?>