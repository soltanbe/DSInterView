<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
            DB::statement('CREATE TABLE `users` (
                 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                 `name` varchar(30)  NOT NULL,
                 `username` varchar(30)  NOT NULL,
                 brithday date NOT NULL,
                 `email` varchar(30) UNIQUE NOT NULL,
                 `password` varchar(30) NOT NULL,
                 `remember_token` varchar(100) DEFAULT NULL,
                 `created_at` timestamp NULL DEFAULT NULL,
                 `updated_at` timestamp NULL DEFAULT NULL,
                 PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

        }


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
