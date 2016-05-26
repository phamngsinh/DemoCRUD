<?php

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
            $table->string('name')->not;
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username');
            $table->string('phone');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
    CREATE TABLE IF NOT EXISTS 'users' (
'id' int(10) unsigned NOT NULL AUTO_INCREMENT,
'username' varchar(255) COLLATE utf8_unicode_ci NOT NULL,
'password' varchar(255) COLLATE utf8_unicode_ci NOT NULL,
'email' varchar(255) COLLATE utf8_unicode_ci NOT NULL,
'phone' varchar(255) COLLATE utf8_unicode_ci NOT NULL,
'name' varchar(255) COLLATE utf8_unicode_ci NOT NULL,
'created_at' timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
'updated_at' timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_
INCREMENT=3 ;**/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
