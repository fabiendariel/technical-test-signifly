<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'name' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'profileImg' => 'required|string',
                'knowledge' => 'required|string',
                'experience' => 'required|numeric',
            ];
        } else {
            return [
                'name' => 'sometimes|required',
                'phone' => 'sometimes|required',
                'email' => 'sometimes|required|email',
                'profileImg' => 'sometimes|required',
                'knowledge' => 'sometimes|required',
                'experience' => 'sometimes|required',
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->postalCode) {
            $this->merge([
                'profile_img' => $this->profileImg
            ]);
        }
    }
}
