<?php
namespace frontend\controllers;

use common\models\Quest;
use common\models\Menu;
use common\models\QuestsTimes;
use backend\models\QuestsImages;
use common\models\User;
use common\models\SearchMenu;
use frontend\models\QuestOwners;
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
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */

    /*public function behaviors()
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
    }*/

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
                    /*[
                        'actions' => ['about','contact'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return User::isUserAdmin(Yii::$app->user->identity->username);
                        }
                    ],*/
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        /*$q = new Quest();
        $questTimes = new QuestsTimes();

        $questsArray = $q->find()->all();

        $partialWithData = $this->renderPartial('//partials/_index_form',[
            'questTimeModel' => $questTimes->getTimeOneLineForQuest('all',false),
        ]);
        return $this->render('index', [
            'partial' => $partialWithData,
            'questsArray' => $questsArray
        ]);*/
        /*$directory = "img/index-images";
        $images = glob($directory . "*.jpg");*/

        $dir = "img/index-images";
        $files = [];
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            if($filename !== '.' && $filename !== '..') {
                $files[] = $filename;
            }
        }

        return $this->render('index',[
            'index_files_array' => $files
        ]);
    }

    public function actionLogin()
    {
        $this->layout = false;
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if (Yii::$app->request->isAjax){
            $model->email = Yii::$app->request->post('username');
            $model->password = Yii::$app->request->post('password');

            if ($model->validate() && $model->login()) return 'true';
            else return 'false';
        }

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
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

    public function actionQuest($name)
    {
        $q = new Quest();
        $questImages = new QuestsImages();

        $questTimes = new QuestsTimes();

        $questDataModel = $this->findModel($name);

        if ($questDataModel['quest_status'] == 1) {
            $questInfoModel = new QuestOwners();

            $partialWithData = $this->renderPartial('//partials/_quest_time', [
                'model' => $questDataModel,
                'questTimeModel' => $questTimes->getTimeLineForQuest($q->getQuestIdByName($name)),
            ]);
            return $this->render('quest', [
                'partial' => $partialWithData,
                'place_info' => $questInfoModel->find()->where("id=" . $questDataModel['quest_creator'])->asArray()->one(),
                'imagesModel' => $questImages->getQuestImages($questDataModel['id'], $questDataModel['id'])
            ]);
        } else {
            return $this->redirect(404);
        }

    }

    public function actionQuests()
    {
        /*$q = new Quest();
        $questsArray = $q->find()->all();
        return $this->render('quests',[
            'quest_model' => $questsArray
        ]);*/

        $q = new Quest();

        $questTimes = new QuestsTimes();

        $questsArray = $q->findBySql("select *,quests.id from  quests
                        join quest_owners on quests.quest_creator = quest_owners.id
                        ")->asArray()->all();

        $partialWithData = $this->renderPartial('//partials/_index_form',[
            'questTimeModel' => $questTimes->getTimeOneLineForQuest('all',false),
        ]);

        return $this->render('quests', [
            'partial' => $partialWithData,
            'quest_model' => $questsArray,
            'questsArray' => $questsArray
        ]);
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

            $q = new Quest();

            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function  actionGift()
    {
        return $this->render('gift');
    }

    public function actionFranchize()
    {
        return $this->render('franchize');
    }

    public function actionAbout()
    {
        $q = new Quest();
        return $this->render('about');
    }

    public function actionGamespace()
    {
        $this->layout = false;
        return $this->render('game_space');
    }

    public function actionGames()
    {
        return $this->render('games');
    }

    public function actionIsLoggedIn()
    {
        return \Yii::$app->user->isGuest;
    }

    public function actionSignup()
    {
        $this->layout = false;
        /*$menuClass = new Menu();*/
        $q = new Quest();
        /*Yii::$app->params['nav_array'] = $menuClass->find()->where('is_active = 1')->all();
        Yii::$app->params['quests_direct_link'] = [[],$q->find()->all(),[],[],[]];*/
        $model = new SignupForm();

        if (Yii::$app->request->isAjax){
            $model->username = Yii::$app->request->post('username');
            $model->password = Yii::$app->request->post('password');
            $model->email = Yii::$app->request->post('email');
            $model->phone = Yii::$app->request->post('phone');

            if ($model->validate() && $user = $model->signup()) {
                Yii::$app->getUser()->login($user);
                return 'true';
            } else {
                return $model->validate();
            }

        }

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

    protected function findModel($name)
    {
        if (($model = Quest::find()->where('quest_en_name = "'.$name . '"')->asArray()->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionError()
    {
        /*$error = Yii::$app->errorHandler->error;
        if ($error)
            $this->render('error', array('error'=>$error));
        else
            throw new CHttpException(404, 'Page not found.');*/


        $this->layout = false;
        return $this->render('error', array('error'=>'dsadas'));
    }

}
