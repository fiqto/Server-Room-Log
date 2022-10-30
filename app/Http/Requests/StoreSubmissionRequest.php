<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubmissionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'origin' => 'required',
            'destination_server' => 'required',
            'entry_date' => 'required|date_format:Y-m-d H:i:s',
            'date_time_out' => 'required|date_format:Y-m-d H:i:s',
            'reason' => 'required',
        ];
    }
}
