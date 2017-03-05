<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" style="float: left">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <container>
        <row>
            <clo-md-3>
                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                <div style="width: 30px; height: 30px;"></div>
                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
                <div style="width: 30px; height: 30px;"></div>
                <?= $form->field($model, 'password')->passwordInput() ?>
            </clo-md-3>
            <col-md-9>

            </col-md-9>
        </row>
    </container>


    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>


</div>
