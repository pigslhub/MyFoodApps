<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name')->nullable();
            $table->String('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->String('password');
            $table->String('gender')->nullable();
            $table->String('address')->nullable();
            $table->String('phone')->unique();
            $table->String('area_code')->nullable();
            $table->String('dob')->nullable();
            $table->String('status');
            $table->string('api_token', 60)->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
