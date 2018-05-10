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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/teamstyle.css">
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
     
<div id="underimg">   
<div class="container">
  <div class="at-section">
    <div class="at-section__title">Sobre nós</div>
      <div id="maisinfo"><h2>+ Informações</h2><br>
    &nbsp;&nbsp;Bacon ipsum dolor amet filet mignon brisket shoulder biltong, venison andouille rump turkey pork belly pancetta pork loin. Venison strip steak doner salami pastrami swine sirloin pork t-bone short loin cow meatloaf jerky alcatra spare ribs. Chuck corned beef capicola short loin, tri-tip ball tip brisket sausage ribeye bacon turkey pork loin. Shankle tongue turkey leberkas ham kielbasa bresaola picanha sausage ribeye alcatra pork chop bacon brisket shank. Chuck sirloin turducken meatloaf. Shank sausage pork chop, brisket chicken turducken ground round bresaola swine. Shank beef ribs alcatra swine, pork belly biltong pancetta picanha ball tip pork chop salami rump.</div>
  </div>
  <div data-column='2' class="at-grid">
    <div class="at-column">
      <div class="at-user">
        <div class="at-user__avatar"><img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/9f/9f1d19f4293a5040ad0a59a7cd0bf3b65fe722dd_full.jpg"/></div>
        <div class="at-user__name">Thays Giotto</div>
        <div class="at-user__title">CEO &amp; Founder</div>
        <ul class="at-social">
        
                          <li class="at-social__item">
             <a href="">
              <svg viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 9h3l-.375 3H14v9h-3.89v-9H8V9h2.11V6.984c0-1.312.327-2.304.984-2.976C11.75 3.336 12.844 3 14.375 3H17v3h-1.594c-.594 0-.976.094-1.148.281-.172.188-.258.5-.258.938V9z" fill-rule="evenodd"></path>
              </svg></a></li>
          <li class="at-social__item"><a href="">
              <svg viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.875 7.5v.563c0 3.28-1.18 6.257-3.54 8.93C14.978 19.663 11.845 21 7.938 21c-2.5 0-4.812-.687-6.937-2.063.5.063.86.094 1.078.094 2.094 0 3.969-.656 5.625-1.968a4.563 4.563 0 0 1-2.625-.915 4.294 4.294 0 0 1-1.594-2.226c.375.062.657.094.844.094.313 0 .719-.063 1.219-.188-1.031-.219-1.899-.742-2.602-1.57a4.32 4.32 0 0 1-1.054-2.883c.687.328 1.375.516 2.062.516C2.61 9.016 1.938 7.75 1.938 6.094c0-.782.203-1.531.609-2.25 2.406 2.969 5.515 4.547 9.328 4.734-.063-.219-.094-.562-.094-1.031 0-1.281.438-2.36 1.313-3.234C13.969 3.437 15.047 3 16.328 3s2.375.484 3.281 1.453c.938-.156 1.907-.531 2.907-1.125-.313 1.094-.985 1.938-2.016 2.531.969-.093 1.844-.328 2.625-.703-.563.875-1.312 1.656-2.25 2.344z" fill-rule="evenodd"></path>
              </svg></a></li>
          <li class="at-social__item"><a href="">
              <svg viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.547 3c.406 0 .75.133 1.031.398.281.266.422.602.422 1.008v15.047c0 .406-.14.766-.422 1.078a1.335 1.335 0 0 1-1.031.469h-15c-.406 0-.766-.156-1.078-.469C3.156 20.22 3 19.86 3 19.453V4.406c0-.406.148-.742.445-1.008C3.742 3.133 4.11 3 4.547 3h15zM8.578 18V9.984H6V18h2.578zM7.36 8.766c.407 0 .743-.133 1.008-.399a1.31 1.31 0 0 0 .399-.96c0-.407-.125-.743-.375-1.009C8.14 6.133 7.813 6 7.406 6c-.406 0-.742.133-1.008.398C6.133 6.664 6 7 6 7.406c0 .375.125.696.375.961.25.266.578.399.984.399zM18 18v-4.688c0-1.156-.273-2.03-.82-2.624-.547-.594-1.258-.891-2.133-.891-.938 0-1.719.437-2.344 1.312V9.984h-2.578V18h2.578v-4.547c0-.312.031-.531.094-.656.25-.625.687-.938 1.312-.938.875 0 1.313.578 1.313 1.735V18H18z" fill-rule="evenodd"></path>
              </svg></a></li>
        </ul>
      </div>
    </div>
    <div class="at-column">
      <div class="at-user">
        <div class="at-user__avatar"><img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/33/3355bd68c04dd7a55e14ee4e3ae82e2d705dcc69_full.jpg"/></div>
        <div class="at-user__name">Pedro Figueiredo</div>
        <div class="at-user__title">Co-Founder, Creative Director</div>
        <ul class="at-social">
          <li class="at-social__item"><a href="">
              <svg viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 9h3l-.375 3H14v9h-3.89v-9H8V9h2.11V6.984c0-1.312.327-2.304.984-2.976C11.75 3.336 12.844 3 14.375 3H17v3h-1.594c-.594 0-.976.094-1.148.281-.172.188-.258.5-.258.938V9z" fill-rule="evenodd"></path>
              </svg></a></li>
          <li class="at-social__item"><a href="">
              <svg viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.875 7.5v.563c0 3.28-1.18 6.257-3.54 8.93C14.978 19.663 11.845 21 7.938 21c-2.5 0-4.812-.687-6.937-2.063.5.063.86.094 1.078.094 2.094 0 3.969-.656 5.625-1.968a4.563 4.563 0 0 1-2.625-.915 4.294 4.294 0 0 1-1.594-2.226c.375.062.657.094.844.094.313 0 .719-.063 1.219-.188-1.031-.219-1.899-.742-2.602-1.57a4.32 4.32 0 0 1-1.054-2.883c.687.328 1.375.516 2.062.516C2.61 9.016 1.938 7.75 1.938 6.094c0-.782.203-1.531.609-2.25 2.406 2.969 5.515 4.547 9.328 4.734-.063-.219-.094-.562-.094-1.031 0-1.281.438-2.36 1.313-3.234C13.969 3.437 15.047 3 16.328 3s2.375.484 3.281 1.453c.938-.156 1.907-.531 2.907-1.125-.313 1.094-.985 1.938-2.016 2.531.969-.093 1.844-.328 2.625-.703-.563.875-1.312 1.656-2.25 2.344z" fill-rule="evenodd"></path>
              </svg></a></li>
          <li class="at-social__item"><a href="">
              <svg viewBox="0 0 24 24" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.547 3c.406 0 .75.133 1.031.398.281.266.422.602.422 1.008v15.047c0 .406-.14.766-.422 1.078a1.335 1.335 0 0 1-1.031.469h-15c-.406 0-.766-.156-1.078-.469C3.156 20.22 3 19.86 3 19.453V4.406c0-.406.148-.742.445-1.008C3.742 3.133 4.11 3 4.547 3h15zM8.578 18V9.984H6V18h2.578zM7.36 8.766c.407 0 .743-.133 1.008-.399a1.31 1.31 0 0 0 .399-.96c0-.407-.125-.743-.375-1.009C8.14 6.133 7.813 6 7.406 6c-.406 0-.742.133-1.008.398C6.133 6.664 6 7 6 7.406c0 .375.125.696.375.961.25.266.578.399.984.399zM18 18v-4.688c0-1.156-.273-2.03-.82-2.624-.547-.594-1.258-.891-2.133-.891-.938 0-1.719.437-2.344 1.312V9.984h-2.578V18h2.578v-4.547c0-.312.031-.531.094-.656.25-.625.687-.938 1.312-.938.875 0 1.313.578 1.313 1.735V18H18z" fill-rule="evenodd"></path>
              </svg></a></li>
        </ul>
      </div>
    </div>
  </div>
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
                        <li><a href="comofunciona.php" class="login">Como Funciona</a></li>
                        <li><a href="taxas.php" class="login">Taxa e Encargos</a></li>
                        <li><a href="central.php" class="login">Central de Ajuda</a></li>
                        <li><a href="#" class="login">Contate-nos</a></li>
                        <li><a href="#" class="login">Quem Somos</a></li>
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
