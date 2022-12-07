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
        Schema::create('packagedetails', function (Blueprint $table) {
           
            $table->id();
            $table->foreignId('type_id')->constrained('types');
            $table->string('name');
            $table->longText('details1')->nullable();
            $table->longText('details2')->nullable();
            $table->datetime('package_start_date');
            $table->datetime('package_end_date');
            $table->string('image')->nullable();
            $table->double('price');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('packagedetails');
    }
};
