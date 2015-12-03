<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Registration_validate extends Request
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
        return ['fn' => 'required|between:1,32',
                'ln'=> 'required|between:1,32',
                'un'=> 'required|between:6,32',
                'ps'=> 'required|between:6,32',
                'mn'=> 'required|between:9,11',


            //
        ];
    }
}
