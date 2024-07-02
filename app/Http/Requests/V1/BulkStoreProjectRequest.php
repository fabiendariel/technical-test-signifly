<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BulkStoreProjectRequest extends FormRequest
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
            '*.employeeId' => ['required', 'integer'],
            '*.clientId' => ['required'],
            '*.name' => ['required'],
            '*.startDate' =>
            ['required', 'date_format:Y-m-d H:i:s'],
            '*.duration' => ['required', 'integer'],
        ];
    }

    protected function prepareForValidation()
    {
        $data = [];

        foreach($this->toArray() as $obj) {
            $obj['employee_id'] = $this->employeeId ?? null;
            $obj['client_id'] = $this->clientId ?? null;
            $obj['start_date'] = $this->startDate ?? null;

            $data[] = $obj;
        }

        $this->merge($data);
    }
}
