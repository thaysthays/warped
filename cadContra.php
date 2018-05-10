<?php
$user = $_POST['user1'];
$email = $_POST['email1'];
$pass = $_POST['password1'];

require_once 'bd.php';
$con = getDB();
$strSql = "INSERT INTO warprCon (user,email,password) VALUES ('$user','$email','$pass');";
    $rs = $con->query($strSql);
    $rs->setFetchMode(PDO::FETCH_ASSOC);
    
    
echo 'Seu cadastro foi realizado com sucesso!';
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=login/index.html'>";