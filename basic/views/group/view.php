<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Group */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Группы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-view">

    <h3><?= Html::encode($this->title) ?></h3>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            [
                'label' => 'Подкатегория',
                'value' => Html::a($model->subCategory->title,['sub-category/view', 'id' => $model->subCategory->id]),
                'format' => 'raw'
            ],
            [
                'label' => 'Название',
                'value' => $model->title,
            ],
            [
                'label' => 'Структура',
                'value' => $model->structure,
            ],
            [
                'label' => 'Плотность',
                'value' => $model->density,
            ],
            [
                'label' => 'Состав',
                'value' => $model->composition,
            ],
            [
                'label' => 'Чистка',
                'value' => $model->cleaning,
            ],
            [
                'label' => 'Страна',
                'value' => $model->country,
            ],
            [
                'label' => 'Цена',
                'value' => $model->price,
            ],
            [
                'label' => 'Макксимальная высота',
                'value' => $model->max_height,
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
<?php

    echo Html::a('Редактировать', ['update', 'id' => $model->id, 'subcategory' => Yii::$app->request->get('subcategory')], ['class' => 'btn btn-primary']);
if ($model->materials == NULL) {
    echo Html::a('Удалить', ['delete', 'id' => $model->id, 'subcategory' => Yii::$app->request->get('subcategory')], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить?',
                'method' => 'post',
            ],
        ]);
}
?>        
    </p>
    <h3>Материалы</h3>
<?php
    if ($model->materials != NULL) {
        echo Html::beginTag('row');
        foreach ($model->materials as $material) {
            echo Html::beginTag('div',['class' => 'col-sm-4 col-md-3 col-lg-2']);
                echo Html::beginTag('div',['class' => 'thumbnail']);
                    echo Html::a(Html::img('@web/images/material/'.$material->id.'.'.$material->extension),['material/view','id' => $material->id,'group' => $model->id]);
                    echo Html::beginTag('div',['class' => 'caption']);
                        echo Html::a(Html::tag('h3',$material->title),['material/view','id' => $material->id,'group' => $model->id]);
                    echo Html::endTag('div');
                echo Html::endTag('div');
                
            echo Html::endTag('div');
        }
        echo Html::endTag('row');

    }
    echo Html::beginTag('p',['class' => 'text-right']);
        echo Html::a('Добавить материал',['material/create','group' => $model->id],['class' => 'btn btn-primary']);
    echo Html::endTag('p')
?>    

</div>

