<?php
use yii\helpers\Html;
echo Html::beginTag('ul',['class' => 'mobile']);
	echo Html::beginTag('li',['name' => 'category-slider','slider' => '1', 'status' => 'active', 'price' => $group1->materials[0]->price, 'file' => '/images/material/'.$group1->materials[0]->id.'.'.$group1->materials[0]->extension, 'material-title' => $group1->materials[0]->title, 'name-group' => $group1->title]);
		echo Html::beginTag('div',['class' => 'row row-single-category']);
			echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-10 col-single-category active-category']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12']);
						echo Html::beginTag('span',['class' => 'icon']);
							echo Html::tag('i','',['class' => 'fa fa-dot-circle-o', 'aria-hidden' => 'true']);
						echo Html::endTag('span');
						echo Html::beginTag('span',['class' => 'title']);
							echo 'Алюминиевые жалюзи';
						echo Html::endTag('span');
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-12 text-right']);
						echo Html::beginTag('span',['class' => 'price']);
							echo 'от '.Html::tag('span','750',['class' => 'number']).Html::tag('span','руб',['class' => 'rub']);
						echo Html::endTag('span');

					echo Html::endTag('div');
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'col-sm-2 hidden-xs']);
				echo Html::img('@web/images/slider/horizontal-blinds/category/1.jpg',['class' => 'img-category']);
			echo Html::endTag('div');
		echo Html::endTag('div');
	echo Html::endTag('li');
	echo Html::beginTag('li',['name' => 'category-slider','slider' => '2', 'price' => $group2->materials[0]->price, 'file' => '/images/material/'.$group2->materials[0]->id.'.'.$group2->materials[0]->extension, 'material-title' => $group2->materials[0]->title, 'name-group' => $group2->title]);
		echo Html::beginTag('div',['class' => 'row row-single-category']);
			echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-10 col-single-category']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12']);
						echo Html::beginTag('span',['class' => 'icon']);
							echo Html::tag('i','',['class' => 'fa fa-circle-thin', 'aria-hidden' => 'true']);
						echo Html::endTag('span');
						echo Html::beginTag('span',['class' => 'title']);
							echo 'Кассетные алюминевые';
						echo Html::endTag('span');
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-12 text-right']);
						echo Html::beginTag('span',['class' => 'price']);
							echo 'от '.Html::tag('span','1550',['class' => 'number']).Html::tag('span','руб',['class' => 'rub']);
						echo Html::endTag('span');

					echo Html::endTag('div');
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'col-sm-2 hidden-xs']);
				echo Html::img('@web/images/slider/horizontal-blinds/category/2.jpg',['class' => 'img-category']);
			echo Html::endTag('div');
		echo Html::endTag('div');
	echo Html::endTag('li');
	echo Html::beginTag('li',['name' => 'category-slider','slider' => '3', 'price' => $group3->price, 'file' => '/images/material/'.$group1->materials[0]->id.'.'.$group1->materials[0]->extension, 'material-title' => $group1->materials[0]->title, 'name-group' => $group1->title]);
		echo Html::beginTag('div',['class' => 'row row-single-category']);
			echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-10 col-single-category']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12']);
						echo Html::beginTag('span',['class' => 'icon']);
							echo Html::tag('i','',['class' => 'fa fa-circle-thin', 'aria-hidden' => 'true']);
						echo Html::endTag('span');
						echo Html::beginTag('span',['class' => 'title']);
							echo 'Деревянные жалюзи';
						echo Html::endTag('span');
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-12 text-right']);
						echo Html::beginTag('span',['class' => 'price']);
							echo 'от '.Html::tag('span','5500',['class' => 'number']).Html::tag('span','руб',['class' => 'rub']);
						echo Html::endTag('span');

					echo Html::endTag('div');
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'col-sm-2 hidden-xs']);
				echo Html::img('@web/images/slider/horizontal-blinds/category/3.jpg',['class' => 'img-category']);
			echo Html::endTag('div');
		echo Html::endTag('div');
	echo Html::endTag('li');
	echo Html::beginTag('li',['name' => 'category-slider','slider' => '4', 'price' => $group4->price, 'file' => '/images/material/'.$group1->materials[0]->id.'.'.$group1->materials[0]->extension, 'material-title' => $group1->materials[0]->title, 'name-group' => $group1->title]);
		echo Html::beginTag('div',['class' => 'row row-single-category']);
			echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-10 col-single-category']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12']);
						echo Html::beginTag('span',['class' => 'icon']);
							echo Html::tag('i','',['class' => 'fa fa-circle-thin', 'aria-hidden' => 'true']);
						echo Html::endTag('span');
						echo Html::beginTag('span',['class' => 'title']);
							echo 'Пластиковые жалюзи';
						echo Html::endTag('span');
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-12 text-right']);
						echo Html::beginTag('span',['class' => 'price']);
							echo 'от '.Html::tag('span','4500',['class' => 'number']).Html::tag('span','руб',['class' => 'rub']);
						echo Html::endTag('span');

					echo Html::endTag('div');
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'col-sm-2 hidden-xs']);
				echo Html::img('@web/images/slider/horizontal-blinds/category/4.jpg',['class' => 'img-category']);
			echo Html::endTag('div');
		echo Html::endTag('div');
	echo Html::endTag('li');
echo Html::endTag('ul');

?>
