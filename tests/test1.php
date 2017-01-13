<?php

require __DIR__ . '/../autoload.php';

$db = new \App\Db();

$sql = 'CREATE TABLE test ( id SERIAL )';

$test1 = $db->execute($sql, []);

var_dump($test1);

assert(true == $test1);
assert(false == $test1);