@extends('layouts.public')

@section('title', 'Ophtamuls - Pacientes')

@section('content')       
    <h2 style="text-align: left; margin-top: 2%; margin-left: 5%; color: #20B2AA">Pacientes</h2>
    <hr style="margin-left: 5%; margin-top: 1%; margin-bottom: 1%; width: 90%;"class="linha-home">

    <div class="card" style="width: 90%; margin-left: 5%">
        <div class="card-header d-flex justify-content-between align-items-center" style="background-color:#20B2AA; color: white;">
            <a href="{{ 'pacientes/criar '}}" class="btn btn-light"><span class="material-symbols-outlined" style="vertical-align: bottom">add</span> Novo Paciente</a>
            <form class="d-flex" role="search" action="{{route('pacientes.list')}}" method="GET">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name='search' value="{{$search}}">
                <button class="btn btn-light" type="submit"><span class="material-symbols-outlined" style="vertical-align: bottom">
                search
                </span></button>
            </form>
        </div>

        <div class="card-body">
            <table class="table table-hover text-center align-middle table-sm">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                <tr>
                    <td scope="row">{{$paciente->id}}</td>
                    <td scope="row">{{$paciente->nome}}</td>
                    <td scope="row">{{$paciente->telefone}}</td>
                    <td>
                        <a href="{{ route('pacientes.editar', $paciente -> id) }}" class="link-secondary"><span class="material-symbols-outlined fs-4">edit_square</span></a>
                        <a href="#" class="link-secondary"><span class="material-symbols-outlined fs-4">
                            visibility
                            </span></a>
                        <a href="#" class="link-secondary"><span class="material-symbols-outlined fs-4">
                            delete
                            </span></a>
                    </td>
                </tr>
                @endforeach
                
            
                </tbody>
            </table>
            {{ $pacientes->onEachSide(2)->links('layouts.pagination') }}
        </div>
    </div>

    <hr style="margin-left: 5%; margin-top: 1%; margin-bottom: 1%; width: 90%;"class="linha-home">



@endsection