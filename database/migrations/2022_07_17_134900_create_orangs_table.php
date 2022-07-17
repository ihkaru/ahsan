<?php

use App\Models\Alamat;
use App\Models\Kabkot;
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
        Schema::create('orangs', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->enum("jenis_kelamin",["l","p"]);
            $table->timestamp("tanggal_lahir");
            $table->foreignIdFor(Kabkot::class,"asal_id");
            $table->text("domisili")->nullable();
            $table->timestamp("domisili_update")->nullable();
            $table->text("link_cv")->nullable();
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
        Schema::dropIfExists('orangs');
    }
};
