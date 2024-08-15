@csrf

<tr>
    <th>Nombre</th>
    <td><input type="text" name="name" value="{{old('name', $cliente->name)}}"></td>
</tr>

<tr>
    <th>Email</th>
    <td><input type="text" name="email" value="{{old('email', $cliente->email)}}"></td>
</tr>

<tr>
    <th>Direccion</th>
    <td><input type="text" name="direccion" value="{{old('direccion', $cliente->direccion)}}"></td>
</tr>

<tr>
    <th>Telefono</th>
    <td><input type="text" name="telefono" value="{{old('telefono', $cliente->telefono)}}"></td>
</tr>

<tr>
    <td colspan="2" align="center"><button  class="btn btn-primary">{{$btnText}}</button></td>
</tr>