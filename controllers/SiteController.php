<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
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
     * Log action.
     *
     * @return Response|string
     */
    public function actionLog()
    {
        $type = 'db';

        echo 'Method log called: ';
        echo '<br/ >';
        $this->log();

        echo 'Method logTo called with type: ' . $type;
        echo '<br/ >';
        $this->logTo($type);

        echo 'Method logToAll called : ';
        echo '<br/ >';
        $this->logToAll();
    }


    /**
     * Sends a log message to the default logger.
     */
    public function log()
    {

        Yii::$app->logger->send('LogMessage');
        echo '<br/ >';
        echo '<br/ >';
    }

    /**
     * Sends a log message to a special logger.
     * @param string $type
     */
    public function logTo(string $type)
    {
        Yii::$app->logger->sendByLogger('LogMessage',$type);
        echo '<br/ >';
        echo '<br/ >';
    }

    /**
     * Sends a log message to all loggers.
     */
    public function logToAll()
    {

        $this->logTo('db');
        $this->logTo('file');
        $this->logTo('email');
    }
}
