<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('category_id'); // This will be the primary key and auto-incrementing

            $table->string('name');
            $table->string('image');
            $table->enum('status', ['active', 'inactive']); // Adjust based on your actual status options
            $table->string('slug');
            $table->string('restaurant_name');

            $table->string('description');
            $table->timestamps();
        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
