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
        // $this->call(UsersTableSeeder::class);
        \DB::table('eventos')->insert(['id'=>'1', 'evento'=>'Concierto', 'fecha'=>'2018-08-16', 'horario'=>'18:16', 'lugar'=>'Casa', 'descripcion'=>'12']);
    }
}
