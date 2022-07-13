<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => 'max:100|required',
            'price' => 'required',
            'description' => 'required',
            'coverImage' =>'image|mimes:jpeg,png,bmp,gif, or svg',
            'category_id' => 'required',
            'discountAmount'=>'numeric',
            'slug' => 'unique:products',
        ];
    }
}
