<?php
namespace thedollarsign\themes\adminlte\widgets;

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class Menu extends \yii\widgets\Menu
{

    public $treeClass = 'treeview';

    public $options = ['class' => 'sidebar-menu'];

    public $linkTemplate = '<a href="{url}">{icon} {label} {arrow}</a>';

    public $submenuTemplate = "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n";

    protected function renderItem($item)
    {
        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
            if (isset($item['icon'])) {
                $replace = [
                    '{url}' => Url::to($item['url']),
                    '{label}' => $item['label'],
                    '{icon}' => isset($item['icon']) ? '<i class="fa ' . $item['icon'] . '"></i>' : '',
                    '{arrow}' => (isset($item['items'])) ? '<i class="fa fa-angle-left pull-right"></i>' : '',
                ];
            } else {
                $replace = [
                    '{url}' => Url::to($item['url']),
                    '{label}' => $item['label'],
                    '{icon}' => isset($item['icon']) ? '' : '',
                    '{arrow}' => '<i class="fa fa-angle-double-right pull-left"></i>',
                ];
            }
            return strtr($template, $replace);
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);
            $replace = [
                '{label}' => $item['label'],
                '{icon}' => isset($item['icon']) ? '<i class="fa ' . $item['icon'] . '"></i>' : '',
            ];
            return strtr($template, $replace);
        }
    }

    protected function renderItems($items)
    {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag = ArrayHelper::remove($options, 'tag', 'li');
            $class = [];
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }

            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $class[] = $this->treeClass;
                $menu .= strtr($this->submenuTemplate, [
                    '{items}' => $this->renderItems($item['items']),
                ]);
            }

            if (!empty($class)) {
                if (empty($options['class'])) {
                    $options['class'] = implode(' ', $class);
                } else {
                    $options['class'] .= ' ' . implode(' ', $class);
                }
            }

            $lines[] = Html::tag($tag, $menu, $options);
        }

        return implode("\n", $lines);
    }

}
