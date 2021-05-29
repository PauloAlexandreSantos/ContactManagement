@extends('layouts.merge')

@section('titulo', 'Visualizar Contacto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Visualizar de Contacto</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="id" class="form-label">Identificador</label>
                                <input type="text" class="form-control" name="id" value="{{ $contact->id }}" disabled>

                            </div>
                            <div class="col-md-4">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="name" value="{{ $contact->name }}" disabled>

                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ $contact->email }}"
                                    disabled>

                            </div>
                            <div class="col-md-4">
                                <label for="contact" class="form-label">Contacto</label>
                                <input type="number" class="form-control" id="contact" value="{{ $contact->contact }}"
                                    disabled>

                            </div>
                            <div class="col-md-4">
                                <label for="created_at" class="form-label">Data de Criação</label>
                                <input type="text" class="form-control" id="created_at" value="{{ $contact->created_at }}"
                                    disabled>

                            </div>
                            <div class="col-md-4">
                                <label for="updated_at" class="form-label">Última actualização</label>
                                <input type="text" class="form-control" id="updated_at" value="{{ $contact->updated_at }}"
                                    disabled>

                            </div>

                            <div class="col-md-12 text-center mt-4">
                                <a class="btn btn-dark col-md-2"
                                    href='{{ url("/contact/edit/{$contact->id}") }}'>Editar</a>
                                <a class="btn btn-danger col-md-2"
                                    href='{{ url("/contact/delete/{$contact->id}") }}'>Eliminar</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


    @endsection
