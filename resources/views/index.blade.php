@extends('layouts.template')

@section('title', 'Inicio')
@section('content')
    <main class="container">
        <div class="card">
            <div class="card-header bg-color-primary">
                <p class="m-0">Facturas</p>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">
                    <img src="#" alt="image add">
                    <p class="d-inline-block mx-2 my-0">Crear una Factura</p>
                </a>
                <div id="alert"></div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mt-3">
                        <thead class="table-light">
                            <tr>
                                <th>ID Factura</th>
                                <th>Paciente</th>
                                <th>Doctor Responsable</th>
                                <th>Receta</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>(Documento) Sebastian Ruiz</td>
                                <td>(Documento) Juan Ruiz</td>
                                <td>Loratadina (Cantidad)</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                <td class="d-flex flex-sm-column flex-lg-row gap-2">
                                    <a href="seeBill.php?ordered_id=#" title="Ver Factura" class="btn btn-primary">
                                        <img src="#" alt="image edit">
                                    </a>
                                    <form action="index.php" method="POST" data-type-form="delete">
                                        <input type="hidden" name="ordered_id" value="#">
                                        <button type="submit" title="Borrar Factura" class="btn btn-danger">
                                            <img src="#" alt="image remove">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="6">Aún no hay datos</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
