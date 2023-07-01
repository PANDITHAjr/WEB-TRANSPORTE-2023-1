@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('tipopersonal.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
        </div>
        <div class="col s8">
            <h5>LISTA DE TIPOS PERSONALES</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tipopersonales as $tipopersonal)
                            <tr>
                                <td>{{ $tipopersonal->id }}</td>
                                <td>{{ $tipopersonal->descripcion }}</td>
                                <td>
                                    <a href="{{ route('tipopersonal.show', [$tipopersonal->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    <a href="{{ route('tipopersonal.edit', [$tipopersonal->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    <a href="{{ route('tipopersonal.destroy', [$tipopersonal->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection