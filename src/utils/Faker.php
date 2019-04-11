<?php

namespace SwitchMedia\Kea\utils;

use Faker\Factory;

class Faker
{
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function getName()
    {
        return $this->faker->name;
    }

    public function getCountry()
    {
        return $this->faker->country;
    }
}