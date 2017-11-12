<?php

use GuzzleHttp\Psr7\Uri;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BranchesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Branches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branches-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button(
                'Create Branches',
            [
                'class' => 'btn btn-success',
                'value' => Url::to('index.php?r=branches/create'),
                'id' => 'modalButton'
            ]
            )
        ?>
    </p>
    <?php
        Modal::begin([
            'header' => '<h4>Create branches</h4>',
            'id' => 'modal',
            'size' => 'modal-lg'
        ]);

        echo '<div id="modalContent"></div>';

        Modal::end();
    ?>
    <?php Pjax::begin(); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'rowOptions' => function($model)  {
                if ($model->branch_status === 'inactive') {
                    return [
                        'class' => 'danger'
                    ];
                } else {
                    return [
                        'class' => 'success'
                    ];
                }
            },
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'companies_company_id',
                    'value' => 'companiesCompany.company_name'
                ],
                'branch_name',
                'branch_address',
                'branch_created_date',
                // 'branch_status',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    <?php Pjax::end() ?>
</div>
