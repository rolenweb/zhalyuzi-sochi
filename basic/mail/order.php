<?php
use yii\helpers\Html;
echo Html::beginTag('table',['style' => 'border: 1px solid #000; text-align:left']);
	echo Html::beginTag('tr');
		echo Html::beginTag('th');
			echo 'Имя';
		echo Html::endTag('th');
		echo Html::beginTag('td');
			echo $order['name'];
		echo Html::endTag('td');
	echo Html::endTag('tr');
	echo Html::beginTag('tr');
		echo Html::beginTag('th');
			echo 'Телефон';
		echo Html::endTag('th');
		echo Html::beginTag('td');
			echo $order['phone'];
		echo Html::endTag('td');
	echo Html::endTag('tr');
	if (isset($order['total'])) {
		echo Html::beginTag('tr');
			echo Html::beginTag('th');
				echo 'Сумма';
			echo Html::endTag('th');
			echo Html::beginTag('td');
				echo $order['total'].' руб.';
			echo Html::endTag('td');
		echo Html::endTag('tr');
	}
	if (isset($order['category'])) {
		echo Html::beginTag('tr');
			echo Html::beginTag('th');
				echo 'Категория';
			echo Html::endTag('th');
			echo Html::beginTag('td');
				echo catName($order['category']);
			echo Html::endTag('td');
		echo Html::endTag('tr');
	}
	if (isset($order['sub-category'])) {
		echo Html::beginTag('tr');
			echo Html::beginTag('th');
				echo 'Подкатегория';
			echo Html::endTag('th');
			echo Html::beginTag('td');
				echo $order['sub-category'];
			echo Html::endTag('td');
		echo Html::endTag('tr');
	}
	
	if (isset($order['group'])) {
		echo Html::beginTag('tr');
			echo Html::beginTag('th');
				echo 'Группа';
			echo Html::endTag('th');
			echo Html::beginTag('td');
				echo $order['group'];
			echo Html::endTag('td');
		echo Html::endTag('tr');
	}
	if (isset($order['material'])) {
		echo Html::beginTag('tr');
			echo Html::beginTag('th');
				echo 'Материал';
			echo Html::endTag('th');
			echo Html::beginTag('td');
				echo $order['material'];
			echo Html::endTag('td');
		echo Html::endTag('tr');
	}
	if (isset($order['width'])) {
		echo Html::beginTag('tr');
			echo Html::beginTag('th');
				echo 'Ширина';
			echo Html::endTag('th');
			echo Html::beginTag('td');
				echo $order['width'].' см';
			echo Html::endTag('td');
		echo Html::endTag('tr');
	}
	if (isset($order['height'])) {
		echo Html::beginTag('tr');
			echo Html::beginTag('th');
				echo 'Высота';
			echo Html::endTag('th');
			echo Html::beginTag('td');
				echo $order['height'].' см';
			echo Html::endTag('td');
		echo Html::endTag('tr');
	}
		
	
	
echo Html::endTag('table');

function catName($cat)
{
	if ($cat == 'index') {
		return 'Рулонные шторы';
	}
	if ($cat == 'vertical-blinds') {
		return 'Вертикальные жалюзи';
	}
	if ($cat == 'horizontal-blinds') {
		return 'Горизонтальные жалюзи';
	}
	if ($cat == 'plisse') {
		return 'Плисе';
	}
	if ($cat == 'cornice') {
		return 'Карнизы';
	}
	if ($cat == 'mosquito-nets') {
		return 'Москитные сетки';
	}
	if ($cat == 'electro-blinds') {
		return 'Электро жалюзи';
	}
}
?>