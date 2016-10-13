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
    <?php $this->head() ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="container">
        <h1><a href="/index.php"><img src="/images/logo.png" /></a></h1>
        <nav>
        <?php
        echo Nav::widget([
            'items' => [
                ['label' => 'How It\'s Different', 'url' => '/index.php#how-its-different'],
                ['label' => 'Join League', 'url' => '/index.php#join-league'],
                ['label' => 'Create League', 'url' => ['/league/create']],
                Yii::$app->user->isGuest ?
                    ['label' => 'Sign in', 'url' => ['/user/security/login']] :
                    ['label' => 'Sign out (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/user/security/logout'],
                        'linkOptions' => ['data-method' => 'post']],
                ['label' => 'Register', 'url' => ['/user/registration/register'], 'visible' => Yii::$app->user->isGuest]
            ],
        ]);

        ?>
        </nav>
    </div>
</header>
    <?= $content ?>
</section>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Pick 'Em Pro' <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
