<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 21.02.2017
 * Time: 17:24
 */

namespace app\models;


use yii\base\Model;

class CommentForm extends Model
{
    public $comment;

    public function rules()
    {
        return [
            [['comment'], 'required'],
            [['comment'], 'string', 'length' => [3, 250]]
        ];
    }

}