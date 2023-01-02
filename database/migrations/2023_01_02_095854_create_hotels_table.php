<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('hotels', function (Blueprint $table) {
            //
        });*/
        DB::statement("CREATE TABLE `hotels` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(150) NULL DEFAULT NULL,
            `street` VARCHAR(150) NULL DEFAULT NULL,
            `postal_code` VARCHAR(50) NULL DEFAULT NULL,
            `city` VARCHAR(50) NULL DEFAULT NULL,
            `country` VARCHAR(50) NULL DEFAULT NULL,
            `phone` VARCHAR(50) NULL DEFAULT NULL,
            `email` VARCHAR(100) NULL DEFAULT NULL,
            `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
            `updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
            PRIMARY KEY (`id`)
        )
        COLLATE='utf8_general_ci'
        ;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
            //
        });
    }
};
