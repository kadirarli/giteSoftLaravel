<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //Required Fields: name, comment
        $rules = [
            'name' => 'required',
            'comment'  => 'required',
        ];

        return $rules;
    }

    public function message()
    {
        return [
            'name.required' => 'This :attribute field is required',
            'comment.required'  => 'This :attribute field is required',
        ];
    }
}
