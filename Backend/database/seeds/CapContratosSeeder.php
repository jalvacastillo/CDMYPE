<?php

use Illuminate\Database\Seeder;
use App\Models\Caps\Contrato;

class CapContratosSeeder extends Seeder
{

    public function run()
    {
        $capcontratos = array(
          array('id' => '4','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Director','captermino_id' => '15','deleted_at' => NULL,'created_at' => '2014-09-02 20:05:20','updated_at' => '2014-09-02 20:19:52'),
          array('id' => '5','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Directora','captermino_id' => '16','deleted_at' => NULL,'created_at' => '2014-09-24 17:28:15','updated_at' => '2014-09-24 17:28:15'),
          array('id' => '6','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Director','captermino_id' => '19','deleted_at' => NULL,'created_at' => '2014-10-30 15:48:03','updated_at' => '2014-10-30 15:48:03'),
          array('id' => '7','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Directora','captermino_id' => '17','deleted_at' => NULL,'created_at' => '2014-11-05 21:22:16','updated_at' => '2015-01-07 15:43:54'),
          array('id' => '8','pago' => '430.00','lugar_firma' => 'Sensuntepeque ','firma' => 'Director','captermino_id' => '20','deleted_at' => NULL,'created_at' => '2014-11-11 19:39:21','updated_at' => '2014-11-11 19:43:07'),
          array('id' => '9','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Director','captermino_id' => '22','deleted_at' => NULL,'created_at' => '2014-11-15 15:32:31','updated_at' => '2014-11-15 15:32:31'),
          array('id' => '10','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Directora','captermino_id' => '21','deleted_at' => NULL,'created_at' => '2014-11-20 14:53:27','updated_at' => '2014-11-20 14:53:27'),
          array('id' => '11','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Director','captermino_id' => '24','deleted_at' => NULL,'created_at' => '2014-11-28 16:45:33','updated_at' => '2014-11-28 16:45:33'),
          array('id' => '12','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Director','captermino_id' => '25','deleted_at' => NULL,'created_at' => '2014-12-09 22:36:31','updated_at' => '2014-12-09 22:36:31'),
          array('id' => '13','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Director','captermino_id' => '26','deleted_at' => NULL,'created_at' => '2014-12-11 17:09:29','updated_at' => '2014-12-11 17:09:29'),
          array('id' => '14','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Directora','captermino_id' => '27','deleted_at' => NULL,'created_at' => '2014-12-12 17:04:45','updated_at' => '2014-12-12 17:04:54'),
          array('id' => '15','pago' => '430.00','lugar_firma' => 'Sensuntepeque ','firma' => 'Director','captermino_id' => '28','deleted_at' => NULL,'created_at' => '2015-04-15 20:45:32','updated_at' => '2015-04-15 20:45:32'),
          array('id' => '16','pago' => '430.00','lugar_firma' => 'UNICAES-ILOBASCO','firma' => 'Directora','captermino_id' => '30','deleted_at' => NULL,'created_at' => '2015-05-13 21:55:23','updated_at' => '2015-05-13 21:55:23'),
          array('id' => '17','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '29','deleted_at' => NULL,'created_at' => '2015-05-19 21:19:01','updated_at' => '2015-05-19 21:19:09'),
          array('id' => '18','pago' => '400.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '32','deleted_at' => NULL,'created_at' => '2015-06-22 14:23:56','updated_at' => '2015-06-22 14:31:24'),
          array('id' => '19','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Directora','captermino_id' => '31','deleted_at' => NULL,'created_at' => '2015-06-22 16:00:34','updated_at' => '2015-06-22 16:00:34'),
          array('id' => '20','pago' => '430.00','lugar_firma' => 'San Vicente','firma' => 'Director','captermino_id' => '33','deleted_at' => NULL,'created_at' => '2015-07-04 15:51:26','updated_at' => '2015-07-04 15:51:26'),
          array('id' => '21','pago' => '410.00','lugar_firma' => 'Ilobasco','firma' => 'Directora','captermino_id' => '36','deleted_at' => NULL,'created_at' => '2015-08-18 13:08:24','updated_at' => '2015-08-18 13:08:24'),
          array('id' => '22','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Directora','captermino_id' => '35','deleted_at' => NULL,'created_at' => '2015-09-03 20:12:14','updated_at' => '2015-09-03 20:12:14'),
          array('id' => '23','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Directora','captermino_id' => '37','deleted_at' => NULL,'created_at' => '2015-09-08 20:22:07','updated_at' => '2015-09-08 20:22:07'),
          array('id' => '24','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '39','deleted_at' => NULL,'created_at' => '2015-09-16 21:28:13','updated_at' => '2015-09-16 21:28:13'),
          array('id' => '25','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Directora','captermino_id' => '40','deleted_at' => NULL,'created_at' => '2015-10-14 12:40:19','updated_at' => '2015-10-14 12:40:19'),
          array('id' => '26','pago' => '430.00','lugar_firma' => 'Sesuntepeque','firma' => 'Director','captermino_id' => '41','deleted_at' => NULL,'created_at' => '2015-10-27 22:02:50','updated_at' => '2015-10-27 22:02:50'),
          array('id' => '27','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Directora','captermino_id' => '43','deleted_at' => NULL,'created_at' => '2015-11-10 09:51:51','updated_at' => '2015-11-10 09:51:51'),
          array('id' => '28','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '44','deleted_at' => NULL,'created_at' => '2015-11-25 11:17:42','updated_at' => '2015-11-25 11:17:42'),
          array('id' => '29','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '45','deleted_at' => NULL,'created_at' => '2015-12-11 06:40:08','updated_at' => '2015-12-11 06:40:31'),
          array('id' => '30','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '46','deleted_at' => NULL,'created_at' => '2016-06-13 13:47:26','updated_at' => '2016-06-13 13:47:26'),
          array('id' => '31','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '47','deleted_at' => NULL,'created_at' => '2016-07-19 15:55:16','updated_at' => '2016-07-19 15:55:16'),
          array('id' => '32','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '48','deleted_at' => NULL,'created_at' => '2016-07-27 16:54:09','updated_at' => '2016-07-27 16:54:09'),
          array('id' => '33','pago' => '430.00','lugar_firma' => 'Cojutepeque','firma' => 'Director','captermino_id' => '50','deleted_at' => NULL,'created_at' => '2016-08-22 14:22:31','updated_at' => '2016-08-22 14:22:31'),
          array('id' => '34','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '49','deleted_at' => NULL,'created_at' => '2016-09-08 07:11:19','updated_at' => '2016-09-08 07:11:19'),
          array('id' => '35','pago' => '430.00','lugar_firma' => 'UNICAES-Ilobasco','firma' => 'Director','captermino_id' => '51','deleted_at' => NULL,'created_at' => '2016-10-12 10:31:13','updated_at' => '2016-10-12 10:31:13'),
          array('id' => '36','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '52','deleted_at' => NULL,'created_at' => '2016-10-14 10:18:12','updated_at' => '2016-10-14 10:18:12'),
          array('id' => '37','pago' => '430.00','lugar_firma' => 'Ilobasco','firma' => 'Director','captermino_id' => '53','deleted_at' => NULL,'created_at' => '2016-10-28 07:55:24','updated_at' => '2016-10-28 07:55:24')
        );

        
        for ($i = 0; $i < count($capcontratos); $i++) { 

            $table = new Contrato;
            $table->id              = $capcontratos[$i]['id'];            
            $table->pago            = $capcontratos[$i]['pago'];
            $table->lugar           = $capcontratos[$i]['lugar_firma'];
            $table->firma           = $capcontratos[$i]['firma'];
            $table->cap_id   = $capcontratos[$i]['captermino_id'];
            $table->save();

        }

        // $faker = Faker\Factory::create();

        //     for($i = 1; $i <= 20 ; $i++)
        //     {
        //         $table = new Contrato;
        //         $table->termino_id  = $faker->numberBetween(1,7);
        //         $table->lugar    = $faker->word;
        //         $table->firma  = $faker->numberBetween(1,2);
        //         $table->pago  = $faker->numberBetween(100,2000);

        //         $table->save();

        //     }

    }
}
