<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeeCollection;
use App\Http\Filters\ApiFilter;
use App\Http\Requests\V1\StoreEmployeeRequest;
use App\Http\Requests\V1\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ApiFilter();
        $filterItems = $filter->transform($request);

        $includeSkills = $request->query('includeSkills');
        $includeProjects = $request->query('includeProjects');

        $employees = Employee::where($filterItems);

        if ($includeSkills) {
            $employees = $employees->with('skills');
        }

        if ($includeProjects) {
            $employees = $employees->with('projects');
        }

        return new EmployeeCollection(
            $employees->paginate()->appends($request->query())
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new EmployeeResource(Employee::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $includeSkills = request()->query('includeSkills');
        $includeProjects = request()->query('includeProjects');

        if ($includeSkills) {
            return new EmployeeResource($employee->loadMissing('skills'));
        }
        if ($includeProjects) {
            return new EmployeeResource($employee->loadMissing('projects'));
        }

        return new EmployeeResource($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());

        return new EmployeeResource($employee);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->remove();
    }
}
