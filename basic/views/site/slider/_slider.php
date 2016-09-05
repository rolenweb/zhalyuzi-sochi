<?php
use yii\helpers\Html;
echo Html::beginTag('div',['class' => 'image-slider']);
	echo Html::img('@web/images/slider/roll/1.jpg',['class' => 'img-responsive', 'status' => 'active']);
    echo Html::img('@web/images/slider/roll/2.jpg',['class' => 'img-responsive visible', 'status' => 'pending']);
    echo Html::img('@web/images/slider/roll/3.jpg',['class' => 'img-responsive visible', 'status' => 'pending']);
    echo Html::img('@web/images/slider/roll/4.jpg',['class' => 'img-responsive visible', 'status' => 'pending']);  
    echo Html::beginTag('div',['class' => 'pult-slider']);
    	echo Html::beginTag('span',['class' => 'stop']);
    		echo Html::tag('i','',['class' => 'fa fa-stop-circle-o fa-2x', 'aria-hidden' => 'true']);
    	echo Html::endTag('span');
    	echo Html::beginTag('span',['class' => 'play']);
    		echo Html::tag('i','',['class' => 'fa fa-play-circle-o fa-2x', 'aria-hidden' => 'true']);
    	echo Html::endTag('span');
    echo Html::endTag('div');
    echo Html::beginTag('span',['class' => 'left']);
    	echo Html::tag('i','',['class' => 'fa fa-chevron-left fa-2x', 'aria-hidden' => 'true']);
    echo Html::endTag('span');
    echo Html::beginTag('span',['class' => 'right']);
    	echo Html::tag('i','',['class' => 'fa fa-chevron-right fa-2x', 'aria-hidden' => 'true']);
    echo Html::endTag('span');
echo Html::endTag('div');

?>
