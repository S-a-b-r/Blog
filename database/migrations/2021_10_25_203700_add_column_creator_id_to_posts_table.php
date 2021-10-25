<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCreatorIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('creator_id')->nullable()->after('id');

            $table->index('creator_id', 'posts_creator_idx');

            $table->foreign('creator_id', 'posts_creator_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_creator_fk');
            $table->dropIndex('posts_creator_idx');
            $table->dropColumn('creator_id');
        });
    }
}
