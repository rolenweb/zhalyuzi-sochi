<?php
use yii\helpers\Html;
echo Html::beginTag('table');
	echo Html::beginTag('tr');
		echo Html::beginTag('th');
			echo 'Имя';
		echo Html::endTag('th');
		echo Html::endTag('td');
			echo $order['name'];
		echo Html::endTag('td');
		echo Html::beginTag('th');
			echo 'Телефон';
		echo Html::endTag('th');
		echo Html::endTag('td');
			echo $order['phone'];
		echo Html::endTag('td');

		echo Html::beginTag('th');
			echo 'Сумма';
		echo Html::endTag('th');
		echo Html::endTag('td');
			echo $order['total'];
		echo Html::endTag('td');

		echo Html::beginTag('th');
			echo 'Категория';
		echo Html::endTag('th');
		echo Html::endTag('td');
			echo $order['category'];
		echo Html::endTag('td');
		echo Html::beginTag('th');
			echo 'Подкатегория';
		echo Html::endTag('th');
		echo Html::endTag('td');
			echo $order['sub-category'];
		echo Html::endTag('td');
		echo Html::beginTag('th');
			echo 'Группа';
		echo Html::endTag('th');
		echo Html::endTag('td');
			echo $order['group'];
		echo Html::endTag('td');
		echo Html::beginTag('th');
			echo 'Материал';
		echo Html::endTag('th');
		echo Html::endTag('td');
			echo $order['material'];
		echo Html::endTag('td');
	echo Html::endTag('tr');
echo Html::endTag('table');
?>