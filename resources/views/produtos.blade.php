@extends('layouts.default')
@section('conteudo')
<div class="flex-center position-ref full-height">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div>
            <a href="{{ url('/') }}" class="navbar-brand">  CRUD - Laravel</a>
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
    <div class="product-container">
        <div class="spaced-contend">
            <h1>Produtos</h1>
            <button type="button" class="btn btn-success btn-sm">+ Adicionar</button>
        </div>
            <table class="table">
                <thead>
                <tr>
                    <th  scope="col">#</th>
                    <th  scope="col">Nome</th>
                    <th  scope="col">Preço</th>
                    <th  scope="col">Categoria</th>
                    <th  scope="col">Descrição</th>
                    <th  scope="col">Ações</th>
                </tr>
                </thead>
                @forelse ($produtos as $produto)
                    <tbody>
                    <tr class="table-light">
                        <th scope="row">
                            {{$produto->id}}
                        </th>
                        <td scope="row">
                            {{$produto->name}}
                        </td>
                        <td scope="row">
                            {{$produto->price}}
                        </td>
                        <td scope="row">
                            {{$produto->category_id}}
                        </td>
                        <td scope="row">
                            {{isset($produto->description) ? $produto->description : '-'}}
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
       

