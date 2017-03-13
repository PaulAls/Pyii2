<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 27.02.2017
 * Time: 20:56
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property string $text
 * @property integer $chat_id
 * @property integer $user_id
 * @property integer $status
 * @property string $date
 *
 * @property Article $article
 * @property User $user
*/
class Chat extends ActiveRecord
{
    public static function tableName()
    {
        return 'chat';
    }


    public function rules()
    {
        return [
            [['user_id', 'chat_id', 'status'], 'integer'],
            [['text'], 'string', 'max' => 70]

        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'chat_id' => 'Chat ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'date' => 'Date',
        ];
    }

    public static function getRecent()
    {
        return Chat::find()->orderBy('id desc')->where(['chat_id'=>'1'])->limit(4)->all();
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }



}