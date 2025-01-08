<?php
require "./index.php";

$query = $db->prepare('SELECT * FROM users');
$result = $query->execute();

var_dump($result);
