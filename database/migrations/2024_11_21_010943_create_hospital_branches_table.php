<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hospital_id');  // Hospital A
            $table->unsignedBigInteger('branch_id');    // Hospital B (Branch of A)
            $table->timestamps();

            // Foreign keys
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('hospitals')->onDelete('cascade');

            // Prevent duplicate bidirectional relationships
            $table->unique(['hospital_id', 'branch_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_branches');
    }
}
