<?php
use yii\helpers\Html;
echo Html::beginTag('div',['class' => 'block-slider']);
    echo Html::beginTag('div',['class' => 'row']);
        echo Html::beginTag('div',['class' => 'col-xs-12 category']);
            echo $this->render('_category_mobile',[
                    'group1' => $group1,
                    'group2' => $group2,
                    'group3' => $group3,
                    'group4' => $group4,
                ]);
        echo Html::endTag('div');
        echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-6']);
          	echo Html::beginTag('div',['class' => 'row']);
            	echo Html::beginTag('div',['class' => 'col-xs-12 col-sm-12']);
              		echo Html::beginTag('div',['class' => 'title-slider']);
                		echo "Рулонные шторы";
              		echo Html::endTag('div');  
            	echo Html::endTag('div');  
            	echo Html::beginTag('div',['class' => 'col-xs-12 padding-right-25']);
            		echo $this->render('_slider');
        	    echo Html::endTag('div');
        	    echo Html::beginTag('div',['class' => 'col-xs-12 padding-right-25']);
        	    	echo Html::beginTag('div',['class' => 'block-total']);
        	    		echo Html::beginTag('ul',['class' => 'list-inline text-center']);
        	    			echo Html::beginTag('li');
        	    				echo 'Итого: '.Html::tag('span',round($group1->price),['name' => 'total']).Html::tag('span','руб',['class' => 'rub']);
        	    			echo Html::endTag('li');
        	    			echo Html::beginTag('li');
        	    				echo Html::button('Заказать<br>'.Html::tag('span','* бесплатный замер'),['class' => 'btn btn-success', 'data-toggle' => 'modal', 'data-target' => '#order2']);

        	    			echo Html::endTag('li');
        	    		echo Html::endTag('ul');
        	    	echo Html::endTag('div');
        	    echo Html::endTag('div');
          	echo Html::endTag('div');  
        echo Html::endTag('div'); 
        echo Html::beginTag('div',['class' => 'col-xs-4 col-sm-6 category']);
        	echo $this->render('_category',[
                    'group1' => $group1,
                    'group2' => $group2,
                    'group3' => $group3,
                    'group4' => $group4,
                ]);
        echo Html::endTag('div');
    echo Html::endTag('div');  
echo Html::endTag('div');  
?>