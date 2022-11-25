<?php

namespace Database\Seeders;

use App\Models\UnidadeAdminstrativa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadeAdminstrativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnidadeAdminstrativa::factory()->count(5)->create();
    }
}
