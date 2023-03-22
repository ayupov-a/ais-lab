<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('');

            $table->unsignedBigInteger('building_id')->nullable();
            $table->index('building_id', 'job_building_idx');
            $table->foreign('building_id', 'job_building_fk')->on('buildings')->references('id');


            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign('job_building_fk');
            $table->dropIndex('job_building_idx');
        });
        Schema::dropIfExists('jobs');
    }
};
