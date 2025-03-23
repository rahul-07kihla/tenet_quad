<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("designation")->default("users");
            $table->string("email");
            $table->string("phone")->nullable();
            $table->string("password");
            $table->string("type")->nullable();
            $table->tinyInteger("status")->default(0);
            $table->integer("role")->nullable();
            $table->string("permission_role")->nullable();
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
        Schema::dropIfExists('tbl_users');
    }
};
