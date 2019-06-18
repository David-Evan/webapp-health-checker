<?php

namespace App\Http\Requests\API;

class Healthchecker extends ApiRequest
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
        return  [
            'name' => 'required|max:128',
            'checkURL' => 'required|max:256',
            'alertTo' => 'sometimes|nullable|email',
            'warningAfter' => 'nullable|int',
        ];
    }
}
