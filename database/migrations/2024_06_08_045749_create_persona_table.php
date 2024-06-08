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
		Schema::create('persona', function (Blueprint $table) {
			$table->bigIncrements('nPerCodigo')->unsigned(); // PRIMARY KEY
            $table->char('cPerApellido', 50)->nullable()->default(null)->index('persona_cperapellido_index');
            $table->char('cPerNombre', 50)->nullable()->default(null)->index('persona_cpernombre_index');
            $table->string('cPerDireccion', 100)->nullable()->default(null);
            $table->date('dPerFecNac');
            $table->integer('nPerEdad')->length(11);
			$table->decimal('nPerSueldo', 6, 2);
			$table->string('cPerRnd', 50);
			$table->char('nPerEstado', 1)->default('1');
			$table->string('remember_token', 100)->nullable()->default(null);
            $table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
