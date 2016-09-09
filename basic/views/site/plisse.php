<?php
use yii\helpers\Html;

echo Html::beginTag('section');
  echo Html::beginTag('div',['class' => 'container']);
    echo $this->render('slider/plisse/_block_slider',[
    		'group1' => $group1,
            'group2' => $group2,
            
    	]);
    echo $this->render('calculator/_block_calculator',[
    		'group' => $group1,
    		'page' => 'plisse',
    	]);
  echo Html::endTag('div');
echo Html::endTag('section');
?>
