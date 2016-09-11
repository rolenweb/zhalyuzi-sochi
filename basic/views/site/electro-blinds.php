<?php
use yii\helpers\Html;

echo Html::beginTag('section');
  echo Html::beginTag('div',['class' => 'container']);
    echo $this->render('slider/electro-blinds/_block_slider',[
            'group1' => $group1,
            
            
        ]);

    /*echo $this->render('calculator/_block_calculator',[
            'group' => $group1,
            'page' => 'mosquito-nets',
        ]);*/
  echo Html::endTag('div');
echo Html::endTag('section');
?>
