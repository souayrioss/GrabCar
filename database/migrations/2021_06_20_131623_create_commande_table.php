<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande', function (Blueprint $table) {
            $table->id();
            $table->string('nameCl');
            $table->string('phoneCl');
            $table->string('addressCl');
            $table->double('emailCl');;
            $table->string('categorieVoi');
            $table->string('typeVoi');
            $table->string('colorVoi');
            $table->double('prixtotal');
            $table->string('dateCommande');
            $table->string('nbJours');
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
        Schema::dropIfExists('commande');
    }
}
