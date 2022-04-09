<?php

namespace Database\Factories;

use App\Donation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DonationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Donation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount_mxn' => $this->faker->numberBetween(100,10000),
            'project_id' => $this->faker->numberBetween(1,3,2),
            'supporter_id' => $this->faker->numberBetween($min = 1, $max = 50), // 8567 
            'account_id' => $this->faker->numberBetween($min = 1, $max = 2        ), // 8567 
            'created_at' => $this->faker->dateTimeBetween($startDate = '2020-08-01 19:28:21', $endDate = 'now')
          
          
        ];
    }
}
