<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Eduweb2\lvslib\Leerling;
use Eduweb2\lvslib\Klas;


class LeerlingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('leerling')->truncate();
        DB::table('klas')->truncate();
        factory(Klas::class, 50)->create();
        factory(Leerling::class, 50)->create();
        $leerling = Leerling::find(rand(1,50));
        $klas = Klas::find(rand(1,50));
        //var_dump($klas);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        Model::reguard();
    }
}
