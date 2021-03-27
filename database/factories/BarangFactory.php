<?php

namespace Database\Factories;

use App\Models\barang_model;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = barang_model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nama_barang' => $this->faker->name(),
            'merk_barang' => $this->faker->name(),
            'harga_barang' => $this->faker->randomNumber(6, true),
        ];
    }
}
