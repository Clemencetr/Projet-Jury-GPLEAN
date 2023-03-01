<?php

require(__DIR__.'/db.php');

$clientList = array();

$sql = '
    SELECT *
    FROM clients
';

$stmt = $pdo->query($sql);

$clientList = $stmt->fetchAll(PDO::FETCH_ASSOC);