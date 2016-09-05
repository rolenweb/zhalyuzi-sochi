<?php
use yii\helpers\Html;

echo Html::beginTag('div',['class' => 'modal fade', 'id' => 'choose-color', 'tabindex' => '-1', 'role' => 'dialog', 'aria-labelledby' => 'myModalLabel']);
	echo Html::beginTag('div',['class' => 'modal-dialog', 'role' => 'document']);
		echo Html::beginTag('div',['class' => 'modal-content']);
			echo Html::beginTag('div',['class' => 'modal-header text-center']);
				echo Html::button(Html::tag('span','&times;',['aria-hidden' => 'ture']),['class' => 'close', 'data-dismiss' => 'modal', 'aria-label' => 'Close']);
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'modal-body text-left']);
				echo $this->render('_material');
			echo Html::endTag('div');

			echo Html::beginTag('div',['class' => 'modal-footer']);

			echo Html::endTag('div');
		echo Html::endTag('div');
	echo Html::endTag('div');

echo Html::endTag('div');
?>