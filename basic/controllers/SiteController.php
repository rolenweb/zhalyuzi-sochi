<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Group;
use app\models\User;

class SiteController extends Controller
{
    public $layout = "front";
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','nimda','setting','save-password'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['nilog','index'],
                        'allow' => true,
                        'roles' => ['?'],
                        
                    ],
                    [
                        'actions' => ['nimda','setting','save-password'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'front';
        $group1 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Рулонные шторы',
                    ],
                    [
                        'category.title' => 'Рулонные шторы',
                    ]
            ]
        )->limit(1)->one();
        $group2 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Кассетные рулонные шторы',
                    ],
                    [
                        'category.title' => 'Рулонные шторы',
                    ]
            ]
        )->limit(1)->one();
        $group3 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Рулонные шторы зебра',
                    ],
                    [
                        'category.title' => 'Рулонные шторы',
                    ]
            ]
        )->limit(1)->one();
        $group4 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Кассетные рулонные шторы зебра',
                    ],
                    [
                        'category.title' => 'Рулонные шторы',
                    ]
            ]
        )->limit(1)->one();

        Yii::$app->view->registerMetaTag(
                    [
                        'name' => 'generator',
                        'content' => 'RolenWeb(http://rolenweb.ru)',

                    ]
                );

        return $this->render('index',[
                'group1' => $group1,
                'group2' => $group2,
                'group3' => $group3,
                'group4' => $group4,
            ]);
    }
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionVerticalBlinds()
    {
        $this->layout = 'front';
       
        $group1 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Вертикальные жалюзи',
                    ],
                    [
                        'category.title' => 'Вертикальные жалюзи',
                    ]
            ]
        )->limit(1)->one();
        $group2 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Пластиковые вертикальные жалюзи',
                    ],
                    [
                        'category.title' => 'Вертикальные жалюзи',
                    ]
            ]
        )->limit(1)->one();
        $group3 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Мультифактурные',
                    ],
                    [
                        'category.title' => 'Вертикальные жалюзи',
                    ]
            ]
        )->limit(1)->one();
        $group4 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Бриз',
                    ],
                    [
                        'category.title' => 'Вертикальные жалюзи',
                    ]
            ]
        )->limit(1)->one();

        Yii::$app->view->registerMetaTag(
                    [
                        'name' => 'generator',
                        'content' => 'RolenWeb(http://rolenweb.ru)',

                    ]
                );

        return $this->render('vertical_blinds',[
                'group1' => $group1,
                'group2' => $group2,
                'group3' => $group3,
                'group4' => $group4,
            ]);
    }


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionHorizontalBlinds()
    {
        $this->layout = 'front';
       
        $group1 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Алюминиевые жалюзи',
                    ],
                    [
                        'category.title' => 'Горизонтальные жалюзи',
                    ]
            ]
        )->limit(1)->one();
        $group2 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Кассетные алюминевые',
                    ],
                    [
                        'category.title' => 'Горизонтальные жалюзи',
                    ]
            ]
        )->limit(1)->one();
        $group3 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Деревянные жалюзи',
                    ],
                    [
                        'category.title' => 'Горизонтальные жалюзи',
                    ]
            ]
        )->limit(1)->one();
        $group4 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Пластиковые жалюзи',
                    ],
                    [
                        'category.title' => 'Горизонтальные жалюзи',
                    ]
            ]
        )->limit(1)->one();

        Yii::$app->view->registerMetaTag(
                    [
                        'name' => 'generator',
                        'content' => 'RolenWeb(http://rolenweb.ru)',

                    ]
                );

        return $this->render('horizontal_blinds',[
                'group1' => $group1,
                'group2' => $group2,
                'group3' => $group3,
                'group4' => $group4,
            ]);
    }

    

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionPlisse()
    {
        $this->layout = 'front';
       
        $group1 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Плиссе',
                    ],
                    [
                        'category.title' => 'Плиссе',
                    ]
            ]
        )->limit(1)->one();
        $group2 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Плиссе на мансардные окна',
                    ],
                    [
                        'category.title' => 'Плиссе',
                    ]
            ]
        )->limit(1)->one();

        Yii::$app->view->registerMetaTag(
                    [
                        'name' => 'generator',
                        'content' => 'RolenWeb(http://rolenweb.ru)',

                    ]
                );

        return $this->render('plisse',[
                'group1' => $group1,
                'group2' => $group2,
                
            ]);
    }
    
    public function actionCornice()
    {
        $this->layout = 'front';
        $group1 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Однорядный карниз',
                    ],
                    [
                        'category.title' => 'Карнизы',
                    ]
            ]
        )->limit(1)->one();
        $group2 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Карниз с липучкой',
                    ],
                    [
                        'category.title' => 'Карнизы',
                    ]
            ]
        )->limit(1)->one();
        $group3 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Двухрядный карниз',
                    ],
                    [
                        'category.title' => 'Карнизы',
                    ]
            ]
        )->limit(1)->one();
        $group4 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Карниз для раздвижных штор',
                    ],
                    [
                        'category.title' => 'Карнизы',
                    ]
            ]
        )->limit(1)->one();

        Yii::$app->view->registerMetaTag(
                    [
                        'name' => 'generator',
                        'content' => 'RolenWeb(http://rolenweb.ru)',

                    ]
                );
        
        return $this->render('cornice',[
                'group1' => $group1,
                'group2' => $group2,
                'group3' => $group3,
                'group4' => $group4,
            ]);
    }
    
    public function actionMosquitoNets()
    {
        $this->layout = 'front';
        $group1 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Рамочная',
                    ],
                    [
                        'category.title' => 'Москитные сетки',
                    ]
            ]
        )->limit(1)->one();
        $group2 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Рулонная',
                    ],
                    [
                        'category.title' => 'Москитные сетки',
                    ]
            ]
        )->limit(1)->one();
        $group3 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Дверь',
                    ],
                    [
                        'category.title' => 'Москитные сетки',
                    ]
            ]
        )->limit(1)->one();
        $group4 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Антикошка',
                    ],
                    [
                        'category.title' => 'Москитные сетки',
                    ]
            ]
        )->limit(1)->one();
        $group5 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Дверь плиссе',
                    ],
                    [
                        'category.title' => 'Москитные сетки',
                    ]
            ]
        )->limit(1)->one();

        Yii::$app->view->registerMetaTag(
                    [
                        'name' => 'generator',
                        'content' => 'RolenWeb(http://rolenweb.ru)',

                    ]
                );
        
        return $this->render('mosquito-nets',[
                'group1' => $group1,
                'group2' => $group2,
                'group3' => $group3,
                'group4' => $group4,
                'group5' => $group5,
            ]);
    }
    
    public function actionElectroBlinds()
    {
        $this->layout = 'front';
        $group1 = Group::find()->joinWith(['subCategory.category'])->where(
            [
                'and',
                    [
                        'sub_category.title' => 'Электро жалюзи',
                    ],
                    [
                        'category.title' => 'Электро жалюзи',
                    ]
            ]
        )->limit(1)->one();
        
        Yii::$app->view->registerMetaTag(
                    [
                        'name' => 'generator',
                        'content' => 'RolenWeb(http://rolenweb.ru)',

                    ]
                );
        
        return $this->render('electro-blinds',[
                'group1' => $group1,
        
            ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionNigol()
    {
        $this->layout = 'main';
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['site/nimda']);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['site/nimda']);
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * admin action.
     *
     * @return string
     */
    public function actionNimda()
    {
        $this->layout = 'main';
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/nigol']);
        }

        return $this->render('admin/index', [
            
        ]);
    }

    /**
     * admin action.
     *
     * @return string
     */
    public function actionSetting()
    {
        $this->layout = 'main';
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/nigol']);
        }

        return $this->render('admin/setting', [
            
        ]);
    }
    
    public function actionLoadMaterial()
    {
        
        
        if(Yii::$app->request->isAjax){

            $error = [];
            $info = [];

            $post_data = Yii::$app->request->post();


            if (!isset($post_data)) {
                $error[] = 'The post data is not set';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }

            if (!isset($post_data['page'])) {
                $error[] = 'The page id is not set';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }

            if (!isset($post_data['category'])) {
                $error[] = 'The category id is not set';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }
            $groups = NULL;
            if ($post_data['page'] == 'index') {
                if ($post_data['category'] == 1) {
                    $groups = Group::find()->joinWith(['subCategory.category'])->where(
                        [
                            'and',
                                [
                                    'sub_category.title' => 'Рулонные шторы',
                                ],
                                [
                                    'category.title' => 'Рулонные шторы',
                                ]
                        ]
                    )->all();
                }
                if ($post_data['category'] == 2) {
                    $groups = Group::find()->joinWith(['subCategory.category'])->where(
                        [
                            'and',
                                [
                                    'sub_category.title' => 'Кассетные рулонные шторы',
                                ],
                                [
                                    'category.title' => 'Рулонные шторы',
                                ]
                        ]
                    )->all();
                }
                if ($post_data['category'] == 3) {
                    $groups = Group::find()->joinWith(['subCategory.category'])->where(
                        [
                            'and',
                                [
                                    'sub_category.title' => 'Рулонные шторы зебра',
                                ],
                                [
                                    'category.title' => 'Рулонные шторы',
                                ]
                        ]
                    )->all();
                }
                if ($post_data['category'] == 4) {
                    $groups = Group::find()->joinWith(['subCategory.category'])->where(
                        [
                            'and',
                                [
                                    'sub_category.title' => 'Кассетные рулонные шторы зебра',
                                ],
                                [
                                    'category.title' => 'Рулонные шторы',
                                ]
                        ]
                    )->all();
                }

                return $this->renderAjax('calculator/modal/_material_rulon', [
                    'groups' => $groups,
                    
                ]);
            }
            if ($post_data['page'] == 'vertical-blinds') {
                if ($post_data['category'] == 1) {
                    $groups = Group::find()->joinWith(['subCategory.category'])->where(
                        [
                            'and',
                                [
                                    'sub_category.title' => 'Вертикальные жалюзи',
                                ],
                                [
                                    'category.title' => 'Вертикальные жалюзи',
                                ]
                        ]
                    )->all();
                }
                return $this->renderAjax('calculator/modal/_material_rulon', [
                    'groups' => $groups,
                    
                ]);
            }   

            if ($post_data['page'] == 'horizontal-blinds') {
                if ($post_data['category'] == 1) {
                    $groups = Group::find()->joinWith(['subCategory.category'])->where(
                        [
                            'and',
                                [
                                    'sub_category.title' => 'Алюминиевые жалюзи',
                                ],
                                [
                                    'category.title' => 'Горизонтальные жалюзи',
                                ]
                        ]
                    )->all();
                }
                if ($post_data['category'] == 2) {
                    $groups = Group::find()->joinWith(['subCategory.category'])->where(
                        [
                            'and',
                                [
                                    'sub_category.title' => 'Кассетные алюминевые',
                                ],
                                [
                                    'category.title' => 'Горизонтальные жалюзи',
                                ]
                        ]
                    )->all();
                }

                return $this->renderAjax('calculator/modal/_material_horizontal_blinds', [
                    'groups' => $groups,
                    
                ]);
            }

            if ($post_data['page'] == 'plisse') {
                if ($post_data['category'] == 1) {
                    $groups = Group::find()->joinWith(['subCategory.category'])->where(
                        [
                            'and',
                                [
                                    'sub_category.title' => 'Плиссе',
                                ],
                                [
                                    'category.title' => 'Плиссе',
                                ]
                        ]
                    )->all();
                }
                if ($post_data['category'] == 2) {
                    $groups = Group::find()->joinWith(['subCategory.category'])->where(
                        [
                            'and',
                                [
                                    'sub_category.title' => 'Плиссе на мансардные окна',
                                ],
                                [
                                    'category.title' => 'Плиссе',
                                ]
                        ]
                    )->all();
                }

                return $this->renderAjax('calculator/modal/_material_rulon', [
                    'groups' => $groups,
                    
                ]);
            }    
            

        }
        
        else{
            Yii::$app->session->setFlash('error', 'Fuck, hands off of this page.');
            return $this->redirect(['site/index']);
        }
    }

    
    public function actionSendOrder()
    {
        
        
        if(Yii::$app->request->isAjax){

            $error = [];
            $info = [];

            $post_data = Yii::$app->request->post();


            if (!isset($post_data)) {
                $error[] = 'The post data is not set';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }

            if (!isset($post_data['name'])) {
                $error[] = 'The name id is not set';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }

            if (!isset($post_data['phone'])) {
                $error[] = 'The phone id is not set';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }
            if (!isset($post_data['captcha'])) {
                $error[] = 'The phone id is not set';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }

            if ((int)$post_data['captcha'] !== (int)$post_data['c1']+(int)$post_data['c2']) {
                $error[] = 'Пожалуйста введите код защиты еще раз';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }
            
            if ($this->sendOrder($post_data)) {
                $info[] = 'Спасибо за ваше обращение, мы свяжемся с вами в ближайшее время';
                return $this->renderAjax('_result', [
                    'info' => $info,
                ]);   
            }

        }
        
        else{
            Yii::$app->session->setFlash('error', 'Fuck, hands off of this page.');
            return $this->redirect(['site/index']);
        }
    }


    public function actionSavePassword()
    {
        
        
        if(Yii::$app->request->isAjax){

            $error = [];
            $info = [];

            $post_data = Yii::$app->request->post();


            if (!isset($post_data)) {
                $error[] = 'The post data is not set';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }

            if (!isset($post_data['password'])) {
                $error[] = 'The password id is not set';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }
            
            $user = User::findOne(Yii::$app->user->identity->id);

            if ($user == NULL) {
                $error[] = 'The user id is not found';
                return $this->renderAjax('_result', [
                    'error' => $error,
                ]);
            }
            $user->setPassword(trim($post_data['password']));

            if ($user->save()) {
                $info[] = 'Пароль сохранен';
                return $this->renderAjax('_result', [
                    'info' => $info,
                ]);
            }else{
                foreach ($user->getErrors() as $er) {
                    $error[] = $er[0];
                }
                return $this->renderAjax('_error', [
                   'error' => $error,
                ]);
            }
                        
            

        }
        
        else{
            Yii::$app->session->setFlash('error', 'Fuck, hands off of this page.');
            return $this->redirect(['site/index']);
        }
    }
    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $this->layout = 'front';
        
        return $this->render('contact');
    }

    public function sendOrder($order)
    {
        Yii::$app->mailer->compose('order', ['order' => $order])
                ->setTo(Yii::$app->params['orderEmail'])
                ->setFrom([Yii::$app->params['adminEmail'] => 'Жалюзи в Сочи'])
                ->setSubject('Заказ')
                ->send();

            return true;
    }
}
