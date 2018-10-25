<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->integer('price')->unsigned()->default(0);
            $table->integer('sale')->unsigned()->default(0);
            $table->string('size',4);
            $table->string('color',10);
            $table->string('avatar',190);
            $table->text('otherImg')->nullable();
            $table->string('describe',100);
            $table->longtext('detail');
            $table->boolean('highLight')->default(0);
            $table->unsignedInteger('idCategoryProduct');
            $table->foreign('idCategoryProduct')->references('id')->on('category_product')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('deleted_at')->nullable();
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
}
