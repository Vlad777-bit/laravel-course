<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
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
            'category_id' => ['required', 'integer'],
            'title'       => ['required', 'string', 'min:5', 'max:30'],
            'author'      => ['required', 'string'],
            'image'       => ['nullable', 'image', 'mimes:jpg,png,jpeg'],
            'status'      => ['required', 'string', 'min:5', 'max:7'],
            'description' => ['nullable', 'string'],
        ];
    }
}
