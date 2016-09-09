<?php
use yii\helpers\Html;

echo Html::beginTag('section');
  echo Html::beginTag('div',['class' => 'container']);
    echo $this->render('slider/vertical-blinds/_block_slider',[
    		'group1' => $group1,
            'group2' => $group2,
            'group3' => $group3,
            'group4' => $group4,
    	]);
    echo $this->render('calculator/_block_calculator',[
    		'group' => $group1,
    		'page' => 'vertical-blinds',
    	]);
  echo Html::endTag('div');
echo Html::endTag('section');
?>
