@extends('layout')

@section('title', 'Clientes')

@section('content')


<table class="table" style="display:flex;">
    <tr>
        <td colspan="4">
            <a class="btn btn-primary" href="{{route('clientes.create')}}"  role="button" style="color:white !important;">+  Nuevo cliente</a>
        </td>
    </tr>
</table>

<h2 style="text-align:center;">Listado de clientes</h2>

<table class="table table-bordered" style="display:flex;"> 
    <tr>
        @if($clientes)
            @foreach($clientes as $cliente)
                <td><a href="{{route('clientes.show', $cliente)}}">{{ $cliente->name}}</a></td>
            @endforeach
        @else
            <td colspan="4">No hay clientes que mostrar</td>
        @endif
    </tr>
    <tr>
        <td colspan="4">{{$clientes->links('pagination::bootstrap-5')}}</td>
    </tr>
</table>

@endsection