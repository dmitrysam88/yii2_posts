<?php

use yii\db\Migration;

/**
 * Class m171111_114752_create_post
 */
class m171111_114752_create_post extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171111_114752_create_post cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up(){
        $this->createTable('post',[
            'id' => $this->primaryKey(10),
            'title' => $this->string(),
            'description' => $this->text(),
            'user_id' => $this->integer()
        ]);
    }

    public function down(){
        $this->dropTable('post');
    }

}
