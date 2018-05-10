<?php
$user = $_POST['user2'];
$email = $_POST['email2'];
$pass = $_POST['password2'];
$work = $_POST['work'];

require_once 'bd.php';
$con = getDB();
$strSql = "INSERT INTO warprFun (user,email,password,trabalho) VALUES ('$user','$email','$pass','$work');";
    $rs = $con->query($strSql);
    $rs->setFetchMode(PDO::FETCH_ASSOC);
    
    
echo 'Seu cadastro foi realizado com sucesso!';
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=login/index.html'>";