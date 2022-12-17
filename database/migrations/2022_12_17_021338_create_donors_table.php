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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('gender');
            $table->date('birthday');
            $table->text('address');
            $table->integer('weight')->nullable();
            $table->decimal('temperature', $precision=3, $scale=1)->nullable();
            $table->integer('sistole')->nullable();
            $table->integer('diastole')->nullable();
            $table->integer('pulse')->nullable();
            $table->decimal('hemoglobin', $precision=3, $scale=1)->nullable();
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
        Schema::dropIfExists('donors');
    }
};
