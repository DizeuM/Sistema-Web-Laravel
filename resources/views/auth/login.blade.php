@extends('layouts.index')

@section('title', 'Login')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-4 ">

            <div class="card">
                <h3 class="card-header">Login</h3>
                <div class="card-body">

                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        
                        <div class="form-floating mb-3">

                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Usuário" autocomplete="username" required>
                            <label for="username">Usuário</label>

                            <!-- <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Usuário" autocomplete="username" required autofocus> -->

                            <!-- @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror -->

                        </div>
                        <div class="form-floating mb-3">

                            <input type="password" class="form-control" name="password" placeholder="Senha" autocomplete="current-password" required>
                            <label for="password">Senha</label>

                            <!-- <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha" autocomplete="current-password" required> -->

                            <!-- @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror -->

                        </div>
                        <div>
                            <input type="submit" class="w-100 btn btn-primary" name="submit" value="Entrar">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
