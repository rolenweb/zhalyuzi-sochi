<?php
use yii\helpers\Html;

echo Html::beginTag('ul',['class' => 'list-unstyled block-choose-color']);
	echo Html::beginTag('li',['class' => 'title']);
		echo "Выберите материал:";
	echo Html::beginTag('li');
	echo Html::beginTag('li',['class' => 'choose-color']);
		echo Html::beginTag('div',['class' => 'row']);
			echo Html::beginTag('div',['class' => 'col-xs-3 col-sm-3 col-md-3']);
				echo Html::tag('div',Html::img('@web/images/material/'.$group->materials[0]->id.'.'.$group->materials[0]->extension),['class' => 'preview-color']);
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'col-xs-5 col-sm-6 col-md-6']);
				echo Html::tag('div',$group->title,['class' => 'title-color']);
				echo Html::tag('div',$group->materials[0]->title,['class' => 'title-material']);
				echo Html::beginTag('div',['class' => 'price-color']);
					echo Html::tag('span',round($group->price),['class' => 'number']);
					echo Html::tag('span','руб./ п.м.',['class' => 'text']);
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'col-xs-4 col-sm-3 col-md-3 btn-choose-color text-center']);
				echo Html::button('Выбрать<br>материал',['class' => 'btn btn-info btn-md btn-choose-color','data-toggle' => 'modal', 'data-target' => '#choose-color']);
				echo $this->render('../modal/_body');
			echo Html::endTag('div');

		echo Html::endTag('div');
		
	echo Html::beginTag('li');
echo Html::endTag('ul');


?>
