<html>
<link rel="stylesheet" href="styles.css"><!--Почему-то css не подключается к main, 
а если поменять реф на тот, что здесь, перестанет подключаться к hello и bay-->
</html>
<?php include __DIR__ . '/../header.php'; ?>
<?php foreach ($articles as $article): ?>
    <h2><?= $article['name'] ?></h2>
    <p><?= $article['text'] ?></p>
    <hr>
<?php endforeach; ?>
<?php include __DIR__ . '/../footer.php'; ?>