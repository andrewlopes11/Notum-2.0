<?php

namespace Database\Seeders;

use App\Models\UnidadeAdminstrativa;

use App\Models\UnidadeAdministrativa;
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

        UnidadeAdministrativa::factory()->count(5)->create();
        UnidadeAdministrativa::factory()->count(3)->create();
    }
}
