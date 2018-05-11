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

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>WARPR</title>
    <link rel="icon" href="/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" href="/img/favicon-32x32.png" sizes="32x32">
    <link rel="stylesheet" href="css/indexstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto|Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    <script src="js/index.js"></script>
</head>


<body>
    <div id="navbar" class="header" style="font-family: Roboto">
    <ul>
        <li style="float:left"><img src="img/warprwhite.png" height="39" width=auto></li>
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
        <br><br><br>

    <div id="content">
        <div id="imagem">
            <img src="img/warprgrey.png" height="200">
        </div>

        <label for="destaque" id="destaque" style="font-size: 30px; font-family: Montserrat">Comece já!</label>
        <br><br><br>
        <input id="tab1" id="inputx" type="radio" name="tabs" checked>
        <label for="tab1" id="tablabel">Contratar</label>
        <input id="tab2" id="intputx" type="radio" name="tabs">
        <label for="tab2" id="tablabel">Trabalhar</label>

        <section id="content1">
        <p>
            <div id="input"><br>
            <ol>
            <li>Cadastre-se</li>
        <br><br>
            <form method="post" action="cadContra.php">
            <div id="input_white">
                <input type="text" name="user1" id="user" placeholder="Nome de usuário" maxlength="12" required="required" />
                <br>
                <input type="text" name="email1" id="email" placeholder="Insira o email" maxlength="20" required="required" />
                <div id="msgemail"></div>
                <br>
                <input type="password" name="password1" id="senha" placeholder="Insira sua senha" maxlength="15" required="required" />
            </div>
            
        <br><br>
            <style>
                select:invalid {
                color: gray;
                }
            </style>

                <li>Converse com um Freelancer disponível</li>
        <br><br>
                <div>
                    <button class="concluirbtn" type="submit">Concluir</button>
                </div><br>
            </form>
            </ol>       
                        
            <div class="terms">*Ao pressionar em "Concluir", você estará aceitando os <a href="termos e condições">termos e condições</a> e <a href="política">política de privacidade</a></div></div>
        </p>
        </section>

        <section id="content2">
        <p>
            <div id="input"><br>
                <ol>
                <li>Cadastre-se</li>
        <br><br>
        <form method="post" action="cadFunc.php">
            <div id="input_white">
                <input type="text" name="user2" id="user" placeholder="Nome de Usuário" maxlength="12" required="required" />
                <br>
                <input type="email" name="email2" id="email" placeholder="Insira o Email" maxlength="20" required="required" />
                <div id="msg2email"></div>
                <br>
                <input type="password" name="password2" id="senha" placeholder="Insira sua senha" maxlength="15" required="required" />
            </div>
            <br>

            <style>
            select:invalid {
            color: gray;
            }
            </style>
                    
            <li>Escolha o tipo de serviço</li>
            <br><br>
                <div id="input_white">
                    <select name="work">
                        <option value="invalid" disabled selected hidden>Selecione uma categoria de trabalho</option>
                        <option value="first">First</option>
                        <option value="second">Second</option>
                    </select>
                </div>
            <br>
            <li>Converse com um Freelancer disponível</li>
            <br><br>
                <div><button class="concluirbtn" type="submit">Concluir</button></div><br>
            </form>
                </ol>

            <div class="terms">*Ao pressionar em "Concluir", você estará aceitando os <a href="#">termos e condições</a> e <a href="#">política de privacidade</a></div>
            </div>
        </p>
        </section>
    </div>

    <br>
    <div id="textcontent">
        <h3>Como funciona?</h3> Bacon ipsum dolor amet nisi filet mignon meatball, turkey dolore venison occaecat chicken boudin bresaola. Chicken beef rump aute eu bacon dolor pancetta ea nulla commodo kielbasa minim esse. Excepteur quis picanha, do anim shoulder ut ullamco non drumstick swine esse shank. Chuck turducken turkey eiusmod meatloaf mollit laboris lorem leberkas ham porchetta duis corned beef. Andouille eiusmod porchetta quis culpa officia laboris labore pancetta beef ribs strip steak. Cillum t-bone shankle est laboris. Sint velit drumstick kevin consequat alcatra. Dolore laboris meatball reprehenderit, dolor andouille minim sint nisi pastrami incididunt occaecat adipisicing alcatra sed. Veniam sirloin short loin aliquip shoulder do corned beef, biltong venison. Sirloin quis beef lorem chicken. Deserunt tempor anim mollit ex meatball. Pastrami andouille laborum short ribs irure, duis doner ham hock picanha flank pariatur sint in. Landjaeger cow est, in proident beef ribs aliqua doner adipisicing fugiat in pastrami capicola. Shankle jowl pastrami drumstick sirloin.Prosciutto consectetur aute voluptate officia elit pastrami reprehenderit. Drumstick turducken reprehenderit fatback, ullamco laborum in t-bone. Tail laboris anim esse. Ham venison kevin in, meatball swine do. Consequat non filet mignon sirloin ipsum ad dolore turkey ut hamburger, deserunt bacon laboris. Short loin shank adipisicing landjaeger, chuck cupidatat pastrami bacon ex ham prosciutto tenderloin strip steak picanha consectetur. Commodo exercitation ham hock landjaeger prosciutto anim do ut aliqua. Quis dolore shankle, sint occaecat beef ribs cillum aute drumstick spare ribs hamburger elit est. Pork commodo tempor porchetta proident meatball quis officia nulla sed eu beef ribs boudin adipisicing.Pariatur meatball ut cupidatat ham labore. Ham ad cupidatat, dolore in ut adipisicing eiusmod. Velit laboris excepteur nulla, sunt in ground round. Ex jerky exercitation non aliquip. Id corned beef venison, proident tempor pork tri-tip duis nostrud dolore commodo kevin frankfurter. <a href="comofunciona.php" class="login"> SAIBA MAIS ></a>
    </div>
    <div id="textcontent2">
        <h3>Pastrami Ipsum</h3> Bacon ipsum dolor amet tongue beef ribs deserunt spare ribs. Duis veniam pork loin aliqua pig. Pariatur meatball ut cupidatat ham labore. Ham ad cupidatat, dolore in ut adipisicing eiusmod. Velit laboris excepteur nulla, sunt in ground round. Ex jerky exercitation non aliquip. Id corned beef venison, proident tempor pork tri-tip duis nostrud dolore commodo kevin frankfurter. Prosciutto chuck spare ribs jerky est. Sunt aliquip non turkey cow shoulder ut exercitation chuck sint leberkas. Id et flank chicken. Pastrami dolore dolore nostrud. Dolore lorem consectetur turkey meatball shankle. Prosciutto consectetur aute voluptate officia elit pastrami reprehenderit. Drumstick turducken reprehenderit fatback, ullamco laborum in t-bone. Tail laboris anim esse. Ham venison kevin in, meatball swine do. Consequat non filet mignon sirloin ipsum ad dolore turkey ut hamburger, deserunt bacon laboris. Short loin shank adipisicing landjaeger, chuck cupidatat pastrami bacon ex ham prosciutto tenderloin strip steak picanha consectetur. Commodo exercitation ham hock landjaeger prosciutto anim do ut aliqua. Quis dolore shankle, sint occaecat beef ribs cillum aute drumstick spare ribs hamburger elit est. Pork commodo tempor porchetta proident meatball quis officia nulla sed eu beef ribs boudin adipisicing. Veniam mollit tenderloin ea, tongue meatball pig ground round consequat pork alcatra aliqua. Commodo sunt pork loin leberkas capicola. Do shank bacon pancetta, bresaola esse in cow enim eu capicola dolor ipsum.
    </div>    
    <div id="textcontent3">
        <h3>Pastrami Ipsum</h3> Bacon ipsum dolor amet tongue beef ribs deserunt spare ribs. Duis veniam pork loin aliqua pig. Pariatur meatball ut cupidatat ham labore. Ham ad cupidatat, dolore in ut adipisicing eiusmod. Velit laboris excepteur nulla, sunt in ground round. Ex jerky exercitation non aliquip. Id corned beef venison, proident tempor pork tri-tip duis nostrud dolore commodo kevin frankfurter. Prosciutto chuck spare ribs jerky est. Sunt aliquip non turkey cow shoulder ut exercitation chuck sint leberkas. Id et flank chicken. Pastrami dolore dolore nostrud. Dolore lorem consectetur turkey meatball shankle. Prosciutto consectetur aute voluptate officia elit pastrami reprehenderit. Drumstick turducken reprehenderit fatback, ullamco laborum in t-bone. Tail laboris anim esse. Ham venison kevin in, meatball swine do. Consequat non filet mignon sirloin ipsum ad dolore turkey ut hamburger, deserunt bacon laboris. Short loin shank adipisicing landjaeger, chuck cupidatat pastrami bacon ex ham prosciutto tenderloin strip steak picanha consectetur. Commodo exercitation ham hock landjaeger prosciutto anim do ut aliqua. Quis dolore shankle, sint occaecat beef ribs cillum aute drumstick spare ribs hamburger elit est. Pork commodo tempor porchetta proident meatball quis officia nulla sed eu beef ribs boudin adipisicing. Veniam mollit tenderloin ea, tongue meatball pig ground round consequat pork alcatra aliqua. Commodo sunt pork loin leberkas capicola. Do shank bacon pancetta, bresaola esse in cow enim eu capicola dolor ipsum.
    </div>

