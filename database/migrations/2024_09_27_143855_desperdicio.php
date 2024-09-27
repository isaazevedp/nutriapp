<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('desperdicios', function (Blueprint $table) {
            $table->id();
            $table->string('data'); // ou datetime se você precisar do horário
            $table->string('escola', 40);
            $table->float('quantidade'); // Altere se necessário
            $table->string('descricao', 370);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('desperdicio');
    }
};