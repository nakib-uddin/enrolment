<?php

use Illuminate\Database\Seeder;
use App\Models\Addstudent;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Addstudent::factory()->count(100)->create();
    }
}