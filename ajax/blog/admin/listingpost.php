<?php
require('../inc/pdo.php');
require('../inc/function.php');
require('../inc/request.php');

// aller chercher tous les articles
// chaque article va avoir un lien qui mene vers editpost.php

// editpost.php?id=


$select_articles = "SELECT * FROM articles ORDER BY created_at ASC";
$query = $pdo->prepare($select_articles);
$query->execute();
$articles = $query->fetchAll();
?>
<h1>Liste des Articles</h1>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>content</th>
            <th>auteur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article) { ?>
            <tr>
                <td><?= $article['id'] ?></td>
                <td><?= $article['title'] ?></td>
                <td><?= $article['content'] ?></td>
                <td><?= $article['auteur'] ?></td>
                <td><a href="editpost.php?id=<?= $article['id'] ?>">Editer l'articles</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>