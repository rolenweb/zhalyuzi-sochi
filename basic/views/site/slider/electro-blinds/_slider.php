<?php
use yii\helpers\Html;
echo Html::beginTag('div',['class' => 'image-slider']);
	echo Html::img('@web/images/slider/electro-blinds/1/1.jpg',['class' => 'img-responsive', 'status' => 'active', 'slider' => '1']);
    echo Html::img('@web/images/slider/electro-blinds/1/2.jpg',['class' => 'img-responsive visible', 'status' => 'pending', 'slider' => '1']);
    
    echo Html::img('@web/images/slider/electro-blinds/1/3.jpg',['class' => 'img-responsive visible', 'status' => 'active', 'slider' => '1']);  
    echo Html::img('@web/images/slider/electro-blinds/1/4.jpg',['class' => 'img-responsive visible', 'status' => 'pending', 'slider' => '1']);  
    
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
    echo Html::beginTag('span',['class' => 'full-scree-open']);
        echo Html::tag('i','',['class' => 'fa fa-expand fa-2x', 'aria-hidden' => 'true']);
    echo Html::endTag('span');
echo Html::endTag('div');

?>
