<?php

namespace ItsRafsanJani\Contact\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'phone' => [config('contact.is_phone_required') ? 'required' : 'sometimes', 'max:15'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required'],
        ];
    }
}
