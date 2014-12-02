<?php
use thedollarsign\themes\adminlte\widgets\Menu;

echo Menu::widget([
    'items' => [
        [
            'label' => 'Dashboard',
            'url' => ['site/index'],
            'icon' => 'fa-dashboard'
        ],
        [
            'label' => 'User',
            'icon' => 'fa-user',
            'url' => ['site/user'],
            'items' => [
                ['label' => 'Manage', 'url' => ['user/manage', 'tag' => 'new']],
                ['label' => 'Permission', 'url' => ['user/permission', 'tag' => 'popular']],
            ]
        ],
        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
    ],
]);
