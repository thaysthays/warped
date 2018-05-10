<?php
session_start();

$opcao = isset($_REQUEST['opcao']) ? $_REQUEST['opcao'] : "#";
if ($opcao == 'logout') {
    session_destroy();
    header("Location: index.php?");
}

if (isset($_POST['btnLogin'])) {
    $user = $_POST['username'];
    $senha = $_POST['password'];
    if ($senha == "asd" && $user == "asd") {
        $_SESSION['logado'] = true;
    }
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>warpr - sobre nós</title>
    
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900'>
    <link rel="stylesheet" href="css/comofunciona.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto|Montserrat' rel='stylesheet' type='text/css'>
    
        
  </head>

  <body>
  
  <div id="navbar" class="header" style="font-family: Roboto">
        <ul>
            <li style="float:left"><a href="index.php"><img src="img/warprwhite.png" height="39" width=auto></a></li>
            <li style="float: right"></li>
            <?php
                if(!isset($_SESSION['logado']))
                {
            ?>
            <li class="login" style="float: right"><a href="login/index.html">ENTRAR</a></li>
            <?php
                } else {
            ?>
            <li class="login" style="float: right"><a href="?opcao=logout">LOGOUT</a></li>
            <?php
                }
            ?>
        </ul>
     </div>
     
<div id="contenty">
<br><br><br>
<h1>COMO FUNCIONA:</h1>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt quis culpa aliquam beatae hic, porro natus tempore est magni. Nemo accusantium ea non quo, recusandae quaerat dolor est, at nulla. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam consequatur quas beatae optio quaerat cupiditate nam tempora quibusdam. Eaque delectus sunt velit nostrum, odit quasi quos totam doloribus sequi sed. </p>
<div id="contentx" style="width:1120px;">
    <!--1-->
    <div id="C1" style="float: left; width: 250px;">
    <img src="img/ico2/file.png" width="210px">
    <br>
    <br>
    LEFT LOREM 1 Bacon ipsum dolor amet short ribs tail pig corned beef ribeye, bacon venison chuck swine flank frankfurter filet mignon shankle kevin alcatra. Frankfurter pig beef, tail drumstick sausage strip steak sirloin picanha swine pancetta porchetta. Boudin landjaeger tongue meatball, hamburger filet mignon jowl fatback ham hock shank bacon. Pork tongue andouille, porchetta pastrami doner kevin boudin hamburger leberkas corned beef short ribs landjaeger cupim.   
    </div>
    <!--2-->
    <div id="C2" style="float: left; width: 250px;">
    <img src="img/ico2/yearbook.png" width="210px">
    <br>
    <br>
    MID LOREM 2 Bacon ipsum dolor amet short ribs tail pig corned beef ribeye, bacon venison chuck swine flank frankfurter filet mignon shankle kevin alcatra. Frankfurter pig beef, tail drumstick sausage strip steak sirloin picanha swine pancetta porchetta. Boudin landjaeger tongue meatball, hamburger filet mignon jowl fatback ham hock shank bacon. Pork tongue andouille, porchetta pastrami doner kevin boudin hamburger leberkas corned beef short ribs landjaeger cupim.    
    </div>
    <!--3-->
    <div id="C3" style="float: left; width: 250px;">
    <img src="img/ico2/learning.png" width="210px">
    <br>
    <br>
    MID LOREM 3 Bacon ipsum dolor amet short ribs tail pig corned beef ribeye, bacon venison chuck swine flank frankfurter filet mignon shankle kevin alcatra. Frankfurter pig beef, tail drumstick sausage strip steak sirloin picanha swine pancetta porchetta. Boudin landjaeger tongue meatball, hamburger filet mignon jowl fatback ham hock shank bacon. Pork tongue andouille, porchetta pastrami doner kevin boudin hamburger leberkas corned beef short ribs landjaeger cupim.       
    </div>
    <div id="C4" style="float: left; width: 250px;">
    <img src="img/ico2/diploma-1.png" width="210px">
    <br>
    <br>
    RIGHT LOREM 4 Bacon ipsum dolor amet short ribs tail pig corned beef ribeye, bacon venison chuck swine flank frankfurter filet mignon shankle kevin alcatra. Frankfurter pig beef, tail drumstick sausage strip steak sirloin picanha swine pancetta porchetta. Boudin landjaeger tongue meatball, hamburger filet mignon jowl fatback ham hock shank bacon. Pork tongue andouille, porchetta pastrami doner kevin boudin hamburger leberkas corned beef short ribs landjaeger cupim.       
    </div>
    <br style="clear: left;"/>
</div>  
</div>                                                       
    <!-- rodapé -->
    <footer>
    <div id="footer" class="footer">
        <footer>
            <div id="footertotal">
                <!-- sobre -->
                <div id="footerinfo">
                    <div align="right">
                        <img class="login" id="icon" src="img/icons/svg/deviantart.svg" height="25px">&nbsp;
                        <img class="login" id="icon" src="img/icons/svg/tumblr.svg" height="25px">&nbsp;
                        <img class="login" id="icon" src="img/icons/svg/facebook.svg" height="25px">&nbsp;
                        <img class="login" id="icon" src="img/icons/svg/twitter.svg" height="25px">&nbsp;
                    </div>
                </div>
                <!--menuzinho-->
                <div id="footermenu">
                    <ul>
                        <br>
                        <li><a href="#" class="login">Como Funciona</a></li>
                        <li><a href="taxas.php" class="login">Taxa e Encargos</a></li>
                        <li><a href="central.php" class="login">Central de Ajuda</a></li>
                        <li><a href="#" class="login">Contate-nos</a></li>
                        <li><a href="team.php" class="login">Quem Somos</a></li>
                    </ul>
                   
                </div>
                <br>
                <br>
                <!-- barra horizontal -->
                <hr color=#666 id="bottomx">
                <br>
                <!--termos e condições -->
                <div id="footerfooter">COPYRIGHT © 2016 WARPR - TODOS OS DIREITOS RESERVADOS | <a class="login">POLÍTICA DE PRIVACIDADE</a> | <a class="login">TERMOS E CONDIÇÕES</a></div>
            </div>
        </footer>
    </div> 
    </footer>   
  </body>
</html>
