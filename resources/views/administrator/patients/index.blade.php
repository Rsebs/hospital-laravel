@extends('layouts.template')

@section('title', 'Pacientes')

@section('content')
    <main class="container">
        <div class="card">
            <div class="card-header bg-color-primary">
                <p class="m-0">Pacientes</p>
            </div>
            <div class="card-body">
                <a href="{{ route('patients.create') }}" class="btn btn-primary">
                    <img src="#" alt="image add">
                    <p class="d-inline-block mx-2 my-0">Agregar Paciente</p>
                </a>
                <div id="alert"></div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mt-3">
                        <thead class="table-light">
                            <tr>
                                <th>Número de documento</th>
                                <th>Nombre</th>
                                <th>Género</th>
                                <th>Email</th>
                                <th>Número de teléfono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $p)
                                <tr>
                                    <td>{{ $p->document }}</td>
                                    <td>{{ $p->first_name }} {{ $p->second_name }} {{ $p->first_last_name }}
                                        {{ $p->second_last_name }} </td>
                                    <td>{{ $p->gender_id }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->contact_number }}</td>
                                    <td class="d-flex flex-sm-column flex-lg-row gap-2">
                                        <a href="#" title="Crear Factura" class="btn btn-secondary">
                                            <img src="#" alt="image add">
                                        </a>
                                        <a href="{{ route('patients.edit', $p->id) }}" title="Editar Paciente"
                                            class="btn btn-success">
                                            <img src="#" alt="image edit">
                                        </a>
                                        <form action="{{ route('patients.destroy', $p) }}" method="POST"
                                            data-type-form="delete">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" title="Eliminar Paciente" class="btn btn-danger">
                                                <img src="#" alt="image remove">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="text-center" colspan="6">Aún no hay datos</td>
                            </tr>
                        </tbody>
                    </table>
                    {{ $patients->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
