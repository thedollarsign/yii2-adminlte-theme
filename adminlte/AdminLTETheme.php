<?php
namespace thedollarsign\themes\adminlte;
use Yii;
use yii\base\Theme;

/**
* Class Theme
* @package thedollarsign\themes\adminlte
*/
class AdminLTETheme extends Theme {

    public $pathMap = [
        '@app/views' => [
            '@thedollarsign/themes/adminlte/views',
            '@app/views',
        ]
    ];

    public $menuFile = '@app/config/adminlte_menu.php';

    public $style = 'skin-blue';

    public function init() {
        parent::init();
    }
}
