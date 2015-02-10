
<?php


$db = new PDO('sqlite:C:/test_.sqlite');

$db->exec('CREATE TABLE foo (bar STRING)');
$db->exec("INSERT INTO foo (bar) VALUES ('Ceci est un test')");

$result = $db->query('SELECT bar FROM foo');
var_dump($result->fetchArray());
?>
