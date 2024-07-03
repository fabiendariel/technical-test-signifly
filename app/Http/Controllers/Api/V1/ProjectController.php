<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Project;
use App\Http\Requests\V1\BulkStoreProjectRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectCollection;
use App\Http\Filters\ApiFilter;
use Illuminate\Support\Arr;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ApiFilter();
        $filterItems = $filter->transform($request);

        $projects = Project::where($filterItems);

        return new ProjectCollection(
            $projects->paginate()->appends($request->query())
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function bulkStore(BulkStoreProjectRequest $request)
    {
        $bulk = collect($request->all())->map(function ($arr, $key) {
            return Arr::except($arr, ['clientId', 'name', 'startDate', 'duration']);
        });

        Project::insert($bulk->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return new ProjectResource($project);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return new ProjectResource($project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->remove();
    }
}
