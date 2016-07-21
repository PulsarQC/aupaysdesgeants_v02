<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AccueilRequest extends Request
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
            'titre' => ['required'],
            'titre_img1' => [],
            'img1' => [],
            'titre_img2' => [],
            'img2' => [],
            'titre_img3' => [],
            'img3' => [],
            'titre_img4' => [],
            'img4' => [],
            'titre_img5' => [],
            'img5' => [],
            'titre_img6' => [],
            'img6' => [],
        ];
    }
}
