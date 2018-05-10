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
    <link rel="stylesheet" href="css/central.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto|Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="central/css/style.css">
    <link rel="stylesheet" href="central/css/reset.css">
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  </head>
  <body>
<div>
    <div class="container">
          <h1 class="heading-primary">Central de Ajuda warpr</h1>
          <div class="accordion">
            <dl>
               <!-- primeiro -->
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Bacon ipsum dolor amet nisi filet mignon meatball</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur <a href="http://www.google.com">Test</a>adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <!-- segundo -->
              <dt>
                <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                  Turkey dolore venison occaecat chicken boudin bresaola</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <!-- terceiro -->
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                   Chicken beef rump aute eu bacon dolor pancetta
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <!-- quarto -->
              <dt>
                <a href="#accordion4" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                 Consequat non filet mignon sirloin
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <!-- quinto -->
              <dt>
                <a href="#accordion5" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Prosciutto consectetur aute voluptate
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <!-- sexto -->
              <dt>
                <a href="#accordion6" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Pariatur meatball ut cupidatat ham labore
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <!-- sétimo -->
              <dt>
                <a href="#accordion7" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Commodo exercitation ham hock landjaeger
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <!-- oitavo -->
              <dt>
                <a href="#accordion8" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Commodo sunt pork loin leberkas
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
              <!-- nono -->
              <dt>
                <a href="#accordion9" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Pork commodo tempor porchetta 
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu interdum diam. Donec interdum porttitor risus non bibendum. Maecenas sollicitudin eros in quam imperdiet placerat. Cras justo purus, rhoncus nec lobortis ut, iaculis vel ipsum. Donec dignissim arcu nec elit faucibus condimentum. Donec facilisis consectetur enim sit amet varius. Pellentesque justo dui, sodales quis luctus a, iaculis eget mauris. </p>
                <p>Aliquam dapibus, ante quis fringilla feugiat, mauris risus condimentum massa, at elementum libero quam ac ligula. Pellentesque at rhoncus dolor. Duis porttitor nibh ut lobortis aliquam. Nullam eu dolor venenatis mauris placerat tristique eget id dolor. Quisque blandit adipiscing erat vitae dapibus. Nulla aliquam magna nec elementum tincidunt.</p>
              </dd>
            </dl>
          </div>
        </div>
        <script src="central/js/index.js"></script>
</div>
  <div id="navbar" class="header" style="font-family: Roboto">
        <ul>
            <li style="float:left"><a href="index.html"><img src="img/warprwhite.png" height="39" width=auto></a></li>
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
                        <li><a href="taxas.php" class="login">Taxa e Encargos</a></li>
                        <li><a href="#" class="login">Central de Ajuda</a></li>
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
