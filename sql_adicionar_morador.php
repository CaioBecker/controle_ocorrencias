<?php

$var_apartamento = $_POST['n_apartamento'];
$var_proprietario1 = $_POST['nm_proprietario_01'];
$var_proprietario2 = $_POST['nm_proprietario_02'];





$offset = $argv[0]; // Cuidado, sem validação de entrada!
$query  = "SELECT id, name FROM products ORDER BY name LIMIT 20 OFFSET $offset;";
$result = pg_query($conn, $query);





?>

