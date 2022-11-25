<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UnidadeAdministrativa>
 */
class UnidadeAdministrativaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
<<<<<<< HEAD:database/factories/UnidadeAdminstrativaFactory.php
            "descricao" => $this->faker->name(),
            "setor_id" => $this->faker->integer()
=======
            'descricao' => $this->faker->text(),
>>>>>>> 61944fb86fc3f9c07041bf64002a03396dc41ad2:database/factories/UnidadeAdministrativaFactory.php
        ];
    }
}
