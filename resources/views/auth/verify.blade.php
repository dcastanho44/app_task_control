@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Precisamos que você valide seu e-mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Um novo e-mail com link de verificação foi enviado
                        </div>
                    @endif

                    Antes de prosseguir, por favor valide sua conta por meio do link de verificação que encaminhamos para seu e-mail.
                    Caso você não tenha recebido o e-mail de verificação,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">clique aqui para receber um novo e-mail</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
