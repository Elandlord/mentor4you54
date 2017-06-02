<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupMentorRequest extends FormRequest
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
        return [
            'voornaam' => 'required',
            'aachternaam' => 'required',
            'telefoonnummer' => 'required',
            'geboortedatum' => 'required',
            'emailadres' => 'required',
            'gemeente' => 'required',
            'bericht' => 'required',
        ];
    }
}