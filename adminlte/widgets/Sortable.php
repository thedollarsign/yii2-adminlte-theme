<?php
namespace thedollarsign\themes\adminlte\widgets;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Sortable extends \yii\jui\Sortable {
    public $options = ['class' => 'todo-list'];
    public $itemOptions = ['class' => ''];
    public $prependContent = '<span class="handle ui-sortable-handle"><i class="fa fa-ellipsis-v"></i><i class="fa fa-ellipsis-v"></i></span>';

    public function renderItems()
    {
        $items = [];
        foreach ($this->items as $item) {
            $options = $this->itemOptions;
            $tag = ArrayHelper::remove($options, 'tag', 'li');
            if (is_array($item)) {
                if (!isset($item['content'])) {
                    throw new InvalidConfigException("The 'content' option is required.");
                }
                $options = array_merge($options, ArrayHelper::getValue($item, 'options', []));
                $tag = ArrayHelper::remove($options, 'tag', $tag);
                $items[] = Html::tag($tag, $this->prependContent.$item['content'], $options);
            } else {
                $items[] = Html::tag($tag, $this->prependContent.$item, $options);
            }
        }
        return implode("\n", $items);
    }
}
