<?php

namespace widgets\palettecolors;

use yii\web\AssetBundle;

class Assets extends AssetBundle {

    public $sourcePath = '@vendor/shahimian/yii2-colors/assets';

    public $css = [
        'styles.css',
    ];

    public $js = [
        'colors.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
