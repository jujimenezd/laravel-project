<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            # unsignedBigInteger crea un campo de tipo entero grande sin signo (solo positivos)
            # que se usará como llave foránea, para relacionarlo con la tabla authors
            $table->unsignedBigInteger('author_id');
            # foreign() establece una relación con otra tabla
            # references('id') indica que se relaciona con el campo 'id'
            # on('authors') especifica que la relación es con la tabla 'authors'
            $table->foreign('author_id')->references('id')->on('authors');
            $table->float('price')->nullable();
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
        Schema::dropIfExists('books');
    }
}