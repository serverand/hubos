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
        /*Schema::table('rooms', function (Blueprint $table) {
            //
        });*/
        DB::statement("CREATE TABLE `rooms` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `hotel_id` INT NULL,
            `name` VARCHAR(50) NULL DEFAULT NULL,
            `max_guests` TINYINT NULL DEFAULT NULL,
            `floor` TINYINT NULL DEFAULT NULL,
            `status` VARCHAR(50) NULL DEFAULT NULL,
            `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
            `updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
            PRIMARY KEY (`id`),
            CONSTRAINT `FK__hotels` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
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
        Schema::table('rooms', function (Blueprint $table) {
            //
        });
    }
};
