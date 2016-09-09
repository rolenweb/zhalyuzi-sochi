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
					if ($page == 'horizontal-blinds') {
						$price = $group->materials[0]->price;
					}else{
						$price = $group->price;
					}
					echo Html::tag('span',round($price),['class' => 'number']);
					echo Html::tag('span','руб./ п.м.',['class' => 'text']);
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'col-xs-4 col-sm-3 col-md-3 btn-choose-color text-center']);
				echo Html::button('Выбрать<br>материал',['class' => 'btn btn-info btn-md btn-choose-color','data-toggle' => 'modal', 'data-target' => '#choose-color', 'page' => $page]);
				echo $this->render('../modal/_body');
			echo Html::endTag('div');

		echo Html::endTag('div');
		/*echo Html::beginTag('ul',['class' => 'list-inline']);
			echo Html::beginTag('li');
				echo Html::tag('div','',['class' => 'preview-color']);
			echo Html::endTag('li');
			echo Html::beginTag('li');
				echo Html::tag('div','Аврора',['class' => 'title-color']);
				echo Html::tag('div','цвет',['class' => 'title-material']);
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
		*/
	echo Html::beginTag('li');
echo Html::endTag('ul');


?>
