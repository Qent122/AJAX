<?php
require('inc/pdo.php');
require('inc/function.php');
$title = "Detail beer";
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM beer WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    $beer = $query->fetch();
    // debug($beer);
    if(empty($beer)) {
        header('Location: 404.php');
    }
} else {
    //die('404');
    header('Location: 404.php');
}
include('inc/header.php'); ?>
    <h1>Page one beer</h1>
    <p><?php echo $beer['id']; ?></p>
    <h2><?php echo ucfirst($beer['title']); ?></h2>
    <p><?php echo nl2br($beer['content']); ?></p>
    <p>Date: <?php echo date('d/m/Y à H:i:s', strtotime($beer['created_at'])); ?></p>
    <a href="detail-beer.php?id=<?php echo $beer['id']; ?>">Voir plus</a>
<?php include('inc/footer.php');


