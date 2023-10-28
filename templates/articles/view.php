<?php include __DIR__ . '/../header.php'; ?>
    <h1><?= $article['name'] ?></h1>
    <p><?= $article['text'] ?></p>
    <p><b>Автор статьи:</b> <?= $user['nickname'] ?></p>
<?php include __DIR__ . '/../footer.php'; ?>