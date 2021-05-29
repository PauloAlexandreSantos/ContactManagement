@extends('layouts.merge')

@section('titulo', 'Editar Contacto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Editar Contacto de {{$contact->name}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" action='{{ url("/contact/update/{$contact->id}") }}' method="post">
                            @csrf
                            @method('put')
                            @include('forms._formContact.index')
                            
                            <div class="col-md-12 text-center">
                                <button class="btn btn-dark col-md-3" type="submit">Salvar Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
