<?php

namespace App\Http\Requests\Admin\Emboh;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateEmboh extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.emboh.edit', $this->emboh);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nim' => ['sometimes', 'string'],
            'nama' => ['sometimes', 'string'],
            'umur' => ['sometimes', 'integer'],
            'alamat' => ['sometimes', 'string'],
            'kota' => ['sometimes', 'string'],
            'kelas' => ['sometimes', 'string'],
            'jurusan' => ['sometimes', 'string'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
