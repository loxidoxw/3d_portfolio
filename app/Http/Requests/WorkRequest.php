<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
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
     *   |mimetypes:application/octet-stream'
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail' => 'required|string',
            'sketchfab_url' => 'nullable|url',
            'mview_path' => 'nullable|string'
        ];
    }

//return [
//'title' => 'required|string|max:255',
//'description' => 'required|string',
//'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg,svg',
//'sketchfab_url' => 'nullable|url',
//'mview_path' => 'nullable|file'
//];
}
