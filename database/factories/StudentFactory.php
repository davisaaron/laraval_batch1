<?php

namespace Database\Factories;

use App\Models\Student;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Student::class;
    public function definition()
    {
        return [
            //
           
            'first_name'=>$this->faker->firstName,
            'last_name'=>$this->faker->lastName,
            'gender'=>$this->faker->randomElement(['male', 'female']),
            'grade'=>$this->faker->randomElement(['1', '2','3','4']),
            'address'=>$this->faker->address,
            'subject'=>$this->faker->randomElement(['maths', 'female']),
            'email'=>$this->faker->email,
            'dob'=>$this->faker->date($format ='D-m-y',$max='2021',$min='1950'),
            'mobile'=>$this->faker->phoneNumber,
        ];
    }
}
