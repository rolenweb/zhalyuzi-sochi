<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;

$this->title = 'Setting';
echo Html::beginTag('div',['class' => 'row']);
	echo Html::beginTag('div',['class' => 'col-sm-12', 'name' => 'block-result']);
		
	echo Html::endTag('div');
echo Html::endTag('div');
echo Html::beginTag('div',['class' => 'row']);
	echo Html::beginTag('div',['class' => 'col-sm-6']);
		echo Html::tag('h4','Сменить пароль');
	echo Html::endTag('div');
echo Html::endTag('div');
echo Html::beginTag('div',['class' => 'row']);
	echo Html::beginTag('div',['class' => 'col-sm-6']);
		echo Html::beginTag('form',['class' => 'form-inline','name' => 'set-password']);
			echo Html::beginTag('div',['class' => 'form-group']);
				echo Html::passwordInput('password', '', ['class' => 'form-control', 'placeholder' => 'Введите пароль']);
			echo Html::endTag('div');
			echo Html::submitButton('Сохранить', ['class' => 'btn btn-default']);
		echo Html::endTag('form');
	echo Html::endTag('div');
echo Html::endTag('div');

?>
