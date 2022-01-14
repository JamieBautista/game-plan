<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('abbreviation');
        });
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('consoles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
        Schema::dropIfExists('statuses');
        Schema::dropIfExists('genres');
        Schema::dropIfExists('consoles');
    }
}
