<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;

$this->title = 'Жалюзи, Москитные сетки, Окна в Сочи" (zhalyuzi-sochi.ru)';

echo Html::beginTag('section');
  echo Html::beginTag('div',['class' => 'container']);
    echo Html::beginTag('div',['class' => 'row contact-page']);
        echo Html::beginTag('div',['class' => 'col-sm-6 padding-left-0 padding-right-0 padding-right-5-sm']);
            echo Html:: beginTag('div',['class' => 'block-map']);
                echo Html::beginTag('div',['class' => 'title']);
                    echo 'гипермаркет "Магнит" на новой заре "Квартирный вопрос"';
                echo Html:: endTag('div');
                echo Html::beginTag('div',['class' => 'map']);
                    echo Html:: beginTag('div',['class' => 'hidden-xs hidden-sm']);
?>
    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=qJurQ8SrJALrHir22i1UjyBGJCp7bJaj&width=450&height=490&lang=ru_RU&sourceType=constructor"></script>
<?php                                
                    echo Html::endTag('div');
                    echo Html:: beginTag('div',['class' => 'visible-xs-block visible-sm-block']);
?>
    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=qJurQ8SrJALrHir22i1UjyBGJCp7bJaj&width=350&height=490&lang=ru_RU&sourceType=constructor"></script>
<?php                                
                    echo Html::endTag('div');
    
                echo Html::endTag('div');
            echo Html::endTag('div');
            

        echo Html::endTag('div');
        echo Html::beginTag('div',['class' => 'col-sm-6 padding-left-0 padding-right-0']);
            echo Html::beginTag('div',['class' => 'info']);
                echo Html::beginTag('div',['class' => 'title']);
                    echo 'Магазин';
                echo Html::endTag('div');
                echo Html::beginTag('div',['class' => 'addresses']);
                    echo Html::beginTag('ul',['class' => 'list-unstyled']);
                        echo Html::beginTag('li');
                            echo Html::tag('span','Режим работы:',['class' => 'title']);
                        echo Html::endTag('li');
                        echo Html::beginTag('li');
                            echo 'Понедельник - Суббота 10.00-18.00';
                        echo Html::endTag('li');
                        echo Html::beginTag('li');
                            echo 'Воскресенье 10.00-14.00 ';
                        echo Html::endTag('li');
                    echo Html::endTag('ul');
                echo Html::endTag('div');
                echo Html::beginTag('hr');
                echo Html::beginTag('div',['class' => 'phone']);
                    echo Html::beginTag('div',['class' => 'row']);
                        echo Html::beginTag('div',['class' => 'col-sm-4']);
                            echo Html::img('@web/images/phone.png');
                        echo Html::endTag('div');
                        echo Html::beginTag('div',['class' => 'col-sm-8 text-center']);
                            echo Html::beginTag('p',['class' => 'title']);
                                echo 'Ждём Ваших звонков!';
                            echo Html::endTag('p');
                            echo Html::beginTag('p',['class' => 'number']);
                                echo '+7 (918) 001-26-01';
                            echo Html::endTag('p');
                        echo Html::endTag('div');
                    echo Html::endTag('div');
                echo Html::endTag('div');
                echo Html::beginTag('hr');
                echo Html::beginTag('div',['class' => 'pic']);
                    echo Html::beginTag('div',['class' => 'row']);
                        echo Html::beginTag('div',['class' => 'col-xs-4']);
                            echo Html::img('@web/images/contact/1.png',['class' => 'img-thumbnail']);
                        echo Html::endTag('div');    
                        echo Html::beginTag('div',['class' => 'col-xs-4']);
                            echo Html::img('@web/images/contact/2.png',['class' => 'img-thumbnail']);
                        echo Html::endTag('div');    
                        echo Html::beginTag('div',['class' => 'col-xs-4']);
                            echo Html::img('@web/images/contact/3.png',['class' => 'img-thumbnail']);
                        echo Html::endTag('div');    
                        echo Html::beginTag('div',['class' => 'col-xs-4']);
                            echo Html::img('@web/images/contact/4.png',['class' => 'img-thumbnail']);
                        echo Html::endTag('div');    
                        echo Html::beginTag('div',['class' => 'col-xs-4']);
                            echo Html::img('@web/images/contact/5.png',['class' => 'img-thumbnail']);
                        echo Html::endTag('div');    
                        echo Html::beginTag('div',['class' => 'col-xs-4']);
                            echo Html::img('@web/images/contact/6.png',['class' => 'img-thumbnail']);
                        echo Html::endTag('div');    
                    echo Html::endTag('div');
                echo Html::endTag('div');
            echo Html::endTag('div');
            
        echo Html::endTag('div');
    echo Html::endTag('div');
  echo Html::endTag('div');
echo Html::endTag('section');
?>
