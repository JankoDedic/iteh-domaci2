<?php

namespace Database\Seeders;

use App\Models\WishlistItem;
use Illuminate\Database\Seeder;

class WishlistItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WishlistItem::factory()
            ->count(10)
            ->create();
    }
}
