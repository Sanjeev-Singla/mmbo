<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "admin",
            'email' => "admin@test.com",
            'password' => '$2y$10$GRUIDyTsoMpsfs2Eko9aFOLEINOIjZi/AJNIv20C0AnGTmVWBo.ha',
            'remember_token' => \Str::random(10),
            'is_active' =>  1,
            'is_admin'  =>  1,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
