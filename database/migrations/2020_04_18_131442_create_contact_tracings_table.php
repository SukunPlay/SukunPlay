<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTracingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_tracings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('case');
            $table->string('case_color');
            $table->integer('parent')->nullable();
            $table->string('full_name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('location')->nullable();
            $table->string('perm_add')->nullable();
            $table->string('curr_add')->nullable();
            $table->string('work_add')->nullable();
            $table->string('sex')->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('age')->nullable();
            $table->string('photo')->nullable();
            $table->integer('status')->nullable(); //0 = active 1= recovered 2= dead
            $table->integer('radius')->default(10)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('contact_tracings');
    }
}
