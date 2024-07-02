<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'profileImg' => $this->profile_img,
            'knowledge' => $this->knowledge,
            'experience' => $this->experience,
            'role' => $this->role,
            'employee_skill' => SkillResource::collection($this->whenLoaded('skills')),
            'employee_project' => ProjectResource::collection($this->whenLoaded('projects'))
        ];
    }
}
