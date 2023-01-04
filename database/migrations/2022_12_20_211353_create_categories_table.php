<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string('name' , 50);
            // $table->enum('name',
            // [
            // 'Finance',
            // 'Technical',
            // 'Commercial',
            // 'Procurement',
            // 'HR'	,
            // 'Legal',
            // 'Tax',
            // 'Market Prices',
            // 'Market Share',
            // 'Production Cost',
            // 'Market Oversupply',
            // 'FX',
            // 'Employees',
            // 'Competitors',
            // ]);
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
        Schema::dropIfExists('categories');
    }
}