<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tokenId');
            $table->boolean('isOnline')->default(false);
            $table->decimal('salary', 8, 2);
            $table->integer('age')->nullable();
            $table->string('position', 255);
            $table->string('name', 255);
            $table->string('gender', 10)->nullable();
            $table->string('email', 255);
            $table->string('phone', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('skills', 255)->nullable();
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
        Schema::dropIfExists('employees');
    }
}
