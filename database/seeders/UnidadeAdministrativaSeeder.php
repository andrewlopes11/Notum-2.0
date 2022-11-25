<?php

namespace Database\Seeders;

<<<<<<< HEAD:database/seeders/UnidadeAdminstrativaSeeder.php
use App\Models\UnidadeAdminstrativa;
=======
use App\Models\UnidadeAdministrativa;
>>>>>>> 61944fb86fc3f9c07041bf64002a03396dc41ad2:database/seeders/UnidadeAdministrativaSeeder.php
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadeAdministrativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD:database/seeders/UnidadeAdminstrativaSeeder.php
        UnidadeAdminstrativa::factory()->count(5)->create();
=======
        UnidadeAdministrativa::factory()->count(3)->create();
>>>>>>> 61944fb86fc3f9c07041bf64002a03396dc41ad2:database/seeders/UnidadeAdministrativaSeeder.php
    }
}
