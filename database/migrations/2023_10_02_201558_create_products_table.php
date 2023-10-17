php artisan migrate:rollback

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
        Schema::create('tb_usuario', function (Blueprint $table) {
            $table->BigIncrements('id_usuario');
            $table->String('nm_usuario');
            $table->String('email_usuario');
            $table->String('senha_usuario');
            $table->boolean('admin');

            $table->timestamps();

            $table->index('id_usuario');
        });

        Schema::create('tb_template_gerado', function (Blueprint $table) {
            $table->id('id_template_gerado');
            $table->unsignedBigInteger('id_template');
            $table->unsignedBigInteger('id_usuario');
            $table->String('nm_template_gerado');
   
        });

        Schema::create('tb_template', function (Blueprint $table) {
            $table->BigIncrements('id_template');
            $table->String('nm_template');
    
            $table->timestamps();

            $table->index('id_template');
        });

        Schema::create('tb_posicao_texto', function (Blueprint $table) {
            $table->id('id_posicao_texto');
            $table->integer('x_pos');
            $table->integer('z_pos');
            $table->integer('x_tam');
            $table->integer('z_tam');
            $table->integer('fonte_tam');
    
        });

        Schema::table('tb_template_gerado', function (Blueprint $table) {
    
            $table->foreign('id_template')->references('id_template')->on('tb_template');
            $table->foreign('id_usuario')->references('id_usuario')->on('tb_usuario');
           });


    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    { 
        Schema::table('tb_template_gerado', function (Blueprint $table) {
            $table->dropForeign(['id_template']);
            $table->dropForeign(['id_usuario']);
        });
    
        Schema::table('tb_posicao_texto', function (Blueprint $table) {
            $table->dropForeign(['id_template']);
        });
    
        Schema::dropIfExists('tb_usuario');
        Schema::dropIfExists('tb_template_gerado');
        Schema::dropIfExists('tb_template');
        Schema::dropIfExists('tb_posicao_texto');
    }
};
