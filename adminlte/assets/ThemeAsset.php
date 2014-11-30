<?php
namespace thedollarsign\themes\adminlte\assets;
use Yii;

class ThemeAsset extends \yii\web\AssetBundle {
    public $sourcePath = '@thedollarsign/themes/adminlte';
    public $css = [
        'css/AdminLTE.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
