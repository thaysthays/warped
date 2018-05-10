<?php
session_start();

$opcao = isset($_REQUEST['opcao']) ? $_REQUEST['opcao'] : "#";
if($opcao == 'logout'){	
	//Simple exit message
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'><i>User ". $_POST['username'] ." has left the chat session.</i><br></div>");
	fclose($fp);
	
	session_destroy();
	header("Location: ../login/index.html"); //Redirect the user
}

if (isset($_POST['btnLogin'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    require_once '../bd.php';
    $con = getDB();
    $strSql = "SELECT * FROM warprCon WHERE user='$user' OR email='$user' AND password='$pass'";
        $rs = $con->query($strSql);
        if($rs->setFetchMode(PDO::FETCH_ASSOC)){
            $_SESSION['logado'] = true;
        }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chat - Customer Module</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<?php
if(!isset($_SESSION['logado'])){
	header("Location: ../login/index.html");
}
else{
?>
<div id="wrapper">
	<div id="menu">
		<p class="welcome">Welcome, <b><?php echo $user; ?></b></p>
                <p class="logout"><a id="exit" href="?opcao=logout"><span>Sair</span></a></p>
		<div style="clear:both"></div>
	</div>	
	<div id="chatbox"><?php
	if(file_exists("log.html") && filesize("log.html") > 0){
		$handle = fopen("log.html", "r");
		$contents = fread($handle, filesize("log.html"));
		fclose($handle);
		
		echo $contents;
	}
	?></div>
	
	<form name="message" action="">
		<input name="usermsg" type="text" id="usermsg" size="63" />
		<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
	</form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
	//Load the file containing the chat log
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
	}
	setInterval (loadLog, 1000);	//Reload file every 1 seconds
	
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'index.php?opcao=logout';}		
	});
});
</script>
<?php
}
?>
</body>
</html>