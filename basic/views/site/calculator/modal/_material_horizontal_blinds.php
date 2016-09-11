<?php
use yii\helpers\Html;
if ($groups != NULL) {
	$n = 0;
	foreach ($groups as $group) {

		
		echo Html::beginTag('div',['name' => 'group', 'title' => $group->title]);
			
			echo Html::beginTag('div',['class' => 'row top-10 text-left']);
			if ($group->materials != NULL) {
				foreach ($group->materials as $material) {
					echo Html::beginTag('div',['class' => 'col-xs-4 material', 'name' => $material->title]);
						echo Html::beginTag('div');
							echo Html::tag('span',$material->code,['class' => 'code']);
							echo Html::tag('span',$material->price,['class' => 'price']);
							echo Html::tag('span','руб/м2',['class' => 'rub']);
						echo Html::endTag('div');
						echo Html::beginTag('ul',['class' => 'list-unstyled']);
							echo Html::beginTag('li',['class' => 'image-material']);
								echo Html::img('@web/images/material/'.$material->id.'.'.$material->extension,['class' => 'img-responsive']);
							echo Html::endTag('li');
							echo Html::beginTag('li',['class' => 'description-material text-center']);
								echo $material->title;
							echo Html::endTag('li');
						echo Html::endTag('ul');
					echo Html::endTag('div');
				}
			}	
			echo Html::endTag('div');		
		echo Html::endTag('div');			
		$n++;
	}
}

?>