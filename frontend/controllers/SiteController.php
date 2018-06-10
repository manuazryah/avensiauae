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
        $testimonials = \common\models\Testimonial::find()->where(['status' => 1])->orderBy(['DOU' => SORT_DESC])->limit(2)->all();
        $blogs = \common\models\Blog::find(['status' => 1])->orderBy(['DOU' => SORT_DESC])->limit(3)->all();
        return $this->render('index', [
                    'sliders' => $sliders,
                    'about_content' => $about_content,
                    'testimonials' => $testimonials,
                    'blogs' => $blogs,
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
        $contact_addresses = \common\models\ContactAddress::find()->all();
        $model = new \common\models\ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->date = date('Y-m-d');
            if ($model->save()) {
                $this->sendContactMail($model);
                Yii::$app->session->setFlash('success', 'Your contact request send successfully.');
                $model = new \common\models\ContactForm();
            }
        }
        return $this->render('contact', [
                    'contact_addresses' => $contact_addresses,
        ]);
    }

    /*
     * Contact Enguery mail function
     */

    public function sendContactMail($model) {
        $to = "manu@azryah.com";
//        $to = 'bookings@venicecabs.com';
        $subject = "Contact Request";

        $message = "
<html>
<head>

</head>
<body>
<table>

<tr>

<th>Name</th>
<th>:-</th>
<td>" . $model->name . "</td>
         </tr>
<tr>

<th>Email</th>
<th>:-</th>
<td>" . $model->email . "</td>
         </tr>

<tr>


<th>Phone No</th>
<th>:-</th>
<td>" . $model->phone . "</td>
         </tr>

<tr>

<th>Message</th>
<th>:-</th>
<td>" . $model->message . "</td>
         </tr>

</table>
</body>
</html>
";
// Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From: ' . $model->email . "\r\n";
        $headers .= "To: $to\r\n";
        mail($to, $subject, $message, $headers);
        return TRUE;
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
        if (!empty($page) && $page != '') {
            $general_traid = \common\models\GeneralTrading::find()->where(['canonical_name' => $page])->one();
        } else {
            $general_traid = \common\models\GeneralTrading::find()->where(['id' => 1])->one();
        }
        return $this->render('general-trading', [
                    'general_traid' => $general_traid,
        ]);
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
        $blogs = \common\models\Blog::find()->where(['status' => 1])->all();
        return $this->render('blog', [
                    'blogs' => $blogs,
        ]);
    }

    /**
     * Displays blog details page.
     *
     * @return mixed
     */
    public function actionBlogDetails($id) {
        $blog_detail = \common\models\Blog::find()->where(['id' => $id])->one();
        $blogs = \common\models\Blog::find()->where(['status' => 1])->orderBy(['DOU' => SORT_DESC])->limit(15)->all();
        return $this->render('blog-details', [
                    'blog_detail' => $blog_detail,
                    'blogs' => $blogs,
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
