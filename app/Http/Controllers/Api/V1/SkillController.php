<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Skill;
use App\Http\Requests\V1\BulkStoreSkillRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use App\Http\Resources\SkillCollection;
use Illuminate\Http\Request;
use App\Http\Filters\ApiFilter;
use Illuminate\Support\Arr;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ApiFilter();
        $queryItems = $filter->transform($request);
        if (count($queryItems) == 0) {
            return new SkillCollection(Skill::paginate());
        } else {
            $skills = Skill::where($queryItems)->paginate();
            return new SkillCollection(
                $skills->appends($request->query())
            );
        }
    }

    public function bulkStore(BulkStoreSkillRequest $request)
    {
        $bulk = collect($request->all())->map(function ($arr, $key) {
            return Arr::except($arr, ['name', 'position']);
        });

        Skill::insert($bulk->toArray());
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return new SkillResource($skill);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $skill->update($request->all());

        return new SkillResource($skill);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->remove();
    }
}
