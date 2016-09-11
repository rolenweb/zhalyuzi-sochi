<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\FrontAsset;


FrontAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
      <div class="container">
        <div class="top-header">
          <div class="row">
            <div class="col-xs-7 col-sm-6 col-md-4">
              <div class="logo">
                <a href="">
                  <img src="images/logo.png" alt="" class="img-responsive">
                </a>  
              </div>
              
            </div>
            <div class="col-xs-5 col-sm-6 col-md-8 text-right">
              <ul class="list-inline hidden-xs hidden-sm">
                <li name = "menu-contact-lg">
                  <div class="phone-top">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="icon">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-phone fa-stack-1x"></i>
                          </span>  
                        </div>
                          
                      </div>
                      <div class="col-sm-9 padding-left-0">
                        <ul class="list-unstyled">
                          <li>+7 (918) 001-26-01</li>
                          <li>+7 (938) 450-03-53 </li>
                        </ul>  
                      </div>

                    </div>
                    
                  </div>
                </li>
                <li name = "menu-contact-lg">
                  <div class="social">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="icon">
                          <i class="fa fa-vk fa-2x" aria-hidden="true"></i>  
                        </div>
                        

                      </div>
                      <div class="col-sm-9 padding-left-0">
                        <div class="text">Мы в соцсетях</div> 
                      </div>

                    </div>
                  </div>
                </li>
                <li>
                  <div class="contact">
                    <ul class="list-unstyled text-left">
                      <li>
                        <ul class="list-inline">
                          <li>
                            <div class="icon">
                              <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>  
                            </div>
                          </li>
                          <li>
                            <div class="text">
                              Контакты  
                            </div>
                          </li>
                        </ul>
                        
                      </li>
                      <li>
                        <ul class="list-inline">
                          <li>
                            <div class="icon">
                              <i class="fa fa-envelope-o fa-2x blue" aria-hidden="true"></i>      
                            </div>
                          </li>
                          <li>
                            <div class="text">
                              1974denis@mail.ru    
                            </div>
                          </li>
                        </ul>
                        
                      </li>
                    </ul>  
                  </div>
                </li>
              </ul>
              <ul class="list-inline visible-xs-block visible-sm-block menu-xs">
                <li name = "show-contact"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></li>
                <li name = "show-top-menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></li>
              </ul>
            </div>
          </div>
          <div class="row top-contact-xs top-10">
            <div class="col-xs-12">
              <ul class="list-inline text-center">
                <li>
                  <div class="phone-top">
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="icon">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-phone fa-stack-1x"></i>
                          </span>  
                        </div>
                          
                      </div>
                      <div class="col-xs-9 padding-left-0">
                        <ul class="list-unstyled">
                          <li>+7 (918) 001-26-01</li>
                          <li>+7 (938) 450-03-53 </li>
                        </ul>  
                      </div>

                    </div>
                    
                  </div>
                </li>
                <li>
                  <div class="social hidden-xs">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="icon">
                          <i class="fa fa-vk fa-2x" aria-hidden="true"></i>  
                        </div>
                        

                      </div>
                      <div class="col-sm-9 padding-left-0">
                        <div class="text">Мы в соцсетях</div> 
                      </div>

                    </div>
                  </div>
                </li>
                <li>
                  <div class="contact">
                    <ul class="list-unstyled text-left">
                      <li>
                        <ul class="list-inline">
                          <li>
                            <div class="icon">
                              <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>  
                            </div>
                          </li>
                          <li>
                            <div class="text">
                              Контакты  
                            </div>
                          </li>
                        </ul>
                        
                      </li>
                      <li>
                        <ul class="list-inline">
                          <li>
                            <div class="icon">
                              <i class="fa fa-envelope-o fa-2x blue" aria-hidden="true"></i>      
                            </div>
                          </li>
                          <li class="text-center">
                            <div class="text">
                              1974denis@mail.ru    
                            </div>
                          </li>
                        </ul>
                        
                      </li>
                    </ul>  
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        <div class="top-menu top-5">
          <ul class="list-inline hidden-xs hidden-sm text-center top-menu-md-lg">
