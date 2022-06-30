<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Register */
/* @var $form ActiveForm */
?>
<div class="text-center container bg-white border rounded-5 px-5 py-5">
    <h1 class="h3 mb-3 fw-normal">Sign up</h1>
    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'email', [
            'template' => '<div class="form-floating my-3">{input}{label}{error}</div>',
            'inputOptions' => [
                'id' => 'email',
                'class' => 'form-control'
            ],
            'labelOptions' => [
                'for' => 'email',
            ],
        ])->textInput()->label('Email') ?>
        <?= $form->field($model, 'username', [
            'template' => '<div class="form-floating my-3">{input}{label}{error}</div>',
            'inputOptions' => [
                'id' => 'username',
                'class' => 'form-control'
            ],
            'labelOptions' => [
                'for' => 'username',
            ],
        ])->textInput()->label('Username') ?>
        <?= $form->field($model, 'password', [
            'template' => '<div class="form-floating my-3">{input}{label}{error}</div>',
            'inputOptions' => [
                'id' => 'passUser',
                'class' => 'form-control'
            ],
            'labelOptions' => [
                'for' => 'passUser',
            ],
        ])->passwordInput()->label('Password') ?>
        <?= $form->field($model, 'conf_pass', [
            'template' => '<div class="form-floating my-3">{input}{label}{error}</div>',
            'inputOptions' => [
                'id' => 'passRepeat',
                'class' => 'form-control'
            ],
            'labelOptions' => [
                'for' => 'passRepeat',
            ],
        ])->passwordInput()->label('Confirmed Password') ?>
        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => '<div class="mb-3">{input}{label}{error}</div>',
            'class' => 'form-check-input me-3',
            'labelOptions' => [
                'class' => 'form-check-label',
            ]
        ]) ?>
        <?= Html::submitButton('Sign up', ['class' => 'w-100 btn btn-lg btn-primary']) ?>
    <?php ActiveForm::end(); ?>
    <p class="mt-5 mb-3 text-muted">© 2022</p>
    <script>
        $("input[type=hidden]").removeAttr('value');
    </script>
</div>
