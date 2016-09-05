<?php
use yii\helpers\Html;

echo Html::beginTag('section');
  echo Html::beginTag('div',['class' => 'container']);
    echo $this->render('slider/_block_slider');
    echo $this->render('calculator/_block_calculator');
  echo Html::endTag('div');
echo Html::endTag('section');
?>
