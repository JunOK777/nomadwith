<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'user_id'      => 'required|numeric',
            'address'      => 'max:255',
            'job'          => 'max:255',
            'salary'       => 'max:255',
            'nomad_flag'   => 'numeric',
            'smoke_flag'   => 'numeric',
            'alcohol_flag' => 'numeric',
            'introduce'    => 'max:255',
            'image_path'   => 'max:255'
        ];
    }
}
