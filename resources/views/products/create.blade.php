@extends('layouts.app')

@section('title', 'Editar Produto')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">

                <div class="card-header d-flex">

                    <h3 class="col">Produto</h3>    

                    <!-- <a href="#" class="btn btn-success col-auto">Salvar</a> -->
                    <input type="submit" form="createProduct" class="btn btn-success col-auto" name="submit" value="Salvar">
                </div>

                <div class="card-body ">

                    <form id="createProduct" action="{{ route('products.store')}}" method="post">
                        @csrf

                        <!-- @method('put') -->
                        
                        <div class="row g-3 mb-3">

                            <div class="col-2">
                                <label for="id" class="form-label">Código</label>
                                <input type="text" class="form-control" name="id" placeholder="Id" value="" disabled readonly>
                            </div>

                            <div class="col">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" placeholder="Nome" value="">
                            </div>

                            <div class="col-2">
                                <label for="quantidade" class="form-label">Quantidade</label>
                                <input type="text" class="form-control" name="quantidade" placeholder="Quantidade" value="">
                            </div>
                        </div>

                        <div class="row g-3">

                            <div class="col-4">
                                <label for="categoria" class="form-label">Categoria</label>

                                <select class="form-select"  name="categoria">
                                    <option value="0" selected hidden >Categoria</option>

                                    @foreach ($categories as $category)
                                    <option value="{{ $category -> id }}">
                                        {{ $category -> nome }}
                                    </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col">
                                <label for="fornecedor" class="form-label">Fornecedor</label>

                                <select class="form-select"  name="fornecedor">
                                    <option value="0" selected hidden >Fornecedor</option>

                                    @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier -> id }}">
                                        {{ $supplier -> nome }}
                                    </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col-2">
                                <label for="valor" class="form-label">Preço</label>
                                <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">R$</span>
                                <input type="text" class="form-control" name="valor" placeholder="Preço" value="">
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
