<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\TourPackages;
use common\models\TourPackagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TourPackagesController implements the CRUD actions for TourPackages model.
 */
class TourPackagesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    
    /**
     * Lists all Car Packages models.
     * @return mixed
     */
    public function actionCarPackages()
    {
        $searchModel = new TourPackagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['package_type' => 1]);

        return $this->render('car-package', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Lists all Tempo Traveler  models.
     * @return mixed
     */
    public function actionTempoTraveler()
    {
        $searchModel = new TourPackagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere(['package_type' => 2]);

        return $this->render('tempo-traveler', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TourPackages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TourPackages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateCarPackage()
    {
        $model = new TourPackages();

        $model->setScenario('create');

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $model->image = $image->extension;
            $model->package_type = 1;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/tour-packages/' . $model->id . '/';
                    $size = [
                            ['width' => 100, 'height' => 100, 'name' => 'small'],
                            ['width' => 798, 'height' => 466, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
                Yii::$app->session->setFlash('success', "New Package added Successfully");
                $model = new TourPackages();
            }
        }return $this->render('_form_car_package', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing TourPackages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdateCarPackage($id)
    {
        $model = $this->findModel($id);
        $image_ = $model->image;

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            if (!empty($image))
                $model->image = $image->extension;
            else
                $model->image = $image_;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/tour-packages/' . $model->id . '/';
                    $size = [
                            ['width' => 100, 'height' => 100, 'name' => 'small'],
                            ['width' => 798, 'height' => 466, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
            }
            Yii::$app->session->setFlash('success', "Package Updated Successfully");
            return $this->redirect(['update-car-package', 'id' => $model->id]);
        }

        return $this->render('_form_car_package', [
                    'model' => $model,
        ]);
    }
    
    /**
     * Creates a new TourPackages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateTravelerPackage()
    {
        $model = new TourPackages();

        $model->setScenario('create');

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $model->image = $image->extension;
            $model->package_type = 2;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/tour-packages/' . $model->id . '/';
                    $size = [
                            ['width' => 100, 'height' => 100, 'name' => 'small'],
                            ['width' => 798, 'height' => 466, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
                Yii::$app->session->setFlash('success', "New Package added Successfully");
                $model = new TourPackages();
            }
        }return $this->render('_form_traveler_package', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing TourPackages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdateTravelerPackage($id)
    {
        $model = $this->findModel($id);
        $image_ = $model->image;

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            if (!empty($image))
                $model->image = $image->extension;
            else
                $model->image = $image_;
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/tour-packages/' . $model->id . '/';
                    $size = [
                            ['width' => 100, 'height' => 100, 'name' => 'small'],
                            ['width' => 798, 'height' => 466, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
            }
            Yii::$app->session->setFlash('success', "Package Updated Successfully");
            return $this->redirect(['update-traveler-package', 'id' => $model->id]);
        }

        return $this->render('_form_traveler_package', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TourPackages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TourPackages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TourPackages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TourPackages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
