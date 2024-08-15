@extends('layout')

@section('title', 'Editar cliente')

@section('content')

<table cellpading="3" cellspacing="5" class="table table-bordered" style="display:flex;">
    
    <tr>
        <th colspan="4">Editar Cliente</th>
    </tr>
   
    @include('partials.validations-errors')
    <form action="{{route('clientes.update', $cliente)}}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @include('partials.form', ['btnText'=> 'Actualizar'])
    </form>
</table>

@endsection