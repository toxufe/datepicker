<?php

namespace toxufe\datetimepicker;

use Yii;
use yii\web\JqueryAsset;

class DateTimePickerAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/toxufe/datetimepicker/assets/jqdatetimepicker';

    public $js = [
        'build/jquery.datetimepicker.full.js',
    ];

    public $css = [
        'jquery.datetimepicker.css',
    ];

    public function init()
    {
        parent::init();

        $this->depends[] = JqueryAsset::className();
    }


}