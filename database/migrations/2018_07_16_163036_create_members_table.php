<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('Memberid');
            $table->string('Username');
            $table->string('Password');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('Tel');
            $table->string('Email');
            $table->string('Address');
            $table->string('ZIP');
            $table->integer('Point');
            $table->string('Country');
            $table->date('Birth');
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
        Schema::dropIfExists('members');
    }
}
