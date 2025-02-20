<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionItemRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Pastikan true agar request bisa diproses
    }

   
}