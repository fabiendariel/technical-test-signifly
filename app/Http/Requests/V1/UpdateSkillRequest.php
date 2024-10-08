<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSkillRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'employeeId' => ['required', 'integer'],
            'name' => ['required'],
            'position' => ['required', Rule::in('Frontend', 'Backend')],
            'expertise' => ['required', Rule::in('junior', 'intermediate', 'senior')],
        ];
    }

    protected function prepareForValidation()
    {
        if($this->employeeId){
            $this->merge([
                'employee_id' => $this->employeeId,
            ]);
        }  
    }
}
