<?php

namespace App\Http\Requests;

use App\Common\API\KnocktFormRequest;

class StoreMachineRequest extends KnocktFormRequest
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
            'name' => 'required|max:255',
            'status' => 'required|gte:0|lte:2',
        ];
    }
}
