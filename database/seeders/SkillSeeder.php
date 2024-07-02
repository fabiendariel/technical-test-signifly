<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Skill::insert([
      ['name' => 'React JS', 'position' => 'Frontend'],
      ['name' => 'Angular', 'position' => 'Frontend'],    
      ['name' => 'Tailwind', 'position' => 'Frontend'],
      ['name' => 'Laravel', 'position' => 'Backend'],
      ['name' => 'Symfony', 'position' => 'Backend'],
      ['name' => 'Node JS', 'position' => 'Backend'],
      ['name' => 'Python', 'position' => 'Backend'],
      ['name' => 'C#', 'position' => 'Backend'],
      ['name' => 'ASP', 'position' => 'Frontend'],
    ]);
  }
}
