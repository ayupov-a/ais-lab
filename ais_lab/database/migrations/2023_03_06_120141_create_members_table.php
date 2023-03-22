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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('role');

            $table->unsignedBigInteger('job_id')->nullable();
            $table->index('job_id', 'member_job_idx');
            $table->foreign('job_id', 'member_job_fk')->on('jobs')->references('id');


            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropForeign('member_job_fk');
            $table->dropIndex('member_job_idx');
        });
        Schema::dropIfExists('members');
     }
};
