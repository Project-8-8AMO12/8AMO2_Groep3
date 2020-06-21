<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CMSContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content_name'); // so we can find the page later on by name
            $table->string('title');
            $table->text('content_block_1');
            $table->text('content_block_2');
            $table->text('content_block_3');
            $table->text('content_block_4');
            $table->text('content_block_5');
            $table->text('content_block_6');
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
        Schema::dropIfExists('cms_content');
    }
}
