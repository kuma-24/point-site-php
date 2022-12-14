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
        Schema::create('study_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('study_post_id');
            $table->string('body');
            $table->timestamps();

            $table
                ->foreign('study_post_id')
                ->references('id')
                ->on('study_posts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_comments');
    }
};
