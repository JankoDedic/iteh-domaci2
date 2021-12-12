<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\WishlistItem;
use Database\Seeders\ProductSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\WishlistItemSeeder;
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

        (new UserSeeder())->run();
        (new ProductSeeder())->run();
        (new WishlistItemSeeder())->run();

        Schema::enableForeignKeyConstraints();
    }
}
