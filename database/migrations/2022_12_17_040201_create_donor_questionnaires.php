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
        Schema::create('donor_questionnaires', function (Blueprint $table) {
            $table->id();
            $table->char('hepatitis');
            $table->char('aids');
            $table->char('ketergantungan_obat');
            $table->char('alkoholisme');
            $table->char('sifilis');
            $table->char('tuberkolosis');
            $table->char('epilepsi');
            $table->char('penyakit_kulit');
            $table->char('penyakit_darah');
            $table->char('resiko_aids');
            $table->char('hamil');
            $table->char('menyusui');
            $table->char('haid');
            $table->char('vaksinasi_polio');
            $table->char('operasi_gigi');
            $table->char('alergi');
            $table->char('vaksinasi_virus_hidup');
            $table->char('kontak_dengan_hepatitis');
            $table->char('mendapat_transfusi');
            $table->char('tato');
            $table->char('operasi_kecil');
            $table->char('injeksi_rabies');
            $table->char('transplantasi_kulit');
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
        Schema::dropIfExists('donor_questionnaires');
    }
};
