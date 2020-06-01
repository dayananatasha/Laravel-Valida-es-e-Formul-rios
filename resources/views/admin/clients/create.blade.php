@extends('layouts.layout')

@section('content')
    <h3>Novo cliente</h3>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all(); as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="post" action="/admin/clients">
        @include('admin.clients._form')
        <button type="submit" class="btn btn_default">Criar</button>
    </form>

@endsection
