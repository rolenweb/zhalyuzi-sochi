<?php
use yii\helpers\Html;
echo Html::beginTag('ul',['class' => 'mobile']);
	echo Html::beginTag('li',['name' => 'category-slider','slider' => '1', 'status' => 'active', 'price' => $group1->price, 'file' => '/images/material/'.$group1->materials[0]->id.'.'.$group1->materials[0]->extension, 'material-title' => $group1->materials[0]->title, 'name-group' => $group1->title]);
		echo Html::beginTag('div',['class' => 'row row-single-category']);
			echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-12 col-single-category']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12']);
						echo Html::beginTag('span',['class' => 'icon']);
							echo Html::tag('i','',['class' => 'fa fa-circle', 'aria-hidden' => 'true']);
						echo Html::endTag('span');
						echo Html::beginTag('span',['class' => 'title']);
							echo 'Электро привод для рулонных штор';
						echo Html::endTag('span');
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-10']);
						echo Html::beginTag('span',['class' => 'sub-title']);
							echo 'Цена 7000 руб к стоимости изделия';
						echo Html::endTag('span');

					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-sm-2 hidden-xs']);
						echo Html::img('@web/images/slider/electro-blinds/category/1.png',['class' => 'img-category', 'style' => 'height: 40px;']);
					echo Html::endTag('div');
				echo Html::endTag('div');
			echo Html::endTag('div');
			
		echo Html::endTag('div');
	echo Html::endTag('li');
	echo Html::beginTag('li',['name' => 'category-slider','slider' => '1', 'status' => 'active', 'price' => $group1->price, 'file' => '/images/material/'.$group1->materials[0]->id.'.'.$group1->materials[0]->extension, 'material-title' => $group1->materials[0]->title, 'name-group' => $group1->title]);
		echo Html::beginTag('div',['class' => 'row row-single-category']);
			echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-12 col-single-category']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12']);
						echo Html::beginTag('span',['class' => 'icon']);
							echo Html::tag('i','',['class' => 'fa fa-circle', 'aria-hidden' => 'true']);
						echo Html::endTag('span');
						echo Html::beginTag('span',['class' => 'title']);
							echo 'Пульт управления';
						echo Html::endTag('span');
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-10']);
						echo Html::beginTag('span',['class' => 'sub-title']);
							echo "Одна канальный 1000руб";
						echo Html::endTag('span');

					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-sm-2 hidden-xs text-center']);
						echo Html::img('@web/images/slider/electro-blinds/category/2.png',['class' => 'img-category']);
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-10']);
						echo Html::beginTag('span',['class' => 'sub-title']);
							echo "До пяти канальный 1800руб";
						echo Html::endTag('span');

					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-sm-2 hidden-xs text-center']);
						echo Html::img('@web/images/slider/electro-blinds/category/3.png',['class' => 'img-category']);
					echo Html::endTag('div');
				echo Html::endTag('div');
			echo Html::endTag('div');
			
		echo Html::endTag('div');
	echo Html::endTag('li');
echo Html::endTag('ul');

?>
