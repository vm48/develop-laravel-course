<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Book::factory(100)->create();
        Category::factory(10)->create();
        for ($i = 1; $i < 100; $i++) {
            DB::table('book_categories')->insert([
                'category_id' => Category::query()->get()->random()->id,
                'book_id'     => Book::query()->get()->random()->id,
                'created_at'  => Carbon::now(), 'updated_at' => Carbon::now(),
            ]);
        }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
