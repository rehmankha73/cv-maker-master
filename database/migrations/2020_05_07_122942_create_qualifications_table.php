<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->unsignedBigInteger('data_id');
            $table->string('degree')->nullable();
            $table->string('insitude')->nullable();
            $table->string('session')->nullable();
            $table->string('marks')->nullable();
            $table->string('total')->nullable();
            $table->text('Q_des')->nullable();
            $table->timestamps();

            $table->foreign('data_id')->references('id')->on('data')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualifications');
    }
}
