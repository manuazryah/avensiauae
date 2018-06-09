<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use common\models\Slider;
use common\models\About;
use common\models\ProjectGallery;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
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
     * {@inheritdoc}
     */
    public function actions() {
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
     * @return mixed
     */
    public function actionIndex() {
        $sliders = Slider::find()->where(['status' => 1])->all();
        $about_content = About::find()->where(['status' => 1])->one();
        return $this->render('index', [
                    'sliders' => $sliders,
                    'about_content' => $about_content,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        return $this->render('contact', [
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $about_content = About::find()->where(['status' => 1])->one();
        return $this->render('about', [
                    'about_content' => $about_content,
        ]);
    }

    /**
     * Displays GeneralTrading page.
     *
     * @return mixed
     */
    public function actionGeneralTrading($page = NULL) {
        return $this->render('general-trading');
    }

    /**
     * Displays IT page.
     *
     * @return mixed
     */
    public function actionIt($page = NULL) {
        return $this->render('it');
    }

    /**
     * Displays technical service page.
     *
     * @return mixed
     */
    public function actionTechnicalService($page = NULL) {
        return $this->render('technical-service');
    }

    /**
     * Displays facility-management page.
     *
     * @return mixed
     */
    public function actionFacilityManagement($page = NULL) {
        return $this->render('facility-management');
    }

    /**
     * Displays facility-management page.
     *
     * @return mixed
     */
    public function actionGallery() {
        $gallery_images = ProjectGallery::find()->where(['status' => 1])->all();
        return $this->render('gallery', [
                    'gallery_images' => $gallery_images,
        ]);
    }

    /**
     * Displays blog page.
     *
     * @return mixed
     */
    public function actionBlog() {
        return $this->render('blog', [
        ]);
    }

    /**
     * Displays blog details page.
     *
     * @return mixed
     */
    public function actionBlogDetails() {
        return $this->render('blog-details', [
        ]);
    }

    /**
     * Displays site map page.
     *
     * @return mixed
     */
    public function actionSitemap() {
        return $this->render('sitemap', [
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
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

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

}
