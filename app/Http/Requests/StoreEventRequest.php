<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
        // dd('aa');
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'registerEndDate' => 'required|date',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
            'capacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'city_id' => 'required|exists:cities,id',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
