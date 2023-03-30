@extends('layouts.admin_layout')
@section('content')
    <h1>Bemorlar haqida ma'lumot</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="{{ route('patient.index') }}"><button class="btn btn-secondary" type="button">Orqaga</button></a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
        <table class="table table-bordered">
            <th scope="col">T/R</th>
                <tr>
                    <th scope="col">Name</th>
                    <td>{{ $patient->name }}</td>
                </tr>
                <tr>
                    <th scope="col">Email</th>
                    <td>{{ $patient->email }}</td>
                </tr>
                <tr>
                    <th scope="col">Registration date</th>
                    <td>{{ $patient->Registration_date }}</td>
                </tr>
                <tr>
                    <th scope="col">Referral(Murojaat)</th>
                    <td>{{ $patient->referral }}</td>
                </tr>
                <tr>
                    <th scope="col">patient_type</th>
                    <td>{{ $patient->patient_type }}</td>
                </tr>
                <tr>
                    <th scope="col">Age</th>
                    <td>{{ $patient->age }}</td>
                </tr>
                <tr>
                    <th scope="col">gender</th>
                    <td>{{ $patient->gender }}</td>
                </tr>
                <tr>
                    <th scope="col">Marital status(Oilaviy ahvoli)</th>
                    <td>{{ $patient->marital_status }}</td>
                </tr>
                <tr>
                    <th scope="col">blood_group</th>
                    <td>{{ $patient->blood_group }}</td>
                </tr>
                <tr>
                    <th scope="col">phone number</th>
                    <td>{{ $patient->phone }}</td>
                </tr>
                <tr>
                    <th scope="col">home_phone</th>
                    <td>{{ $patient->home_phone }}</td>
                </tr>
                <tr>
                    <th scope="col">father_name</th>
                    <td>{{ $patient->father_name }}</td>
                </tr>
                <tr>
                    <th scope="col">mother_name</th>
                    <td>{{ $patient->mother_name }}</td>
                </tr>
                <tr>
                    <th scope="col">payment_method</th>
                    <td>{{ $patient->payment_method }}</td>
                </tr>
                <tr>
                    <th scope="col">occupation</th>
                    <td>{{ $patient->occupation }}</td>
                </tr>
                <tr>
                    <th scope="col">home_address</th>
                    <td>{{ $patient->home_address }}</td>
                </tr>
                <tr>
                    <th scope="col">symptoms</th>
                    <td>{{ $patient->symptoms }}</td>
                </tr>
             </th>
         </table>
        </div>
    </div>

@endsection
