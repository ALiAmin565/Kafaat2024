<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('specialist_roles', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->unsignedBigInteger('available_places');
            $table->text('qualifications');
            $table->text('job_conditions');
            $table->unsignedBigInteger('company_id'); // Column for the foreign key
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('specialist_roles');
    }
};
