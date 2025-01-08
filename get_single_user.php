<?php

require "./index.php";


if (isset($_GET['id'])) {

  $query = $db->prepare('SELECT * FROM users WHERE id= :id');
  $parameters = [
    'id' => $_GET['id']
  ];
  $query->execute($parameters);

  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  var_dump($result);
}
