@extends('layouts.template')


@section('title', 'Edita personal')

@section('content')
    <main>
        <form action="{{ route('personals.update', $personal) }}" method="POST" class="container">
            @csrf
            @method('put')
            <h1 class="fs-2 text-center">Edita Personal</h1>
            <div class="mt-4">
                <div class="row">
                    <div class="input-group mb-4 col-lg">
                        <label for="first_name" class="input-group-text">Nombres</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Primero"
                            value="{{ old('first_name', $personal->first_name) }}">
                        <input type="text" name="second_name" id="second_name" class="form-control" placeholder="Segundo"
                            value="{{ old('second_name', $personal->second_name) }}">
                        @error('first_name')
                            *{{ $message }}
                        @enderror
                    </div>
                    <div class="input-group mb-4 col-lg">
                        <label for="first_last_name" class="input-group-text">Apellidos</label>
                        <input type="text" name="first_last_name" id="first_last_name" class="form-control"
                            placeholder="Primero" value="{{ old('first_last_name', $personal->first_last_name) }}">
                        <input type="text" name="second_last_name" id="second_last_name" class="form-control"
                            placeholder="Segundo" value="{{ old('second_last_name', $personal->second_last_name) }}">
                        @error('first_last_name')
                            *{{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-group mb-4 col-lg">
                        <label for="document" class="input-group-text">Documento</label>
                        <input type="text" name="document" id="document" class="form-control"
                            placeholder="Número de Documento" value="{{ old('document', $personal->document) }}">
                        @error('email')
                            *{{ $message }}
                        @enderror
                    </div>
                    <div class="input-group mb-4 col-lg">
                        <label class="input-group-text" for="gender">Género</label>
                        <select class="form-select" name="gender_id" id="gender">
                            <option value="" selected disabled>-- Selecciona --</option>
                            @foreach ($genders as $g)
                                <option value="{{ $g->id }}"
                                    {{ $personal->gender_id === $g->id ? 'selected' : '' }}>{{ $g->name }}</option>
                            @endforeach
                        </select>
                        @error('gender_id')
                            *{{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-group mb-4 col-lg">
                        <label for="email" class="input-group-text">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="Correo Electrónico" value="{{ old('email', $personal->email) }}">
                    </div>
                    <div class="input-group mb-4 col-lg">
                        <label for="contact_number" class="input-group-text">Número de Teléfono</label>
                        <input type="tel" name="contact_number" id="contact_number" class="form-control"
                            placeholder="Puede ser fijo o móvil"
                            value="{{ old('contact_number', $personal->contact_number) }}">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-4 mt-3">
                <button type="submit" class="btn btn-success w-25">Editar</button>
                <a href="{{ route('personals.index') }}" class="btn btn-danger w-25">Cancelar</a>
            </div>
        </form>
    </main>
@endsection
