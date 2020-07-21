<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tapes', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id');
            $table->string('name');
            $table->string('classOfTape');
            $table->string('program');
            $table->string('editor');
            $table->string('minister');
            $table->string('libNo');
            $table->string('shelfNo');
            $table->string('section');
            $table->string('rowNo');
            $table->string('tapeNumbering');
            $table->string('tapePresence');
            $table->string('tapeType');
            $table->string('tapeContent')->nullable();
            $table->string('date');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('tapes');
    }
}
