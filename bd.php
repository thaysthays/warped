<?php
function getDB()
{
$dbhost = "143.106.241.1";
$dbuser = "2cti37";
$dbpass = "2cti37";
$dbname = "2cti37";

$mysql_conn_string = "mysql:host=$dbhost;dbname=$dbname";
$dbConnection = new PDO($mysql_conn_string,$dbuser,$dbpass);

$dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$dbConnection->query('SET NAMES utf8');

return $dbConnection;
}