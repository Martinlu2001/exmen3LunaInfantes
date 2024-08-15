@extends('layout')

@section('title', 'Crear cliente')

@section('content')

<table cellpadding="3" cellspacing="5" class="table table-bordered" style="display:flex;" >
    <tr>
        <th colspan="4">Crear nuevo cliente</th>
    </tr>
    @include('partials.validations-errors')
    <form action="{{route('clientes.store')}}" method="post" enctype="multipart/form-data">
        @include('partials.form', ['btnText'=> 'Guardar'])
    </form>
</table>
@endsection