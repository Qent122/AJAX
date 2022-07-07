<?php

function getBeer($id) {
    global $pdo;
    $sql = "SELECT * FROM beer WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}


function getAllBeer($limit = 10,$order = 'DESC')
{
    global $pdo;
    $sql = "SELECT * FROM beer ORDER BY created_at $order LIMIT $limit";
    $query = $pdo->prepare($sql);
    $query->execute();
    $beers = $query->fetchAll();
    return $beers;
}


