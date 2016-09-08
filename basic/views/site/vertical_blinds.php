<?php
use yii\helpers\Html;

echo Html::beginTag('section');
  echo Html::beginTag('div',['class' => 'container']);
    echo $this->render('slider/vertical-blinds/_block_slider',[
    		'group' => $group,
    	]);
    echo $this->render('calculator/_block_calculator',[
    		'group' => $group,
    		'page' => 'vertical-blinds',
    	]);
  echo Html::endTag('div');
echo Html::endTag('section');
?>
