<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsFeatureInPostsTableTableposts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->string('title',500)->change();
     $table->boolean('is_feature')->default(false)->after('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table ->string('title') ->change();
            $table ->dropColumn('is_feature') ;
        });
    }

}
