<?php use yii\helpers\Url;
use yii\widgets\ActiveForm; ?>

<div class="header-inner">
    <div class="logo with-shadow">
        <a href="/">
            <img src="/public/img/PaulAls.png" style="pointer-events: none" alt="PaulALs">
        </a>
    </div>

    <a id="mnu-modal-01" href="#modal-01" class="nav-btn" style="background:none;">
        <div class="nav-img"></div>
    </a>
</div>

<!--MODAL-->
<div id="modal-01">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-01" style="background: none">
        <div class="nav-close"></div>
    </div>

    <div class="modal-content">
        <div class="container">
            <div class="row">
                <!--NAV CONTENT-->
                <div class="col-sm-6">
                    <nav class="modal-nav">
                        <ul id="menu-item"></ul>
                        <li id="menu-item-home" class="menu-item-li"><a
                                    style="color: #ff0000; border-color: red; font-size: 35px;" href="/"><i
                                        class="fa fa-home" aria-hidden="true"></i></a></li>
                        <li id="menu-item-add-event" class="menu-item-li"><a
                                    href="<?= Url::toRoute(['site/events']); ?>">События </a></li>
                        <li id="menu-item-persons" class="menu-item-li"><a href="<?= Url::toRoute(['site/our']); ?>">Малютка
                                Свои</a></li>
                        <li id="menu-item-gallery" class="menu-item-li"><a
                                    href="<?= Url::toRoute(['site/gallery']); ?>">Галерея</a></li>
                        <li id="menu-item-contact" class="menu-item-li"><a
                                    href="<?= Url::toRoute(['site/contact']); ?>">Контакты</a></li>
                    </nav>
                </div>


                <!--SOCIAL CONTENT-->
                <div class="col-sm-6">
                    <div class="modal-soc">
                        <!-- Быстрые Заметки -->
                        <ul id="menu-notes" class="menu-commet-li">
                            <?php $form = ActiveForm::begin([
                                'action' => ['site/message'], 'options' => ['class' => 'add', 'role' => 'form',], 'enableClientValidation' => false]); ?>

                            <?= $form->field($chatForm, 'message', ['options' => ['class' => 'form-group add-msg', 'id' => 'add']])->
                            textInput(['autocomplete' => 'off', 'placeholder' => 'Добавьте комментарий...', 'style' => 'color: #fff;  background: none; border: none;']
                            )->label(false); ?>

                            <?php ActiveForm::end() ?>

                        </ul>

                        <?php foreach ($fastComment as $chat): ?>
                            <li id="menu-add-comment" class="menu-commet-li">
                                <div class="menu-add-comment-wrap">
                                    <div class="photo-wrap text-right">
                                        <a href="https://vk.com/id<?= $chat->user->id ?>"
                                           id="menu-add-comment-photo"><img width="50" style="border-radius: 5px;"
                                                                            src="<?= $chat->user->image; ?>"
                                                                            alt=""></a>
                                    </div>
                                    <div class="message-wrap text-right">

                                        <a href="https://vk.com/id<?= $chat->user->id ?>"
                                           id="menu-add-comment-name"><?= $chat->user->name; ?></a>

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


<div class="fotorama"
     data-transition="slide"
     data-loop="true"
     data-autoplay="true"
     data-arrows="false"
     data-nav="thumbs"
     data-fit="cover"
     data-width="100%"
     data-height="100%">

    <a href="https://www.youtube.com/watch?v=EtHifo-LIrg"><img src="http://s.fotorama.io/okonechnikov/2-lo.jpg"></a>
    <a href="https://www.youtube.com/watch?v=YfwdOlpr4fw"><img src="http://s.fotorama.io/okonechnikov/9-lo.jpg"></a>
    <a href="https://youtu.be/-6NAas0bQPU"><img src="http://s.fotorama.io/okonechnikov/6-lo.jpg"></a>
    <img src="http://s.fotorama.io/okonechnikov/6-lo.jpg">
    <img src="http://s.fotorama.io/okonechnikov/5-lo.jpg">
    <img src="http://s.fotorama.io/okonechnikov/2-lo.jpg">
    <img src="http://s.fotorama.io/okonechnikov/9-lo.jpg">
</div>

