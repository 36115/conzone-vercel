<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'email' => strtolower($this->email),
            'bio' => $this->bio === null ? '' : trim($this->bio),
            'displayname' => $this->displayname !== null ? $this->displayname : $this->user()->name,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */ 
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'regex:/^[A-Za-z0-9]+(?:[_-][A-Za-z0-9]+)*$/', 'max:15', 'min:5'],
            'displayname' => ['string', 'max:85', 'min:5'],
            'bio' => ['present', 'string', 'max:2500'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}