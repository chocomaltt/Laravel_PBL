<?php

namespace App\Http\Requests\Kader\Artikel;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreArtikelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'tag' => implode(',', $this->input('tag')),
            'kader_id' => auth()->user()->kaders[0]->kader_id,
        ]);

        $this->request->replace($this->only([
            'kader_id',
            'judul',
            'isi',
            'tag',
            'foto_artikel_path',
        ]));

    }

    /**
     * Handle a passed validation attempt.
     *
     * @return void
     */
    protected function passedValidation(): void
    {
        $image = $this->file('foto_artikel_path');
        $fileName = $image->hashName();
        $image->move(public_path('storage'), $fileName);
        $this->merge([
            'foto_artikel_path' => $fileName
        ]);
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'failed' => $validator->errors()
        ]));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kader_id' => 'bail|required|exists:kaders|integer',
            'judul' => 'bail|required|string|max:250',
            'isi' => 'bail|required|string',
            'tag' => 'bail|required|string|max:50',
            'foto_artikel_path' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}