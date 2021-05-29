@extends('layouts.merge')

@section('titulo', 'Lista de Contactos')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Lista de Contactos</h3>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-2">
                <table class="table table-bordered border-dark table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th class="text-center">Contactos</th>
                            <th class="text-center">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td class="text-center">{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td class="text-center">{{ $contact->contact }}</td>
                                <td class="text-center">

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">

                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item"
                                                    href='{{ url("/contact/details/{$contact->id}")}}'>Visualizar</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href='{{ url("/contact/edit/{$contact->id}") }}'>Editar</a></li>
                                            <li><a class="dropdown-item"
                                                    href='{{ url("/contact/delete/{$contact->id}") }}'>Eliminar</a></li>
                                        </ul>
                                    </div>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>

@endsection
