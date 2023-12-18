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
        Schema::create('hackteams', function (Blueprint $table) {
            $table->increments('id');
            $table->char('teamName', 30)->unique();
            $table->string('LeaderName', 100);
            $table->char('member1Contact', 15)->unique();
            $table->string('leader_faculty', 100);
            $table->integer('leader_batchNumber');
            $table->char('member1SID', 15);
            $table->string('member1Email', 50)->unique();
            //Member 02 Details
            $table->string('member2Name', 100)->nullable();
            $table->char('member2Contact', 15)->nullable();
            $table->string('m2_faculty', 100)->nullable();
            $table->integer('m2_batchNumber')->nullable();
            $table->char('member2SID', 15)->nullable();
            $table->string('member2Email', 50)->nullable();
            //Member 03 details
            $table->string('member3Name', 100)->nullable();
            $table->char('member3Contact', 15)->nullable();
            $table->string('m3_faculty', 100)->nullable();
            $table->integer('m3_batchNumber')->nullable();
            $table->char('member3SID', 15)->nullable();
            $table->string('member3Email', 50)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hackteams');
    }
};
