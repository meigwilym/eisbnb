<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('listing_type_id');
            $table->unsignedBigInteger('advert_level_id');
            $table->text('short_description');
            $table->text('long_description');
            $table->text('address');
            $table->text('postcode');
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->integer('cost_per_night')->default(0);
            $table->integer('beds')->default(1);
            $table->json('amenities');
            $table->json('availability');
            $table->text('distances')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('listing_type_id')->references('id')->on('listing_types');
            $table->foreign('advert_level_id')->references('id')->on('advert_levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
