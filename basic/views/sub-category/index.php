<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подкатегории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-category-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'title',
                'label' => 'Название',
                
            ],
            [
                'attribute'=>'category_id',
                'label' => 'Категория',
                'content'=>function($data){
                    return $data->category->title;
                }
                
            ],
            [
                'attribute'=>'created_at',
                'label' => 'Создана',
                'content'=>function($data){
                    return date("d/m/Y",$data->created_at);
                }
                
            ],
            [
                'attribute'=>'updated_at',
                'label' => 'Обновлена',
                'content'=>function($data){
                    return date("d/m/Y",$data->updated_at);
                }
                
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p class="text-right">
        <?= Html::a('Создать подкатегорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
