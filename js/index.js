function validacaoEmail(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

if ((usuario.length >=1) &&
    (dominio.length >=3) && 
    (usuario.search("@")==-1) && 
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) && 
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&      
    (dominio.indexOf(".") >=1)&& 
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
document.getElementById("msgemail").innerHTML="<font size='1'>E-mail válido</font>";
}
else{
document.getElementById("msgemail").innerHTML="<font color='red' size='1'>E-mail inválido </font>";
}
}

function validacaoEmail2(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

if ((usuario.length >=1) &&
    (dominio.length >=3) && 
    (usuario.search("@")==-1) && 
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) && 
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&      
    (dominio.indexOf(".") >=1)&& 
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
document.getElementById("msg2email").innerHTML="<font size='1'>E-mail válido</font>";
}
else{
document.getElementById("msg2email").innerHTML="<font color='red' size='1'>E-mail inválido </font>";
}
}

///////////////////////// VERIFICANDO E-MAIL ///////////////////////////////////

function validar(){
    var nome = f1.Nome.value;
    var senha = f1.Senha.value;
    
    if(nome == "") {
        alert('Preencha o campo com seu nome');
        f1.Nome.focus();
        return false;
    }
    if(nome.length < 5) {
        alert('Digite seu nome completo');
        f1.Nome.focus();
        return false;
    }
    if(senha == ""){
        alert('Preencha o campo "Senha"');
        f1.Senha.focus();
        return false;
    }
}

function validar2(){
    var nome = f2.Nome.value;
    var senha = f2.Senha.value;
    
    if(nome == "") {
        alert('Preencha o campo com seu nome');
        f1.Nome.focus();
        return false;
    }
    if(nome.length < 5) {
        alert('Digite seu nome completo');
        f1.Nome.focus();
        return false;
    }
    if(senha == ""){
        alert('Preencha o campo "Senha"');
        f1.Senha.focus();
        return false;
    }
    if (document.getElementById('escolha').option.length == 0) {
        alert('Escolha uma opção de trabalho');
        f1.escolha.focur();
        return false;
    }
}