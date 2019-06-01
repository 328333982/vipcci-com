<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->unsigned()->default(0);
            $table->string('app_name')->nullable();
            $table->string('app_version')->nullable();
            $table->string('baidu_pan_url')->nullable();
            $table->string('baidu_pan_secret')->nullable();
            $table->string('other_pan_url')->nullable();
            $table->string('update_time')->nullable();
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
        Schema::dropIfExists('app_versions');
    }
}
