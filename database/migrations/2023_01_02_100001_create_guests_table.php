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
        /*Schema::table('guests', function (Blueprint $table) {
            //
        });*/
        DB::statement("CREATE TABLE `guests` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `room_id` INT NULL,
            `guest` VARCHAR(50) NULL DEFAULT NULL,
            `checkin` DATE NULL DEFAULT NULL,
            `checkout` DATE NULL DEFAULT NULL,
            `status` VARCHAR(50) NULL DEFAULT NULL,
            `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
            `updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP(),
            PRIMARY KEY (`id`),
            CONSTRAINT `FK__rooms` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
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
        Schema::table('guests', function (Blueprint $table) {
            //
        });
    }
};
