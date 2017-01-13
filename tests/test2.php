<?php

require __DIR__ . '/../autoload.php';

$db = new \App\Db();

$sql = 'DROP TABLE test';

$test2 = $db->execute($sql, []);

var_dump($test2);

assert(false == $test2);
assert(true == $test2);