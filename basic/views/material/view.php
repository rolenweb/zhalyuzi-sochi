<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Material */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Материалы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <?php
          if (file_exists(Yii::$app->basePath.'/web/images/material/'.$model->id.'.'.$model->extension)) {
              echo Html::img('@web/images/material/'.$model->id.'.'.$model->extension,['width' => '100px;']);
          }
          ?>
          
          <div class="caption">
            
            <p class="text-center">
                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

                <?= $form->field($model_image, 'imageFile')->fileInput() ?>

                <button>Submit</button>

            <?php ActiveForm::end() ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            [
                'label' => 'Группа',
                'value' => Html::a($model->group->title,['group/view', 'id' => $model->group->id]),
                'format' => 'raw'
            ],
            [
                'label' => 'Название',
                'value' => $model->title,
            ],
            
            [
                'label' => 'Код',
                'value' => $model->code,
            ],
            [
                'label' => 'Цена',
                'value' => $model->price,
            ],
            
            [
                'label' => 'Единица измерения',
                'value' => $model->unit,
            ],
            [
                'label' => 'Создана',
                'value' => date("d/m/Y",$model->created_at),
            ],
            [
                'label' => 'Обновлена',
                'value' => date("d/m/Y",$model->updated_at),
            ],
        ],
    ]) ?>

    <p class="text-right">
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотиде удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
