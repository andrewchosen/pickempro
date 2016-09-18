<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Header -->
<header>
    <div class="container">
        <h1><a href="index.html"><img src="images/logo.png" /></a></h1>
        <nav>
            <ul>
                <li><a href="#how-its-different">How It's Different</a></li>
                <li><a href="#create-league">Create League</a></li>
                <li><a href="#join-league">Join League</a></li>
                <li><a href="#login">Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<?= $content ?>

<footer class="footer">
    <div class="container">
        <p>&copy; Pick 'Em Pro' <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
