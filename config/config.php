<?php

define('USER', 'root');
define('PASS', '');
define('DSN', 'mysql:host=localhost;dbname=gestcand');


try
{
$dbh = new PDO(DSN, USER, PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

return $dbh;
}
catch (PDOException $e)
{
print "Erreur ! : " . $e->getMessage() . "<br/>";
die();
}


