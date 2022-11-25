<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UnidadeAdminstrativa>
 */
class UnidadeAdminstrativaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "descricao" => $this->faker->name(),
            "setor_id" => $this->faker->integer()
        ];
    }
}
