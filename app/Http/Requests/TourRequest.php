<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 本日も含めるため、after:yesterday
            'tour_date' => 'required|date|after:today',
            /*'reference_id' => ['required',],*/
            'agent'        => ['required',],
            'tour_name'     => ['required',],
            'series'        => ['required',],
            'destination'   => ['required',],
            'situation'     => ['required',],
            'pax'           => 'nullable|integer',
            'service'       => 'nullable'
        ];
    }
}
