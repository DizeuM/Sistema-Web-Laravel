@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-header d-flex">

                    <h3 class="col">Produto</h3>

                    @haspermission('product-edit')
                    <a href="{{ route('products.edit', ['product'=> $product -> id])}}" class="btn btn-primary col-auto">Editar</a>
                    @endhaspermission
                </div>

                <div class="card-body">

                    <form>
                        <div class="row g-3 mb-3">

                            <div class="col-2">
                                <label for="id" class="form-label">Código</label>
                                <input type="text" class="form-control" name="id" placeholder="Id" value="{{ $product -> id}}" disabled readonly>
                            </div>

                            <div class="col">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $product -> nome}}" disabled readonly>
                            </div>

                            <div class="col-2">
                                <label for="quantidade" class="form-label">Quantidade</label>
                                <input type="text" class="form-control" name="quantidade" placeholder="Quantidade" value="{{ $product -> quantidade}}" disabled readonly>
                            </div>
                        </div>

                        <div class="row g-3 ">

                            <div class="col-4">
                                <label for="categoria" class="form-label">Categoria</label>
                                <input type="text" class="form-control" name="categoria" placeholder="Categoria" value="{{ $product -> category -> nome}}" disabled readonly>
                            </div>

                            <div class="col">
                                <label for="fornecedor" class="form-label">Fornecedor</label>
                                <input type="text" class="form-control" name="fornecedor" placeholder="Fornecedor" value="{{ $product -> supplier -> nome}}" disabled readonly>
                            </div>

                            <div class="col-2">
                                <label for="preco" class="form-label">Preço</label>
                                <div class="input-group">
                                <span class="input-group-text" id="basic-addon1" >R$</span>
                                <input type="text" class="form-control" name="preco" placeholder="Preço" value="{{ $product -> valor}}" disabled readonly>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
