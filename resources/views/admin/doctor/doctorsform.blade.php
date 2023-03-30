<div class="card-body">
    <div class="mb-3">
        <label for="name" class="form-label">Doctor name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $doctor->name}}">
    </div>
    <div class="mb-3">
        <label for="referral" class="form-label">Address</label>
        <input type="text" class="form-control" id="referral" name="address"
               value="{{ old('address') ??  $doctor->address}}">
    </div>
    <div class="mb-3">
        <label for="specialists" class="form-label">Specialists</label>
        <input type="text" class="form-control" id="specialists" name="specialists"
               value="{{ old('specialists') ??  $doctor->specialists}}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="phone" class="form-control" id="phone" name="phone" value="{{ old('phone') ??  $doctor->phone}}">
    </div>
    <div class="mb-3">
        <label for="Graduated_university" class="form-label">Graduated_university </label>
        <input type="text" class="form-control" id="Graduated_university" name="Graduated_university"
               value="{{ old('Graduated_university') ??  $doctor->Graduated_university}}">
    </div>
    <div class="mb-3">
        <label for="experience" class="form-label">experience</label>
        <input type="text" class="form-control" id="experience" name="experience"
               value="{{ old('experience') ??   $doctor->experience}}">
    </div>
    <div class="mb-3">
        <div class="form-group row">
            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

            <div class="col-md-6">
                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                       accept="image/*"  value="{{ old('image') ??   $doctor->image}}">

                @error('image')
                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                @enderror
            </div>
        </div>
    </div>
</div>
