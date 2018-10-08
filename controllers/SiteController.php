<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
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
     * {@inheritdoc}
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
        return $this->render('index');
    }
    /**
     * [actionSay 参数]
     * @param  string $message [description]
     * @return [type]          [description]
     */
    public function actionSay( $message = 'Hello' ){
        return $this->render('say',['message'=>$message]);
    }
    /**
     * [actionEntry 表单接收]
     * @return [type] [description]
     */
    public function actionEntry(){
        $model = new EntryForm();
        // $model -> name = 'LiuXiaoYu';
        // $model -> email = '123';
        if ( $model->load(Yii::$app->request->post()) && $model->validate() ) {
            return $this -> render('entry-confirm',['model'=>$model]);
        } else {
            return $this -> render('entry',['model'=>$model]);
        }
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        if (!Yii::$app->user->isGuest) {
           // return $this->goHome();
        }

        $model  = new LoginForm();
        $dbUser = new User();

        if ($dbUser->load(Yii::$app->request->post()) && $dbUser->login()) {
            echo '<pre>';
            echo 1;
            echo 2;
            echo 3;
            echo '</pre>';
           // return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
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
