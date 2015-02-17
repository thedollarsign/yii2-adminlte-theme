yii2-adminlte-theme
===================

First, add following line to the components of your config file.

```php
'components' => [
	...
	'view' => [
	    'theme' => [
	        'class' => 'thedollarsign\themes\adminlte\AdminLTETheme',
	        // Your menu file.
	        'menuFile' => '@app/config/adminlte_file.php',
	        // Name for theme style. (eg. skin-blue, skin-black)
	        'style' => 'skin-blue' 
	    ],
	],
	...
]
```

Second, create new file `backend/config/adminlte_menu.php` and add following example for side menu.
```php
<?php
return [
    [
        'label' => 'Dashboard',
        'url' => ['site/index'],
        'icon' => 'fa-dashboard'
    ],
    [
        'label' => 'Items',
        'icon' => 'fa-user',
        'url' => ['site/manage'],
        'items' => [
            [
                'label' => 'Item1',
                'url' => ['site/manage']
            ],
            [
                'label' => 'Item2',
                'url' => ['site/manage']
            ],
        ],
    ],
];
```

### Example
#### Box widget
```php
<?php 
// Box Widget config
$config = [
	'type' => 'default',
	'header' => 'Header Title',
	'solid' => true,
	'tool' => '<button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove"><i class="fa fa-times"></i></button>',
	'icon' => 'fa-list'
];
?>
// Box Widget usage
<?php Box::begin($config);?>
	<h1>Your Content</h1>
<?php Box::end();?>
```