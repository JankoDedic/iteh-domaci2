<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\WishlistItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        WishlistItem::truncate();
        Product::truncate();
        User::truncate();

        User::factory()
            ->count(5)
            ->has(Product::factory()->count(2))
            ->create();

        Schema::enableForeignKeyConstraints();
    }
}
