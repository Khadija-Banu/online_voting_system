<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\VoterDetail;
use Illuminate\Validation\Rule;

class VoterDetailRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'vote_id' => 'required',
            'name'=>[Rule::unique(VoterDetail::class)],
            'email' => [Rule::unique(VoterDetail::class)],
            'phone' => [Rule::unique(VoterDetail::class)],
            // 'name' => Rule::unique(VoterDetail::class)->ignore($this->VoterDetail()->id),
            // 'email' => Rule::unique(VoterDetail::class)->ignore($this->VoterDetail()->id),
            // 'phone' => Rule::unique(VoterDetail::class)->ignore($this->VoterDetail()->id),
        ];
    }
}
