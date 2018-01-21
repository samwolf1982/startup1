<?php

use yii\db\Schema;
use yii\db\Migration;
use budyaga\users\models\User;
use yii\rbac\Item;


/**
 * Handles the creation of table `basefill`.
 */
class m180120_194957_create_basefill_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        //        ///////////// fill
        $this->batchInsert('{{%deal}}', ['name', ], [
            ["Аренда"], ["Продажа"],
        ]);

        $this->batchInsert('{{%object_type}}', ['name', ], [
            ["Квартиры"], ["Дома"],["Земля"],["Комм.Земля"],["Помещения"],["Склады"],
        ]);
        $this->batchInsert('{{%currency_type}}', ['name', ], [
            ["USD"], ["EUR"],["UAH"],
        ]);
        $this->batchInsert('{{%room_type}}', ['name', ], [
            ["Типовая"], ["Элитная"],["Пентхаус"], ["Апартаменты"], ["Общежитие"],["Малосемейка"],
            ["Гостинка"], ["Хрущевка"],["Сталинка"],
        ]);
        $this->batchInsert('{{%base_type}}', ['name', ], [
            ["Кирпич"], ["Железобетон"],["Панель"], ["Монолит"], ["Монолит-кирпич"],["Брус"],
            ["Дерево"], ["Блок"],
        ]);
        $this->batchInsert('{{%repairs_type}}', ['name', ], [
            ["Косметический"], ["Евростандарт"],["Под отделку"], ["Авторский"],
        ]);




    }
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->execute("SET foreign_key_checks = 0;");
      $this->truncateTable('object_type');
      $this->truncateTable('deal');
      $this->truncateTable('currency_type');
      $this->truncateTable('room_type');
      $this->truncateTable('base_type');
        $this->truncateTable('objects');
        $this->truncateTable('repairs_type');

        $this->execute("SET foreign_key_checks = 1;");
    }
}
