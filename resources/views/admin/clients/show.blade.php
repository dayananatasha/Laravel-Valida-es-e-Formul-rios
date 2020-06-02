@extends('layouts.layout')

@section('content')
    <h3>Ver Client</h3>
    <br/><br/>
    <a class="btn btn-default" href="{{ route('clients.edit')}}">Editar</a>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$client->id}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$client->name}}</td>
        </tr>
        <tr>
            <th scope="row">Documento</th>
            <td>{{$client->document_number}}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{$client->email}}</td>
        </tr>
        <tr>
            <th scope="row">Telefone</th>
            <td>{{$client->phone}}</td>
        </tr>
        <tr>
            <th scope="row">Estado Civil</th>
            <td>{{$client->date_birth}}</td>
        </tr>
        <tr>
            <th scope="row">Sexo</th>
            <td>{{$client->sex}}</td>
        </tr>
        <tr>
            <th scope="row">Def. Física</th>
            <td>{{$client->physical_disability}}</td>
        </tr>
        <tr>
            <th scope="row">Inadimplente</th>
            <td>{{$client->defaulter}}</td>
        </tr>
        </tbody>
    </table>
@endsection
