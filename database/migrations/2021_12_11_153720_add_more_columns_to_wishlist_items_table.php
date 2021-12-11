<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToWishlistItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wishlist_items', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wishlist_items', function (Blueprint $table) {
            $table->dropForeign('wishlist_items_product_id_foreign');
            $table->dropColumn('product_id');
            $table->dropForeign('wishlist_items_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
