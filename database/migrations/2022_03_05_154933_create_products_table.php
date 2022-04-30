<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('vendor_id')->nullable();

            $table->string('name');
            $table->string('slug');

			$table->text('description');

            $table->boolean('active')->default(0);
			$table->integer('price');


            $table->longText('info')->nullable();
            $table->string('material')->default('cotton');
            $table->integer('weight')->default('100');
            $table->string('widthHeight')->default('29cm * 39cm');

            $table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}
