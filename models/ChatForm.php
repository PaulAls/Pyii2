<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 05.03.2017
 * Time: 16:56
 */

namespace app\models;


use Codeception\Lib\Console\Message;
use Faker\Provider\DateTime;
use Yii;
use yii\base\Model;

class ChatForm extends Model
{
    public $message;

    public function rules()
    {
        return [
            [['message'], 'required'],
            [['message'], 'string', 'length' => [2, 70]],
            [['message'], 'trim']
        ];
    }

    public function saveMessage($chat_id)
    {

        if ($this->validate())
        {
            $message = new Chat();
            $message->chat_id = $chat_id;
            $message->text = $this->message;
            $message->user_id = Yii::$app->user->id;
            $message->date = date("Y-m-d");
            $message->status = 1;
            return $message->save();

        }



    }
}