@extends('layouts.app')

@section('title', 'Inventário')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-header d-flex">

                    <h3 class="col">Produtos</h3>    

                    @haspermission('product-create')
                    <a href="{{ route('products.create') }}" class="btn btn-success col-auto">Cadastrar</a>
                    @endhaspermission
                </div>

                <div class="card-body">

                @if(empty($products))
                <div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>
            
                @else
                    <table class="table table-hover ">

                        <thead>
                            <tr class="no-top-border">
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                                <th>Categoria</th>
                                <th>Valor</th>
                                <th>ㅤ</th>
                            </tr>
                        </thead>

                        <tbody>

                        @foreach($products as $product)

                            <tr class="table-row" data-href="{{ route('products.show', ['product'=> $product -> id]) }}">
                                <td> {{ $product -> id}} </td>
                                <td> {{ $product -> nome}} </td>
                                <td> {{ $product -> quantidade}} </td>
                                <td> {{ $product -> category -> nome }} </td>
                                <td> {{ $product -> valor}} </td>

                                
                                <td> <a href="{{ route('products.show', ['product'=> $product -> id]) }}" class="btn btn-primary btn-sm" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                    </svg>
                                </a></td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
