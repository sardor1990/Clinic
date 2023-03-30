<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;

use function redirect;
use function view;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $patients = Patient::orderByDesc('created_at')->paginate(20);
        return view('admin.patients.index', [
            'patients' => $patients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $patient = new Patient();
        return view('admin.patients.create',[
            'patient' => $patient
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePatientRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePatientRequest $request)
    {
        $patient = Patient::create($request->validated());
        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    /*public function show( $patient)
    {
        $patient = Patient::findOrFail($patient);
        return view('patients.show', [
            'patient' => $patient
        ]);
    }
*/
    public function show( Patient $patient)
    {
        return view('admin.patients.show', [
            'patient' => $patient
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', [
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePatientRequest $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePatientRequest  $request, Patient $patient)
    {
        $patient ->update($request->validated());
        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patient.index');
    }
}
