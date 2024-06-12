<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'cpfCnpj' => 'required|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'mobilePhone' => 'nullable|string',
            'address' => 'nullable|string',
            'addressNumber' => 'nullable|string',
            'complement' => 'nullable|string',
            'province' => 'nullable|string',
            'postalCode' => 'nullable|string',
            'externalReference' => 'nullable|string',
            'notificationDisabled' => 'nullable|boolean',
            'additionalEmails' => 'nullable|string',
            'municipalInscription' => 'nullable|string',
            'stateInscription' => 'nullable|string',
            'observations' => 'nullable|string',
            'groupName' => 'nullable|string',
            'company' => 'nullable|string',
        ];
    }
}
