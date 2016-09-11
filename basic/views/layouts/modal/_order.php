<?php
use yii\helpers\Html;

echo Html::beginTag('div',['class' => 'modal fade', 'id' => 'order1', 'tabindex' => '-1', 'role' => 'dialog', 'aria-labelledby' => 'myModalLabel']);
	echo Html::beginTag('div',['class' => 'modal-dialog', 'role' => 'document']);
		echo Html::beginTag('div',['class' => 'modal-content']);
			echo Html::beginTag('div',['class' => 'modal-header text-center']);
				echo Html::button(Html::tag('span','&times;',['aria-hidden' => 'ture']),['class' => 'close', 'data-dismiss' => 'modal', 'aria-label' => 'Close']);
				echo Html::tag('h4','Заказ или бесплатный замер',['class' => 'modal-title']);
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'modal-body text-left']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12 order-title text-center']);
						echo 'Чтобы мы могли связаться с Вами<br>Укажите свой номер телефона.';
					echo Html::endTag('div');
				echo Html::endTag('div');
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12 result']);
						
					echo Html::endTag('div');
				echo Html::endTag('div');
				echo Html::beginTag('form',['name' => 'order1']);
					echo Html::beginTag('div',['class' => 'row top-10']);
						echo Html::beginTag('div',['class' => 'col-xs-12']);
							echo Html::input('text', 'name', '', ['class' => 'form-control', 'placeholder' => 'Выше имя...', 'required' => 'required']);
						echo Html::endTag('div');
						echo Html::beginTag('div',['class' => 'col-xs-12 top-10']);
							echo Html::input('text', 'phone', '', ['class' => 'form-control', 'placeholder' => 'Введите номер телефона...','required' => 'required']);
						echo Html::endTag('div');
						echo Html::beginTag('div',['class' => 'col-xs-12 top-10']);
							$c1 = rand(1,10);
							$c2 = rand(1,10);
							echo Html::input('text', 'c1', $c1, ['type' => 'hidden']);
							echo Html::input('text', 'c2', $c2, ['type' => 'hidden']);
							echo Html::input('text', 'captcha', '', ['class' => 'form-control', 'placeholder' => 'Сколько будет '.$c1.'+'.$c2.'?','required' => 'required']);
						echo Html::endTag('div');
						echo Html::beginTag('div',['class' => 'col-xs-12 top-10']);
							echo Html::submitButton('Предварительный заказ', ['class' => 'btn btn-primary btn-sm']);
						echo Html::endTag('div');
					echo Html::endTag('div');
				echo Html::endTag('form');
			echo Html::endTag('div');

			
		echo Html::endTag('div');
	echo Html::endTag('div');

echo Html::endTag('div');
echo Html::beginTag('div',['class' => 'modal fade', 'id' => 'order2', 'tabindex' => '-1', 'role' => 'dialog', 'aria-labelledby' => 'myModalLabel']);
	echo Html::beginTag('div',['class' => 'modal-dialog', 'role' => 'document']);
		echo Html::beginTag('div',['class' => 'modal-content']);
			echo Html::beginTag('div',['class' => 'modal-header text-center']);
				echo Html::button(Html::tag('span','&times;',['aria-hidden' => 'ture']),['class' => 'close', 'data-dismiss' => 'modal', 'aria-label' => 'Close']);
				echo Html::tag('h4','Заказ или бесплатный замер',['class' => 'modal-title']);
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'modal-body text-left']);
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12 order-title text-center']);
						echo 'Чтобы мы могли связаться с Вами<br>Укажите свой номер телефона.';
					echo Html::endTag('div');
				echo Html::endTag('div');
				echo Html::beginTag('div',['class' => 'row']);
					echo Html::beginTag('div',['class' => 'col-xs-12 result']);
						
					echo Html::endTag('div');
				echo Html::endTag('div');
				echo Html::beginTag('form',['name' => 'order2']);
					echo Html::beginTag('div',['class' => 'row top-10']);
						echo Html::beginTag('div',['class' => 'col-xs-12']);
							echo Html::input('text', 'name', '', ['class' => 'form-control', 'placeholder' => 'Выше имя...', 'required' => 'required']);
						echo Html::endTag('div');
						echo Html::beginTag('div',['class' => 'col-xs-12 top-10']);
							echo Html::input('text', 'phone', '', ['class' => 'form-control', 'placeholder' => 'Введите номер телефона...','required' => 'required']);
						echo Html::endTag('div');
						echo Html::beginTag('div',['class' => 'col-xs-12 top-10']);
							$c1 = rand(1,10);
							$c2 = rand(1,10);
							echo Html::input('text', 'c1', $c1, ['type' => 'hidden']);
							echo Html::input('text', 'c2', $c2, ['type' => 'hidden']);
							echo Html::input('text', 'captcha', '', ['class' => 'form-control', 'placeholder' => 'Сколько будет '.$c1.'+'.$c2.'?','required' => 'required']);
							echo Html::input('text', 'total', '', ['type' => 'hidden']);
							echo Html::input('text', 'width', '', ['type' => 'hidden']);
							echo Html::input('text', 'height', '', ['type' => 'hidden']);
							echo Html::input('text', 'category', '', ['type' => 'hidden']);
							echo Html::input('text', 'sub-category', '', ['type' => 'hidden']);
							echo Html::input('text', 'group', '', ['type' => 'hidden']);
							echo Html::input('text', 'material', '', ['type' => 'hidden']);
						echo Html::endTag('div');
						echo Html::beginTag('div',['class' => 'col-xs-12 top-10']);
							echo Html::submitButton('Предварительный заказ', ['class' => 'btn btn-primary btn-sm']);
						echo Html::endTag('div');
					echo Html::endTag('div');
				echo Html::endTag('form');
			echo Html::endTag('div');

			
		echo Html::endTag('div');
	echo Html::endTag('div');

echo Html::endTag('div');
?>