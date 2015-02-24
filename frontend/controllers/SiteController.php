<?php
namespace frontend\controllers;

use common\models\Quest;
use common\models\Menu;
use common\models\SearchMenu;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\base\Model;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\controllers\QuestController;

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
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    public function actionIndex()
    {
        /*$sub_menu_array = null;
        $q = new Quest();
        $menuClass = new Menu();
        $navigationPanel = $menuClass->find()->where('is_active = 1')->all();
        for ($i = 0; $i<count($navigationPanel);$i++){
            $sub_menu_array[$navigationPanel[$i]['id']] = array("Quest1","Quest2","Quest3", $navigationPanel[$i]["menu_title"]);
        }
        $sub_menu_array[2] = array();
        Yii::$app->params['nav_array'] = $navigationPanel;
        Yii::$app->params['sub_menu_array'] = $sub_menu_array;*/
        $menuClass = new Menu();
        Yii::$app->params['nav_array'] = $menuClass->find()->where('is_active = 1')->all();
        //return $this->render('index',['cust' => $test]);
        return $this->render('index');
    }

    public function actionLogin()
    {
        $this->layout = false;
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
            /*return $this->renderPartial('login', [
                'model' => $model,
            ]);*/
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionQuest()
    {
        $menuClass = new Menu();
        Yii::$app->params['nav_array'] = $menuClass->find()->where('is_active = 1')->all();
        return $this->render('quest');
    }

    public function actionProfile()
    {
        $menuClass = new Menu();
        Yii::$app->params['nav_array'] = $menuClass->find()->where('is_active = 1')->all();
        return $this->render('profile');
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            $menuClass = new Menu();
            Yii::$app->params['nav_array'] = $menuClass->find()->where('is_active = 1')->all();
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        $menuClass = new Menu();
        Yii::$app->params['nav_array'] = $menuClass->find()->where('is_active = 1')->all();
        return $this->render('about');
    }

    public function actionGamespace()
    {
        $menuClass = new Menu();
        Yii::$app->params['nav_array'] = $menuClass->find()->where('is_active = 1')->all();
        return $this->render('game_space');
    }

    public function actionGames()
    {
        $q = new Quest();
        $menuClass = new Menu();
        Yii::$app->params['nav_array'] = $menuClass->find()->where('is_active = 1')->all();
        $test = array('1'=>'123123','2'=>'fdsfsdfew');
        //return $this->render('index',['cust' => $test]);
        return $this->render('games',['cust' => $test]);
    }

    public function actionSignup()
    {
        $menuClass = new Menu();
        Yii::$app->params['nav_array'] = $menuClass->find()->where('is_active = 1')->all();
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
