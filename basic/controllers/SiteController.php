<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Group;

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
                'only' => ['logout','nimda'],
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
                        'actions' => ['nimda'],
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
        
        return $this->render('cornice',[
                'group1' => $group1,
                'group2' => $group2,
                'group3' => $group3,
                'group4' => $group4,
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
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
