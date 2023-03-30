<div class="card-body">
    <div class="mb-3">
        <label for="name" class="form-label">Patient name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $patient->name}}">
    </div>
    <div class="mb-3">
        <label for="registration_date" class="form-label">Registration date</label>
        <input type="date" class="form-control" id="registration_date" name="registration_date"
               value="{{ old('registration_date') ??  $patient->registration_date}}">
    </div>
    <div class="mb-3">
        <label for="referral" class="form-label">Referral(Murojaat)</label>
        <input type="text" class="form-control" id="referral" name="referral"
               value="{{ old('referral') ??  $patient->referral}}">
    </div>
    <div class="mb-3">
        <label for="patient_type" class="form-label">patient_type</label>
        <input type="text" class="form-control" id="patient_type" name="patient_type"
               value="{{ old('patient_type')??  $patient->patient_type }}">
    </div>
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age" value="{{ old('age') ??  $patient->age}}">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender"
               value="{{ old('gender') ??  $patient->gender }}">
        <label class="form-check-label" for="gender">
            Male
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender" checked>
        <label class="form-check-label" for="gender">
            Famale
        </label>
    </div>
    <div class="mb-3">
        <label for="marital_status" class="form-label">Marital status(Oilaviy ahvoli)</label>
        <input type="text" class="form-control" id="marital_status" name="marital_status"
               value="{{ old('marital_status') ??  $patient->marital_status }}">
    </div>
    <div class="mb-3">
        <label for="blood_group" class="form-label">blood_group</label>
        <input type="text" class="form-control" id="blood_group" name="blood_group"
               value="{{ old('blood_group') ??  $patient->blood_group}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') ??  $patient->email}}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">phone number</label>
        <input type="phone" class="form-control" id="phone" name="phone" value="{{ old('phone') ??  $patient->phone}}">
    </div>
    <div class="mb-3">
        <label for="occupation" class="form-label">Occupation (Kasbi)</label>
        <input type="number" class="form-control" id="occupation" name="occupation"
               value="{{ old('occupation') ??  $patient->occupation}}">
    </div>
    <div class="mb-3">
        <label for="home_phone" class="form-label">home_phone</label>
        <input type="text" class="form-control" id="home_phone" name="home_phone"
               value="{{ old('home_phone') ??   $patient->home_phone}}">
    </div>
    <div class="mb-3">
        <label for="home_address" class="form-label">home_address</label>
        <input type="text" class="form-control" id="home_address" name="home_address"
               value="{{ old('home_address') ??  $patient->home_address}}">
    </div>
    <div class="mb-3">
        <label for="father_name" class="form-label">father_name</label>
        <input type="text" class="form-control" id="father_name" name="father_name"
               value="{{ old('father_name') ??  $patient->father_name}}">
    </div>
    <div class="mb-3">
        <label for="mother_name" class="form-label">mother_name</label>
        <input type="text" class="form-control" id="mother_name" name="mother_name"
               value="{{ old('mother_name') ??  $patient->mother_name}}">
    </div>
    <div class="mb-3">
        <label for="payment_method" class="form-label">payment_method</label>
        <input type="text" class="form-control" id="payment_method" name="payment_method"
               value="{{ old('payment_method') ??  $patient->payment_method}}">
    </div>
    <div class="mb-3">
        <label for="symptoms" class="form-label">symptoms</label>
        <input type="text" class="form-control" id="symptoms" name="symptoms"
               value="{{ old('symptoms') ??  $patient->symptoms}}">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ old('image') ??  $patient->image}}">
    </div>
</div>
