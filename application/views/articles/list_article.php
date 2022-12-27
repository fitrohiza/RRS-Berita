<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head.php'); ?>
</head>
<body>
<?php $this->load->view('_partials/navbar.php'); ?>
    <h1>List Article</h1>
    <ul>
        <?php foreach ($articles as $article) : ?>
        <li><?= $article['tittle']; ?></li>
        <?php endforeach ?>
    </ul>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>