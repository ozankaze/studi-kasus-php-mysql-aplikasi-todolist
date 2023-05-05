<?php

require_once __DIR__ . "/../Config/Database.php";

$db = \Config\Database::getConnection();

echo "Sukses Mengkoneksikan Database" . PHP_EOL;