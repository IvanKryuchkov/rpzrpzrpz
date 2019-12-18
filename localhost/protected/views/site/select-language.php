<?php

use yii\bootstrap\Html;

if(Yii::app()->language == 'uk') {
		?>Go to English<? array_merge(Yii::app()->request->get(),
		[Yii::$app->controller->route, 'language' => 'en']
); }
else {
    ?> Перейти на українську<? array_merge(Yii::app()->request->get(),
        [Yii::$app->controller->route, 'language' => 'uk']
    );
}