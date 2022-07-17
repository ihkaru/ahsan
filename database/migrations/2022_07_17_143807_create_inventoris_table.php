<?php

use App\Models\Kategori;
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
        Schema::create('inventoris', function (Blueprint $table) {
            $table->id();
            $table->timestamp("masa_mulai_pakai")->nullable();
            $table->timestamp("masa_selesai_pakai")->nullable();
            $table->string("nama");
            $table->foreignIdFor(Kategori::class);
            $table->unsignedMediumInteger("jumlah");
            $table->foreignIdFor(Wadah::class,"pemilik");
            $table->softDeletes();
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
        Schema::dropIfExists('inventoris');
    }
};
