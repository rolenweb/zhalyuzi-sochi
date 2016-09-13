<?php
use yii\helpers\Html;
echo Html::beginTag('ul',['class' => 'list-unstyled']);
	echo Html::beginTag('li',['name' => 'category-slider','slider' => '1', 'status' => 'active', 'price' => $group1->price, 'file' => '/images/material/'.$group1->materials[0]->id.'.'.$group1->materials[0]->extension, 'material-title' => $group1->materials[0]->title, 'name-group' => $group1->title]);
		echo Html::beginTag('div',['class' => 'row row-single-category']);
			echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-10 col-single-category active-category']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12']);
						echo Html::beginTag('span',['class' => 'icon']);
							echo Html::tag('i','',['class' => 'fa fa-dot-circle-o', 'aria-hidden' => 'true']);
						echo Html::endTag('span');
						echo Html::beginTag('span',['class' => 'title']);
							echo 'Плисе';
						echo Html::endTag('span');
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-12 text-right']);
						echo Html::beginTag('span',['class' => 'price']);
							echo 'от '.Html::tag('span','2500',['class' => 'number']).Html::tag('span','руб',['class' => 'rub']);
						echo Html::endTag('span');

					echo Html::endTag('div');
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'col-sm-2 hidden-xs']);
				echo Html::img('@web/images/slider/plisse/category/1.jpg',['class' => 'img-category']);
			echo Html::endTag('div');
		echo Html::endTag('div');
	echo Html::endTag('li');
	echo Html::beginTag('li',['name' => 'category-slider','slider' => '2', 'price' => $group2->price, 'file' => '/images/material/'.$group2->materials[0]->id.'.'.$group2->materials[0]->extension, 'material-title' => $group2->materials[0]->title, 'name-group' => $group2->title]);
		echo Html::beginTag('div',['class' => 'row row-single-category']);
			echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-10 col-single-category']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12']);
						echo Html::beginTag('span',['class' => 'icon']);
							echo Html::tag('i','',['class' => 'fa fa-circle-thin', 'aria-hidden' => 'true']);
						echo Html::endTag('span');
						echo Html::beginTag('span',['class' => 'title']);
							echo 'Плиссе на мансардные окна';
						echo Html::endTag('span');
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-12 text-right']);
						echo Html::beginTag('span',['class' => 'price']);
							echo 'от '.Html::tag('span','3200',['class' => 'number']).Html::tag('span','руб',['class' => 'rub']);
						echo Html::endTag('span');

					echo Html::endTag('div');
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'col-sm-2 hidden-xs']);
				echo Html::img('@web/images/slider/plisse/category/2.jpg',['class' => 'img-category']);
			echo Html::endTag('div');
		echo Html::endTag('div');
	echo Html::endTag('li');
	
echo Html::endTag('ul');

?>

