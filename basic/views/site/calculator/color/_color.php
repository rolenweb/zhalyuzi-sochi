<?php
use yii\helpers\Html;

echo Html::beginTag('ul',['class' => 'list-unstyled block-choose-color']);
	echo Html::beginTag('li',['class' => 'title']);
		echo "Выберите материал:";
	echo Html::beginTag('li');
	echo Html::beginTag('li',['class' => 'choose-color']);
		echo Html::beginTag('ul',['class' => 'list-inline']);
			echo Html::beginTag('li');
				echo Html::tag('div','',['class' => 'preview-color']);
			echo Html::endTag('li');
			echo Html::beginTag('li');
				echo Html::tag('div','Аврора',['class' => 'title-color']);
				echo Html::beginTag('div',['class' => 'price-color']);
					echo Html::tag('span','12312',['class' => 'number']);
					echo Html::tag('span','руб./ п.м.',['class' => 'text']);
				echo Html::endTag('div');
			echo Html::endTag('li');
			echo Html::beginTag('li',['class' => 'text-right']);
				echo Html::button('Выбрать<br>материал',['class' => 'btn btn-info btn-lg btn-choose-color','data-toggle' => 'modal', 'data-target' => '#choose-color']);
				echo $this->render('../modal/_body');
			echo Html::endTag('li');
		echo Html::endTag('ul');
	echo Html::beginTag('li');
echo Html::endTag('ul');


?>
