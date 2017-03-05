<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <?php use yii\helpers\Html;
            use yii\helpers\Url;
            use yii\widgets\ActiveForm;

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

        <button class="btn btn-success" id="btn-aj">Click</button>

        <!--SOCIA
        L CONTENT-->
        <div class="col-sm-6">
            <div class="modal-soc">
                <ul id="menu-notes" class="menu-commet-li">
                    <!-- Быстрые Заметки -->

                    <?php $form = ActiveForm::begin(); ?>
                    <form class="add" action="">
                        <input class="add-msg" aria-label="Добавьте комментарий..."
                               placeholder="Добавьте комментарий..."
                               style=
                               "
                                background: none;
                                color: #fff;
                                font-size: 15px;
                                border: none;
                                "
                               type="text" value="">
                    </form>
                    <?php ActiveForm::end(); ?>

                    <!-- Быстрые Заметки -->

                </ul>

                <?php foreach ($fastComment as $chat): ?>
                    <li id="menu-add-comment" class="menu-commet-li">
                        <div class="menu-add-comment-wrap">
                            <div class="photo-wrap text-right">
                                <a href="#" id="menu-add-comment-photo"><img width="50" style="border-radius: 5px;"
                                                                             src="<?= $chat->user->image; ?>"
                                                                             alt=""></a>
                            </div>
                            <div class="message-wrap text-right">

                                <a href="#" id="menu-add-comment-name"><?= $chat->user->name; ?></a>

                                <p id="menu-add-comment-note">
                                    <?= $chat->text; ?>
                                </p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>


                <!--
                                <li id="menu-add-comment" class="menu-commet-li">
                                    <div class="menu-add-comment-wrap">
                                        <div class="photo-wrap text-right">
                                            <a href="#" id="menu-add-comment-photo"><img src="/public/img/pers/1.png" alt=""></a>
                                        </div>
                                        <div class="message-wrap text-right">
                                            <a href="#" id="menu-add-comment-name">Андрей</a>
                                            <p id="menu-add-comment-note">Далеко-далеко. </p>
                                        </div>
                                    </div>
                                </li>

                                <li id="menu-add-comment" class="menu-commet-li">
                                    <div class="menu-add-comment-wrap">
                                        <div class="photo-wrap text-right">
                                            <a href="#" id="menu-add-comment-photo"><img src="/public/img/pers/1.png" alt=""></a>
                                        </div>
                                        <div class="message-wrap text-right">
                                            <a href="#" id="menu-add-comment-name">Андрей</a>
                                            <p id="menu-add-comment-note">Далеко-далеко. </p>
                                        </div>
                                    </div>
                                </li>

                                <li id="menu-add-comment" class="menu-commet-li">
                                    <div class="menu-add-comment-wrap">
                                        <div class="photo-wrap text-right">
                                            <a href="#" id="menu-add-comment-photo"><img src="/public/img/pers/3.png" alt=""></a>
                                        </div>
                                        <div class="message-wrap text-right">
                                            <a href="#" id="menu-add-comment-name">Димуля</a>
                                            <p id="menu-add-comment-note">Далеко-далеко за словесными горами в . </p>
                                        </div>
                                    </div>
                                </li>
                -->
            </div>
        </div>
    </div>
</div>

<?php

$js = <<<JS
            
        $('#btn-aj').on('click', function() {
           $.ajax({
                url: 'site/add',
                data: {test: '123'},
                type: 'POST',
                success: function(res) {
                  alert(res);
                },
                error: function() {
                  alert('error mf');
                }
           })
        })

JS;

$this->registerJs($js);
?>