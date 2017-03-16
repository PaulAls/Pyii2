<?php

namespace app\controllers;

use app\models\Article;
use app\models\Category;
use app\models\Chat;
use app\models\ChatForm;
use app\models\CommentForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{


    /**
     * @inheritdoc
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
        if(Yii::$app->user->isGuest)  return $this->redirect(['login']);
        $chatForm = new ChatForm();
        $fastComment = Chat::getRecent();
        $lastVideoYouTube = 'https://www.youtube.com/watch?v=EtHifo-LIrg';

        return $this->render('index', [
            'fastComment'=>$fastComment,
            'chatForm'=>$chatForm,
            'lastVideoYouTube'=> $lastVideoYouTube
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
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


    public function actionEvents()
    {

        $chatForm = new ChatForm();
        $fastComment = Chat::getRecent();
        return $this->render('event', [
            'fastComment'=>$fastComment,
            'chatForm'=>$chatForm

        ]);
    }

    public function actionMessage($chat_id = 1)
    {
        $model = new ChatForm();

        if (Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());

            if ($model->saveMessage($chat_id))
            {
                $user = User::findByUserId(Yii::$app->user->id);

              // return $this->redirect(['index']);
                $json = array(
                    'message'=> $model->message,
                    'user_name'=> $user->name,
                    'photo'=> $user->image
                );

                return $this->asJson($json);
            }
        }

        return $this->redirect(['index']);
    }



    public function actionOur()
    {

        $recent = Article::getRecent();
        $commentForm = new CommentForm();

        return $this->render('our', [
            'recent' => $recent,
            'commentForm' => $commentForm
        ]);
    }

    public function actionGallery()
    {
        $this->layout = 'main-empty';
        if(Yii::$app->user->isGuest)  return $this->redirect(['login']);
        $chatForm = new ChatForm();
        $fastComment = Chat::getRecent();
        $lastVideoYouTube = 'https://www.youtube.com/watch?v=EtHifo-LIrg';


        return $this->render('gallery', [
            'fastComment'=>$fastComment,
            'chatForm'=>$chatForm,
            'lastVideoYouTube'=> $lastVideoYouTube
        ]);
    }

}
