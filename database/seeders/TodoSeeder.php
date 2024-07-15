<?php

namespace Database\Seeders;

use App\Models\todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todos = [
            [
                'title' => 'Complete Laravel project',
                'description' => 'Finish the project by the end of the week',
                'status' => 1,
            ],
            [
                'title' => 'Read a book',
                'description' => 'Read at least one book this month',
                'status' => 0,
            ],
            [
                'title' => 'Go for a walk',
                'description' => 'Walk at least 10,000 steps every day',
                'status' => 1,
            ],
        ];

        foreach ($todos as $todo) {
            todo::create($todo);
        }
    }
}
