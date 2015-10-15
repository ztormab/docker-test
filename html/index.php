<?php
echo 'PHP works!';

echo '<pre>';
print_r($_ENV);
echo '</pre>';

$pdo = new \PDO("mysql:host={$_ENV['DB_PORT_3306_TCP_ADDR']}", "root", $_ENV['DB_ENV_MYSQL_ROOT_PASSWORD']);
var_dump($pdo);
