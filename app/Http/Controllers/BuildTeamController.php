<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Skill;
use Illuminate\View\View;
use App\Http\Requests\BuildTeamFormRequest;
use Illuminate\Support\Carbon;

class BuildTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {     

        $frontend_skills = Skill::where('position', '=', 'Frontend')->get();
        $backend_skills = Skill::where('position', '=', 'Backend')->get();
        return view('app', [
            'frontend_skills' => $frontend_skills,
            'backend_skills' => $backend_skills, 
            'team_leader' => Employee::find(7),
            'team_back' => Employee::find(1),
            'team_front' => Employee::find(4),
            'team_support' => Employee::find(2),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function submitForm(BuildTeamFormRequest $request): View
    {
        // Process the form submission
        $validated = $request->validated();

        $startDate = new Carbon($validated['startDate']);
        $endDate = new Carbon($validated['startDate']);
        $endDate->addDays(intval($validated['duration']));

        $frontend_skills = $validated['front_skills'];
        $backend_skills = $validated['back_skills'];

        $expertise = $validated['expertise'];
        $experience = match ($validated['expertise']) {
            'junior' => [0,5],
            'intermediate' => [3,8],
            'senior' => [5,50],
        };

        $available_employee = Employee::select('id')->whereHas('projects', function ($q) use ($startDate, $endDate) {
          $q->whereBetween('start_date', [$startDate, $endDate]);
        })
        ->get(); 

        $team_leader = Employee::where('role','=','Team Leader')
        ->whereNotIn('id', $available_employee)
        ->whereBetween('experience', $experience)
        ->orderBy('experience', 'asc')
        ->inRandomOrder()
        ->first();
        if ($team_leader) {
            $available_employee->prepend($team_leader->id);
        }

        $team_front = Employee::whereIn('role', ['Web Developer', 'Fullstack Developer', 'Frontend Developer'])
        ->whereNotIn('id', $available_employee)        
        ->whereHas('skills', function ($q) use ($frontend_skills, $expertise) {
            $q->where('id', [$frontend_skills]);
            $q->where('expertise', $expertise);
        })
        ->orderBy('experience', 'asc')
        ->inRandomOrder()
        ->first();
        if ($team_front) {
            $available_employee->prepend($team_front->id);
        }        
        
        $team_back = Employee::whereIn('role', ['Web Developer', 'Fullstack Developer', 'Backend Developer'])
        ->whereNotIn('id', $available_employee)
        ->whereHas('skills', function ($q) use ($backend_skills, $expertise) {
            $q->where('id', [$backend_skills]);
            $q->where('expertise', $expertise);
        })
        ->orderBy('experience', 'asc')
        ->inRandomOrder()
        ->first();
        if ($team_back) {
            $available_employee->prepend($team_back->id);
        }

        $team_support = Employee::whereNotIn('id', $available_employee)        
        ->whereHas('skills', function ($q) use ($frontend_skills,$backend_skills, $expertise) {
            $q->whereIn('id', [$frontend_skills, $backend_skills]);
            $q->where('expertise', $expertise);
        })
        ->orderBy('experience', 'asc')
        ->inRandomOrder()
        ->first();

        return view('team', [
            'team_leader' => $team_leader ?? null,
            'team_back' => $team_back ?? null,
            'team_front' => $team_front ?? null,
            'team_support' => $team_support ?? null,
        ]);
    }

}
