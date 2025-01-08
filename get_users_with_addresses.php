<?php

require "./index.php";


if (isset($_GET['id'])) {


  $query = $db->prepare(
    "SELECT u.first_name, u.last_name, a.*
    FROM users u
    JOIN address a ON u.address = a.id
    WHERE u.id = :id"
  );
  $parameters = [
    'id' => $_GET['id']
  ];
  $query->execute($parameters);

  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  var_dump($result);
}
