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
<html>
  <head>
    <meta charset="UTF-8">
    <title>warpr - taxas</title>
    
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900'>
    <link rel="stylesheet" href="css/taxas.css">
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
     
<div id="content">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan rutrum magna sed suscipit. Proin eleifend mollis ipsum, eget congue odio aliquam nec. Vestibulum convallis placerat mauris vel convallis. Curabitur porta volutpat nunc vel euismod. Morbi id turpis at elit mattis congue et a urna. Ut lectus ipsum, dictum non aliquam vel, ultricies sed justo. Nunc varius libero a cursus ultricies. Vivamus at massa nec nisl vestibulum ornare non a nunc. Nulla mauris erat, eleifend et nunc nec, pellentesque cursus neque. Integer hendrerit diam ac vestibulum tincidunt. Pellentesque ornare dolor a velit pellentesque hendrerit. Proin ipsum ante, vestibulum in placerat vel, tincidunt ac sem. Vivamus eget augue fermentum, tincidunt nibh quis, mollis nulla. Donec leo orci, semper ac eros quis, mollis varius risus. Fusce nec nisl purus.
Proin sagittis quis nulla vitae egestas. Sed porta nisi justo, rutrum molestie dolor maximus in. Donec porta neque sed tellus sagittis gravida. Morbi finibus diam in lectus scelerisque, eget rutrum turpis ultricies. Cras scelerisque sem nisi, id lobortis erat viverra ut. Aliquam sed viverra ex. Sed consectetur, sapien vel dignissim blandit, metus erat gravida ante, ut dignissim erat erat vel tellus. Sed purus lectus, eleifend ac tempor blandit, dignissim eu est.
Nam urna eros, imperdiet sit amet tempus et, porta vel quam. Praesent eu magna ultrices, congue ligula sit amet, varius neque. Donec ullamcorper in felis a lacinia. Vestibulum fringilla felis pellentesque neque sagittis luctus vitae a ex. Fusce viverra eget metus et tempor. Nam sit amet massa egestas, ultrices purus ac, sagittis felis. Curabitur rhoncus at felis efficitur vestibulum. Cras consequat tellus quis augue molestie convallis. Aenean cursus ex et lectus finibus commodo. Nullam eu massa sed dui tristique congue mattis sed magna. Pellentesque in ex et orci vestibulum blandit. Integer tempor congue efficitur. Ut eleifend lorem vitae convallis euismod.
Maecenas varius tellus commodo euismod commodo. Aenean in sem eu risus lacinia sodales sed consectetur risus. Aenean sollicitudin odio sed est imperdiet, vel placerat ante iaculis. Pellentesque finibus blandit condimentum. Vivamus bibendum rutrum est, in aliquam ligula scelerisque in. In lacinia massa et dolor maximus vestibulum. Fusce pellentesque pellentesque molestie. Ut blandit magna sed urna pretium, ultrices lobortis nunc pharetra. Aenean pharetra eros et justo rutrum, nec volutpat nisi faucibus. Donec luctus pretium velit ut volutpat. Suspendisse mauris nisi, interdum in sapien a, ultrices facilisis lacus. Maecenas facilisis tortor non ligula laoreet, eu tempus lacus ullamcorper. Nunc ut nibh bibendum, pulvinar metus eget, finibus lorem. Vestibulum nec odio convallis, mattis augue a, congue elit. Nulla aliquam cursus facilisis.
Nam tristique fermentum arcu, sed luctus tortor faucibus sed. Pellentesque in euismod sapien, ut ornare purus. Phasellus nec finibus lorem. Donec gravida iaculis efficitur. In vulputate, massa vitae aliquam aliquet, lorem nunc suscipit magna, ut interdum libero felis varius tellus. Vivamus scelerisque, nulla eu ullamcorper tincidunt, ipsum ligula porttitor metus, eu tempor ipsum leo non magna. Nam sit amet lorem odio. Suspendisse potenti. Phasellus ut sollicitudin libero, eu pharetra odio. Phasellus vitae diam mauris. Duis eget interdum augue, eu faucibus libero. Quisque ultrices ultrices diam, at scelerisque nunc tincidunt ac. Vestibulum hendrerit malesuada purus, nec elementum purus mollis ut. Sed iaculis tempus libero, non mattis mi accumsan a.
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
                        <li><a href="comofunciona.php" class="login">Como Funciona</a></li>
                        <li><a href="#" class="login">Taxa e Encargos</a></li>
                        <li><a href="central.php" class="login">Central de Ajuda</a></li>
                        <li><a href="" class="login">Contate-nos</a></li>
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
