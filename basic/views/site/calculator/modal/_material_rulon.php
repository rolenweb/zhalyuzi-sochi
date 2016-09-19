<?php
use yii\helpers\Html;
if ($groups != NULL) {
	$n = 0;
	foreach ($groups as $group) {

		
		echo Html::beginTag('div',['name' => 'group', 'price' => $group->price, 'height' => $group->max_height, 'title' => $group->title, 'class' => classGroup($n)]);
			echo Html::beginTag('div',['class' => 'row']);
				echo Html::beginTag('div',['class' => 'col-xs-12 group-title padding-right-0 padding-left-0']);
					echo Html::beginTag('div',['class' => 'col-xs-6 padding-left-0']);
						echo $group->title;
					echo Html::endTag('div');
					echo Html::beginTag('div',['class' => 'col-xs-6 text-right padding-right-0']);
						echo Html::tag('span',$group->price,['class' => 'number']);
						echo Html::tag('span',' руб. / п.м.',['class' => 'rub']);
					echo Html::endTag('div');
					
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'row top-10']);
				echo Html::beginTag('div',['class' => 'col-xs-6 padding-left-0']);
					echo Html::beginTag('ul',['class' => 'list-unstyled property-group']);
						echo Html::beginTag('li');
							echo Html::tag('span','Структура:',['class' => 'property-title']);
							echo Html::tag('span',$group->structure,['class' => 'property-value']);
						echo Html::endTag('li');
						echo Html::beginTag('li');
							echo Html::tag('span','Состав:',['class' => 'property-title']);
							echo Html::tag('span',$group->composition,['class' => 'property-value']);
						echo Html::endTag('li');
						echo Html::beginTag('li');
							echo Html::tag('span','Плотность:',['class' => 'property-title']);
							echo Html::tag('span',$group->density,['class' => 'property-value']);
						echo Html::endTag('li');
						
					echo Html::endTag('ul');
				echo Html::endTag('div');
				echo Html::beginTag('div',['class' => 'col-xs-6']);
					echo Html::beginTag('ul',['class' => 'list-unstyled property-group']);
						
						echo Html::beginTag('li');
							echo Html::tag('span','Чистка:',['class' => 'property-title']);
							echo Html::tag('span',$group->cleaning,['class' => 'property-value']);
						echo Html::endTag('li');
						echo Html::beginTag('li');
							echo Html::tag('span','Страна:',['class' => 'property-title']);
							echo Html::tag('span',$group->country,['class' => 'property-value']);
						echo Html::endTag('li');
					echo Html::endTag('ul');
				echo Html::endTag('div');
			echo Html::endTag('div');
			echo Html::beginTag('div',['class' => 'row top-10 text-left']);
			if ($group->materials != NULL) {
				foreach ($group->materials as $key => $material) {
					if ($key == 5 || $key == 11 || $key == 17 || $key == 23 || $key == 29) {
							$material_opt = ['class' => 'col-xs-6 col-sm-2 material pic6 animation-left', 'name' => $material->title];
						}else{
							$material_opt = ['class' => 'col-xs-6 col-sm-2 material pic6 animation-right', 'name' => $material->title];
						}
					echo Html::beginTag('div',$material_opt);
						
						echo Html::beginTag('div',['class' => 'material-container']);
							echo Html::beginTag('ul',['class' => 'list-unstyled']);
								echo Html::beginTag('li',['class' => 'image-material']);
									echo Html::img('@web/images/material/'.$material->id.'.'.$material->extension,['class' => 'img-responsive']);
								echo Html::endTag('li');
								echo Html::beginTag('li',['class' => 'description-material text-center']);
									echo $material->title;
								echo Html::endTag('li');
							echo Html::endTag('ul');
						echo Html::endTag('div');
						
					echo Html::endTag('div');
				}
			}	
			echo Html::endTag('div');		
		echo Html::endTag('div');			
		$n++;
	}
}
function classGroup($n)
{
	if ($n == 0) {
		return;
	}else{
		return 'top-20';
	}
}
?>
