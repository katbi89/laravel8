<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $email = $this->faker->unique()->safeEmail();
        $phone = $this->faker->numberBetween(1000, 5000);
        $phone2 = $this-> faker->numberBetween(1000, 5000);
        $address = $this->faker->text(10);
        $map = $this->faker->text(10);
        $twitter = $this->faker->text(10);
        $facebook = $this->faker->text(10);
        $pinterest = $this->faker->text(10);
        $instagram = $this->faker->text(10);
        $youtube = $this->faker->text(10);
       
        return [
            'email' => $email,
            'phone' => $phone,
            'phone2' => $phone2,
            'address' => $address,
            'map' => $map,
            'twitter' => $twitter,
            'facebook' => $facebook,
            'pinterest' => $pinterest,
            'instagram' => $instagram,
            'youtube' => $youtube
        ];
    }
}