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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("Product_Name");
            $table->string("Model_number");

            // $table->string("Catogory");

            $table->text("Product_Details");

            // Implement the below after testing.

            $table->text("How_to_use");
            $table->text("Shipping_details");
            $table->decimal("Prize");
            $table->decimal("Weight");
            $table->decimal("Quantity_per_pack");

            // $table->json("Image_paths");


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
        Schema::dropIfExists('product');
    }
};
