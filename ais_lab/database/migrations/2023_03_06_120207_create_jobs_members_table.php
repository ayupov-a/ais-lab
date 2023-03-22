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
        Schema::create('jobs_members', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('member_id');

            $table->index('job_id', 'job_member_job_idx');
            $table->index('member_id', 'job_member_member_idx');

            $table->foreign('job_id', 'job_member_job_fk')->on('jobs')->references('id');
            $table->foreign('member_id', 'job_member_member_fk')->on('members')->references('id');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs_members', function (Blueprint $table) {
            $table->dropForeign('job_member_job_fk');
            $table->dropForeign('job_member_member_fk');
            $table->dropIndex('job_member_job_idx');
            $table->dropIndex('job_member_member_idx');
        });
        Schema::dropIfExists('jobs_members');
    }
};
