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
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="container">
        <h1><a href="/index.php"><img src="images/logo.png" /></a></h1>
        <nav>
        <?php
        echo Nav::widget([
            'items' => [
                ['label' => 'How It\'s Different', 'url' => '/index.php#how-its-different'],
                ['label' => 'Join League', 'url' => '/index.php#join-league'],
                ['label' => 'Create League', 'url' => ['/site/create-league']],
                Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')'
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]);

        ?>
        </nav>
    </div>
</header>
<?= $content ?>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Pick 'Em Pro' <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
