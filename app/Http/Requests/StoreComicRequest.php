<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:255',
            'description' => 'nullable',
            'thumb' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:0',
            'series' => 'required|min:5|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|min:5|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo del fumetto è richiesto',
            'title.min' => 'Il titolo del fumetto deve essere almeno di 5 caratteri',
            'title.max' => 'Il titolo del fumetto può essere massimo di 255 caratteri',
            'thumb.mimes' => 'L\'immagine del fumetto deve essere un\'immagine jpeg, png, jpg, gif o svg',
            'thumb.max' => 'L\'immagine del fumetto non può essere maggiore di 2MB',
            'price.required' => 'Il prezzo del fumetto è richiesto, si prega di non specificare la valuta',
            'price.numeric' => 'Il prezzo del fumetto deve essere numerico',
            'price.min' => 'Il prezzo del fumetto deve essere maggiore di 0',
            'series.required' => 'La serie del fumetto è richiesta',
            'series.min' => 'La serie del fumetto deve essere almeno di 5 caratteri',
            'series.max' => 'La serie del fumetto può essere massimo di 255 caratteri',
            'sale_date.required' => 'La data di uscita del fumetto è richiesta',
            'sale_date.date' => 'Si prega di inserire una data nel giusto formato',
            'type.required' => 'Il tipo del fumetto è richiesto',
            'type.min' => 'Il tipo del fumetto deve essere almeno di 5 caratteri',
            'type.max' => 'Il tipo del fumetto può essere massimo di 255 caratteri',
        ];
    }
}
