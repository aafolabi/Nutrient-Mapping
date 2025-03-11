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
        Schema::create('nutrition', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('country_id')->nullable();
            $table->string('eco_region_id')->nullable();
            $table->string('crop_id')->nullable();
            $table->string('category')->nullable();
            $table->string('description')->nullable();
            $table->float('fibre')->default(0);
            $table->float('protein')->default(0);
            $table->float('fat')->default(0);
            $table->float('iron')->default(0);
            $table->float('carbohydrate')->default(0);
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
        Schema::dropIfExists('nutrition');
    }
};
