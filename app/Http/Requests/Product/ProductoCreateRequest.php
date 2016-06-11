<?php

namespace shoes\Http\Requests\Product;

use shoes\Http\Requests\Request;

class ProductoCreateRequest extends Request
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
          'name'=>'required|min:3|unique:products,name',
          'price'=> 'required',
          'marca_id'=>'required|not_in:0',
        ];
    }
    public function messages()
    {
      return[
        'marca_id.not_in:0'=>'El campo marcar es obligatotio',
      ];
    }
}
