<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Seeds the database with 10 todos
     */
    public function run(): void
    {
        Todo::factory(10)->create();
    }
}
