<?php
session_start();

require_once 'bd.php';

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
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WARPR</title>
    <link rel="icon" href="/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" href="/img/favicon-32x32.png" sizes="32x32">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/index.js"></script>
</head>
<body>

    <div class="navbar" class="header">
        <div>
            <img src="img/warprwhite.png" height="39" width=auto>
        </div>
        <?php
            if(!isset($_SESSION['logado']))
            {
        ?>
        <div class="login" style="float: right"><a href="login/index.html">ENTRAR</a></div>
        <?php
            } else {
        ?>
        <div class="login" style="float: right"><a href="?opcao=logout">LOGOUT</a></div>
        <?php
            }
        ?>
    </div>

    <div class="content">
        <div class="imagem">
            <img src="img/warprgrey.png" height="200">
        </div>

        <label for="destaque" class="destaque">Comece já!</label>
        <input id="tab1" class="inputx" type="radio" name="tabs" checked>
        <label for="tab1" class="tablabel">Contratar</label>
        <input id="tab2" class="intputx" type="radio" name="tabs">
    
        <section class="content1">      
            <div class="input">
                Cadastre-se
                    <form method="post" action="cadContra.php">
                    <div class="input_white">
                        <input type="text" name="user1" id="user" placeholder="Nome de usuário" maxlength="12" required="required" />
                        <input type="text" name="email1" id="email" placeholder="Insira o email" maxlength="20" required="required" />
                        <div class="msgemail"></div>
                        <input type="password" name="password1" id="senha" placeholder="Insira sua senha" maxlength="15" required="required" />
                    </div>
                        Converse com um Freelancer disponível
                        <div>
                            <button class="concluirbtn" type="submit">Concluir</button>
                        </div>
                    </form>       
                    <div class="terms">*Ao pressionar em "Concluir", você estará aceitando os <a href="termos e condições">termos e condições</a> e <a href="política">política de privacidade</a></div>
            </div>
        </section>
        <section class="content2">
            <div class="input">
                Cadastre-se
                <form method="post" action="cadFunc.php">
                    <div id="input_white">
                        <input type="text" name="user2" id="user" placeholder="Nome de Usuário" maxlength="12" required="required" />
                        <input type="email" name="email2" id="email" placeholder="Insira o Email" maxlength="20" required="required" />
                        <div id="msg2email"></div>
                        <input type="password" name="password2" id="senha" placeholder="Insira sua senha" maxlength="15" required="required" />
                    </div>
                    <div>Escolha o tipo de serviço</div>
                    <div id="input_white">
                        <select name="work">
                            <option value="invalid" disabled selected hidden>Selecione uma categoria de trabalho</option>
                            <option value="first">First</option>
                            <option value="second">Second</option>
                        </select>
                    </div>
                    Converse com um Freelancer disponível
                    <div><button class="concluirbtn" type="submit">Concluir</button></div><br>
                </form>
                <div class="terms">*Ao pressionar em "Concluir", você estará aceitando os <a href="#">termos e condições</a> e <a href="#">política de privacidade</a></div>
            </div>
        </section>
    </div>

    <!-- <section>
        <div class="textcontent">
            <h3>Como funciona?</h3> Bacon ipsum dolor amet nisi filet mignon meatball, turkey dolore venison occaecat chicken boudin bresaola. Chicken beef rump aute eu bacon dolor pancetta ea nulla commodo kielbasa minim esse. Excepteur quis picanha, do anim shoulder ut ullamco non drumstick swine esse shank. Chuck turducken turkey eiusmod meatloaf mollit laboris lorem leberkas ham porchetta duis corned beef. Andouille eiusmod porchetta quis culpa officia laboris labore pancetta beef ribs strip steak. Cillum t-bone shankle est laboris. Sint velit drumstick kevin consequat alcatra. Dolore laboris meatball reprehenderit, dolor andouille minim sint nisi pastrami incididunt occaecat adipisicing alcatra sed. Veniam sirloin short loin aliquip shoulder do corned beef, biltong venison. Sirloin quis beef lorem chicken. Deserunt tempor anim mollit ex meatball. Pastrami andouille laborum short ribs irure, duis doner ham hock picanha flank pariatur sint in. Landjaeger cow est, in proident beef ribs aliqua doner adipisicing fugiat in pastrami capicola. Shankle jowl pastrami drumstick sirloin.Prosciutto consectetur aute voluptate officia elit pastrami reprehenderit. Drumstick turducken reprehenderit fatback, ullamco laborum in t-bone. Tail laboris anim esse. Ham venison kevin in, meatball swine do. Consequat non filet mignon sirloin ipsum ad dolore turkey ut hamburger, deserunt bacon laboris. Short loin shank adipisicing landjaeger, chuck cupidatat pastrami bacon ex ham prosciutto tenderloin strip steak picanha consectetur. Commodo exercitation ham hock landjaeger prosciutto anim do ut aliqua. Quis dolore shankle, sint occaecat beef ribs cillum aute drumstick spare ribs hamburger elit est. Pork commodo tempor porchetta proident meatball quis officia nulla sed eu beef ribs boudin adipisicing.Pariatur meatball ut cupidatat ham labore. Ham ad cupidatat, dolore in ut adipisicing eiusmod. Velit laboris excepteur nulla, sunt in ground round. Ex jerky exercitation non aliquip. Id corned beef venison, proident tempor pork tri-tip duis nostrud dolore commodo kevin frankfurter. <a href="comofunciona.php" class="login"> SAIBA MAIS ></a>
        </div>
    </section> -->

    <div class="footer" class="footer">
    <footer>
        <div class="footertotal">
            <div class="footerinfo">
            <h3>Sobre a WARPR</h3>
            
            <br> Bacon ipsum dolor amet frankfurter pork chop t-bone, hamburger biltong ball tip shoulder bacon corned beef pastrami cow beef. Ground round t-bone flank pork belly pork chop picanha frankfurter sausage alcatra chicken corned beef porchetta pork.
            <a href="team.php" class="login"> SAIBA MAIS SOBRE NÓS ></a>
                <div align="right">
                    <img class="login icon" src="img/icons/svg/deviantart.svg" height="32px">
                    <img class="login icon" src="img/icons/svg/tumblr.svg" height="32px">
                    <img class="login icon" src="img/icons/svg/facebook.svg" height="32px">
                    <img class="login icon" src="img/icons/svg/twitter.svg" height="32px">
                </div>
            </div>

            <div class="footermenu">
                <ul>
                <li><h4>+ informações!</h4></li>
                <li><a href="comofunciona.php" class="login">Como Funciona</a></li>
                <li><a href="taxas.php" class="login">Taxa e Encargos</a></li>
                <li><a href="central.php" class="login">Central de Ajuda</a></li>
                <li><a href="#" class="login">Contate-nos</a></li>
                </ul>
            </div>
            <hr color=#666 id="bottomx">

            <div class="footerfooter">COPYRIGHT © 2016 WARPR - TODOS OS DIREITOS RESERVADOS | <a class="login" href="#">POLÍTICA DE PRIVACIDADE</a> | <a class="login" href="#">TERMOS E CONDIÇÕES</a></div>
        </div>
    </footer>
    </div>
</body>
</html>






