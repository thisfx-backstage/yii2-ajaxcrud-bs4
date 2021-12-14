<?php

namespace yii2ajaxcrud\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    public $css = [
        'css/all.min.css',
    ];
    
    public $js = [
        'js/all.min.js'
    ];
}