<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HistoireRequest extends Request
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
            'titre_histoire' => ['required'],
            'titre_realisation' => ['required'],
            'titre_service' => ['required'],
            'titre_produit' => ['required'],
            'img_url_guy' => [],
            'img_url_denise' => [],
            'description_histoire' => [],
            'description_guy' => [],
            'description_denise' => [],
            'description_service' => [],
            'description_produit' => [],
            'description_realisation' => [],
        ];
    }
}
