<?php

use App\Models\WHSegtype;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wh_segments', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50);
            $table->text('image_path')->nullable();
            $table->string('name', 255);
            $table->text('details')->nullable();
            $table->foreignId('type_id')->constrained('wh_segtypes');
            $table->foreignId('wh_id')->constrained('warehouses');
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
        Schema::dropIfExists('wh_segments');
    }
}
