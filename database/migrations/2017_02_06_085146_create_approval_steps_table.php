<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprovalStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approval_steps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('step_id', 15);
            $table->integer('approval_flow_id')->index();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('role_id')->index();
            $table->integer('designation_id')->index();
            $table->integer('level_id');
            $table->integer('company_id');
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->softDeletes();
            $table->unique(['id','step_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approval_steps');
    }
}
