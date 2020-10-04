yii2-ajaxcrud 
=============

Original work by [johitvn](https://github.com/johnitvn/yii2-ajaxcrud).

But we need to work with Bootstrap 4, so we create this repository. If [johitvn](https://github.com/johnitvn/yii2-ajaxcrud) update his repo, we will delete this repository.


[![Latest Stable Version](https://poser.pugx.org/johnitvn/yii2-ajaxcrud/v/stable)](https://packagist.org/packages/johnitvn/yii2-ajaxcrud)
[![License](https://poser.pugx.org/johnitvn/yii2-ajaxcrud/license)](https://packagist.org/packages/johnitvn/yii2-ajaxcrud)
[![Total Downloads](https://poser.pugx.org/johnitvn/yii2-ajaxcrud/downloads)](https://packagist.org/packages/johnitvn/yii2-ajaxcrud)

Gii CRUD template for Single Page Ajax Administration for yii2 

![yii2 ajaxcrud extension screenshot](https://c1.staticflickr.com/1/330/18659931433_6e3db2461d_o.png "yii2 ajaxcrud extension screenshot")


Features
------------
+ Create, read, update, delete in onpage with Ajax
+ Bulk delete suport
+ Pjax widget suport
+ Export function(pdf,html,text,csv,excel,json)
+ Support Boostrap 4


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist biladina/yii2-ajaxcrud-bs4 "*"
```

or add

```
"biladina/yii2-ajaxcrud-bs4": "*"
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

```php
'components' => [
    'i18n' => [
        'translations' => [
            'yii2-ajaxcrud' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@hoaaah/ajaxcrud/messages',
                'sourceLanguage' => 'id',
            ],
        ]
    ]
]
```
