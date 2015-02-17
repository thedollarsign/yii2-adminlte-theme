<?php
namespace thedollarsign\themes\adminlte\widgets;
use yii\helpers\Html;
use yii\base\Widget;

class Box extends Widget {

    public $type = 'default';
    public $header = '';
    public $solid = false;
    public $tool;
    public $icon;

    public function init() {
        parent::init();
        ob_start();
        $solid = ($this->solid) ? 'box-solid' : '';
        $headerBegin = $title = $headerEnd = '';
        echo '<div class="box box-' . $this->type . ' ' . $solid .'">';
        if (isset($this->header)) {
            $headerBegin =  '<div class="box-header">';
            $headerEnd = '</div>';
            $title = '<h3 class="box-title"> ' . Html::encode($this->header) . ' </h3>';
        }
        $htmlIcon = '';
        if (isset($this->icon)) {
            $htmlIcon = '<i class="fa ' . $this->icon . '"></i>';
        }

        $tool = '';

        if (isset($this->tool)) {
            $toolBegin = '<div class="pull-right box-tools">';
            $toolEnd = '</div>';
            $tool = $toolBegin . $this->tool . $toolEnd;
        }

        echo $headerBegin . $htmlIcon . $title . $tool . $headerEnd;
        echo '<div class="box-body">';
    }

    public function run() {
        echo '</div></div>';
        $content = ob_get_clean();
        return $content;

    }
}
