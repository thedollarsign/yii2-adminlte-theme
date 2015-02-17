<?php
use thedollarsign\themes\adminlte\widgets\Menu;
use thedollarsign\themes\adminlte\AdminLTETheme;

echo Menu::widget([
    'items' => require(Yii::getAlias(Yii::$app->getView()->theme->menuFile))
]);
