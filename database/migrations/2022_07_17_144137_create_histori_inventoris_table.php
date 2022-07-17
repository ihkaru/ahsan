<?php

use App\Models\Alamat;
use App\Models\Kategori;
use App\Models\Orang;
use App\Models\Wadah;
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
        Schema::create('histori_inventoris', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Orang::class,"pemindah");
            $table->foreignIdFor(Kategori::class,"status");
            $table->foreignIdFor(Alamat::class,"alamat_tujuan");
            $table->string("tujuan_pemindahan");
            $table->foreignIdFor(Wadah::class,"pengguna");
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
        Schema::dropIfExists('histori_inventoris');
    }
};
