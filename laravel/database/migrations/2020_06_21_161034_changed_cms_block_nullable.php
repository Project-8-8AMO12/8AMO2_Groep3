<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangedCmsBlockNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_content', function (Blueprint $table) {
            $table->text('content_block_1')->default('')->nullable()->change();
            $table->text('content_block_2')->default('')->nullable()->change();
            $table->text('content_block_3')->default('')->nullable()->change();
            $table->text('content_block_4')->default('')->nullable()->change();
            $table->text('content_block_5')->default('')->nullable()->change();
            $table->text('content_block_6')->default('')->nullable()->change();
            $table->text('content_block_7')->default('')->nullable()->change();
            $table->text('content_block_8')->default('')->nullable()->change();
            $table->text('content_block_9')->default('')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cms_content', function (Blueprint $table) {
            $table->text('content_block_1')->default('')->change();
            $table->text('content_block_2')->default('')->change();
            $table->text('content_block_3')->default('')->change();
            $table->text('content_block_4')->default('')->change();
            $table->text('content_block_5')->default('')->change();
            $table->text('content_block_6')->default('')->change();
            $table->text('content_block_7')->default('')->change();
            $table->text('content_block_8')->default('')->change();
            $table->text('content_block_9')->default('')->change();
        });
    }
}
