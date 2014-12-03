<?php
namespace thedollarsign\themes\adminlte;
use Yii;
use yii\web\AssetBundle;
class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@thedollarsign/themes/adminlte/assets';

    public $css = [
        'css/AdminLTE.css',
        'css/font-awesome.min.css',
        'css/ionicons.min.css'
    ];
    public $js = ['js/AdminLTE/app.js'];

    public $depends = [
        // 'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
