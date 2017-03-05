<?php
use yii\helpers\Url;
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            МАЛЮТКА СВОИ
        </div>
    </div>
</div>

<div style="background-color: #000;">
    <ul id="menu-notes" class="menu-commet-li">Быстрые Заметки</ul>

    <?php if (!empty($comments)):?>

    <?php foreach ($comments as $comment):?>

            <li id="menu-add-comment" class="menu-commet-li">
                <div class="menu-add-comment-wrap">
                    <div class="photo-wrap text-right">
                        <a href="#" id="menu-add-comment-photo"><img src="<?= $comment->user->image; ?>" alt=""></a>
                    </div>
                    <div class="message-wrap text-right">
                        <a href="#" id="menu-add-comment-name"><?= $comment->user->name; ?></a>
                        <p id="menu-add-comment-note"><?= $comment->text; ?> </p>
                    </div>
                </div>
            </li>

    <?php endforeach;?>

    <?php endif;?>



    <li id="menu-add-comment" class="menu-commet-li">
        <div class="menu-add-comment-wrap">
            <div class="photo-wrap text-right">
                <a href="#" id="menu-add-comment-photo"><img src="/public/img/pers/2.png" alt=""></a>
            </div>
            <div class="message-wrap text-right">
                <a href="#" id="menu-add-comment-name">Никита</a>
                <p id="menu-add-comment-note">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. </p>
            </div>
        </div>
    </li>

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