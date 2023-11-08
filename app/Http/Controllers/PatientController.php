<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatient;
use App\Models\Gender;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::orderBy('id', 'desc')->paginate();
        return view('administrator.patients.index', compact('patients'));
    }

    public function create()
    {
        $genders = Gender::all();
        return view('administrator.patients.create', compact('genders'));
    }

    public function store(StorePatient $request)
    {
        // Importante crear el array $fillable en el modelo para indicarle a Eloquent qué campos se van a llenar
        Patient::create($request->all());
        return redirect()->route('patients.index')->with('msg', 'Paciente Agregado Correctamente');
    }

    public function edit(Patient $patient)
    {
        $genders = Gender::all();

        return view('administrator.patients.edit', compact('patient'), compact('genders'));
    }

    public function update(Patient $patient, Request $request)
    {

        $request->validate([
            'document' => 'required|max:10|unique:personals,document,' . $patient->id,
            'first_name' => 'required',
            'first_last_name' => 'required',
            'gender_id' => 'required'
        ], [
            'document.required' => 'El documento es obligatorio',
            'first_name.required' => 'El primer nombre es obligatorio',
            'first_last_name.required' => 'El primer apellido es obligatorio',
            'gender_id' => 'El género es obligatorio'
        ], [
            'first_name' => 'primer nombre',
            'first_last_name' => 'primer apellido',
            'gender_id' => 'género'
        ]);

        /* 
        $patient->document = $request->document;
        $patient->first_name = $request->first_name;
        $patient->second_name = $request->second_name;
        $patient->first_last_name = $request->first_last_name;
        $patient->second_last_name = $request->second_last_name;
        $patient->gender_id = $request->gender_id;
        $patient->email = $request->email;
        $patient->contact_number = $request->contact_number;

        $patient->save();
        */

        $patient->update($request->all());

        return redirect()->route('patients.index')->with('msg', 'Paciente Editado Correctamente');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')->with('msg', 'Paciente Eliminado Correctamente');
    }
}
