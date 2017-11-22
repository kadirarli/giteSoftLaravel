<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::user()) {
            return true;
        }
        return false;
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
