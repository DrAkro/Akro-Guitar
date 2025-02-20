<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransactionItemRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


}