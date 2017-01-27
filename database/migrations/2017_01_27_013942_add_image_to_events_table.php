<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('events', function (Blueprint $table) {
            $table->integer('featured_image')->unsigned();
            $table->foreign('featured_image')->references('id')->on('images');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_featured_image_foreign');
            $table->dropColumn('featured_image');
        });
        Schema::enableForeignKeyConstraints();
    }
}
