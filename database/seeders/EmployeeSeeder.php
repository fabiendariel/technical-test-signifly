<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //Employee::truncate();

    Employee::factory()
      ->count(25)
      ->create();
    
    $employees = Employee::all();
    foreach ($employees as $employee) {
      for ($i=0; $i<4; $i++) {
        if ($employee->role == 'Frontend Developer') {
          $skill = Skill::select('id')->where('position', 'Frontend')->inRandomOrder()->first(); 
        } elseif ($employee->role == 'Backend Developer') {
          $skill = Skill::select('id')->where('position', 'Backend')->inRandomOrder()->first();
        } else {
          $skill = Skill::select('id')->inRandomOrder()->first(); 
        }
               
        $skill_id = $skill->id;
        $tests = $employee::whereHas('skills', function ($q) use ($skill_id) {
          $q->where('id', $skill_id);
        })
        ->where('id', '=', $employee->id)
        ->get();          
        if (count($tests) == 0) {
          $expertise = fake()->randomElement(['junior', 'intermediate', 'senior']);
          $employee->skills()->attach([
            $employee['id'] => [
              'skill_id' =>  $skill_id, 
              'expertise'=> $expertise
            ]
          ]);
        }

        $project = Project::select('id')->inRandomOrder()->first();
        $project_id = $project->id;
        $tests = $employee::whereHas('projects', function ($q) use ($project_id) {
          $q->where('id', $project_id);
        })
        ->where('id', '=', $employee->id)
        ->get();
        if (count($tests) == 0) {
          $employee->projects()->attach($project_id);
        }
      }
      
      
    }  
  }
}
