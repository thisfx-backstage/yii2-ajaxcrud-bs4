yii2-ajaxcrud 
=============

Original work by [johitvn](https://github.com/johnitvn/yii2-ajaxcrud).

But we need to work with Bootstrap 4, so we create this repository. If [johitvn](https://github.com/johnitvn/yii2-ajaxcrud) update his repo, we will delete this repository.


[![Latest Stable Version](https://poser.pugx.org/johnitvn/yii2-ajaxcrud/v/stable)](https://packagist.org/packages/johnitvn/yii2-ajaxcrud)
[![License](https://poser.pugx.org/johnitvn/yii2-ajaxcrud/license)](https://packagist.org/packages/johnitvn/yii2-ajaxcrud)
[![Total Downloads](https://poser.pugx.org/johnitvn/yii2-ajaxcrud/downloads)](https://packagist.org/packages/johnitvn/yii2-ajaxcrud)

Gii CRUD template for Single Page Ajax Administration for yii2 

![index](https://images2.imagebam.com/3f/78/46/55b13c1355690747.png "index")

![create](https://images2.imagebam.com/37/59/af/5af93f1355690748.png "create")

![view](https://images2.imagebam.com/dd/11/29/b7c7361355690749.png "view")

![update](https://images2.imagebam.com/80/d7/31/3b9f601355690751.png "update")

![delete](https://images2.imagebam.com/b0/98/11/a716401355690754.png "delete")


Features
------------
+ Create, read, update, delete in onpage with Ajax
+ Bulk delete suport
+ Pjax widget suport
+ Export function(pdf,html,text,csv,excel,json)
+ Support Boostrap 4
+ Added translations, available right now only English and Indonesia
+ Reload multiple Pjax


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist biladina/yii2-ajaxcrud-bs4 "~2.0"
```

or add

```
"biladina/yii2-ajaxcrud-bs4": "~2.0"
```

to the require section of your `composer.json` file.



Usage
-----
For first you must enable Gii module Read more about [Gii code generation tool](http://www.yiiframework.com/doc-2.0/guide-tool-gii.html)

Because this extension used [kartik-v/yii2-grid](https://github.com/kartik-v/yii2-grid) extensions so we must config gridview module before

Let 's add into modules config in your main config file
```php
'modules' => [
    'gridview' =>  [
        'class' => '\kartik\grid\Module'
    ]       
]
```

You can then access Gii through the following URL:

http://localhost/path/to/index.php?r=gii

and you can see <b>Ajax CRUD Generator</b>



Translate
---------
Default translation is english, you can pull request new translation and you can change via config. Open your config `main.php`, add new translation to components..

Available Translation :
+ English
+ Indonesia

```php
'language' => 'id-ID',

'components' => [
    'i18n' => [
        'translations' => [
            'yii2-ajaxcrud' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@yii2ajaxcrud/ajaxcrud/messages',
                'sourceLanguage' => 'id',
            ],
        ]
    ]
]
```



Reload Multiple Pjax
--------------------
If you need to reload multiple GridView Pjax via Ajax respond from controller, you can add another Pjax ID separated by comma.

```php
return [
    'forceReload'=>'#crud-pjax1,#crud-pjax2', // you can add more Pjax ID that you want to reload via ajax respond.
    'title'=> Yii::t('yii2-ajaxcrud', 'Create New')." Content",
    'content'=>'<span class="text-success">'.Yii::t('yii2-ajaxcrud', 'Create').' Content '.Yii::t('yii2-ajaxcrud', 'Success').'</span>',
    'footer'=> Html::button(Yii::t('yii2-ajaxcrud', 'Close'), ['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
        Html::a(Yii::t('yii2-ajaxcrud', 'Create More'), ['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
];
```
