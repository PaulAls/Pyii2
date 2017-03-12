<?php use yii\helpers\Url;
use yii\widgets\ActiveForm; ?>
<!-- header-inner -->
<div class="header-inner">
    <div class="logo with-shadow">
        <a href="/">
            <img src="/public/img/PaulAls2.png" style="pointer-events: none" alt="PaulALs">
        </a>
    </div>

    <a id="mnu-modal-01" href="#modal-01" class="nav-btn">
        <div class="nav-img"></div>
    </a>

</div>

<!-- body-content/baner -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            CONTENT CENTER BANER
        </div>
    </div>
</div>



<!--MODAL-->
<div id="modal-01">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div  id="btn-close-modal" class="close-modal-01">
        <div class="nav-close"></div>
    </div>

    <div class="modal-content">
        <div class="container">
            <div class="row">
                <!--NAV CONTENT-->
                <div class="col-sm-6">
                    <nav class="modal-nav">
                        <ul id="menu-item"></ul>
                        <li id="menu-item-home" class="menu-item-li"><a style="color: #ff0000; border-color: red; font-size: 35px;" href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li id="menu-item-add-event" class="menu-item-li"><a href="<?= Url::toRoute(['site/events']); ?>">События    </a></li>
                        <li id="menu-item-persons" class="menu-item-li"><a href="<?= Url::toRoute(['site/our']); ?>">Малютка Свои</a></li>
                        <li id="menu-item-gallery" class="menu-item-li"><a href="<?= Url::toRoute(['site/gallery']); ?>">Галерея</a></li>
                        <li id="menu-item-contact" class="menu-item-li"><a href="<?= Url::toRoute(['site/contact']); ?>">Контакты</a></li>
                    </nav>
                </div>


                <!--SOCIAL CONTENT-->
                <div class="col-sm-6">
                    <div class="modal-soc">
                        <ul id="menu-notes" class="menu-commet-li">

                        <?php $form = ActiveForm::begin([
                            'action'=>['site/message'],'options'=> ['class'=> 'add', 'role'=> 'form']]); ?>

                        <?= $form->field($chatForm, 'message',['options'=>['class'=>'form-group add-msg','id'=> 'add']])->
                        textInput(['autocomplete'=>'off','placeholder'=>'Добавьте комментарий...', 'style'=>'color: #fff;  background: none; border: none;']
                        )->label(false);?>

                        <?php ActiveForm::end() ?>

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


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>