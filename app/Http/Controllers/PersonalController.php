<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonal;
use App\Models\Gender;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personals = Personal::orderBy('id', 'desc')->paginate();
        return view('administrator.personals.index', compact('personals'));
    }

    public function create()
    {
        $genders = Gender::all();
        return view('administrator.personals.create', compact('genders'));
    }

    public function store(StorePersonal $request)
    {
        Personal::create($request->all());
        session()->flash('msg', 'Personal Agregado Correctamente');
        return redirect()->route('personals.index');
    }

    public function edit(Personal $personal)
    {
        $genders = Gender::all();
        return view('administrator.personals.edit', compact('personal'), compact('genders'));
    }

    public function update(Personal $personal, Request $request)
    {
        $request->validate([
            'document' => 'required|max:10|unique:personals,document,'.$personal->id,
            'first_name' => 'required',
            'first_last_name' => 'required',
            // 'email' => 'unique:personals',
            'gender_id' => 'required'
        ]);

        $personal->update($request->all());
        session()->flash('msg', 'Personal Editado Correctamente');
        return redirect()->route('personals.index');
    }

    public function destroy(Personal $personal) {
        $personal->delete();
        session()->flash('msg', 'Personal Eliminado Correctamente');
        return redirect()->route('personals.index');
    }
}
