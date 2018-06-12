<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FacilityManagementDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Facility Management Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facility-management-details-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                                                                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        
                                        <?=  Html::a('<i class="fa-th-list"></i><span> Create Facility Management Details</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                                                                                                                                        <?= GridView::widget([
                                                'dataProvider' => $dataProvider,
                                                'filterModel' => $searchModel,
        'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],

                                                            'id',
            'type',
            'main_content:ntext',
            'image',
            'sub_title',
            // 'sub_content:ntext',
            // 'equipment_list:ntext',
            // 'status',
            // 'CB',
            // 'UB',
            // 'DOC',
            // 'DOU',

                                                ['class' => 'yii\grid\ActionColumn'],
                                                ],
                                                ]); ?>
                                                                                                                </div>
                        </div>
                </div>
        </div>
</div>


