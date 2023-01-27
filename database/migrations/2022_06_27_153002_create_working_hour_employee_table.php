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
        Schema::create('working_hour_employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('working_hour_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('day_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_hour_employees');
    }
};
