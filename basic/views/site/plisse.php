<?php
use yii\helpers\Html;
$this->title = 'Жалюзи, Москитные сетки, Окна в Сочи" (zhalyuzi-sochi.ru)';
$this->registerMetaTag(
    [
        'name' => 'description',
        'content' => 'Жалюзи, Москитные сетки, Окна в Сочи" (zhalyuzi-sochi.ru).',
    ]
);
$this->registerMetaTag(
    [
        'name' => 'keywords',
        'content' => 'Жалюзи, Москитные сетки, Окна в Сочи" (zhalyuzi-sochi.ru)',
    ]
);
echo Html::beginTag('section');
  echo Html::beginTag('div',['class' => 'container']);
    echo $this->render('slider/plisse/_block_slider',[
    		'group1' => $group1,
            'group2' => $group2,
            
    	]);
    echo $this->render('calculator/_block_calculator',[
    		'group' => $group1,
    		'page' => 'plisse',
    	]);
  echo Html::endTag('div');
echo Html::endTag('section');
?>
