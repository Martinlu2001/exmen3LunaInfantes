@extends('layout')

@section('title', 'Cliente | ' . $cliente->name)

@section('content')

<table cellpadding="3" cellspacing="5" class="table table-bordered" style="display:flex;"> 
    
    <tr>
        <th>Nombre: </th>
        <td colspan="5">{{$cliente->name}} </td>
    </tr>

    <tr>
        <th>Email: </th>
        <td colspan="5">{{$cliente->email}}</td>
    </tr>

    <tr>
        <th>Direccion: </th>
        <td colspan="5">{{$cliente->direccion}}</td>
    </tr>

    <tr>
        <th>Telefono: </th>
        <td colspan="5">{{$cliente->telefono}}</td>
    </tr>

    <tr>
        <td><a class="btn btn-primary" href="{{route('clientes.edit', $cliente)}}" style="color:white !important;">Editar</a></td>
        <td colspan="2">
            <form action="{{route('clientes.destroy', $cliente)}}" method="post">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
</table>

@endsection
