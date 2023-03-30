<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Doctor;

use function redirect;
use function view;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $doctors = Doctor::orderByDesc('created_at')->paginate(20);
        return view('admin.doctor.index', [
            'doctors' => $doctors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $doctor = new Doctor();
        return view('admin.doctor.create',[
            'doctor' => $doctor
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreDoctorRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreDoctorRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required',
            'specialists' => 'required',
            'phone' => 'required',
            'Graduated_university'=>'required',
            'experience'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $doctor = Doctor::create($validatedData);

        return redirect()->route('doctors.index', ['doctor' => $doctor->id])->with('success', 'Doctor created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Doctor $doctor)
    {
        return view('admin.doctor.show', [
            'doctor' => $doctor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Doctor $doctor)
    {
        return view('admin.doctor.edit', [
            'doctor' => $doctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateDoctorRequest $request
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $validatedData = $request->validated();

        // Update the doctor's fields
        $doctor->name = $validatedData['name'];
        $doctor->address = $validatedData['address'];
        $doctor->specialists = $validatedData['specialists'];
        $doctor->phone = $validatedData['phone'];
        $doctor->Graduated_university = $validatedData['Graduated_university'];
        $doctor->experience = $validatedData['experience'];

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $oldImage = $doctor->image;
            $doctor->image = $imageName;
            if ($oldImage) {
                unlink(public_path('img/'.$oldImage));
            }
        }

        // Save the updated doctor record
        $doctor->save();

        return redirect()->route('doctors.show', ['doctor' => $doctor->id])->with('success', 'Doctor Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctors.index')
            ->with('success', 'Doctor deleted successfully');
    }
}
