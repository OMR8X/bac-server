<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFileRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'section_id' => 'nullable|integer|exists:sections,id',
            'material_id' => 'nullable|integer|exists:materials,id',
            'teacher_id' => 'nullable|integer|exists:teachers,id',
            'school_id' => 'nullable|integer|exists:schools,id',
        ];
    }
}
