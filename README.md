yii2-adminlte-theme
===================

First, add following line to the config file.

```php
'view' => [
    'theme' => 'thedollarsign\themes\adminlte\AdminLTETheme',
],
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
