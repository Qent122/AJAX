<?php
require('inc/pdo.php');
require('inc/function.php');
require('inc/request.php');
$title = "Contact";
// Get all beers
$beers = getAllBeer(3, 'ASC');
//$beers = getAllBeer(3, 'ASC');
//$beers = getAllBeer(10,'DESC');
debug($beers);

include('inc/header.php'); ?>
    <h1>Contact</h1>
    <a href="new-beer.php">Ajouter une bière</a>
    <ul>
        <?php foreach($beers as $beer) {
            //debug($beer); ?>
            <li>
                <p><?php echo $beer['id']; ?></p>
                <h2><?php echo ucfirst($beer['title']); ?></h2>
                <p><?php echo nl2br($beer['content']); ?></p>

                <p>Date: <?php echo date('d/m/Y à H:i:s', strtotime($beer['created_at'])); ?></p>
                <p>Date: <?= dateSite($beer['created_at']); ?></p>
                <p>Date: <?= dateSite($beer['created_at'], 'd/m/Y'); ?></p>

                <a href="detail-beer.php?id=<?php echo $beer['id']; ?>">Voir plus</a>
                <a href="delete-beer.php?id=<?php echo $beer['id']; ?>">Delete</a>
            </li>
        <?php } ?>
    </ul>
<?php include('inc/footer.php');

