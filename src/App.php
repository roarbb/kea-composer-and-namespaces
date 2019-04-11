<?php

namespace SwitchMedia\Kea;

use SwitchMedia\Kea\utils\Faker;

class App
{
    public function run()
    {
        $renderer = new Renderer();
        $faker = new Faker();

        $templateVariables = [
            'name' => $faker->getName(),
            'country' => $faker->getCountry(),
        ];

        $renderer->render($templateVariables);
    }
}