<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use app\models\SubCategory;

/* @var $this yii\web\View */
/* @var $model app\models\Group */
/* @var $form yii\widgets\ActiveForm */

if (Yii::$app->request->get('subcategory') !== NULL) {
	$model->sub_category_id = Yii::$app->request->get('subcategory');
}
?>

<div class="group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sub_category_id')->dropDownList(ArrayHelper::map(SubCategory::listSub(), 'id', 'title'))->label('Подкатегория');
 ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'structure')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'density')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'composition')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cleaning')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'max_height')->textInput(['maxlength' => true]) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cоздать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
