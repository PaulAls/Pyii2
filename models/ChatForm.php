<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 05.03.2017
 * Time: 16:56
 */

namespace app\models;


class ChatForm
{
    public $message;

    public function rules()
    {
        return [
            [['message'], 'required'],
            [['message'], 'string', 'length' => [3, 250]]
        ];
    }
}