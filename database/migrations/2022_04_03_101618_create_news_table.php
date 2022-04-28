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
        Schema::create('News', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('author', 100)->default('Anonymous');
            $table->enum('status', ['ACTIVE', 'DRAFT', 'BLOCKED'])->default('DRAFT');
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('News');
    }
};
