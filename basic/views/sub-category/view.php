<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SubCategory */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Подкатегории', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-category-view">

    <h3><?= Html::encode($this->title) ?></h3>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Категория',
                'value' => Html::a($model->category->title,['category/view', 'id' => $model->category->id]),
                'format' => 'raw'
            ],
            [
                'label' => 'Название',
                'value' => $model->title,
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
        <?= Html::a('Редактировать', ['update', 'id' => $model->id, 'category' => Yii::$app->request->get('category')], ['class' => 'btn btn-primary']) ?>
<?php
if ($model->groups == NULL) {
    echo Html::a('Удалить', ['delete', 'id' => $model->id, 'category' => Yii::$app->request->get('category')], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить?',
                'method' => 'post',
            ],
        ]);
}
?>        

    </p>
    <h3>Группы</h3>
<?php
    if ($model->groups != NULL) {
        echo Html::beginTag('ul');
        foreach ($model->groups as $group) {
            echo Html::beginTag('li');
                echo Html::a($group->title,['group/view','id' => $group->id,'subcategory' => $model->id]);
            echo Html::endTag('li');
        }
        echo Html::endTag('ul');

    }
    echo Html::beginTag('p',['class' => 'text-right']);
        echo Html::a('Добавить группу',['group/create','subcategory' => $model->id],['class' => 'btn btn-primary']);
    echo Html::endTag('p')
?>    
</div>
