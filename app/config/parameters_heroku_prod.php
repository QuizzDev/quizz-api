<?php
$db = parse_url($_ENV['CLEARDB_DATABASE_URL']);
$container->setParameter('database_driver', 'pdo_mysql');
$container->setParameter('database_host', $db['host']);
$container->setParameter('database_port', $db['port']);
$container->setParameter('database_name', substr($db["path"], 1));
$container->setParameter('database_user', $db['user']);
$container->setParameter('database_password', $db['pass']);
$container->setParameter('secret', getenv('SECRET'));
$container->setParameter('locale', 'en');
$container->setParameter('mailer_transport', null);
$container->setParameter('mailer_host', null);
$container->setParameter('mailer_user', null);
$container->setParameter('mailer_password', null);
// file_put_contents("php://stderr", "database_host" . $db['host'] . "\n");
// file_put_contents("php://stderr", "database_port" . $db['port'] . "\n");
// file_put_contents("php://stderr", "database_name" . substr($url["path"], 1) . "\n");
// file_put_contents("php://stderr", "database_user" . $db['user'] . "\n");
// file_put_contents("php://stderr", "database_password" . $db['pass'] . "\n");