<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>
<div class="header-inner">
    <div class="logo with-shadow">
        <a href="/">
            <img src="/public/img/PaulAls2.png" style="pointer-events: none" alt="PaulALs">
        </a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <?php

            if (Yii::$app->user->isGuest):?>
                <li><a href="<?= Url::toRoute(['auth/login']) ?>">Login</a></li>
                <li><a href="<?= Url::toRoute(['auth/signup']) ?>">Register</a></li>
            <?php else: ?>
                <?= Html::beginForm(['/auth/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->name . ')',
                    ['class' => 'btn btn-link logout', 'style' => "padding-top:10px;"]
                )
                . Html::endForm() ?>
            <?php endif; ?>
        </div>

        <!--SOCIAL CONTENT-->
        <div class="col-sm-6">
            <div class="modal-soc">

                <!-- Быстрые Заметки -->
                <ul id="menu-notes" class="menu-commet-li">
                    <?php $form = ActiveForm::begin([
                            'action'=>['site/message'],'options'=> ['class'=> 'add', 'role'=> 'form']]); ?>

                    <?= $form->field($chatForm, 'message',['options'=>['class'=>'form-group add-msg','id'=> 'add']])->
                    textInput(['autocomplete'=>'off','placeholder'=>'Добавьте комментарий...', 'style'=>'color: #fff;  background: none; border: none;']
                        )->label(false);?>

                    <?php ActiveForm::end() ?>
                </ul>

                <?php foreach ($fastComment as $chat): ?>
                    <li id="menu-add-comment" class="menu-commet-li">
                        <div class="menu-add-comment-wrap">
                            <div class="photo-wrap text-right">
                                <a href="https://vk.com/id<?= $chat->user->id ?>" id="menu-add-comment-photo"><img width="50" style="border-radius: 5px;"
                                                                             src="<?= $chat->user->image; ?>"
                                                                             alt=""></a>
                            </div>
                            <div class="message-wrap text-right">

                                <a href="https://vk.com/id<?= $chat->user->id ?>" id="menu-add-comment-name"><?= $chat->user->name; ?></a>

                                <p id="menu-add-comment-note">
                                    <?= $chat->text; ?>
                                </p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
</div>
