<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_events', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->decimal('cost','11','4',true);
            $table->string('work_type');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('user_id');
            $table->date('event_date');
            $table->unsignedBigInteger('shift_id');
            $table->timestamps();

            $table->unique(['company_id','event_date','shift_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_events');
    }
}
