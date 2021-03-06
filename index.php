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
    <link rel="stylesheet" href="dist/css/main.css">
    <script src="js/index.js"></script>
</head>
<body>

    <div class="navbar" class="header">
        <div class="container">
            <div class="navbar_logo">
                <img src="img/warprwhite.png" height="39" width=auto>
            </div>
            <div class="navbar_login">   
                <?php
                    if(!isset($_SESSION['logado']))
                    {
                ?>
                <div class="btn right"><a href="login/index.html">ENTRAR</a></div>
                <?php
                    } else {
                ?>
                <div class="btn right"><a href="?opcao=logout">LOGOUT</a></div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container">
            <div><img src="img/warprwhite.png" class="centered_logo"></div>
        </div>

        <div class="tab_comp">
            <input id="tab1" class="tab_input tab1" type="radio" name="tabs" checked>
            <label for="tab1" class="tab_label tab_label_1">Contratar</label>
            <input id="tab2" class="tab_input tab2" type="radio" name="tabs">
            <label for="tab2" class="tab_label tab_label_2">Trabalhar</label>

            <div class="content_tab_1">      
                <div class="content_tab">
                    <div class="content_tab_heading">Cadastre-se</div>
                    <form method="post" action="cadContra.php">
                    <div class="input_white">
                        <input type="text" name="user1" class="user" placeholder="Nome de usuário" maxlength="12" required="required" />
                        <input type="text" name="email1" class="email" placeholder="Insira o email" maxlength="20" required="required" />
                        <div class="msgemail"></div>
                        <input type="password" name="password1" class="senha" placeholder="Insira sua senha" maxlength="15" required="required" />
                    </div>
                        <div class="content_tab_heading">Converse com um Freelancer disponível</div>
                        <div>
                            <button class="done_btn" type="submit">Concluir</button>
                        </div>
                    </form>       
                    <div class="terms">*Ao pressionar em "Concluir", você estará aceitando os <a href="termos e condições">termos e condições</a> e <a href="política">política de privacidade</a></div>
                </div>
            </div>
            <div class="content_tab_2">
                <div class="content_tab">
                    <div class="content_tab_heading">Cadastre-se</div>
                    <form method="post" action="cadFunc.php">
                        <div class="input_white">
                            <input type="text" name="user2" class="user" placeholder="Nome de Usuário" maxlength="12" required="required" />
                            <input type="email" name="email2" class="email" placeholder="Insira o Email" maxlength="20" required="required" />
                            <div id="msg2email"></div>
                            <input type="password" name="password2" class="senha" placeholder="Insira sua senha" maxlength="15" required="required" />
                        </div>
                        <div class="content_tab_heading">Escolha o tipo de serviço</div>
                        <div class="input_white">
                            <select name="work">
                                <option value="invalid" disabled selected hidden>Selecione uma categoria de trabalho</option>
                                <option value="first">First</option>
                                <option value="second">Second</option>
                            </select>
                        </div>
                        <div class="content_tab_heading">Converse com um Freelancer disponível</div>
                        <div><button class="done_btn" type="submit">Concluir</button></div>
                    </form>
                    <div class="terms">*Ao pressionar em "Concluir", você estará aceitando os <a href="#">termos e condições</a> e <a href="#">política de privacidade</a></div>
                </div>
            </div>
        </div>    
    </div>

    <div class="content">
        <div class="container">
            <div class="content_text">
                Surely to some flows so meant my shall goes i hand hand goes it but meant you whole sea whole to goes to help to whole meant so but to be the it love but sin rush whole sea be river river if it falling if for a for goes the the hand if the but said whole hand flows only falling to but river like cant falling sin sin cant help you like man if i sin so fools flows rush shall love the it fools surely to some flows so meant my shall goes i hand hand goes it but meant you whole sea whole to goes to help to whole meant so but to be the it love but sin rush whole sea be river river if it falling if for a for goes the the hand if the but said whole hand flows only falling to but.
            </div>

            <img src="" alt="">
        </div>
    </div>

    <div class="footer" class="footer">
    <footer>
        <div class="container line">
            <div class="footer_wrapper">
                <div class="footer_menu">
                    <ul>
                    <li class="footer_info_header">+ informações</li>
                    <li><a href="comofunciona.php" class="btn">Como Funciona</a></li>
                    <li><a href="taxas.php" class="btn">Taxa e Encargos</a></li>
                    <li><a href="central.php" class="btn">Central de Ajuda</a></li>
                    <li><a href="#" class="btn">Contate-nos</a></li>
                    </ul>
                </div>
            
                <div class="footer_info">
                    <div class="footer_info_header">Sobre a WARPR</div>
                
                    <div class="footer_info_text">Hand it help man darling it with sin fools goes darling in sin rush shall my surely but i love stay it falling falling it goes would in so to falling surely take goes meant the fools rush take life so.</div>
                    <a href="team.php"> SAIBA MAIS SOBRE NÓS ></a>
                    <div align="right">
                        <img class="login icon" src="img/icons/svg/deviantart.svg" height="32px">
                        <img class="login icon" src="img/icons/svg/tumblr.svg" height="32px">
                        <img class="login icon" src="img/icons/svg/facebook.svg" height="32px">
                        <img class="login icon" src="img/icons/svg/twitter.svg" height="32px">
                    </div>
                </div>
            </div>
            
        </div>
        <div class="footer_rights">COPYRIGHT © 2016 WARPR - TODOS OS DIREITOS RESERVADOS | <a class="btn" href="#">POLÍTICA DE PRIVACIDADE</a> | <a class="btn" href="#">TERMOS E CONDIÇÕES</a></div>
    </footer>
    </div>
</body>
</html>






