<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('agent_id')->nullable();
            $table->string('propert_title')->nullable();
            $table->string('price')->nullable();
            $table->string('gallery_photos')->nullable();
            $table->string('plane_photos')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->string('garages')->nullable();
            $table->string('area')->nullable();
            $table->string('area_postfix')->nullable();
            $table->string('property_type')->nullable();
            $table->string('propert_status')->nullable();
            $table->string('description')->nullable();
            $table->string('property_video_url')->nullable();
            $table->string('virtual_tour')->nullable();

            $table->string('air_conditioning')->nullable();
            $table->string('heating')->nullable();
            $table->string('air_conditioning1')->nullable();
            $table->string('heating1')->nullable();
            $table->string('balcony')->nullable();
            $table->string('internet')->nullable();
            $table->string('balcony1')->nullable();
            $table->string('internet1')->nullable();
            $table->string('bedding1')->nullable();
            $table->string('microwave')->nullable();
            $table->string('bedding2')->nullable();
            $table->string('microwave1')->nullable();
            $table->string('cable_tv_1')->nullable();
            $table->string('oven')->nullable();
            $table->string('cable_tv_2')->nullable();
            $table->string('oven_1')->nullable();
            $table->string('coffee_pot')->nullable();
            $table->string('toaster')->nullable();
            $table->string('coffee_pot_1')->nullable();
            $table->string('toaster_1')->nullable();
            $table->string('dashwasher')->nullable();
            $table->string('parking')->nullable();
            $table->string('dashwasher1')->nullable();
            $table->string('parking1')->nullable();

            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->string('private_note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
