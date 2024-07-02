<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BuildTeamFormRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'front_skills' => 'required|numeric',
            'back_skills' => 'required|numeric',
            'expertise' => ['required', Rule::in('junior', 'intermediate', 'senior')],
            'startDate' => 'required|date_format:Y-m-d',
            'duration' => 'required|numeric',
        ];
    }

    
}
