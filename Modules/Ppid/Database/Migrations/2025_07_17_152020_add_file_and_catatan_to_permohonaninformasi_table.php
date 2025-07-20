<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFileAndCatatanToPermohonaninformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('permohonaninformasi', function (Blueprint $table) {
            $table->string('file')->nullable()->after('status');
            $table->string('catatan')->nullable()->after('file');
        });
    }

    public function down()
    {
        Schema::table('permohonaninformasi', function (Blueprint $table) {
            $table->dropColumn(['file', 'catatan']);
        });
    }
}
