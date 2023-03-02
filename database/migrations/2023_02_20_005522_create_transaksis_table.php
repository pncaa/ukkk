<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('namacustomer');
            $table->enum('jenislaundry', ['Pakaian', 'Jaket', 'Bedcover']);
            $table->enum('paket', ['bronze', 'silver', 'gold']);
            $table->bigInteger('berat');
            $table->enum('status', ['proses', 'selesai']);
            $table->bigInteger('totalbayar');
            $table->string('outlet');
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
        Schema::dropIfExists('transaksis');
    }
}
