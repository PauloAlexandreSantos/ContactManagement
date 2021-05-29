@extends('layouts.merge')

@section('titulo', 'Criar Contacto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Criar Contacto</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3 needs-validation" action="{{ route('site.contact.store') }}" method="post">
                            @csrf
                            @include('forms._formContact.index')
                            
                            <div class="col-md-12 text-center">
                                <button class="btn btn-dark col-md-3" type="submit">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>






@endsection
