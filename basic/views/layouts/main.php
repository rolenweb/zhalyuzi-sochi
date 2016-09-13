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
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Zhalyuzi sochi',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/nimda'], 'visible' => Yii::$app->user->can('admin')],
            ['label' => 'Категории', 'url' => ['/category/index'], 'visible' => Yii::$app->user->can('admin')],
            ['label' => 'Подкатегории', 'url' => ['/sub-category/index'], 'visible' => Yii::$app->user->can('admin')],
            ['label' => 'Группы', 'url' => ['/group/index'], 'visible' => Yii::$app->user->can('admin')],
            ['label' => 'Материалы', 'url' => ['/material/index'], 'visible' => Yii::$app->user->can('admin')],
            ['label' => 'Настройки', 'url' => ['/site/setting'], 'visible' => Yii::$app->user->can('admin')],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/nigol']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'homeLink' => false,
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Zhalyuzi sochi <?= date('Y') ?></p>

        <p class="pull-right"><?= Html::a('RolenWeb','http://rolenweb.ru') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
