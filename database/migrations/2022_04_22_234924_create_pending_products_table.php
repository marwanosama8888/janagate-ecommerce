<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_products', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('vendor_id')->nullable();

            $table->string('product_title');
            $table->string('slug');


            $table->string('category');
            $table->string('sub_category');



			$table->text('description');

            $table->boolean('active')->default(0);
			$table->integer('price');

            $table->string('prop')->nullable();
            $table->json('value')->nullable();

            $table->longText('info')->nullable();
            $table->string('material')->default('cotton');
            $table->integer('weight')->default('100');
            $table->string('widthHeight')->default('29cm * 39cm');

            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pending_products');
    }
}
