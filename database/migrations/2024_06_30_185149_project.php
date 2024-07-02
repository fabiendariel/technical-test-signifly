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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->string('name');
            $table->dateTime('start_date');
            $table->integer('duration');
            $table->timestamps();
        });
        Schema::create('employee_project', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Employee::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Project::class)->constrained()->cascadeOnDelete();
            $table->primary(['employee_id', 'project_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_project');        
        Schema::dropIfExists('projects');
    }
};
