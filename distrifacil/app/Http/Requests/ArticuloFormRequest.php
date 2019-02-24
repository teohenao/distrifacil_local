<?php

namespace sisVentas\Http\Requests;
use sisVentas\Http\Requests\Request;

class ArticuloFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idcategoria'=>'required',
            'nombre'=>'required|max:100',
            'stock'=>'required|numeric',
            'descripcion'=>'max:512',
            'imagen'=>'mimes:jpeg,bmp,png'
        ];
    }
}
