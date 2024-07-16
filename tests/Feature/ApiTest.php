<?php

namespace Tests\Feature;

use App\Models\Employee;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\SkillCollection;
use App\Http\Resources\SkillResource;
use DateTime;

class ApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_api_get_all_employees(): void
    {
        Employee::factory()->create();

        $response = $this->get('/api/v1/employees');

        $employe_resource = new EmployeeCollection(Employee::all());
        //dd($response->json(), $employe_resource->response()->getData(true));
        $this->assertEquals(
            $response->json(),
            $employe_resource->response()->getData(true)
        );
    }

    public function test_api_get_one_employee(): void
    {
        Employee::factory()->create();

        $employee = Employee::latest()->first();
        $response = $this->getJson('/api/v1/employees/'.$employee->id);        
        
        $employe_resource = new EmployeeResource($employee);
        //dd($response->json(), $employe_resource->response()->getData(true));
        $this->assertEquals(
            $response->json(),
            $employe_resource->response()->getData(true)
        );
    }

    public function test_api_store_one_employee(): void
    { 
       $employee = [
            'name' => 'Fabien Dariel',
            'phone' => '438-528-3971',
            'email' => 'fabien.dariel@gmail.com',
            'profile_img' => "https://i.pravatar.cc/500?u=fabien.dariel@gmail.com",
            'knowledge' =>
            'Linux, Windows, InDesign, Drupal, Wordpress, SEO, UI/UX Design, Photoshop',
            'experience' => 16,
            'role' => 'Fullstack Developer'
        ];
        $employee_resource = new EmployeeResource(Employee::create($employee));
        
        $response = $this->postJson('/api/v1/employees', $employee);
        
        $response->assertStatus(201);
        $this->assertEquals(
            $response->json(),
            $employee_resource->response()->getData(true)
        );
    }

    public function test_api_get_list_projects(): void
    {
        Project::factory()->create();

        $response = $this->getJson('/api/v1/projects');

        $projects_resource = new ProjectCollection(Project::all());
        //dd($response->json(), $employe_resource->response()->getData(true));
        $this->assertEquals(
            $response->json(),
            $projects_resource->response()->getData(true)
        );
    }

    public function test_api_get_one_project(): void
    {
        Project::factory()->create();
        $project = Project::latest()->first();

        $response = $this->get('/api/v1/projects/' . $project->id);

        $project_resource = new ProjectResource($project);
        //dd($response->json(), $employe_resource->response()->getData(true));
        $this->assertEquals(
            $response->json(),
            $project_resource->response()->getData(true)
        );
    }

    public function test_api_store_one_project(): void
    {
        $project = [
            'client_id' => 78,
            'name' => 'Super',
            'start_date' => '2024-07-28',
            'duration' => 10
        ];
        $project_resource = new ProjectResource(Project::create($project));
        
        $response = $this->postJson('/api/v1/projects', $project);
        
        $response->assertStatus(201);
        $this->assertEquals(
            $response->json(),
            $project_resource->response()->getData(true)
        );
    }

    public function test_api_get_list_skills(): void
    {
        Skill::create(['name' => 'React JS', 'position' => 'Frontend']);
        
        $response = $this->get('/api/v1/skills');

        $skills_resource = new SkillCollection(Skill::all());
        //dd($response->json(), $employe_resource->response()->getData(true));
        $this->assertEquals(
            $response->json(),
            $skills_resource->response()->getData(true)
        );
    }

    public function test_api_get_one_skill(): void
    {
        Skill::create(['name' => 'PHP', 'position' => 'Backend']);
        $skill = Skill::latest()->first();

        $response = $this->get('/api/v1/skills/'.$skill->id);

        $skill_resource = new SkillResource($skill);
        //dd($response->json(), $employe_resource->response()->getData(true));
        $this->assertEquals(
            $response->json(),
            $skill_resource->response()->getData(true)
        );
    }

    public function test_api_update_one_skill(): void
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
        
        $skill = [
            'id' => 3,
            'name' => 'Super'
        ];
        Skill::find(3)->update($skill);
        $skill_resource = new SkillResource(Skill::find(3));
        
        $response = $this->patchJson('/api/v1/skills/3', $skill);
        
        $response->assertStatus(200);
        $this->assertEquals(
            $response->json(),
            $skill_resource->response()->getData(true)
        );
    }
}
