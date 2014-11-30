<?php

namespace thedollarsign\themes\adminlte;
use Yii;

/**
* Class Theme
* @package thedollarsign\themes\admin
*/
class Theme extends \yii\base\Theme {
    public $pathMap = [
        '@backend/views' => '@thedollarsign/themes/adminlte/views'
    ];

    public function init() {
        parent::init();
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = [
            'sourcePath' => '@thedollarsign/themes/adminlte',
            'css' => [
                'css/bootstrap.min.css'
            ]
        ];
        Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapPluginAsset'] = [
            'sourcePath' => '@thedollarsign/themes/adminlte',
            'js' => [
                'js/bootstrap.min.js'
            ]
        ];
    }
}
