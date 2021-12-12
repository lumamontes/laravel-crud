@extends('layouts.default')

@section('conteudo')
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div>
            <a href="{{ url('/') }}" class="navbar-brand">CRUD - Laravel</a>
        </div>
        <div>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="{{ url('/produtos/listar') }}" class="nav-link">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/categorias/listar') }}" class="nav-link">Categorias</a>
                </li>
            </ul>
        </div>
    </nav>
<div class="flex-center position-ref full-height">
    <div class="categories-container">
        <div class="spaced-contend">
            <h1>Categorias</h1>
            <button type="button" class="btn btn-success btn-sm">+ Adicionar</button>
        </div>
            <table class="table">
                <thead>
                <tr>
                    <th  scope="col">#</th>
                    <th  scope="col">Nome</th>
                    <th  scope="col">Descrição</th>
                    <th  scope="col">Ações</th>
                </tr>
                </thead>
                @forelse ($categories as $categorie)
                    <tbody>
                    <tr class="table-light">
                        <th scope="row">
                            {{$categorie->id}}
                        </th>
                        <td scope="row">
                            {{$categorie->name}}
                        </td>
                        <td scope="row">
                            {{isset($categorie->description) ? $categorie->description : '-'}}
                        </td>
                        <td scope="row">
                                <button class="btn btn-info btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Deletar</button>
                        </td>
                    </tr>
                    </tbody>
                @empty
            </table>
                Não encontramos registros.
            @endforelse
    </div>
</div>
@stop