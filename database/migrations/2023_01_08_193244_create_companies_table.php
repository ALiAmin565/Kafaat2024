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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('representive');
            $table->text('brief');
            $table->string('active')->default(0);
            $table->string('event')->default(0);
            $table->string('img');
            $table->string('name');
            $table->text('place')->default(0);
            $table->text('work')->default(0);
            $table->text('AvailabilityWork')->default(0);
            $table->integer('numberAvailiable')->default(0);
            $table->integer('numberJoin')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('companies');
    }
};
