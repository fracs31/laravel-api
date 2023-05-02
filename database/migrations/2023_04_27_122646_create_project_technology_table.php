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
        Schema::create('project_technology', function (Blueprint $table) {
            $table->unsignedBigInteger("project_id"); //id del progetto
            $table->foreign("project_id")->references("id")->on("projects")->onDelete("CASCADE")->onUpdate("CASCADE"); //riferimento della chiave esterna dei progetti
            $table->unsignedBigInteger("technology_id"); //id della tecnologia
            $table->foreign("technology_id")->references("id")->on("technologies")->onDelete("CASCADE")->onUpdate("CASCADE"); //riferimento della chiave esterna delle tecnologie
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
};
