<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $jk = $this->faker->randomElements(['Laki-laki','Perempuan'])[0];
        return [
        'kd_pelanggan' =>$this->faker->bothify('##########'), 
        'nama'=>$this->faker->name(), 
        'jk'=>$jk, 
        'no_hp'=>$this->faker->phoneNumber(), 
        'alamat'=>$this->faker->address()
        ];
    }
}
