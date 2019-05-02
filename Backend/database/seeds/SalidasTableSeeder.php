<?php

use Illuminate\Database\Seeder;
use App\Models\Salidas\Salida;

class SalidasTableSeeder extends Seeder
{

    public function run()
    {

        $salidas = array(
          array('id' => '1','fecha_inicio' => '2014-11-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'sadfasdf','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:17:51','updated_at' => '2014-11-25 20:14:05'),
          array('id' => '2','fecha_inicio' => '2014-11-04','hora_salida' => '08:30:00','hora_regreso' => '04:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:19:40','updated_at' => '2014-11-25 19:19:40'),
          array('id' => '3','fecha_inicio' => '2014-11-05','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:20:24','updated_at' => '2014-11-25 19:20:24'),
          array('id' => '4','fecha_inicio' => '2014-11-06','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:21:24','updated_at' => '2014-11-25 19:21:24'),
          array('id' => '5','fecha_inicio' => '2014-11-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:21:52','updated_at' => '2014-11-25 19:23:00'),
          array('id' => '6','fecha_inicio' => '2014-11-10','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:23:56','updated_at' => '2014-11-25 19:23:56'),
          array('id' => '7','fecha_inicio' => '2014-11-11','hora_salida' => '08:30:00','hora_regreso' => '16:30:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:24:43','updated_at' => '2014-11-25 19:24:43'),
          array('id' => '8','fecha_inicio' => '2014-11-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:25:22','updated_at' => '2014-11-25 19:25:22'),
          array('id' => '9','fecha_inicio' => '2014-11-13','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Pick up blanco','created_at' => '2014-11-25 19:26:16','updated_at' => '2014-11-25 19:26:16'),
          array('id' => '10','fecha_inicio' => '2014-11-14','hora_salida' => '08:00:00','hora_regreso' => '17:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Asistir a reunión de empresarialidad femenina.','objetivo' => 'Reunión CONAMYPE de empresarialidad femenina','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:27:59','updated_at' => '2014-11-25 19:27:59'),
          array('id' => '11','fecha_inicio' => '2014-11-17','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:28:52','updated_at' => '2014-11-25 19:28:52'),
          array('id' => '12','fecha_inicio' => '2014-11-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:29:30','updated_at' => '2014-11-25 19:29:30'),
          array('id' => '13','fecha_inicio' => '2014-11-19','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Pick up blanco','created_at' => '2014-11-25 19:30:17','updated_at' => '2014-11-25 19:30:17'),
          array('id' => '14','fecha_inicio' => '2014-11-20','hora_salida' => '08:30:00','hora_regreso' => '16:30:00','lugar_destino' => 'San Vicente','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Pick up blanco','created_at' => '2014-11-25 19:31:31','updated_at' => '2014-11-25 19:31:31'),
          array('id' => '15','fecha_inicio' => '2014-11-21','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:32:12','updated_at' => '2014-11-25 19:32:12'),
          array('id' => '16','fecha_inicio' => '2014-11-24','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '4','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:32:41','updated_at' => '2014-11-25 19:32:41'),
          array('id' => '17','fecha_inicio' => '2014-11-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:33:11','updated_at' => '2014-11-25 19:33:11'),
          array('id' => '18','fecha_inicio' => '2014-11-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '5','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:34:16','updated_at' => '2014-11-25 19:34:16'),
          array('id' => '19','fecha_inicio' => '2014-11-27','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:34:59','updated_at' => '2014-11-25 19:34:59'),
          array('id' => '20','fecha_inicio' => '2014-11-28','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Yaris Mecánico','created_at' => '2014-11-25 19:35:35','updated_at' => '2014-11-25 19:35:35'),
          array('id' => '21','fecha_inicio' => '2014-12-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Recolectar información de impacto generado en los empresarios con los servicios recibidos en el periodo 2014.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Zona Urbana','created_at' => '2014-12-01 15:17:45','updated_at' => '2014-12-01 16:03:00'),
          array('id' => '22','fecha_inicio' => '2014-12-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Recolectar información de impacto generado en los empresarios con los servicios brindados en el periodo 2014.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Zona Rural','created_at' => '2014-12-01 15:19:33','updated_at' => '2014-12-01 15:56:08'),
          array('id' => '23','fecha_inicio' => '2014-12-05','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Recolectar información de impacto generado en los empresarios con los servicios recibidos en el periodo 2014.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Zona Urbana','created_at' => '2014-12-01 15:24:06','updated_at' => '2014-12-01 16:03:32'),
          array('id' => '24','fecha_inicio' => '2014-12-10','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Recolectar información de impacto generado en los empresarios con los servicios recibidos en el periodo 2014.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Zona Rural','created_at' => '2014-12-01 15:25:22','updated_at' => '2014-12-01 16:04:01'),
          array('id' => '25','fecha_inicio' => '2014-12-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Recolectar información de impacto generado en los empresarios con los servicios recibidos en el periodo 2014.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Zona Urbana','created_at' => '2014-12-01 15:27:53','updated_at' => '2014-12-01 16:04:48'),
          array('id' => '26','fecha_inicio' => '2014-12-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Esteban Catarina','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Recolectar información de impacto generado en los empresarios con los servicios recibidos en el periodo 2014.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Zona Rural','created_at' => '2014-12-01 15:30:21','updated_at' => '2014-12-01 16:07:59'),
          array('id' => '27','fecha_inicio' => '2014-12-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Verapaz','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Recolectar información de
        impacto generado en los
        empresarios con los servicios
        recibidos en el periodo 2014.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Zona Urbana','created_at' => '2014-12-01 15:33:13','updated_at' => '2014-12-01 19:04:32'),
          array('id' => '28','fecha_inicio' => '2014-12-17','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Santo Domingo','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Recolectar información de impacto económico generado en los empresarios con los servicios brindados en el periodo 2014.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Zona Rural','created_at' => '2014-12-01 15:34:55','updated_at' => '2014-12-01 16:14:01'),
          array('id' => '29','fecha_inicio' => '2014-12-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Se ha convocado a reunión de trabajo.','objetivo' => 'Asistir a reunión de trabajo con asesoras de Empresarialidad Femenina. ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Zona Urbana','created_at' => '2014-12-01 15:37:15','updated_at' => '2014-12-01 19:39:37'),
          array('id' => '30','fecha_inicio' => '2014-12-15','hora_salida' => '11:00:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Recolectar información de impacto generado en los empresarios con los servicios recibidos en el periodo 2014.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Zona Urbana','created_at' => '2014-12-01 15:38:07','updated_at' => '2014-12-01 16:06:00'),
          array('id' => '31','fecha_inicio' => '2015-02-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Como directores de CDMYPE,Ilobasco se nos ha convocado a una reunión de trabajo.','objetivo' => 'Asistir a reunión de trabajo en CONAMYPE, San Salvador.','encargado' => '11','estado' => 'Aprobado','observacion' => 'Se solicita vehículo ','created_at' => '2015-02-16 17:41:44','updated_at' => '2015-02-16 17:41:44'),
          array('id' => '32','fecha_inicio' => '2015-02-19','hora_salida' => '13:00:00','hora_regreso' => '18:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Se ha convocado a reunión de trabajo en CONAMYPE.','objetivo' => 'Asistir a reunión de trabajo en CONAMYPE, San salvador.','encargado' => '11','estado' => 'Aprobado','observacion' => 'Zona Urbana','created_at' => '2015-02-16 18:48:41','updated_at' => '2015-02-16 18:48:41'),
          array('id' => '33','fecha_inicio' => '2015-03-18','hora_salida' => '06:30:00','hora_regreso' => '10:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Se llevará a cabo el lanzamiento de la Asociación de Instituciones Operadoras de CDMYPE, en el marco de la Conferencia CDMYPE, las fechas 18,19 y 20 de marzo. 2015.

        Lugar: Hotel Crowne Plaza','objetivo' => 'Asistir al lanzamiento de la Asociación de Instituciones Operadoras de CDMYPE, en el marco de la Conferencia CDMYPE, las fechas 18,19 y 20 de marzo. 2015.','encargado' => '11','estado' => 'Aprobado','observacion' => 'Se solicita vehículo con motorista, para ir a dejar a personal de CDMYPE.','created_at' => '2015-03-13 16:33:10','updated_at' => '2015-03-13 16:42:10'),
          array('id' => '34','fecha_inicio' => '2015-03-20','hora_salida' => '13:00:00','hora_regreso' => '17:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Trasladar a personal de CDMYPE, de San Salvador a UNICAES-Ilobasco.','objetivo' => 'Trasladar a personal de CDMYPE, de San Salvador a UNICAES-Ilobasco','encargado' => '11','estado' => 'Aprobado','observacion' => 'Se solicita vehículo con motorista, para ir a atraer  a personal de CDMYPE.','created_at' => '2015-03-13 17:03:20','updated_at' => '2015-03-13 17:03:20'),
          array('id' => '35','fecha_inicio' => '2015-04-21','hora_salida' => '08:30:00','hora_regreso' => '12:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Para hacer más eficiente la realización de entrevistas con propietarios de restaurantes y establecimientos de comida.','objetivo' => 'Desarrollar actividades relacionadas con estudio de demanda agroindustriales en el Municipio de Ilobasco.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán, acompaña estudiantes de Licenciatura en Negocios Internacionales.','created_at' => '2015-04-18 14:49:52','updated_at' => '2015-04-18 15:33:38'),
          array('id' => '36','fecha_inicio' => '2015-04-22','hora_salida' => '08:30:00','hora_regreso' => '16:30:00','lugar_destino' => 'Tecoluca','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al sur del Municipio de Tecoluca a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Algunas empresas están ubicadas en la zona rural por lo que se solicita Pick Up.','created_at' => '2015-04-18 14:52:21','updated_at' => '2015-04-18 15:43:55'),
          array('id' => '37','fecha_inicio' => '2015-04-23','hora_salida' => '08:30:00','hora_regreso' => '16:30:00','lugar_destino' => 'San Vicente','justificacion' => 'Para ejecutar las actividades de apoyo a la Mype de San Vicente se realizará visita a los municipios de San Vicente, Tepetitan y Verapaz en Coordinación con alcaldía de San Vicente, JICA entre otros.','objetivo' => 'Desarrollar acciones coordinadas con Instituciones de apoyo a la Mype en el Departamento de San Vicente.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-18 14:54:51','updated_at' => '2015-04-18 15:50:10'),
          array('id' => '38','fecha_inicio' => '2015-04-24','hora_salida' => '08:30:00','hora_regreso' => '12:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Para hacer más eficiente la realización de entrevistas con propietarios de restaurantes y establecimientos de comida.','objetivo' => 'Desarrollar actividades relacionadas con estudio de demanda agroindustriales en el Municipio de Ilobasco.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Para hacer más eficiente la realización de entrevistas con propietarios de restaurantes y establecimientos de comida.','created_at' => '2015-04-18 15:00:41','updated_at' => '2015-04-18 15:52:02'),
          array('id' => '39','fecha_inicio' => '2015-04-24','hora_salida' => '12:30:00','hora_regreso' => '17:30:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para desarrollar acciones encaminadas a brindar servicios de asesoría y supervisión de capacitación, dirigidas a empresarios del Municipio de Sensuntepeque.','objetivo' => 'Coordinar atención de empresarios miembros de Comité de Competitividad Municipal de Sensuntepeque.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-18 15:01:36','updated_at' => '2015-04-18 15:58:59'),
          array('id' => '41','fecha_inicio' => '2015-04-28','hora_salida' => '08:30:00','hora_regreso' => '16:30:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Realizar diagnóstico de inicio empresarial y financiero a empresa de Embutidos La Española.','objetivo' => 'Brindar servicios de asesoría a nuevos clientes.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-18 15:03:06','updated_at' => '2015-04-18 16:05:44'),
          array('id' => '42','fecha_inicio' => '2015-04-29','hora_salida' => '08:30:00','hora_regreso' => '16:30:00','lugar_destino' => 'San Vicente','justificacion' => 'Para ejecutar las actividades de apoyo a la Mype de San Vicente se realizará visita a los municipios de San Vicente, Tepetitan y Verapaz en Coordinación con alcaldía de San Vicente, JICA y FUNDE.','objetivo' => 'Desarrollar acciones coordinadas con Instituciones de apoyo a la Mype en el Departamento de San Vicente.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-18 15:04:29','updated_at' => '2015-04-18 16:07:56'),
          array('id' => '43','fecha_inicio' => '2015-04-30','hora_salida' => '08:30:00','hora_regreso' => '16:30:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Realizar una inspección y diagnóstico de las condiciones sanitarias de la planta de producción de Jiovanotis Pizza, en coordinación con la Escuela de Alimentos.as a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán, acompaña 2 estudiantes y un docente de la Escuela de Alimentos.','created_at' => '2015-04-18 15:07:26','updated_at' => '2015-04-18 16:11:32'),
          array('id' => '44','fecha_inicio' => '2015-04-20','hora_salida' => '00:30:00','hora_regreso' => '18:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado a San Salvador a reunión de trabajo en JICA, San Salvador.','objetivo' => 'Asistir a reunión de trabajo en JICA.','encargado' => '11','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-18 16:16:46','updated_at' => '2015-04-18 16:16:46'),
          array('id' => '45','fecha_inicio' => '2015-04-28','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 20:07:56','updated_at' => '2015-04-28 20:07:56'),
          array('id' => '46','fecha_inicio' => '2015-05-05','hora_salida' => '06:30:00','hora_regreso' => '17:30:00','lugar_destino' => 'San Salvador','justificacion' => 'Asistir a capacitación de  promoción de una cultura exportadora: exportando competitivamente, la cual se desarrollará en Hotel Terraza, San Salvador.','objetivo' => 'Conocer a través de una capacitación los elementos necesarios a considerar paso a paso en el proceso de las exportaciones, e identificar la potencialidad de futuros proyectos en de las MYPES atendidas por CDMYPE.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 21:33:42','updated_at' => '2015-04-30 22:47:06'),
          array('id' => '47','fecha_inicio' => '2015-05-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas en el Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedán para visitar los municipios de San Vicente,Verapaz, Santo Domingo y San Sebastian.','created_at' => '2015-04-28 21:40:30','updated_at' => '2015-04-29 17:04:35'),
          array('id' => '48','fecha_inicio' => '2015-05-28','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Sensuntepeque a las
        cuales por la distancia que hay entre su
        ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 21:44:09','updated_at' => '2015-04-29 17:23:55'),
          array('id' => '49','fecha_inicio' => '2015-05-06','hora_salida' => '06:30:00','hora_regreso' => '17:30:00','lugar_destino' => 'San Salvador','justificacion' => 'Asistir a capacitación de promoción de una cultura exportadora: exportando competitivamente, la cual se desarrollará en Hotel Terraza, San Salvador.','objetivo' => 'Conocer a través de una capacitación los elementos necesarios a considerar paso a paso en el proceso de las exportaciones, e identificar la potencialidad de futuros proyectos en de las MYPES atendidas por CDMYPE.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 21:56:01','updated_at' => '2015-04-30 22:52:35'),
          array('id' => '50','fecha_inicio' => '2015-05-08','hora_salida' => '08:30:00','hora_regreso' => '12:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Ilobasco. ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 22:04:03','updated_at' => '2015-04-28 22:28:05'),
          array('id' => '51','fecha_inicio' => '2015-05-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Debido a la distancia que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán, para visitar los municipios de la zona Norte de San Vicente.','created_at' => '2015-04-28 22:08:12','updated_at' => '2015-04-29 17:06:55'),
          array('id' => '52','fecha_inicio' => '2015-05-13','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Tecoluca a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 22:10:37','updated_at' => '2015-04-29 17:11:54'),
          array('id' => '53','fecha_inicio' => '2015-05-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Sensuntepeque. ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 22:12:16','updated_at' => '2015-04-29 17:11:16'),
          array('id' => '55','fecha_inicio' => '2015-05-19','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 22:14:02','updated_at' => '2015-04-28 22:14:02'),
          array('id' => '56','fecha_inicio' => '2015-05-20','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Cojutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 22:15:18','updated_at' => '2015-04-28 22:15:18'),
          array('id' => '57','fecha_inicio' => '2015-05-21','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de San Vicente Norte a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 22:21:06','updated_at' => '2015-04-28 22:21:06'),
          array('id' => '58','fecha_inicio' => '2015-05-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 22:22:50','updated_at' => '2015-04-28 22:22:50'),
          array('id' => '59','fecha_inicio' => '2015-05-27','hora_salida' => '08:30:00','hora_regreso' => '16:30:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Tecoluca a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Pick Up','created_at' => '2015-04-28 22:24:22','updated_at' => '2015-04-29 17:22:18'),
          array('id' => '60','fecha_inicio' => '2015-05-15','hora_salida' => '13:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Ilobasco.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 22:29:44','updated_at' => '2015-04-28 22:33:38'),
          array('id' => '61','fecha_inicio' => '2015-05-22','hora_salida' => '08:30:00','hora_regreso' => '12:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Ilobasco.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-28 22:35:33','updated_at' => '2015-04-28 22:35:33'),
          array('id' => '62','fecha_inicio' => '2015-05-29','hora_salida' => '14:00:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Ilobasco.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-04-29 17:25:49','updated_at' => '2015-04-29 17:26:23'),
          array('id' => '63','fecha_inicio' => '2015-05-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Debido a la distancia que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos.
        ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:08:10','updated_at' => '2015-05-25 20:08:10'),
          array('id' => '64','fecha_inicio' => '2015-06-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:21:28','updated_at' => '2015-05-25 20:21:28'),
          array('id' => '65','fecha_inicio' => '2015-06-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de San Vicente a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:24:02','updated_at' => '2015-05-25 20:24:02'),
          array('id' => '66','fecha_inicio' => '2015-06-05','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Esteban Catarina','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas en San Esteban Catarina a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Pick Up','created_at' => '2015-05-25 20:26:23','updated_at' => '2015-05-25 21:13:09'),
          array('id' => '67','fecha_inicio' => '2015-06-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de San Vicente a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:30:58','updated_at' => '2015-05-25 21:11:57'),
          array('id' => '68','fecha_inicio' => '2015-06-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Cojutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:34:59','updated_at' => '2015-05-25 21:14:03'),
          array('id' => '69','fecha_inicio' => '2015-06-10','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de San Vicente a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.
        Desarrollar taller de Administración empresarial dirigido a un grupo de empresarios.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:36:44','updated_at' => '2015-05-26 21:00:12'),
          array('id' => '70','fecha_inicio' => '2015-06-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Sensuntepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:38:41','updated_at' => '2015-05-25 21:30:45'),
          array('id' => '71','fecha_inicio' => '2015-06-12','hora_salida' => '14:00:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Ilobasco.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:39:45','updated_at' => '2015-05-25 20:40:24'),
          array('id' => '72','fecha_inicio' => '2015-06-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento empresarial y
        asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:42:29','updated_at' => '2015-05-25 21:32:37'),
          array('id' => '73','fecha_inicio' => '2015-06-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Sensuntepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:44:28','updated_at' => '2015-05-25 20:44:28'),
          array('id' => '74','fecha_inicio' => '2015-06-23','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Cojutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:46:28','updated_at' => '2015-05-25 20:46:28'),
          array('id' => '75','fecha_inicio' => '2015-06-24','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de San Vicente y tecoluca a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Pick Up','created_at' => '2015-05-25 20:49:35','updated_at' => '2015-05-25 20:49:35'),
          array('id' => '76','fecha_inicio' => '2015-06-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Sensuntepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento empresarial y asesoría a nuevos clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:51:37','updated_at' => '2015-05-25 20:51:37'),
          array('id' => '77','fecha_inicio' => '2015-06-26','hora_salida' => '14:00:00','hora_regreso' => '16:00:00','lugar_destino' => 'Ilobasco','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Ilobasco.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:54:04','updated_at' => '2015-05-25 20:54:46'),
          array('id' => '78','fecha_inicio' => '2015-06-30','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Suchitoto a las cuales
        por la distancia que hay entre su ubicación
        y la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-05-25 20:56:23','updated_at' => '2015-05-25 20:56:23'),
          array('id' => '79','fecha_inicio' => '2015-06-05','hora_salida' => '07:30:00','hora_regreso' => '14:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado a San Salvador a reunión de trabajo.','objetivo' => 'Asistir a reunión de trabajo de Directores de CDMYPE, en CONAMYPE.','encargado' => '11','estado' => 'Aprobado','observacion' => 'se solicita vehículo Automático','created_at' => '2015-05-25 21:08:09','updated_at' => '2015-05-25 21:08:09'),
          array('id' => '80','fecha_inicio' => '2015-07-01','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-06-30 15:48:41','updated_at' => '2015-06-30 17:17:28'),
          array('id' => '81','fecha_inicio' => '2015-07-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-06-30 15:49:58','updated_at' => '2015-06-30 15:49:58'),
          array('id' => '82','fecha_inicio' => '2015-07-02','hora_salida' => '07:00:00','hora_regreso' => '17:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Como Directores de CDMYPE-Ilobasco, se nos ha convocado a una reunión de trabajo.','objetivo' => 'Asistir a reunión de Directores de CDMYPE, en CONAMYPE San Salvador.','encargado' => '11','estado' => 'Aprobado','observacion' => 'se solicita vehículo Automático','created_at' => '2015-06-30 15:52:58','updated_at' => '2015-06-30 15:52:58'),
          array('id' => '83','fecha_inicio' => '2015-07-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-06-30 15:54:56','updated_at' => '2015-06-30 15:54:56'),
          array('id' => '84','fecha_inicio' => '2015-07-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-06-30 15:56:18','updated_at' => '2015-06-30 15:56:18'),
          array('id' => '85','fecha_inicio' => '2015-07-08','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.
        ','encargado' => '5','estado' => 'Aprobado','observacion' => 'se solicita vehículo Automático, ya que será conducido por licda. Ingrid Hernández.','created_at' => '2015-06-30 16:04:41','updated_at' => '2015-06-30 16:04:41'),
          array('id' => '86','fecha_inicio' => '2015-07-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-06-30 16:07:38','updated_at' => '2015-06-30 16:07:38'),
          array('id' => '87','fecha_inicio' => '2015-07-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Suchitoto a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '4','estado' => 'Aprobado','observacion' => 'se solicita vehículo Automático, ya que será conducido por licda. Aminta Rodas','created_at' => '2015-06-30 16:09:26','updated_at' => '2015-06-30 16:09:26'),
          array('id' => '88','fecha_inicio' => '2015-07-21','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-06-30 16:20:31','updated_at' => '2015-06-30 16:20:31'),
          array('id' => '89','fecha_inicio' => '2015-07-22','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico','encargado' => '4','estado' => 'Aprobado','observacion' => 'se solicita vehículo Automático, ya que será conducido por licda. Aminta Rodas','created_at' => '2015-06-30 16:22:35','updated_at' => '2015-06-30 16:22:35'),
          array('id' => '90','fecha_inicio' => '2015-07-23','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Suchitoto a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial y asesoría a nuevos clientes
        que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-06-30 16:32:29','updated_at' => '2015-06-30 16:32:29'),
          array('id' => '91','fecha_inicio' => '2015-07-28','hora_salida' => '07:00:00','hora_regreso' => '17:00:00','lugar_destino' => 'Santa Ana','justificacion' => 'Visita a CDMYPE- Santa Ana, para presentación de Casos de Éxito de empresarios que se están atendiendo en ambos CDMYPES.','objetivo' => 'Presentación de casos de éxito de empresarios atendidos por CDMYPE-Ilobasco y CDMYPE- Santa Ana.','encargado' => '11','estado' => 'Aprobado','observacion' => 'se solicita vehículo Automático.','created_at' => '2015-06-30 17:01:52','updated_at' => '2015-06-30 20:35:19'),
          array('id' => '92','fecha_inicio' => '2015-07-17','hora_salida' => '06:30:00','hora_regreso' => '17:30:00','lugar_destino' => 'San Salvador','justificacion' => 'Se ha recibido la invitación para asistir a evento de capacitación, por lo que se solicita trasporte para poder trasladarnos a Hotel Mediterraneo Plaza  colonia Escalón.','objetivo' => 'Asistir a capacitación denominada "Habilidades Interpersonales y la Gente Altamente Efectiva en el Trabajo", la actividad será desarrollada por Steve Covey.','encargado' => '7','estado' => 'Aprobado','observacion' => 'Se solicita motorista.','created_at' => '2015-06-30 17:09:16','updated_at' => '2015-06-30 17:09:16'),
          array('id' => '93','fecha_inicio' => '2015-07-16','hora_salida' => '06:30:00','hora_regreso' => '17:30:00','lugar_destino' => 'San Salvador','justificacion' => 'Se ha recibido la invitación para asistir a evento de capacitación, por lo que se solicita trasporte para poder trasladarnos a Hotel Mediterraneo Plaza  colonia Escalón.','objetivo' => 'Asistir a capacitación denominada "Habilidades Interpersonales y la Gente Altamente Efectiva en el Trabajo", la actividad será desarrollada por Steve Covey.','encargado' => '7','estado' => 'Aprobado','observacion' => 'Se solicita motorista.','created_at' => '2015-06-30 17:09:19','updated_at' => '2015-06-30 17:09:19'),
          array('id' => '94','fecha_inicio' => '2015-08-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 19:25:05','updated_at' => '2015-07-24 19:25:05'),
          array('id' => '95','fecha_inicio' => '2015-08-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 19:27:30','updated_at' => '2015-07-24 19:27:30'),
          array('id' => '96','fecha_inicio' => '2015-08-13','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 19:39:29','updated_at' => '2015-07-24 19:39:29'),
          array('id' => '97','fecha_inicio' => '2015-08-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 19:40:51','updated_at' => '2015-07-24 19:40:51'),
          array('id' => '98','fecha_inicio' => '2015-08-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 19:43:23','updated_at' => '2015-07-24 19:43:23'),
          array('id' => '99','fecha_inicio' => '2015-08-19','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.
        Supervisar capacitación financiera.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 19:59:52','updated_at' => '2015-07-24 19:59:52'),
          array('id' => '100','fecha_inicio' => '2015-08-20','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 20:01:27','updated_at' => '2015-07-24 20:01:27'),
          array('id' => '101','fecha_inicio' => '2015-08-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 20:06:00','updated_at' => '2015-07-24 20:52:03'),
          array('id' => '102','fecha_inicio' => '2015-08-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.

        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 20:14:01','updated_at' => '2015-07-24 20:14:01'),
          array('id' => '103','fecha_inicio' => '2015-08-27','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 20:18:01','updated_at' => '2015-07-24 20:18:01'),
          array('id' => '104','fecha_inicio' => '2015-08-21','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-07-24 20:47:34','updated_at' => '2015-07-24 20:50:11'),
          array('id' => '105','fecha_inicio' => '2015-09-01','hora_salida' => '09:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de San Vicente a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 16:44:32','updated_at' => '2015-08-28 16:44:32'),
          array('id' => '106','fecha_inicio' => '2015-09-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de San Vicente a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 16:46:40','updated_at' => '2015-08-28 16:46:40'),
          array('id' => '107','fecha_inicio' => '2015-09-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 16:48:23','updated_at' => '2015-08-28 16:48:23'),
          array('id' => '108','fecha_inicio' => '2015-09-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 16:49:55','updated_at' => '2015-08-28 16:49:55'),
          array('id' => '109','fecha_inicio' => '2015-09-08','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a
        nuevos clientes que les permita
        mejorar sus empresas orientadas a la
        generación de impacto económico.
        Supervisar capacitación financiera.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 16:51:38','updated_at' => '2015-08-28 16:51:38'),
          array('id' => '110','fecha_inicio' => '2015-09-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de San Vicente y Tecoluca a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 16:53:28','updated_at' => '2015-08-28 16:53:28'),
          array('id' => '111','fecha_inicio' => '2015-08-10','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 16:54:43','updated_at' => '2015-08-28 16:54:43'),
          array('id' => '112','fecha_inicio' => '2015-09-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 16:56:22','updated_at' => '2015-08-28 16:56:22'),
          array('id' => '113','fecha_inicio' => '2015-09-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de San Vicente y San Sebastián a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a
        nuevos clientes que les permita
        mejorar sus empresas orientadas a la
        generación de impacto económico
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 16:58:18','updated_at' => '2015-08-28 16:58:18'),
          array('id' => '114','fecha_inicio' => '2015-09-22','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales
        por la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a
        nuevos clientes que les permita
        mejorar sus empresas orientadas a la
        generación de impacto económico
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 17:08:25','updated_at' => '2015-08-28 17:08:25'),
          array('id' => '115','fecha_inicio' => '2015-09-23','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 17:09:57','updated_at' => '2015-08-28 17:09:57'),
          array('id' => '116','fecha_inicio' => '2015-09-24','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 17:11:29','updated_at' => '2015-08-28 17:11:29'),
          array('id' => '117','fecha_inicio' => '2015-09-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a
        nuevos clientes que les permita
        mejorar sus empresas orientadas a la
        generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 17:13:05','updated_at' => '2015-08-28 17:13:05'),
          array('id' => '118','fecha_inicio' => '2015-09-17','hora_salida' => '06:30:00','hora_regreso' => '17:30:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado a San Salvador a  Feria Internacional CIFCO, para asistir al 6° Encuentro Nacional de las MYPE, organizado por CONMAYPE.','objetivo' => 'Asistir al 6° Encuentro Nacional Conectando a la MYPE con la Innovación y Técnología.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 21:19:37','updated_at' => '2015-08-28 21:24:32'),
          array('id' => '119','fecha_inicio' => '2015-09-10','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial y
        asesoría a nuevos clientes que les
        permita mejorar sus empresas
        orientadas a la generación de
        impacto económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Sedán','created_at' => '2015-08-28 21:32:14','updated_at' => '2015-08-28 21:32:14'),
          array('id' => '120','fecha_inicio' => '2015-10-01','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => '
        Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial  que les
        permita mejorar sus empresas y levantamiento de impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 19:38:15','updated_at' => '2015-09-28 20:47:47'),
          array('id' => '121','fecha_inicio' => '2015-10-05','hora_salida' => '06:30:00','hora_regreso' => '14:30:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado al Centro Internacional de Ferias y Convenciones para asistir a taller de mejoramiento de empaque de productos con calidad.','objetivo' => 'Asistir a taller para el mejoramiento de empaques de productos con calidad Mundial.','encargado' => '11','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 19:51:53','updated_at' => '2015-09-28 19:51:53'),
          array('id' => '122','fecha_inicio' => '2015-10-06','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Brindar los servicios de
        acompañamiento empresarial  que les
        permita mejorar sus empresas y levantamiento de
        impacto económico.','objetivo' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:00:59','updated_at' => '2015-09-28 20:40:02'),
          array('id' => '123','fecha_inicio' => '2015-10-20','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:05:14','updated_at' => '2015-09-28 20:41:12'),
          array('id' => '124','fecha_inicio' => '2015-09-28','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de San Vicenta y Tecoluca a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:06:48','updated_at' => '2015-09-28 20:06:48'),
          array('id' => '125','fecha_inicio' => '2015-10-08','hora_salida' => '06:33:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado al Centro Internacional de
        Ferias y Convenciones.
        ','objetivo' => 'Asistir a Feria Taiwan 2015.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:08:18','updated_at' => '2015-09-28 20:57:39'),
          array('id' => '126','fecha_inicio' => '2015-10-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:09:46','updated_at' => '2015-09-28 20:09:46'),
          array('id' => '127','fecha_inicio' => '2015-10-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:10:53','updated_at' => '2015-09-28 20:10:53'),
          array('id' => '128','fecha_inicio' => '2015-10-14','hora_salida' => '09:30:00','hora_regreso' => '17:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado a San Salvador a reunión de trabajo en CONAMYPE y visita a las diferentes Instituciones Financieras.','objetivo' => 'Asistir a reunión de trabajo relacionada con los nuevos lineamientos para el año 2016.
        Coordinar acciones de financiamiento con Instituciones financieras.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:14:51','updated_at' => '2015-09-28 20:14:51'),
          array('id' => '129','fecha_inicio' => '2015-10-13','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:16:06','updated_at' => '2015-09-28 20:16:06'),
          array('id' => '130','fecha_inicio' => '2015-10-15','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:18:48','updated_at' => '2015-09-28 20:18:48'),
          array('id' => '131','fecha_inicio' => '2015-10-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensunteque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:20:02','updated_at' => '2015-09-28 20:40:41'),
          array('id' => '132','fecha_inicio' => '2015-10-21','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de San Vicente a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:21:22','updated_at' => '2015-09-28 20:21:22'),
          array('id' => '133','fecha_inicio' => '2015-10-22','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:22:35','updated_at' => '2015-09-28 20:22:35'),
          array('id' => '134','fecha_inicio' => '2015-10-23','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:24:53','updated_at' => '2015-09-28 20:43:53'),
          array('id' => '135','fecha_inicio' => '2015-10-27','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:26:04','updated_at' => '2015-09-28 20:26:04'),
          array('id' => '136','fecha_inicio' => '2015-10-28','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:27:20','updated_at' => '2015-09-28 20:27:20'),
          array('id' => '137','fecha_inicio' => '2015-10-29','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que les
        permita mejorar sus empresas y
        levantamiento de impacto
        económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Sedan','created_at' => '2015-09-28 20:28:30','updated_at' => '2015-09-28 20:28:30'),
          array('id' => '138','fecha_inicio' => '2015-10-29','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas
        ubicadas al del Municipio de Suchitoto a
        las cuales por la distancia que hay entre
        su ubicación y la Universidad, se les
        dificulta visitar las oficinas para recibir
        los servicios','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 21:40:46','updated_at' => '2015-10-29 21:40:46'),
          array('id' => '139','fecha_inicio' => '2015-11-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 21:44:07','updated_at' => '2015-10-29 22:03:22'),
          array('id' => '140','fecha_inicio' => '2015-11-10','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Suchitoto a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 21:47:30','updated_at' => '2015-10-29 21:47:30'),
          array('id' => '141','fecha_inicio' => '2015-11-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 21:48:57','updated_at' => '2015-10-29 21:48:57'),
          array('id' => '142','fecha_inicio' => '2015-11-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 21:51:25','updated_at' => '2015-10-30 18:50:29'),
          array('id' => '143','fecha_inicio' => '2015-11-24','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Suchitoto a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 21:54:36','updated_at' => '2015-10-29 21:54:36'),
          array('id' => '144','fecha_inicio' => '2015-11-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 21:55:56','updated_at' => '2015-10-29 21:55:56'),
          array('id' => '145','fecha_inicio' => '2015-11-05','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Sensunteque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 21:57:29','updated_at' => '2015-10-29 21:57:29'),
          array('id' => '146','fecha_inicio' => '2015-11-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 21:58:46','updated_at' => '2015-10-29 21:58:46'),
          array('id' => '147','fecha_inicio' => '2015-11-19','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Sensuntepeque a las
        cuales por la distancia que hay entre su
        ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 22:00:10','updated_at' => '2015-10-29 22:00:10'),
          array('id' => '148','fecha_inicio' => '2015-11-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 22:01:40','updated_at' => '2015-10-29 22:01:40'),
          array('id' => '149','fecha_inicio' => '2015-11-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de San Vicente a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus
        empresas orientadas a la generación de
        impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 22:07:04','updated_at' => '2015-10-29 22:07:04'),
          array('id' => '150','fecha_inicio' => '2015-11-17','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas
        al del Municipio de Suchitoto a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de acompañamiento
        empresarial que les permita mejorar sus
        empresas y levantamiento de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo yaris','created_at' => '2015-10-29 22:10:48','updated_at' => '2015-10-29 22:10:48'),
          array('id' => '151','fecha_inicio' => '2015-12-01','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que
        les permita mejorar sus empresas
        y levantamiento de impacto
        económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo ','created_at' => '2015-11-27 13:06:49','updated_at' => '2015-11-27 13:06:49'),
          array('id' => '152','fecha_inicio' => '2015-12-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de San Vicente a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría
        a nuevos clientes que les permita
        mejorar sus empresas orientadas
        a la generación de impacto
        económico
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Yaris','created_at' => '2015-11-27 13:11:55','updated_at' => '2015-11-27 13:11:55'),
          array('id' => '153','fecha_inicio' => '2015-12-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que
        les permita mejorar sus empresas
        y levantamiento de impacto
        económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Yaris','created_at' => '2015-11-27 13:14:45','updated_at' => '2015-11-27 13:14:45'),
          array('id' => '154','fecha_inicio' => '2015-12-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que
        les permita mejorar sus empresas
        y levantamiento de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Yaris','created_at' => '2015-11-27 13:15:55','updated_at' => '2015-11-27 13:15:55'),
          array('id' => '155','fecha_inicio' => '2015-12-08','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que
        les permita mejorar sus empresas
        y levantamiento de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Yaris','created_at' => '2015-11-27 13:17:14','updated_at' => '2015-11-27 13:17:14'),
          array('id' => '156','fecha_inicio' => '2015-12-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Vicente','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de San Vicente a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que
        les permita mejorar sus empresas
        y levantamiento de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Yaris','created_at' => '2015-11-27 13:18:30','updated_at' => '2015-11-27 13:18:30'),
          array('id' => '157','fecha_inicio' => '2015-12-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que
        les permita mejorar sus empresas
        y levantamiento de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Yaris','created_at' => '2015-11-27 13:19:39','updated_at' => '2015-11-28 09:15:12'),
          array('id' => '158','fecha_inicio' => '2015-12-10','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        acompañamiento empresarial que
        les permita mejorar sus empresas
        y levantamiento de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita Vehículo Yaris','created_at' => '2015-11-27 14:14:29','updated_at' => '2015-11-27 14:14:29'),
          array('id' => '159','fecha_inicio' => '2016-01-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a
        nuevos clientes que les permita
        mejorar sus empresas orientadas a la
        generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-09 09:53:45','updated_at' => '2016-01-09 11:15:08'),
          array('id' => '160','fecha_inicio' => '2016-01-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        sur del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-09 11:04:53','updated_at' => '2016-01-09 11:04:53'),
          array('id' => '161','fecha_inicio' => '2016-01-19','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        sur del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-09 11:06:59','updated_at' => '2016-01-09 11:06:59'),
          array('id' => '162','fecha_inicio' => '2016-01-21','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        sur del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-09 11:07:53','updated_at' => '2016-01-09 11:17:05'),
          array('id' => '163','fecha_inicio' => '2016-01-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        sur del Municipio de Suchitoto a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-09 11:08:59','updated_at' => '2016-01-09 11:09:25'),
          array('id' => '164','fecha_inicio' => '2016-02-01','hora_salida' => '07:00:00','hora_regreso' => '15:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado a San Salvador, para participar en reunión sobre SGI parte financiera que se llevará a cabo en CONAMYPE Central.','objetivo' => 'Asistir a reunión de trabajo relacionada con SGI en la parte financiera.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 09:53:59','updated_at' => '2016-01-26 11:25:48'),
          array('id' => '165','fecha_inicio' => '2016-02-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del Municipio
        de Suchitoto a las cuales por la distancia que hay
        entre su ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:03:19','updated_at' => '2016-01-26 10:03:19'),
          array('id' => '166','fecha_inicio' => '2016-02-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas para
        recibir los servicios','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:04:35','updated_at' => '2016-01-26 10:04:35'),
          array('id' => '167','fecha_inicio' => '2016-02-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas para
        recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:06:57','updated_at' => '2016-01-26 10:06:57'),
          array('id' => '168','fecha_inicio' => '2016-02-05','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado de Asesor de CDMYPE y representantes de la Cooperativa ACOPAMDRE DE R.L., para ofrecer vinos a tiendas y restaurantes de San Salvador.','objetivo' => 'Apoyar a empresarias en visita a Tiendas y Restaurantes de la zona de San Salvador para ofrecer productos elaborados por ACOPAMDRE DE R.L. ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:29:39','updated_at' => '2016-01-26 11:36:07'),
          array('id' => '169','fecha_inicio' => '2016-02-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del Municipio
        de Suchitoto a las cuales por la distancia que hay
        entre su ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:31:21','updated_at' => '2016-01-26 10:31:21'),
          array('id' => '170','fecha_inicio' => '2016-02-10','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas para
        recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:32:46','updated_at' => '2016-01-26 10:32:46'),
          array('id' => '171','fecha_inicio' => '2016-02-11','hora_salida' => '06:30:00','hora_regreso' => '14:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado de Asesores a Hotel Sheraton para asistir a desayuno empresarial.','objetivo' => 'Asistir a desayuno empresarial en Hotel Sheraton, en  San Salvador.','encargado' => '11','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Automático','created_at' => '2016-01-26 10:33:54','updated_at' => '2016-01-26 11:25:16'),
          array('id' => '172','fecha_inicio' => '2016-02-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del Municipio
        de Suchitoto a las cuales por la distancia que hay
        entre su ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas para
        recibir los servicios.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:35:12','updated_at' => '2016-01-26 10:35:12'),
          array('id' => '173','fecha_inicio' => '2016-02-17','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas para
        recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:36:43','updated_at' => '2016-01-26 10:36:43'),
          array('id' => '174','fecha_inicio' => '2016-02-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas para
        recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:38:20','updated_at' => '2016-01-26 10:38:20'),
          array('id' => '175','fecha_inicio' => '2016-02-23','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del Municipio
        de Suchitoto a las cuales por la distancia que hay
        entre su ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:39:48','updated_at' => '2016-01-26 10:40:24'),
          array('id' => '176','fecha_inicio' => '2016-02-24','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas para
        recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 10:41:53','updated_at' => '2016-01-26 10:41:53'),
          array('id' => '177','fecha_inicio' => '2016-02-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas para
        recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-26 11:00:04','updated_at' => '2016-01-26 11:00:04'),
          array('id' => '178','fecha_inicio' => '2016-02-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas para
        recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-01-27 09:35:42','updated_at' => '2016-01-27 09:35:42'),
          array('id' => '179','fecha_inicio' => '2016-05-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del Municipio
        de Suchitoto a las cuales por la distancia que hay
        entre su ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 08:38:42','updated_at' => '2016-04-30 08:38:42'),
          array('id' => '180','fecha_inicio' => '2016-05-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 08:41:42','updated_at' => '2016-04-30 08:41:42'),
          array('id' => '181','fecha_inicio' => '2016-05-05','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 08:43:26','updated_at' => '2016-04-30 08:43:26'),
          array('id' => '182','fecha_inicio' => '2016-05-06','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Tejutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Tejutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 08:48:29','updated_at' => '2016-04-30 08:48:29'),
          array('id' => '183','fecha_inicio' => '2016-05-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:13:44','updated_at' => '2016-04-30 09:13:44'),
          array('id' => '184','fecha_inicio' => '2016-05-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:18:44','updated_at' => '2016-04-30 09:18:44'),
          array('id' => '185','fecha_inicio' => '2016-05-17','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del Municipio
        de Suchitoto a las cuales por la distancia que hay
        entre su ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:25:13','updated_at' => '2016-04-30 09:25:13'),
          array('id' => '186','fecha_inicio' => '2016-05-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:26:22','updated_at' => '2016-04-30 09:26:22'),
          array('id' => '187','fecha_inicio' => '2016-05-20','hora_salida' => '06:00:00','hora_regreso' => '18:30:00','lugar_destino' => 'San Salvador','justificacion' => 'CONAMYPE en coordinación con la Gerencia de Crecimiento Empresarial y con el apoyo de PROESA, han convocado a Asesores Empresariales y de Empresarialidad Femenina a jornada de capacitación que se desarrollará en FEPADE, en horario de 8:00 am a 5:00 pm.','objetivo' => 'Asistir a capacitación relacionada con la Cultura Exportadora Nacional: "Principios y Requisitos básicos en las Exportaciones".','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:42:02','updated_at' => '2016-04-30 10:35:43'),
          array('id' => '188','fecha_inicio' => '2016-05-24','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del Municipio
        de Suchitoto a las cuales por la distancia que hay
        entre su ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:45:28','updated_at' => '2016-04-30 09:45:28'),
          array('id' => '189','fecha_inicio' => '2016-05-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:46:42','updated_at' => '2016-04-30 09:46:42'),
          array('id' => '190','fecha_inicio' => '2016-05-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:47:51','updated_at' => '2016-04-30 09:47:51'),
          array('id' => '191','fecha_inicio' => '2016-05-27','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Tejutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se
        visitarán las empresas ubicadas al del Municipio de
        Tejutepeque a las cuales por la distancia que hay entre
        su ubicación y la Universidad, se les dificulta visitar
        las oficinas para recibir los servicios.','objetivo' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al sur del
        Municipio de Tejutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:49:13','updated_at' => '2016-04-30 09:55:18'),
          array('id' => '192','fecha_inicio' => '2016-05-31','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del Municipio
        de Suchitoto a las cuales por la distancia que hay
        entre su ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos
        clientes que les permita mejorar sus empresas
        orientadas a la generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 09:50:24','updated_at' => '2016-04-30 09:50:24'),
          array('id' => '193','fecha_inicio' => '2016-05-19','hora_salida' => '06:00:00','hora_regreso' => '18:30:00','lugar_destino' => 'San Salvador','justificacion' => 'CONAMYPE en coordinación con la Gerencia de Crecimiento Empresarial y con el apoyo de PROESA, han convocado a Asesores Empresariales y de Empresarialidad a jornada de capacitación que se en FEPADE, en horario de 8:00 am a 5:00 pm.','objetivo' => 'Asistir a capacitación relacionada con la Cultura Exportadora Nacional: "Principios y Requisitos básicos en las Exportaciones".
        ','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-04-30 10:39:46','updated_at' => '2016-04-30 10:40:07'),
          array('id' => '194','fecha_inicio' => '2016-06-01','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al sur del Municipio de Cojutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-05-27 11:10:38','updated_at' => '2016-05-27 11:10:38'),
          array('id' => '195','fecha_inicio' => '2016-06-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al sur del Municipio de Sensuntepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-05-27 11:11:51','updated_at' => '2016-05-27 11:11:51'),
          array('id' => '196','fecha_inicio' => '2016-06-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Tejutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al sur del Municipio de Tejutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-05-27 11:16:07','updated_at' => '2016-05-27 11:16:07'),
          array('id' => '197','fecha_inicio' => '2016-05-28','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Jutiapa','justificacion' => '.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => '.','created_at' => '2016-05-28 10:51:12','updated_at' => '2016-05-28 10:51:12'),
          array('id' => '198','fecha_inicio' => '2016-05-28','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Jutiapa','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Tejutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Tejutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','encargado' => '3','estado' => 'Aprobado','observacion' => '.','created_at' => '2016-05-28 10:53:26','updated_at' => '2016-05-28 10:53:26'),
          array('id' => '199','fecha_inicio' => '2016-06-06','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Jutiapa','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Tejutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Jutiapa a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-05-28 10:54:15','updated_at' => '2016-05-28 11:22:47'),
          array('id' => '200','fecha_inicio' => '2016-06-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehiculo Yaris','created_at' => '2016-05-28 10:55:06','updated_at' => '2016-05-28 11:23:30'),
          array('id' => '201','fecha_inicio' => '2016-06-08','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Sensuntepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehiculo Yaris','created_at' => '2016-05-28 10:56:19','updated_at' => '2016-05-28 11:20:06'),
          array('id' => '202','fecha_inicio' => '2016-06-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Tejutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Cojutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-05-28 10:57:03','updated_at' => '2016-05-28 11:24:14'),
          array('id' => '203','fecha_inicio' => '2016-06-21','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehiculo Yaris','created_at' => '2016-05-28 10:57:34','updated_at' => '2016-05-28 11:16:46'),
          array('id' => '204','fecha_inicio' => '2016-06-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-05-28 10:59:01','updated_at' => '2016-05-28 10:59:01'),
          array('id' => '205','fecha_inicio' => '2016-06-22','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Sensuntepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehiculo Yaris','created_at' => '2016-05-28 10:59:06','updated_at' => '2016-05-28 11:27:25'),
          array('id' => '206','fecha_inicio' => '2016-06-23','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de C ojutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehiculo Yaris','created_at' => '2016-05-28 10:59:45','updated_at' => '2016-05-28 11:28:50'),
          array('id' => '207','fecha_inicio' => '2016-06-15','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-05-28 11:00:31','updated_at' => '2016-05-28 11:25:55'),
          array('id' => '208','fecha_inicio' => '2016-06-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-05-28 11:01:34','updated_at' => '2016-05-28 11:26:36'),
          array('id' => '209','fecha_inicio' => '2016-06-28','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehiculo Yaris','created_at' => '2016-05-28 11:02:18','updated_at' => '2016-05-28 11:18:21'),
          array('id' => '210','fecha_inicio' => '2016-06-29','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        sur del Municipio de Cojutepeque a las
        cuales por la distancia que hay entre su
        ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris','created_at' => '2016-05-28 11:02:58','updated_at' => '2016-05-28 11:02:58'),
          array('id' => '212','fecha_inicio' => '2016-07-05','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a
        nuevos clientes que les permita mejorar
        sus empresas orientadas a la generación
        de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-24 16:51:00','updated_at' => '2016-06-24 16:51:00'),
          array('id' => '213','fecha_inicio' => '2016-07-06','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-24 16:51:58','updated_at' => '2016-06-24 16:51:58'),
          array('id' => '214','fecha_inicio' => '2016-07-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de C ojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-24 16:55:47','updated_at' => '2016-06-24 16:55:47'),
          array('id' => '216','fecha_inicio' => '2016-07-11','hora_salida' => '08:30:00','hora_regreso' => '15:30:00','lugar_destino' => 'Jutiapa','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        sur del Municipio de Jutiapa a las
        cuales por la distancia que hay entre su
        ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-24 16:57:30','updated_at' => '2016-06-24 16:57:30'),
          array('id' => '217','fecha_inicio' => '2016-07-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-24 17:00:04','updated_at' => '2016-06-24 17:00:04'),
          array('id' => '218','fecha_inicio' => '2016-07-13','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        sur del Municipio de Cojutepeque a las
        cuales por la distancia que hay entre su
        ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-24 17:05:01','updated_at' => '2016-06-24 17:05:01'),
          array('id' => '219','fecha_inicio' => '2016-07-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales
        por la distancia que hay entre su ubicación y
        la Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-24 17:06:49','updated_at' => '2016-06-24 17:06:49'),
          array('id' => '220','fecha_inicio' => '2016-07-19','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-24 17:09:08','updated_at' => '2016-06-24 17:09:08'),
          array('id' => '222','fecha_inicio' => '2016-07-21','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        sur del Municipio de Cojutepeque a las
        cuales por la distancia que hay entre su
        ubicación y la Universidad, se les dificulta
        visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-25 09:11:37','updated_at' => '2016-06-25 10:40:37'),
          array('id' => '224','fecha_inicio' => '2016-07-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las
        oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-25 09:34:22','updated_at' => '2016-06-25 09:34:22'),
          array('id' => '225','fecha_inicio' => '2016-07-01','hora_salida' => '06:00:00','hora_regreso' => '19:30:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado a San Salvador para reunión de trabajo en INSAFORP y Casa Presidencial.','objetivo' => 'Asistir a reunión sobre Premio a la Calidad.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-06-25 10:16:58','updated_at' => '2016-06-25 10:16:58'),
          array('id' => '226','fecha_inicio' => '2016-01-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:14:45','updated_at' => '2016-07-29 15:14:45'),
          array('id' => '227','fecha_inicio' => '2016-08-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:15:58','updated_at' => '2016-07-29 15:15:58'),
          array('id' => '228','fecha_inicio' => '2016-08-10','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de C ojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:17:04','updated_at' => '2016-07-29 15:17:04'),
          array('id' => '229','fecha_inicio' => '2016-08-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de C ojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:18:06','updated_at' => '2016-07-29 15:18:06'),
          array('id' => '230','fecha_inicio' => '2016-08-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de C ojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:19:06','updated_at' => '2016-07-29 15:19:06'),
          array('id' => '231','fecha_inicio' => '2016-08-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:19:58','updated_at' => '2016-07-29 15:19:58'),
          array('id' => '232','fecha_inicio' => '2016-08-17','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:20:52','updated_at' => '2016-07-29 15:20:52'),
          array('id' => '233','fecha_inicio' => '2016-08-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de C ojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:21:54','updated_at' => '2016-07-29 15:21:54'),
          array('id' => '234','fecha_inicio' => '2016-08-23','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:22:55','updated_at' => '2016-07-29 15:29:24'),
          array('id' => '235','fecha_inicio' => '2016-08-24','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:23:44','updated_at' => '2016-07-29 15:23:44'),
          array('id' => '236','fecha_inicio' => '2016-08-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de C ojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:25:00','updated_at' => '2016-07-29 15:25:00'),
          array('id' => '237','fecha_inicio' => '2016-08-30','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-07-29 15:26:36','updated_at' => '2016-07-29 15:26:36'),
          array('id' => '238','fecha_inicio' => '2016-09-01','hora_salida' => '07:00:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Se solicita vehículo para traslado a San Salvador, para asistir a reunión de Premio a la Calidad en Casa Presidencia.','objetivo' => 'Asistir a reunión de Premio a la Calidad en Casa Presidencial.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 11:38:09','updated_at' => '2016-08-29 11:38:09'),
          array('id' => '239','fecha_inicio' => '2016-09-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.
        ','encargado' => '1','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 11:41:36','updated_at' => '2016-08-29 11:41:36'),
          array('id' => '240','fecha_inicio' => '2016-09-06','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 11:42:51','updated_at' => '2016-08-29 11:42:51'),
          array('id' => '241','fecha_inicio' => '2016-09-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 11:44:34','updated_at' => '2016-08-29 11:44:34'),
          array('id' => '242','fecha_inicio' => '2016-09-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 11:47:07','updated_at' => '2016-08-29 13:14:27'),
          array('id' => '243','fecha_inicio' => '2016-09-08','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 11:49:23','updated_at' => '2016-08-29 11:49:23'),
          array('id' => '244','fecha_inicio' => '2016-09-13','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 11:52:17','updated_at' => '2016-08-29 13:13:20'),
          array('id' => '245','fecha_inicio' => '2016-09-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 11:53:46','updated_at' => '2016-08-29 11:53:46'),
          array('id' => '246','fecha_inicio' => '2016-09-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Tejutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Tejutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico
        ','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 11:56:50','updated_at' => '2016-08-29 11:56:50'),
          array('id' => '247','fecha_inicio' => '2016-09-20','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 12:00:29','updated_at' => '2016-08-29 12:00:29'),
          array('id' => '248','fecha_inicio' => '2016-09-22','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 12:02:50','updated_at' => '2016-08-29 13:16:16'),
          array('id' => '249','fecha_inicio' => '2016-09-27','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 13:04:30','updated_at' => '2016-08-29 13:04:30'),
          array('id' => '250','fecha_inicio' => '2016-09-28','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 13:05:41','updated_at' => '2016-08-29 13:05:41'),
          array('id' => '251','fecha_inicio' => '2016-09-30','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de C ojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de
        asesoría a nuevos clientes que
        les permita mejorar sus
        empresas orientadas a la
        generación de impacto
        económico.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-08-29 13:08:33','updated_at' => '2016-08-29 13:08:33'),
          array('id' => '252','fecha_inicio' => '2016-10-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 15:49:43','updated_at' => '2016-09-28 16:12:22'),
          array('id' => '253','fecha_inicio' => '2016-10-05','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 15:54:22','updated_at' => '2016-09-28 16:14:18'),
          array('id' => '254','fecha_inicio' => '2016-10-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 15:56:48','updated_at' => '2016-09-28 15:56:48'),
          array('id' => '255','fecha_inicio' => '2016-10-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Cojutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 15:57:42','updated_at' => '2016-09-30 15:52:03'),
          array('id' => '256','fecha_inicio' => '2016-10-13','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Sensuntepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 16:00:18','updated_at' => '2016-09-28 16:00:18'),
          array('id' => '257','fecha_inicio' => '2016-10-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Jutiapa','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Jutiapa a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 16:02:48','updated_at' => '2016-09-28 16:02:48'),
          array('id' => '258','fecha_inicio' => '2016-10-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 16:04:11','updated_at' => '2016-09-28 16:04:11'),
          array('id' => '259','fecha_inicio' => '2016-10-19','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Sensuntepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 16:05:38','updated_at' => '2016-09-28 16:05:38'),
          array('id' => '260','fecha_inicio' => '2016-10-20','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Cojutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 16:06:41','updated_at' => '2016-09-28 16:06:41'),
          array('id' => '261','fecha_inicio' => '2016-10-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Suchitoto a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 16:07:44','updated_at' => '2016-09-28 16:07:44'),
          array('id' => '262','fecha_inicio' => '2016-10-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Cojutepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 16:09:40','updated_at' => '2016-09-28 16:09:40'),
          array('id' => '263','fecha_inicio' => '2016-10-27','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo se visitarán las empresas ubicadas al del Municipio de Sensuntepeque a las cuales por la distancia que hay entre su ubicación y la Universidad, se les dificulta visitar las oficinas para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría de seguimiento a clientes que les permita mejorar sus empresas y recolección de impacto generado con los servicios recibidos.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-28 16:10:56','updated_at' => '2016-09-28 16:10:56'),
          array('id' => '264','fecha_inicio' => '2016-10-07','hora_salida' => '13:00:00','hora_regreso' => '16:30:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de
        asesoría a clientes que
        les permita mejorar sus
        empresas y recolección de impacto.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-09-30 15:05:02','updated_at' => '2016-09-30 15:05:02'),
          array('id' => '265','fecha_inicio' => '2016-11-01','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría
        de seguimiento a clientes que les
        permita mejorar sus empresas y
        recolección de impacto generado
        con los servicios recibidos.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:23:46','updated_at' => '2016-10-29 09:23:46'),
          array('id' => '266','fecha_inicio' => '2016-11-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría
        de seguimiento a clientes que les
        permita mejorar sus empresas y
        recolección de impacto generado
        con los servicios recibidos.','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:25:07','updated_at' => '2016-10-29 09:25:07'),
          array('id' => '267','fecha_inicio' => '2016-11-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría
        a clientes que les permita
        mejorar sus empresas y
        recolección de impacto.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:26:51','updated_at' => '2016-10-29 09:26:51'),
          array('id' => '268','fecha_inicio' => '2016-11-08','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría
        a clientes que les permita
        mejorar sus empresas y
        recolección de impacto.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:28:23','updated_at' => '2016-10-29 09:28:23'),
          array('id' => '269','fecha_inicio' => '2016-11-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:29:27','updated_at' => '2016-10-29 09:29:27'),
          array('id' => '270','fecha_inicio' => '2016-11-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Tejutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Tejutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:31:48','updated_at' => '2016-10-29 09:31:48'),
          array('id' => '271','fecha_inicio' => '2016-11-15','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:33:04','updated_at' => '2016-10-29 09:33:04'),
          array('id' => '272','fecha_inicio' => '2016-11-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:33:49','updated_at' => '2016-10-29 09:33:49'),
          array('id' => '273','fecha_inicio' => '2016-11-17','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:35:10','updated_at' => '2016-10-29 09:35:10'),
          array('id' => '274','fecha_inicio' => '2016-11-22','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:36:14','updated_at' => '2016-10-29 09:36:14'),
          array('id' => '275','fecha_inicio' => '2016-11-23','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:37:21','updated_at' => '2016-10-29 09:37:21'),
          array('id' => '276','fecha_inicio' => '2016-11-24','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:38:16','updated_at' => '2016-10-29 09:38:16'),
          array('id' => '277','fecha_inicio' => '2016-11-29','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:39:20','updated_at' => '2016-10-29 09:39:20'),
          array('id' => '278','fecha_inicio' => '2016-11-30','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris.','created_at' => '2016-10-29 09:40:48','updated_at' => '2016-10-29 09:40:48'),
          array('id' => '279','fecha_inicio' => '2016-11-10','hora_salida' => '06:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'San Salvador','justificacion' => 'Traslado a San Salvador para participar en Presentación de Logros "Seis años fortaleciendo a la MYPE a través de la alianza público-privada-academia, a realizarse en Hotel Sheraton Presidente, salones 1 y 2.','objetivo' => 'Participar en Presentación de Logros "Seis años fortaleciendo a la MYPE a través de la alianza público-privada-academia, a realizarse en Hotel Sheraton Presidente, salones 1 y 2.','encargado' => '11','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Automático','created_at' => '2016-10-29 10:13:56','updated_at' => '2016-10-29 10:16:43'),
          array('id' => '280','fecha_inicio' => '2016-12-01','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría
        de seguimiento a clientes que les
        permita mejorar sus empresas y
        recolección de impacto generado
        con los servicios recibidos.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehículo Yaris','created_at' => '2016-11-25 09:42:49','updated_at' => '2016-11-25 09:42:49'),
          array('id' => '281','fecha_inicio' => '2016-12-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Tejutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Jutiapa a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris.','created_at' => '2016-11-25 09:45:15','updated_at' => '2016-11-25 09:45:15'),
          array('id' => '282','fecha_inicio' => '2016-12-06','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris.','created_at' => '2016-11-25 09:47:25','updated_at' => '2016-11-25 09:47:25'),
          array('id' => '283','fecha_inicio' => '2016-12-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris.','created_at' => '2016-11-25 09:51:35','updated_at' => '2016-11-25 09:51:35'),
          array('id' => '284','fecha_inicio' => '2016-12-08','hora_salida' => '06:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        Traslado de Asesor empresarial a CIFCO para taller de Premio a la Calidad.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.
        Traslado de asesor de CDMYPE para asistir a Taller de Premio a la Calidad en Cifco.','encargado' => '12','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris.','created_at' => '2016-11-25 10:03:11','updated_at' => '2016-11-25 10:03:11'),
          array('id' => '285','fecha_inicio' => '2016-12-13','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris.','created_at' => '2016-11-25 10:55:49','updated_at' => '2016-11-25 10:55:49'),
          array('id' => '286','fecha_inicio' => '2016-12-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Cojutepeque a las cuales por
        la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris.','created_at' => '2016-11-25 10:58:13','updated_at' => '2016-11-25 10:58:13'),
          array('id' => '287','fecha_inicio' => '2016-12-15','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más
        efectivo se visitarán las empresas ubicadas al
        del Municipio de Sensuntepeque a las cuales
        por la distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita vehículo Yaris.','created_at' => '2016-11-25 10:59:13','updated_at' => '2016-11-25 10:59:13'),
          array('id' => '288','fecha_inicio' => '2017-01-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico.','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-13 14:09:11','updated_at' => '2017-01-13 14:09:11'),
          array('id' => '289','fecha_inicio' => '2017-01-19','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'Se solicita Microbus','created_at' => '2017-01-13 14:18:26','updated_at' => '2017-01-13 14:18:26'),
          array('id' => '290','fecha_inicio' => '2017-01-20','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-13 14:19:40','updated_at' => '2017-01-13 14:20:13'),
          array('id' => '291','fecha_inicio' => '2017-01-24','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-13 14:24:20','updated_at' => '2017-01-13 14:24:20'),
          array('id' => '292','fecha_inicio' => '2017-01-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-13 14:26:24','updated_at' => '2017-01-13 14:26:24'),
          array('id' => '293','fecha_inicio' => '2017-02-01','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:11:14','updated_at' => '2017-01-30 09:11:14'),
          array('id' => '294','fecha_inicio' => '2017-02-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:12:14','updated_at' => '2017-01-30 09:12:14'),
          array('id' => '295','fecha_inicio' => '2017-02-03','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:13:09','updated_at' => '2017-01-30 09:13:09'),
          array('id' => '296','fecha_inicio' => '2017-02-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:16:32','updated_at' => '2017-01-30 09:16:32'),
          array('id' => '297','fecha_inicio' => '2017-02-08','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:17:28','updated_at' => '2017-01-30 09:17:28'),
          array('id' => '298','fecha_inicio' => '2017-02-09','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.s','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:19:22','updated_at' => '2017-01-30 09:19:22'),
          array('id' => '299','fecha_inicio' => '2017-02-14','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:20:50','updated_at' => '2017-01-30 09:20:50'),
          array('id' => '300','fecha_inicio' => '2017-02-15','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:21:59','updated_at' => '2017-01-30 09:21:59'),
          array('id' => '301','fecha_inicio' => '2017-02-16','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:23:39','updated_at' => '2017-01-30 09:23:39'),
          array('id' => '302','fecha_inicio' => '2017-02-21','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:26:24','updated_at' => '2017-01-30 09:26:24'),
          array('id' => '303','fecha_inicio' => '2017-02-22','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:27:39','updated_at' => '2017-01-30 09:27:39'),
          array('id' => '304','fecha_inicio' => '2017-02-23','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-01-30 09:28:48','updated_at' => '2017-01-30 09:28:48'),
          array('id' => '305','fecha_inicio' => '2017-03-02','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-02-22 10:22:09','updated_at' => '2017-02-22 10:28:38'),
          array('id' => '306','fecha_inicio' => '2017-02-22','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-02-22 10:24:26','updated_at' => '2017-02-22 10:24:26'),
          array('id' => '307','fecha_inicio' => '2017-03-01','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-02-22 10:25:12','updated_at' => '2017-02-22 10:28:11'),
          array('id' => '308','fecha_inicio' => '2017-04-04','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios.
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 08:51:45','updated_at' => '2017-03-31 08:51:45'),
          array('id' => '309','fecha_inicio' => '2017-04-05','hora_salida' => '08:30:00','hora_regreso' => '14:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 08:53:25','updated_at' => '2017-03-31 08:53:25'),
          array('id' => '310','fecha_inicio' => '2017-04-11','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 08:54:54','updated_at' => '2017-03-31 08:54:54'),
          array('id' => '311','fecha_inicio' => '2017-04-12','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 08:56:05','updated_at' => '2017-03-31 08:56:05'),
          array('id' => '312','fecha_inicio' => '2017-04-13','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 08:57:15','updated_at' => '2017-03-31 08:57:15'),
          array('id' => '313','fecha_inicio' => '2017-04-18','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 09:01:01','updated_at' => '2017-03-31 09:01:01'),
          array('id' => '314','fecha_inicio' => '2017-04-19','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '12','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 09:01:56','updated_at' => '2017-03-31 09:01:56'),
          array('id' => '315','fecha_inicio' => '2017-04-20','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 09:03:00','updated_at' => '2017-03-31 09:03:00'),
          array('id' => '316','fecha_inicio' => '2017-04-25','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Cojutepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        sse visitarán las empresas ubicadas al del
        Municipio de Cojutepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 09:03:46','updated_at' => '2017-03-31 09:03:46'),
          array('id' => '317','fecha_inicio' => '2017-04-26','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Suchitoto','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Suchitoto a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 09:04:29','updated_at' => '2017-03-31 09:04:29'),
          array('id' => '318','fecha_inicio' => '2017-04-27','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Sensuntepeque','justificacion' => 'Para que el trabajo de CDMYPE sea más efectivo
        se visitarán las empresas ubicadas al del
        Municipio de Sensuntepeque a las cuales por la
        distancia que hay entre su ubicación y la
        Universidad, se les dificulta visitar las oficinas
        para recibir los servicios
        ','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '3','estado' => 'Aprobado','observacion' => 'se solicita vehiculo','created_at' => '2017-03-31 09:05:26','updated_at' => '2017-03-31 09:05:26'),
          array('id' => '319','fecha_inicio' => '2018-11-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Jucutla','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '2','estado' => 'Aprobado','observacion' => 'asdasd','created_at' => '2018-11-07 15:37:37','updated_at' => '2018-11-07 15:37:37'),
          array('id' => '320','fecha_inicio' => '2018-11-07','hora_salida' => '08:30:00','hora_regreso' => '16:00:00','lugar_destino' => 'Jucutla','justificacion' => 'Debido a las grandes distancias que hay entre la Universidad y los lugares donde están establecidas las empresas se dificulta que estos puedan visitar el centro por tal razón existe la necesidad de realizar visitas a estos','objetivo' => 'Brindar los servicios de asesoría a nuevos clientes que les permita mejorar sus empresas orientadas a la generación de impacto económico','encargado' => '2','estado' => 'Aprobado','observacion' => 'asdasd','created_at' => '2018-11-07 15:37:53','updated_at' => '2018-11-07 15:37:53')
        );

        for ($i = 0; $i < count($salidas); $i++) { 
            $table = new Salida;

            $table->fecha           = $salidas[$i]['fecha_inicio'];
            $table->hora_salida     = $salidas[$i]['hora_salida'];
            $table->hora_regreso    = $salidas[$i]['hora_regreso'];
            $table->lugar           = $salidas[$i]['lugar_destino'];
            $table->justificacion   = $salidas[$i]['justificacion'];
            $table->objetivo        = $salidas[$i]['objetivo'];
            $table->estado          = $salidas[$i]['estado'];
            $table->observacion     = $salidas[$i]['observacion'];
            $table->encargado_id    = $salidas[$i]['encargado'];

            $table->save();
        }

        // $faker = Faker\Factory::create();



        //     for($i = 1; $i <= 20 ; $i++)
        //     {
        //         $table = new Salida;
        //         $table->fecha           = $faker->date;
        //         $table->hora_salida     = $faker->time;
        //         $table->hora_regreso    = $faker->time;
        //         $table->lugar           = $faker->word;
        //         $table->justificacion   = $faker->text;
        //         $table->objetivo        = $faker->text;
        //         $table->encargado_id    = $faker->numberBetween(1,5);
        //         $table->estado          = $faker->numberBetween(1,3);
        //         $table->observacion     = $faker->text;
        //         $table->cdmype_id       = 1;
                
        //         $table->save();

        //     }
            
    }
}
