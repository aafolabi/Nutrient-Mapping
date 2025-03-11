<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->float('value');
            $table->string('crop_id')->nullable();
            $table->foreign('crop_id')->references('id')->on('crops');
            $table->string('variety_id')->nullable();
            $table->foreign('variety_id')->references('id')->on('varieties');
            $table->string('point_of_interest_id')->nullable();
            $table->foreign('point_of_interest_id')->references('id')->on('point_of_interests');
            $table->string('parameter_id')->nullable();
            $table->foreign('parameter_id')->references('id')->on('parameters');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('readings');
    }
};
