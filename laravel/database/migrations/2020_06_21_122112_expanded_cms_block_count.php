<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExpandedCmsBlockCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_content', function (Blueprint $table) {
            $table->text('content_block_1')->default('')->change();
            $table->text('content_block_2')->default('')->change();
            $table->text('content_block_3')->default('')->change();
            $table->text('content_block_4')->default('')->change();
            $table->text('content_block_5')->default('')->change();
            $table->text('content_block_6')->default('')->change();
            $table->text('content_block_7')->default('');
            $table->text('content_block_8')->default('');
            $table->text('content_block_9')->default('');
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
            $table->text('content_block_1')->change();
            $table->text('content_block_2')->change();
            $table->text('content_block_3')->change();
            $table->text('content_block_4')->change();
            $table->text('content_block_5')->change();
            $table->text('content_block_6')->change();
            $table->dropColumn('content_block_7');
            $table->dropColumn('content_block_8');
            $table->dropColumn('content_block_9');
        });
    }
}
