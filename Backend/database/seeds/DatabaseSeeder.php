<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(Bitacoras::class);
        
        $this->call(EmpresasTableSeeder::class);
        $this->call(EmpresariosTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(ClienteIndicadoresSeeder::class);
        $this->call(ClienteProyectosSeeder::class);
        $this->call(ClienteAccionesSeeder::class);

        $this->call(ConsultoresTableSeeder::class);
        $this->call(ConsultorEspecialidadesSeeder::class);
        
        $this->call(SalidasTableSeeder::class);
        $this->call(SalidaAsesoresTableSeeder::class);

        $this->call(Especialidades::class);
        $this->call(Noticias::class);
        $this->call(Proyectos::class);

        $this->call(AtTerminosSeeder::class);
        $this->call(AtConsultoresSeeder::class);
        $this->call(AtContratosSeeder::class);
        $this->call(AtActasSeeder::class);

        $this->call(CapTerminosSeeder::class);
        $this->call(CapConsultoresSeeder::class);
        $this->call(CapContratosSeeder::class);
        $this->call(CapAsistenciasSeeder::class);

        
    }
}
