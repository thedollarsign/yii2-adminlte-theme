<?php
use thedollarsign\themes\adminlte\widgets\Menu;

echo Menu::widget([
    'items' => require(Yii::getAlias('@backend/config/adminlte_menu.php'))
]);
