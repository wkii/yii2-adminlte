Yii2 AdminLTE Asset Bundle
=====================

*Backend UI for Yii2 Framework, based on [AdminLTE v2.x](https://github.com/almasaeed2010/AdminLTE)*

This package contains an [Asset Bundle for Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html) 
which registers the CSS files for the AdminLTE user-interface.

AdminLTE template require `Font Awesome`,  so must installed composer plugins `asset-plugin`.
```
composer global require "fxp/composer-asset-plugin:~1.0.0"
```


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install AdminLTE v2 run:

```
composer require wkii/yii2-adminlte
```

Quick Start
-----------

Once the extension is installed, you can have a **preview** by reconfiguring the path mappings of the view component:

For Yii 2 [Application Template](https://github.com/yiisoft/yii2-app-advanced) or [Basic Application Template](https://github.com/yiisoft/yii2-app-basic)

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/wkii/yii2-adminlte/example-views/yii2-app'
             ],
         ],
    ],
],
```

This asset bundle provides sample files for layout and view (see folder `example-views/yii2-app`), they are **Don't modify in the `vendor/` folder**.

Therefore it is recommended to **copy the views files into your application views folder** and adjust them to your needs.


Customization
-------------

- Copy files from `vendor/wkii/yii2-adminlte/example-views/yii2-app` (or other theme) to `@app/views`.
- Remove the custom `view` configuration from your application by deleting the path mappings, if you have made them before.
- Edit your views adhering to html markup `vendor/almasaeed2010/adminlte/pages`

### AdminLte Skins

By default the extension uses `skin-blue` for AdminLTE. You can change it in config file.

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'Wkii\AdminLTE\Asset\AdminLteAsset' => [
                'skin' => 'skin-red',
            ],
        ],
    ],
],
```

Here is the list of available skins:

```
"skin-blue",
"skin-blue-light",
"skin-yellow",
"skin-yellow-light",
"skin-green",
"skin-green-light",
"skin-purple",
"skin-purple-light",
"skin-red",
"skin-red-light",
"skin-black",
"skin-black-light
```

### For Menu

Example menu see `main-sidebar.php`.

This Widget is extends `yii\widgets\Menu`. Menu item add `icon` attribute. use `Font Awesome` icon. 
e.g. 
```
['label' => 'Gii', 'url' => ['/gii'], 'icon' =>'fa-gavel']
```

Layout
-------------------
Default layout is `main.php`.  
add `single` single page layout. No sidebar, no control-sidebar, no footer, no content-header, no breadcrumbs. for iframe dialog.

Pjax
-------------------
pjax templates use [yiisoft/jquery-pjax](https://github.com/yiisoft/jquery-pjax).
pjax layout is `pjax-main.php`. It's include `pjax-main-content.php`. 
`pjax-content.php`  output only content of div `#pjax-container`.

Use pjax,  you can change it in config
```
'layout' => 'pjax-main',
'components' => [
   // ......
]
```
Or your Controller add attribute 
```
public $layout='pjax-main';
```

Controller action example:
```
    public function actionWelcome()
    {
        if (Yii::$app->request->isPjax) {
            $this->layout = 'pjax-content';
            return $this->render('welcome');
        } else {
            return $this->render('welcome');
        }
    }
```


Further Information
-------------------

For AdminLTE documentation, please read  
* https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html

For Pjax, please read
 * https://github.com/yiisoft/jquery-pjax
 * https://github.com/defunkt/jquery-pjax
 
