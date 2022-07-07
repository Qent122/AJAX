<?php
require('inc/pdo.php');
require('inc/function.php');
require('inc/request.php');
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $beer = getBeer($id);
    if(!empty($beer)) {
        // DELETE
        $sql = "DELETE FROM beer WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id',$id, PDO::PARAM_INT);
        $query->execute();
        // redirection vers la page listing des bières
        header('Location: contact.php');
        exit();
    }
}
header('Location: 404.php');
exit();
