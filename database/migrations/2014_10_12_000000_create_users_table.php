<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nombres');
            $table->unsignedBigInteger('dni')->unique();
            $table->string('sexo');
            $table->unsignedBigInteger('telefono');
            $table->unsignedInteger('edad');
            $table->tinyInteger('admin')->default(0);
            $table->string('email')->unique();
            $table->string('tipo_kit')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations. composer update, npm i, php artisan migrate
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
