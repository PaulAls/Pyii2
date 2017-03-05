<?php

use yii\db\Migration;

/**
 * Handles the creation of table `chat`.
 */
class m170227_171929_create_chat_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('chat', [
            'id' => $this->primaryKey(),
            'text'=>$this->string(),
            'chat_id'=>$this->integer(),
            'user_id'=>$this->integer(),
            'status'=>$this->integer(),
            'date'=>$this->date()
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('chat');
    }


}
