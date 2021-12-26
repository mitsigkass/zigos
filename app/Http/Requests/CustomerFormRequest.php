<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerFormRequest extends FormRequest
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
        $rules =  [
          //these are the validation rules for the form of the addition of a customer.
          //only name and gender are required fields.
          //Normally the email field would be unique but it would made it required which was not mentioned in the requirements.
            'name' => ['required', 'string', 'max:191',],
            'gender' => ['required', 'string', 'max:30',],
            'address' => [ 'max:191',],
            'dateofbirth' => [ 'max:191',],
            'phonenumber' => [ 'max:30',],
            'email' => [ 'max:191',]];

        return $rules;
    }
}
