<?php
use yii\helpers\Html;

echo Html::beginTag('div',['class' => 'block-calculator']);
	echo Html::beginTag('div',['class' => 'row']);
		echo Html::beginTag('div',['class' => 'col-sm-5']);
			echo $this->render('sliders/_slider');
		echo Html::endTag('div');
		echo Html::beginTag('div',['class' => 'col-sm-7']);
			echo $this->render('color/_color',[
				'group' => $group,
				]);
		echo Html::endTag('div');
	echo Html::endTag('div');
echo Html::endTag('div');
?>