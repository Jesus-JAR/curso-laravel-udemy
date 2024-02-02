<?php

namespace App\Http\Requests\post;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    static public function myRules()
    {
        return 
        [
            'title' => 'required|min:3|max:120',
            'slug' => 'required|min:3|max:120',
            'content' => 'required|min:5|max:300',
            'category_id' => 'required|integer',
            'description' => 'required|min:5|max:300',
            'posted' => 'required',
        ];
    }
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
        return $this->myRules();
    }
}


