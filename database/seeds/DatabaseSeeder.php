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
        \DB::table('eventos')->insert(['id'=>'1', 'evento'=>'Final Artinkuy - Danza urbana y contemporánea', 'fecha'=>'2018-11-29', 'horario'=>'16:00', 'lugar'=>'Complejo Deportivo Ferroviario', 'descripcion'=>'Final Artinkuy especialidad danza música urbana y contemporánea']);
        \DB::table('eventos')->insert(['id'=>'2', 'evento'=>'Grupos de Rock ', 'fecha'=>'2018-11-29', 'horario'=>'19:00', 'lugar'=>'Complejo Deportivo Ferroviario', 'descripcion'=>'Presentacion de Eklectica, CRYDOM, Arcangel y Deuce tributo a Kiss']);
        \DB::table('eventos')->insert(['id'=>'3', 'evento'=>'Final Artinkuy - Danza y musica Folclórica', 'fecha'=>'2018-11-30', 'horario'=>'16:00', 'lugar'=>'Complejo Deportivo Ferroviario', 'descripcion'=>'12']);
        \DB::table('eventos')->insert(['id'=>'4', 'evento'=>'Grupos Folclóricos', 'fecha'=>'2018-11-30', 'horario'=>'19:00', 'lugar'=>'Complejo Deportivo Ferroviario', 'descripcion'=>'Presentacion de grupos folclóricos Yana Mayu, Kuwabara, Punchay y Kjarkas']);
        \DB::table('eventos')->insert(['id'=>'5', 'evento'=>'Cumbia Popular', 'fecha'=>'2018-12-01', 'horario'=>'16:00', 'lugar'=>'Complejo Deportivo Ferroviario', 'descripcion'=>'Cumbia popular Verano tropical, Kupidos del amor, la Rosa & Emily Band. Juan Carlos Mardina y su grupo Traicionero']);
        \DB::table('eventos')->insert(['id'=>'6', 'evento'=>'Clausura F.I.C. 2018', 'fecha'=>'2018-12-01', 'horario'=>'19:00', 'lugar'=>'Complejo Deportivo Ferroviario', 'descripcion'=>'Ruddy Danel y presentacion estelar de Angela Leyva']);

    }
}
