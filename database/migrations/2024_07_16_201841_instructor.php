
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Instructor extends Migration
{
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('biografia')->nullable();
            $table->string('contacto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('instructores');
    }
}


