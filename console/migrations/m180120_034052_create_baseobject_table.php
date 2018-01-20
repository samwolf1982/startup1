<?php

use yii\db\Schema;
use yii\db\Migration;
use budyaga\users\models\User;
use yii\rbac\Item;


/**
 * Handles the creation of table `baseobject`.
 */
class m180120_034052_create_baseobject_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
//        $tableOptions = null;
//        if ($this->db->driverName === 'mysql') {
//            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
//        }
//
//        //таблица user
//        $this->createTable('{{%objects}}', [
//            'id' => Schema::TYPE_PK,
//            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
//
//            'deal_type_id' => Schema::TYPE_INTEGER . ' NOT NULL',// тип сделки   от переключения меняем форму !! в зависимости от выбора тенем нужную модель и ид там есть имя таблицы
//            'deal_model_id' => Schema::TYPE_INTEGER . ' NOT NULL',// тип сделки   //  ссылка на выбраную модель-набора  из room rent sale or house rent,sale и тд
//
//            'object_type_id' => Schema::TYPE_INTEGER . ' NOT NULL', //  квартира помещение дома склады от переключения меняем форму !! в зависимости от выбора тенем нужную модель и ид там есть имя таблицы
//            'object_model_id' => Schema::TYPE_INTEGER . ' NOT NULL', //  ссылка на выбраную модель-набора  из room земля и тд
//
//
//
//            'address_text'=>$this->text()->notNull(), // google autocomplete
//            'country'=>$this->string()->null(),
//            'state' => Schema::TYPE_INTEGER. ' NOT NULL', // область
//            'sity' => Schema::TYPE_INTEGER. ' NOT NULL', // город
//            'street' => Schema::TYPE_STRING. ' NOT NULL', // улица,
//            'number_street' => Schema::TYPE_STRING. ' NULL', // номер дома
//            'zip' => Schema::TYPE_STRING. ' NULL', // номер дома
//                                                          //'district' => Schema::TYPE_INTEGER. ' NOT NULL', // район пригород село       ????????????????? если из гугла то не нужно
//
//            'lat'=>$this->float(11,7)->null(),      //coordinate googlemap
//            'lng'=>$this->float(11,7)->null(),
//
//
//            'price'=>$this->decimal(19,4)->null(),
//            'currency_type_id'=>$this->integer()->notNull(), // dollar euro rub uah
//
//
//            'video_json'=>$this->string()->null(), // видео пока что только ютуб
//            'header'=>$this->text()->null(),//
//            'description'=>$this->text()->null(),//
//            'url'=>$this->text()->null(),//
//
////                                                                   //'info_type_id' => Schema::TYPE_INTEGER . ' NOT NULL',   // контактние даніе  ВСЕ ДАНЫЕ В USER  ДОБАВИТЬ
//            'property_type_id' => $this->smallInteger()->defaultValue(0)->notNull(),// тип собствености 0 1- cобсвтеник 2 агент
////
//
//
////
////            'comission_client'=>$this->float(10,2)->null(),  //комисия клиента
////            'comission_agent'=>$this->float(10,2)->null(),  //комисия агента
//
////
//
////
//
//            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0', //
//            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
//            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
//
//        ], $tableOptions);
//
//
//        //таблица deal продаже аренда
//        $this->createTable('{{%object_type}}', [
//            'id' => Schema::TYPE_PK,
//            'object_type_name' => $this->string()->notNull(),
//            'object_table_name' => $this->string()->notNull(), // имя таблицы room участок и тд
//        ], $tableOptions);
//
//
//                //таблица deal продаже аренда
//        $this->createTable('{{%deal}}', [
//            'id' => Schema::TYPE_PK,
//            'deal_name' => $this->string()->notNull(),
//            'deal_table_name' => $this->string()->notNull(), // имя таблицы room deal sale, house deal,sale
//        ], $tableOptions);
//
//
//        //таблица currency_type dollar euro ...
//        $this->createTable('{{%currency_type}}', [
//            'id' => Schema::TYPE_PK,
//            'currency_type_name' => $this->string()->notNull(),
//        ], $tableOptions);
//
//        //таблица room_type //тип квартиры студия хрущевска апартаменыт и тд
//        $this->createTable('{{%room_type}}', [
//            'id' => Schema::TYPE_PK,
//            'room_type_name' => $this->string()->notNull(),
//        ], $tableOptions);
//
//        //тип base_type    здания хрушевска новостройка панель и тд
//        $this->createTable('{{%base_type}}', [
//            'id' => Schema::TYPE_PK,
//            'base_type_name' => $this->string()->notNull(),
//        ], $tableOptions);
//
//        //таблица repairs_type тип ремонта евро авторский побелка косметический и тд
//        $this->createTable('{{%repairs_type}}', [
//            'id' => Schema::TYPE_PK,
//            'repairs_type_name' => $this->string()->notNull(),
//        ], $tableOptions);
//
//        //новостройка Новый дом (дом сдан) =[]   Долевое (дом не сдан)=[]  // Дата сдачи  Название ЖК, корпус  Застройщик Проектная декларация  https://zipal.ru/object/create
//        // сохранять сначала потом уже давать в обект
//        $this->createTable('{{%new_bilding_type}}', [
//            'id' => Schema::TYPE_PK,
//            'date_of_issue_quarter' => $this->smallInteger()->notNull(), //1 2 3 4
//            'date_of_issue_year' => $this->smallInteger()->notNull(),
//            'name_gk_corpus' => $this->string()->notNull(), // Название ЖК, корпус
//            'developer' => $this->string()->notNull(), // застройщик,
//            'url'=>$this->text()->null(), //Проектная декларация
//        ], $tableOptions);
//
//
//
//        //таблица heating_type  отопление  центральное газовае паровое и тд
//        $this->createTable('{{%heating_type}}', [
//            'id' => Schema::TYPE_PK,
//            'heating_type_name' => $this->string()->notNull(),
//        ], $tableOptions);
//
//        //таблица window_view_type // вид море подвесз дорога
//        $this->createTable('{{%window_view_type}}', [
//            'id' => Schema::TYPE_PK,
//            'window_view_type_name' => $this->string()->notNull(),
//        ], $tableOptions);
//
//        //таблица restroom_type cанузел совместный раздельй 2 3 4
//        $this->createTable('{{%restroom_type}}', [
//            'id' => Schema::TYPE_PK,
//            'restroom_type_name' => $this->string()->notNull(),
//        ], $tableOptions);
//
//        //таблица repairs_type тип балкона балкон лоджыя
//        $this->createTable('{{%balkoon_type}}', [
//            'id' => Schema::TYPE_PK,
//            'balkoon_type_name' => $this->string()->notNull(),
//        ], $tableOptions);
//
//
//      // для оренды
//        //таблица time_rent_type долкгий короткий сезон долгострочно посуточно
//        $this->createTable('{{%time_rent_type}}', [
//            'id' => Schema::TYPE_PK,
//            'time_rent_type_name' => $this->string()->notNull(),
//        ], $tableOptions);
//
//
//
//        //таблица object_room набор для квартыры
//        $this->createTable('{{%object_room}}', [
//            'id' => Schema::TYPE_PK,
//            'ipoteka' => $this->boolean()->defaultValue(0)->null(),// ипотека
//            'razstrochka' => $this->boolean()->defaultValue(0)->null(),// расзтрочка
//            'object_table_name' => $this->string()->notNull(), // имя таблицы room участок и тд
//            'square_total'=>$this->float()->notNull(),
//            'square_live'=>$this->float()->notNull(),
//            'square_kitchen'=>$this->float()->notNull(),
//             'rooms_total'=>$this->integer()->notNull(), //количество комнат
//            'rooms_divided'=>$this->integer()->notNull(), // комнат раздельно
//            'rooms_for_sale'=>$this->integer()->null(), //количество комнат для продажы
//            'floor'=>$this->integer()->notNull(), //єтаж
//            'floors'=>$this->integer()->notNull(), //єтажность
//            'room_type_id'=>$this->integer()->notNull(), //тип квартиры студия хрущевска апартаменыт и тд
//            'base_type_id'=>$this->integer()->notNull(), //тип здания хрушевска новостройка панель и тд
//            'repairs_type_id'=>$this->integer()->null(), //тип ремонта евро авторский побелка косметический и тд
//            'new_bilding_type_id'=>$this->integer()->null(), //новостройка Новый дом (дом сдан) =[]   Долевое (дом не сдан)=[]  // Дата сдачи  Название ЖК, корпус  Застройщик Проектная декларация  https://zipal.ru/object/create
//            'heating_type_id'=>$this->integer()->null(), // отопление
//            'window_view_type_id'=>$this->integer()->null(), // вид море подвесз дорога
//            'restroom_type_id'=>$this->integer()->null(), // cанузел
//            'balkoon_type_id'=>$this->integer()->null(), // тип балкона балкон лоджыя
//            'ceiling_height'=>$this->integer()->null(), // высота потолка см
//            'type_serial_bilding'=>$this->string()->null(), // Тип/Серия дома
//            'status_bild'=>$this->string()->null(), // aльтернатива свободна
//            'extra_ipoteka'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_rastrochka'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_net'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_phone'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_tv'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_invalid'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_lift'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_clift'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_concierge'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_sequrity'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_musor'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_gas'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_ogoroza'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//
//        ], $tableOptions);
//
//        //таблица object_room набор для квартыры
//        $this->createTable('{{%object_house}}', [
//            'id' => Schema::TYPE_PK,
//            'ipoteka' => $this->boolean()->defaultValue(0)->null(),// ипотека
//            'razstrochka' => $this->boolean()->defaultValue(0)->null(),// расзтрочка
//            'object_table_name' => $this->string()->notNull(), // имя таблицы room участок и тд
//            'square_total'=>$this->float()->notNull(),
//            'square_live'=>$this->float()->notNull(),
//            'square_kitchen'=>$this->float()->notNull(),
//            'rooms_total'=>$this->integer()->notNull(), //количество комнат
//            'rooms_divided'=>$this->integer()->notNull(), // комнат раздельно
//            'rooms_for_sale'=>$this->integer()->null(), //количество комнат для продажы
//            'floor'=>$this->integer()->notNull(), //єтаж
//            'floors'=>$this->integer()->notNull(), //єтажность
//            'room_type_id'=>$this->integer()->notNull(), //тип квартиры студия хрущевска апартаменыт и тд
//            'base_type_id'=>$this->integer()->notNull(), //тип здания хрушевска новостройка панель и тд
//            'repairs_type_id'=>$this->integer()->null(), //тип ремонта евро авторский побелка косметический и тд
//            'new_bilding_type_id'=>$this->integer()->null(), //новостройка Новый дом (дом сдан) =[]   Долевое (дом не сдан)=[]  // Дата сдачи  Название ЖК, корпус  Застройщик Проектная декларация  https://zipal.ru/object/create
//            'heating_type_id'=>$this->integer()->null(), // отопление
//            'window_view_type_id'=>$this->integer()->null(), // вид море подвесз дорога
//            'restroom_type_id'=>$this->integer()->null(), // cанузел
//            'balkoon_type_id'=>$this->integer()->null(), // тип балкона балкон лоджыя
//            'ceiling_height'=>$this->integer()->null(), // высота потолка см
//            'type_serial_bilding'=>$this->string()->null(), // Тип/Серия дома
//            'status_bild'=>$this->string()->null(), // aльтернатива свободна
//            'extra_ipoteka'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_rastrochka'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_net'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_phone'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_tv'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_invalid'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_lift'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_clift'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_concierge'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_sequrity'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_musor'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_gas'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_ogoroza'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//
//        ], $tableOptions);
//
//
//        //таблица room_sale набор для продажы квартиры
//        $this->createTable('{{%room_sale}}', [
//            'id' => Schema::TYPE_PK,
//            'ipoteka' => $this->boolean()->defaultValue(0)->null(),// ипотека
//            'razstrochka' => $this->boolean()->defaultValue(0)->null(),// расзтрочка
//            'object_table_name' => $this->string()->notNull(), // имя таблицы room участок и тд
//            'square_total'=>$this->float()->notNull(),
//            'square_live'=>$this->float()->notNull(),
//            'square_kitchen'=>$this->float()->notNull(),
//            'rooms_total'=>$this->integer()->notNull(), //количество комнат
//            'rooms_divided'=>$this->integer()->notNull(), // комнат раздельно
//            'rooms_for_sale'=>$this->integer()->null(), //количество комнат для продажы
//            'floor'=>$this->integer()->notNull(), //єтаж
//            'floors'=>$this->integer()->notNull(), //єтажность
//            'room_type_id'=>$this->integer()->notNull(), //тип квартиры студия хрущевска апартаменыт и тд
//            'base_type_id'=>$this->integer()->notNull(), //тип здания хрушевска новостройка панель и тд
//            'repairs_type_id'=>$this->integer()->null(), //тип ремонта евро авторский побелка косметический и тд
//            'new_bilding_type_id'=>$this->integer()->null(), //новостройка Новый дом (дом сдан) =[]   Долевое (дом не сдан)=[]  // Дата сдачи  Название ЖК, корпус  Застройщик Проектная декларация  https://zipal.ru/object/create
//            'heating_type_id'=>$this->integer()->null(), // отопление
//            'window_view_type_id'=>$this->integer()->null(), // вид море подвесз дорога
//            'restroom_type_id'=>$this->integer()->null(), // cанузел
//            'balkoon_type_id'=>$this->integer()->null(), // тип балкона балкон лоджыя
//            'ceiling_height'=>$this->integer()->null(), // высота потолка см
//            'type_serial_bilding'=>$this->string()->null(), // Тип/Серия дома
//            'status_bild'=>$this->string()->null(), // aльтернатива свободна
//            'extra_ipoteka'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_rastrochka'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_net'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_phone'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_tv'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_invalid'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_lift'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_clift'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_concierge'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_sequrity'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_musor'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_gas'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_ogoroza'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//
//        ], $tableOptions);
//        //таблица room_rent набор для оренды квартиры
//        $this->createTable('{{%room_rent}}', [
//            'id' => Schema::TYPE_PK,
//            'object_table_name' => $this->string()->notNull(), // имя таблицы room участок и тд
//            'square_total'=>$this->float()->notNull(),
//            'square_live'=>$this->float()->notNull(),
//            'square_kitchen'=>$this->float()->notNull(),
//            'rooms_total'=>$this->integer()->notNull(), //количество комнат
//            'rooms_divided'=>$this->integer()->notNull(), // комнат раздельно
//            'rooms_for_rent'=>$this->integer()->null(), //количество комнат для сдачи
//            'floor'=>$this->integer()->notNull(), //єтаж
//            'floors'=>$this->integer()->notNull(), //єтажность
//            'room_type_id'=>$this->integer()->notNull(), //тип квартиры студия хрущевска апартаменыт и тд
//            'base_type_id'=>$this->integer()->notNull(), //тип здания хрушевска новостройка панель и тд
//            'repairs_type_id'=>$this->integer()->null(), //тип ремонта евро авторский побелка косметический и тд
//            'new_bilding_type_id'=>$this->integer()->null(), //новостройка Новый дом (дом сдан) =[]   Долевое (дом не сдан)=[]  // Дата сдачи  Название ЖК, корпус  Застройщик Проектная декларация  https://zipal.ru/object/create
//            'heating_type_id'=>$this->integer()->null(), // отопление
//            'window_view_type_id'=>$this->integer()->null(), // вид море подвесз дорога
//            'restroom_type_id'=>$this->integer()->null(), // cанузел
//            'balkoon_type_id'=>$this->integer()->null(), // тип балкона балкон лоджыя
//            'ceiling_height'=>$this->integer()->null(), // высота потолка см
//            'type_serial_bilding'=>$this->string()->null(), // Тип/Серия дома
//
//                        //     для аренды квартир
//            'sleep_place'=>$this->smallInteger()->null(), // cпальных мест
//            'time_rent_type_id'=>$this->integer()->null(), // Срок аренды долгий коротки месяц и тд.
//            'pledge'=>$this->float(19,4)->null(), // залог
//            'period'=>$this->smallInteger()->defaultValue(0), // период сутки месяц
//
//            'status_bild'=>$this->string()->null(), // aльтернатива свободна
//            'extra_ipoteka'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_rastrochka'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_net'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_phone'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_tv'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_invalid'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_lift'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_clift'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_concierge'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_sequrity'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_musor'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_gas'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//            'extra_ogoroza'=>$this->boolean()->defaultValue(0)->notNull(),// доп поля
//
//        ], $tableOptions);
//
//
//
//        //связи для базового
//        $this->addForeignKey('user_objects_object_type_id_fk', '{{%objects}}', 'object_type_id', '{{%object_type}}', 'id', 'NO ACTION', 'CASCADE');
//        $this->addForeignKey('user_objects_user_id_fk', '{{%objects}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'CASCADE');
//        $this->addForeignKey('user_objects_deal_id_fk', '{{%objects}}', 'deal_type_id', '{{%deal}}', 'id', 'NO ACTION', 'CASCADE');
//       // $this->addForeignKey('user_objects_object_type_id_fk', '{{%objects}}', 'object_type_id', '{{%object_type}}', 'id', 'NO ACTION', 'CASCADE');
//        $this->addForeignKey('user_objects_currency_type_id_fk', '{{%objects}}', 'currency_type_id', '{{%currency_type}}', 'id', 'NO ACTION', 'CASCADE');
//
//
//        // базовый + дополнения
//        //  квартира дом..
//        $this->addForeignKey('objects_object_room_id_fk', '{{%objects}}', 'object_model_id', '{{%object_room}}', 'id', 'NO ACTION', 'CASCADE');
//        $this->addForeignKey('objects_object_house_id_fk', '{{%objects}}', 'object_model_id', '{{%object_house}}', 'id', 'NO ACTION', 'CASCADE');
//
//        // квартира продажа оренда ...
//        $this->addForeignKey('objects_room_sale_id_fk', '{{%objects}}', 'deal_model_id', '{{%room_sale}}', 'id', 'NO ACTION', 'CASCADE');
//        $this->addForeignKey('objects_room_rent_id_fk', '{{%objects}}', 'deal_model_id', '{{%room_rent}}', 'id', 'NO ACTION', 'CASCADE');
//
////
//
//
//        // связи для room
//        $this->addForeignKey('object_room_room_type_id_fk', '{{%object_room}}', 'room_type_id', '{{%room_type}}', 'id', 'NO ACTION', 'CASCADE');
//        $this->addForeignKey('object_room_base_type_id_fk', '{{%object_room}}', 'base_type_id', '{{%base_type}}', 'id', 'NO ACTION', 'CASCADE');
//        $this->addForeignKey('object_room_repairs_type_id_fk', '{{%object_room}}', 'repairs_type_id', '{{%repairs_type}}', 'id', 'NO ACTION', 'CASCADE');
//        $this->addForeignKey('object_room_new_bilding_type_id_fk', '{{%object_room}}', 'new_bilding_type_id', '{{%new_bilding_type}}', 'id', 'NO ACTION', 'CASCADE');
//      $this->addForeignKey('object_room_heating_type_id_fk', '{{%object_room}}', 'heating_type_id', '{{%heating_type}}', 'id', 'NO ACTION', 'CASCADE');
//      $this->addForeignKey('object_room_window_view_type_id_fk', '{{%object_room}}', 'window_view_type_id', '{{%window_view_type}}', 'id', 'NO ACTION', 'CASCADE');
//      $this->addForeignKey('object_room_restroom_type_id_fk', '{{%object_room}}', 'restroom_type_id', '{{%restroom_type}}', 'id', 'NO ACTION', 'CASCADE');
//      $this->addForeignKey('object_room_balkoon_type_id_fk', '{{%object_room}}', 'balkoon_type_id', '{{%balkoon_type}}', 'id', 'NO ACTION', 'CASCADE');
//
//        // связи для rent-room  time_rent_type_id
//        $this->addForeignKey('object_room_room_rent_id_fk', '{{%room_rent}}', 'time_rent_type_id', '{{%time_rent_type}}', 'id', 'NO ACTION', 'CASCADE');
//
//
//
//
//
//
//
//        ///////////// fill
//        $this->batchInsert('{{%deal}}', ['deal_name', 'deal_table_name'], [
//            ["Аренда",'room_rent'], ["Продажа",'room_sale'],
//            ["Аренда",'house_rent'], ["Продажа",'house_sale'],
//            ["Аренда",'land_rent'], ["Продажа",'land_sale'],
//            ["Аренда",'commerce_land_rent'], ["Продажа",'commerce_land_sale'],
//            ["Аренда",'compartment_rent'], ["Продажа",'compartment_sale'], // помещение
//            ["Аренда",'stock_rent'], ["Продажа",'stock_sale'],// cклад
//        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
//        $this->dropTable('objects');
//        $this->dropTable('object_room');
//        $this->dropTable('object_house');
//
//        $this->dropTable('deal');
//        $this->dropTable('object_type');
//        $this->dropTable('room_type');
//        $this->dropTable('base_type');
//        $this->dropTable('repairs_type');
//        $this->dropTable('currency_type');
//        $this->dropTable('new_bilding_type');
//
//        $this->dropTable('heating_type');
//        $this->dropTable('window_view_type');
//        $this->dropTable('restroom_type');
//        $this->dropTable('balkoon_type');
    }
}
