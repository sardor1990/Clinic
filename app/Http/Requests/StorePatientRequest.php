<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PhoneNumber;

class StorePatientRequest extends FormRequest
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
            'name'=> 'required',
            'registration_date'=>'required',
            'referral'=>'required',
            'age'=>'required',
            'phone'=>['required','numeric', new PhoneNumber],
            'home_address'=>'required',
            'email'=>'required',
            'payment_method'=>'required',
            'patient_type'=>'required',
            'marital_status'=>'required',
            'blood_group'=>'required',
            'occupation'=>'required',
            'home_phone'=>'required',
            'father_name'=>'required',
            'mother_name'=>'required',
            'symptoms'=>'required',
        ];
    }
}
