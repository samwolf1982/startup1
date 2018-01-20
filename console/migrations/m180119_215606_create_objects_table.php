<?php

use yii\db\Schema;
use yii\db\Migration;
use budyaga\users\models\User;
use yii\rbac\Item;

/**
 * Handles the creation of table `objects`. base
 */
class m180119_215606_create_objects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        //таблица user
        $this->createTable('{{%objects}}', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'deal_type_id' => Schema::TYPE_INTEGER . ' NOT NULL',// тип сделки
            'object_type_id' => Schema::TYPE_INTEGER . ' NOT NULL', //  квартира помещение дома склады от переключения меняем форму !!
            //'info_type_id' => Schema::TYPE_INTEGER . ' NOT NULL',   // контактние даніе  ВСЕ ДАНЫЕ В USER  ДОБАВИТЬ
            'property_type_id' => $this->smallInteger()->defaultValue(0)->null(),// тип собствености 0 1- cобсвтеник 2 агент

            'address_text'=>$this->text()->null(), // google autocomplete
            'country'=>$this->string()->null(),
            'state' => Schema::TYPE_INTEGER. ' NOT NULL', // область
            'sity' => Schema::TYPE_INTEGER. ' NOT NULL', // город
            'street' => Schema::TYPE_STRING. ' NOT NULL', // улица,
            'number_street' => Schema::TYPE_STRING. ' NULL', // номер дома
            'zip' => Schema::TYPE_STRING. ' NULL', // номер дома

            //'district' => Schema::TYPE_INTEGER. ' NOT NULL', // район пригород село       ????????????????? если из гугла то не нужно


            'lat'=>$this->float(11,7)->null(),      //coordinate googlemap
            'lng'=>$this->float(11,7)->null(),







            'price'=>$this->decimal(19,4)->null(),
            'currency_type_id'=>$this->integer()->null(), // dollar euro rub uah

            'square_total'=>$this->float()->null(),
            'square_live'=>$this->float()->null(),
            'square_kitchen'=>$this->float()->null(),
            'rooms_total'=>$this->integer()->null(), //количество комнат
            'rooms_divided'=>$this->integer()->null(), // комнат раздельно
            'rooms_for_sale'=>$this->integer()->null(), //количество комнат для продажы
            'floor'=>$this->integer()->null(), //єтаж
            'floors'=>$this->integer()->null(), //єтажность

            'room_type_id'=>$this->integer()->null(), //тип квартиры студия хрущевска апартаменыт и тд
            'base_type_id'=>$this->integer()->null(), //тип здания хрушевска новостройка панель и тд
            'repairs_type_id'=>$this->integer()->null(), //тип ремонта евро авторский побелка косметический и тд


            'new_bilding_type_id'=>$this->integer()->null(), //новостройка Новый дом (дом сдан) =[]   Долевое (дом не сдан)=[]  // Дата сдачи  Название ЖК, корпус  Застройщик Проектная декларация  https://zipal.ru/object/create

            'video_json'=>$this->string()->null(), // видео пока что только ютуб


            'heating_type_id'=>$this->integer()->null(), // отопление
            'window_view_type_id'=>$this->integer()->null(), // вид море подвесз дорога
            'restroom_type_id'=>$this->integer()->null(), // cанузел
            'balkoon_type_id'=>$this->integer()->null(), // тип балкона балкон лоджыя
            'ceiling_height'=>$this->integer()->null(), // высота потолка см
            'type_serial_bilding'=>$this->string()->null(), // Тип/Серия дома
            'status_bild'=>$this->string()->null(), // aльтернатива свободна

            'extra_ipoteka'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_rastrochka'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_net'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_phone'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_tv'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_invalid'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_lift'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_clift'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_concierge'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_sequrity'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_musoroprovod'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_gas'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_ogoroza'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_condicioner'=>$this->boolean()->defaultValue(0)->null(),// доп поля


            // для аренды квартир
            'extra_wash_masine'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_mebel'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_holodilnik'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_holodilnik'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_wifi'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_with_animal'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_with_children'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_with_children'=>$this->boolean()->defaultValue(0)->null(),// доп поля

            // для дома
            'extra_garage'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_water_pull'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_boiler'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_mansandra'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_propiska'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_forest'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_water'=>$this->boolean()->defaultValue(0)->null(),// доп поля

            // дома аренда
            'extra_year_access'=>$this->boolean()->defaultValue(0)->null(),// доп поля

            // помещения
            'extra_repairs_owner'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_change_provider'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_restorane'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_fitnes'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_bank'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_bankomat'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_supermarket'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_full_access'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_video_monitoring'=>$this->boolean()->defaultValue(0)->null(),// доп поля
            'extra_control_access'=>$this->boolean()->defaultValue(0)->null(),// доп поля контроль доступа
            'extra_equipment'=>$this->boolean()->defaultValue(0)->null(),// доп поля оборудования
            'extra_separate_entrance'=>$this->boolean()->defaultValue(0)->null(),// доп поля отдельный вход



            // склады
            'extra_сrane'=>$this->boolean()->defaultValue(0)->null(),// доп поля кран
            'extra_custom_house'=>$this->boolean()->defaultValue(0)->null(),// доп поля  Таможня
            'extra_rail_conect'=>$this->boolean()->defaultValue(0)->null(),// доп поля Жд сообщение
            'extra_parking_track'=>$this->boolean()->defaultValue(0)->null(),// доп поля Парковка для грузового транспорта
            'extra_port'=>$this->boolean()->defaultValue(0)->null(),// доп поля порт
            'extra_port'=>$this->boolean()->defaultValue(0)->null(),// доп поля порт


            //     для аренды квартир
      'rooms_rent'=>$this->smallInteger()->null(), // Комнат cдается
      'sleep_place'=>$this->smallInteger()->null(), // cпальных мест
      'time_rent_type_id'=>$this->integer()->null(), // Срок аренды долгий коротки месяц и тд.
      'pledge'=>$this->float(19,4)->null(), // залог
      'period'=>$this->smallInteger()->defaultValue(0), // период сутки месяц





            //     собственик или агент
            'comission_client'=>$this->float(10,2)->null(),  //комисия клиента
            'comission_agent'=>$this->float(10,2)->null(),  //комисия агента







            'header'=>$this->text()->null(),//
            'description'=>$this->text()->null(),//
            'url'=>$this->text()->null(),//

//  дома
            'square_place'=>$this->integer()->null(),// сотки
            'obremeneniya'=>$this->boolean()->defaultValue(0), //обременения
            'kadastr_number'=>$this->string()->null(), //кадастровый номер
            'rail_station'=>$this->string()->null(), //жд станция
            'min_to_rail_station'=>$this->smallInteger()->null(), // растояние до жд станция минуты
            'rail_station_min_type'=>$this->boolean()->defaultValue(0)->notNull(), // пешком авто
            'distance_to_forest'=>$this->smallInteger()->null(), // растояние до леса
            'distance_to_water'=>$this->smallInteger()->null(), // растояние до водоема
            'poselok_name'=>$this->string()->null(), // название поселка


            'house_type_id'=>$this->integer()->null(),// тип дома
            'mebli_type_id'=>$this->integer()->null(),// тип дома
            'otopleniye_type_id'=>$this->integer()->null(),// тип дома
            'electrification_type_id'=>$this->integer()->null(),// тип дома
            'gasfication_type_id'=>$this->integer()->null(),// тип дома
            'waterfication_type_id'=>$this->integer()->null(),// тип дома
            'cloakfication_type_id'=>$this->integer()->null(),// тип дома
            'relief_type_id'=>$this->integer()->null(),// тип дома
            'forma_place_type_id'=>$this->integer()->null(),// тип дома
            'purpose_of_land_type_id'=>$this->integer()->null(),// тип дома


          //  house_type mebli_type otopleniye_type electrification_type gasfication_type waterfication_type cloakfication_type relief_type forma_place_type purpose_of_land_type

            // помещение
            'nds'=>$this->boolean()->defaultValue(0)->notNull(),// ндс
            'square_hall'=>$this->float()->null(),// площадь зала
            'bissnes_center_name'=>$this->string()->null(),// бизнесс ценетр
            'parko_place_count'=>$this->integer()->null(),// парко мест
            'parko_place_type'=>$this->boolean()->defaultValue(0)->notNull(),// тип парковки наземная подсземная
            'year'=>$this->integer()->null(),// год

            'using_type_id'=>$this->integer()->null(),// тип использования любой офис аптека ....
            'bilding_type_id'=>$this->integer()->null(),// тип здания администранивное  бизнесс центер дом и тд


            //помещение аренда
            'sub_rent'=>$this->boolean()->defaultValue(0)->notNull(),// ндс
            'cokol'=>$this->boolean()->defaultValue(0)->notNull(),     //Цокольный этаж



            // склады
            'stock_type_id'=>$this->integer()->null(),// тип помешения в складаъ склад производство смешаное
            'storage_mode_type_id'=>$this->integer()->null(),// тип Режим хранения
            'storage_type_id'=>$this->integer()->null(),// тип cкладирование напольное стелажное смешаное
            'storage_floar_type_id'=>$this->integer()->null(),// тип пола
            'storage_unload_type_id'=>$this->integer()->null(),// тип разгрузки
            'storage_gate_type_id'=>$this->integer()->null(),// тип ворот
            'storage_access_to_road_type_id'=>$this->integer()->null(),// тип Доступ с магистрали

            'storage_load_on_floor'=>$this->integer()->null(),// тип Нагрузка на пол тонн/м2
            'storage_step_of_collumn'=>$this->integer()->null(),// тип шаг колонн - м
            'storage_power'=>$this->integer()->null(),// Подведенная мощность квт





            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 0', //
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',

        ], $tableOptions);

        //таблица deal продаже аренда
        $this->createTable('{{%deal}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица deal продаже аренда
        $this->createTable('{{%object_type}}', [
            'id' => Schema::TYPE_PK,
            '_name' => $this->string()->null(),
        ], $tableOptions);

        //таблица currency_type dollar euro ...
        $this->createTable('{{%currency_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица room_type //тип квартиры студия хрущевска апартаменыт и тд
        $this->createTable('{{%room_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);
        //тип base_type    здания хрушевска новостройка панель и тд
        $this->createTable('{{%base_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);
        //таблица repairs_type тип ремонта евро авторский побелка косметический и тд
        $this->createTable('{{%repairs_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //новостройка Новый дом (дом сдан) =[]   Долевое (дом не сдан)=[]  // Дата сдачи  Название ЖК, корпус  Застройщик Проектная декларация  https://zipal.ru/object/create
        // сохранять сначала потом уже давать в обект
        $this->createTable('{{%new_bilding_type}}', [
            'id' => Schema::TYPE_PK,
            'date_of_issue_quarter' => $this->smallInteger()->null(), //1 2 3 4
            'date_of_issue_year' => $this->smallInteger()->null(),
            'name_gk_corpus' => $this->string()->null(), // Название ЖК, корпус
            'developer' => $this->string()->null(), // застройщик,
            'url'=>$this->text()->null(), //Проектная декларация
        ], $tableOptions);



        //таблица heating_type  отопление  центральное газовае паровое и тд
        $this->createTable('{{%heating_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица window_view_type // вид море подвесз дорога
        $this->createTable('{{%window_view_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица restroom_type cанузел совместный раздельй 2 3 4
        $this->createTable('{{%restroom_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица repairs_type тип балкона балкон лоджыя
        $this->createTable('{{%balkoon_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);


      // для оренды
        //таблица time_rent_type долкгий короткий сезон долгострочно посуточно
        $this->createTable('{{%time_rent_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

// для дома
        //таблица house_type  дача котедж пентхаус
        $this->createTable('{{%house_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);


        //таблица mebli_type  меблированость- частично полностби отсутвуют
        $this->createTable('{{%mebli_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица otopleniye_type  Отопление газофицирована жыдкое буржуйка и тд
        $this->createTable('{{%otopleniye_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица Электроснабжение  отсутсвует подключено автономное и тд
        $this->createTable('{{%electrification_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица газофикация  отсутсвует подключено автономное и тд
        $this->createTable('{{%gasfication_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица Водоснабжение  отсутсвует подключено автономное и тд
        $this->createTable('{{%waterfication_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);
        //таблица Канализация  отсутсвует подключено автономное и тд
        $this->createTable('{{%cloakfication_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица Рельеф  ровный склон холмы
        $this->createTable('{{%relief_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);




        //таблица Форма участка
        $this->createTable('{{%forma_place_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица Назначение земли
        $this->createTable('{{%purpose_of_land_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица  тип использования любой офис аптека ....
        $this->createTable('{{%using_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //таблица тип здания администранивное  бизнесс центер дом и тд
        $this->createTable('{{%bilding_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);

        //------------cклады
        //таблица тип
        $this->createTable('{{%stock_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);
        //таблица тип
        $this->createTable('{{%storage_mode_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);
        //таблица тип
        $this->createTable('{{%storage_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);
        //таблица тип
        $this->createTable('{{%storage_floar_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);
        //таблица тип
        $this->createTable('{{%storage_unload_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);
        //таблица тип
        $this->createTable('{{%storage_gate_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);
        //таблица тип
        $this->createTable('{{%storage_access_to_road_type}}', [
            'id' => Schema::TYPE_PK,
            'name' => $this->string()->null(),
        ], $tableOptions);




      //  stock_type_id storage_mode_type_id storage_type_id storage_floar_type_id storage_unload_type_id storage_gate_type_id storage_access_to_road_type_id








        $this->addForeignKey('user_objects_user_id_fk', '{{%objects}}', 'user_id', '{{%user}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_deal_id_fk', '{{%objects}}', 'deal_type_id', '{{%deal}}', 'id', 'NO ACTION', 'CASCADE');

        $this->addForeignKey('user_objects_object_type_id_fk', '{{%objects}}', 'object_type_id', '{{%object_type}}', 'id', 'NO ACTION', 'CASCADE');

        $this->addForeignKey('user_objects_currency_type_id_fk', '{{%objects}}', 'currency_type_id', '{{%currency_type}}', 'id', 'NO ACTION', 'CASCADE');

        $this->addForeignKey('user_objects_room_type_id_fk', '{{%objects}}', 'room_type_id', '{{%room_type}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_base_type_id_fk', '{{%objects}}', 'base_type_id', '{{%base_type}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_repairs_type_id_fk', '{{%objects}}', 'repairs_type_id', '{{%repairs_type}}', 'id', 'NO ACTION', 'CASCADE');


        $this->addForeignKey('user_objects_new_bilding_type_id_fk', '{{%objects}}', 'new_bilding_type_id', '{{%new_bilding_type}}', 'id', 'NO ACTION', 'CASCADE');

      $this->addForeignKey('user_objects_heating_type_id_fk', '{{%objects}}', 'heating_type_id', '{{%heating_type}}', 'id', 'NO ACTION', 'CASCADE');
      $this->addForeignKey('user_objects_window_view_type_id_fk', '{{%objects}}', 'window_view_type_id', '{{%window_view_type}}', 'id', 'NO ACTION', 'CASCADE');
      $this->addForeignKey('user_objects_restroom_type_id_fk', '{{%objects}}', 'restroom_type_id', '{{%restroom_type}}', 'id', 'NO ACTION', 'CASCADE');
      $this->addForeignKey('user_objects_balkoon_type_id_fk', '{{%objects}}', 'balkoon_type_id', '{{%balkoon_type}}', 'id', 'NO ACTION', 'CASCADE');

      $this->addForeignKey('user_objects_time_rent_type_id_fk', '{{%objects}}', 'time_rent_type_id', '{{%time_rent_type}}', 'id', 'NO ACTION', 'CASCADE');

      //  house_type mebli_type otopleniye_type electrification_type gasfication_type waterfication_type cloakfication_type relief_type forma_place_type purpose_of_land_type
  $this->addForeignKey('user_objects_house_type_id_fk', '{{%objects}}', 'house_type_id', '{{%house_type}}', 'id', 'NO ACTION', 'CASCADE');
  $this->addForeignKey('user_objects_mebli_type_id_fk', '{{%objects}}', 'mebli_type_id', '{{%mebli_type}}', 'id', 'NO ACTION', 'CASCADE');
  $this->addForeignKey('user_objects_otopleniye_type_id_fk', '{{%objects}}', 'otopleniye_type_id', '{{%otopleniye_type}}', 'id', 'NO ACTION', 'CASCADE');
  $this->addForeignKey('user_objects_electrification_type_id_fk', '{{%objects}}', 'electrification_type_id', '{{%electrification_type}}', 'id', 'NO ACTION', 'CASCADE');
  $this->addForeignKey('user_objects_gasfication_type_id_fk', '{{%objects}}', 'gasfication_type_id', '{{%gasfication_type}}', 'id', 'NO ACTION', 'CASCADE');
  $this->addForeignKey('user_objects_waterfication_type_id_fk', '{{%objects}}', 'waterfication_type_id', '{{%waterfication_type}}', 'id', 'NO ACTION', 'CASCADE');
  $this->addForeignKey('user_objects_cloakfication_type_id_fk', '{{%objects}}', 'cloakfication_type_id', '{{%cloakfication_type}}', 'id', 'NO ACTION', 'CASCADE');
  $this->addForeignKey('user_objects_relief_type_id_fk', '{{%objects}}', 'relief_type_id', '{{%relief_type}}', 'id', 'NO ACTION', 'CASCADE');
  $this->addForeignKey('user_objects_forma_place_type_id_fk', '{{%objects}}', 'forma_place_type_id', '{{%forma_place_type}}', 'id', 'NO ACTION', 'CASCADE');
  $this->addForeignKey('user_objects_purpose_of_land_type_id_fk', '{{%objects}}', 'purpose_of_land_type_id', '{{%purpose_of_land_type}}', 'id', 'NO ACTION', 'CASCADE');


        $this->addForeignKey('user_objects_using_type_id_fk', '{{%objects}}', 'using_type_id', '{{%using_type}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_bilding_type_id_fk', '{{%objects}}', 'bilding_type_id', '{{%bilding_type}}', 'id', 'NO ACTION', 'CASCADE');

        //  stock_type_id
        // storage_mode_type_id
        // storage_type_id
        // storage_floar_type_id
        // storage_unload_type_id
        // storage_gate_type_id
        // storage_access_to_road_type_id
        $this->addForeignKey('user_objects_stock_type_id_fk', '{{%objects}}', 'stock_type_id', '{{%stock_type}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_storage_mode_type_id_fk', '{{%objects}}', 'storage_mode_type_id', '{{%storage_mode_type}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_storage_type_id_fk', '{{%objects}}', 'storage_type_id', '{{%storage_type}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_storage_unload_type_id_fk', '{{%objects}}', 'storage_unload_type_id', '{{%storage_unload_type}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_storage_gate_type_id_fk', '{{%objects}}', 'storage_gate_type_id', '{{%storage_gate_type}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_storage_floar_type_id_fk', '{{%objects}}', 'storage_floar_type_id', '{{%storage_floar_type}}', 'id', 'NO ACTION', 'CASCADE');
        $this->addForeignKey('user_objects_storage_access_to_road_type_id_fk', '{{%objects}}', 'storage_access_to_road_type_id', '{{%storage_access_to_road_type}}', 'id', 'NO ACTION', 'CASCADE');



    }


    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('objects');
        $this->dropTable('deal');
        $this->dropTable('object_type');
        $this->dropTable('room_type');
        $this->dropTable('base_type');
        $this->dropTable('repairs_type');
        $this->dropTable('currency_type');
        $this->dropTable('new_bilding_type');
        $this->dropTable('time_rent_type');
        $this->dropTable('heating_type');
        $this->dropTable('window_view_type');
        $this->dropTable('restroom_type');
        $this->dropTable('balkoon_type');
        $this->dropTable('house_type');
        $this->dropTable( 'mebli_type');
        $this->dropTable( 'otopleniye_type');
        $this->dropTable( 'electrification_type');
        $this->dropTable( 'gasfication_type');
        $this->dropTable( 'waterfication_type');
        $this->dropTable( 'cloakfication_type');
        $this->dropTable( 'relief_type');
        $this->dropTable( 'forma_place_type');
        $this->dropTable( 'purpose_of_land_type');
        $this->dropTable( 'using_type');
        $this->dropTable( 'bilding_type');
        $this->dropTable( 'stock_type');
        $this->dropTable( 'storage_mode_type');
        $this->dropTable( 'storage_type');
        $this->dropTable( 'storage_floar_type');
        $this->dropTable( 'storage_unload_type');
        $this->dropTable( 'storage_gate_type');
        $this->dropTable( 'storage_access_to_road_type');

    }
}
