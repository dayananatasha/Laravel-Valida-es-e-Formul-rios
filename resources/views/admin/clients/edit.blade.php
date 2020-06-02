@extends('layouts.layout')

@section('content')
    <h3>Editar cliente</h3>
    @include('admin.clients._form_error')
    <form method="post" action="{{ route('clients.update', ['client' => $client->id])}}">
        {{method_field('PUT')}}
        @include('admin.clients._form')
        <button type="submit" class="btn btn_default">Salvar</button>
    </form>

@endsection
