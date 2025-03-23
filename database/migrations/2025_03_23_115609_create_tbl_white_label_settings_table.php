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
        Schema::create('tbl_white_label_settings', function (Blueprint $table) {
            $table->id();
            $table->string("site_title");
            $table->string("favicon");
            $table->string("footer");
            $table->string("company_website");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_white_label_settings');
    }
};
