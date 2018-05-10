<?php
$user = $_POST['username'];
$pass = $_POST['password'];

require_once 'bd.php';
$con = getDB();
$strSql = "SELECT * FROM warprCon WHERE user='$user' OR email='$user' AND password='$pass'";
    $rs = $con->query($strSql);
    $rs->setFetchMode(PDO::FETCH_ASSOC);

    $_SESSION['logado'] = true;
    
echo 'Logado com sucesso!';
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=source/index.php'>";
header("Location:source/index.php");