<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['Particulier', 'Zakelijk'])->default('Particulier');
            $table->enum('salutation', ['Dhr.', 'Mevr.'])->default('Dhr.');
            $table->string('firstname');
            $table->string('prefix')->nullable();
            $table->string('lastname');
            $table->string('postal_code');
            $table->string('house_number');
            $table->string('suffix')->nullable();
            $table->string('street_name');
            $table->string('city');
            $table->string('country');
            $table->string('phone_number');
            $table->string('birth_day');
            $table->string('birth_month');
            $table->string('birth_year');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('registered_ip');
            $table->enum('rank', ['User', 'VIP', 'Administrator'])->default('User');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
