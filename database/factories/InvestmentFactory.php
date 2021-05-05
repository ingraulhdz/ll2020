<?php

namespace Database\Factories;

use App\Investment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InvestmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Investment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
                        'account_id' => $this->faker->numberBetween($min = 1, $max = 2        ), // 8567 

            'voucher' => '/images/projects/1/expenses/1.jpg', 
            'amount' => $this->faker->numberBetween(500,5000),
            'project_id' => $this->faker->numberBetween(1,3,2),
            'category_id' => $this->faker->numberBetween(1,3,2),
            'created_at' => $this->faker->dateTimeBetween($startDate = '2021-01-01 19:28:21', $endDate = 'now')
    
    
    
        ];
    }
}
