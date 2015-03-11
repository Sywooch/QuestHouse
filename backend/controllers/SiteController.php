<?php
namespace backend\controllers;

use common\models\User;
use Yii;
use yii\base\ErrorException;
use yii\base\Exception;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\HttpException;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
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
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        //'actions' => ['index'],
                        'allow' => true,
                        //'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            if (!User::isUserAdmin(Yii::$app->user->identity->username)) {
                                //return $this->redirect('../');
                                //return $this->redirect(Yii::$app->homeUrl.'../404');
                                throw new HttpException(404,"dsa");
                            } else return User::isUserAdmin(Yii::$app->user->identity->username);
                        }
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
            /*'error' => [
                'class' => 'yii\web\ErrorAction',
            ],*/
        ];
    }

    public function actionIndex()
    {
        //$test = User::find()->where('id > 0')->asArray()->all();
        //$hi = ['1' => 'privet','2' => 'privet snova'];
        //return $this->render('index',['cust' => $test]);
        return $this->render('index');
    }

    public function actionLogin()
    {
        /*if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }*/

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->loginAdmin()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionError()
    {

        $this->layout = false;
        return $this->render('error', array('error'=>'dsadas'));
        /*$error = Yii::$app->errorHandler->error;
        if ($error)
            $this->render('error', array('error'=>$error));
        else
            throw new CHttpException(404, 'Page not found.');*/
    }

}
