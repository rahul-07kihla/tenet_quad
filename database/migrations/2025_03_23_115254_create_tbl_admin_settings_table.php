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
        Schema::create('tbl_admin_settings', function (Blueprint $table) {
            $table->id();
            $table->string("name_company_name");
            $table->string("contact_person");
            $table->string("phone");
            $table->string("email");
            $table->string("address");
            $table->string("time_zone");
            $table->string("web_site");
            $table->date("date_format");
            $table->string("logo");
            $table->string("user_name");
            $table->string("password");
            $table->tinyInteger("status");
            $table->tinyInteger("approval_status");
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
        Schema::dropIfExists('tbl_admin_settings');
    }
};
