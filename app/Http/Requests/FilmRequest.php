<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
        // get id if has film
        $id = isset($this->film) ? $this->film->id : null;
        //Required Fields: name, description, release_date, rating, ticket_price, country, photo
        $rules = [
            'name' => 'required|unique:films,name' . $id,
            'description'  => 'required',
            'release_date' => 'required|date',
            'rating' => 'required|integer|between:1,5',
            'ticket_price' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'country' => 'required|string',
        ];

        if(request()->isMethod('post')){
            $rules['photo'] = 'required|mimes:jpeg,bmp,png';
        }
        if(request()->isMethod('put') OR request()->isMethod('patch')){
            $rules['photo'] = 'mimes:jpeg,bmp,png';
        }

        return $rules;
    }

    public function message()
    {
        return [
            'name.required' => 'This :attribute field is required',
            'description.required'  => 'This :attribute field is required',
            'release_date.required' => 'This :attribute field is required',
            'rating.required' => 'This :attribute field is required',
            'ticket_price.required' => 'This :attribute field is required',
            'country.required' => 'This :attribute field is required',
            'photo.required' => 'This :attribute field is required'

        ];
    }

}
