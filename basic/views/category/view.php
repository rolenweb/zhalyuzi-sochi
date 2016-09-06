<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

    <h3><?= Html::encode($this->title) ?></h3>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

<?php
if ($model->subCategories == NULL) {
    echo Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить?',
                'method' => 'post',
            ],
        ]);
}
?>        
        
    </p>
    <h3>Подкатегории</h3>
<?php
    if ($model->subCategories != NULL) {
        echo Html::beginTag('ul');
        foreach ($model->subCategories as $sub) {
            echo Html::beginTag('li');
                echo Html::a($sub->title,['sub-category/view','id' => $sub->id,'category' => $model->id]);
            echo Html::endTag('li');
        }
        echo Html::endTag('ul');

    }
    echo Html::beginTag('p',['class' => 'text-right']);
        echo Html::a('Добавить подкатегорию',['sub-category/create','category' => $model->id],['class' => 'btn btn-primary']);
    echo Html::endTag('p')
?>    

</div>
