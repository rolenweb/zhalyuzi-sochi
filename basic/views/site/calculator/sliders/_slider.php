<?php
use yii\helpers\Html;
echo Html::beginTag('ul',['class' => 'list-unstyled block-slider-width']);
	echo Html::beginTag('li');
		echo Html::beginTag('span',['class' => 'title']);
			echo 'Ширина жалюзи';
		echo Html::endTag('span');
		echo Html::beginTag('span',['class' => 'input-width']);
			echo Html::input('text', 'width', '100');
		echo Html::endTag('span');
		echo Html::beginTag('span',['class' => 'unit']);
			echo 'см';
		echo Html::endTag('span');
	echo Html::endTag('li');
	echo Html::beginTag('li');
		echo Html::tag('div','',['id' => 'slider-width']);
	echo Html::endTag('li');
echo Html::endTag('ul');

echo Html::beginTag('ul',['class' => 'list-unstyled block-slider-height']);
	echo Html::beginTag('li');
		echo Html::beginTag('span',['class' => 'title']);
			echo 'Высота жалюзи';
		echo Html::endTag('span');
		echo Html::beginTag('span',['class' => 'input-height']);
			echo Html::input('text', 'height', '100');
		echo Html::endTag('span');
		echo Html::beginTag('span',['class' => 'unit']);
			echo 'см';
		echo Html::endTag('span');
	echo Html::endTag('li');
	echo Html::beginTag('li');
		echo Html::tag('div','',['id' => 'slider-height']);
	echo Html::endTag('li');
echo Html::endTag('ul');
?>
