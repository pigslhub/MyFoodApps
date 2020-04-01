<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->String('password');
            $table->String('gender');
            $table->String('address');
            $table->String('phone')->unique();
            $table->String('area_code');
            $table->String('dob');
            $table->String('status');
            $table->string('avatar')->nullable();
            $table->integer('rating')->default(0);
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

        DB::statement('ALTER TABLE drivers AUTO_INCREMENT = 10000001;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
