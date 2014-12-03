<?php
namespace thedollarsign\themes\adminlte\widgets;
use yii\helpers\Html;

class Box extends \yii\base\Widget {

    public $type = 'default';
    public $header = '';
    public $solid = false;

    public function init() {
        parent::init();
        ob_start();
        $solid = ($this->solid) ? 'box-solid' : '';
        echo '<div class="box box-' . $this->type . ' ' . $solid .'">';
        if (isset($this->header)) {
            echo '<div class="box-header"><h3 class="box-title"> ' . Html::encode($this->header) . ' </h3></div>';
        }
        echo '<div class="box-body">';
    }

    public function run() {
        echo '</div></div>';
        $content = ob_get_clean();
        return $content;

    }
}
