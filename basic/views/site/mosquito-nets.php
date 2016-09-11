<?php
use yii\helpers\Html;

echo Html::beginTag('section');
  echo Html::beginTag('div',['class' => 'container']);
    echo $this->render('slider/mosquito-nets/_block_slider',[
            'group1' => $group1,
            'group2' => $group2,
            'group3' => $group3,
            'group4' => $group4,
            'group5' => $group5,
            
        ]);
    echo $this->render('calculator/_block_calculator',[
            'group' => $group1,
            'page' => 'mosquito-nets',
        ]);
  echo Html::endTag('div');
echo Html::endTag('section');
?>