<?php
            if ($this->context->module->requestedAction->id == 'index') {
              $li_option = ['class' => 'active-menu'];
            }else{
              $li_option = ['class' => NULL];
            }
            echo Html::beginTag('li',$li_option);
                echo Html::a('Рулонные<br> шторы',['index']);
            echo Html::endTag('li');
            if ($this->context->module->requestedAction->id == 'vertical-blinds') {
              $li_option = ['class' => 'active-menu'];
            }else{
              $li_option = ['class' => NULL];
            }
            echo Html::beginTag('li',$li_option);
              echo Html::a('Вертикальные<br> жалюзи',['site/vertical-blinds']);
            echo Html::endTag('li');
            if ($this->context->module->requestedAction->id == 'horizontal-blinds') {
              $li_option = ['class' => 'active-menu'];
            }else{
              $li_option = ['class' => NULL];
            }
            echo Html::beginTag('li',$li_option);
              echo Html::a('Горизонтальные<br> жалюзи',['site/horizontal-blinds']);
            echo Html::endTag('li');
            if ($this->context->module->requestedAction->id == 'plisse') {
              $li_option = ['class' => 'active-menu'];
            }else{
              $li_option = ['class' => NULL];
            }
            echo Html::beginTag('li',$li_option);
              echo Html::a('Плиссе<br>'.Html::tag('span','.'),['site/plisse']);
            echo Html::endTag('li');
            if ($this->context->module->requestedAction->id == 'cornice') {
              $li_option = ['class' => 'active-menu'];
            }else{
              $li_option = ['class' => NULL];
            }
            echo Html::beginTag('li',$li_option);
              echo Html::a('Карнизы<br>'.Html::tag('span','.'),['site/cornice']);
            echo Html::endTag('li');
            if ($this->context->module->requestedAction->id == 'mosquito-nets') {
              $li_option = ['class' => 'active-menu'];
            }else{
              $li_option = ['class' => NULL];
            }
            echo Html::beginTag('li',$li_option);
              echo Html::a('Москитные<br> сетки',['site/mosquito-nets']);
            echo Html::endTag('li');
            if ($this->context->module->requestedAction->id == 'electro-blinds') {
              $li_option = ['class' => 'active-menu'];
            }else{
              $li_option = ['class' => NULL];
            }
            echo Html::beginTag('li',$li_option);
              echo Html::a('Электро<br> жалюзи',['site/electro-blinds']);
            echo Html::endTag('li');
?>          
          </ul>
          <ul class="list-unstyled top-menu-sm-xs">
            <li><?= Html::a('Рулонные шторы',['index']) ?></li>
            <li><?= Html::a('Вертикальные жалюзи',['site/vertical-blinds']) ?></li>
            <li><?= Html::a('Горизонтальные жалюзи',['site/horizontal-blinds']) ?></li>
            <li><?= Html::a('Плиссе',['site/plisse']) ?></li>
            <li><?= Html::a('Карнизы',['site/cornice']) ?></li></li>
            <li><?= Html::a('Москитные сетки',['site/mosquito-nets']) ?></li>
            <li><?= Html::a('Электро жалюзи',['site/electro-blinds']) ?></li>
          </ul>
        </div>
      </div>
    </header>
    <?= $content ?>
    
    <footer>
      <div class="container">
        <div class="top-footer">
          <div class="row">
            <div class="col-xs-6 col-sm-2 text-center">
              <a href="">
                <ul class="list-unstyled border">
                  <li><img src="images/footer/small_pack.png" alt="" height="80px;"></li>
                  <li>Москитная сетка</li>
                </ul>  
              </a>
              
            </div>
            <div class="col-xs-6 col-sm-2 text-center">
              <a href="">
                <ul class="list-unstyled border text-center">
                  <li><img src="images/footer/manual_mini.png" alt="" height="60px;"></li>
                  <li>Инструкция по установке</li>
                </ul>  
              </a>
              
            </div>
            <div class="col-xs-12 col-sm-4 call-gager text-center">
              <button class="btn btn-danger btn-xs">
                <img src="images/footer/roulette.png" alt=""> Вызвать замерщика
              </button>
              
            </div>
            <div class="col-xs-6 col-sm-2 text-center">
              <a href="">
                <ul class="list-unstyled border">
                  <li><img src="images/footer/manual-measurement.png" alt="" height="80px;"></li>
                  <li>Инструкция замера</li>
                </ul>  
              </a>
              
            </div>
            <div class="col-xs-6 col-sm-2 text-center">
              <a href="">
                <ul class="list-unstyled border">
                  <li><img src="images/footer/small_pack.png" alt="" width="80px;"></li>
                  <li>Готовые рулоны</li>
                </ul>  
              </a>
              
            </div>
          </div>
        </div>
        <div class="bottom-footer footer-lg hidden-xs hidden-sm">
          <div class="row">
            <div class="col-md-6"><a href=""><div class="logo"></div></a><span class="slogan"> - Жалюзи в Сочи. <span>С 8 до 19 часов, без выходных</span></span></div>
            <div class="col-md-3 text-center">
              <span class="tel">тел:</span>
              <span class="number">+7 (918) 001-26-01</span>
            </div>
            <div class="col-md-3 text-center">
              <span class="tel">e-mail:</span>
              <span class="email"><a href="mailto:1974denis@mail.ru">1974denis@mail.ru</a></span>
            </div>
          </div>
        </div>
        <div class="bottom-footer footer-xs visible-xs-block visible-sm-block">
          <div class="row">
            
            <div class="col-xs-6 text-center">
              <span class="tel">тел:</span>
              <span class="number">+7 (918) 001-26-01</span>
            </div>
            <div class="col-xs-6 text-center">
              <span class="tel">e-mail:</span>
              <span class="email"><a href="mailto:1974denis@mail.ru">1974denis@mail.ru</a></span>
            </div>
            <div class="col-xs-12 text-center top-10">
              <a href=""><div class="logo"></div></a><span class="slogan"> - Жалюзи в Сочи. <span>С 8 до 19 часов, без выходных</span></span>
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
