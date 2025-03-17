<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('avatar')->nullable();
            $table->string('phone', 15);
            $table->string('website', 100)->nullable();
            $table->enum('tipo_persona', ['Fisica', 'Moral']);
            $table->string('company', 50)->nullable();
            $table->string('membresia', 30)->nullable();
            $table->string('rfc',20);
            $table->string('cosolicitante', 150)->nullable();
            $table->string('cosolicitante_rfc',20)->nullable();
            $table->string('persona_autorizada',150)->nullable();
            $table->string('calle_fiscal',100);
            $table->string('numero_fiscal',50);
            $table->string('colonia_fiscal',100);
            $table->string('ciudad_fiscal',50);
            $table->string('estado_fiscal',30);
            $table->string('cp_fiscal',15);
            $table->string('telefono_fiscal',15);
            $table->string('calle_envios',100);
            $table->string('numero_envios',50);
            $table->string('colonia_envios',100);
            $table->string('ciudad_envios',50);
            $table->string('estado_envios',30);
            $table->string('cp_envios',15);
            $table->string('telefono_envios',15);
            $table->string('banco',30);
            $table->string('cuenta',30);
            $table->string('sucursal',30);
            $table->string('titular_cuenta',150);
            $table->string('beneficiario1',150)->nullable();
            $table->string('beneficiario1_parentesco',30)->nullable();
            $table->string('beneficiario2',150)->nullable();
            $table->string('beneficiario2_parentesco',30)->nullable();
            $table->text('inscripcion')->nullable();
            $table->text('credencial_elector')->nullable();
            $table->text('comprobante_domicilio')->nullable();
            $table->date('fecha_nacimiento');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
