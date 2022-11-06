<?php

use App\Models\akademik;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('akademik', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('pleton_id');
        //     $table->foreignId('kompi_id');
        //     $table->foreignId('angkatan_id');
        //     $table->foreignId('tahun_id');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
