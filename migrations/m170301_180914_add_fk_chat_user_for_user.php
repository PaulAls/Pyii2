<?php

use yii\db\Migration;

class m170301_180914_add_fk_chat_user_for_user extends Migration
{
    public function safeUp()
    {

        $this->createTable('chat', [
            'id' => $this->primaryKey(),
            'text'=>$this->string(),
            'chat_id'=>$this->integer(),
            'user_id'=>$this->integer(),
            'status'=>$this->integer(),
            'date'=>$this->date()
        ]);

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-chat-user_id',
            'chat',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

    }

    public function safeDown()
    {
        $this->dropTable('chat');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
