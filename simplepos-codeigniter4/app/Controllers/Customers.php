<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Andrea Santos', 'email' => 'andrea.santos@example.com', 'phone' => '0917 123 4567'],
            ['full_name' => 'Ben Ramirez', 'email' => 'ben.ramirez@example.com', 'phone' => '0918 234 5678'],
            ['full_name' => 'Carla Mendoza', 'email' => 'carla.mendoza@example.com', 'phone' => '0919 345 6789'],
            ['full_name' => 'Daniel Cruz', 'email' => 'daniel.cruz@example.com', 'phone' => '0920 456 7890'],
            ['full_name' => 'Erika Villanueva', 'email' => 'erika.v@example.com', 'phone' => '0921 567 8901'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
