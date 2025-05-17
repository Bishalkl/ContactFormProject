<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name'      => 'required|string|max:255',
            'second_name'     => 'nullable|string|max:255',
            'last_name'       => 'required|string|max:255',
            'address'         => 'required|string|max:500',
            'gender'          => 'required|in:Male,Female,Other',
            'dob'             => 'required|date|before:today',
            'qualification'   => 'required|in:SEE,SLC,Bachelor,Master,PhD,No Qualification',
            'country'         => 'required|in:Nepal,India,China,Japan',
            'contact'         => 'required|digits_between:7,15',
        ];
    }

    public function messages(): array
    {
        return [
            // First Name
            'first_name.required'    => 'First name is required.',
            'first_name.string'      => 'First name must be a valid string.',
            'first_name.max'         => 'First name may not be greater than 255 characters.',

            // Second Name
            'second_name.string'     => 'Second name must be a valid string.',
            'second_name.max'        => 'Second name may not be greater than 255 characters.',

            // Last Name
            'last_name.required'     => 'Last name is required.',
            'last_name.string'       => 'Last name must be a valid string.',
            'last_name.max'          => 'Last name may not be greater than 255 characters.',

            // Address
            'address.required'       => 'Address is required.',
            'address.string'         => 'Address must be a valid string.',
            'address.max'            => 'Address may not be greater than 500 characters.',

            // Gender
            'gender.required'        => 'Please select a gender.',
            'gender.in'              => 'Invalid gender selected.',

            // Date of Birth
            'dob.required'           => 'Date of birth is required.',
            'dob.date'               => 'Date of birth must be a valid date.',
            'dob.before'             => 'Date of birth must be in the past.',

            // Qualification
            'qualification.required' => 'Please select a qualification.',
            'qualification.in'       => 'Selected qualification is not valid.',

            // Country
            'country.required'       => 'Please select a country.',
            'country.in'             => 'Selected country is not valid.',

            // Contact
            'contact.required'       => 'Contact number is required.',
            'contact.digits_between' => 'Contact number must be between 7 and 15 digits.',
        ];
    }
}
