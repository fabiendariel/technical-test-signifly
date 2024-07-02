<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:12',
            'email' => 'required|string',
            'profileImg' => 'required|string',
            'knowledge' => 'required|string',
            'experience' => 'required|numeric',
            'role' => 'required|string',
        ];
    }

    protected function prepareForValidation()
    {
        $data = [];

        foreach ($this->toArray() as $obj) {
            $obj['profile_img'] = $this->profileImg ?? null;

            $data[] = $obj;
        }

        $this->merge($data);
    }
}