<!-- rodapé -->
    <div id="footer" class="footer">
        <footer>
            <div id="footertotal">      
                    <div id="footerinfo">
                    <h3>Sobre a WARPR</h3>
                    <br> Bacon ipsum dolor amet frankfurter pork chop t-bone, hamburger biltong ball tip shoulder bacon corned beef pastrami cow beef. Ground round t-bone flank pork belly pork chop picanha frankfurter sausage alcatra chicken corned beef porchetta pork. &nbsp;
                    <a href="team.php" class="login"> SAIBA MAIS SOBRE NÓS ></a>
                    <br><br>
                        <div align="right">
                        <img class="login" id="icon" src="img/icons/svg/deviantart.svg" height="32px">&nbsp;
                        <img class="login" id="icon" src="img/icons/svg/tumblr.svg" height="32px">&nbsp;
                        <img class="login" id="icon" src="img/icons/svg/facebook.svg" height="32px">&nbsp;
                        <img class="login" id="icon" src="img/icons/svg/twitter.svg" height="32px">&nbsp;
                        </div>
                    </div>
                    <div id="footermenu">
                        <ul>
                        <li><h4>+ informações!</h4></li>
                        <br>
                        <li><a href="comofunciona.php" class="login">Como Funciona</a></li>
                        <li><a href="taxas.php" class="login">Taxa e Encargos</a></li>
                        <li><a href="central.php" class="login">Central de Ajuda</a></li>
                        <li><a href="#" class="login">Contate-nos</a></li>
                        </ul>
                        <br>
                    </div>
                <hr color=#666 id="bottomx">
                    <br>
                <div id="footerfooter">COPYRIGHT © 2016 WARPR - TODOS OS DIREITOS RESERVADOS | <a class="login" href="#">POLÍTICA DE PRIVACIDADE</a> | <a class="login" href="#">TERMOS E CONDIÇÕES</a></div>
            </div>
        </footer>
    </div>
</body>
</html>