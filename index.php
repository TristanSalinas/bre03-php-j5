<?php

$host = "localhost";
$port = "3306";
$dbname = "tristanSalinas_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "root";
$password = "";

try {
  $db = new PDO(
    $connexionString,
    $user,
    $password
  );
  echo "Connection successful!";
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

if (isset($_GET['id'])) {
  $query = $db->prepare('SELECT * FROM users WHERE id= :id');
  $parameters = [
    'id' => $_GET['id']
  ];
  $query->execute($parameters);
}
