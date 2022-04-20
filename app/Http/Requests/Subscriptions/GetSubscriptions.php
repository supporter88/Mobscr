<?php

namespace App\Http\Requests\Subscriptions;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class GetSubscriptions extends FormRequest
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
            'app_id' => 'nullable',
            '|user_id' => 'nullable',
            '|write_off_date' => 'nullable',
            '|next_write_off_date' => 'nullable',
            'search' => 'nullable',
            'period' => 'nullable|string',
            'is_canceled' => 'nullable|boolean',
            'start' => 'nullable|int|min:0',
            'limit' => 'nullable|int|min:1',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(["status" => false, "message" => $validator->getMessageBag()->toArray(), "errors" => $validator->errors()], 400));
    }
}
