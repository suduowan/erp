<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
Yii::$app->name = '南京通力峰达';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="/public/img/fav/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="/public/img/fav/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/public/img/fav/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/public/img/fav/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/public/img/fav/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/public/img/fav/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/public/img/fav/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/public/img/fav/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="/public/img/fav/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192"  href="/public/img/fav/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/public/img/fav/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="/public/img/fav/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/public/img/fav/favicon-16x16.png" />

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl'   => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => '首页', 'url' => ['/site/index'],'options'=>['title'=>'首页']],
            ['label' => '内部办公', 'url' => ['/office/index'],'options'=>['title'=>'内部办公']],
            ['label' => '关于我们', 'url' => ['/site/about'],'options'=>['title'=>'关于我们']],
            [
                'label' => '解决方案',
                'items' => [
                     ['label' => '金融支付', 'url' => '#'],
                     ['label' => '道路救援', 'url' => '#'],
                     ['label' => '智能点餐', 'url' => '#'],
                     ['label' => '数据处理', 'url' => '#'],
                ],
                'options'=>['title'=>'服务市场']
            ],
            [
                'label' => '新闻动态',
                'items' => [
                     ['label' => '公司新闻', 'url' => '#'],
                     ['label' => '行业动态', 'url' => '#'],
                     ['label' => '公司活动', 'url' => '#'],
                     ['label' => '客户反馈', 'url' => '#'],
                ],
                'options'=>['title'=>'服务市场']
            ],
            ['label' => '联系我们', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => '登录', 'url' => ['/site/login']]
            ) : (
                 [
                'label' => Yii::$app->user->identity->username,
                'items' => [
                     ['label' => '个人中心', 'url' => '#'],
                     ['label' => '消息', 'url' => '#'],
                     ['label' => '帮助', 'url' => '#'],
                     '<li>'.Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        '注销 (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'label label-default']
                    )
                    . Html::endForm().'</li>',
                ],
            ]
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Copyright 2013-<?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
