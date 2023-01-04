<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->enum('rank',['1','2','3','4'])->nullable();
            $table->text('name')->nullable();
            $table->text('category')->nullable();
            $table->text('description')->nullable();
            $table->text('impact')->nullable();
            $table->enum('probability',['1','2','3','4'])->nullable();
            // $table->integer('status')->nullable();
            $table->enum('status',['0','1','2','3','4'])->nullable();

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->string('capture_title',255)->nullable();
            $table->text('capture_desc')->nullable();
            $table->text('capture_responsible')->nullable();
            $table->date('capture_start_date')->nullable();
            $table->date('capture_deadline')->nullable();
            $table->enum('capture_status',['0','1','2','3','4'])->nullable();
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
        Schema::dropIfExists('opportunities');
    }
}